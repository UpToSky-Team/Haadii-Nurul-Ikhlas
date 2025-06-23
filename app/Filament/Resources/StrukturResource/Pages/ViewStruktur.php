<?php

namespace App\Filament\Resources\StrukturResource\Pages;

use App\Filament\Resources\StrukturResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewStruktur extends ViewRecord
{
    protected static string $resource = StrukturResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
