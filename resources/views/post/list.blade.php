@extends('layouts.app')
@section('content')
    <section class="section-page">
        <div class="container">
            <h2 class="page-title">
                Danh sách bài viết
            </h2>
            <div class="row row_sm_10 news-list">
                @if(isset($posts))
                    @foreach($posts as $key => $post)
                        <div class="col-sm-4 col-xss-6 news-item">
                            <div class="news-item-ct">
                                <a href="{{route('get.detail.post', [$post->type, $post->slug])}}" class="news-thumb"><img class="lazyload" src="{{asset('fe_template/images/loading.gif')}}" data-src="{{imageUrl(pare_url_file($post->avatar, 'posts'), 480, 330, 100, 1)}}" alt="{{$post->title}}" /></a>
                                <div class="news-short">
                                    <a href="{{route('get.detail.post', [$post->type, $post->slug])}}" class="news-title limit-two-line">{{$post->title}}</a>
                                    <span>{{$post->created_at->format('d/m/Y')}} • {{$post->creator->name ?? ''}}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
            <!--12 item/page-->
            <div class="wrapper-pagination text-center">
                {{$posts->links('vendor.pagination.default')}}
{{--                <ul class="pagination">--}}
{{--                    <li class="page-item"><a class="page-link" href="#/trang-1.html"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>--}}
{{--                    <li class="page-item"><a class="page-link" href="#/trang-1.html">1</a></li>--}}
{{--                    <li class="page-item active"><a href="javascript:;">2</a></li>--}}
{{--                    <li class="page-item"><a class="page-link" href="#/trang-3.html">3</a></li>--}}
{{--                    <li class="page-item"><a class="page-link" href="#/trang-4.html">4</a></li>--}}
{{--                    <li class="page-item"><a class="page-link" href="#/trang-3.html"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>--}}
{{--                </ul>--}}
            </div>
        </div>
    </section>
@stop

@section('script')
@stop
