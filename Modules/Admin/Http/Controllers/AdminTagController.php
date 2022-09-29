<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\WebController;
use App\Models\Category;
use App\Models\Tag;
use App\Services\TagService;
use Illuminate\Http\Request;

class AdminTagController extends WebController
{
    /**
     * @inheritDoc
     */
    protected function getService(): TagService
    {
        return services()->tagService();
    }

    protected function getRequest()
    {
//        return c(AdminRequest::class);
        return request();
    }

    public function __list(Request $request, $view = null)
    {
        $request->merge([
            '_tag_fields' => 'title,active,arr_active',
            '_noPagination' => 1,
//            '_filter' => 'user_not_myself:1;'
        ]);
        return parent::__list($request, 'admin::tag.index');
//        return view('admin::category.index', $viewData);
    }

    public function __create(Request $request, $route = null)
    {
        return parent::__create($request, 'admin.get.list.tag');
//        return view('admin::category.index', $viewData);
    }

    public function __find(Request $request, $is_json = false)
    {
        $request->merge([
            '_tag_fields' => 'title,active,arr_active',
        ]);
        return parent::__find($request, true);
    }

    public function __update($id, $route = null)
    {
        return parent::__update($id, 'admin.get.list.tag');
//        return view('admin::category.index', $viewData);
    }

    public function action($action, $id)
    {
        $messages = '';
        if ($action) {
            $tag = Tag::find($id);
            switch ($action) {
                case 'delete':
                    $tag->delete();
                    //TODO: xoa file ra khoi sourse
                    $messages = 'Xóa thành công!';
                    break;
                case 'active':
                    $tag->active = $tag->active ? 0 : 1;
                    $tag->save();
                    $messages = 'Cập nhật thành công!';
                    break;
            }
        }
        return redirect()->back()->with('success', $messages);
    }

    public static function showTags()
    {
        $tags = services()->tagService()->select('id', 'title')->get()->toArray();
        foreach ($tags as $key => $item) {
            echo '<option value="'.$item['id'].'">';
            echo  $item['title'];
            echo '</option>';
        }
    }
}
