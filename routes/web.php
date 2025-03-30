<?php

use App\Livewire\Home;
use App\Livewire\Pages\Profile\Sejarah;
use Illuminate\Support\Facades\Route;
use Livewire\Attributes\Layout;



Route::get('/', function () {
    return view('pages.main.home');
});
Route::get('/sejarah', function () {
    return view('pages.menu.profile.sejarah');
});
Route::get('/maksud-tujuan', function () {
    return view('pages.menu.profile.maksud-tujuan');
});
Route::get('/struktur-yayasan', function () {
    return view('pages.menu.profile.struktur-yayasan');
});
Route::get('/visi-misi', function () {
    return view('pages.menu.profile.visi-misi');
});
