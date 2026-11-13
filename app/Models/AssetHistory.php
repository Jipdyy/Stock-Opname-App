<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AssetHistory extends Model
{
    protected $fillable = [
        'asset_id', 'stock_opname_id', 'change_field',
        'old_value', 'new_value', 'changed_at'
    ];
}
