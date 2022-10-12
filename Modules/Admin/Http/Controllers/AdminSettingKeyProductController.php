<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\WebController;
use App\Models\SettingKeyProduct;
use App\Services\SettingKeyProductService;
use Illuminate\Http\Request;

class AdminSettingKeyProductController extends WebController
{
    /**
     * @inheritDoc
     */
    protected function getService(): SettingKeyProductService
    {
        return services()->settingKeyProductService();
    }

    protected function getRequest()
    {
//        return c(AdminRequest::class);
        return request();
    }

    public function __list(Request $request, $view = null)
    {
        $request->merge([
            '_setting_key_product_fields' => 'name,key,tag_type,active,html,arr_active',
//            '_noPagination' => 1,
            '_orderBy' => 'id:desc',
        ]);
        return parent::__list($request, 'admin::setting_key_product.index');
    }

    public function __create(Request $request, $route = null)
    {
        return parent::__create($request, 'admin.get.list.setting_key_product');
    }

    public function __find(Request $request, $is_json = false)
    {
        $request->merge([
            '_setting_key_product_fields' => 'name,key,tag_type,active,html,arr_active',
//            '_relations' => 'creator'
        ]);
        return parent::__find($request, true);
    }

    public function __update($id, $route = null)
    {
        return parent::__update($id, 'admin.get.list.setting_key_product');
    }

    public function action($action, $id)
    {
        $messages = '';
        if ($action) {
            $setting = SettingKeyProduct::find($id);
            switch ($action) {
                case 'delete':
                    $setting->delete();
                    $messages = 'Xóa thành công!';
                    break;
                case 'active':
                    $setting->active = $setting->active ? 0 : 1;
                    $setting->save();
                    $messages = 'Cập nhật thành công!';
                    break;
            }
        }
        return redirect()->back()->with('success', $messages);
    }
}
