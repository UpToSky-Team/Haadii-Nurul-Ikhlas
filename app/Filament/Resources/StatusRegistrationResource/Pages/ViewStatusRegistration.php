<?php

namespace App\Filament\Resources\StatusRegistrationResource\Pages;

use App\Filament\Resources\StatusRegistrationResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewStatusRegistration extends ViewRecord
{
    protected static string $resource = StatusRegistrationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
