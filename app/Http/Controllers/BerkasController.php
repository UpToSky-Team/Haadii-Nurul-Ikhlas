<?php

namespace App\Http\Controllers;

use App\Models\Berkas;
use App\Http\Requests\StoreBerkasRequest;
use App\Http\Requests\UpdateBerkasRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BerkasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_registration' => 'required',
            'foto_siswa' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'akta_lahir' => 'nullable|file|mimes:pdf|max:2048',
            'kartu_keluarga' => 'nullable|file|mimes:pdf|max:2048',
            'ijazah' => 'nullable|file|mimes:pdf|max:2048',
            'dokumen_tulis' => 'nullable|file|mimes:pdf|max:2048',
        ]);

        if ($request->hasFile('foto_siswa')) {
            $fotoSiswa = $request->file('foto_siswa');
            $fotoSiswaName = 'berkas/foto_siswa/' . time() . '_' . $request->nama_lengkap . '.' . $fotoSiswa->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('', $fotoSiswa, $fotoSiswaName);
        }

        if ($request->hasFile('akta_lahir')) {
            $aktaLahir = $request->file('akta_lahir');
            $aktaLahirName = 'berkas/akta_lahir/' . time() . '_akta_lahir_' . $request->id_registration . '.' . $aktaLahir->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('', $aktaLahir, $aktaLahirName);
        }

        if ($request->hasFile('kartu_keluarga')) {
            $kartuKeluarga = $request->file('kartu_keluarga');
            $kartuKeluargaName = 'berkas/kartu_keluarga/' . time() . '_kartu_keluarga_' . $request->id_registration . '.' . $kartuKeluarga->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('', $kartuKeluarga, $kartuKeluargaName);
        }

        if ($request->hasFile('ijazah')) {
            $ijazah = $request->file('ijazah');
            $ijazahName = 'berkas/ijazah/' . time() . '_ijazah_' . $request->id_registration . '.' . $ijazah->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('', $ijazah, $ijazahName);
        }

        if ($request->hasFile('dokumen_tulis')) {
            $dokumenTulis = $request->file('dokumen_tulis');
            $dokumenTulisName = 'berkas/dokumen_tulis/' . time() . '_dokumen_tulis_' . $request->id_registration . '.' . $dokumenTulis->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('', $dokumenTulis, $dokumenTulisName);
        }
        $fillId = $request->id_registration;

        Berkas::create([
            'id_registration' => $request->id_registration,
            'foto_siswa' => $fotoSiswaName ?? null,
            'akta_lahir' => $aktaLahirName ?? null,
            'kartu_keluarga' => $kartuKeluargaName ?? null,
            'ijazah' => $ijazahName ?? null,
            'dokumen_tulis' => $dokumenTulisName ?? null,
        ]);
        

        return redirect()->route('pmb.next')->with(['success' => 'Pendaftaran berhasil! Silakan lanjutkan ke langkah berikutnya.']);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Berkas $berkas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Berkas $berkas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_registration' => 'required',
            'foto_siswa' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'akta_lahir' => 'nullable',
            'kartu_keluarga' => 'nullable',
            'ijazah' => 'nullable',
            'dokumen_tulis' => 'nullable',
        ]);

        if ($request->hasFile('foto_siswa')) {
            $fotoSiswa = $request->file('foto_siswa');
            $fotoSiswaName = 'berkas/foto_siswa/' . time() . '_' . $request->nama_lengkap . '.' . $fotoSiswa->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('', $fotoSiswa, $fotoSiswaName);
        }

        if ($request->hasFile('akta_lahir')) {
            $aktaLahir = $request->file('akta_lahir');
            $aktaLahirName = 'berkas/akta_lahir/' . time() . '_akta_lahir_' . $request->id_registration . '.' . $aktaLahir->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('', $aktaLahir, $aktaLahirName);
        }

        if ($request->hasFile('kartu_keluarga')) {
            $kartuKeluarga = $request->file('kartu_keluarga');
            $kartuKeluargaName = 'berkas/kartu_keluarga/' . time() . '_kartu_keluarga_' . $request->id_registration . '.' . $kartuKeluarga->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('', $kartuKeluarga, $kartuKeluargaName);
        }

        if ($request->hasFile('ijazah')) {
            $ijazah = $request->file('ijazah');
            $ijazahName = 'berkas/ijazah/' . time() . '_ijazah_' . $request->id_registration . '.' . $ijazah->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('', $ijazah, $ijazahName);
        }

        if ($request->hasFile('dokumen_tulis')) {
            $dokumenTulis = $request->file('dokumen_tulis');
            $dokumenTulisName = 'berkas/dokumen_tulis/' . time() . '_dokumen_tulis_' . $request->id_registration . '.' . $dokumenTulis->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('', $dokumenTulis, $dokumenTulisName);
        }

        $berkas = Berkas::where('id_registration', $id)->first();
        if ($berkas) {
            $berkas->update([
                'id_registration' => $request->id_registration,
                'foto_siswa' => $fotoSiswaName ?? $berkas->foto_siswa,
                'akta_lahir' => $aktaLahirName ?? $berkas->akta_lahir,
                'kartu_keluarga' => $kartuKeluargaName ?? $berkas->kartu_keluarga,
                'ijazah' => $ijazahName ?? $berkas->ijazah,
                'dokumen_tulis' => $dokumenTulisName ?? $berkas->dokumen_tulis,
            ]);
        }

        return redirect()->route('pmb.next')->with(['success' => 'Pendaftaran berhasil! Silakan lanjutkan ke langkah berikutnya.']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Berkas $berkas)
    {
        //
    }
}
