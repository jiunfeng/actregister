<?php

namespace App\Http\Controllers\mainbar;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news()
    {
        // 需要在AppServiceProvider.php將paginate使用bootstrap
        $data = News::orderBy('weights')->paginate(5);
        // dd($data);
        return view('news', ['newsData' => $data]);
    }
}