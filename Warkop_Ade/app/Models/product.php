<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'image',
        'category_id',
        'order_id',
        'item_id',
    ];
    public function category (): BelongsTo
    {
        return $this-> belongsTo(Category::class,'product_id');
    }
    public function order (): BelongsTo
    {
        return $this-> belongsTo(Order::class,'product_id');
    }
    public function item(): BelongsTo
    {
        return $this-> belongsTo(Item::class,'product_id');
    }
}
