<?php

namespace App\Services;

use App\Models\Polzovatel;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PolzovatelService
{
    public function getPolzovatel()
    {
        return Polzovatel::query()
        ->get();
    }

    public function getPolzovatelById($id)
    {
        $model = Polzovatel::query()
            ->where("id", $id)
            ->first();
        if ($model === null){
            throw new NotFoundHttpException('Пользователь не найден.');

        }
        return $model;
    }

    public function create(array $data)
    {
        return Polzovatel::create($data);
    }
}