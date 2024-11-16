<?php

namespace App\Services;

use App\Models\Order_items;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Order_itemsService
{
    public function getOrder_items()
    {
        return Order_items::query()
        ->get();
    }

    public function getOrder_itemsById($id)
    {
        $model = Order_items::query()
            ->where("id", $id)
            ->first();
        if ($model === null){
            throw new NotFoundHttpException('Заказ не найден.');

        }
        return $model;
    }

    public function create(array $data)
    {
        return Order_items::create($data);
    }
}