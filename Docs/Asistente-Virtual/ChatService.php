<?php

namespace App\Services;

use App\Models\KnowledgeChunk;
use Illuminate\Support\Facades\Http;
use RuntimeException;

class ChatService
{
    protected string $baseUrl;
    protected string $model;

    public function __construct(protected EmbeddingService $embeddings)
    {
        $this->baseUrl = config('services.ollama.url', 'http://localhost:11434');
        $this->model = config('services.ollama.chat_model', 'qwen2.5:3b');
    }

    /**
     * Responde una pregunta usando RAG: busca contexto relevante en la base
     * vectorizada y se lo pasa al modelo de Ollama para que redacte la respuesta.
     *
     * @return array{answer: string, sources: array}
     */
    public function ask(string $question, int $contextChunks = 5): array
    {
        $queryEmbedding = $this->embeddings->embed($question);

        $chunks = KnowledgeChunk::nearest($queryEmbedding, $contextChunks);

        if ($chunks->isEmpty()) {
            return [
                'answer' => 'No tengo información suficiente para responder eso. Te recomiendo contactar directamente a la universidad.',
                'sources' => [],
            ];
        }

        $context = $chunks->map(fn ($chunk) => "- {$chunk->content}")->implode("\n");

        $prompt = <<<PROMPT
        Eres el asistente virtual de la universidad. Responde ÚNICAMENTE basándote en el
        siguiente contexto. Si la respuesta no está en el contexto, dilo claramente y sugiere
        contactar a la universidad. Responde en español, de forma breve, clara y amable.

        Contexto:
        {$context}

        Pregunta: {$question}

        Respuesta:
        PROMPT;

        $response = Http::timeout(60)->post("{$this->baseUrl}/api/generate", [
            'model' => $this->model,
            'prompt' => $prompt,
            'stream' => false,
        ]);

        if ($response->failed()) {
            throw new RuntimeException('No se pudo generar la respuesta: '.$response->body());
        }

        return [
            'answer' => trim((string) $response->json('response')),
            'sources' => $chunks->pluck('source')->filter()->unique()->values()->all(),
        ];
    }
}
