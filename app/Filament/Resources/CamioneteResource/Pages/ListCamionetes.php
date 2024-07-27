<?php

namespace App\Filament\Resources\CamioneteResource\Pages;

use App\Filament\Resources\CamioneteResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCamionetes extends ListRecords
{
    protected static string $resource = CamioneteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
