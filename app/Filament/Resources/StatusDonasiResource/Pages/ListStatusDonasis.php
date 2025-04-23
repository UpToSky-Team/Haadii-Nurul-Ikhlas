<?php

namespace App\Filament\Resources\StatusDonasiResource\Pages;

use App\Filament\Resources\StatusDonasiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStatusDonasis extends ListRecords
{
    protected static string $resource = StatusDonasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
