<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\WebController;
use App\Http\Requests\AdminRequest;
use App\Models\Admin;
use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
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
        $filter = '';
        if ($request->category_id) {
            $filter .= "category_id:$request->category_id;";
        }
        $request->merge([
            '_product_fields' => 'title,description,content,active,hot,description_seo,title_seo,avatar_design,view,arr_active,arr_hot,longs,width,height,area,room_number,room_description,category_id,arr_image,slug,setting_keys,image_back_ground_design,title_seo,description_seo,keyword_seo,order',
            '_relations' => 'creator,category',
            '_category_fields' => 'title',
            '_admin_fields' => 'name',
            '_orderBy' => 'order',
            '_filter' => $filter,
//            '_setting_key_product_fields' => 'name,key,value,product_id',
//            '_filter' => 'user_not_myself:1;'
        ]);
        $settingkeys = services()->settingKeyProductService()->where('active', SettingKeyProduct::ACTIVE)->orderByDesc('tag_type')->select('name', 'key', 'html')->get()->toArray();
        $categories = services()->categoryService()->select('title', 'id', 'parent_id')->get()->toArray();
        $data = [
            'settingkeys' => $settingkeys,
            'categories' => $categories
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
            '_product_fields' => 'title,description,content,active,hot,description_seo,title_seo,avatar_design,view,arr_active,arr_hot,longs,width,height,area,room_number,room_description,category_id,arr_image,slug,setting_keys,image_back_ground_design,title_seo,description_seo,keyword_seo,order',
            '_relations' => 'creator,category',
            '_category_fields' => 'title',
//            '_admin_fields' => 'name'
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
            $product = Product::find($id);
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

    public function checkOrder()
    {
        $count = $this->getService()->count();
        return response()->json(['order' => $count + 1]);
    }

    public function deleteImages($id, $image)
    {
        if (trim($image) != '') {
            $product = Product::find($id);
            if (isset($product)) {
                $arr = json_decode($product->arr_image);
                if (is_array($arr) && count($arr) > 0) {
                    foreach ($arr as $key => $item) {
                        if ($item->image == $image) {
                            unset($arr[$key]);
                        }
                    }
//                    dd(array_values($arr));
                    $product->arr_image = json_encode(array_values($arr));
                    $product->save();
                    return response()->json(['status' => true]);
                }
                return response()->json(['status' => false]);
            }
            return response()->json(['status' => false]);
        }
        return response()->json(['status' => false]);
    }

    public function actionImages($id, $image)
    {
        if (trim($image) != '') {
            $product = Product::find($id);
            if (isset($product)) {
                $arr = json_decode($product->arr_image);
                if (is_array($arr) && count($arr) > 0) {
                    foreach ($arr as $item) {
                        if ($item->image == $image) {
                            $item->status = true;
                        } else {
                            $item->status = false;
                        }
                    }
                    $product->arr_image = json_encode($arr);
                    $product->save();
                    return redirect()->back()->with('success', 'Cập nhật thành công!');
                }
                return redirect()->back()->with('danger', 'Cập nhật thất bại!');
            }
            return redirect()->back()->with('danger', 'Cập nhật thất bại!');
        }
        return redirect()->back()->with('danger', 'Cập nhật thất bại!');
    }
}
