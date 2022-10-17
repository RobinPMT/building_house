
@if(isset($productsAjax))
    @foreach($productsAjax as $key => $product)
        <div class="col-sm-4 col-xs-6 product-item" style="margin: 0; padding: 10px; -webkit-box-shadow: none; box-shadow: none; background:none">
            <div class="product-item-ctn" style="width: 100%">
                @if(isset($product->arr_image) && $images = json_decode($product->arr_image))
                    @foreach($images as $key => $image)
                        @if($image->status)
                            <a href="#" class="product-item-thumb">
                                <img class="lazyload" src="{{(isset($image->image) && trim($image->image) != '') ? imageUrl(pare_url_file($image->image, 'products'), 540, 400, 100, 1) : asset('images/no_image.png')}}" data-src="{{(isset($image->image) && trim($image->image) != '') ? imageUrl(pare_url_file($image->image, 'products'), 540, 400, 100, 1) : asset('images/no_image.png')}}" alt="{{$product->title}}" />
                            </a>
                        @endif
                    @endforeach
                @else
                    <a href="#" class="product-item-thumb">
                        <img class="lazyload" src="{{imageUrl(asset('images/no_image.png'), 540, 400, 100, 1)}}" data-src="" alt="{{$product->title}}" />
                    </a>
                @endif

                <a href="#" class="product-item-title">{{$product->title}}</a>
                <ul class="product-item-properties clearfix">
                    <li>Chiều dài <strong>{{$product->longs}} <sup>m</sup></strong></li>
                    <li>Chiều rộng <strong>{{$product->width}} <sup>m</sup></strong></li>
                    <li>Chiều cao <strong>{{$product->height}} <sup>m</sup></strong></li>
                    <li>Diện tích <strong>{{$product->area}} <sup>m2</sup></strong></li>
                </ul>
            </div>
            <div class="product_item" style="left: 35%;position: relative;padding: 5px;"> <a href="#" class="button-link bg-green" data-ids="{{$product->id}}">Chọn</a></div>
        </div>

    @endforeach
@endif


