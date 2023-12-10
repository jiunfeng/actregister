<?php

namespace App\Http\Controllers\mainbar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MemberCenterController extends Controller
{
    public function membercenter()
    {
        return view('membercenter');
    }
}
