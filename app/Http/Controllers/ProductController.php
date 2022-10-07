<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\SettingKeyProduct;
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
        ])->with(['keys' => function ($query) {
            $query->where('active', SettingKeyProduct::ACTIVE);
        }])->select(
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
            'room_description',
            'category_id'
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
        ->select('id', 'title', 'slug', 'arr_image', 'longs', 'width', 'height', 'area', 'category_id')->orderByDesc('id')->paginate(12);
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

    public function listProductAjax($id)
    {
        $productsAjax = services()->productService()->where([
            'active' => Product::ACTIVE
        ])->with(['keys' => function ($query) {
            $query->where('active', SettingKeyProduct::ACTIVE);
        }])->whereKeyNot($id)->select('id', 'title', 'slug', 'arr_image', 'longs', 'width', 'height', 'area')->orderByDesc('id')->paginate(6);
//        $viewData = [
//            'productsAjax' => $productsAjax
//        ];
//        return response()->json($viewData);

        $html = view('product.list_ajax', compact('productsAjax'))->render();
        $pagination_html = view('product.pagination', compact('productsAjax'))->render();
        $viewData = [
            'html' => $html,
            'pagination_html' => $pagination_html
        ];
        return response()->json($viewData);
    }

    public function detailProductAjax($id, Request $request)
    {
        $product = services()->productService()->where([
            'active' => Product::ACTIVE
        ])->with(['keys' => function ($query) {
            $query->where('active', SettingKeyProduct::ACTIVE);
        }])->find($id);
        if ($request->product1) {
            $product1 = services()->productService()->where([
                'active' => Product::ACTIVE
            ])->with(['keys' => function ($query) {
                $query->where('active', SettingKeyProduct::ACTIVE);
            }])->find($request->product1);
        }
        if ($request->product2) {
            $product2 = services()->productService()->where([
                'active' => Product::ACTIVE
            ])->with(['keys' => function ($query) {
                $query->where('active', SettingKeyProduct::ACTIVE);
            }])->find($request->product2);
        }
        $keys = services()->settingKeyProductService()->where('active', SettingKeyProduct::ACTIVE)->get();
        $viewData = [
            'product' => $product,
            'product1' => $product1 ?? null,
            'product2' => $product2 ?? null,
            'keys' => $keys ?? null,
        ];
//        return response()->json($viewData);
        $html = view('product.compare', $viewData)->render();
        return response()->json($html);
    }
}
