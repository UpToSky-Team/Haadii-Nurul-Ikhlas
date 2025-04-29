<?php

namespace App\Http\Controllers;

use App\Models\UserRegistration;
use App\Http\Requests\StoreUserRegistrationRequest;
use App\Http\Requests\UpdateUserRegistrationRequest;
use App\Models\StatusRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserRegistrationController extends Controller
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
            'nama_lengkap' => 'required|string|max:255',
            'no_hp' => 'nullable|string|max:15',
            'nama_wali' => 'required|string|max:255',
            'no_hp_wali' => 'required|string|max:15',
            'email_anak' => 'nullable|email|max:255',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'nik' => 'required|string|max:16|min:16',
            'sekolah_asal' => 'nullable|string|max:255',
            'npsn_sekolah_asal' => 'nullable|string|max:10',
        ]);

        $fillId = Str::uuid()->toString();

        try {
            $existingUser = UserRegistration::where('nama_anak', $request->nama_lengkap)
                ->where('NIK', $request->nik)
                ->first();

            if ($existingUser) {
                return redirect()->route('pmb.next')->with(['success' => 'Data sudah terdaftar! Silakan lanjutkan mengisi berkas.']);  
            }

            UserRegistration::create([
                'id_registration' => $fillId,
                'nama_anak' => $request->nama_lengkap,
                'no_hp' => $request->no_hp,
                'nama_wali' => $request->nama_wali,
                'no_hp_wali' => $request->no_hp_wali,
                'email_anak' => $request->email_anak,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'NIK' => $request->nik,
                'nama_sekolah_asal' => $request->sekolah_asal,
                'NPSN_sekolah_asal' => $request->npsn_sekolah_asal,
            ]);

            StatusRegistration::create([
                'id_registration' => $fillId,
            ]);

            return redirect()->route('pmb.next')->with(['success' => 'Pendaftaran berhasil! Silakan lanjutkan ke langkah berikutnya.', 'id_registration' => $fillId]);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(UserRegistration $userRegistration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserRegistration $userRegistration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRegistrationRequest $request, UserRegistration $userRegistration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserRegistration $userRegistration)
    {
        //
    }
}
