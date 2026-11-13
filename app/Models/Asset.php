<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Asset extends Model
{
    protected $fillable = [
        'item_id', 'location_id',
        'inventory_code', 'condition',
        'purchase_date', 'funding_source',
        'status', 'image'
    ];

    public function item(): BelongsTo {
        return $this->belongsTo(Item::class);
    }

    public function location(): BelongsTo {
        return $this->belongsTo(Location::class);
    }

    public function assets(): HasMany {
        return $this->hasMany(AssetHistory::class);
    }
}
