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
                    <form class="tree-most" id="form_filter" method="get">
                        <div class="product-filter-col">
                            <select name="category_id" class="category_id">
                                <option {{\Request::get('category_id') == "0" || !\Request::get('category_id') ? "selected=selected" : ""}} value="0" selected>Chọn loại nhà</option>
                                @if(isset($categories))
                                    @foreach($categories as $key => $category)
                                        <option {{\Request::get('category_id') == $category->id ? "selected=selected" : ""}} value="{{$category->id}}">{{$category->title}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="product-filter-col">
                            <select name="area" class="area">
                                <option {{\Request::get('area') == "0" || !\Request::get('area') ? "selected=selected" : ""}} value="0" selected>Chọn diện tích</option>
                                @if(isset($areas))
                                    @foreach($areas as $key => $area)
                                        @if($area->from < $area->to)
                                            {{$value = $area->from.'_'.$area->to}}
                                            <option {{\Request::get('area')== $value ? "selected=selected" : ""}} value="{{$value}}">{{$area->title}}</option>
                                        @else
                                            {{$value = $area->from.'_'}}
                                            <option {{\Request::get('area') == $value  ? "selected=selected" : ""}} value="{{$value}}">{{$area->title}}</option>
                                        @endif

                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="product-filter-col">
                            <select name="room_number" class="room_number">
                                <option {{\Request::get('room_number') == "0" || !\Request::get('room_number') ? "selected=selected" : ""}} value="0" selected>Chọn số phòng</option>
                                <option {{\Request::get('room_number') == "1" ? "selected=selected" : ""}} value="1">1 phòng</option>
                                <option {{\Request::get('room_number') == "2" ? "selected=selected" : ""}} value="2">2 phòng</option>
                                <option {{\Request::get('room_number') == "3" ? "selected=selected" : ""}} value="3">3 phòng</option>
                                <option {{\Request::get('room_number') == "4" ? "selected=selected" : ""}} value="4">4 phòng</option>
                                <option {{\Request::get('room_number') == "5" ? "selected=selected" : ""}} value="5">5 phòng</option>
                                <option {{\Request::get('room_number') == "6" ? "selected=selected" : ""}} value="6">Trên 5 phòng</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row row_sm_10 product-list">
                @if(isset($products) && count($products) > 0)
                    @foreach($products as $key => $product)
                        <div class="col-sm-4 col-xs-6 product-item">
                            <div class="product-item-ctn">
                                @if(isset($product->arr_image) && $images = json_decode($product->arr_image))
                                    @foreach($images as $key => $image)
                                        @if($image->status)
                                            <a href="{{route('get.detail.product', [$product->slug])}}" class="product-item-thumb">
                                                <img class="lazyload" src="{{asset('fe_template/images/loading.gif')}}" data-src="{{(isset($image->image) && trim($image->image) != '') ? imageUrl(pare_url_file($image->image, 'products'), 540, 400, 100, 1) : asset('images/no_image.png')}}" alt="{{$product->title}}" />
                                            </a>
                                        @endif
                                    @endforeach
                                @else
                                    <a href="{{route('get.detail.product', [$product->slug])}}" class="product-item-thumb">
                                        <img class="lazyload" src="{{asset('fe_template/images/loading.gif')}}" data-src="{{imageUrl(asset('images/no_image.png'), 540, 400, 100, 1)}}" alt="{{$product->title}}" />
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
                @else
                    <h5 style="margin-left: 15px; color: #014C47">Rất tiếc, chưa có sản phẩm phù hợp với tìm kiếm của bạn!</h5>
                @endif

            </div>
            <!--12 item/page-->
            <div class="wrapper-pagination text-center">
                @if(isset($products))
                    {{ $products->appends(Request::all())->links('vendor.pagination.default') }}
                @endif
            </div>
        </div>
    </section>
@stop

@section('script')
    <script>
        $(function () {
            $('.room_number').change(function () {
                $("#form_filter").submit();
            });
            $('.category_id').change(function () {
                $("#form_filter").submit();
            });
            $('.area').change(function () {
                $("#form_filter").submit();
            });
        });
    </script>
@stop
