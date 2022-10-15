<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\WebController;
use App\Models\filter;
use App\Services\FilterService;
use Illuminate\Http\Request;

class AdminFilterController extends WebController
{
    protected function getRequest()
    {
        return request();
    }

    /**
     * @inheritDoc
     */
    protected function getService(): FilterService
    {
        return services()->filterService();
    }

    public function __list(Request $request, $view = null)
    {
        $request->merge([
            '_filter_fields' => 'title,value,active,type,from,to,arr_active,order',
            '_orderBy' => 'order',
        ]);
        return parent::__list($request, 'admin::filter.index');
    }

    public function __create(Request $request, $route = null)
    {
        return parent::__create($request, 'admin.get.list.filter');
    }

    public function __find(Request $request, $is_json = false)
    {
        $request->merge([
            '_filter_fields' => 'title,value,active,type,from,to,arr_active,order',
        ]);
        return parent::__find($request, true);
    }

    public function update(Request $request)
    {
        $result = $this->getService()->updateKeySeting($request->all());
        return response()->json($result);
    }

    public function __update($id, $route = null)
    {
        return parent::__update($id, null);
    }

    public function action($action, $id)
    {
        $messages = '';
        if ($action) {
            $post = Filter::find($id);
            switch ($action) {
                case 'delete':
                    $post->delete();
                    //TODO: xoa file ra khoi sourse
                    $messages = 'Xóa thành công!';
                    break;
                case 'active':
                    $post->active = $post->active ? 0 : 1;
                    $post->save();
                    $messages = 'Cập nhật thành công!';
                    break;
            }
        }
        return redirect()->back()->with('success', $messages);
//        return response()->json(['success' => $messages]);
    }

    public function checkOrder()
    {
        $count = $this->getService()->count();
        return response()->json(['order' => $count + 1]);
    }
}
