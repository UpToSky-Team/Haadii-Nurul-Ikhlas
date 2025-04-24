<?php

namespace App\Filament\Resources\UserRegistrationResource\Pages;

use App\Filament\Resources\UserRegistrationResource;
use App\Models\StatusRegistration;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreateUserRegistration extends CreateRecord
{
    protected static string $resource = UserRegistrationResource::class;

    protected function afterCreate(): void
    {
        StatusRegistration::create([
            'id_registration' => $this->record->id_registration,
            'status' => 'pending', // default status
            'id_admin' => Auth::user()->id_admin,
        ]);
    }
}
