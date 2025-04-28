<?php

use App\Http\Controllers\BerkasController;
use App\Http\Controllers\UserDonaturController;
use App\Http\Controllers\UserRegistration;
use App\Http\Controllers\UserRegistrationController;
use App\Livewire\Home;
use App\Livewire\Menu\DetailBerita;
use App\Livewire\Pages\DetailBerita as PagesDetailBerita;
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
Route::get('/detail-berita/{id}', function ($id_berita) {
    return view('pages.menu.detail-berita', ['id_berita' => $id_berita]);
})->name('berita.detail');

Route::get('/detail-artikel/{id}', function ($id_artikel) {
    return view('pages.menu.detail-artikel', ['id_artikel' => $id_artikel]);
})->name('artikel.detail');

Route::get('/layanan-donasi', function () {
    return view('pages.menu.layanan-donasi');
});
Route::get('/hubungi-kami', function () {
    return view('pages.menu.hubungi-kami');
});
Route::post('/layanan-donasi/donasi-send', [UserDonaturController::class, 'store'])->name('donasi.send');
Route::post('/penerimaan-murid-baru/daftar', [UserRegistrationController::class, 'store'])->name('pmb.daftar');
Route::post('/penerimaan-murid-baru-next/kirim', [BerkasController::class, 'store'])->name('pmb.next.submit');
Route::patch('/penerimaan-murid-baru-next/{id}/update', [BerkasController::class, 'update'])->name('pmb.next.update');

Route::get('/penerimaan-murid-baru', function () {
    return view('pages.menu.program.penerimaan-murid-baru');
});
Route::get('/penerimaan-murid-baru-next', function () {
    return view('pages.menu.program.penerimaan-murid-baru-next');
})->name('pmb.next');
Route::get('/konfirmasi-pendaftaran', function () {
    return view('pages.menu.program.konfirmasi-pendaftaran');
})->name('pmb.konfirmasi');
Route::get('/rincian-kegiatan', function () {
    return view('pages.menu.program.rincian-kegiatan');
});
Route::get('/rincian-kegiatan', function () {
    return view('pages.menu.program.rincian-kegiatan');
});
Route::get('/home', function () {
    return view('home');
});
