
@extends('layouts.app')
@section('content')

    <section class="section-page">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sticky">
                    <span class="top-title">Dự án</span>
                    @if(isset($project))
                        <h1 class="article-title">{{$project->title}}</h1>
                        <div class="wrapper">
                            {!! $project->content !!}
                        </div>
                    @endif
                </div>
                <div class="col-md-6">
                    <div style="overflow: hidden;">
                        <div class="photo-grid-container">
                            @if(isset($project->arr_image))
                                @if(is_array(json_decode($project->arr_image)))
                                    @foreach(json_decode($project->arr_image) as $item)
                                        <div class="photo-grid-item">
                                            <a data-fancybox="gallery" href="{{pare_url_file($item, 'projects')}}"><img src="{{pare_url_file($item, 'projects')}}" alt="{{$project->title}}" /></a>
                                        </div>
                                    @endforeach
                                @endif

                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="other-title">Dự án khác</h4>
            <div class="row row_md_8 row_sm_8 project-list other-list">
                @if(isset($projectRandoms))
                    @foreach($projectRandoms as $key => $projectRandom)
                        <div class="col-md-3 col-sm-4 col-xsm-6 project-item">
                            <a href="{{route('get.detail.project', [$projectRandom->slug])}}" class="project-thumb"><img class="lazyload" src="{{asset('fe_template/images/loading.gif')}}" data-src="{{imageUrl(pare_url_file($projectRandom->avatar, 'projects'), 480, 300, 100, 1)}}" alt="{{$projectRandom->title}}" /></a>
                            <a href="{{route('get.detail.project', [$projectRandom->slug])}}" class="project-title limit-two-line">{{$projectRandom->title}}</a>
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
