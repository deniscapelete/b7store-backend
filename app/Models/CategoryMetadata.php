<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CategoryMetadata extends Model
{
    public $incrementing = false;
    protected $keyType = 'string';
    protected $table = 'category_metadata';
    protected $fillable = ['id', 'name'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
