<?php

namespace App\Services;

use App\Models\Admin;
use App\Models\SettingKeyProduct;
use Illuminate\Support\Facades\Auth;

class SettingKeyProductService extends ApiService
{
    protected $model = SettingKeyProduct::class;

    protected $relations = [
    ];

    protected $fieldsName = '_setting_key_product_fields';

    protected function getOrderbyableFields(): array
    {
        return ['id'];
    }

    protected function getFilterableFields(): array
    {
        return [];
    }

    protected function fields(): array
    {
        return [
            'name', 'key', 'tag_type', 'active', 'html', 'arr_active'
        ];
    }

    protected function mapFilters(): array
    {
        return [
        ];
    }

    public function get_arr_active_value($record, SettingKeyProduct $model)
    {
        return $model->getStatus();
    }

    protected function newQuery()
    {
        $query = parent::newQuery();
//        $user = auth('admins')->user();
//        $query->where('id', '!=', $user->getKey())->orWhere('email', '!=', 'admin@gmail.com');
        return $query;
    }

    protected function boot()
    {
        parent::boot();
        $user = auth('admins')->user();
        $this->on('saving', function ($model) use ($user) {
            $model->active = $model->active == 'on' ? true : false;
            $model->html = $this->renderHtml($model);
        });
    }

    public function renderHtml(SettingKeyProduct $settingKeyProduct)
    {
        if ($settingKeyProduct->tag_type == SettingKeyProduct::TYPE_INPUT) {
            $html = "<div class='form-group'><label for='{$settingKeyProduct->key}'>$settingKeyProduct->name</label><input name='{$settingKeyProduct->key}' type='text' class='form-control' id='{$settingKeyProduct->key}' placeholder='{$settingKeyProduct->name}'></div>";
        } elseif ($settingKeyProduct->tag_type == SettingKeyProduct::TYPE_CHECKBOX) {
            $html = "<div class='form-group'><div class='custom-control custom-checkbox'><input type='checkbox' name='{$settingKeyProduct->key}' class='custom-control-input' id='{$settingKeyProduct->key}'><label class='custom-control-label' for='{$settingKeyProduct->key}'>$settingKeyProduct->name</label></div></div>";
        } else {
            $html = "<div class='form-group'><label class='form-label' for='{$settingKeyProduct->key}'>$settingKeyProduct->name</label><textarea type='text' name='{$settingKeyProduct->key}' id='{$settingKeyProduct->key}' rows='4' class='form-control dt-post' placeholder='$settingKeyProduct->name' aria-label='$settingKeyProduct->name'></textarea></div>";
        }
        return $html;
    }
}
