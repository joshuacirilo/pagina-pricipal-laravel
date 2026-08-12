<?php

namespace App\Console\Commands;

use App\Models\KnowledgeChunk;
use App\Services\EmbeddingService;
use Illuminate\Console\Command;

class IngestKnowledge extends Command
{
    protected $signature = 'knowledge:ingest {path : Ruta de la carpeta con archivos .txt o .md} {--category= : Categoría opcional} {--replace : Reemplaza los fragmentos de cada archivo antes de cargarlo}';

    protected $description = 'Carga texto, genera embeddings con Ollama y los guarda en pgvector.';

    public function handle(EmbeddingService $embeddings): int
    {
        $path = rtrim((string) $this->argument('path'), '/\\');
        if (! is_dir($path)) {
            $this->error("La carpeta {$path} no existe.");
            return self::FAILURE;
        }

        $files = array_merge(glob($path.DIRECTORY_SEPARATOR.'*.txt') ?: [], glob($path.DIRECTORY_SEPARATOR.'*.md') ?: []);
        if ($files === []) {
            $this->warn('No se encontraron archivos .txt o .md.');
            return self::SUCCESS;
        }

        $count = 0;
        foreach ($files as $file) {
            $source = basename($file);
            if ($this->option('replace')) {
                KnowledgeChunk::where('source', $source)->delete();
            }

            foreach ($this->splitIntoChunks((string) file_get_contents($file)) as $content) {
                KnowledgeChunk::create([
                    'content' => $content,
                    'source' => $source,
                    'category' => $this->option('category'),
                    'embedding' => KnowledgeChunk::toVectorLiteral($embeddings->embed($content)),
                ]);
                $count++;
            }
        }

        $this->info("Ingesta completada: {$count} fragmentos guardados.");
        return self::SUCCESS;
    }

    /** @return array<int, string> */
    private function splitIntoChunks(string $content, int $maxLength = 800): array
    {
        $chunks = [];
        $current = '';
        foreach (preg_split('/\R\s*\R/', trim($content)) ?: [] as $paragraph) {
            $paragraph = trim($paragraph);
            if ($paragraph === '') continue;
            if (mb_strlen($current) + mb_strlen($paragraph) > $maxLength && $current !== '') {
                $chunks[] = $current;
                $current = '';
            }
            $current .= ($current === '' ? '' : "\n\n").$paragraph;
        }
        if ($current !== '') $chunks[] = $current;
        return $chunks;
    }
}
