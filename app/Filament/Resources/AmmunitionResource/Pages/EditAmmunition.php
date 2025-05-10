<?php

namespace App\Filament\Resources\AmmunitionResource\Pages;

use App\Filament\Resources\AmmunitionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAmmunition extends EditRecord
{
    protected static string $resource = AmmunitionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
