<?php

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

use Illuminate\Support\Facades\Route;
use Modules\Admin\Http\Controllers\AdminController;
use Modules\Admin\Http\Controllers\AdminPostController;
use Modules\Admin\Http\Controllers\AdminSettingController;
use Modules\Admin\Http\Controllers\HomeController;

//Route::prefix('admin')->group(function () {
//    Route::get('/', 'HomeController@index');
//});

Route::prefix('authenticate')->group(function () {
    Route::get('/login', 'AdminAuthController@getLogin')->name('admin.login');
    Route::post('/login', 'AdminAuthController@postLogin');
    Route::get('/logout', 'AdminAuthController@getLogoutAdmin')->name('admin.logout');
});

Route::prefix('admin')->middleware('CheckLoginAdmin')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('admin.home');

    Route::group(['prefix' => 'employee'], function () {
        Route::get('/', [AdminController::class, '__list'])->name('admin.get.list.admin');
        Route::get('/{id}', [AdminController::class, '__find'])->name('admin.get.find.admin');
//        Route::get('/create', [AdminController::class, 'create'])->name('admin.create.admin');
        Route::get('/check_slug', [AdminController::class, 'checkSlug'])->name('admin.checkSlug.admin');
        Route::post('/', [AdminController::class, '__create'])->name('admin.store.admin');
//        Route::get('/update/{id}', [AdminController::class, 'edit'])->name('admin.edit.admin');
        Route::post('/{id}', [AdminController::class, '__update'])->name('admin.update.admin');
//        Route::delete('/delete/{id}', [AdminController::class, '__delete'])->name('admin.delete.admin');
        Route::get('/{action}/{id}', [AdminController::class, 'action'])->name('admin.get.action.admin');
    });


    Route::group(['prefix' => 'post'], function () {
        Route::get('/', [AdminPostController::class, '__list'])->name('admin.get.list.post');
        Route::get('/check_slug', [AdminPostController::class, 'checkSlug'])->name('admin.checkSlug.post');
        Route::get('/{id}', [AdminPostController::class, '__find'])->name('admin.get.find.post');
        Route::post('/', [AdminPostController::class, '__create'])->name('admin.store.post');
        Route::post('/{id}', [AdminPostController::class, '__update'])->name('admin.update.post');
        Route::get('/{action}/{id}', [AdminPostController::class, 'action'])->name('admin.get.action.post');
    });

//    Route::group(['prefix' => 'setting'], function () {
//        Route::get('/', [AdminSettingController::class, '__list'])->name('admin.get.list.setting');
//        Route::post('/', [AdminSettingController::class, '__update'])->name('admin.get.update.setting');
//    });
});

Route::group(['prefix' => 'setting'], function () {
    Route::get('/', [AdminSettingController::class, '__list'])->name('admin.get.list.setting');
    Route::post('/', [AdminSettingController::class, '__update'])->name('admin.get.update.setting');
});
