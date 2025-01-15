<?php

namespace App\Http\Controllers;

use App\Models\reservasi;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('reservasi.index');
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
    
        // Simpan ke database
        $data = new reservasi();
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->no_hp = $request->no_hp;
        $data->jumlah_orang = $request->jumlah_orang;
        $data->tanggal = $request->tanggal;
        $data->waktu = $request->waktu;
        $data->note = $request->note;
        $data->save();

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Reservation has been successfully made!');
    }
    /**
     * Display the specified resource.
     */
    public function show(reservasi $reservasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(reservasi $reservasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, reservasi $reservasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(reservasi $reservasi)
    {
        //
    }
}
