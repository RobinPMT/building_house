<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\WebController;
use App\Models\Question;
use App\Services\QuestionService;
use Illuminate\Http\Request;

class AdminQuestionController extends WebController
{
    /**
     * @inheritDoc
     */
    protected function getService(): QuestionService
    {
        return services()->questionService();
    }

    protected function getRequest()
    {
//        return c(AdminRequest::class);
        return request();
    }

    public function __list(Request $request, $view = null)
    {
        $request->merge([
            '_question_fields' => 'active,title,arr_active,content',
            '_relations' => 'creator',
            '_admin_fields' => 'name'
        ]);
        return parent::__list($request, 'admin::question.index');
//        return view('admin::category.index', $viewData);
    }

    public function __find(Request $request, $is_json = false)
    {
        $request->merge([
            '_question_fields' => 'active,title,arr_active,content',
            '_relations' => 'creator',
//            '_tag_fields' => 'id'
        ]);
        return parent::__find($request, true);
    }

    public function __create(Request $request, $route = null)
    {
        return parent::__create($request, 'admin.get.list.question');
    }

    public function __update($id, $route = null)
    {
        return parent::__update($id, 'admin.get.list.question');
    }

    public function action($action, $id)
    {
        $user = auth('admins')->user();
        $messages = '';
        if ($action) {
            $contact = Question::find($id);
            switch ($action) {
                case 'delete':
                    $contact->delete();
                    $messages = 'Xóa thành công!';
                    break;
                case 'active':
                    $contact->active = $contact->active ? 0 : 1;
                    $contact->author_id = $contact->active ? $user->getKey() : null;
                    $contact->save();
                    $messages = 'Cập nhật thành công!';
                    break;
            }
        }
        return redirect()->back()->with('success', $messages);
    }
}
