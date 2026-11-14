<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AssetHistory extends Model
{
    protected $fillable = [
        'asset_id', 'stock_opname_id', 'change_field',
        'old_value', 'new_value', 'changed_at'
    ];

    public function asset(): BelongsTo {
        return $this->belongsTo(Asset::class);
    }

    public function stockOpname(): BelongsTo {
        return $this->belongsTo(StockOpname::class);
    }
}
