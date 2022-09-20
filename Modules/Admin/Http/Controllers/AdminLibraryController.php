<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\WebController;
use App\Http\Requests\AdminRequest;
use App\Models\Admin;
use App\Models\Contact;
use App\Models\Library;
use App\Models\Post;
use App\Services\LibraryService;
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
            $value = true;
            $view = 'admin::library.slide';
        } else {
            $value = false;
            $view = 'admin::library.index';
        }
        $request->merge([
            '_library_fields' => 'title,arr_image,avatar,freedom,author_id,arr_freedom',
            '_relations' => 'creator',
            '_filter' => 'freedom:'.$value,
            '_admin_fields' => 'name'
        ]);
        return parent::__list($request, 'admin::library.slide');
//        return view('admin::category.index', $viewData);
    }

    public function store(Request $request)
    {
        if ($request->hasFile('images')) {
            $imageName = new Library();
            $file = upload_image('images', 'slides_hot');
            if (isset($file['name'])) {
                $imageName->avatar = $file['name'];
            }
            $imageName->save();
        }
        return response()->json(['uploaded' => '/slides_hot/'.$imageName->avatar]);
    }

//    public function __update($id, $route = null)
//    {
//        return parent::__update($id, 'admin.get.list.post');
    ////        return view('admin::category.index', $viewData);
//    }

    public function action($action, $id)
    {
        $user = auth('admins')->user();
        $messages = '';
        if ($action) {
            $contact = Contact::find($id);
            switch ($action) {
                case 'delete':
                    $contact->delete();
                    $messages = 'Xóa thành công!';
                    break;
                case 'active':
                    $contact->active = $contact->active ? 0 : 1;
                    $contact->author_id = $contact->active ? $user->getKey() : null;
                    $contact->save();
                    $messages = 'Cập nhật thành công!';
                    break;
            }
        }
        return redirect()->back()->with('success', $messages);
    }
}
