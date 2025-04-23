<?php

namespace App\Filament\Resources\StatusDonasiResource\Pages;

use App\Filament\Resources\StatusDonasiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Auth;

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

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $data['id_admin'] = Auth::user()->id_admin;
        return $data;
    }
}
