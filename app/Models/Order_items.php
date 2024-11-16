<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order_items extends Model
{
    protected $table = "order_items";

    protected $fillable = [
        "order_id",
        "product_id",
        "quantity",
        "unit_price",
        "total_price",
    ];       
}
