<?php

namespace App\Http\Controllers;

use App\Models\Polzovatel;



class PolzovatelController extends Controller
{
    public function list()
    {
        return Polzovatel::query()
            ->get();
    }

    public function info($id)
    {
        return Polzovatel::query()
            ->where("id", $id)
            ->first();
    }

}