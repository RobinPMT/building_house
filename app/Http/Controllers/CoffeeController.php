<?php

namespace App\Http\Controllers;

use App\Models\Housing;
use App\Models\Project;
use App\Models\Setting;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;

class CoffeeController extends FrontendController
{
    /**
     * @inheritDoc
     */
    protected function getService()
    {
        // TODO: Implement getService() method.
    }

    public function index(Request $request)
    {
        SEOTools::setTitle('Consolar Coffee & Food');
        SEOTools::setDescription('Giải pháp kinh doanh với Consolar Coffee & Food!');
        SEOTools::opengraph()->setUrl($request->url());
        SEOTools::setCanonical($request->url());
        $projects = services()->projectService()->where([
            'active' => Project::ACTIVE,
            'hot' => Project::HOT
        ])->select('id', 'title', 'slug', 'avatar')->limit(5)->get();
        $housings = services()->housingService()->where([
            'active' => Housing::STATUS_PUBLIC,
        ])->select('id', 'title', 'content', 'avatar_main')->orderBy('title')->get();
        $setting = services()->settingService()->where(['key' =>'coffee', 'type' => Setting::TYPE_COFFEE])->select('id', 'name', 'key', 'avatar', 'value')->first();
        $settingHousing = services()->settingService()->where(['key' =>'coffee_housing', 'type' => Setting::TYPE_COFFEE])->select('id', 'name', 'key', 'avatar', 'value', 'avatar_not_main')->first();
        $viewData = [
            'setting' => $setting,
            'settingHousing' => $settingHousing,
            'projects' => $projects,
            'housings' => $housings
        ];
        return view('coffee.index', $viewData);
    }
}
