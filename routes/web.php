<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CoffeeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProjectController;
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
    Route::get('dang-ki', [AuthController::class, 'getRegister'])->name('get.register.auth');
    Route::post('dang-ki', [AuthController::class, 'postRegister'])->name('post.register.auth');
    Route::get('xac-nhan-tai-khoan', [AuthController::class, 'verifyAccount'])->name('get.verifyaccount.register.auth');

    Route::get('dang-nhap', [AuthController::class, 'getLogin'])->name('get.login.auth');
    Route::post('dang-nhap', [AuthController::class, 'postLogin'])->name('post.login.auth');

    Route::get('dang-xuat', [AuthController::class, 'getLogout'])->name('get.logout.user.auth');

    Route::get('/lay-lai-mat-khau', [AuthController::class, 'getForgotPassword'])->name('get.forget.password.auth');
    Route::post('/lay-lai-mat-khau', [AuthController::class, 'sendCoderesetPassword']);
    Route::get('/khoi-phuc-mat-khau', [AuthController::class, 'getresetPassword'])->name('get.reset.password.auth');
    Route::post('/khoi-phuc-mat-khau', [AuthController::class, 'resetPassword']);
});


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('bai-viet-{type}/', [PostController::class, 'listPost'])->name('get.list.post');
Route::get('bai-viet-{type}/{slug}', [PostController::class, 'postDetail'])->name('get.detail.post');

Route::get('thu-vien/', [LibraryController::class, 'listLibrary'])->name('get.list.library');
Route::get('thu-vien/{slug}', [LibraryController::class, 'libraryDetail'])->name('get.detail.library');

Route::get('giai-phap-kinh-doanh/', [CoffeeController::class, 'index'])->name('get.list.coffee');

Route::get('du-an/', [ProjectController::class, 'listProject'])->name('get.list.project');
Route::get('du-an/{slug}', [ProjectController::class, 'projectDetail'])->name('get.detail.project');

Route::get('san-pham/', [ProductController::class, 'listProduct'])->name('get.list.product');
Route::get('san-pham/{slug}', [ProductController::class, 'productDetail'])->name('get.detail.product');

Route::get('lien-he/', [ContactController::class, 'index'])->name('get.list.contact');
Route::post('lien-he/', [ContactController::class, 'store'])->name('get.store.contact');

Route::prefix('/')->middleware('CheckLoginUser')->group(function () {
    Route::get('thay-doi-mat-khau', [AuthController::class, 'getChangePassword'])->name('get.change.password.auth');
    Route::post('thay-doi-mat-khau', [AuthController::class, 'postChangePassword'])->name('post.change.password.auth');
    Route::get('thong-tin-ca-nhan', [AuthController::class, 'getProfile'])->name('get.change.profile.auth');
    Route::post('thong-tin-ca-nhan', [AuthController::class, 'postProfile'])->name('post.change.profile.auth');
});
