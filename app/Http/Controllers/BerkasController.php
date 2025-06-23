<?php

namespace App\Http\Controllers;

use App\Models\Berkas;
use App\Http\Requests\StoreBerkasRequest;
use App\Http\Requests\UpdateBerkasRequest;
use App\Models\UserRegistration;
// use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

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
        $validator = Validator::make($request->all(), [
            'id_registration' => 'required',
            'foto_siswa' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048',
            'akta_lahir' => 'nullable|file|mimes:pdf|max:10048',
            'kartu_keluarga' => 'nullable|file|mimes:pdf|max:10048',
            'ijazah' => 'nullable|file|mimes:pdf|max:10048',
            'dokumen_tulis' => 'nullable|file|mimes:pdf|max:10048',
        ], [
            'id_registration.required' => 'ID registrasi wajib diisi.',
            'foto_siswa.image' => 'Foto siswa harus berupa gambar.',
            'foto_siswa.mimes' => 'Foto siswa harus memiliki format jpeg, png, jpg, atau gif.',
            'foto_siswa.max' => 'Ukuran foto siswa tidak boleh lebih dari 5MB.',
            'akta_lahir.mimes' => 'Akta lahir harus berupa file PDF.',
            'akta_lahir.max' => 'Ukuran akta lahir tidak boleh lebih dari 10MB.',
            'kartu_keluarga.mimes' => 'Kartu keluarga harus berupa file PDF.',
            'kartu_keluarga.max' => 'Ukuran kartu keluarga tidak boleh lebih dari 10MB.',
            'ijazah.mimes' => 'Ijazah harus berupa file PDF.',
            'ijazah.max' => 'Ukuran ijazah tidak boleh lebih dari 10MB.',
            'dokumen_tulis.mimes' => 'Dokumen tulis harus berupa file PDF.',
            'dokumen_tulis.max' => 'Ukuran dokumen tulis tidak boleh lebih dari 10MB.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput()
            ->with([
                'error' => 'Terjadi kesalahan saat mengunggah berkas. Silakan periksa kembali data yang Anda isi.',
                'id_registration' => $request->id_registration
            ]);
        }

        try {
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

            return redirect()->route('pmb.next')->with(['success' => 'Pendaftaran berhasil! Silakan lanjutkan ke langkah berikutnya.', 'id_registration' => $request->id_registration]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => 'Terjadi kesalahan saat mengunggah berkas. Silakan coba lagi.', 'id_registration' => $request->id_registration]);
        }
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
        $validator = Validator::make($request->all(), [
            'id_registration' => 'required',
            'foto_siswa' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048',
            'akta_lahir' => 'nullable|file|mimes:pdf|max:10048',
            'kartu_keluarga' => 'nullable|file|mimes:pdf|max:10048',
            'ijazah' => 'nullable|file|mimes:pdf|max:10048',
            'dokumen_tulis' => 'nullable|file|mimes:pdf|max:10048',
        ], [
            'id_registration.required' => 'ID registrasi wajib diisi.',
            'foto_siswa.image' => 'Foto siswa harus berupa gambar.',
            'foto_siswa.mimes' => 'Foto siswa harus memiliki format jpeg, png, jpg, atau gif.',
            'foto_siswa.max' => 'Ukuran foto siswa tidak boleh lebih dari 5MB.',
            'akta_lahir.mimes' => 'Akta lahir harus berupa file PDF.',
            'akta_lahir.max' => 'Ukuran akta lahir tidak boleh lebih dari 10MB.',
            'kartu_keluarga.mimes' => 'Kartu keluarga harus berupa file PDF.',
            'kartu_keluarga.max' => 'Ukuran kartu keluarga tidak boleh lebih dari 10MB.',
            'ijazah.mimes' => 'Ijazah harus berupa file PDF.',
            'ijazah.max' => 'Ukuran ijazah tidak boleh lebih dari 10MB.',
            'dokumen_tulis.mimes' => 'Dokumen tulis harus berupa file PDF.',
            'dokumen_tulis.max' => 'Ukuran dokumen tulis tidak boleh lebih dari 10MB.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput()
            ->with([
                'error' => 'Terjadi kesalahan saat mengunggah berkas. Silakan periksa kembali data yang Anda isi.',
                'id_registration' => $request->id_registration
            ]);
        }

        
        try {
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

            $berkas->refresh();

            $register = UserRegistration::where('id_registration', operator: $id)->first();
            if ($register) {
                if ($berkas->isComplete()) {
                    $register->update([
                        'status_berkas' => 'Complete',
                    ]);
                }
            }

            return redirect()->route('pmb.next')->with(['success' => 'Pendaftaran berhasil! Silakan lanjutkan ke langkah berikutnya.', 'id_registration' => $request->id_registration]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => 'Terjadi kesalahan saat mengunggah berkas. Silakan coba lagi.', 'id_registration' => $request->id_registration]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Berkas $berkas)
    {
        //
    }
}
