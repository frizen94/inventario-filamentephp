<?php

namespace App\Filament\Resources\RadioResource\Pages;

use App\Filament\Resources\RadioResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRadio extends EditRecord
{
    protected static string $resource = RadioResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
