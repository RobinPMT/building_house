@extends('layouts.app')
@section('content')
    <section class="section-page">
        <div class="container">
            <h2 class="page-title">Thư viện hình ảnh</h2>
        </div>
        <div class="gallery-slider">
            <div class="owl-carousel">
                @if(isset($slides))
                    @foreach($slides as $key => $slide)
                        <div class="container">
                    <picture>
                        <source media="(min-width: 1500px)" srcset="{{imageUrl(pare_url_file($slide->avatar, 'slides_hot'), 1440, 710, 100, 1)}}"> <!-- 1440x710 -->
                        <source media="(min-width: 992px)" srcset="{{imageUrl(pare_url_file($slide->avatar, 'slides_hot'), 1170, 575, 100, 1)}}"> <!-- 1170x575 -->
                        <source media="(min-width: 571px)" srcset="{{imageUrl(pare_url_file($slide->avatar, 'slides_hot'), 990, 475, 100, 1)}}"> <!-- 990x475 -->
                        <img src="{{imageUrl(pare_url_file($slide->avatar, 'slides_hot'), 470, 270, 100, 1)}}" alt="{{$slide->avatar ?? 'no_image.png'}}" />
{{--                        <source media="(min-width: 1500px)" srcset="{{pare_url_file($slide->avatar, 'slides_hot')}}"> <!-- 1440x710 -->--}}
{{--                        <source media="(min-width: 992px)" srcset="{{pare_url_file($slide->avatar, 'slides_hot')}}"> <!-- 1170x575 -->--}}
{{--                        <source media="(min-width: 571px)" srcset="{{pare_url_file($slide->avatar, 'slides_hot')}}"> <!-- 990x475 -->--}}
{{--                        <img src="{{pare_url_file($slide->avatar, 'slides_hot')}}" alt="470x270" />--}}
                    </picture>
                </div>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="container">
            <div class="row row_sm_8 gallery-list">
                @if(isset($libraries))
                    @foreach($libraries as $key => $library)
                        <div class="col-sm-4 col-vsm-6 gallery-item">
                            <a href="{{route('get.detail.library', [$library->slug])}}" class="gallery-thumb"><img class="lazyload" src="{{asset('fe_template/images/loading.gif')}}" data-src="{{imageUrl(pare_url_file($library->avatar, 'libraries'), 480, 300, 100, 1)}}" alt="{{$library->title}}" /></a>
                            <a href="{{route('get.detail.library', [$library->slug])}}" class="gallery-title">{{$library->title}}</a>
                        </div>
                    @endforeach
                @endif

            </div>
            <!--12 item/page-->
            <div class="wrapper-pagination text-center">
                {{$libraries->links('vendor.pagination.default')}}
            </div>
        </div>
    </section>
@stop

@section('script')
    <link href="{{asset('fe_template/css/owl.carousel.min.css')}}" rel="stylesheet" />
    <script type="text/javascript" src="{{asset('fe_template/js/owl.carousel.min.js')}}"></script>
    <script defer>
        $(document).ready(function(){
            $('.gallery-slider .owl-carousel').owlCarousel({ margin: 0, autoplayTimeout: 3000, items: 1, loop: true, autoplay: true, nav: true, dots: false, responsive:{ 992:{ autoWidth: true, center: true, items: 2, } }, navText: ['<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30"><g id="Left-2" data-name="Left"><polygon points="24 12.001 2.914 12.001 8.208 6.706 7.501 5.999 1 12.501 7.5 19.001 8.207 18.294 2.914 13.001 24 13.001 24 12.001" style="fill:#fff"/></g></svg>','<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30"><g id="Right-2" data-name="Right"><polygon points="17.5 5.999 16.793 6.706 22.086 11.999 1 11.999 1 12.999 22.086 12.999 16.792 18.294 17.499 19.001 24 12.499 17.5 5.999" style="fill:#fff"/></g></svg>'] });
        });
    </script>
@stop
