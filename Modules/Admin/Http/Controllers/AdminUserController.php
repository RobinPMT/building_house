<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\WebController;
use App\Models\Admin;
use App\Services\UserService;
use Illuminate\Http\Request;

class AdminUserController extends WebController
{
    /**
     * @inheritDoc
     */
    protected function getService(): UserService
    {
        return services()->userService();
    }

    protected function getRequest()
    {
        return \request();
    }

    public function __list(Request $request, $view = null)
    {
        $request->merge([
            '_user_fields' => 'name,phone,email,avatar,active,arr_active',
        ]);
        return parent::__list($request, 'admin::user.index');
    }

//    public function __create(Request $request, $route = null)
//    {
//        return parent::__create($request, 'admin.get.list.admin');
//    }
//
//    public function __find(Request $request, $is_json = false)
//    {
//        $request->merge([
//            '_admin_fields' => 'name,phone,email,avatar,active',
//        ]);
//        return parent::__find($request, true);
//    }
//
//    public function __update($id, $route = null)
//    {
//        return parent::__update($id, 'admin.get.list.admin');
//    }
//
//    public function action($action, $id)
//    {
//        $messages = '';
//        if ($action) {
//            $user = Admin::find($id);
//            switch ($action) {
//                case 'delete':
//                    $user->delete();
//                    $messages = 'Xóa thành công!';
//                    break;
//                case 'active':
//                    //sdd('ok');
//                    $user->active = $user->active ? 0 : 1;
//                    $user->save();
//                    $messages = 'Cập nhật thành công!';
//                    break;
//            }
//        }
//        return redirect()->back()->with('success', $messages);
//    }
}
