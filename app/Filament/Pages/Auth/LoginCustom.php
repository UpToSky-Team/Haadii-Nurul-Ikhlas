<?php

namespace App\Filament\Pages\Auth;

use Filament\Pages\Auth\Login;
use Filament\Pages\Page;

class LoginCustom extends Login
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.auth.login-custom';
}
