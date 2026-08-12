<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Habilita la extensión pgvector en Postgres.
        // Requiere que el servidor tenga pgvector instalado (CREATE EXTENSION requiere el .so compilado).
        DB::statement('CREATE EXTENSION IF NOT EXISTS vector');

        Schema::create('knowledge_chunks', function (Blueprint $table) {
            $table->id();
            $table->text('content');                 // el texto del fragmento
            $table->string('source')->nullable();     // ej: "reglamento_academico.pdf"
            $table->string('category')->nullable();   // ej: "admisiones", "becas", "carreras"
            $table->timestamps();
        });

        // El Schema Builder de Laravel no tiene un tipo "vector" nativo
        // (es específico de la extensión pgvector), así que se agrega con SQL crudo.
        // 768 = dimensiones del modelo nomic-embed-text de Ollama.
        // Si usas otro modelo de embeddings, cambia este número a su dimensión.
        DB::statement('ALTER TABLE knowledge_chunks ADD COLUMN embedding vector(768)');

        // Índice HNSW para acelerar la búsqueda por similitud coseno.
        // Requiere pgvector >= 0.5.0. Si tu versión es más vieja, usa "ivfflat" en su lugar.
        DB::statement('CREATE INDEX knowledge_chunks_embedding_idx ON knowledge_chunks USING hnsw (embedding vector_cosine_ops)');
    }

    public function down(): void
    {
        Schema::dropIfExists('knowledge_chunks');
    }
};
