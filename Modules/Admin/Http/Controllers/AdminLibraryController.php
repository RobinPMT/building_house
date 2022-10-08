<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\WebController;
use App\Http\Requests\AdminRequest;
use App\Models\Admin;
use App\Models\Library;
use App\Services\LibraryService;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class AdminLibraryController extends WebController
{
    /**
     * @inheritDoc
     */
    protected function getService(): LibraryService
    {
        return services()->libraryService();
    }

    protected function getRequest()
    {
//        return c(AdminRequest::class);
        return request();
    }

    public function __list(Request $request, $view = null)
    {
        if ($request->route()->getName() === 'admin.get.list.slide') {
            $value = 1;
            $view = 'admin::library.slide';
        } else {
            $value = 0;
            $view = 'admin::library.index';
        }
        $request->merge([
            '_library_fields' => 'title,arr_image,avatar,freedom,author_id,arr_freedom,arr_banner_product,arr_active,arr_banner_home,avatar_url,arr_hot,title_seo,description_seo,keyword_seo',
            '_relations' => 'creator',
            '_filter' => 'freedom:'."$value",
            '_admin_fields' => 'name',
            '_noPagination' => $value
        ]);
        return parent::__list($request, $view);
    }

    public function __find(Request $request, $is_json = false)
    {
        $request->merge([
            '_library_fields' => 'title,arr_image,avatar,freedom,author_id,arr_active,arr_banner_home,avatar_url,slug,active,arr_hot,hot,title_seo,description_seo,keyword_seo',
//            '_relations' => 'creator'
        ]);
        return parent::__find($request, true);
    }

    public function store(Request $request)
    {
        $user = auth('admins')->user();
        if ($request->hasFile('images')) {
            $imageName = new Library();
            $file = upload_image('images', 'slides_hot');
            if (isset($file['name'])) {
                $imageName->avatar = $file['name'];
                $imageName->author_id = $user->getKey() ?? null;
                $imageName->slug = SlugService::createslug(Library::class, 'slug', time());
            }
            $imageName->save();
        }
        return response()->json(['uploaded' => '/slides_hot/'.$imageName->avatar]);
    }

    public function __create(Request $request, $route = null)
    {
        return parent::__create($request, 'admin.get.list.library');
//        return view('admin::category.index', $viewData);
    }

    public function __update($id, $route = null)
    {
        return parent::__update($id, 'admin.get.list.library');
        //        return view('admin::category.index', $viewData);
    }

    public function action($action, $id)
    {
        $user = auth('admins')->user();
        $messages = '';
        if ($action) {
            $image = Library::find($id);
            switch ($action) {
                case 'delete':
                    $image->delete();
                    //TODO: xoa file ra khoi sourse
                    $messages = 'Xóa thành công!';
                    break;
                case 'active':
                    $image->active = $image->active ? 0 : 1;
                    $image->save();
                    $messages = 'Cập nhật thành công!';
                    break;
                case 'banner_home':
                    $image->banner_home = $image->banner_home ? 0 : 1;
                    $image->save();
                    $messages = 'Cập nhật thành công!';
                    break;
                case 'banner_product':
                    $image->banner_product = $image->banner_product ? 0 : 1;
                    $image->save();
                    $messages = 'Cập nhật thành công!';
                    break;
                case 'hot':
                    $image->hot = $image->hot ? 0 : 1;
                    $image->save();
                    $messages = 'Cập nhật thành công!';
                    break;
            }
        }
        return redirect()->back()->with('success', $messages);
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createslug(Library::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }

    public function deleteImages($id, $image)
    {
        if (trim($image) != '') {
            $library = Library::find($id);
            if (isset($library)) {
                $arr = json_decode($library->arr_image);
                if (($key = array_search($image, $arr)) !== false) {
                    unset($arr[$key]);
                    $library->arr_image = json_encode(array_values($arr));
                    $library->save();
                    //TODO: xoa file ra khoi sourse
                    return response()->json(['status' => true]);
                }
            }
            return response()->json(['status' => false]);
        }
        return response()->json(['status' => false]);
    }
}
