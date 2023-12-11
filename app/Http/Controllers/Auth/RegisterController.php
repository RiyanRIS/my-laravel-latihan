<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create(){
        return view('auth.register', [
            'title' => "Register"
        ]);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:4',
        ]);

        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);
        return redirect('login')->with(APP_NOTIF, [1, 'Pendaftaran berhasil, silahkan login!']);
    }
}