<?php

namespace App\Filament\Resources\UserDonaturResource\Pages;

use App\Filament\Resources\UserDonaturResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUserDonaturs extends ListRecords
{
    protected static string $resource = UserDonaturResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
