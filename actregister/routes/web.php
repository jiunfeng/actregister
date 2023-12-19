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
use App\Http\Controllers\members\LoginController;

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
})->name('home');

// web mainbar 路由控制

Route::get('news', [NewsController::class, 'news'])->name('news');
Route::get('announcements', [AnnouncementsController::class, 'announcements'])->name('announcements');
Route::get('signup', [SignupController::class, 'signup'])->name('signup');
Route::get('membercenter', [MemberCenterController::class, 'membercenter'])->name('membercenter')->middleware('auth');
Route::get('questionsanswers', [QuestionsAnswersController::class, 'questionsanswers'])->name('questionsanswers');
Route::get('contactus', [ContactUsController::class, 'contactus'])->name('contactus');
Route::post('contactusSend', [ContactUsController::class, 'contactusSend'])->name('contactusSend');
Route::get('membersignup', [membersignup::class, 'membersignuplayout'])->name('membersignuplayout');

//會員註冊
Route::post('users/', [membersignup::class, 'membersignup'])->name('mambersignup');
// 會員登入
// 路由群組name要在最後加上.才可以找得到
Route::name('members.')->prefix('members')->group(
    function () {

        Route::get('/', [LoginController::class, 'loginlayout'])->name('loginlayout');
        Route::post('/login', [LoginController::class, 'login'])->name('login');
        Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    }
);