<?php

namespace App\Http\Controllers;

use App\Models\Members;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;

class membersignup extends Controller
{
    public function membersignuplayout()
    {
        return view('membersignup');
    }

    public function membersignup(Request $req)
    {
        // dd($req);
        $validator = $req->validate([
            'username' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:Member'], //, 'unique:users' 加入這個可以跟資料庫驗證 users表示要驗證的表名
            'password' => ['required', 'bail', 'string', 'min:8', 'confirmed'],
            'mobile' => ['required', 'regex:/^\d{10}$/'],
        ], [
            'password.confirmed' => '密碼不相同。',
            'password.min' => '密碼最少8位數。',
            'email.unique' => '這個電子郵件地址已經被使用。',
            'mobile.regex' => '手機號碼格式錯誤',
            // 在這裡添加其他自訂錯誤消息...
        ]);

        $member = Members::create([
            'UserName' => $req->username,
            'Gender' => $req->gender,
            'Email' => $req->email,
            'Password' => Hash::make($req->password),
            'Mobile' => $req->mobile,
            'Address' => $req->address,
            'Birthdate' => $req->birthdate
        ]);

        session()->regenerate();
        $credentials = [
            'email' => $req->input('email'),
            'password' => $req->input('password')
        ];
        Auth::attempt($credentials);


        return redirect()->route('news');
    }
}
