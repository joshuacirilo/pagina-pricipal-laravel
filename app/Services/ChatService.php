<?php

namespace App\Services;

use App\Models\KnowledgeChunk;
use Illuminate\Support\Facades\Http;

class ChatService
{
    public function __construct(private readonly EmbeddingService $embeddings) {}

    /** @return array{answer: string, sources: array<int, string>} */
    public function ask(string $question, int $contextChunks = 5): array
    {
        $chunks = KnowledgeChunk::nearest($this->embeddings->embed($question), $contextChunks);

        if ($chunks->isEmpty()) {
            return [
                'answer' => 'No tengo información suficiente para responder esa pregunta. Te recomiendo contactar directamente a la universidad.',
                'sources' => [],
            ];
        }

        $context = $chunks->map(fn (KnowledgeChunk $chunk): string => "- {$chunk->content}")->implode("\n\n");
        $prompt = <<<PROMPT
Eres el asistente virtual de la universidad. Responde únicamente basándote en el contexto proporcionado. Si la respuesta no está allí, indícalo claramente y sugiere contactar a la universidad. Responde en español, de forma breve, clara y amable.

Contexto:
{$context}

Pregunta: {$question}

Respuesta:
PROMPT;

        $response = Http::baseUrl(config('services.ollama.url'))
            ->timeout(90)
            ->post('/api/generate', [
                'model' => config('services.ollama.chat_model'),
                'prompt' => $prompt,
                'stream' => false,
            ])
            ->throw();

        return [
            'answer' => trim((string) $response->json('response')),
            'sources' => $chunks->pluck('source')->filter()->unique()->values()->all(),
        ];
    }
}
