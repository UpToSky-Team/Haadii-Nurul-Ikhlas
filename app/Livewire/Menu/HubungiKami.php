<?php

namespace App\Livewire\Menu;

use App\Models\Yayasan;
use Livewire\Component;

class HubungiKami extends Component
{
    public function render()
    {
        $yayasan = Yayasan::get();
        return view('livewire.menu.hubungi-kami', [
            'yayasan' => $yayasan,
        ]);
    }
}
