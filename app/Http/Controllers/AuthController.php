<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $req)
    {
        $user = User::where(['username'=> $req->username, 'password' => $req->password])->first();
        if(!$user) {
            return redirect()->back()->with('error', 'Username atau Password Salah');
        }
        session(['user' => $user]);
        if($user->role == 'ADMIN') {
            return redirect()->route('dashboard');
            // dd($user);
        } else {
            return redirect()->route('user.index');
        }
    }

    public function logout()
    {
        session()->forget('user');
        return redirect()->route('login');
    }
}
