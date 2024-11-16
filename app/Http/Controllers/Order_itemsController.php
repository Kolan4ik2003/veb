<?php

namespace App\Http\Controllers;

use App\Models\Order_items;
use Illuminate\Http\Request;
use App\Services\Order_itemsService;


class Order_itemsController extends Controller
{
    public function list(Order_itemsService $service)
    {
        return $service->getOrder_items();
    }

    public function info($id,Order_itemsService $service)
    {
        return $service->getOrder_itemsById($id);
    }

    public function create(Request $request, Order_itemsService $service)
    {
        $fields = $request->validate([
            'order_id' => 'required|exists:orders,id',  
            'product_id' => 'required|exists:products,id',  
            'quantity' => 'required|integer|min:1',  
            'unit_price' => 'required|numeric|min:0',   
            'total_price' => 'required|numeric|min:0', 
        ]);
    
        return $service->create($fields);  
    }
    
}