<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Pgvector\Laravel\Vector;

class KnowledgeChunk extends Model
{
    protected $fillable = [
        'content',
        'source',
        'category',
        'embedding',
    ];

    protected $casts = [
        // Convierte automáticamente el array PHP <-> el tipo vector de Postgres
        'embedding' => Vector::class,
    ];

    /**
     * Busca los N fragmentos más parecidos a un embedding dado,
     * usando distancia coseno (el operador <=> de pgvector).
     *
     * @param  array<float>  $queryEmbedding
     */
    public static function nearest(array $queryEmbedding, int $limit = 5)
    {
        $vectorString = '[' . implode(',', $queryEmbedding) . ']';

        return static::query()
            ->selectRaw('*, embedding <=> ? as distance', [$vectorString])
            ->orderByRaw('embedding <=> ?', [$vectorString])
            ->limit($limit)
            ->get();
    }
}
