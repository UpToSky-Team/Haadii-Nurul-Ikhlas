<?php

namespace App\Livewire\Contents;

use App\Models\Berita;
use App\Models\Galeri;
use Livewire\Component;

class Landing extends Component
{
    public function render()
    {
        $dataBerita = Berita::latest()->take(3)->get();
        $dataVideo = Galeri::where('jenis', '=', 'video')->latest()->take(2)->get();
        $dataFoto = Galeri::where('jenis', '=', 'gambar')->latest()->take(6)->get();

        return view('livewire.contents.landing', [
            'berita' => $dataBerita,
            'foto' => $dataFoto,
            'video' => $dataVideo,
        ]);
    }
}
