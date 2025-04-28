<?php

namespace App\Livewire\Menu\Profile;

use App\Models\Sejarah as ModelsSejarah;
use Livewire\Component;

class Sejarah extends Component
{
    public function render()
    {
        $data = ModelsSejarah::first();
        return view('livewire.menu.profile.sejarah', [
            'sejarah' => $data,
        ]);
    }
}
