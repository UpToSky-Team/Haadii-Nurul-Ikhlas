<?php

namespace App\Filament\Resources\QrisResource\Pages;

use App\Filament\Resources\QrisResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewQris extends ViewRecord
{
    protected static string $resource = QrisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
