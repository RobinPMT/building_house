<?php

namespace App\Services;

use App\Jobs\ContactSendMailJob;
use App\Models\Admin;
use App\Models\Contact;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;

class ContactService extends ApiService
{
    protected $model = Contact::class;

    protected $relations = [
        'handler', 'product'
    ];

    protected $fieldsName = '_contact_fields';

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
            'name', 'email', 'phone', 'active', 'author_id', 'arr_active', 'content', 'product_id', 'type', 'get_type'
        ];
    }

    protected function mapFilters(): array
    {
        return [
        ];
    }

    public function get_arr_active_value($record, Contact $model)
    {
        return $model->getStatus();
    }

    public function get_get_type_value($record, Contact $model)
    {
        if ($model->type == Contact::TYPE_PRODUCT) {
            return 'Sản phẩm';
        } elseif ($model->type == Contact::TYPE_HOUSING) {
            return 'Giải pháp kinh doanh';
        }
        return 'Không rõ';
    }

    public function includeHandler()
    {
        return [services()->adminService(), 'item', function (Contact $model) {
            return $model->handler;
        }];
    }

    public function includeProduct()
    {
        return [services()->productService(), 'item', function (Contact $model) {
            return $model->product;
        }];
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
        $this->on('creating', function ($model) use ($user) {
            if (!isset($model->type)) {
                $model->type = isset($model->product_id) ? Contact::TYPE_PRODUCT : Contact::TYPE_HOUSING;
            }
        });
        $this->on('updating', function ($model) use ($user) {
            $model->author_id = $user->getKey() ?? null;
            $model->active = $model->active == 'on' ? true : false;
        });


        $this->on('created', function ($model) use ($user) {
            //TODO: gửi mail
            $email = services()->settingService()->where(['key' => 'email', 'type' => Setting::TYPE_SETTING])->first()->value;
            if (!isset($email)) {
                $email = env('MAIL_RECEIVE');
            }
            if ($email) {
                dispatch(new ContactSendMailJob($model, $email));
            }
        });
    }
}
