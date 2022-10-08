<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\SettingKeyProduct;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
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

    public function productDetail($slug, Request $request)
    {
        $product = services()->productService()->where([
            'active' => Product::ACTIVE,
            'slug' => $slug
        ])->with(['keys' => function ($query) {
            $query->where('active', SettingKeyProduct::ACTIVE);
        }])->first();
        SEOTools::setTitle($product->title_seo);
        SEOTools::setDescription($product->description_seo);
        SEOMeta::addKeyword($product->keyword_seo);
        SEOTools::opengraph()->setUrl($request->url());
        SEOTools::setCanonical($request->url());

        if (isset($product->arr_image) && $images = json_decode($product->arr_image)) {
            foreach ($images as $image) {
                if ($image->status) {
                    OpenGraph::addImage(env('APP_URL') . pare_url_file($image->image, 'products'), ['height' => 300, 'width' => 300]);
                }
            }
        } else {
            OpenGraph::addImage(env('APP_URL') . pare_url_file($product->avatar_design, 'products'), ['height' => 300, 'width' => 300]);
        }



        $viewData = [
            'product' => $product,
        ];
        return view('product.detail', $viewData);
    }

    public function listProduct(Request $request)
    {
        SEOTools::setTitle('Sản phẩm');
        SEOTools::setDescription('Khám phá ngôi nhà mơ ước của bạn!');
        if ($request->category_id) {
            $cate = Category::find($request->category_id);
            SEOTools::setTitle($cate->title_seo);
            SEOTools::setDescription($cate->description_seo);
            SEOMeta::addKeyword($cate->keyword_seo);
        }
        SEOTools::opengraph()->setUrl($request->url());
        SEOTools::setCanonical($request->url());

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
