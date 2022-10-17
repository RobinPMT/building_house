@extends('layouts.app')
@section('content')


    <section class="section-page">
        <div class="container">
            <h1 class="page-title">Dự án tiêu biểu</h1>
            <div class="row row_md_8 row_sm_8 project-list">
                @if(isset($projects))
                    @foreach($projects as $key => $project)
                        <div class="col-md-3 col-sm-4 col-xsm-6 project-item">
                            <a href="{{route('get.detail.project', [$project->slug])}}" class="project-thumb"><img class="lazyload" src="{{asset('fe_template/images/loading.gif')}}" data-src="{{imageUrl(pare_url_file($project->avatar, 'projects'), 480, 300, 100, 1)}}" alt="{{$project->title}}" /></a>
                            <a href="{{route('get.detail.project', [$project->slug])}}" class="project-title limit-two-line">{{$project->title}}</a>
                        </div>
                    @endforeach
                @endif

            </div>
            <!--12 item/page-->
            <div class="wrapper-pagination text-center">
                {{$projects->links('vendor.pagination.default')}}
            </div>
        </div>
    </section>

@stop

@section('script')
    <script src="{{asset('fe_template/js/gallery/foundation.min.js')}}"></script>
    <script src="{{asset('fe_template/js/gallery/pycs-layout.jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('fe_template/js/jquery.fancybox.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('fe_template/css/jquery.fancybox.css')}}" media="screen" />
    <script defer>
        $(document).ready(function(){
            if($('.photo-grid-container').length > 0 && $(window).width() < 992){
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
