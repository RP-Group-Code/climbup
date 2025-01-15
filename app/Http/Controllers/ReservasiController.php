<?php

namespace App\Http\Controllers;

use App\Models\reservasi;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ReservasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('reservasi.index');
    }
    public function data()
    {
        $data = reservasi::all();
        return view('reservasi.data', $data);
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
        $today = Carbon::today()->toDateString(); // Format: 'YYYY-MM-DD'
        $yr = date('y'); // Tahun dalam dua digit
        $dm = date('m'); // Bulan dalam dua digit

        // Hitung jumlah reservasi untuk hari ini
        $countToday = Reservasi::whereDate('created_at', $today)->count();
        $nextNumber = $countToday + 1; // Nomor antrian berikutnya

        // Simpan ke database
        $data = new reservasi();
        $yr = substr(date('y'), -2);
        $dm = date('m');

        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->no_hp = $request->no_hp;
        $data->jumlah_orang = $request->jumlah_orang;
        $data->tanggal = $request->tanggal;
        $data->waktu = $request->waktu;
        $data->note = $request->note;
        // Buat kode reservasi
        $kode = "CUCJKT/$dm/I$yr/$nextNumber";
        $data->kode_reservasi = $kode;

        $data->save();

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', "Reservation successfully made!. Your Code Reservatio is : " . $kode);
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
