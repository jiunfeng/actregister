<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class membersignup extends Controller
{
    public function membersignuplayout()
    {
        return view('membersignup');
    }

    public function membersignup(Request $req)
    {

        $validator = $req->validate([
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ], [
            'password.confirmed' => '密碼和確認密碼不匹配。',
            'password.min' => '密碼太短。',
            'email.unique' => '這個電子郵件地址已經被使用。',
            // 在這裡添加其他自訂錯誤消息...
        ]);
    }
}
