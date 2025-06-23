<?php

namespace App\Filament\Resources\UserDonaturResource\Pages;

use App\Filament\Resources\UserDonaturResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUserDonatur extends EditRecord
{
    protected static string $resource = UserDonaturResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
