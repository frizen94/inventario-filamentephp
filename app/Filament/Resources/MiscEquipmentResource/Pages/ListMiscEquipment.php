<?php

namespace App\Filament\Resources\MiscEquipmentResource\Pages;

use App\Filament\Resources\MiscEquipmentResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMiscEquipment extends ListRecords
{
    protected static string $resource = MiscEquipmentResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
