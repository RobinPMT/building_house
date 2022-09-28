<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Setting;
use Illuminate\Support\Facades\View;

abstract class FrontendController extends WebController
{
    public function __construct()
    {
        $dataSettings = [];
//        $categories = Category::where([
//            'c_active' => Category::STATUS_PUBLIC
//        ])->get();
        $settings = Setting::where([
            'active' => Setting::ACTIVE,
            'type' => 'setting'
        ])->get();
//        View::share('categories', $categories);
        foreach ($settings as $setting) {
            $dataSettings[$setting->key] = $setting->value;
        }
        View::share('settings', $dataSettings);
    }

    /**
     * @inheritDoc
     */
    abstract protected function getService();
}
