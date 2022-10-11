<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\WebController;
use App\Http\Requests\AdminRequest;
use App\Models\Admin;
use App\Models\Post;
use App\Services\PostService;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class AdminPostController extends WebController
{
    /**
     * @inheritDoc
     */
    protected function getService(): PostService
    {
        return services()->postService();
    }

    protected function getRequest()
    {
//        return c(AdminRequest::class);
        return request();
    }

    public function __list(Request $request, $view = null)
    {
        $request->merge([
            '_post_fields' => 'title,description,content,active,hot,description_seo,title_seo,avatar,view,arr_active,arr_hot,tag_ids,type,type_name,keyword_seo,order',
            '_relations' => 'creator',
            '_admin_fields' => 'name',
            '_orderBy' => 'order:desc'
//            '_tag_fields' => 'id'
//            '_filter' => 'user_not_myself:1;'
        ]);
        return parent::__list($request, 'admin::post.index');
//        return view('admin::category.index', $viewData);
    }

    public function __create(Request $request, $route = null)
    {
        return parent::__create($request, 'admin.get.list.post');
//        return view('admin::category.index', $viewData);
    }

    public function __find(Request $request, $is_json = false)
    {
        $request->merge([
            '_post_fields' => 'title,description,content,active,hot,description_seo,title_seo,avatar,view,active,hot,slug,tag_ids,type,type_name,keyword_seo,order',
            '_relations' => 'creator',
//            '_tag_fields' => 'id'
        ]);
        return parent::__find($request, true);
    }

    public function __update($id, $route = null)
    {
        return parent::__update($id, 'admin.get.list.post');
//        return view('admin::category.index', $viewData);
    }

    public function action($action, $id)
    {
        $messages = '';
        if ($action) {
            $post = Post::find($id);
            switch ($action) {
                case 'delete':
                    $post->delete();
                    //TODO: xoa file ra khoi sourse
                    $messages = 'Xóa thành công!';
                    break;
                case 'active':
                    $post->active = $post->active ? 0 : 1;
                    $post->save();
                    $messages = 'Cập nhật thành công!';
                    break;
                case 'hot':
                    $post->hot = $post->hot ? 0 : 1;
                    $post->save();
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
}
