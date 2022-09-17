<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\WebController;
use App\Services\AdminService;
use Illuminate\Http\Request;

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
        return request();
    }

    public function __list(Request $request, $view = null)
    {
        $request->merge([
            '_admin_fields' => 'name,phone,email,avatar,active',
        ]);
        return parent::__list($request, 'admin::employee.index');
//        return view('admin::category.index', $viewData);
    }

    public function __create(Request $request, $route = null)
    {
        return parent::__create($request, 'admin.get.list.admin');
//        return view('admin::category.index', $viewData);
    }
}
