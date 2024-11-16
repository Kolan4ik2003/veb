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

    
    public function active()
    {
        return Products::query()
            ->where("active", true)
            ->get();
    }

    public function info($id)
    {
        return Products::query()
            ->where("id", $id)
            ->first();
    }

}