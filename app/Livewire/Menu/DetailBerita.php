<?php

namespace App\Livewire\Menu;

use App\Models\Berita;
use Livewire\Component;

class DetailBerita extends Component
{
    public $berita = "kosong";

    public function mount($id)
    {
        $this->berita = Berita::where('id_berita', $id)->first();
    }

    public function render()
    {
        return view('livewire.menu.detail-berita', [
            'berita' => $this->berita,
        ]);
    }
}
