<?php

namespace App\Http\Controllers;

use App\Models\Policy;
use App\Models\Setting;
use Artesaos\SEOTools\Facades\SEOMeta;
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

//
//    public function indexShopping()
//    {
//        return $this->index('shopping');
//    }
//
//    public function indexSecurity()
//    {
//        return $this->index('security');
//    }
//
//    public function indexTransport()
//    {
//        return $this->index('transport');
//    }
//
//    public function indexInsurance()
//    {
//        return $this->index('insurance');
//    }

    public function index($slug)
    {
//        switch ($key) {
//            case 'shopping':
//                $title = 'Chính sách mua hàng';
//                break;
//            case 'security':
//                $title = 'Chính sách bảo mật thông tin';
//                break;
//            case 'transport':
//                $title = 'Chính sách vận chuyển';
//                break;
//            case 'insurance':
//                $title = 'Chính sách bảo hành';
//                break;
//            default:
//                $title = 'Chính sách';
//        }
        $policy = services()->policyService()->where(['active' => Policy::STATUS_PUBLIC, 'slug' => $slug])->first();
        SEOTools::setTitle($policy->title);
        SEOTools::setDescription($policy->description_seo);
        SEOMeta::addKeyword($policy->keyword_seo);
        SEOTools::opengraph()->setUrl(request()->url());
        SEOTools::setCanonical(request()->url());
//        $setting = services()->settingService()->where(['active' => Setting::ACTIVE, 'key' => $key, 'type' => 'policy'])->first();
        $viewData = [
//            "$key" => $setting,
            'policy' => $policy
        ];
//        return view("policy.$key", $viewData);
        return view("policy.index", $viewData);
    }
}
