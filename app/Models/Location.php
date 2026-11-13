<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Location extends Model
{
    protected $fillable = ['name', 'description'];

    public function assets(): HasMany {
        return $this->hasMany(Asset::class);
    }

    public function stockAssignments(): HasMany {
        return $this->hasMany(StockOpnameAssignment::class);
    }
}
