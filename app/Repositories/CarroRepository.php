<?php

namespace App\Repositories;

use App\Factories\CarroFactory;
use Illuminate\Database\Eloquent\Model;

class CarroRepository extends BaseRepository{

    public function store(array $parameters):Model{
        $factory = new CarroFactory();
        $carro = $factory->build($parameters);
        $carro->save();
        return $carro;
    }
}