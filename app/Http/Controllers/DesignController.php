<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Models\Product;
use App\Models\Room;
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
        dd($request->all());
    }
}
