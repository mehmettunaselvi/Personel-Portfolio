<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BlogEntry extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'seo_description',
        'category',
        'content',
        'is_active'
    ];

    public function relatedCategory(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
