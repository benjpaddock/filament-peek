<?php

namespace Pboivin\FilamentPeek\Tests\Models;

use Pboivin\FilamentPeek\Tests\Database\Factories\PostFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    protected $casts = [
        'is_published' => 'boolean',
        'tags' => 'array',
    ];

    protected $guarded = [];

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    protected static function newFactory()
    {
        return PostFactory::new();
    }
}
