<?php

namespace App\Livewire\Layouts;

use App\Models\Yayasan;
use Livewire\Component;

class Footer extends Component
{
    public function render()
    {
        $yayasan = Yayasan::get();
        return view('livewire.layouts.footer', [
            'yayasan' => $yayasan,
        ]);
    }
}
