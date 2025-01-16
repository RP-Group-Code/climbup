<?php

namespace App\Http\Controllers;

use App\Models\reservasi;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        $today = Carbon::today()->toDateString(); // Format: 'YYYY-MM-DD'
        $countToday = Reservasi::whereDate('tanggal', $today)->count();
        // $countYesterday = Reservasi::whereDate('tanggal', '<', $today)->count();
        $countDone = Reservasi::where('status', 'Selesai')->count();
        $countCancel = Reservasi::where('status', 'Batal')->count();

        $data = [
            'reservasiToday' => $countToday,
            'countDone' => $countDone,
            'countCancel' => $countCancel,
            'reservasi' => Reservasi::all(),
        ];
        return view('dashboard', $data);
    }
    public function updateStatus(Request $request)
    {
        // Validasi data
        // $request->validate([
        //     'id' => 'required|exists:reservasis,id',
        //     'status' => 'required|in:Batal,Selesai,Reservasi',
        // ]);

        // Update status pada database
        $reservasi = Reservasi::find($request->id);
        $reservasi->status = $request->status;
        $reservasi->save();

        return response()->json(['message' => 'Status berhasil diperbarui!']);
    }

    public function getDataReservasi()
    {
        $reservasi = Reservasi::all(); // Ambil data terbaru dari database
        return view('partials.reservasi_table', compact('reservasi'))->render(); // Return partial view
    }
}
