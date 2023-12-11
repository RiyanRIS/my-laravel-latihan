<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login', [
            'title' => 'Halaman Login',
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            // $user = Auth::user();
            // dd($user);
            return redirect()->intended('home')->with(APP_NOTIF, [1, "Selamat datang kembali, riyan!"]);
        }

        return redirect()->back()->with(APP_NOTIF, [0, "Kombinasi username dan password belum sesuai!"]);
    }

    public function username()
    {
        return 'username';
    }

    public function logout(){
        Auth::logout();

        return redirect('login')->with(APP_NOTIF, [1, "Sampai jumpa kembali!"]);
    }
}
