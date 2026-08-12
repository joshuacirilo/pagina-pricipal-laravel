<?php

namespace App\Console\Commands;

use App\Models\KnowledgeChunk;
use App\Services\EmbeddingService;
use Illuminate\Console\Command;

class IngestKnowledge extends Command
{
    protected $signature = 'knowledge:ingest {path : Ruta a la carpeta con archivos .txt o .md} {--category= : Categoria opcional para todos los archivos de esta corrida}';

    protected $description = 'Trocea archivos de texto, genera sus embeddings con Ollama y los guarda en knowledge_chunks';

    public function handle(EmbeddingService $embeddings): int
    {
        $path = rtrim((string) $this->argument('path'), '/');
        $category = $this->option('category');

        if (! is_dir($path)) {
            $this->error("La carpeta {$path} no existe.");

            return self::FAILURE;
        }

        $files = array_merge(
            glob("{$path}/*.txt") ?: [],
            glob("{$path}/*.md") ?: [],
        );

        if (empty($files)) {
            $this->warn('No se encontraron archivos .txt o .md en esa carpeta.');

            return self::SUCCESS;
        }

        $this->info(count($files).' archivo(s) encontrado(s). Iniciando ingesta...');
        $bar = $this->output->createProgressBar(count($files));

        $totalChunks = 0;

        foreach ($files as $file) {
            $content = file_get_contents($file);
            $chunks = $this->splitIntoChunks($content ?: '');

            foreach ($chunks as $chunkText) {
                $embedding = $embeddings->embed($chunkText);

                KnowledgeChunk::create([
                    'content' => $chunkText,
                    'source' => basename($file),
                    'category' => $category,
                    'embedding' => $embedding,
                ]);

                $totalChunks++;
            }

            $bar->advance();
        }

        $bar->finish();
        $this->newLine(2);
        $this->info("Ingesta completada: {$totalChunks} fragmentos guardados.");

        return self::SUCCESS;
    }

    /**
     * Divide el texto en fragmentos manejables (por párrafo, ~800 caracteres máx).
     *
     * @return array<string>
     */
    protected function splitIntoChunks(string $content, int $maxLength = 800): array
    {
        $paragraphs = preg_split('/\n\s*\n/', trim($content)) ?: [];
        $chunks = [];
        $current = '';

        foreach ($paragraphs as $paragraph) {
            $paragraph = trim($paragraph);

            if ($paragraph === '') {
                continue;
            }

            if (strlen($current) + strlen($paragraph) > $maxLength && $current !== '') {
                $chunks[] = $current;
                $current = '';
            }

            $current .= ($current === '' ? '' : "\n\n").$paragraph;
        }

        if ($current !== '') {
            $chunks[] = $current;
        }

        return $chunks;
    }
}
