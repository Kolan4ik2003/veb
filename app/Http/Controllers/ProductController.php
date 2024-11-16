<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use App\Services\ProductService;

class ProductController extends Controller
{
    public function list(ProductService $service)
    {
        return $service->getProducts();
    }

    
    public function active(ProductService $service)
    {
        return $service->getProductsactive();
    }

    public function info($id, ProductService $service)
    {
        return $service->getProductsById($id);
    }

    public function create(Request $request,ProductService $service)
    {
        $fields = $request->validate([
            'name' => 'required|string|min:5',
            'description' => 'nullable|string',
            'image_url' => 'nullable|url',
            'price' => 'required|numeric',
            'active' => 'required|boolean',
        ]);

        return $service->create($fields);
    }

}