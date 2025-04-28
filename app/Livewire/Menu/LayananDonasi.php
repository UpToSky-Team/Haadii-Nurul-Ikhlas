<?php

namespace App\Livewire\Menu;

use App\Models\Bank;
use App\Models\JenisDonasi;
use App\Models\Qris;
use Livewire\Component;

class LayananDonasi extends Component
{
    public function render()
    {

        $jenis = JenisDonasi::orderBy('created_at', 'asc')->get();
        $bank = Bank::get();
        $qris = Qris::get();
        return view('livewire.menu.layanan-donasi', [
            'jenis' => $jenis,
            'bank' => $bank,
            'qris' => $qris
        ]);
    }
}
