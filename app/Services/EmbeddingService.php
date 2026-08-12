<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use RuntimeException;

class EmbeddingService
{
    public function embed(string $text): array
    {
        $response = Http::baseUrl(config('services.ollama.url'))
            ->timeout(30)
            ->post('/api/embed', [
                'model' => config('services.ollama.embedding_model'),
                'input' => $text,
            ])
            ->throw();

        $embedding = $response->json('embeddings.0');

        if (! is_array($embedding) || count($embedding) !== 768) {
            throw new RuntimeException('Ollama no devolvió un embedding válido de 768 dimensiones.');
        }

        return $embedding;
    }
}
