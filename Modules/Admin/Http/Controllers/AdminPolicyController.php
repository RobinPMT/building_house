<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\WebController;
use App\Models\Policy;
use App\Models\Setting;
use App\Services\PolicyService;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class AdminPolicyController extends WebController
{
    /**
     * @inheritDoc
     */
    protected function getService(): PolicyService
    {
        return services()->policyService();
    }

    protected function getRequest()
    {
//        return c(AdminRequest::class);
        return request();
    }

    public function __list(Request $request, $view = null)
    {
        $request->merge([
            '_policy_fields' => 'title,slug,active,description_seo,title_seo,keyword_seo,arr_active,content,order',
            '_admin_fields' => 'name',
            '_noPagination' => 1,
//            '_filter' => 'user_not_myself:1;'
        ]);
        return parent::__list($request, 'admin::policy.index');
    }

    public function __create(Request $request, $route = null)
    {
        return parent::__create($request, 'admin.get.list.policy');
    }

    public function __find(Request $request, $is_json = false)
    {
        $request->merge([
            '_policy_fields' => 'title,slug,active,description_seo,title_seo,keyword_seo,arr_active,content,order',
        ]);
        return parent::__find($request, true);
    }

    public function __update($id, $route = null)
    {
        return parent::__update($id, 'admin.get.list.policy');
    }

    public function action($action, $id)
    {
        $messages = '';
        if ($action) {
            $policy = Policy::find($id);
            switch ($action) {
                case 'delete':
                    $policy->delete();
                    //TODO: xoa file ra khoi sourse
                    $messages = 'Xóa thành công!';
                    break;
                case 'active':
                    $policy->active = $policy->active ? 0 : 1;
                    $policy->save();
                    $messages = 'Cập nhật thành công!';
                    break;
            }
        }
        return redirect()->back()->with('success', $messages);
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createslug(Policy::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }

    public function checkOrder()
    {
        $count = $this->getService()->latest()->first();
        return response()->json(['order' => isset($count->order) ? $count->order + 1 : 1]);
    }

//    /**
//     * @inheritDoc
//     */
//    protected function getService()
//    {
//        return services()->settingService();
//    }
//
//    public function indexShopping()
//    {
//        return $this->index('shopping');
//    }
//
//    public function updateShopping($id, Request $request)
//    {
//        return $this->update($id, 'shopping', $request);
//    }
//
//    public function indexSecurity()
//    {
//        return $this->index('security');
//    }
//
//    public function updateSecurity($id, Request $request)
//    {
//        return $this->update($id, 'security', $request);
//    }
//
//    public function indexTransport()
//    {
//        return $this->index('transport');
//    }
//
//    public function updateTransport($id, Request $request)
//    {
//        return $this->update($id, 'transport', $request);
//    }
//
//    public function indexInsurance()
//    {
//        return $this->index('insurance');
//    }
//
//    public function updateInsurance($id, Request $request)
//    {
//        return $this->update($id, 'insurance', $request);
//    }
//
//    public function index($key)
//    {
//        $setting = services()->settingService()->where(['active' => Setting::ACTIVE, 'key' => $key, 'type' => 'policy'])->first();
//        $viewData = [
//            "$key" => $setting,
//        ];
//        return view("admin::policy.$key", $viewData);
//    }
//
//    public function update($id, $key, Request $request)
//    {
//        $setting = services()->settingService()->where(['active' => Setting::ACTIVE, 'key' => $key, 'type' => 'policy'])->find($id);
//        if ($setting) {
//            $setting->value = $request->value;
//            $setting->save();
//            return redirect()->back()->with('success', 'Cập nhật thành công!');
//        }
//        return redirect()->back()->with('danger', 'Cập nhật thất bại!');
//    }
}
