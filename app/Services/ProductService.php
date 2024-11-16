<?php

namespace App\Services;

use App\Models\Products;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ProductService
{
    public function getProducts()
    {
        return Products::query()
        ->get();
    }

    public function getProductsById($id)
    {
        $model = Products::query()
            ->where("id", $id)
            ->first();
        if ($model === null){
            throw new NotFoundHttpException('Товар не найден.');

        }
        return $model;
    }

    public function getProductsactive()
    {
        return Products::query()
            ->where("active", true)
            ->get();
    }

    public function create(array $data)
    {
        return Products::create($data);
    }
}