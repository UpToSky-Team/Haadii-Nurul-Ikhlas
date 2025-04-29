<?php

namespace App\Filament\Resources\DokumenRegisResource\Pages;

use App\Filament\Resources\DokumenRegisResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageDokumenRegis extends ManageRecords
{
    protected static string $resource = DokumenRegisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
