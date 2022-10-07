<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Models\Product;
use App\Models\Room;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class DesignController extends FrontendController
{
    /**
     * @inheritDoc
     */
    protected function getService()
    {
        // TODO: Implement getService() method.
    }

    public function index(Request $request)
    {
        $rooms = services()->roomService()->where('active', Room::STATUS_PUBLIC)->doesntHave('parent')
            ->with(['childs' => function ($query) {
                $query->with(['attributes' => function ($query) {
                    $query->where('active', Attribute::STATUS_PUBLIC);
                }]);
                $query->where('active', Room::STATUS_PUBLIC);
            }])->select('id', 'title')->get();

        $products = services()->productService()->where([
            'active' => Product::ACTIVE
        ])->where(function ($query) use ($request) {
            if (isset($request->category_id) && $request->category_id > 0) {
                $query->where('category_id', $request->category_id);
            }
        })->select('id', 'title', 'arr_image', 'image_back_ground_design')->orderByDesc('id')->paginate(3);

        $viewData = [
            'rooms' => $rooms,
            'products' => $products
        ];
        return view('design.index', $viewData);
    }

    public function store(Request $request)
    {
        $data = $request->data;
//        && get_data_user('web')
        if (trim(get_data_user('web')) === '') {
            return response()->json(['status' => false, 'message' => 'Vui lòng đăng nhập để sử dụng chức năng này!']);
        }
        if ($data) {
            $creator_id = $data['creator_id'] ?? get_data_user('web');
            $product_id = $data['product_id'] ?? null;
            if (!$product_id) {
                return response()->json(['status' => false, 'message' => 'Vui lòng chọn sản phẩm!']);
            }

            $arr_system = $data['arr_system'] ?? [];
            $arr_style = $data['arr_style'] ?? [];
            if (count($arr_system) < 1) {
                return response()->json(['status' => false, 'message' => 'Vui lòng chọn thuộc tính tiện nghi sản phẩm!']);
            }
            if (count($arr_style) < 1) {
                return response()->json(['status' => false, 'message' => 'Vui lòng chọn thuộc tính kiểu dáng sản phẩm!']);
            }
            $newSystem = [];
            foreach ($arr_system as $item) {
                $newSystem[$item['attribute_id']][] = $item['key'];
            }
            $newStyle = [];
            foreach ($arr_style as $item) {
                $newStyle[$item['attribute_id']] = ['key_choose' => json_encode([$item['key']])];
            }


            $wishlist = new Wishlist();
            $wishlist->product_id = $product_id;
            $wishlist->creator_id = $creator_id;
            $wishlist->title = '#'.substr(md5(microtime().rand()), -10);
            $wishlist->type = $data['type'] ?? Wishlist::TYPE_WISHLIST;
            $wishlist->status = Wishlist::STATUS_NOT_FINISHED;
            if ($wishlist->type == Wishlist::TYPE_WISHLIST) {
                $message = 'Đã thêm vào danh sách của bạn!';
            } else {
                $message = 'Thiết kế của bạn đã gửi cho chúng tôi! Chúng tôi sẽ liện hệ bạn sớm nhất!';
            }
//            $wishlist->save()
            if ($wishlist->save()) {
                $syncData = $newStyle;
                foreach ($newSystem as $key => $item) {
                    $syncData[$key] = ['key_choose' => json_encode($item)];
                }
                $wishlist->attributes()->sync($syncData);
            }
            return response()->json(['status' => true, 'message' => $message]);
        }
        return response()->json(['status' => false, 'message' => 'Đã xảy ra lỗi vui lòng thử lại!']);
    }
}
