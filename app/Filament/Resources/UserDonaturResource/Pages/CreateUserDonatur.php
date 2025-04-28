<?php

namespace App\Filament\Resources\UserDonaturResource\Pages;

use App\Filament\Resources\UserDonaturResource;
use App\Models\StatusDonasi;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreateUserDonatur extends CreateRecord
{
    protected static string $resource = UserDonaturResource::class;

    protected function afterCreate(): void
    {
        StatusDonasi::create([
            'id_user_donatur' => $this->record->id_user_donatur,
            'status' => 'pending', // default status
            'id_admin' => Auth::user()->id_admin,
        ]);
    }
}
