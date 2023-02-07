<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class authDaftar extends Controller
{
    function daftar()
    {
        return view('auth.login');
    }

    public function daftar_aksi(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        // $daftar = User::create();
        return redirect()->to('auth')->with('message', 'Selamat Anda sudah terdaftar, Silahkan Login');
    }

}