<?php

namespace App\Filament\Resources\BerkasResource\Pages;

use App\Filament\Resources\BerkasResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewBerkas extends ViewRecord
{
    protected static string $resource = BerkasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
