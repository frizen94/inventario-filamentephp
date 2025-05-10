<?php

namespace App\Filament\Resources\AmmunitionResource\Pages;

use App\Filament\Resources\AmmunitionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAmmunitions extends ListRecords
{
    protected static string $resource = AmmunitionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
