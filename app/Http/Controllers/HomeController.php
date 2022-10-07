<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use App\Models\Setting;
use App\Models\SettingKeyProduct;
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
        ])->orderByDesc('id')->get();

        $posts = services()->postService()->where([
            'active' => Post::ACTIVE,
            'hot' => Post::HOT
        ])->with('creator')->select('title', 'slug', 'description', 'avatar', 'created_at', 'author_id', 'type')->orderByDesc('id')->get();

        $libraries = services()->libraryService()->where([
            'active' => Post::ACTIVE,
            'hot' => Post::HOT
        ])->select('id', 'title', 'slug', 'avatar', 'created_at', 'author_id')->limit(6)->orderByDesc('id')->get();

        $categories = services()->categoryService()->where([
            'active' => Category::STATUS_PUBLIC,
        ])->whereHas('products', function ($query) {
            $query->where(['active' => Product::ACTIVE]);
        })->with(['products' => function ($query) {
            $query->with(['keys' => function ($query) {
                $query->where('active', SettingKeyProduct::ACTIVE);
            }])
            ->where([
                'active' => Product::ACTIVE,
                'hot' => Product::HOT,
            ])->limit(6);
        }])->get();

        $coffee_home = services()->settingService()->where([
            'active' => Setting::ACTIVE,
            'type' => Setting::TYPE_COFFEE_HOME,
            'key' => 'coffee_home'
        ])->first();

        $viewData = [
            'housing_settings' => $housing_settings,
            'banners' => $banners,
            'posts' => $posts,
            'libraries' => $libraries,
            'categories' => $categories,
            'coffee_home' => $coffee_home
        ];
        return view('home.index', $viewData);
    }
}
