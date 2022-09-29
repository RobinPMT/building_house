<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends FrontendController
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
        $housing_settings = services()->settingService()->where([
            'active' => Setting::ACTIVE,
            'type' => Setting::TYPE_HOME,
        ])->get();
        $banners = services()->bannerService()->where([
            'active' => Setting::ACTIVE,
        ])->get();

        $posts = services()->postService()->where([
            'active' => Post::ACTIVE,
            'hot' => Post::HOT
        ])->with('creator')->select('title', 'slug', 'description', 'avatar', 'created_at', 'author_id')->get();

        $viewData = [
            'housing_settings' => $housing_settings,
            'banners' => $banners,
            'posts' => $posts
        ];
        return view('home.index', $viewData);
    }
}
