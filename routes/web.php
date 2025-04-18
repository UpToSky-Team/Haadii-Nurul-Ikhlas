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
Route::get('/publikasi', function () {
    return view('pages.menu.publikasi');
});
Route::get('/detail-berita', function () {
    return view('pages.menu.detail-berita');
});
Route::get('/detail-artikel', function () {
    return view('pages.menu.detail-artikel');
});
Route::get('/layanan-donasi', function () {
    return view('pages.menu.layanan-donasi');
});
Route::get('/hubungi-kami', function () {
    return view('pages.menu.hubungi-kami');
});
Route::get('/penerimaan-murid-baru', function () {
    return view('pages.menu.program.penerimaan-murid-baru');
});
Route::get('/penerimaan-murid-baru-next', function () {
    return view('pages.menu.program.penerimaan-murid-baru-next');
});
Route::get('/konfirmasi-pendaftaran', function () {
    return view('pages.menu.program.konfirmasi-pendaftaran');
});
