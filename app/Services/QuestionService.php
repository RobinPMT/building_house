<?php

namespace App\Services;

use App\Models\Admin;
use App\Models\Question;
use Illuminate\Support\Facades\Auth;

class QuestionService extends ApiService
{
    protected $model = Question::class;

    protected $relations = [
        'creator'
    ];

    protected $fieldsName = '_question_fields';

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
            'title', 'active', 'author_id', 'arr_active', 'content',
        ];
    }

    protected function mapFilters(): array
    {
        return [
        ];
    }

    public function get_arr_active_value($record, Question $model)
    {
        return $model->getStatus();
    }

    public function includeCreator()
    {
        return [services()->adminService(), 'item', function (Question $model) {
            return $model->creator;
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
