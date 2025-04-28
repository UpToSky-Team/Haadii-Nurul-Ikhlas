<?php

namespace App\Filament\Resources\StatusRegistrationResource\Pages;

use App\Filament\Resources\StatusRegistrationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Auth;

class EditStatusRegistration extends EditRecord
{
    protected static string $resource = StatusRegistrationResource::class;

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
