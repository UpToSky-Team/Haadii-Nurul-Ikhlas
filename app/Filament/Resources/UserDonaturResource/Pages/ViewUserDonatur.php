<?php

namespace App\Filament\Resources\UserDonaturResource\Pages;

use App\Filament\Resources\UserDonaturResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewUserDonatur extends ViewRecord
{
    protected static string $resource = UserDonaturResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
