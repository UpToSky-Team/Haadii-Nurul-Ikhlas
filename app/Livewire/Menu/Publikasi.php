<?php

namespace App\Livewire\Menu;

use App\Models\Artikel;
use App\Models\Berita;
use App\Models\Galeri;
use Livewire\Component;
use Livewire\WithPagination;

class Publikasi extends Component
{
    use WithPagination;
    public function render()
    {
        $berita = Berita::orderBy('created_at', 'desc')->paginate(10);
        $artikel = Artikel::orderBy('created_at', 'desc')->paginate(10);
        $galeriFoto = Galeri::where('jenis', 'gambar')->orderBy('created_at', 'desc')->paginate(10);
        $galeriVideo = Galeri::orderBy('created_at', 'desc')->paginate(10);
        return view('livewire.menu.publikasi', [
            'berita' => $berita,
            'artikel' => $artikel,
            'foto' => $galeriFoto,
            'video' => $galeriVideo,
        ]);
    }
}
