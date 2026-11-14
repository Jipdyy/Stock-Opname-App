<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StockOpnameItem extends Model
{
    protected $fillable = [
        'stock_opname_id', 'asset_id', 'item_id',
        'location_id', 'qty_system', 'qty_physical',
        'finding_status', 'condition_found', 'found_location_id',
        'notes', 'photo', 'checked_by',
        'checked_at'
    ];  

    public function stockOpname(): BelongsTo {
        return $this->belongsTo(StockOpname::class);
    }

    public function asset(): BelongsTo {
        return $this->belongsTo(Asset::class);
    }

    public function item(): BelongsTo {
        return $this->belongsTo(Item::class);
    }

    public function location(): BelongsTo {
        return $this->belongsTo(Location::class);
    }

    public function foundLocation(): BelongsTo {
        return $this->belongsTo(Location::class, 'found_location_id');
    }

    public function checker(): BelongsTo {
        return $this->belongsTo(User::class, 'checked_by');
    }
}
