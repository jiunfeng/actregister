<?php

namespace App\Http\Controllers\mainbar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news()
    {
        return view('news');
    }
}
