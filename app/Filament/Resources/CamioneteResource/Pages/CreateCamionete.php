<?php

namespace App\Filament\Resources\CamioneteResource\Pages;

use App\Filament\Resources\CamioneteResource;
use App\Models\Camionete;
use App\Repositories\CamioneteRepository;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateCamionete extends CreateRecord
{
    protected static string $resource = CamioneteResource::class;

    public function handleRecordCreation(array $data):Model{

        $repository = new CamioneteRepository(new Camionete());
        $camionete = $repository->store($data);
        return $camionete;
    }
}
