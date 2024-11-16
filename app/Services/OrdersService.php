<?php

namespace App\Services;

use App\Models\Orders;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class OrdersService
{
    public function getOrders()
    {
        return Orders::query()
        ->get();
    }

    public function getOrdersById($id)
    {
        $model = Orders::query()
            ->where("id", $id)
            ->first();
        if ($model === null){
            throw new NotFoundHttpException('Заказ не найден.');

        }
        return $model;
    }

    public function create(array $data)
    {
        return Orders::create($data);
    }
}