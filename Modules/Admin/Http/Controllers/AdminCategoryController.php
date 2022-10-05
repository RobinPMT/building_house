<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\WebController;
use App\Models\Category;
use App\Services\CategoryService;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class AdminCategoryController extends WebController
{
    /**
     * @inheritDoc
     */
    protected function getService(): CategoryService
    {
        return services()->categoryService();
    }

    protected function getRequest()
    {
//        return c(AdminRequest::class);
        return request();
    }

    public function __list(Request $request, $view = null)
    {
        $request->merge([
            '_category_fields' => 'title,slug,parent_id,icon,active,avatar,author_id,description_seo,title_seo,arr_active',
            '_relations' => 'creator,parent',
            '_admin_fields' => 'name',
            '_noPagination' => 1,
//            '_filter' => 'user_not_myself:1;'
        ]);
        return parent::__list($request, 'admin::category.index');
//        return view('admin::category.index', $viewData);
    }

    public function __create(Request $request, $route = null)
    {
        return parent::__create($request, 'admin.get.list.category');
//        return view('admin::category.index', $viewData);
    }

    public function __find(Request $request, $is_json = false)
    {
        $request->merge([
            '_category_fields' => 'title,slug,parent_id,icon,active,avatar,author_id,description_seo,title_seo,arr_active',
            '_relations' => 'creator'
        ]);
        return parent::__find($request, true);
    }

    public function __update($id, $route = null)
    {
        return parent::__update($id, 'admin.get.list.category');
//        return view('admin::category.index', $viewData);
    }

    public function action($action, $id)
    {
        $messages = '';
        if ($action) {
            $category = Category::find($id);
            switch ($action) {
                case 'delete':
                    $category->delete();
                    //TODO: xoa file ra khoi sourse
                    $messages = 'Xóa thành công!';
                    break;
                case 'active':
                    $category->active = $category->active ? 0 : 1;
                    $category->save();
                    $messages = 'Cập nhật thành công!';
                    break;
                case 'hot':
                    $category->hot = $category->hot ? 0 : 1;
                    $category->save();
                    $messages = 'Cập nhật thành công!';
                    break;
            }
        }
        return redirect()->back()->with('success', $messages);
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createslug(Category::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }

    public static function showCategories($categories, $parent_id = null, $char = '')
    {
        foreach ($categories as $key => $item) {
            if ($item['parent_id'] == $parent_id) {
                echo '<option value="'.$item['id'].'">';
                echo $char . $item['title'];
                echo '</option>';

                unset($categories[$key]);

                self::showCategories($categories, $item['id'], $char.'&nbsp&nbsp&nbsp&nbsp&nbsp');
            }
        }
    }
}
