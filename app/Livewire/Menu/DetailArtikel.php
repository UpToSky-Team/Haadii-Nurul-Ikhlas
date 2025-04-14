<?php

namespace App\Livewire\Menu;

use App\Models\Artikel;
use Livewire\Component;

class DetailArtikel extends Component
{
    public $artikel = "kosong";

    public function mount($id)
    {
        $this->artikel = Artikel::where('id_artikel', $id)->first();
    }

    public function render()
    {
        return view('livewire.menu.detail-artikel');
    }
}
