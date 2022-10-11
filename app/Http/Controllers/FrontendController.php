<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Policy;
use App\Models\Setting;
use Illuminate\Support\Facades\View;

abstract class FrontendController extends WebController
{
    public function __construct()
    {
        $dataSettings = [];
        $categories = Category::where([
            'active' => Category::STATUS_PUBLIC
        ])->orderBy('order')->get();
        $settings = Setting::where([
            'active' => Setting::ACTIVE,
            'type' => 'setting'
        ])->get();
        $policies = Policy::where([
            'active' => Policy::STATUS_PUBLIC,
        ])->orderBy('order')->get();
        View::share('policies', $policies);
        View::share('categories', $categories);
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
