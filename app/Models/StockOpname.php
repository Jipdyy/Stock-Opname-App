<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class StockOpname extends Model
{
    protected $fillable = [''];

    public function StockOpnameAsssignment(): HasMany {
        return $this->hasMany(StockOpnameAssignment::class);
    }

    public function StockOpnameItem(): HasMany {
        return $this->hasMany(StockOpnameAssignment::class);
    }
}
