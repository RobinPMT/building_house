<?php

namespace App\Services;

use App\Models\Admin;
use App\Models\Setting;
use Illuminate\Http\Request;
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
        return ['not_coffee'];
    }

    protected function fields(): array
    {
        return [
            'key', 'value', 'active', 'name', 'icon', 'type', 'avatar', 'arr_active'
        ];
    }

    protected function mapFilters(): array
    {
        return [
            'not_coffee' => function ($value) {
                if ($value == 1) {
                    return function ($query) use ($value) {
                        $query->where('type', '!=', Setting::TYPE_COFFEE);
                    };
                }
            },
        ];
    }

    public function get_arr_active_value($record, Setting $model)
    {
        return $model->getStatus();
    }

    public function get_avatar_value($record, Setting $model)
    {
        return pare_url_file($model->avatar, 'settings');
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
            $this->uploadAvatar($model);
        });
        $this->on('updating', function ($model) use ($user) {
//            $this->updateSettingHome($model);
        });
    }

//    public function get_value_value($record, Setting $model)
//    {
//        if ($model->type == 'setting') {
//            return json_decode($model->value);
//        }
//        return $model->value;
//    }

    public function updateSettingHome(Request $request)
    {
        $dataNew = $request->data_new;
        $dataOldIds = $request->ids ?? [];
        $dataOldValues = $request->values ?? [];
        if (count($dataOldIds) > 0 && count($dataOldIds) == count($dataOldValues)) {
            $oldArr = array_combine($dataOldIds, $dataOldValues);
            if (isset($oldArr) && is_array($oldArr)) {
                $oldSettings = services()->settingService()->findMany(array_keys($oldArr));
                foreach ($oldSettings as $oldSetting) {
                    $oldSetting->value = $oldArr[$oldSetting->id];
                    $oldSetting->save();
                }
            }
        }

        if (is_array($dataNew)) {
            $data = [];
            foreach ($dataNew as $item) {
                if (isset($item['value']) && trim($item['value']) != '') {
                    $data[] = $item;
                }
            }
            Setting::insert($data);
            return true;
        }
        return false;
    }

    public function updateKeySeting(array $data)
    {
        $newData = $data['newData'];
        if (is_array($newData) && count($newData) > 0) {
            $keys = array_keys($newData);
            $settings = services()->settingService()->whereIn('key', $keys)->get();
            foreach ($settings as $setting) {
                $setting->name = $newData[$setting->key]['name'];
//                if ($newData[$setting->key]['key'] == 'housing') {
                $setting->value = $newData[$setting->key]['value'];
//                $setting->value = json_encode($newData[$setting->key]['value']);
//                } else {
//                    $setting->value = $newData[$setting->key]['value'];
//                }
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

    public function uploadAvatar(Setting $model)
    {
        if ($this->getApiRequest()->hasFile('avatar')) {
            if (!$model->type == Setting::TYPE_COFFEE) {
                $model->type = Setting::TYPE_HOME;
            }

            $file = upload_image('avatar', 'settings');
            if (isset($file['name'])) {
                $model->avatar = $file['name'];
            }
        }
    }
}
