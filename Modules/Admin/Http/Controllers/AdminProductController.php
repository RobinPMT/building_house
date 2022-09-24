<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\WebController;
use App\Http\Requests\AdminRequest;
use App\Models\Admin;
use App\Models\Post;
use App\Models\SettingKeyProduct;
use App\Services\ProductService;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class AdminProductController extends WebController
{
    /**
     * @inheritDoc
     */
    protected function getService(): ProductService
    {
        return services()->productService();
    }

    protected function getRequest()
    {
//        return c(AdminRequest::class);
        return request();
    }

    public function __lists(Request $request, $data, $view = null)
    {
        $request->merge([
            '_product_fields' => 'title,description,content,active,hot,description_seo,title_seo,avatar,view,arr_active,arr_hot',
            '_relations' => 'creator',
            '_admin_fields' => 'name'
//            '_filter' => 'user_not_myself:1;'
        ]);
        $settingkeys = services()->settingKeyProductService()->where('active', SettingKeyProduct::ACTIVE)->select('name', 'key', 'html')->get()->toArray();
        $data = [
            'settingkeys' => $settingkeys
        ];
        return parent::__lists($request, $data, 'admin::product.index');
//        return view('admin::category.index', $viewData);
    }

    public function __create(Request $request, $route = null)
    {
        return parent::__create($request, 'admin.get.list.product');
//        return view('admin::category.index', $viewData);
    }

    public function __find(Request $request, $is_json = false)
    {
        $request->merge([
            '_product_fields' => 'title,description,content,active,hot,description_seo,title_seo,avatar,view,active,hot,slug',
            '_relations' => 'creator'
        ]);
        return parent::__find($request, true);
    }

    public function __update($id, $route = null)
    {
        return parent::__update($id, 'admin.get.list.product');
//        return view('admin::category.index', $viewData);
    }

    public function action($action, $id)
    {
        $messages = '';
        if ($action) {
            $product = Post::find($id);
            switch ($action) {
                case 'delete':
                    $product->delete();
                    //TODO: xoa file ra khoi sourse
                    $messages = 'Xóa thành công!';
                    break;
                case 'active':
                    $product->active = $product->active ? 0 : 1;
                    $product->save();
                    $messages = 'Cập nhật thành công!';
                    break;
                case 'hot':
                    $product->hot = $product->hot ? 0 : 1;
                    $product->save();
                    $messages = 'Cập nhật thành công!';
                    break;
            }
        }
        return redirect()->back()->with('success', $messages);
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createslug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
