<?php

namespace App\Livewire\Menu\Program;

use App\Models\Berkas;
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
    public $transkrip_nilai = '';



    public function cariData()
    {
        $this->validate([
            'nik' => 'required|string|max:16',
            'nama_lengkap' => 'required|string|max:255',
        ]);

        $user = \App\Models\UserRegistration::where('NIK', $this->nik)
            ->where('nama_anak', $this->nama_lengkap)
            ->first();
        if ($user) {
            $this->id_registration = $user->id_registration;
            $berkas = Berkas::where('id_registration', $this->id_registration)->first();
            
            if ($berkas) {
                $this->foto_siswa = $berkas->foto_siswa;
                $this->akta_lahir = $berkas->akta_lahir;
                $this->kartu_keluarga = $berkas->kartu_keluarga;
                $this->ijazah = $berkas->ijazah;
                $this->transkrip_nilai = $berkas->transkrip_nilai;
            }
            
            session()->flash('success', 'Data ditemukan! Silakan lanjutkan mengisi berkas.');

        } else {
            // session()->flash('error', 'Data tidak ditemukan! Silakan periksa kembali NIK dan nama lengkap.');
        }
    }

    public function render()
    {
        return view('livewire.menu.program.penerimaan-murid-baru-next');
    }
}
