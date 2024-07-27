<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Model;

interface IBaseRepository{

    function store(array $parameters):Model;
    function show(int $id):Model;
    function update(array $parameters):Model;
    function all();
    function destroy();
}
?>