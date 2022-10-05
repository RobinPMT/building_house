<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\WebController;
use App\Http\Requests\AdminRequest;
use App\Models\Admin;
use App\Services\AdminService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends WebController
{
    /**
     * @inheritDoc
     */
    protected function getService(): AdminService
    {
        return services()->adminService();
    }

    protected function getRequest()
    {
        return c(AdminRequest::class);
    }

    public function __list(Request $request, $view = null)
    {
        $request->merge([
            '_admin_fields' => 'name,phone,email,avatar,active,arr_active',
            '_filter' => 'user_not_myself:1;'
        ]);
        return parent::__list($request, 'admin::employee.index');
//        return view('admin::category.index', $viewData);
    }

    public function __create(Request $request, $route = null)
    {
        return parent::__create($request, 'admin.get.list.admin');
//        return view('admin::category.index', $viewData);
    }

    public function __find(Request $request, $is_json = false)
    {
        $request->merge([
            '_admin_fields' => 'name,phone,email,avatar,active',
        ]);
        return parent::__find($request, true);
    }

    public function __update($id, $route = null)
    {
        return parent::__update($id, 'admin.get.list.admin');
//        return view('admin::category.index', $viewData);
    }

    public function action($action, $id)
    {
        $messages = '';
        if ($action) {
            $user = Admin::find($id);
            switch ($action) {
                case 'delete':
                    $user->delete();
                    $messages = 'Xóa thành công!';
                    break;
                case 'active':
                    //sdd('ok');
                    $user->active = $user->active ? 0 : 1;
                    $user->save();
                    $messages = 'Cập nhật thành công!';
                    break;
            }
        }
        return redirect()->back()->with('success', $messages);
    }

    public function getProfile()
    {
        $user = auth('admins')->user();
        $viewData = [
            'user' => $user
        ];
        return view('admin::profile.index', $viewData);
    }

    public function updateProfile(Request $request)
    {
        $user = auth('admins')->user();
        if ($request->name) {
            $user->name = $request->name;
        }
        if ($request->name) {
            $user->phone = $request->phone;
        }
        if ($request->password) {
            if (Hash::check($request->password_old, $user->password)) {
                $user->password = $request->password;
            }
        }
        $user->save();

        return redirect()->back()->with('success', 'Cập nhật thông tin thành công!');
    }
}
