<!---->
<div class="row-compare header-row clearfix">
    <label class="compare-label"></label>
    <h3 class="page-title">So sánh sản phẩm</h3>
</div>
<!---->
<div class="row-compare header-row clearfix">
    <label class="compare-label"></label>
    <div class="row-sub-compare">
        <div class="compare-column">
            <div class="compare-thumb">
                @if(isset($product->arr_image) && $images = json_decode($product->arr_image))
                    @foreach($images as $key => $image)
                        @if($image->status)
                            <a href="#"><img src="{{(isset($image->image) && trim($image->image) != '') ? imageUrl(pare_url_file($image->image, 'products'), 420, 250, 100, 1) : asset('images/no_image.png')}}" alt="420x250" /></a>
                        @endif
                    @endforeach
                @else
                    <a href="#"><img src="{{imageUrl(asset('images/no_image.png'), 420, 250, 100, 1)}}" alt="420x250" /></a>
                @endif

                <a href="#" hidden><i class="fa fa-times"></i></a>
            </div>
        </div>
        <div class="compare-column">
            <div class="compare-thumb {{isset($product1->id) ? '' : 'not-product'}}">
                @if(isset($product1->id))
                    @if(isset($product1->arr_image) && $images1 = json_decode($product1->arr_image))
                        @foreach($images1 as $key => $image1)
                            @if($image1->status)
                                <a href="#"><img src="{{(isset($image1->image) && trim($image1->image) != '') ? imageUrl(pare_url_file($image1->image, 'products'), 420, 250, 100, 1) : asset('images/no_image.png')}}" alt="420x250" /></a>
                            @endif
                        @endforeach
                    @else
                        <a href="#"><img src="{{imageUrl(asset('images/no_image.png'), 420, 250, 100, 1)}}" alt="420x250" /></a>
                    @endif

                    <a href="#" data-product-item="product1" data-product-id="{{$product1->id}}"><i class="fa fa-times"></i></a>
                @else
                    <span>
                        <button data-toggle="modal" data-target="#image_modal"><strong>Thêm sản phẩm </strong><i class="fa fa-plus-circle"></i></button>
                    </span>
                @endif

            </div>
        </div>
        <div class="compare-column">
            <div class="compare-thumb {{isset($product2->id) ? '' : 'not-product'}}">
                @if(isset($product2->id))
                    @if(isset($product2->arr_image) && $images2 = json_decode($product2->arr_image))
                        @foreach($images2 as $key => $image2)
                            @if($image2->status)
                                <a href="#"><img src="{{(isset($image2->image) && trim($image2->image) != '') ? imageUrl(pare_url_file($image2->image, 'products'), 420, 250, 100, 1) : asset('images/no_image.png')}}" alt="420x250" /></a>
                            @endif
                        @endforeach
                    @else
                        <a href="#"><img src="{{imageUrl(asset('images/no_image.png'), 420, 250, 100, 1)}}" alt="420x250" /></a>
                    @endif

                    <a href="#" data-product-item="product2" data-product-id="{{$product2->id}}"><i class="fa fa-times"></i></a>
                @else
                    <span>
                        <button data-toggle="modal" data-target="#image_modal"><strong>Thêm sản phẩm </strong><i class="fa fa-plus-circle"></i></button>
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>
<!---->
<div class="row-compare clearfix">
    <label class="compare-label">Tên sản phẩm</label>
    <div class="row-sub-compare">
        <div class="compare-column">
            @if(isset($product))
                <a href="#">{{$product->title}}</a>
            @endif
        </div>
        <div class="compare-column">
            @if(isset($product1))
                <a href="#">{{$product1->title}}</a>
            @endif

        </div>
        <div class="compare-column">
            @if(isset($product2))
                <a href="#">{{$product2->title}}</a>
            @endif
        </div>
    </div>
</div>
<!---->
<div class="row-compare clearfix">
    <label class="compare-label">Diện tích</label>
    <div class="row-sub-compare">
        <div class="compare-column">
            @if(isset($product))
                {{$product->area}}<sup>m2</sup>
            @endif

        </div>
        <div class="compare-column">
            @if(isset($product1))
                {{$product1->area}}<sup>m2</sup>
            @endif
        </div>
        <div class="compare-column">
            @if(isset($product2))
                {{$product2->area}}<sup>m2</sup>
            @endif
        </div>
    </div>
</div>
<div class="row-compare clearfix">
    <label class="compare-label">Kích thước</label>
    <div class="row-sub-compare">
        <div class="compare-column">
            <ul>
                @if(isset($product))
                    <li>Dài: {{$product->longs}}<sup>m</sup></li>
                    <li>Rộng: {{$product->width}}<sup>m</sup></li>
                    <li>Cao: {{$product->height}}<sup>m</sup></li>
                @endif
            </ul>
        </div>
        <div class="compare-column">
            <ul>
                @if(isset($product1))
                    <li>Dài: {{$product1->longs}}<sup>m</sup></li>
                    <li>Rộng: {{$product1->width}}<sup>m</sup></li>
                    <li>Cao: {{$product1->height}}<sup>m</sup></li>
                @endif
            </ul>
        </div>
        <div class="compare-column">
            @if(isset($product2))
                <li>Dài: {{$product2->longs}}<sup>m</sup></li>
                <li>Rộng: {{$product2->width}}<sup>m</sup></li>
                <li>Cao: {{$product2->height}}<sup>m</sup></li>
            @endif
        </div>
    </div>
</div>
<div class="row-compare clearfix">
    <label class="compare-label">Số phòng</label>
    <div class="row-sub-compare">
        <div class="compare-column">
            @if(isset($product))
                {{$product->room_number}} {{isset($product->room_description) ? '(' .$product->room_description. ')' : '' }}
            @endif
        </div>
        <div class="compare-column">
            @if(isset($product1))
                {{$product1->room_number}} {{isset($product1->room_description) ? '(' .$product1->room_description. ')' : '' }}
            @endif
        </div>
        <div class="compare-column">
            @if(isset($product2))
                {{$product2->room_number}} {{isset($product2->room_description) ? '(' .$product2->room_description. ')' : '' }}
            @endif
        </div>
    </div>
</div>


    @if(isset($keys))
        @foreach($keys as $key => $item)
            @if($item->tag_type === 'input')
                <div class="row-compare clearfix">
                    <label class="compare-label">{{$item->name}}</label>
                    <div class="row-sub-compare">
                        <div class="compare-column">
                            @if(isset($product))
                                {{$product->keys()->find($item->id)->value}}
                            @endif
                        </div>
                        <div class="compare-column">
                            @if(isset($product1))
                                {{$product1->keys()->find($item->id)->value}}
                            @endif
                        </div>
                        <div class="compare-column">
                            @if(isset($product2))
                                {{$product2->keys()->find($item->id)->value}}
                            @endif
                        </div>
                    </div>
                </div>
            @elseif($item->tag_type === 'checkbox')
                <div class="row-compare clearfix">
                    <label class="compare-label">{{$item->name}}</label>
                    <div class="row-sub-compare">
                        <div class="compare-column">
                            @if(isset($product))
                                {{$product->keys()->find($item->id)->value == 1 ? 'Có' : 'Không'}}
                            @endif
                        </div>
                        <div class="compare-column">
                            @if(isset($product1))
                                {{$product1->keys()->find($item->id)->value == 1 ? 'Có' : 'Không'}}
                            @endif
                        </div>
                        <div class="compare-column">
                            @if(isset($product2))
                                {{$product2->keys()->find($item->id)->value == 1 ? 'Có' : 'Không'}}
                            @endif
                        </div>
                    </div>
                </div>
            @elseif($item->tag_type === 'textarea')
                <div class="row-compare clearfix">
                    <label class="compare-label">{{$item->name}}</label>
                    <div class="row-sub-compare">
                        <div class="compare-column">
                            <ul>
                                @if(isset($product))
                                    {!! $product->keys()->find($item->id)->value  !!}
                                @endif
                            </ul>
                        </div>
                        <div class="compare-column">
                            <ul>
                                @if(isset($product1))
                                    {!! $product1->keys()->find($item->id)->value  !!}
                                @endif
                            </ul>
                        </div>
                        <div class="compare-column">
                            <ul>
                                @if(isset($product2))
                                    {!! $product2->keys()->find($item->id)->value  !!}
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    @endif


<div style="padding-top:20px">
    <a href="#" class="button-link bg-green">Tự thiết kế</a>
    <a href="{{route('get.list.product')}}" class="button-link">Tiếp tục khám phá</a>
</div>
