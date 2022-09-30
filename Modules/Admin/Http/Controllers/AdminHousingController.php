<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\WebController;
use App\Models\Housing;
use App\Models\Setting;
use App\Services\HousingService;
use Illuminate\Http\Request;

class AdminHousingController extends WebController
{
    /**
     * @inheritDoc
     */
    protected function getService(): HousingService
    {
        return services()->housingService();
    }

    protected function getRequest()
    {
        return request();
    }

    public function __list(Request $request, $view = null)
    {
        $request->merge([
            '_housing_fields' => 'title,active,avatar_main,avatar_not_main,author_id,content,arr_active',
            '_noPagination' => 1,
        ]);
        $setting = services()->settingService()->where(['key' =>'coffee', 'type' => Setting::TYPE_COFFEE])->select('id', 'name', 'key', 'avatar', 'value')->first()->toArray();
        $data = [
            'setting' => $setting,
        ];
        return parent::__lists($request, $data, 'admin::housing.index');
    }

    public function __create(Request $request, $route = null)
    {
        return parent::__create($request, 'admin.get.list.housing');
    }

    public function __find(Request $request, $is_json = false)
    {
        $request->merge([
            '_housing_fields' => 'title,active,avatar_main,avatar_not_main,author_id,content,arr_active',
        ]);
        return parent::__find($request, true);
    }

    public function __update($id, $route = null)
    {
        return parent::__update($id, 'admin.get.list.housing');
    }

    public function action($action, $id)
    {
        $messages = '';
        if ($action) {
            $housing = Housing::find($id);
            switch ($action) {
                case 'delete':
                    $housing->delete();
                    //TODO: xoa file ra khoi sourse
                    $messages = 'Xóa thành công!';
                    break;
                case 'active':
                    $housing->active = $housing->active ? 0 : 1;
                    $housing->save();
                    $messages = 'Cập nhật thành công!';
                    break;
            }
        }
        return redirect()->back()->with('success', $messages);
    }
}
