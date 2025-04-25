<?php

namespace App\Livewire\Menu\Program;

use App\Models\Kegiatan;
use Livewire\Component;

class RincianKegiatan extends Component
{
    public function render()
    {
        $kegiatan = Kegiatan::orderBy('created_at', 'desc')->get();
        return view('livewire.menu.program.rincian-kegiatan', [
            'kegiatan' => $kegiatan,
        ]);
    }
}
