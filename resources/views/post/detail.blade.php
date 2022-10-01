
@extends('layouts.app')
@section('content')

<section class="section-page">
    <div class="container">

        <article class="article-content">
            <span class="top-title">Tin tức</span>
            @if(isset($post))
                <h1 class="article-title">{{$post->title}}</h1>
                <div class="article-thumb">
                    <picture>
                        <source media="(min-width: 1500px)" srcset="{{imageUrl(pare_url_file($post->avatar, 'posts'), 1350, 530, 100, 1)}}"> <!-- 1350x530 -->
                        <source media="(min-width: 992px)" srcset="{{imageUrl(pare_url_file($post->avatar, 'posts'), 1140, 445, 100, 1)}}"> <!-- 1140x445 -->
                        <source media="(min-width: 768px)" srcset="{{imageUrl(pare_url_file($post->avatar, 'posts'), 990, 380, 100, 1)}}"> <!-- 990x380 -->
                        <source media="(min-width: 571px)" srcset="{{imageUrl(pare_url_file($post->avatar, 'posts'), 740, 300, 100, 1)}}"> <!-- 740x300 -->
                        <img src="{{imageUrl(pare_url_file($post->avatar, 'posts'), 540, 220, 100, 0)}}" alt="540x220" />
                    </picture>
                </div>
            @endif

            <div class="row">

                @if(isset($post))
                    <div class="col-lg-9 col-md-8">
                        <div class="wrapper get-anchor">
                            {!! $post->content !!}
                        </div>
                        <div class="article-sharing">
                            <span>Chia sẻ bài viết</span>
                            <a class="share" href="https://www.facebook.com/sharer/sharer.php?u={{route('get.detail.post', [$post->type, $post->slug])}}" target="_blank" rel="nofollow" title="Facebook">
                                <svg width="36" height="36" viewBox="0 0 47 47" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M46.75 24C46.75 29.75 44.875 34.8125 41.125 39.1875C37.375 43.5 32.7188 46.0938 27.1562 46.9688V30.75H32.5938L33.625 24H27.1562V19.5938C27.1562 17.2188 28.4062 16.0312 30.9062 16.0312H33.8125V10.3125C32.0625 10 30.3438 9.84375 28.6562 9.84375C26.8438 9.84375 25.2812 10.1875 23.9688 10.875C22.7188 11.5625 21.7188 12.5938 20.9688 13.9688C20.2188 15.3438 19.8438 16.9688 19.8438 18.8438V24H13.9375V30.75H19.8438V46.9688C14.2812 46.0938 9.625 43.5 5.875 39.1875C2.125 34.8125 0.25 29.75 0.25 24C0.25 17.5625 2.5 12.0938 7 7.59375C11.5625 3.03125 17.0625 0.75 23.5 0.75C29.9375 0.75 35.4062 3.03125 39.9062 7.59375C44.4688 12.0938 46.75 17.5625 46.75 24Z" fill="#0066CC"/></svg>
                            </a>
                            <a class="share" href="https://plus.google.com/share?url={{route('get.detail.post', [$post->type, $post->slug])}}" target="_blank" rel="nofollow" title="Google +">
                                <svg width="36" height="36" viewBox="0 0 47 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7 7.59375C11.5625 3.03125 17.0625 0.75 23.5 0.75C29.9375 0.75 35.4062 3.03125 39.9062 7.59375C44.4688 12.0938 46.75 17.5625 46.75 24C46.75 30.4375 44.4688 35.9375 39.9062 40.5C35.4062 45 29.9375 47.25 23.5 47.25C17.0625 47.25 11.5625 45 7 40.5C2.5 35.9375 0.25 30.4375 0.25 24C0.25 17.5625 2.5 12.0938 7 7.59375ZM16.8438 35.625C19.0312 35.625 20.9688 35.1562 22.6562 34.2188C24.4062 33.2188 25.7188 31.875 26.5938 30.1875C27.5312 28.4375 28 26.4688 28 24.2812C28 23.5938 27.9375 22.9375 27.8125 22.3125H16.8438V26.3438H23.4062C23.2188 27.8438 22.4688 29.0625 21.1562 30C19.9062 30.875 18.4688 31.3125 16.8438 31.3125C15.8438 31.3125 14.9062 31.125 14.0312 30.75C13.1562 30.3125 12.375 29.7812 11.6875 29.1562C11.0625 28.4688 10.5625 27.6875 10.1875 26.8125C9.8125 25.9375 9.625 25 9.625 24C9.625 22 10.3125 20.2812 11.6875 18.8438C13.125 17.4062 14.8438 16.6875 16.8438 16.6875C18.7188 16.6875 20.2812 17.2812 21.5312 18.4688L24.625 15.375C22.5 13.375 19.9062 12.375 16.8438 12.375C13.6562 12.375 10.9062 13.5312 8.59375 15.8438C6.34375 18.0938 5.21875 20.8125 5.21875 24C5.21875 27.1875 6.34375 29.9375 8.59375 32.25C10.9062 34.5 13.6562 35.625 16.8438 35.625ZM38.5 25.6875H41.7812V22.3125H38.5V19.0312H35.125V22.3125H31.75V25.6875H35.125V28.9688H38.5V25.6875Z" fill="#0066CC"/></svg>
                            </a>
                            <a class="share" href="http://www.linkedin.com/shareArticle?mini=true&amp;url={{route('get.detail.post', [$post->type, $post->slug])}}" target="_blank" rel="nofollow" title="LinkedIn">
                                <svg width="36" height="36" viewBox="0 0 43 42" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M39.5 0C40.3125 0 41 0.3125 41.5625 0.9375C42.1875 1.5 42.5 2.1875 42.5 3V39C42.5 39.8125 42.1875 40.5 41.5625 41.0625C41 41.6875 40.3125 42 39.5 42H3.5C2.6875 42 1.96875 41.6875 1.34375 41.0625C0.78125 40.5 0.5 39.8125 0.5 39V3C0.5 2.1875 0.78125 1.5 1.34375 0.9375C1.96875 0.3125 2.6875 0 3.5 0H39.5ZM13.1562 36H13.25V15.9375H6.96875V36H13.1562ZM7.53125 12.1875C8.21875 12.875 9.0625 13.2188 10.0625 13.2188C11.0625 13.2188 11.9062 12.875 12.5938 12.1875C13.3438 11.4375 13.7188 10.5938 13.7188 9.65625C13.7188 8.65625 13.3438 7.8125 12.5938 7.125C11.9062 6.375 11.0625 6 10.0625 6C9.0625 6 8.21875 6.375 7.53125 7.125C6.84375 7.8125 6.5 8.65625 6.5 9.65625C6.5 10.5938 6.84375 11.4375 7.53125 12.1875ZM36.5 36V25.0312C36.5 23.5312 36.4062 22.25 36.2188 21.1875C36.0312 20.125 35.6875 19.1562 35.1875 18.2812C34.6875 17.3438 33.9062 16.6562 32.8438 16.2188C31.8438 15.7188 30.5938 15.4688 29.0938 15.4688C27.6562 15.4688 26.4062 15.7812 25.3438 16.4062C24.3438 17.0312 23.625 17.7812 23.1875 18.6562H23.0938V15.9375H17.0938V36H23.375V26.0625C23.375 24.5 23.625 23.25 24.125 22.3125C24.625 21.375 25.5938 20.9062 27.0312 20.9062C27.7812 20.9062 28.4062 21.0625 28.9062 21.375C29.4062 21.6875 29.7188 22.1562 29.8438 22.7812C30.0312 23.4062 30.1562 23.9688 30.2188 24.4688C30.2812 24.9062 30.3125 25.5 30.3125 26.25V36H36.5Z" fill="#0066CC"/></svg>
                            </a>
                        </div>
                    </div>
                @endif

                <div class="col-lg-3 col-md-4 sidebar-news">
                    <h3 class="sidebar-title">Bài viết liên quan</h3>
                    <div class="row row_sm_6 news-list">
                        @if(isset($postsRelated))
                            @foreach($postsRelated as $key => $postRelated)
                                <div class="col-md-12 col-sm-4 col-xss-6 news-item">
                                    <div class="news-item-ct">
                                        <a href="{{route('get.detail.post', [$postRelated->type, $postRelated->slug])}}" class="news-thumb"><img class="lazyload" src="{{asset('fe_template/images/loading.gif')}}" data-src="{{imageUrl(pare_url_file($postRelated->avatar, 'posts'), 480, 330, 100, 1)}}" alt="480x330" /></a>
                                        <div class="news-short">
                                            <a href="{{route('get.detail.post', [$postRelated->type, $postRelated->slug])}}" class="news-title limit-two-line">{{$postRelated->title}}</a>
                                            <span>{{$postRelated->created_at->format('d/m/Y')}} • {{$postRelated->creator->name ?? ''}}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </article>


    </div>
</section>

@stop

@section('script')
@stop
