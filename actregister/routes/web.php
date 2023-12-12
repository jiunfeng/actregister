<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\membersignup;
use App\Http\Controllers\mainbar\{
    AnnouncementsController,
    NewsController,
    SignupController,
    MemberCenterController,
    QuestionsAnswersController,
    ContactUsController
};


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', function () {
    return view('layout.app');
});

// web mainbar 路由控制

Route::get('news', [NewsController::class, 'news'])->name('news');
Route::get('announcements', [AnnouncementsController::class, 'announcements'])->name('announcements');
Route::get('signup', [SignupController::class, 'signup'])->name('signup');
Route::get('membercenter', [MemberCenterController::class, 'membercenter'])->name('membercenter');
Route::get('questionsanswers', [QuestionsAnswersController::class, 'questionsanswers'])->name('questionsanswers');
Route::get('contactus', [ContactUsController::class, 'contactus'])->name('contactus');
Route::get('membersignup', [membersignup::class, 'membersignuplayout'])->name('membersignuplayout');

//會員註冊
Route::post('users/', [membersignup::class, 'membersignup'])->name('mambersignup1');
