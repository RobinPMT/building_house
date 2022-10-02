<?php

namespace App\Http\Controllers;

use App\Models\Product;

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

    public function listProduct()
    {
        $products = services()->productService()->where([
            'active' => Product::ACTIVE
        ])->select('id', 'title', 'slug', 'arr_image', 'longs', 'width', 'height', 'area')->orderByDesc('id')->paginate(12);
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
