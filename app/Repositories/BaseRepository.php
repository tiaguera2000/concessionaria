<?php

namespace App\Repositories;

use App\Factories\CarroFactory;
use App\Interfaces\IBaseRepository;
use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository implements IBaseRepository
{
    protected $model;
    public function __construct($model)
    {
        $this->model = $model;
    }

    function show(int $id):Model{
        return $this->model->find($id);
    }

    public function destroy(){
        $this->model->destroy();
    }

    public function all(){
        return $this->model->all();
    }

    public function update($parameters):Model{
        return $this->model->update($parameters);
    }

    public function store(array $parameters):Model{
        
        return $this->model->create($parameters);
    }
}

?>