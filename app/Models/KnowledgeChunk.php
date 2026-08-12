<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class KnowledgeChunk extends Model
{
    protected $fillable = [
        'content',
        'source',
        'category',
        'embedding',
    ];

    /**
     * @param array<float> $queryEmbedding
     * @return Collection<int, static>
     */
    public static function nearest(array $queryEmbedding, int $limit = 5): Collection
    {
        $vector = self::toVectorLiteral($queryEmbedding);

        return static::query()
            ->selectRaw('*, embedding <=> ?::vector AS distance', [$vector])
            ->orderByRaw('embedding <=> ?::vector', [$vector])
            ->limit($limit)
            ->get();
    }

    /** @param array<float|int> $embedding */
    public static function toVectorLiteral(array $embedding): string
    {
        return '['.implode(',', array_map(static fn (float|int $value): string => (string) $value, $embedding)).']';
    }
}
