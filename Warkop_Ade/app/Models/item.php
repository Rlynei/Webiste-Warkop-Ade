<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class item extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'unit_price',
        'quantity',
        'subtotal',
        'product_id',
        'order_id',
    ];
    public function product(): BelongsTo
    {
        return $this-> belongsTo(Product::class,'product_id');
    }
    public function order (): BelongsTo
    {
        return $this-> belongsTo(Order::class,'Order_id');
    }

}
