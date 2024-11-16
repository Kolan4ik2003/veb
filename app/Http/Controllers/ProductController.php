<?php

namespace App\Http\Controllers;

use App\Models\Products;



class ProductController extends Controller
{
    public function list()
    {
        return Products::query()
            ->get();
    }

    
    public function gift()
    {
        return Products::query()
            ->where("is_gift", true)
            ->get();
    }

    public function info($id)
    {
        return Products::query()
            ->where("id", $id)
            ->first();
    }

}