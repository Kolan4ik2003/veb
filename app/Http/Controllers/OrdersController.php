<?php

namespace App\Http\Controllers;

use App\Models\Orders;



class OrdersController extends Controller
{
    public function list()
    {
        return Orders::query()
            ->get();
    }

    public function info($id)
    {
        return Orders::query()
            ->where("id", $id)
            ->first();
    }

}