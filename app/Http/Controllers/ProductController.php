<?php

namespace App\Http\Controllers;

class ProductController extends Controller{
    public function list()
    {
        return[
            ['id' => 1, 'name' => 'Bouquet of Roses', 'price' => 2000],
            ['id' => 2, 'name' => 'Tulips', 'price' => 100],
            ['id' => 3, 'name' => 'Pions', 'price' => 450],
            ['id' => 4, 'name' => 'Lilies', 'price' => 350],
            ['id' => 5, 'name' => 'Hydrangeas', 'price' => 500],
            ['id' => 6, 'name' => 'Tulips', 'price' => 1500]

        ];
    }
    public function info($id)
    {
        return[
            'id' => $id, 'name' => 'Bouquet of Roses', 'price' => 2000
        ];
    }


}