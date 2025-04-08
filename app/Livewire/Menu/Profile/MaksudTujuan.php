<?php

namespace App\Livewire\Menu\Profile;

use App\Models\MaksudTujuan as ModelsMaksudTujuan;
use Livewire\Component;

class MaksudTujuan extends Component
{
    public function render()
    {
        $data = ModelsMaksudTujuan::first();
        return view('livewire.menu.profile.maksud-tujuan', [
            'maksudTujuan' => $data,
        ]);
    }
}
