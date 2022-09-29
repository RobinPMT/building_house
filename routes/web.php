<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});



//Auth::routes();

Route::group(['namespace' => 'Auth'], function () {
    Route::get('dang-ki', [AuthController::class, 'getRegister'])->name('get.register');
    Route::post('dang-ki', [AuthController::class, 'postRegister'])->name('post.register');
    Route::get('xac-nhan-tai-khoan', [AuthController::class, 'verifyAccount'])->name('get.verifyaccount.register');

    Route::get('dang-nhap', [AuthController::class, 'getLogin'])->name('get.login');
    Route::post('dang-nhap', [AuthController::class, 'postLogin'])->name('post.login');
    Route::get('dang-xuat', [AuthController::class, 'getLogout'])->name('get.logout.user');

    Route::get('/lay-lai-mat-khau', [AuthController::class, 'getForgotPassword'])->name('get.forget.password');
    Route::post('/lay-lai-mat-khau', [AuthController::class, 'sendCoderesetPassword']);
    Route::get('/khoi-phuc-mat-khau', [AuthController::class, 'getresetPassword'])->name('get.reset.password');
    Route::post('/khoi-phuc-mat-khau', [AuthController::class, 'resetPassword']);
});


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('bai-viet/', [PostController::class, 'listPost'])->name('get.list.post');
Route::get('bai-viet/{slug}', [PostController::class, 'postDetail'])->name('get.detail.post');
