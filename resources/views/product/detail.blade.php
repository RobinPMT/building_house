
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
                                                <ul>
                                                    {!! $item->value !!}
                                                </ul>
                                            </div>
                                        </li>
                                    @endif
                                @endforeach
                            @endif
                        @endif
                    </ul>
                </div>
                <div class="product-single-action">
                    <a href="#" class="button-link bg-green">Tự thiết kế</a>
                    <a href="#" data-id="1" class="button-link get-compare-popup" data-toggle="modal" data-target="#product-compare">So sánh</a>
                </div>
            </div>
        </section>
        <div class="modal fade product-popup" id="product-compare" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="container">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="modal-body">
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
                                            <a href="#"><img src="{{asset('fe_template/images/product/cp-1.jpg')}}" alt="420x250" /></a>
                                            <a href="#"><i class="fa fa-times"></i></a>
                                        </div>
                                    </div>
                                    <div class="compare-column">
                                        <div class="compare-thumb">
                                            <a href="#"><img src="{{asset('fe_template/images/product/cp-1.jpg')}}" alt="420x250" /></a>
                                            <a href="#"><i class="fa fa-times"></i></a>
                                        </div>
                                    </div>
                                    <div class="compare-column">
                                        <div class="compare-thumb not-product">
                                            <span onclick="window.location='link-trang-san-pham'"><strong>Thêm sản phẩm </strong><i class="fa fa-plus-circle"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---->
                            <div class="row-compare clearfix">
                                <label class="compare-label">Tên sản phẩm</label>
                                <div class="row-sub-compare">
                                    <div class="compare-column">
                                        <a href="#">Căn Trio</a>
                                    </div>
                                    <div class="compare-column">
                                        <a href="#">Căn Diamond</a>
                                    </div>
                                    <div class="compare-column">
                                    </div>
                                </div>
                            </div>
                            <!---->
                            <div class="row-compare clearfix">
                                <label class="compare-label">Công nghệ</label>
                                <div class="row-sub-compare">
                                    <div class="compare-column">
                                        <ul>
                                            <li>Khung kết cấu thép</li>
                                            <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                            <li>Chông thấm: Tole</li>
                                            <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                            <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                            <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                        </ul>
                                    </div>
                                    <div class="compare-column">
                                        <ul>
                                            <li>Khung kết cấu thép</li>
                                            <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                            <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                            <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                        </ul>
                                    </div>
                                    <div class="compare-column">
                                    </div>
                                </div>
                            </div>
                            <!---->
                            <div class="row-compare clearfix">
                                <label class="compare-label">Hệ thống nước</label>
                                <div class="row-sub-compare">
                                    <div class="compare-column">
                                        Hoàn thiện
                                    </div>
                                    <div class="compare-column">
                                        Hoàn thiện
                                    </div>
                                    <div class="compare-column">

                                    </div>
                                </div>
                            </div>
                            <!---->
                            <div class="row-compare clearfix">
                                <label class="compare-label">Hệ thống điện</label>
                                <div class="row-sub-compare">
                                    <div class="compare-column">
                                        Hoàn thiện
                                    </div>
                                    <div class="compare-column">
                                        Hoàn thiện
                                    </div>
                                    <div class="compare-column">

                                    </div>
                                </div>
                            </div>
                            <!---->
                            <div class="row-compare clearfix">
                                <label class="compare-label">Công năng</label>
                                <div class="row-sub-compare">
                                    <div class="compare-column">
                                        <ul>
                                            <li>Khung kết cấu thép</li>
                                            <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                            <li>Chông thấm: Tole</li>
                                        </ul>
                                    </div>
                                    <div class="compare-column">
                                        <ul>
                                            <li>Khung kết cấu thép</li>
                                            <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                            <li>Chông thấm: Tole</li>
                                        </ul>
                                    </div>
                                    <div class="compare-column">

                                    </div>
                                </div>
                            </div>
                            <!---->
                            <div class="row-compare clearfix">
                                <label class="compare-label">Bếp</label>
                                <div class="row-sub-compare">
                                    <div class="compare-column">
                                        Có
                                    </div>
                                    <div class="compare-column">
                                        Có
                                    </div>
                                    <div class="compare-column">

                                    </div>
                                </div>
                            </div>
                            <!---->
                            <div class="row-compare clearfix">
                                <label class="compare-label">Thiết bị</label>
                                <div class="row-sub-compare">
                                    <div class="compare-column">
                                        <ul>
                                            <li>Khung kết cấu thép</li>
                                            <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                            <li>Chông thấm: Tole</li>
                                        </ul>
                                    </div>
                                    <div class="compare-column">
                                        <ul>
                                            <li>Khung kết cấu thép</li>
                                            <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                            <li>Chông thấm: Tole</li>
                                        </ul>
                                    </div>
                                    <div class="compare-column">

                                    </div>
                                </div>
                            </div>
                            <!---->
                            <div class="row-compare clearfix">
                                <label class="compare-label">Thiết bị vệ sinh</label>
                                <div class="row-sub-compare">
                                    <div class="compare-column">
                                        <ul>
                                            <li>Khung kết cấu thép</li>
                                            <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                            <li>Chông thấm: Tole</li>
                                        </ul>
                                    </div>
                                    <div class="compare-column">
                                        <ul>
                                            <li>Khung kết cấu thép</li>
                                            <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                            <li>Chông thấm: Tole</li>
                                        </ul>
                                    </div>
                                    <div class="compare-column">

                                    </div>
                                </div>
                            </div>
                            <!---->
                            <div class="row-compare clearfix">
                                <label class="compare-label">Vật dụng khác</label>
                                <div class="row-sub-compare">
                                    <div class="compare-column">
                                        <ul>
                                            <li>Khung kết cấu thép</li>
                                            <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                            <li>Chông thấm: Tole</li>
                                        </ul>
                                    </div>
                                    <div class="compare-column">
                                        <ul>
                                            <li>Khung kết cấu thép</li>
                                            <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                            <li>Chông thấm: Tole</li>
                                        </ul>
                                    </div>
                                    <div class="compare-column">

                                    </div>
                                </div>
                            </div>
                            <!---->
                            <div class="row-compare clearfix">
                                <label class="compare-label">Vận chuyển</label>
                                <div class="row-sub-compare">
                                    <div class="compare-column">
                                        Container
                                    </div>
                                    <div class="compare-column">
                                        Container
                                    </div>
                                    <div class="compare-column">

                                    </div>
                                </div>
                            </div>
                            <!---->
                            <div class="row-compare clearfix">
                                <label class="compare-label">Bảo hành</label>
                                <div class="row-sub-compare">
                                    <div class="compare-column">
                                        <ul>
                                            <li>Khung kết cấu thép</li>
                                            <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                            <li>Chông thấm: Tole</li>
                                        </ul>
                                    </div>
                                    <div class="compare-column">
                                        <ul>
                                            <li>Khung kết cấu thép</li>
                                            <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                            <li>Chông thấm: Tole</li>
                                        </ul>
                                    </div>
                                    <div class="compare-column">

                                    </div>
                                </div>
                            </div>
                            <!---->
                            <div class="row-compare clearfix">
                                <label class="compare-label">Diện tích sàn</label>
                                <div class="row-sub-compare">
                                    <div class="compare-column">
                                        7.2 m2
                                    </div>
                                    <div class="compare-column">
                                        7.2 m2
                                    </div>
                                    <div class="compare-column">

                                    </div>
                                </div>
                            </div>
                            <!---->
                            <div class="row-compare clearfix">
                                <label class="compare-label">Kích thước</label>
                                <div class="row-sub-compare">
                                    <div class="compare-column">
                                        <ul>
                                            <li>Khung kết cấu thép</li>
                                            <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                            <li>Chông thấm: Tole</li>
                                        </ul>
                                    </div>
                                    <div class="compare-column">
                                        <ul>
                                            <li>Khung kết cấu thép</li>
                                            <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                            <li>Chông thấm: Tole</li>
                                        </ul>
                                    </div>
                                    <div class="compare-column">

                                    </div>
                                </div>
                            </div>
                            <!---->
                            <div class="row-compare clearfix">
                                <label class="compare-label">Độ cao trần</label>
                                <div class="row-sub-compare">
                                    <div class="compare-column">
                                        3.16m
                                    </div>
                                    <div class="compare-column">
                                        3.16m
                                    </div>
                                    <div class="compare-column">

                                    </div>
                                </div>
                            </div>
                            <!---->
                            <div class="row-compare clearfix">
                                <label class="compare-label">Sức chứa</label>
                                <div class="row-sub-compare">
                                    <div class="compare-column">
                                        2 người lớn
                                    </div>
                                    <div class="compare-column">
                                        2 người lớn
                                    </div>
                                    <div class="compare-column">

                                    </div>
                                </div>
                            </div>
                            <!---->
                            <div class="row-compare clearfix">
                                <label class="compare-label">Giao hàng</label>
                                <div class="row-sub-compare">
                                    <div class="compare-column">
                                        Giao hàng có thu phí
                                    </div>
                                    <div class="compare-column">
                                        Giao hàng có thu phí
                                    </div>
                                    <div class="compare-column">

                                    </div>
                                </div>
                            </div>
                            <!---->
                            <div style="padding-top:20px">
                                <a href="#" class="button-link bg-green">Tự thiết kế</a>
                                <a href="#" class="button-link">Tiếp tục khám phá</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif


@stop

@section('script')
    <link href="{{asset('fe_template/css/owl.carousel.min.css')}}" rel="stylesheet" />
    <script type="text/javascript" src="{{asset('fe_template/js/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('fe_template/js/jquery.fancybox.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('fe_template/css/jquery.fancybox.css')}}" media="screen" />
    <script type="text/javascript">
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
            $('.compare-thumb a:last-child').click(function(e){
                e.preventDefault();
                var parent = $(this).parent().parent(), idx = parent.index();
                $('.row-sub-compare').each(function(){
                    $(this).children('.compare-column').eq(idx).remove();
                    var par = $(this).parent();
                    if(par.hasClass('header-row')){
                        $(this).append('<div class="compare-column"><div class="compare-thumb not-product"><span onclick="window.location=\'link-trang-san-pham\'"><strong>Thêm sản phẩm </strong><i class="fa fa-plus-circle"></i></span></div></div>');
                    }else{
                        $(this).append('<div class="compare-column"></div>');
                    }
                });
            });
        });
    </script>
@stop
