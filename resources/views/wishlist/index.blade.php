@extends('layouts.app')
@section('content')
    <section class="section-page product-section">
        <div class="container">
            <div class="homepage-title clearfix">
                <h2 class="home-title">Danh sách thiết kế của bạn</h2>
{{--                <div class="homedesc"><a href="{{route('get.list.contact')}}" class="button-link bg-green"><i class="fa fa-phone"></i> Liên hệ tư vấn</a></div>--}}
            </div>
            <div class="row row_sm_10 product-list">
                @if(isset($wishLists))
                    @foreach($wishLists as $key => $wishList)
                        <div class="col-sm-4 col-xs-6 product-item">
                            <div class="product-item-ctn">
                                @if(isset($wishList->product->arr_image) && $images = json_decode($wishList->product->arr_image))
                                    @foreach($images as $key => $image)
                                        @if($image->status)
                                            <a href="#" class="product-item-thumb">
                                                <img class="lazyload" src="{{asset('fe_template/images/loading.gif')}}" data-src="{{(isset($image->image) && trim($image->image) != '') ? imageUrl(pare_url_file($image->image, 'products'), 540, 400, 100, 1) : asset('images/no_image.png')}}" alt="540x400" />
                                            </a>
                                        @endif
                                    @endforeach
                                @else
                                    <a href="{{route('get.detail.wishlist.design', [$wishList->product->slug, 'code' => $wishList->title])}}" class="product-item-thumb">
                                        <img class="lazyload" src="{{asset('fe_template/images/loading.gif')}}" data-src="{{imageUrl(asset('images/no_image.png'), 540, 400, 100, 1)}}" alt="540x400" />
                                    </a>
                                @endif

                                <a href="{{route('get.detail.wishlist.design', [$wishList->product->slug, 'code' => $wishList->title])}}" class="product-item-title">
                                    {{$wishList->product->title}}
                                    <h6>Mã: {{$wishList->title}}</h6>
                                    <h6>Trạng thái: {{$wishList->type === \App\Models\Wishlist::TYPE_TRANSACTION ? 'Đã gửi' : 'Chưa gửi'}}</h6>
                                    <small>Chi tiết</small>
                                </a>

                                <ul class="product-item-properties clearfix">
                                    <li>Chiều dài <strong>{{$wishList->product->longs}} <sup>m</sup></strong></li>
                                    <li>Chiều rộng <strong>{{$wishList->product->width}} <sup>m</sup></strong></li>
                                    <li>Chiều cao <strong>{{$wishList->product->height}} <sup>m</sup></strong></li>
                                    <li>Diện tích <strong>{{$wishList->product->area}} <sup>m2</sup></strong></li>
                                </ul>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
            <!--12 item/page-->
            <div class="wrapper-pagination text-center">
                @if(isset($wishLists))
                    {{ $wishLists->appends(Request::all())->links('vendor.pagination.default') }}
                @endif
            </div>
        </div>
    </section>
@stop

@section('script')
    <script>
    </script>
@stop
