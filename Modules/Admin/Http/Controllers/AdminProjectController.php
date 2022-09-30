<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\WebController;
use App\Models\Project;
use App\Services\ProjectService;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class AdminProjectController extends WebController
{
    /**
     * @inheritDoc
     */
    protected function getService(): ProjectService
    {
        return services()->projectService();
    }

    protected function getRequest()
    {
//        return c(AdminRequest::class);
        return request();
    }

    public function __list(Request $request, $view = null)
    {
        $request->merge([
            '_project_fields' => 'title,slug,content,active,hot,author_id,avatar,arr_image,arr_active,arr_hot',
//            '_relations' => 'creator',
//            '_admin_fields' => 'name',
        ]);
        return parent::__list($request, 'admin::project.index');
    }

    public function __create(Request $request, $route = null)
    {
        return parent::__create($request, 'admin.get.list.project');
    }

    public function __find(Request $request, $is_json = false)
    {
        $request->merge([
            '_project_fields' => 'title,slug,content,active,hot,author_id,avatar,arr_image,arr_active,arr_hot',
//            '_relations' => 'creator',
//            '_tag_fields' => 'id'
        ]);
        return parent::__find($request, true);
    }

    public function __update($id, $route = null)
    {
        return parent::__update($id, 'admin.get.list.project');
//        return view('admin::category.index', $viewData);
    }

    public function action($action, $id)
    {
        $messages = '';
        if ($action) {
            $project = Project::find($id);
            switch ($action) {
                case 'delete':
                    $project->delete();
                    //TODO: xoa file ra khoi sourse
                    $messages = 'Xóa thành công!';
                    break;
                case 'active':
                    $project->active = $project->active ? 0 : 1;
                    $project->save();
                    $messages = 'Cập nhật thành công!';
                    break;
                case 'hot':
                    $project->hot = $project->hot ? 0 : 1;
                    $project->save();
                    $messages = 'Cập nhật thành công!';
                    break;
            }
        }
        return redirect()->back()->with('success', $messages);
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createslug(Project::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }

    public function deleteImages($id, $image)
    {
        if (trim($image) != '') {
            $library = Project::find($id);
            if (isset($library)) {
                $arr = json_decode($library->arr_image);
                if (($key = array_search($image, $arr)) !== false) {
                    unset($arr[$key]);
                    $library->arr_image = json_encode(array_values($arr));
                    $library->save();
                    //TODO: xoa file ra khoi sourse
                    return response()->json(['status' => true]);
                }
            }
            return response()->json(['status' => false]);
        }
        return response()->json(['status' => false]);
    }
}
