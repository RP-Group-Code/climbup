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
        $countYesterday = Reservasi::whereDate('tanggal', '<', $today)->count();

        $data = [
            'reservasiToday' => $countToday,
            'countYesterday' => $countYesterday,
            'reservasi' => Reservasi::all(),
        ];
        return view('dashboard', $data);
    }
}
