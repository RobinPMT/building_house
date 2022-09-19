<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\WebController;
use App\Http\Requests\AdminRequest;
use App\Models\Admin;
use App\Models\Contact;
use App\Models\Post;
use App\Services\ContactService;
use Illuminate\Http\Request;

class AdminContactController extends WebController
{
    /**
     * @inheritDoc
     */
    protected function getService(): ContactService
    {
        return services()->contactService();
    }

    protected function getRequest()
    {
//        return c(AdminRequest::class);
        return request();
    }

    public function __list(Request $request, $view = null)
    {
        $request->merge([
            '_contact_fields' => 'phone,active,name,email,arr_active',
            '_relations' => 'handler',
            '_admin_fields' => 'name'
        ]);
        return parent::__list($request, 'admin::contact.index');
//        return view('admin::category.index', $viewData);
    }

//    public function __create(Request $request, $route = null)
//    {
//        return parent::__create($request, 'admin.get.list.post');
    ////        return view('admin::category.index', $viewData);
//    }

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
