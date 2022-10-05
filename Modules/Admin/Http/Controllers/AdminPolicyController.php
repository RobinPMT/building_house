<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\WebController;
use App\Models\Setting;
use Illuminate\Http\Request;

class AdminPolicyController extends WebController
{
    /**
     * @inheritDoc
     */
    protected function getService()
    {
        return services()->settingService();
    }

    public function indexShopping()
    {
        return $this->index('shopping');
    }

    public function updateShopping($id, Request $request)
    {
        return $this->update($id, 'shopping', $request);
    }

    public function indexSecurity()
    {
        return $this->index('security');
    }

    public function updateSecurity($id, Request $request)
    {
        return $this->update($id, 'security', $request);
    }

    public function indexTransport()
    {
        return $this->index('transport');
    }

    public function updateTransport($id, Request $request)
    {
        return $this->update($id, 'transport', $request);
    }

    public function indexInsurance()
    {
        return $this->index('insurance');
    }

    public function updateInsurance($id, Request $request)
    {
        return $this->update($id, 'insurance', $request);
    }

    public function index($key)
    {
        $setting = services()->settingService()->where(['active' => Setting::ACTIVE, 'key' => $key, 'type' => 'policy'])->first();
        $viewData = [
            "$key" => $setting,
        ];
        return view("admin::policy.$key", $viewData);
    }

    public function update($id, $key, Request $request)
    {
        $setting = services()->settingService()->where(['active' => Setting::ACTIVE, 'key' => $key, 'type' => 'policy'])->find($id);
        if ($setting) {
            $setting->value = $request->value;
            $setting->save();
            return redirect()->back()->with('success', 'Cập nhật thành công!');
        }
        return redirect()->back()->with('danger', 'Cập nhật thất bại!');
    }
}
