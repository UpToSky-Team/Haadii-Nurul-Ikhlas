<?php

namespace App\Livewire\Menu\Program;

use App\Models\Berkas;
use App\Models\UserRegistration;
use Livewire\Component;

class PenerimaanMuridBaruNext extends Component
{
    public $nik = '';
    public $nama_lengkap = '';
    public $id_registration = '';
    public $foto_siswa = '';
    public $akta_lahir = '';
    public $kartu_keluarga = '';
    public $ijazah = '';
    public $dokumen_tulis = '';
    public $statusUpdate = false;
    public $statusComplete = false;



    public function cariData()
    {
        $this->validate([
            'nik' => 'required|string|max:16',
            'nama_lengkap' => 'required|string|max:255',
        ]);

        $user = UserRegistration::where('NIK', $this->nik)
            ->where('nama_anak', $this->nama_lengkap)
            ->first();
        if ($user) {
            $this->id_registration = $user->id_registration;

            $berkas = Berkas::where('id_registration', $this->id_registration)->first();
            
            
            if ($berkas) {
                if ($berkas->isComplete()) {
                    $this->statusComplete = true;
                }
                $this->foto_siswa = $berkas->foto_siswa;
                $this->akta_lahir = $berkas->akta_lahir;
                $this->kartu_keluarga = $berkas->kartu_keluarga;
                $this->ijazah = $berkas->ijazah;
                $this->dokumen_tulis = $berkas->dokumen_tulis;
            }

            if (!empty($this->foto_siswa) || !empty($this->akta_lahir) | !empty($this->kartu_keluarga) | !empty($this->ijazah) | !empty($this->dokumen_tulis)) {
                $this->statusUpdate = true;
            }
            
            session()->flash('success', 'Data ditemukan! Silakan lanjutkan mengisi berkas.');

        } else {
            session()->flash('error', 'Data tidak ditemukan! Silakan periksa kembali NIK dan nama lengkap.');
        }
    }

    public function render()
    {
        return view('livewire.menu.program.penerimaan-murid-baru-next');
    }
}
