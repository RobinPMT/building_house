<?php

namespace App\Http\Controllers;

use App\Jobs\ContactSendMailJob;
use App\Models\Attribute;
use App\Models\Product;
use App\Models\Room;
use App\Models\Setting;
use App\Models\Wishlist;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
//        dd($request->all());
        $item = 12;
        if ($request->slug) {
            $item = 11;
            $product = services()->productService()->where([
                'active' => Product::ACTIVE
            ])->where(function ($query) use ($request) {
                if (isset($request->category_id) && $request->category_id > 0) {
                    $query->where('category_id', $request->category_id);
                }
            })->where('slug', $request->slug)->select('id', 'title', 'arr_image', 'image_back_ground_design', 'slug', 'category_id')->first();
            if ($product) {
                $rooms = services()->roomService()->where('active', Room::STATUS_PUBLIC)->doesntHave('parent')
                    ->with(['childs' => function ($query) use ($product) {
                        $query->whereHas('products', function ($query) use ($product) {
                            $query->where('product_id', $product->id);
                        });
                        $query->with(['attributes' => function ($query) use ($product) {
                            $query->where('product_id', $product->id)->where('active', Attribute::STATUS_PUBLIC)->orderBy('order');
                        }]);
                        $query->where('active', Room::STATUS_PUBLIC)->orderBy('order');
                    }])->whereHas('products', function ($query) use ($product) {
                        $query->where('product_id', $product->id);
                    })->orderBy('order')->select('id', 'title')->get();
            }
        }

        $products = services()->productService()->where([
            'active' => Product::ACTIVE
        ])->where(function ($query) use ($request) {
            if (isset($request->category_id) && $request->category_id > 0) {
                $query->where('category_id', $request->category_id);
            }
            if (isset($request->slug)) {
                $query->where('slug', '<>', $request->slug);
            }
        })->select('id', 'title', 'arr_image', 'image_back_ground_design', 'slug', 'category_id')->orderByDesc('id')->paginate($item);

        SEOTools::setTitle('T??? thi???t k???');
        SEOTools::setDescription('Thi???t k???, kh??m ph?? ng??i nh?? m?? ?????c c???a b???n!');
        SEOTools::opengraph()->setUrl($request->url());
        SEOTools::setCanonical($request->url());
        if ($item > 2) {
            foreach ($products as $productSEO) {
                SEOMeta::addKeyword([$productSEO->title]);
            }
        } else {
            SEOMeta::addKeyword([$product->title]);
        }
//        dd($products, $product);
        $viewData = [
            'rooms' => $rooms ?? null,
            'products' => $products,
            'productSelect' => $product ?? null
        ];
        return view('design.index', $viewData);
    }

    public function store(Request $request)
    {
        $data = $request->data;
        if ($data) {
            if (trim(get_data_user('web')) === '' && $data['type'] === Wishlist::TYPE_WISHLIST) {
                return response()->json(['status' => false, 'message' => 'Vui l??ng ????ng nh???p ????? s??? d???ng ch???c n??ng n??y!']);
            }
            $creator_id =  get_data_user('web') ?? $data['creator_id'];
            $product_id = $data['product_id'] ?? null;
            if (!$product_id) {
                return response()->json(['status' => false, 'message' => 'Vui l??ng ch???n s???n ph???m!']);
            }
            $arr_system = $data['arr_system'] ?? [];
            $arr_style = $data['arr_style'] ?? [];
            if (!isset($data['code'])) {
//                if (count($arr_system) < 1) {
//                    return response()->json(['status' => false, 'message' => 'Vui l??ng ch???n thu???c t??nh ti???n nghi s???n ph???m!']);
//                }
                if (count($arr_style) < 1) {
                    return response()->json(['status' => false, 'message' => 'Vui l??ng ch???n thu???c t??nh ki???u d??ng s???n ph???m!']);
                }
            }

            $newSystem = [];
            foreach ($arr_system as $item) {
                $newSystem[$item['attribute_id']][] = $item['key'];
            }
            $newStyle = [];
            foreach ($arr_style as $item) {
                $newStyle[$item['attribute_id']] = ['key_choose' => json_encode([$item['key']])];
            }
            DB::beginTransaction();
            try {
                if (isset($data['code'])) {
                    $wishlist = Wishlist::where([
                        'creator_id' => $creator_id,
    //                    'type' => Wishlist::TYPE_WISHLIST,
                        'title' => $data['code']
                    ])->first();
                    if (!$wishlist) {
                        return response()->json(['status' => false, 'message' => 'L???i c???p nh???t!']);
                    }
                    $wishlist->type = $wishlist->type === Wishlist::TYPE_WISHLIST ? $data['type'] : $wishlist->type;
                    if ($wishlist->type == Wishlist::TYPE_WISHLIST) {
                        $message = '???? l??u v??o danh s??ch c???a b???n!';
                    } else {
                        $message = 'Thi???t k??? c???a b???n ???? g???i cho ch??ng t??i! Ch??ng t??i s??? li???n h??? b???n s???m nh???t!';
                    }
                    if ($wishlist->save()) {
                        if (count($newStyle) > 0 || count($newSystem) > 0) {
                            $syncData = $newStyle;
                            foreach ($newSystem as $key => $item) {
                                $syncData[$key] = ['key_choose' => json_encode($item)];
                            }
                            $attributes = $wishlist->attributes;
                            $room_ids =  services()->attributeService()->whereIn('id', array_keys($newStyle))->pluck('room_id')->toArray();
                            $change_ids = [];
                            foreach ($attributes as $attribute) {
                                if ($attribute->type == Attribute::TYPE_SYSTEM) {
                                    if (in_array($attribute->attribute_id, array_keys($syncData))) {
                                        $arr1 = json_decode($attribute->key_choose);
                                        $arr2 = json_decode($syncData[$attribute->attribute_id]['key_choose']);
                                        $sames = array_intersect($arr1, $arr2);
                                        $_arr = array_unique(array_merge_recursive($arr1, $arr2));
                                        foreach ($_arr as $key => $item) {
                                            if (in_array($item, $sames)) {
                                                unset($_arr[$key]);
                                            }
                                        }
                                        $syncData[$attribute->attribute_id]['key_choose'] = json_encode(array_values($_arr));
                                    }
                                } else {
                                    if (in_array($attribute->room_id, $room_ids)) {
                                        if (!in_array($attribute->attribute_id, array_keys($newStyle)) && count($newStyle) > 0) {
                                            $change_ids [] = $attribute->attribute_id;
                                        } else {
                                            $syncData[$attribute->attribute_id] = $newStyle[$attribute->attribute_id];
                                            $change_ids [] = $attribute->attribute_id;
                                        }
                                    }
                                }
                            }
                            DB::table('wishlists_attributes')->where('wishlist_id', $wishlist->id)->whereIn('attribute_id', $change_ids)->delete();
                            //TODO: fix l???i l???i update system gi??? l???i value trong m???ng tr?????c khi x??a c??n style th?? ok r
//                            foreach ($newStyle as $key => $item) {
//                                $syncData[$key] = $item;
//                            }
                            $wishlist->attributes()->syncWithoutDetaching($syncData);
                        }
                    }
                } else {
                    $wishlist = new Wishlist();
                    $wishlist->product_id = $product_id;
                    $wishlist->title = substr(md5(microtime().rand()), -10);
                    $wishlist->status = Wishlist::STATUS_NOT_FINISHED;
                    $wishlist->type = $data['type'] ?? Wishlist::TYPE_WISHLIST;
                    if (trim(get_data_user('web')) === '' && $wishlist->type === Wishlist::TYPE_TRANSACTION) {
                        $wishlist->name = $data['name'];
                        $wishlist->email = $data['email'];
                        $wishlist->phone = $data['phone'];
                    } else {
                        $wishlist->creator_id = $creator_id;
                    }
                    if ($wishlist->type == Wishlist::TYPE_WISHLIST) {
                        $message = '???? th??m v??o danh s??ch c???a b???n!';
                    } else {
                        $message = 'Thi???t k??? c???a b???n ???? g???i cho ch??ng t??i! Ch??ng t??i s??? li???n h??? b???n s???m nh???t!';
                    }
                    if ($wishlist->save()) {
                        $syncData = $newStyle;
                        foreach ($newSystem as $key => $item) {
                            $syncData[$key] = ['key_choose' => json_encode($item)];
                        }
                        if (count($syncData) > 0) {
                            $wishlist->attributes()->sync($syncData);
                        }
                        $email = env('MAIL_RECEIVE', null);
                        if (!isset($email)) {
                            $email = services()->settingService()->where(['key' => 'email', 'type' => Setting::TYPE_SETTING])->first()->value;
                        }
                        if ($email) {
                            dispatch(new ContactSendMailJob($wishlist, $email));
                        }
                    }
                }
                DB::commit();
                return response()->json(['status' => true, 'message' => $message]);
            } catch (Exception $e) {
                DB::rollback();
                return response()->json(['status' => false, 'message' => $this->errorResult($e)]);
            }
        }
        return response()->json(['status' => false, 'message' => '???? x???y ra l???i vui l??ng th??? l???i!']);
    }

    public function listWishlist(Request $request)
    {
        SEOTools::setTitle('D??? ??n c???a b???n');
        SEOTools::setDescription('Thi???t k???, kh??m ph?? ng??i nh?? m?? ?????c c???a b???n!');
        SEOTools::opengraph()->setUrl($request->url());
        SEOTools::setCanonical($request->url());

        $user_id = get_data_user('web');
        $wishLists = services()->wishlistService()->where([
            'creator_id' =>$user_id,
//            'type' => Wishlist::TYPE_WISHLIST,
//            'status',
        ])->with('product')->orderByDesc('id')->paginate(12);
        $viewData = [
            'wishLists' => $wishLists,
        ];
        return view('wishlist.index', $viewData);
    }

    public function detailWishlist($slug, Request $request)
    {
        if (get_data_user('admins') > 0) {
            $user_id = $request->user_id ?? (trim(get_data_user('web')) == '' ? null : get_data_user('web'));
        } else {
            $user_id = get_data_user('web');
        }
        if ($request->code && $slug) {
            $wishList = services()->wishlistService()->where([
                'creator_id' => $user_id ,
//                'type' => Wishlist::TYPE_WISHLIST, // n???u ch??? l???y wishlist th?? m??? cmt ra
                'title' => $request->code
            ])->whereHas('product', function ($query) use ($slug) {
                $query->where('slug', $slug);
            })->with([
                'product' => function ($query) use ($slug) {
                    $query->where('slug', $slug);
                },
                'attributes' => function ($query) {
                    $query->where('active', Attribute::STATUS_PUBLIC);
                }])
                ->first();
            $rooms = services()->roomService()->where('active', Room::STATUS_PUBLIC)->doesntHave('parent')
                ->with(['childs' => function ($query) use ($wishList, $user_id, $request, $slug) {
                    $query->whereHas('products', function ($query) use ($wishList) {
                        $query->where('product_id', $wishList->product_id);
                    });
                    $query->with(['attributes' => function ($query) use ($wishList, $user_id, $request, $slug) {
                        $query->with(['wishlists' => function ($query) use ($user_id, $request, $slug) {
//                            $query->whereHas('product', function ($query) use ($slug) {
//                                $query->where('slug', $slug);
//                            });
                            $query->where([
                                'creator_id' => $user_id,
//                                'type' => Wishlist::TYPE_WISHLIST, // n???u ch??? l???y wishlist th?? m??? cmt ra
                                'title' => $request->code
                            ]);
                        }]);
                        $query->where('product_id', $wishList->product_id)->where('active', Attribute::STATUS_PUBLIC)->orderBy('order');
                    }]);
                    $query->where('active', Room::STATUS_PUBLIC)->orderBy('order');
                }])->whereHas('products', function ($query) use ($wishList) {
                    $query->where('product_id', $wishList->product_id);
                })->orderBy('order')->select('id', 'title')->get();


//            dd($wishList);
            if (!$wishList) {
                return redirect()->back();
            }
            SEOTools::setTitle('Thi???t k??? '. $wishList->product->title);
            SEOTools::setDescription('Thi???t k???, kh??m ph?? ng??i nh?? m?? ?????c c???a b???n!');
            SEOTools::opengraph()->setUrl($request->url());
            SEOTools::setCanonical($request->url());
            OpenGraph::addImage(env('APP_URL') . pare_url_file($wishList->product->image_back_ground_design, 'products'), ['height' => 300, 'width' => 300]);
            $viewData = [
                'wishList' => $wishList,
                'rooms' => $rooms
            ];
            return view('wishlist.detail', $viewData);
        }
        return redirect()->back();
    }
}
