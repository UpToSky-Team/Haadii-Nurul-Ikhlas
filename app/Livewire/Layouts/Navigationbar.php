<?php

namespace App\Livewire\Layouts;

use App\Models\Yayasan;
use Livewire\Component;

class Navigationbar extends Component
{
    public function render()
    {
        $yayasan = Yayasan::get();
        return view('livewire.layouts.navigationbar', [
            'yayasan' => $yayasan,
        ]);
    }
}
