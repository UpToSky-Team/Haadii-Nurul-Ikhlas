<?php

namespace App\Filament\Resources\StatusDonasiResource\Pages;

use App\Filament\Resources\StatusDonasiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStatusDonasi extends EditRecord
{
    protected static string $resource = StatusDonasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
