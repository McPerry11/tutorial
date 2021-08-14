<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class IndexController extends Controller
{
    public function login_get() {
        if (Auth::check()) {
            return redirect('dashboard');
        }
        return view('login');
    }

    public function login_post(Request $request) {
        $credentials = $request->only(['username', 'password']);
        if (Auth::attempt($credentials)) {
            return redirect('dashboard');
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('login');
    }

    public function dashboard() {
        return view('dashboard');
    }
}
