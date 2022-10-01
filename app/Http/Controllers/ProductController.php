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
