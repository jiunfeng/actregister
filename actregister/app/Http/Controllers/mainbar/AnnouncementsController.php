<?php

namespace App\Http\Controllers\mainbar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnnouncementsController extends Controller
{
    public function announcements()
    {
        return view('announcements');
    }
}
