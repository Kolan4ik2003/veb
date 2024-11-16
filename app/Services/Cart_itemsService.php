<?php

namespace App\Services;

use App\Models\Cart_items;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Cart_itemsService
{
    public function getCart_items()
    {
        return Cart_items::query()
        ->get();
    }

    public function getCart_itemsById($id)
    {
        $model = Cart_items::query()
            ->where("id", $id)
            ->first();
        if ($model === null){
            throw new NotFoundHttpException('Заказ не найден.');

        }
        return $model;
    }

    public function create(array $data)
    {
        return Cart_items::create($data);
    }
}