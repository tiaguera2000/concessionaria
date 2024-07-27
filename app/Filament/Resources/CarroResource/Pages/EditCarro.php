<?php

namespace App\Filament\Resources\CarroResource\Pages;

use App\Filament\Resources\CarroResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCarro extends EditRecord
{
    protected static string $resource = CarroResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
