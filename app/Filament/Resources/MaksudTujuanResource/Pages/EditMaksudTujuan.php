<?php

namespace App\Filament\Resources\MaksudTujuanResource\Pages;

use App\Filament\Resources\MaksudTujuanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMaksudTujuan extends EditRecord
{
    protected static string $resource = MaksudTujuanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
