<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        DB::statement('CREATE EXTENSION IF NOT EXISTS vector');

        Schema::create('knowledge_chunks', function (Blueprint $table) {
            $table->id();
            $table->text('content');
            $table->string('source')->nullable();
            $table->string('category')->nullable();
            $table->timestamps();
        });

        // nomic-embed-text genera vectores de 768 dimensiones.
        DB::statement('ALTER TABLE knowledge_chunks ADD COLUMN embedding vector(768) NOT NULL');
        DB::statement('CREATE INDEX knowledge_chunks_embedding_idx ON knowledge_chunks USING hnsw (embedding vector_cosine_ops)');
    }

    public function down(): void
    {
        Schema::dropIfExists('knowledge_chunks');
    }
};
