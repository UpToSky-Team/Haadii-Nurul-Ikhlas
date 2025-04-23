<?php

namespace App\Filament\Resources\StatusDonasiResource\Pages;

use App\Filament\Resources\StatusDonasiResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewStatusDonasi extends ViewRecord
{
    protected static string $resource = StatusDonasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
