<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends FrontendController
{
    /**
     * @inheritDoc
     */
    protected function getService()
    {
        // TODO: Implement getService() method.
    }

    public function productDetail($slug)
    {
        $product = services()->productService()->where([
            'active' => Product::ACTIVE,
            'slug' => $slug
        ])->select(
            'id',
            'title',
            'slug',
            'active',
            'hot',
            'author_id',
            'arr_image',
            'price',
            'avatar_design',
            'description',
            'longs',
            'width',
            'height',
            'area',
            'room_number',
            'room_description'
        )->first();
//        dd($product);

        $viewData = [
            'product' => $product,
        ];
        return view('product.detail', $viewData);
    }

    public function listProduct(Request $request)
    {
        $areas = [];
        if ($request->area) {
            $areas = explode('_', $request->area);
        }
        $products = services()->productService()->where([
            'active' => Product::ACTIVE
        ])->where(function ($query) use ($request, $areas) {
            if (isset($request->category_id) && $request->category_id > 0) {
                $query->where('category_id', $request->category_id);
            }
            if (isset($request->room_number) && $request->room_number > 0) {
                if ($request->room_number > 5) {
                    $query->where('room_number', '>=', $request->room_number);
                } else {
                    $query->where('room_number', $request->room_number);
                }
            }
            if (isset($areas) && is_array($areas) && count($areas) > 0) {
                if ($areas[0] >=100) {
                    $query->where('area', '>', $areas[0]);
                } else {
                    $query->whereIn('area', $areas);
                }
            }
        })
        ->select('id', 'title', 'slug', 'arr_image', 'longs', 'width', 'height', 'area')->orderByDesc('id')->paginate(12);
        $viewData = [
            'products' => $products
        ];
        return view('product.list', $viewData);
    }

    public static function showProducts()
    {
        $rooms = services()->productService()->where('active', Product::ACTIVE)->select('id', 'title')->get()->toArray();
        foreach ($rooms as $key => $item) {
            echo '<option value="'.$item['id'].'">';
            echo  $item['title'];
            echo '</option>';
        }
    }
}
