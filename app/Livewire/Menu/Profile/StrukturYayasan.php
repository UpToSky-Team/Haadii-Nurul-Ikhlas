<?php

namespace App\Livewire\Menu\Profile;

use App\Models\Struktur;
use Livewire\Component;

class StrukturYayasan extends Component
{
    public function render()
    {
        $data = Struktur::orderBy('level', 'asc')->orderBy('created_at', 'asc')->get();
        return view('livewire.menu.profile.struktur-yayasan', [
            'struktur' => $data, 
        ]);
    }
}
