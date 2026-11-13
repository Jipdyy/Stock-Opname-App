<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\ELoquent\Relations\BelongsTo;
use Illuminate\Database\ELoquent\Relations\HasMany;

class Item extends Model
{
    protected $fillable = ['name', 'category_id', 'brand', 'spesification', 'unit',];

    public function categories(): BelongsTo {
        return $this->belongsTo(Category::class);
    }

    public function assets(): HasMany {
        return $this->hasMany(Asset::class);
    }
}
