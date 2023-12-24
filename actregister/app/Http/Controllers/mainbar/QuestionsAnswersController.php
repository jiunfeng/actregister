<?php

namespace App\Http\Controllers\mainbar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionsAnswersController extends Controller
{

    public function questionsanswers()
    {
        $data = DB::table('QuestionsAnswers')->get()->toArray();
        // dd($data);
        return view('questionsanswers', ['qaData' => $data]);
    }
}