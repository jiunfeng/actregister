<?php

namespace App\Http\Controllers\members;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginlayout()
    {

        return view('members.login');
    }

    public function login(Request $req)
    {

        $req->validate([
            'email' => ['unique:Member'],
            'password' => ['unique:Member']
        ]);

        $credentials = [
            'email' => $req->input('email'),
            'Password' => $req->input('password'),
        ];
        if (Auth::attempt($credentials)) {
        } else {
            dd($credentials);
        }
        return view('news');
    }
}
