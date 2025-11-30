<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_date',
        'total_amount',
        'total_price',
        'table_number',
        'order_number',
        'items',
        'status_order',
        'visitor_count',
        'item_id'
    ];
    public function item(): HasMany
    {
        return $this-> hasMany (Item::class,'product_id');
    }
}
