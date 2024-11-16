<?php

namespace App\Http\Controllers;

use App\Models\Polzovatel;
use Illuminate\Http\Request;
use App\Services\PolzovatelService;


class PolzovatelController extends Controller
{
    public function list(PolzovatelService $service)
    {
        return $service->getPolzovatel();
    }

    public function info($id,PolzovatelService $service)
    {
        return $service->getPolzovatelById($id);
    }

    public function create(Request $request, PolzovatelService $service)
    {
        $fields = $request->validate([
            'user_id' => 'required|exists:users,id', 
            'FIO' => 'required|string|min:5',  
            'phone_number' => 'required|string',  
            'adres' => 'required|string',  
        ]);
    
        return $service->create($fields);  
    }
    

}