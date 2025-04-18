<?php

namespace App\Http\Controllers;

use App\Models\UserDonatur;
use App\Http\Requests\StoreUserDonaturRequest;
use App\Http\Requests\UpdateUserDonaturRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
    public function create(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'email|max:255',
            'telepon' => 'required|string|max:255',
            'jumlah_donasi' => 'required|numeric',
            'nama_bank' => 'required|string|max:255',
            'tanggal_transfer' => 'required|date',
            'bukti_transfer' => 'required|file|mimes:jpeg,png,jpg,gif,pdf|max:2048',
        ]);

        if ($request->hasFile('bukti_transfer')) {
            $file = $request->file('bukti_transfer');
            $fileName = time() . '_' . $request->nama . $file->getClientOriginalName();

            UserDonatur::create([
                'nama' => $request->nama,
                'email' => $request->email,
                'phone' => $request->telepon,
                'jumlah_donasi' => $request->jumlah_donasi,
                'nama_bank' => $request->nama_bank,
                'tanggal_transfer' => $request->tanggal_transfer,
                'bukti_transfer' => $fileName,
            ]);

            Storage::disk('public')->putFileAs('bukti_transfer', $file, $fileName);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserDonaturRequest $request)
    {
        //
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
