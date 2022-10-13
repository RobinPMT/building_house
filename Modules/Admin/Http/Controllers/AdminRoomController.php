<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\WebController;
use App\Models\Room;
use App\Services\RoomService;
use Illuminate\Http\Request;

class AdminRoomController extends WebController
{
    /**
     * @inheritDoc
     */
    protected function getService(): RoomService
    {
        return services()->roomService();
    }

    protected function getRequest()
    {
//        return c(AdminRequest::class);
        return request();
    }

    public function __list(Request $request, $view = null)
    {
        $filter = '';
        if ($request->_parent_id) {
            $filter .= "_parent_id:$request->_parent_id;";
        }
        if ($request->_product_id) {
            $filter .= "product_id:$request->_product_id;";
        }
        $request->merge([
            '_room_fields' => 'title,active,author_id,arr_active,parent_id,order,product_ids',
            '_relations' => 'creator,parent,products',
            '_admin_fields' => 'name',
            '_product_fields' => 'title',
            '_filter' => $filter,
//            '_noPagination' => 1,
//            '_filter' => 'user_not_myself:1;'
        ]);
        $products = services()->productService()->select('title', 'id')->get()->toArray();
        $rooms = services()->roomService()->doesntHave('parent')->select('title', 'id')->get()->toArray();
        $data = [
            'products' => $products,
            'rooms' => $rooms
        ];
        return parent::__lists($request, $data, 'admin::room.index');
//        return parent::__list($request, 'admin::room.index');
    }

    public function __create(Request $request, $route = null)
    {
        return parent::__create($request, 'admin.get.list.room');
    }

    public function __find(Request $request, $is_json = false)
    {
        $request->merge([
            '_room_fields' => 'title,active,author_id,arr_active,parent_id,order,product_ids',
            '_relations' => 'creator,parent,products',
            '_admin_fields' => 'name',
            '_product_fields' => 'title',
        ]);
        return parent::__find($request, true);
    }

    public function __update($id, $route = null)
    {
        return parent::__update($id, 'admin.get.list.room');
//        return view('admin::room.index', $viewData);
    }

    public function action($action, $id)
    {
        $messages = '';
        if ($action) {
            $room = Room::find($id);
            switch ($action) {
                case 'delete':
                    $room->delete();
                    $messages = 'Xóa thành công!';
                    break;
                case 'active':
                    $room->active = $room->active ? 0 : 1;
                    $room->save();
                    $messages = 'Cập nhật thành công!';
                    break;
            }
        }
        return redirect()->back()->with('success', $messages);
    }

//    public static function showRooms()
//    {
//        $rooms = services()->roomService()->where('active', Room::STATUS_PUBLIC)->select('id', 'title')->get()->toArray();
//        foreach ($rooms as $key => $item) {
//            echo '<option value="'.$item['id'].'">';
//            echo  $item['title'];
//            echo '</option>';
//        }
//    }

    public static function showRooms($rooms = null, $parent_id = null, $char = '')
    {
        if (!is_array($rooms)) {
            $rooms = services()->roomService()->select('id', 'title', 'parent_id')->get()->toArray();
        }
        foreach ($rooms as $key => $item) {
            if ($item['parent_id'] == $parent_id) {
                echo '<option value="'.$item['id'].'">';
                echo $char . $item['title'];
                echo '</option>';

                unset($rooms[$key]);
                self::showRooms($rooms, $item['id'], $char.'&nbsp&nbsp&nbsp&nbsp&nbsp');
            }
        }
    }

    public static function showRoomsAjax($rooms = null, $parent_id = null, $char = '')
    {
        $html1 = '';
        foreach ($rooms as $key => $item) {
            if ($item['parent_id'] == $parent_id) {
                $html1 .= '<option value="'.$item['id'].'">';
                $html1 .= $char . $item['title'];
                $html1 .= '</option>';

                unset($rooms[$key]);
                self::showRooms($rooms, $item['id'], $char.'&nbsp&nbsp&nbsp&nbsp&nbsp');
            }
        }
        return $html1;
    }

    public static function showChildRooms($product_id = null, $rooms = null, $parent_id = null, $char = '')
    {
        if (!is_array($rooms)) {
            $rooms = services()->roomService()->doesntHave('parent')
                ->with(['childs' => function ($query) use ($product_id) {
                    if (isset($product_id)) {
                        $query->whereHas('products', function ($query) use ($product_id) {
                            $query->where('product_id', $product_id);
                        });
                    }
                }])
                ->whereHas('products', function ($query) use ($product_id) {
                    if (isset($product_id)) {
                        $query->where('product_id', $product_id);
                    }
                })
                ->get()->toArray();
        }
        $html = '';
        foreach ($rooms as $key => $item) {
            if ($item['parent_id'] == $parent_id) {
                if ($parent_id == null && count($item['childs']) == 0) {
                    $html .= '<optgroup label="'.$item['title'].'">';
                    $html .= '</optgroup>';
                    unset($rooms[$key]);
                } elseif (count($item['childs']) > 0) {
                    $html .= '<optgroup label="'.$item['title'].'">';
                    $html .= '</optgroup>';
                    unset($rooms[$key]);
                    $html .= self::showChildRooms($product_id, $item['childs'], $item['id'], $char.'&nbsp&nbsp&nbsp&nbsp&nbsp');
                } else {
                    $html .= AdminRoomController::showRoomsAjax([$rooms[$key]], $item['parent_id'], '');
                }
            }
            $html .= '';
        }
        return $html;
    }

    public function renderRoomWithProduct($product_id)
    {
        return response()->json(['data' => $this->showChildRooms($product_id)]);
    }

    public function checkOrder($parent_id, $current_id)
    {
        if ($current_id == 'null') {
            $count = $this->getService()->where('parent_id', $parent_id)->count();
            return response()->json(['order' => $count + 1]);
        } else {
            $room = $this->getService()->find($current_id);
            $count = $room->order;
            if ($room->parent_id != $parent_id) {
                $count = $this->getService()->where('parent_id', $parent_id)->count() + 1;
            }
            return response()->json(['order' => $count]);
        }
    }
}
