<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\WebController;
use App\Models\Setting;
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
            '_setting_fields' => 'name,key,value,active,icon,type,avatar,arr_active,arr_avatar,order',
            '_noPagination' => 1,
            '_orderBy' => 'order:desc'
        ]);
        return parent::__list($request, 'admin::setting.index');
    }

    public function __create(Request $request, $route = null)
    {
        return parent::__create($request, 'admin.get.list.setting');
    }

    public function __find(Request $request, $is_json = false)
    {
        $request->merge([
            '_setting_fields' => 'value,active,type,avatar,arr_active,order',
        ]);
        return parent::__find($request, true);
    }

    public function update(Request $request)
    {
        $result = $this->getService()->updateKeySeting($request->all());
        return response()->json($result);
    }

    public function __update($id, $route = null)
    {
        return parent::__update($id, null);
    }

//    public function updateSettingHome(Request $request) //lợi ích housing
//    {
//        $result = $this->getService()->updateSettingHome($request);
//        if ($result) {
//            return redirect()->back()->with('success', 'Cập nhật thành công!');
//        }
//        return redirect()->back()->with('danger', 'Thêm mới thất bại!');
//    }

    public function listSetting(Request $request)
    {
        $request->merge([
            '_setting_fields' => 'name,key,value,active,icon',
            '_filter' => 'not_coffee:1',
            '_noPagination' => 1,
            '_orderBy' => 'id:asc',
        ]);
        return response()->json($this->getService()->getMany($request));
    }

    public function action($action, $id)
    {
        $messages = '';
        if ($action) {
            $post = Setting::find($id);
            switch ($action) {
                case 'delete':
                    $post->delete();
                    //TODO: xoa file ra khoi sourse
                    $messages = 'Xóa thành công!';
                    break;
                case 'active':
                    $post->active = $post->active ? 0 : 1;
                    $post->save();
                    $messages = 'Cập nhật thành công!';
                    break;
            }
        }
        return redirect()->back()->with('success', $messages);
//        return response()->json(['success' => $messages]);
    }

    public function deleteImages($id, $image)
    {
        if (trim($image) != '') {
            $setting = Setting::find($id);
            if (isset($setting)) {
                $arr = json_decode($setting->avatar);
                if (($key = array_search($image, $arr)) !== false) {
                    unset($arr[$key]);
                    $setting->avatar = json_encode(array_values($arr));
                    $setting->save();
                    //TODO: xoa file ra khoi sourse
                    return response()->json(['status' => true]);
                }
            }
            return response()->json(['status' => false]);
        }
        return response()->json(['status' => false]);
    }

    public function checkOrder()
    {
        $count = $this->getService()->where('type', Setting::TYPE_HOME)->count();
        return response()->json(['order' => $count + 1]);
    }
}
