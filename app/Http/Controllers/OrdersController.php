<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;
use App\Services\OrdersService;


class OrdersController extends Controller
{
    public function list(OrdersService $service)
    {
        return $service->getOrders();
    }

    public function info($id,OrdersService $service)
    {
        return $service->getOrdersById($id);
    }

    public function create(Request $request, OrdersService $service)
    {
    $fields = $request->validate([
        'polzovatels_id' => 'required|exists:polzovatels,id',  
        'total_amount' => 'required|numeric|min:0',  
    ]);

    return $service->create($fields);  
    }


}