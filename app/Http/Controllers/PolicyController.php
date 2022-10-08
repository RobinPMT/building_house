<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;

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
        switch ($key) {
            case 'shopping':
                $title = 'Chính sách mua hàng';
                break;
            case 'security':
                $title = 'Chính sách bảo mật thông tin';
                break;
            case 'transport':
                $title = 'Chính sách vận chuyển';
                break;
            case 'insurance':
                $title = 'Chính sách bảo hành';
                break;
            default:
                $title = 'Chính sách';
        }
        SEOTools::setTitle($title);
        SEOTools::setDescription($title . ' của Consolar Housing');
        SEOTools::opengraph()->setUrl(request()->url());
        SEOTools::setCanonical(request()->url());
        $setting = services()->settingService()->where(['active' => Setting::ACTIVE, 'key' => $key, 'type' => 'policy'])->first();
        $viewData = [
            "$key" => $setting,
        ];
        return view("policy.$key", $viewData);
    }
}
