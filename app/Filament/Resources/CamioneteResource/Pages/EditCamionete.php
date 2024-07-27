<?php

namespace App\Filament\Resources\CamioneteResource\Pages;

use App\Filament\Resources\CamioneteResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCamionete extends EditRecord
{
    protected static string $resource = CamioneteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
