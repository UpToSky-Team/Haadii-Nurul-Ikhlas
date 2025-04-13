<?php

namespace App\Livewire\Menu;

use App\Models\Artikel;
use App\Models\Berita;
use App\Models\Galeri;
use Livewire\Component;

class Publikasi extends Component
{
    public function render()
    {
        $berita = Berita::orderBy('created_at', 'desc')->get();
        $artikel = Artikel::orderBy('created_at', 'desc')->get();
        $galeriFoto = Galeri::where('jenis', 'gambar')->orderBy('created_at', 'desc')->get();
        $galeriVideo = Galeri::where('jenis', 'video')->orderBy('created_at', 'desc')->get();
        return view('livewire.menu.publikasi', [
            'berita' => $berita,
            'artikel' => $artikel,
            'foto' => $galeriFoto,
            'video' => $galeriVideo,
        ]);
    }
}
