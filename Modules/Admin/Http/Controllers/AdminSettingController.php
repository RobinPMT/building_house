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
            '_setting_fields' => 'name,key,value,active,icon',
            '_noPagination' => 1
        ]);
        return parent::__list($request, 'admin::setting.index');
    }

    public function update(Request $request)
    {
        $result = $this->getService()->updateKeySeting($request->all());
        return response()->json($result);
//        return view('admin::category.index', $viewData);
    }

    // TODO: Đổ dữ liệu ra vs cập nhật lại setting
}
