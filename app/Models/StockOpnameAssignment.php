<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StockOpnameAssignment extends Model
{
    protected $fillable = ['stock_opname_id', 'location_id', 'user_id'];

    public function stockOpname(): BelongsTo {
        return $this->belongsTo(StockOpname::class);
    }

    public function location(): BelongsTo {
        return $this->belongsTo(Location::class);
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
