<?php

namespace App\Filament\Resources\VestResource\Pages;

use App\Filament\Resources\VestResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVest extends EditRecord
{
    protected static string $resource = VestResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
