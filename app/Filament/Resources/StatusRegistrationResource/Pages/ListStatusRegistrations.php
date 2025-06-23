<?php

namespace App\Filament\Resources\StatusRegistrationResource\Pages;

use App\Filament\Resources\StatusRegistrationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStatusRegistrations extends ListRecords
{
    protected static string $resource = StatusRegistrationResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }
}
