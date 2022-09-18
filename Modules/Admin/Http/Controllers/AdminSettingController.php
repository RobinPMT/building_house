<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\WebController;
use App\Services\SettingService;
use Illuminate\Http\Request;

class AdminSettingController extends WebController
{
    protected function getRequest()
    {
        return request();
    }

    /**
     * @inheritDoc
     */
    protected function getService(): SettingService
    {
        return services()->settingService();
    }

    public function __list(Request $request, $view = null)
    {
        $request->merge([
            '_setting_fields' => 'name,key,value,active',
            '_noPagination' => 1
        ]);
        return parent::__list($request, 'admin::setting.index');
    }

    public function __update($id, $route = null)
    {
        return parent::__update($id, 'admin.get.list.setting');
    }

    // TODO: Đổ dữ liệu ra vs cập nhật lại setting
}
