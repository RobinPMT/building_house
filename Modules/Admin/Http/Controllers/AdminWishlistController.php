<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\WebController;
use App\Http\Requests\AdminRequest;
use App\Models\Wishlist;
use App\Services\WishlistService;
use Illuminate\Http\Request;

class AdminWishlistController extends WebController
{
    /**
     * @inheritDoc
     */
    protected function getService(): WishlistService
    {
        return services()->wishlistService();
    }

    protected function getRequest()
    {
//        return c(AdminRequest::class);
        return request();
    }

    public function __list(Request $request, $view = null)
    {
        $request->merge([
            '_wishlist_fields' => 'title,creator_id,product_id,author_id,type,status,arr_status',
            '_filter' => 'type:transaction;',
            '_relations' => 'handler,creator,product',
            '_admin_fields' => 'name',
            '_user_fields' => 'name',
            '_product_fields' => 'title'
        ]);
        return parent::__list($request, 'admin::transaction.index');
    }

    public function action($action, $id)
    {
        $user = auth('admins')->user();
        $messages = '';
        if ($action) {
            $contact = Wishlist::find($id);
            switch ($action) {
                case 'delete':
                    $contact->delete();
                    $messages = 'Xóa thành công!';
                    break;
                case 'active':
                    $contact->status = $contact->status ? 0 : 1;
                    $contact->author_id = $contact->active ? $user->getKey() : null;
                    $contact->save();
                    $messages = 'Cập nhật thành công!';
                    break;
            }
        }
        return redirect()->back()->with('success', $messages);
    }
}
