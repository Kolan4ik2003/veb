<?php

namespace App\Http\Controllers;

use App\Models\Order_items;



class Order_itemsController extends Controller
{
    public function list()
    {
        return Order_items::query()
            ->get();
    }

    public function info($id)
    {
        return Order_items::query()
            ->where("id", $id)
            ->first();
    }

}