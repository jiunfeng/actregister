<?php

namespace App\Http\Controllers\mainbar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuestionsAnswersController extends Controller
{

    public function questionsanswers()
    {
        return view('questionsanswers');
    }
}
