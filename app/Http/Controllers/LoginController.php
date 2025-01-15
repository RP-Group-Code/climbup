<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login.index');
    }

    public function logins(Request $request)
    {
        $email  = $request->email;;
        $pass = $request->password;
        $user = User::where(['email' => $email, 'password' => $pass])->get();

        if (count($user) > 0) {
            Session::put("user", $user);
            $namalogin  = session('user')[0]['nama_lengkap'];
            if (session('user')[0]['role'] != 'user') {
                // Alert::success('LOGIN BERHASIL', "Selamat Datang $namalogin ");
                return redirect()->route("Dashboard Reservasi");
            } else {

                return redirect()->back();
            }
        } else {
            return back()->with('loginEror', true);
        }
    }

    public function logout()
    {
        Session::flush();
        return redirect('/');
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
