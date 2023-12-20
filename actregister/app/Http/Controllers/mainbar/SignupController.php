<?php

namespace App\Http\Controllers\mainbar;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SignupController extends Controller
{
    public function signup()
    {
        $data = DB::table('orderItems')->select(
            '*',
            DB::raw('DATE(startTime) as startTime'),
            DB::raw('DATE(endTime) as endTime')
        )->get();

        return view('signup', ['data' => $data]);
    }

    public function signupGame(Request $req)
    {

        // 檢查會員是否已經報名該賽事
        $exits = DB::table('userOrder')->where('order_id', $req->gameId)->where('user_id', $req->userId)->exists();
        if ($exits) {
            session()->flash('signup_status', 'exits');
            session()->flash('signup_message', '活動已經報名，請勿重複報名。');
            return redirect()->route('signup');
        }

        DB::table('userOrder')->insert([
            'order_id' => $req->input('gameId'),
            'user_id' => $req->input('userId')
        ]);
        session()->flash('signup_status', 'success');
        session()->flash('signup_message', "$req->ordername" . "活動報名成功!");
        return redirect()->route('signup');
    }
}
