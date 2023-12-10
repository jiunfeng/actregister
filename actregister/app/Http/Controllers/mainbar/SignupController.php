<?php

namespace App\Http\Controllers\mainbar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function signup()
    {
        return view('signup');
    }
}
