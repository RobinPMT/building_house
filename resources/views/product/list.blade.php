@extends('layouts.app')
@section('content')
    <section class="section-page product-section">
        <div class="container">
            <div class="homepage-title clearfix">
                <h2 class="home-title"><em>Khám phá</em> và lựa chọn
                    ngôi nhà bạn mong muốn</h2>
                <div class="homedesc"><a href="{{route('get.list.contact')}}" class="button-link bg-green"><i class="fa fa-phone"></i> Liên hệ tư vấn</a></div>
            </div>
            <div class="product-filter clearfix">
                <div class="row row_5">
                    <div class="product-filter-col">
                        <select name="category">
                            <option value="0">Chọn loại nhà</option>
                            <option value="1">Trio House</option>
                            <option value="2">Cubic House</option>
                            <option value="3">Diamond House</option>
                            <option value="4">Oval House</option>
                            <option value="5">Rectro House</option>
                        </select>
                    </div>
                    <div class="product-filter-col">
                        <select name="category">
                            <option value="0">Chọn diện tích</option>
                            <option value="1">Trio House</option>
                            <option value="2">Cubic House</option>
                            <option value="3">Diamond House</option>
                            <option value="4">Oval House</option>
                            <option value="5">Rectro House</option>
                        </select>
                    </div>
                    <div class="product-filter-col">
                        <select name="category">
                            <option value="0">Chọn diện tích</option>
                            <option value="1">Trio House</option>
                            <option value="2">Cubic House</option>
                            <option value="3">Diamond House</option>
                            <option value="4">Oval House</option>
                            <option value="5">Rectro House</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row row_sm_10 product-list">
                @if(isset($products))
                    @foreach($products as $key => $product)
                        <div class="col-sm-4 col-xs-6 product-item">
                            <div class="product-item-ctn">
                                @if(isset($product->arr_image) && $images = json_decode($product->arr_image))
                                    @foreach($images as $key => $image)
                                        @if($image->status)
                                            <a href="#" class="product-item-thumb">
                                                <img class="lazyload" src="{{asset('fe_template/images/loading.gif')}}" data-src="{{(isset($image->image) && trim($image->image) != '') ? imageUrl(pare_url_file($image->image, 'products'), 540, 400, 100, 1) : asset('images/no_image.png')}}" alt="540x400" />
                                            </a>
                                        @endif
                                    @endforeach
                                @else
                                    <a href="{{route('get.detail.product', [$product->slug])}}" class="product-item-thumb">
                                        <img class="lazyload" src="{{asset('fe_template/images/loading.gif')}}" data-src="{{imageUrl(asset('images/no_image.png'), 540, 400, 100, 1)}}" alt="540x400" />
                                    </a>
                                @endif

                                <a href="{{route('get.detail.product', [$product->slug])}}" class="product-item-title">{{$product->title}}</a>
                                <ul class="product-item-properties clearfix">
                                    <li>Chiều dài <strong>{{$product->longs}} <sup>m</sup></strong></li>
                                    <li>Chiều rộng <strong>{{$product->width}} <sup>m</sup></strong></li>
                                    <li>Chiều cao <strong>{{$product->height}} <sup>m</sup></strong></li>
                                    <li>Diện tích <strong>{{$product->area}} <sup>m2</sup></strong></li>
                                </ul>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
            <!--12 item/page-->
            <div class="wrapper-pagination text-center">
                {{$products->links('vendor.pagination.default')}}
            </div>
        </div>
    </section>
@stop

@section('script')
@stop
