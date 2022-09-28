<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\WebController;
use App\Models\Banner;
use App\Services\BannerService;
use Illuminate\Http\Request;

class AdminBannerController extends WebController
{
    /**
     * @inheritDoc
     */
    protected function getService(): BannerService
    {
        return services()->bannerService();
    }

    protected function getRequest()
    {
//        return c(AdminRequest::class);
        return request();
    }

    public function __list(Request $request, $view = null)
    {
        $request->merge([
            '_banner_fields' => 'title,active,link,avatar_main,avatar_not_main,description,arr_active',
            '_noPagination' => 1,
//            '_filter' => 'user_not_myself:1;'
        ]);
        return parent::__list($request, 'admin::banner.index');
//        return view('admin::banner.index', $viewData);
    }

    public function __create(Request $request, $route = null)
    {
        return parent::__create($request, 'admin.get.list.banner');
    }

    public function __find(Request $request, $is_json = false)
    {
        $request->merge([
            '_banner_fields' => 'title,active,link,avatar_main,avatar_not_main,description,arr_active',
        ]);
        return parent::__find($request, true);
    }

    public function __update($id, $route = null)
    {
        return parent::__update($id, 'admin.get.list.banner');
//        return view('admin::banner.index', $viewData);
    }

    public function action($action, $id)
    {
        $messages = '';
        if ($action) {
            $banner = Banner::find($id);
            switch ($action) {
                case 'delete':
                    $banner->delete();
                    //TODO: xoa file ra khoi sourse
                    $messages = 'Xóa thành công!';
                    break;
                case 'active':
                    $banner->active = $banner->active ? 0 : 1;
                    $banner->save();
                    $messages = 'Cập nhật thành công!';
                    break;
            }
        }
        return redirect()->back()->with('success', $messages);
    }
}
