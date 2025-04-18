<?php

namespace App\Livewire\Menu;

use App\Models\JenisDonasi;
use Livewire\Component;

class LayananDonasi extends Component
{
    public function render()
    {

        $jenis = JenisDonasi::orderBy('created_at', 'asc')->get();
        return view('livewire.menu.layanan-donasi', [
            'jenis' => $jenis,
        ]);
    }
}
