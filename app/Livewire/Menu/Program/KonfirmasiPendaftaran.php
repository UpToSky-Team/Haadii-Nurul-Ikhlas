<?php

namespace App\Livewire\Menu\Program;

use App\Models\StatusDonasi;
use App\Models\StatusRegistration;
use Livewire\Component;

class KonfirmasiPendaftaran extends Component
{
    public $status = "kosong";

    public function mount($id)
    {
        $this->status = StatusRegistration::where('id_registration', $id)->first();
    }
    public function render()
    {
        
        return view('livewire.menu.program.konfirmasi-pendaftaran', [
            'status' => $this->status,
        ]);
    }
}
