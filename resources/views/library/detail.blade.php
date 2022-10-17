@extends('layouts.app')
@section('content')
    <section class="section-page">
        <div class="container">
            <h2 class="page-title">Thư viện hình ảnh</h2>
            @if(isset($library))
                <h3 class="page-stitle">{{$library->title}}</h3>
            @endif
        </div>
        <div style="overflow: hidden;">
            <div class="photo-grid-container">
                @if(isset($library->arr_image))
                    @if(is_array(json_decode($library->arr_image)))
                        @foreach(json_decode($library->arr_image) as $item)
                            <div class="photo-grid-item">
                                <a data-fancybox="gallery" href="{{pare_url_file($item, 'libraries')}}"><img src="{{pare_url_file($item, 'libraries')}}" alt="{{$library->title}}" /></a>
                            </div>
                        @endforeach
                    @endif
                @endif

            </div>
        </div>
        <div class="container">
            <h4 class="other-title">Thư viện ảnh khác</h4>
            <div class="row row_sm_8 gallery-list other-list">
                @if(isset($librariesRelated))
                    @foreach($librariesRelated as $key => $librarieRelated)
                        <div class="col-sm-4 col-vsm-6 gallery-item">
                            <a href="{{route('get.detail.library', [$librarieRelated->slug])}}" class="gallery-thumb"><img class="lazyload" src="{{asset('fe_template/images/loading.gif')}}" data-src="{{imageUrl(pare_url_file($library->avatar, 'libraries'), 480, 300, 100, 1)}}" alt="{{$library->avatar ?? 'no_image.png'}}" /></a>
                            <a href="{{route('get.detail.library', [$librarieRelated->slug])}}" class="gallery-title">{{$librarieRelated->title}}</a>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>
    </section>
@stop

@section('script')
    <script src="{{asset('fe_template/js/gallery/foundation.min.js')}}"></script>
    <script src="{{asset('fe_template/js/gallery/pycs-layout.jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('fe_template/js/jquery.fancybox.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('fe_template/css/jquery.fancybox.css')}}" media="screen" />
    <link href="{{asset('fe_template/css/owl.carousel.min.css')}}" rel="stylesheet" />
    <script type="text/javascript" src="{{asset('fe_template/js/owl.carousel.min.js')}}"></script>
    <script defer>
        $(document).ready(function(){
            $('.gallery-slider .owl-carousel').owlCarousel({ margin: 0, autoplayTimeout: 3000, items: 1, loop: true, autoplay: true, nav: true, dots: false, responsive:{ 992:{ autoWidth: true, center: true, items: 2, } }, navText: ['<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30"><g id="Left-2" data-name="Left"><polygon points="24 12.001 2.914 12.001 8.208 6.706 7.501 5.999 1 12.501 7.5 19.001 8.207 18.294 2.914 13.001 24 13.001 24 12.001" style="fill:#fff"/></g></svg>','<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30"><g id="Right-2" data-name="Right"><polygon points="17.5 5.999 16.793 6.706 22.086 11.999 1 11.999 1 12.999 22.086 12.999 16.792 18.294 17.499 19.001 24 12.499 17.5 5.999" style="fill:#fff"/></g></svg>'] });
            if($('.photo-grid-container').length > 0){
                $(document).foundation();
                var images_loaded = 0;
                var total_images = $(".photo-grid-container .photo-grid-item").length;
                var percent_slice = 100 / total_images;
                var current_percent = 0;
                $(".photo-grid-container img").one("load", function() {
                    images_loaded++;
                    current_percent += percent_slice;
                    if(images_loaded == total_images){
                        $(".photo-grid-container").pycsLayout({
                            gutter: 15, idealHeight: 400, pictureContainer:".photo-grid-item",
                        });
                    }
                }).each(function() { if(this.complete){  $(this).load(); }
                });
            }

        });
    </script>
@stop
