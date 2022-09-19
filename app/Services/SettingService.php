<?php

namespace App\Services;

use App\Models\Admin;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;
use function Aws\boolean_value;

class SettingService extends ApiService
{
    protected $model = Setting::class;

    protected $relations = [
    ];

    protected $fieldsName = '_setting_fields';

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
            'key', 'value', 'active', 'name', 'icon'
        ];
    }

    protected function mapFilters(): array
    {
        return [
        ];
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
        $this->on('updated', function ($model) use ($user) {
        });
    }

    public function updateKeySeting(array $data)
    {
        $newData = $data['newData'];
        if (is_array($newData) && count($newData) > 0) {
            $keys = array_keys($newData);
            $settings = services()->settingService()->whereIn('key', $keys)->get();
            foreach ($settings as $setting) {
                $setting->name = $newData[$setting->key]['name'];
                $setting->value = $newData[$setting->key]['value'];
                $setting->active = boolean_value($newData[$setting->key]['active']);
                $setting->save();
            }
            return [
                'status'  => true,
                'success' => 'Cập nhật thành công!'
            ];
        }
        return [
            'status'  => false,
            'danger' => 'Cập nhật thất bại!'
        ];
    }
}
