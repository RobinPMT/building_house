<?php

namespace App\Http\Controllers;

use App\Http\Requests\BaseRequest;
use App\Services\ApiService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

abstract class WebController extends BaseController
{
    /**
     * @return ApiService
     */
    abstract protected function getService();

    public function __list(Request $request, $view)
    {
        return view($view, $this->getService()->getMany($request));
    }

    public function __find(Request $request, $is_json)
    {
        if ($is_json) {
            return $this->getService()->getOne($request);
        }
    }

    public function __create(Request $request, $route)
    {
        $data = $this->getCreatingData();
        $result = $this->getService()->create($data);
        if ($result->get('status')) {
            if (isset($route)) {
                return redirect()->route($route)->with('success', 'Thêm mới thành công!');
            }
            return redirect()->back()->with('success', 'Thêm mới thành công!');
        }
        if (isset($route)) {
            return redirect()->route($route)->with('danger', $result->get('message'));
        }
        return redirect()->back()->with('danger', $result->get('message'));
    }

    public function __update($id, $route)
    {
        $data = $this->getUpdatingData();
        $result = $this->getService()->update($id, $data, null);
        if ($result->get('status')) {
            if (isset($route)) {
                return redirect()->route($route)->with('success', 'Cập nhật thành công!');
            }
            return redirect()->back()->with('success', 'Cập nhật thành công!');
        }
        if (isset($route)) {
            return redirect()->route($route)->with('danger', $result->get('message'));
        }
        return redirect()->back()->with('danger', $result->get('message'));
    }

    public function __delete($id)
    {
        $result = $this->getService()->delete($id, null);
        if ($result->get('status')) {
            return [
                'status' => true,
            ];
        }
        return [
            'status' => false,
            'message' => $result->get('message'),
        ];
    }

    protected function getRequest()
    {
    }

    protected function getCreatingData()
    {
        $request = $this->getRequest();
        if ($request instanceof BaseRequest) {
            $request->validated();
        }
        return $request->all();
//        return $this->getJsonData();
    }

    protected function getUpdatingData()
    {
        $request = $this->getRequest();
        if ($request instanceof BaseRequest) {
            $request->validated();
        }
        return $request->all();
//        return $this->getJsonData();
    }
}
