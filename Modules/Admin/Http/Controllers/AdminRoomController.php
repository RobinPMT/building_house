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
        $request->merge([
            '_room_fields' => 'title,active,author_id,arr_active',
            '_relations' => 'creator',
            '_admin_fields' => 'name',
//            '_noPagination' => 1,
//            '_filter' => 'user_not_myself:1;'
        ]);
        return parent::__list($request, 'admin::room.index');
    }

    public function __create(Request $request, $route = null)
    {
        return parent::__create($request, 'admin.get.list.room');
    }

    public function __find(Request $request, $is_json = false)
    {
        $request->merge([
            '_room_fields' => 'title,active,author_id,arr_active',
            '_relations' => 'creator'
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

    public static function showRooms()
    {
        $rooms = services()->roomService()->where('active', Room::STATUS_PUBLIC)->select('id', 'title')->get()->toArray();
        foreach ($rooms as $key => $item) {
            echo '<option value="'.$item['id'].'">';
            echo  $item['title'];
            echo '</option>';
        }
    }
}
