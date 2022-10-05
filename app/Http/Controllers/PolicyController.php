<?php

namespace App\Http\Controllers;

use App\Models\Setting;

class PolicyController extends FrontendController
{
    /**
     * @inheritDoc
     */
    protected function getService()
    {
        // TODO: Implement getService() method.
    }

    public function indexShopping()
    {
        return $this->index('shopping');
    }

    public function indexSecurity()
    {
        return $this->index('security');
    }

    public function indexTransport()
    {
        return $this->index('transport');
    }

    public function indexInsurance()
    {
        return $this->index('insurance');
    }

    public function index($key)
    {
        $setting = services()->settingService()->where(['active' => Setting::ACTIVE, 'key' => $key, 'type' => 'policy'])->first();
        $viewData = [
            "$key" => $setting,
        ];
        return view("policy.$key", $viewData);
    }
}
