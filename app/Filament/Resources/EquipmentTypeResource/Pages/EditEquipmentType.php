<?php

namespace App\Filament\Resources\EquipmentTypeResource\Pages;

use App\Filament\Resources\EquipmentTypeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEquipmentType extends EditRecord
{
    protected static string $resource = EquipmentTypeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
