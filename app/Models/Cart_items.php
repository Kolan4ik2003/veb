<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart_items extends Model
{
    protected $table = "cart_items";

    protected $fillable = [
        "product_id",
        "quantity",
        "unit_price",
        "total_price",
        "polzovatels_id",
    ];   
}
