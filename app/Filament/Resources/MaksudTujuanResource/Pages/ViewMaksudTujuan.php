<?php

namespace App\Filament\Resources\MaksudTujuanResource\Pages;

use App\Filament\Resources\MaksudTujuanResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewMaksudTujuan extends ViewRecord
{
    protected static string $resource = MaksudTujuanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
