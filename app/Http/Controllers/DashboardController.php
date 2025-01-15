<?php

namespace App\Http\Controllers;

use App\Models\reservasi;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        $data['reservasi'] = reservasi::all();
        return view('dashboard', $data);
    }
}
