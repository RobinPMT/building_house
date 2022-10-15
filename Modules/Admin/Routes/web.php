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

use App\Http\Controllers\DesignController;
use Illuminate\Support\Facades\Route;
use Modules\Admin\Http\Controllers\AdminAttributeController;
use Modules\Admin\Http\Controllers\AdminBannerController;
use Modules\Admin\Http\Controllers\AdminCategoryController;
use Modules\Admin\Http\Controllers\AdminContactController;
use Modules\Admin\Http\Controllers\AdminController;
use Modules\Admin\Http\Controllers\AdminFilterController;
use Modules\Admin\Http\Controllers\AdminHousingController;
use Modules\Admin\Http\Controllers\AdminLibraryController;
use Modules\Admin\Http\Controllers\AdminPolicyController;
use Modules\Admin\Http\Controllers\AdminPostController;
use Modules\Admin\Http\Controllers\AdminProductController;
use Modules\Admin\Http\Controllers\AdminProjectController;
use Modules\Admin\Http\Controllers\AdminQuestionController;
use Modules\Admin\Http\Controllers\AdminRoomController;
use Modules\Admin\Http\Controllers\AdminSettingController;
use Modules\Admin\Http\Controllers\AdminSettingKeyProductController;
use Modules\Admin\Http\Controllers\AdminTagController;
use Modules\Admin\Http\Controllers\AdminUserController;
use Modules\Admin\Http\Controllers\AdminWishlistController;
use Modules\Admin\Http\Controllers\HomeController;
use UniSharp\LaravelFilemanager\Lfm;

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
    Route::get('/profile', [AdminController::class, 'getProfile'])->name('admin.get.list.profile');
    Route::post('/profile', [AdminController::class, 'updateProfile'])->name('admin.update.profile');

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

    Route::group(['prefix' => 'user'], function () {
        Route::get('/', [AdminUserController::class, '__list'])->name('admin.get.list.user');
    });


    Route::group(['prefix' => 'post'], function () {
        Route::get('/', [AdminPostController::class, '__list'])->name('admin.get.list.post');
        Route::get('/check_slug', [AdminPostController::class, 'checkSlug'])->name('admin.checkSlug.post');
        Route::get('/check_order', [AdminPostController::class, 'checkOrder'])->name('admin.checkOrder.post');
        Route::get('/{id}', [AdminPostController::class, '__find'])->name('admin.get.find.post');
        Route::post('/', [AdminPostController::class, '__create'])->name('admin.store.post');
        Route::post('/{id}', [AdminPostController::class, '__update'])->name('admin.update.post');
        Route::get('/{action}/{id}', [AdminPostController::class, 'action'])->name('admin.get.action.post');
    });

    Route::group(['prefix' => 'setting'], function () {
        Route::get('/', [AdminSettingController::class, '__list'])->name('admin.get.list.setting');
//        Route::post('/home', [AdminSettingController::class, 'updateSettingHome'])->name('admin.store.setting');
        Route::post('/update', [AdminSettingController::class, 'update'])->name('admin.get.update.setting');
        Route::post('/', [AdminSettingController::class, '__create'])->name('admin.store.setting');
        Route::get('/list', [AdminSettingController::class, 'listSetting'])->name('admin.get.list.setting.arr');
        Route::get('/check_order', [AdminSettingController::class, 'checkOrder'])->name('admin.checkOrder.setting');
        Route::get('/{id}', [AdminSettingController::class, '__find'])->name('admin.get.find.setting');
        Route::post('/{id}', [AdminSettingController::class, '__update'])->name('admin.update.setting');
        Route::get('/{action}/{id}', [AdminSettingController::class, 'action'])->name('admin.get.action.setting');
        Route::get('/delete_images/{id}/{image}', [AdminSettingController::class, 'deleteImages'])->name('admin.delete.images.setting');
    });

    Route::group(['prefix' => 'contact'], function () {
        Route::get('/', [AdminContactController::class, '__list'])->name('admin.get.list.contact');
        Route::post('/{id}', [AdminContactController::class, 'update'])->name('admin.get.update.contact');
        Route::get('/{action}/{id}', [AdminContactController::class, 'action'])->name('admin.get.action.contact');
    });

    Route::group(['prefix' => 'transaction'], function () {
        Route::get('/', [AdminWishlistController::class, '__list'])->name('admin.get.list.transaction');
        Route::get('/{action}/{id}', [AdminWishlistController::class, 'action'])->name('admin.get.action.transaction');
    });

    Route::group(['prefix' => 'library'], function () {
        Route::get('/slide', [AdminLibraryController::class, '__list'])->name('admin.get.list.slide');
        Route::get('/list/{id}', [AdminLibraryController::class, '__find'])->name('admin.get.find.library');
        Route::post('/slide', [AdminLibraryController::class, 'store'])->name('admin.store.slide');
        Route::get('/{action}/{id}', [AdminLibraryController::class, 'action'])->name('admin.get.action.slide');



        Route::get('/check_slug', [AdminLibraryController::class, 'checkSlug'])->name('admin.checkSlug.library');
        Route::get('/check_order', [AdminLibraryController::class, 'checkOrder'])->name('admin.checkOrder.library');
        Route::get('/list', [AdminLibraryController::class, '__list'])->name('admin.get.list.library');
        Route::post('/list', [AdminLibraryController::class, '__create'])->name('admin.store.library');
        Route::post('/list/{id}', [AdminLibraryController::class, '__update'])->name('admin.update.library');
        Route::delete('/delete_images/{id}/{image}', [AdminLibraryController::class, 'deleteImages'])->name('admin.delete.images.library');
    });

    Route::group(['prefix' => 'product'], function () {
        Route::get('/', [AdminProductController::class, '__lists'])->name('admin.get.list.product');
        Route::get('/check_slug', [AdminProductController::class, 'checkSlug'])->name('admin.checkSlug.product');
        Route::get('/check_order', [AdminProductController::class, 'checkOrder'])->name('admin.checkOrder.product');
        Route::get('/{id}', [AdminProductController::class, '__find'])->name('admin.get.find.product');
        Route::post('/', [AdminProductController::class, '__create'])->name('admin.store.product');
        Route::post('/{id}', [AdminProductController::class, '__update'])->name('admin.update.product');
        Route::get('/{action}/{id}', [AdminProductController::class, 'action'])->name('admin.get.action.product');
        Route::get('/action_images/{id}/{image}', [AdminProductController::class, 'actionImages'])->name('admin.action.images.product');
        Route::delete('/delete_images/{id}/{image}', [AdminProductController::class, 'deleteImages'])->name('admin.delete.images.product');
    });

    Route::group(['prefix' => 'category'], function () {
        Route::get('/', [AdminCategoryController::class, '__list'])->name('admin.get.list.category');
        Route::get('/check_slug', [AdminCategoryController::class, 'checkSlug'])->name('admin.checkSlug.category');
        Route::get('/check_order', [AdminCategoryController::class, 'checkOrder'])->name('admin.checkOrder.category');
        Route::get('/{id}', [AdminCategoryController::class, '__find'])->name('admin.get.find.category');
        Route::post('/', [AdminCategoryController::class, '__create'])->name('admin.store.category');
        Route::post('/{id}', [AdminCategoryController::class, '__update'])->name('admin.update.category');
        Route::get('/{action}/{id}', [AdminCategoryController::class, 'action'])->name('admin.get.action.category');
    });

    Route::group(['prefix' => 'setting_key_product'], function () {
        Route::get('/', [AdminSettingKeyProductController::class, '__list'])->name('admin.get.list.setting_key_product');
        Route::get('/{id}', [AdminSettingKeyProductController::class, '__find'])->name('admin.get.find.setting_key_product');
        Route::post('/', [AdminSettingKeyProductController::class, '__create'])->name('admin.store.setting_key_product');
        Route::post('/{id}', [AdminSettingKeyProductController::class, '__update'])->name('admin.update.setting_key_product');
        Route::get('/{action}/{id}', [AdminSettingKeyProductController::class, 'action'])->name('admin.get.action.setting_key_product');
    });

    Route::group(['prefix' => 'room'], function () {
        Route::get('/', [AdminRoomController::class, '__list'])->name('admin.get.list.room');
        Route::get('/check_slug', [AdminRoomController::class, 'checkSlug'])->name('admin.checkSlug.room');
        Route::get('/check_order/{parent_id}/{current_id}', [AdminRoomController::class, 'checkOrder'])->name('admin.checkOrder.room');
        Route::get('/render_room_with_product/{product_id}', [AdminRoomController::class, 'renderRoomWithProduct']);
        Route::get('/{id}', [AdminRoomController::class, '__find'])->name('admin.get.find.room');
        Route::post('/', [AdminRoomController::class, '__create'])->name('admin.store.room');
        Route::post('/{id}', [AdminRoomController::class, '__update'])->name('admin.update.room');
        Route::get('/{action}/{id}', [AdminRoomController::class, 'action'])->name('admin.get.action.room');
    });

    Route::group(['prefix' => 'attribute'], function () {
        Route::get('/', [AdminAttributeController::class, '__list'])->name('admin.get.list.attribute');
        Route::get('/check_slug', [AdminAttributeController::class, 'checkSlug'])->name('admin.checkSlug.attribute');
        Route::get('/{id}', [AdminAttributeController::class, '__find'])->name('admin.get.find.attribute');
        Route::post('/', [AdminAttributeController::class, '__create'])->name('admin.store.attribute');
        Route::post('/{id}', [AdminAttributeController::class, '__update'])->name('admin.update.attribute');
        Route::get('/{action}/{id}', [AdminAttributeController::class, 'action'])->name('admin.get.action.attribute');
    });

    Route::group(['prefix' => 'banner'], function () {
        Route::get('/', [AdminBannerController::class, '__list'])->name('admin.get.list.banner');
        Route::get('/check_order', [AdminBannerController::class, 'checkOrder'])->name('admin.checkOrder.banner');
        Route::get('/{id}', [AdminBannerController::class, '__find'])->name('admin.get.find.banner');
        Route::post('/', [AdminBannerController::class, '__create'])->name('admin.store.banner');
        Route::post('/{id}', [AdminBannerController::class, '__update'])->name('admin.update.banner');
        Route::get('/{action}/{id}', [AdminBannerController::class, 'action'])->name('admin.get.action.banner');
    });

    Route::group(['prefix' => 'tag'], function () {
        Route::get('/', [AdminTagController::class, '__list'])->name('admin.get.list.tag');
        Route::get('/{id}', [AdminTagController::class, '__find'])->name('admin.get.find.tag');
        Route::post('/', [AdminTagController::class, '__create'])->name('admin.store.tag');
        Route::post('/{id}', [AdminTagController::class, '__update'])->name('admin.update.tag');
        Route::get('/{action}/{id}', [AdminTagController::class, 'action'])->name('admin.get.action.tag');
    });

    Route::group(['prefix' => 'filter'], function () {
        Route::get('/', [AdminFilterController::class, '__list'])->name('admin.get.list.filter');
        Route::get('/check_order', [AdminFilterController::class, 'checkOrder'])->name('admin.checkOrder.filter');
        Route::get('/{id}', [AdminFilterController::class, '__find'])->name('admin.get.find.filter');
        Route::post('/', [AdminFilterController::class, '__create'])->name('admin.store.filter');
        Route::post('/{id}', [AdminFilterController::class, '__update'])->name('admin.update.filter');
        Route::get('/{action}/{id}', [AdminFilterController::class, 'action'])->name('admin.get.action.filter');
    });

    Route::group(['prefix' => 'project'], function () {
        Route::get('/', [AdminProjectController::class, '__list'])->name('admin.get.list.project');
        Route::get('/list/{id}', [AdminProjectController::class, '__find'])->name('admin.get.find.project');
        Route::post('/', [AdminProjectController::class, '__create'])->name('admin.store.project');
        Route::post('/{id}', [AdminProjectController::class, '__update'])->name('admin.update.project');
        Route::get('/check_slug', [AdminProjectController::class, 'checkSlug'])->name('admin.checkSlug.project');
        Route::get('/check_order', [AdminProjectController::class, 'checkOrder'])->name('admin.checkOrder.project');
        Route::get('/{action}/{id}', [AdminProjectController::class, 'action'])->name('admin.get.action.project');
        Route::delete('/delete_images/{id}/{image}', [AdminProjectController::class, 'deleteImages'])->name('admin.delete.images.project');
    });

    Route::group(['prefix' => 'housing'], function () {
        Route::get('/', [AdminHousingController::class, '__list'])->name('admin.get.list.housing');
        Route::get('/check_order', [AdminHousingController::class, 'checkOrder'])->name('admin.checkOrder.housing');
        Route::get('/list/{id}', [AdminHousingController::class, '__find'])->name('admin.get.find.housing');
        Route::post('/', [AdminHousingController::class, '__create'])->name('admin.store.housing');
        Route::post('/{id}', [AdminHousingController::class, '__update'])->name('admin.update.housing');
//        Route::get('/check_slug', [AdminHousingController::class, 'checkSlug'])->name('admin.checkSlug.housing');
        Route::get('/{action}/{id}', [AdminHousingController::class, 'action'])->name('admin.get.action.housing');
//        Route::delete('/delete_images/{id}/{image}', [AdminHousingController::class, 'deleteImages'])->name('admin.delete.images.housing');
    });

    Route::group(['prefix' => 'policy'], function () {
//        Route::get('/shopping', [AdminPolicyController::class, 'indexShopping'])->name('admin.get.list.shopping.policy');
//        Route::post('/shopping/{id}', [AdminPolicyController::class, 'updateShopping'])->name('admin.update.shopping.policy');
//
//        Route::get('/security', [AdminPolicyController::class, 'indexSecurity'])->name('admin.get.list.security.policy');
//        Route::post('/security/{id}', [AdminPolicyController::class, 'updateSecurity'])->name('admin.update.security.policy');
//
//        Route::get('/transport', [AdminPolicyController::class, 'indexTransport'])->name('admin.get.list.transport.policy');
//        Route::post('/transport/{id}', [AdminPolicyController::class, 'updateTransport'])->name('admin.update.transport.policy');
//
//        Route::get('/insurance', [AdminPolicyController::class, 'indexInsurance'])->name('admin.get.list.insurance.policy');
//        Route::post('/insurance/{id}', [AdminPolicyController::class, 'updateInsurance'])->name('admin.update.insurance.policy');
        Route::get('/', [AdminPolicyController::class, '__list'])->name('admin.get.list.policy');
        Route::get('/check_slug', [AdminPolicyController::class, 'checkSlug'])->name('admin.checkSlug.policy');
        Route::get('/check_order', [AdminPolicyController::class, 'checkOrder'])->name('admin.checkOrder.policy');
        Route::get('/{id}', [AdminPolicyController::class, '__find'])->name('admin.get.find.policy');
        Route::post('/', [AdminPolicyController::class, '__create'])->name('admin.store.policy');
        Route::post('/{id}', [AdminPolicyController::class, '__update'])->name('admin.update.policy');
        Route::get('/{action}/{id}', [AdminPolicyController::class, 'action'])->name('admin.get.action.policy');
    });

    Route::group(['prefix' => 'question'], function () {
        Route::get('/', [AdminQuestionController::class, '__list'])->name('admin.get.list.question');
        Route::get('/{id}', [AdminQuestionController::class, '__find'])->name('admin.get.find.question');
        Route::post('/', [AdminQuestionController::class, '__create'])->name('admin.store.question');
        Route::post('/{id}', [AdminQuestionController::class, '__update'])->name('admin.update.question');
        Route::get('/{action}/{id}', [AdminQuestionController::class, 'action'])->name('admin.get.action.question');
    });

    Route::get('thiet-ke/{slug}', [DesignController::class, 'detailWishlist'])->name('get.detail.wishlists.design');
    Route::group(['prefix' => 'laravel-filemanager'], function () {
        Lfm::routes();
    });
});
