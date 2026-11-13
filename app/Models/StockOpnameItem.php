<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StockOpnameItem extends Model
{
    protected $fillable = [
        'stock_opname_id', 'asset_id', 'item_id',
        'location_id', 'qty_system', 'qty_physical',
        'finding_status', 'condition_found', 'found_location_id',
        'notes', 'photo', 'checked_by',
        'checked_at'
    ];  
}
