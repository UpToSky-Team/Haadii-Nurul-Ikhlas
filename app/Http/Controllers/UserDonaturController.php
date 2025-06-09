<?php

namespace App\Http\Controllers;

use App\Models\StatusDonasi;
use App\Models\UserDonatur;
use App\Http\Requests\StoreUserDonaturRequest;
use App\Http\Requests\UpdateUserDonaturRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UserDonaturController extends Controller
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
            'nama' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'telepon' => 'required|string|max:255',
            'jumlah_donasi' => 'required|numeric',
            'nama_bank' => 'required|string|max:255',
            'jenis_donasi' => 'required',
            'bukti_transfer' => 'required|file|max:10048',
        ], [
            'nama.required' => 'Nama wajib diisi.',
            'nama.string' => 'Nama harus berupa teks.',
            'nama.max' => 'Nama maksimal 255 karakter.',
            'email.email' => 'Format email tidak valid.',
            'email.max' => 'Email maksimal 255 karakter.',
            'telepon.required' => 'Nomor telepon wajib diisi.',
            'telepon.string' => 'Nomor telepon harus berupa teks.',
            'telepon.max' => 'Nomor telepon maksimal 255 karakter.',
            'jumlah_donasi.required' => 'Jumlah donasi wajib diisi.',
            'jumlah_donasi.numeric' => 'Jumlah donasi harus berupa angka.',
            'nama_bank.required' => 'Nama bank wajib diisi.',
            'nama_bank.string' => 'Nama bank harus berupa teks.',
            'nama_bank.max' => 'Nama bank maksimal 255 karakter.',
            'jenis_donasi.required' => 'Jenis donasi wajib dipilih.',
            'bukti_transfer.required' => 'Bukti transfer wajib diunggah.',
            'bukti_transfer.file' => 'Bukti transfer harus berupa file.',
            'bukti_transfer.max' => 'Ukuran file bukti transfer maksimal 10MB.',
        ]);

        try {
            if ($request->hasFile('bukti_transfer')) {
                $file = $request->file('bukti_transfer');
                $fileName = 'bukti_transfer/' . time() . '_' . $request->nama . '.' . $file->getClientOriginalExtension();

                $fileUuid = Str::uuid()->toString();
                UserDonatur::create([
                    'id_user_donatur' => $fileUuid,
                    'nama' => $request->nama,
                    'email' => $request->email,
                    'phone' => $request->telepon,
                    'jumlah_donasi' => $request->jumlah_donasi,
                    'id_jenis_donasi' => $request->jenis_donasi,
                    'id_bank' => $request->nama_bank,
                    'tanggal_transfer' => $request->tanggal_transfer,
                    'bukti_transfer' => $fileName,
                ]);

                StatusDonasi::create([
                    'id_user_donatur' => $fileUuid,
                ]);

                Storage::disk('public')->putFileAs('', $file, $fileName);

                return redirect()->back()->with('success', 'Berhasil mengupload bukti transfer');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(UserDonatur $userDonatur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserDonatur $userDonatur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserDonaturRequest $request, UserDonatur $userDonatur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserDonatur $userDonatur)
    {
        //
    }
}
