<?php

namespace App\Http\Controllers;

use App\Models\Cart_items;
use Illuminate\Http\Request;
use App\Services\Cart_itemsService;


class Cart_itemsController extends Controller
{
    public function list(Cart_itemsService $service)
    {
        return $service->getCart_items();
    }

    public function info($id,Cart_itemsService $service)
    {
        return $service->getCart_itemsById($id);
    }

    public function create(Request $request, Cart_itemsService $service)
    {
    $fields = $request->validate([
        'product_id' => 'required|exists:products,id',  
        'quantity' => 'required|integer|min:1', 
        'unit_price' => 'required|numeric|min:0', 
        'total_price' => 'required|numeric|min:0',  
        'polzovatels_id' => 'required|exists:polzovatels,id',  
    ]);

    return $service->create($fields);  
    }

}