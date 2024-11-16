<?php

namespace App\Http\Controllers;

use App\Models\Cart_items;



class Cart_itemsController extends Controller
{
    public function list()
    {
        return Cart_items::query()
            ->get();
    }

    public function info($id)
    {
        return Cart_items::query()
            ->where("id", $id)
            ->first();
    }

}