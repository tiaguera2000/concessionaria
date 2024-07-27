<?php

namespace App\Filament\Resources\CarroResource\Pages;

use App\Filament\Resources\CarroResource;
use App\Models\Carro;
use App\Repositories\CarroRepository;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateCarro extends CreateRecord
{
    protected static string $resource = CarroResource::class;

    public function handleRecordCreation(array $data):Model{

        $car = new Carro();
        $repository = new CarroRepository(new Carro());
        $carro = $repository->store($data);
        return $carro;
    }
}
