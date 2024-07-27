<?php

namespace App\Filament\Resources\CarroResource\Pages;

use App\Filament\Resources\CarroResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCarros extends ListRecords
{
    protected static string $resource = CarroResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
