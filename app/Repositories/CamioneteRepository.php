<?php

namespace App\Repositories;

use App\Factories\CamioneteFactory;
use Illuminate\Database\Eloquent\Model;

class CamioneteRepository extends BaseRepository{

    public function store(array $parameters):Model{
        $factory = new CamioneteFactory();
        $camionete = $factory->build($parameters);
        $camionete->save();
        return $camionete;
    }
}