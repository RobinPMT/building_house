<?php

namespace App\Services;

use App\Models\Admin;
use App\Models\Contact;
use App\Models\Post;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;
use function Aws\boolean_value;

class ContactService extends ApiService
{
    protected $model = Contact::class;

    protected $relations = [
        'handler'
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
            'name', 'email', 'phone', 'active', 'author_id', 'arr_active'
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

    public function includeHandler()
    {
        return [services()->adminService(), 'item', function (Contact $model) {
            return $model->handler;
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
        $this->on('saving', function ($model) use ($user) {
            $model->author_id = $user->getKey() ?? null;
            $model->active = $model->active == 'on' ? true : false;
        });
    }
}
