<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use RuntimeException;

class EmbeddingService
{
    protected string $baseUrl;
    protected string $model;

    public function __construct()
    {
        $this->baseUrl = config('services.ollama.url', 'http://localhost:11434');
        $this->model = config('services.ollama.embedding_model', 'nomic-embed-text');
    }

    /**
     * Genera el vector de embedding de un texto.
     *
     * @return array<float>
     */
    public function embed(string $text): array
    {
        $response = Http::timeout(30)->post("{$this->baseUrl}/api/embeddings", [
            'model' => $this->model,
            'prompt' => $text,
        ]);

        if ($response->failed()) {
            throw new RuntimeException('No se pudo generar el embedding: '.$response->body());
        }

        $embedding = $response->json('embedding');

        if (! is_array($embedding)) {
            throw new RuntimeException('Respuesta inesperada de Ollama al generar embedding.');
        }

        return $embedding;
    }

    /**
     * Genera embeddings para varios textos a la vez.
     *
     * @param  array<string>  $texts
     * @return array<array<float>>
     */
    public function embedMany(array $texts): array
    {
        return array_map(fn (string $text) => $this->embed($text), $texts);
    }
}
