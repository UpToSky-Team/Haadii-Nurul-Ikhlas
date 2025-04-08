<?php

namespace App\Livewire\Menu\Profile;

use App\Models\VisiMisi as ModelsVisiMisi;
use Livewire\Component;

class VisiMisi extends Component
{
    public function render()
    {
        $data = ModelsVisiMisi::first();
        return view('livewire.menu.profile.visi-misi', [
            'visiMisi' => $data,
        ]);
    }
}
