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
            'tanggal_transfer' => 'required|date',
            'bukti_transfer' => 'required|file|max:2048',
        ]);

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
