<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function authenticating(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();
            if(Auth::user()->role_id == 1){
                return redirect('dashboard');
            }
            if(Auth::user()->role_id == 2){
                return redirect('profile');
            }
            // return redirect()->intended('dashboard');
        }
        Session::flash('username', 'failed');
        Session::flash('message','Kesalahan Username/Password');
        return redirect('/login');

// kevin12345
    }
        public function logout(Request $request)
        {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('login');
        }

        public function regist_process(Request $request)
        {
            $validated = $request->validate([
                'username' => 'required|unique:users|max:255',
                'password' => 'required|max:255',
            ]);


            $user= User::create($request->all());

            Session::flash('status','success');
            Session::flash('message', 'Registrasi Berhasil. Silakan Masuk');
            return redirect('register');
        }

}

