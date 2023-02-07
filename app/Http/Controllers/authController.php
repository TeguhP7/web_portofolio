<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;

class authController extends Controller
{

    // protected $model;



    // public function __construct()
    // {
    //     $this->model = "Aku";
    // }

    function index()
    {
        // $data['data'] = $this->model . 'Ganteng';
        // return view('auth.index', ['data'=>$data]);
        // return view('auth.login');
        return view('auth.index');

    }

    function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'email',
            'password' => 'required'
        ]);


        $user = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        //  fungsi attempt menggunakan pengecekan password dengan hash bcrypt. jadi database harus berisi pass yang di bcrypt
        if (Auth::attempt($user)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        } else {
            return redirect()->to('auth')->with('error', 'Maaf password yang Anda masukan salah!');
        }

        // } else {
        //     return redirect()->to('auth')->with('error', 'Maaf email anda belum terdaftar');
        // }

        // return back()->withErrors([
        //     'email' => 'The provided credentials do not match our records.',
        // ])->onlyInput('email');
    }

    function callback()
    {
        $user = Socialite::driver('google')->user();
        $id = $user->id;
        $email = $user->email;
        $name = $user->name;
        $user = User::updateOrCreate(
            ['email' => $email],
            [
                'google_id' => $id,
                'name' => $name,
            ]
        );

        $cek = User::where('email', $email)->count();
        if ($cek > 0) {
            Auth::login($user);
            return redirect()->to('dashboard');
        } else {
            return redirect()->to('auth')->with('error', 'Maaf email anda belum terdaftar');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->to('auth');
    }
}