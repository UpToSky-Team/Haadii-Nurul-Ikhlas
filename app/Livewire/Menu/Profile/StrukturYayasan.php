<?php

namespace App\Livewire\Menu\Profile;

use App\Models\Struktur;
use Livewire\Component;

class StrukturYayasan extends Component
{
    public function render()
    {
        $data = Struktur::orderBy('created_at', 'desc')->get();
        return view('livewire.menu.profile.struktur-yayasan', [
            'struktur' => $data, 
        ]);
    }
}
