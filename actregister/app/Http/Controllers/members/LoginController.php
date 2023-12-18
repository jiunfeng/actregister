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

        $req->validate(
            [
                'email' => ['required'],
                'password' => ['required']
            ],
        );

        $credentials = [
            'email' => $req->input('email'),
            'password' => $req->input('password')
        ];


        if (Auth::attempt($credentials)) {
            $req->session()->regenerate();
            // dd(auth()->user());
            // $user = Auth::user();
            // dd($user);
            // dd(session()->get('auth'));
            // dd($credentials);

            // 重新導向

            return redirect()->intended(route('home'));
        } else {

            return back()->with('error', '帳號或密碼錯誤。');
        }

        // if (Auth::check()) {
        //     // 用户已通过身份验证
        //     $user = Auth::user();
        //     dd($user);
        //     // dd($user);
        //     dd('有過');
        // } else {
        //     // 用户未通过身份验证
        //     dd('User not authenticated');
        // }

    }
    public function logout()
    {
        Auth::logout();
        return redirect()->intended(route('home'));
    }
}
