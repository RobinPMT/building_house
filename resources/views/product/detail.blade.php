
@extends('layouts.app')
@section('content')

    @if(isset($product))
        <section class="section-page product-section">
            <div class="container">
                <div class="homepage-title clearfix">
                    <h2 class="home-title">{{$product->title}}</h2>
                    <div class="homedesc"><a href="{{route('get.list.contact')}}" class="button-link bg-green"><i class="fa fa-phone"></i> Liên hệ tư vấn</a></div>
                </div>
                <div class="row row_sm_10">
                    <div class="col-sm-6">
                        <div class="product-single-thumb">
                            <div class="product-larger-thumb">
                                <div class="owl-carousel">
                                    @if(isset($product->arr_image) && $images = json_decode($product->arr_image))
                                        @foreach($images as $key => $image)
                                            @if($image->status)
                                                <a data-fancybox="gallery" href="{{imageUrl(pare_url_file($image->image, 'products') ?? asset('images/no_image.png'), 690, 630, 100, 1)}}"><img class="owl-lazy" data-src="{{imageUrl(pare_url_file($image->image, 'products') ?? asset('images/no_image.png'), 690, 630, 100, 1)}}" alt="690x630" /></a>
                                            @endif
                                        @endforeach

                                        @foreach($images as $key => $image)
                                            @if(!$image->status)
                                                <a data-fancybox="gallery" href="{{imageUrl(pare_url_file($image->image, 'products') ?? asset('images/no_image.png'), 690, 630, 100, 1)}}"><img class="owl-lazy" data-src="{{imageUrl(pare_url_file($image->image, 'products') ?? asset('images/no_image.png'), 690, 630, 100, 1)}}" alt="690x630" /></a>
                                            @endif
                                        @endforeach

                                    @endif
                                </div>
                            </div>
                            <div class="product-small-thumb">
                                <div class="owl-carousel">
                                    @if(isset($product->arr_image) && $images = json_decode($product->arr_image))
                                        @foreach($images as $key => $image)
                                            @if($image->status)
                                                <a data-fancybox="gallery" href="{{imageUrl(pare_url_file($image->image, 'products') ?? asset('images/no_image.png'), 145, 100, 100, 1)}}"><img class="owl-lazy" data-src="{{imageUrl(pare_url_file($image->image, 'products') ?? asset('images/no_image.png'), 145, 100, 100, 1)}}" alt="690x630" /></a>
                                            @endif
                                        @endforeach
                                        @foreach($images as $key => $image)
                                                @if(!$image->status)
                                                    <a href="#"><img class="owl-lazy" data-src="{{imageUrl(pare_url_file($image->image, 'products') ?? asset('images/no_image.png'), 145, 100, 100, 1)}}" alt="145x100" /></a>
                                                @endif
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="product-single-thumb-more"><img class="lazyload" src="{{asset('fe_template/images/loading.gif')}}" data-src="{{imageUrl(pare_url_file($product->avatar_design, 'products') ?? asset('images/no_image.png'), 540, 320, 100, 1)}}" alt="540x320" /></div>
                    </div>
                </div>
                <h4 class="other-title">Thông số chi tiết</h4>
                <div class="product-single-information">
                    <ul class="detail-popup-ul">
                        <li>
                            <label>Diện tích</label>
                            <div>{{$product->area}}<sup>m2</sup></div>
                        </li>
                        <li>
                            <label>Kích thước</label>
                            <div>
                                <ul>
                                    <li>Dài: {{$product->longs}}<sup>m</sup></li>
                                    <li>Rộng: {{$product->width}}<sup>m</sup></li>
                                    <li>Cao: {{$product->height}}<sup>m</sup></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <label>Số phòng</label>
                            <div>{{$product->room_number}} {{isset($product->room_description) ? '(' .$product->room_description. ')' : '' }}</div>
                        </li>
                        @if(isset($product->keys) && $keys = $product->keys)
                            @if(isset($keys))
                                @foreach($keys as $key => $item)
                                    @if($item->tag_type === 'input')
                                        <li>
                                            <label>{{$item->name}}</label>
                                            <div>{{$item->value}}</div>
                                        </li>
                                    @elseif($item->tag_type === 'checkbox')
                                        <li>
                                            <label>{{$item->name}}</label>
                                            <div>{{$item->value == 1 ? 'Có' : 'Không'}}</div>
                                        </li>
                                    @elseif($item->tag_type === 'textarea')
                                        <li>
                                            <label>{{$item->name}}</label>
                                            <div>
{{--                                                <ul>--}}
{{--                                                    {!! $item->value !!}--}}
{{--                                                </ul>--}}
                                                {{$item->value}}
                                            </div>
                                        </li>
                                    @endif
                                @endforeach
                            @endif
                        @endif
                    </ul>
                </div>
                <div class="product-single-action">
                    <a href="{{route('get.list.design', ['category_id' => $product->category_id, 'slug' => $product->slug])}}" class="button-link bg-green">Tự thiết kế</a>
                    <a href="#" data-id="1" class="button-link get-compare-popup" data-toggle="modal" data-target="#product-compare">So sánh</a>
                </div>
            </div>
        </section>
        <div class="modal fade product-popup" id="product-compare" tabindex="-1" role="dialog" aria-hidden="true" style="overflow-y: auto;">
            <div class="container">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <button type="button" onclick="showScroll()" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="modal-body compare_item">

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
                                        <div class="compare-thumb not-product">
                                            <span>
                                                <button data-toggle="modal" data-target="#image_modal"><strong>Thêm sản phẩm </strong><i class="fa fa-plus-circle"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="compare-column">
                                        <div class="compare-thumb product2 not-product">
                                            <span>
                                                <button data-toggle="modal" data-target="#image_modal"><strong>Thêm sản phẩm </strong><i class="fa fa-plus-circle"></i></button>
                                            </span>
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

                                    </div>
                                    <div class="compare-column">
                                    </div>
                                </div>
                            </div>
                            <!---->
                            <div class="row-compare clearfix">
                                <label class="compare-label">Diện tích</label>
                                <div class="row-sub-compare">
                                    <div class="compare-column">
                                        {{$product->area}}<sup>m2</sup>
                                    </div>
                                    <div class="compare-column">

                                    </div>
                                    <div class="compare-column">

                                    </div>
                                </div>
                            </div>
                            <div class="row-compare clearfix">
                                <label class="compare-label">Kích thước</label>
                                <div class="row-sub-compare">
                                    <div class="compare-column">
                                        <ul>
                                            <li>Dài: {{$product->longs}}<sup>m</sup></li>
                                            <li>Rộng: {{$product->width}}<sup>m</sup></li>
                                            <li>Cao: {{$product->height}}<sup>m</sup></li>
                                        </ul>
                                    </div>
                                    <div class="compare-column">
                                        <ul>

                                        </ul>
                                    </div>
                                    <div class="compare-column">

                                    </div>
                                </div>
                            </div>
                            <div class="row-compare clearfix">
                                <label class="compare-label">Số phòng</label>
                                <div class="row-sub-compare">
                                    <div class="compare-column">
                                        {{$product->room_number}} {{isset($product->room_description) ? '(' .$product->room_description. ')' : '' }}
                                    </div>
                                    <div class="compare-column">

                                    </div>
                                    <div class="compare-column">

                                    </div>
                                </div>
                            </div>
                            @if(isset($product->keys) && $keys = $product->keys)
                                @if(isset($keys))
                                    @foreach($keys as $key => $item)
                                        @if($item->tag_type === 'input')
                                            <div class="row-compare clearfix">
                                                <label class="compare-label">{{$item->name}}</label>
                                                <div class="row-sub-compare">
                                                    <div class="compare-column">
                                                        {{$item->value}}
                                                    </div>
                                                    <div class="compare-column">

                                                    </div>
                                                    <div class="compare-column">

                                                    </div>
                                                </div>
                                            </div>
                                        @elseif($item->tag_type === 'checkbox')
                                            <div class="row-compare clearfix">
                                                <label class="compare-label">{{$item->name}}</label>
                                                <div class="row-sub-compare">
                                                    <div class="compare-column">
                                                        {{$item->value == 1 ? 'Có' : 'Không'}}
                                                    </div>
                                                    <div class="compare-column">

                                                    </div>
                                                    <div class="compare-column">

                                                    </div>
                                                </div>
                                            </div>
                                        @elseif($item->tag_type === 'textarea')
                                            <div class="row-compare clearfix">
                                                <label class="compare-label">{{$item->name}}</label>
                                                <div class="row-sub-compare">
                                                    <div class="compare-column">
{{--                                                        <ul>--}}
{{--                                                            {!! $item->value !!}--}}
{{--                                                        </ul>--}}
                                                        {{$item->value}}
                                                    </div>
                                                    <div class="compare-column">
                                                        <ul>

                                                        </ul>
                                                    </div>
                                                    <div class="compare-column">
                                                        <ul>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif
                            @endif


                            <div style="padding-top:20px">
                                <a href="{{route('get.list.design', ['category_id' => $product->category_id, 'slug' => $product->slug])}}" class="button-link bg-green">Tự thiết kế</a>
                                <a href="{{route('get.list.product')}}" class="button-link">Tiếp tục khám phá</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div id="image_modal" role="dialog" class="file-zoom-dialog modal fade" tabindex="-1" aria-labelledby="image_modal" style="z-index: 10000000!important;display: none;" aria-hidden="true">
        <div class="container">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Danh sách sản phẩm</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px !important;">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="container product_list" style="margin-left: -15px;">

                        </div>

                        <div class="wrapper-pagination text-center pagination_list">

                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('script')
    <link href="{{asset('fe_template/css/owl.carousel.min.css')}}" rel="stylesheet" />
    <script type="text/javascript" src="{{asset('fe_template/js/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('fe_template/js/jquery.fancybox.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('fe_template/css/jquery.fancybox.css')}}" media="screen" />
    <script type="text/javascript">
        $('#product-compare').on('hidden.bs.modal', function () {
            showScroll();
        });
        function showScroll() {
            $("html").css({"overflow-y": "auto"});
        }

        $(document).ready(function(){
            sync1 = $('.product-larger-thumb .owl-carousel');
            sync2 = $('.product-small-thumb .owl-carousel');
            var syncedSecondary = true;
            sync1.owlCarousel({ lazyLoad: true, items: 1, loop: true, autoplay: false, nav: true, dots: false, autoplayHoverPause:true, afterAction : syncPosition }).on('changed.owl.carousel', syncPosition);
            sync2.on('initialized.owl.carousel', function () {
                sync2.find(".owl-item").eq(0).addClass("current");
            }).owlCarousel({ lazyLoad: true, autoplay: false, margin: 15, loop: false, items : 3, dots: false, nav: true, responsive:{ 571:{ items: 4 } },
            }).on('changed.owl.carousel', syncPosition2);
            function syncPosition(el) {
                //if you disable loop you have to comment this block
                var count = el.item.count-1;
                var current = Math.round(el.item.index - (el.item.count/2) - .5);
                if(current < 0) { current = count; }
                if(current > count) { current = 0; }
                sync2.find(".owl-item")
                    .removeClass("current")
                    .eq(current)
                    .addClass("current");
                var onscreen = sync2.find('.owl-item.active').length - 1;
                var start = sync2.find('.owl-item.active').first().index();
                var end = sync2.find('.owl-item.active').last().index();
                if (current > end) {
                    sync2.data('owl.carousel').to(current, 100, true);
                }
                if (current < start) {
                    sync2.data('owl.carousel').to(current - onscreen, 100, true);
                }
            }
            function syncPosition2(el) {
                if(syncedSecondary) {
                    var number = el.item.index;
                    sync1.data('owl.carousel').to(number, 100, true);
                }
            }
            sync2.on("click", ".owl-item", function(e){
                e.preventDefault();
                var number = $(this).index();
                sync1.data('owl.carousel').to(number, 300, true);
            });


            localStorage.removeItem("product1");
            localStorage.removeItem("product2");
            let arr = [];
            $(document).on('click', 'div .product_item a', function(event){
                event.preventDefault();

                // $('#product-compare').modal('hide');
                let id = '{{$product->id}}';
                let id1 = $(this).attr('data-ids');
                arr.push(id1);
                arr = [...new Set(arr)];
                // console.log(arr)
                if(arr.length > 1){
                    localStorage.setItem("product1", arr[arr.length - 2]);
                    localStorage.setItem("product2", arr[arr.length - 1]);
                } else {
                    localStorage.setItem("product1", arr[arr.length - 1]);
                }
                let product1 = null;
                let product2 = null;
                if(localStorage.getItem("product1")) {
                    product1 = localStorage.getItem("product1");
                }
                if(localStorage.getItem("product2")) {
                    product2 = localStorage.getItem("product2");
                }

                let url = "/chi-tiet-san-pham-ajax/"+id;

                $.ajax({
                    type: 'GET',
                    url: url,
                    data: {product1: product1, product2: product2},
                    success: function (response) {
                        $(".compare_item").html(response);
                        $("html").css({"overflow-y": "hidden"});
                        $('#image_modal').modal('hide');
                        $('#product-compare').modal('show');
                    }
                });


            });


            $(document).on('click', '.compare-thumb a:last-child', function(e){
                e.preventDefault();

                let product_id = $(this).attr('data-product-id');

                arr = arr.filter(item => item !== product_id);
                console.log(product_id, arr);
                if($(this).attr('data-product-item') === 'product2') {
                    localStorage.removeItem($(this).attr('data-product-item'));
                } else {
                    localStorage.setItem("product1", localStorage.getItem("product2"));
                    localStorage.removeItem('product2');
                }

                var parent = $(this).parent().parent(), idx = parent.index();
                $('.row-sub-compare').each(function(){
                    $(this).children('.compare-column').eq(idx).remove();
                    var par = $(this).parent();
                    if(par.hasClass('header-row')){
                        $(this).append('<div class="compare-column"><div class="compare-thumb not-product"><span><button data-toggle="modal" data-target="#image_modal"><strong>Thêm sản phẩm </strong><i class="fa fa-plus-circle"></i></button></span></div></div>');
                    }else{
                        $(this).append('<div class="compare-column"></div>');
                    }
                });
            });
        });
    </script>

    <script>
        $(document).ready(function(){
            fetch_data(1);
            $(document).on('click', '.pagination a', function(event){
                event.preventDefault();
                let page = $(this).attr('href').split('page=')[1];
                fetch_data(page);
            });
            function fetch_data(page)
            {
                let url = '{{route('get.list.ajax.product', [$product->id])}}';
                $.ajax({
                    type: 'GET',
                    url: url+"?page="+page,
                    success: function (response) {
                        // console.log(response);
                        $(".product_list").html(response.html);
                        $(".pagination_list").html(response.pagination_html);
                        // if(response.productsAjax.data) {
                        //     let products = response.productsAjax.data;
                        //     let paginations = response.productsAjax.links;
                        //     let htmlPaginations = '';
                        //     let html = '';
                        //     for (let i = 0; i < products.length; i++) {
                        //         html += `
                        //             <div>
                        //                 <div class="col-sm-4 col-xs-6 product-item">
                        //                     <div class="product-item-ctn">
                        //                         <a href="" class="product-item-title"></a>
                        //                         <ul class="product-item-properties clearfix">
                        //                             <li>Chiều dài <strong> <sup>m</sup></strong></li>
                        //                             <li>Chiều rộng <strong> <sup>m</sup></strong></li>
                        //                             <li>Chiều cao <strong> <sup>m</sup></strong></li>
                        //                             <li>Diện tích <strong> <sup>m2</sup></strong></li>
                        //                         </ul>
                        //                     </div>
                        //                 </div>
                        //             </div>
                        //         `;
                        //     }
                        //     for (let j = 0; j < paginations.length; j++) {
                        //         htmlPaginations += `
                        //
                        //         `;
                        //     }
                        //     $(".product_list").html(html);
                        // }
                    }
                })

            }
        });
    </script>
    <script>
        {{--$(document).ready(function(){--}}
        {{--    localStorage.removeItem("product1");--}}
        {{--    localStorage.removeItem("product2");--}}
        {{--    let arr = [];--}}
        {{--    $(document).on('click', 'div .product_item a', function(event){--}}
        {{--        event.preventDefault();--}}

        {{--        // $('#product-compare').modal('hide');--}}
        {{--        let id = '{{$product->id}}';--}}
        {{--        let id1 = $(this).attr('data-ids');--}}
        {{--        arr.push(id1);--}}
        {{--        arr = [...new Set(arr)];--}}
        {{--        console.log(arr)--}}
        {{--        if(arr.length > 1){--}}
        {{--            localStorage.setItem("product1", arr[arr.length - 2]);--}}
        {{--            localStorage.setItem("product2", arr[arr.length - 1]);--}}
        {{--        } else {--}}
        {{--            localStorage.setItem("product1", arr[arr.length - 1]);--}}
        {{--        }--}}
        {{--        let product1 = null;--}}
        {{--        let product2 = null;--}}
        {{--        if(localStorage.getItem("product1")) {--}}
        {{--            product1 = localStorage.getItem("product1");--}}
        {{--        }--}}
        {{--        if(localStorage.getItem("product2")) {--}}
        {{--            product2 = localStorage.getItem("product2");--}}
        {{--        }--}}

        {{--        let url = "/chi-tiet-san-pham-ajax/"+id;--}}

        {{--        $.ajax({--}}
        {{--            type: 'GET',--}}
        {{--            url: url,--}}
        {{--            data: {product1: product1, product2: product2},--}}
        {{--            success: function (response) {--}}
        {{--                $(".compare_item").html(response);--}}
        {{--                $('#image_modal').modal('hide');--}}
        {{--                $('#product-compare').modal('show');--}}
        {{--            }--}}
        {{--        });--}}


        {{--    });--}}

        {{--});--}}
    </script>
@stop
