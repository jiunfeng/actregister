<?php

namespace App\Http\Controllers\mainbar;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news()
    {
        $data = News::orderBy('weights')->get()->toArray();
        // dd($data);
        return view('news', ['newsData' => $data]);
    }
}
