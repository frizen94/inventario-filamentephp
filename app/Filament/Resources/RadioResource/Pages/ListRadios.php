<?php

namespace App\Filament\Resources\RadioResource\Pages;

use App\Filament\Resources\RadioResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRadios extends ListRecords
{
    protected static string $resource = RadioResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
