<?php

namespace App\Filament\Resources\MaksudTujuanResource\Pages;

use App\Filament\Resources\MaksudTujuanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMaksudTujuans extends ListRecords
{
    protected static string $resource = MaksudTujuanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
