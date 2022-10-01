@extends('layouts.app')
@section('content')
    <section class="section-page coffee-section">
        <div class="container">
            <div class="coffee-title text-center">
                @if(isset($setting))
                    {!! $setting->value !!}
                @else
                    <h1>Giải pháp kinh doanh <span>cafe trọn gói chỉ với <strong>180 TRIỆU</strong></span></h1>
                    Chạm tay vào sự nghiệp mơ ước
                @endif

            </div>
        </div>
        <div class="coffee-banner">
            <div class="owl-carousel">
                <picture>
                    <source media="(min-width: 1500px)" srcset="{{ isset($setting->avatar) ? imageUrl(pare_url_file($setting->avatar, 'settings'), 1920, 820, 100, 1) : asset('images/no_image.png')}}"> <!-- 1920x620 -->
                    <source media="(min-width: 992px)" srcset="{{isset($setting->avatar) ? imageUrl(pare_url_file($setting->avatar, 'settings'), 1500, 490, 100, 1) : asset('images/no_image.png')}}"> <!-- 1500x490 -->
                    <img class="owl-lazy" src="{{asset('fe_template/images/loading.gif')}}" data-src="{{isset($setting->avatar) ? imageUrl(pare_url_file($setting->avatar, 'settings'), 990, 450, 100, 1) : asset('images/no_image.png')}}" alt="990x450" />
                </picture>
            </div>
            <div class="container">
                <div class="contact-form clearfix">
                    <h3>Liên hệ với chúng tôi <span>để nhận tư vấn</span></h3>
                    <div class="contact-row clearfix">
                        <div class="contact-column">
                            <input type="text" name="name" required placeholder="Họ tên *" />
                        </div>
                        <div class="contact-column">
                            <input type="text" name="phone" required placeholder="Điện thoại *" />
                        </div>
                        <div class="contact-column">
                            <input type="email" name="email" required placeholder="Email" />
                        </div>
                        <div class="contact-column">
                            <button type="submit">Gửi thông tin</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="opportunity">
            <span>
                <svg width="78" height="414" viewBox="0 0 78 414" fill="none" xmlns="http://www.w3.org/2000/svg"> <circle cx="75" cy="411" r="3" fill="#014C47"/><circle cx="51" cy="411" r="3" fill="#014C47"/><circle cx="27" cy="411" r="3" fill="#014C47"/><circle cx="3" cy="411" r="3" fill="#014C47"/> <circle cx="75" cy="387" r="3" fill="#014C47"/> <circle cx="75" cy="387" r="3" fill="#014C47"/> <circle cx="75" cy="363" r="3" fill="#014C47"/> <circle cx="75" cy="339" r="3" fill="#014C47"/> <circle cx="75" cy="315" r="3" fill="#014C47"/> <circle cx="75" cy="291" r="3" fill="#014C47"/> <circle cx="75" cy="267" r="3" fill="#014C47"/> <circle cx="75" cy="243" r="3" fill="#014C47"/> <circle cx="75" cy="219" r="3" fill="#014C47"/> <circle cx="75" cy="195" r="3" fill="#014C47"/> <circle cx="75" cy="171" r="3" fill="#014C47"/> <circle cx="75" cy="147" r="3" fill="#014C47"/> <circle cx="75" cy="123" r="3" fill="#014C47"/> <circle cx="75" cy="99" r="3" fill="#014C47"/> <circle cx="75" cy="75" r="3" fill="#014C47"/> <circle cx="75" cy="51" r="3" fill="#014C47"/> <circle cx="75" cy="27" r="3" fill="#014C47"/> <circle cx="75" cy="3" r="3" fill="#014C47"/> <circle cx="51" cy="387" r="3" fill="#014C47"/> <circle cx="51" cy="387" r="3" fill="#014C47"/> <circle cx="51" cy="339" r="3" fill="#014C47"/> <circle cx="51" cy="363" r="3" fill="#014C47"/> <circle cx="51" cy="315" r="3" fill="#014C47"/> <circle cx="51" cy="291" r="3" fill="#014C47"/> <circle cx="51" cy="267" r="3" fill="#014C47"/> <circle cx="51" cy="243" r="3" fill="#014C47"/> <circle cx="51" cy="219" r="3" fill="#014C47"/> <circle cx="51" cy="195" r="3" fill="#014C47"/> <circle cx="51" cy="171" r="3" fill="#014C47"/> <circle cx="51" cy="147" r="3" fill="#014C47"/> <circle cx="51" cy="123" r="3" fill="#014C47"/> <circle cx="51" cy="99" r="3" fill="#014C47"/> <circle cx="51" cy="51" r="3" fill="#014C47"/> <circle cx="51" cy="75" r="3" fill="#014C47"/> <circle cx="51" cy="27" r="3" fill="#014C47"/> <circle cx="51" cy="3" r="3" fill="#014C47"/> <circle cx="27" cy="387" r="3" fill="#014C47"/> <circle cx="27" cy="339" r="3" fill="#014C47"/> <circle cx="27" cy="387" r="3" fill="#014C47"/> <circle cx="27" cy="363" r="3" fill="#014C47"/> <circle cx="27" cy="315" r="3" fill="#014C47"/> <circle cx="27" cy="291" r="3" fill="#014C47"/> <circle cx="27" cy="267" r="3" fill="#014C47"/> <circle cx="27" cy="243" r="3" fill="#014C47"/> <circle cx="27" cy="219" r="3" fill="#014C47"/> <circle cx="27" cy="195" r="3" fill="#014C47"/> <circle cx="27" cy="171" r="3" fill="#014C47"/> <circle cx="27" cy="147" r="3" fill="#014C47"/> <circle cx="27" cy="123" r="3" fill="#014C47"/> <circle cx="27" cy="51" r="3" fill="#014C47"/> <circle cx="27" cy="99" r="3" fill="#014C47"/> <circle cx="27" cy="75" r="3" fill="#014C47"/> <circle cx="27" cy="27" r="3" fill="#014C47"/> <circle cx="27" cy="3" r="3" fill="#014C47"/> <circle cx="3" cy="339" r="3" fill="#014C47"/> <circle cx="3" cy="387" r="3" fill="#014C47"/> <circle cx="3" cy="387" r="3" fill="#014C47"/> <circle cx="3" cy="363" r="3" fill="#014C47"/> <circle cx="3" cy="315" r="3" fill="#014C47"/> <circle cx="3" cy="291" r="3" fill="#014C47"/> <circle cx="3" cy="267" r="3" fill="#014C47"/> <circle cx="3" cy="243" r="3" fill="#014C47"/> <circle cx="3" cy="219" r="3" fill="#014C47"/> <circle cx="3" cy="195" r="3" fill="#014C47"/> <circle cx="3" cy="171" r="3" fill="#014C47"/> <circle cx="3" cy="147" r="3" fill="#014C47"/> <circle cx="3" cy="51" r="3" fill="#014C47"/> <circle cx="3" cy="123" r="3" fill="#014C47"/> <circle cx="3" cy="99" r="3" fill="#014C47"/> <circle cx="3" cy="75" r="3" fill="#014C47"/> <circle cx="3" cy="27" r="3" fill="#014C47"/> <circle cx="3" cy="3" r="3" fill="#014C47"/> </svg>
            </span>
                <div class="row">
                    <div class="col-lg-5 col-sm-6">
                        <h2 class="page-title">Cơ hội kinh doanh
                            tiềm năng cùng
                            Consolar Housing</h2>
                        <div class="wrapper">
                            <ul>
                                @if(isset($settingHousing))
                                    {!! $settingHousing->value !!}
                                @else
                                    <li>R&uacute;t ngắn thời gian thi c&ocirc;ng</li>
                                    <li>Tiết kiệm chi ph&iacute; ph&aacute;t sinh</li>
                                    <li>Th&iacute;ch ứng với đa dạng địa h&igrave;nh &amp; kh&ocirc;ng gian</li>
                                    <li>Thiết kế ấn tượng x&acirc;y dựng từ ch&iacute;nh &yacute; tưởng của bạn</li>
                                @endif

                            </ul>
                        </div>
                        <a href="#" class="button-link bg-green">Liên hệ nhận tư vấn</a>
                    </div>
                    <div class="col-lg-7 col-sm-6">
                        <div class="opportunity-thumbnail">
                            <picture class="opportunity-lgthumb">
                                <source media="(min-width: 1500px)" srcset="{{isset($settingHousing->avatar_not_main) ? imageUrl(pare_url_file($settingHousing->avatar_not_main, 'settings'), 660, 440, 100, 1) : asset('images/no_image.png')}}"> <!-- 660x440 -->
                                <source media="(min-width: 992px)" srcset="{{isset($settingHousing->avatar_not_main) ? imageUrl(pare_url_file($settingHousing->avatar_not_main, 'settings'), 570, 380, 100, 1) : asset('images/no_image.png')}}"> <!-- 570x380 -->
                                <source media="(min-width: 571px)" srcset="{{isset($settingHousing->avatar_not_main) ? imageUrl(pare_url_file($settingHousing->avatar_not_main, 'settings'), 610, 410, 100, 1) : asset('images/no_image.png')}}"> <!-- 610x410 -->
                                <img src="{{isset($settingHousing->avatar_not_main) ? imageUrl(pare_url_file($settingHousing->avatar_not_main, 'settings'), 390, 260, 100, 1) : asset('images/no_image.png')}}" alt="390x260" />
                            </picture>
                            <img class="opportunity-smthumb lazyload" src="{{asset('fe_template/images/loading.gif')}}" data-src="{{isset($settingHousing->avatar) ? imageUrl(pare_url_file($settingHousing->avatar, 'settings'), 330, 200, 100, 1) : asset('images/no_image.png')}}" alt="330x200" />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="step-working">
        <div class="container">
            <h2 class="page-title text-center">Quy trình làm việc</h2>
            <div class="step-working-content">
                <div class="row">
                    @if(isset($housings))
                        @foreach($housings as $key => $housing)
                            <div class="col-sm-4 col-xs-6 step-item">
                        <picture>
                            <source media="(min-width: 1500px)" srcset="{{imageUrl(pare_url_file($housing->avatar_main, 'housings'), 450, 300, 100, 1)}}"> <!-- 450x300 -->
                            <source media="(min-width: 992px)" srcset="{{imageUrl(pare_url_file($housing->avatar_main, 'housings'), 370, 250, 100, 1)}}"> <!-- 370x250 -->
                            <img src="{{imageUrl(pare_url_file($housing->avatar, 'housings'), 450, 300, 100, 1)}}" alt="450x300" />
                        </picture>
                        <strong>{{$housing->title}}</strong>
                        <p>{{$housing->content}}</p>
                        <span>
                        <svg width="178" height="34" viewBox="0 0 178 34" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="1.29022" cy="32.2464" r="1.28986" transform="rotate(90 1.29022 32.2464)" fill="#014C47"/><circle cx="1.29022" cy="21.9276" r="1.28986" transform="rotate(90 1.29022 21.9276)" fill="#014C47"/><circle cx="1.29022" cy="11.6087" r="1.28986" transform="rotate(90 1.29022 11.6087)" fill="#014C47"/><circle cx="1.29022" cy="1.28986" r="1.28986" transform="rotate(90 1.29022 1.28986)" fill="#014C47"/><circle cx="11.6086" cy="32.2464" r="1.28986" transform="rotate(90 11.6086 32.2464)" fill="#014C47"/><circle cx="11.6086" cy="32.2464" r="1.28986" transform="rotate(90 11.6086 32.2464)" fill="#014C47"/><circle cx="21.9269" cy="32.2464" r="1.28986" transform="rotate(90 21.9269 32.2464)" fill="#014C47"/><circle cx="32.2473" cy="32.2464" r="1.28986" transform="rotate(90 32.2473 32.2464)" fill="#014C47"/><circle cx="42.5656" cy="32.2464" r="1.28986" transform="rotate(90 42.5656 32.2464)" fill="#014C47"/><circle cx="52.884" cy="32.2464" r="1.28986" transform="rotate(90 52.884 32.2464)" fill="#014C47"/><circle cx="63.2023" cy="32.2464" r="1.28986" transform="rotate(90 63.2023 32.2464)" fill="#014C47"/><circle cx="73.5226" cy="32.2464" r="1.28986" transform="rotate(90 73.5226 32.2464)" fill="#014C47"/><circle cx="83.841" cy="32.2464" r="1.28986" transform="rotate(90 83.841 32.2464)" fill="#014C47"/><circle cx="94.1594" cy="32.2464" r="1.28986" transform="rotate(90 94.1594 32.2464)" fill="#014C47"/><circle cx="104.478" cy="32.2464" r="1.28986" transform="rotate(90 104.478 32.2464)" fill="#014C47"/><circle cx="114.798" cy="32.2464" r="1.28986" transform="rotate(90 114.798 32.2464)" fill="#014C47"/><circle cx="125.116" cy="32.2464" r="1.28986" transform="rotate(90 125.116 32.2464)" fill="#014C47"/><circle cx="135.435" cy="32.2464" r="1.28986" transform="rotate(90 135.435 32.2464)" fill="#014C47"/><circle cx="145.753" cy="32.2464" r="1.28986" transform="rotate(90 145.753 32.2464)" fill="#014C47"/><circle cx="156.073" cy="32.2464" r="1.28986" transform="rotate(90 156.073 32.2464)" fill="#014C47"/><circle cx="166.392" cy="32.2464" r="1.28986" transform="rotate(90 166.392 32.2464)" fill="#014C47"/><circle cx="176.71" cy="32.2464" r="1.28986" transform="rotate(90 176.71 32.2464)" fill="#014C47"/><circle cx="11.6086" cy="21.9276" r="1.28986" transform="rotate(90 11.6086 21.9276)" fill="#014C47"/><circle cx="11.6086" cy="21.9276" r="1.28986" transform="rotate(90 11.6086 21.9276)" fill="#014C47"/><circle cx="32.2473" cy="21.9276" r="1.28986" transform="rotate(90 32.2473 21.9276)" fill="#014C47"/><circle cx="21.9269" cy="21.9276" r="1.28986" transform="rotate(90 21.9269 21.9276)" fill="#014C47"/><circle cx="42.5656" cy="21.9276" r="1.28986" transform="rotate(90 42.5656 21.9276)" fill="#014C47"/><circle cx="52.884" cy="21.9276" r="1.28986" transform="rotate(90 52.884 21.9276)" fill="#014C47"/><circle cx="63.2023" cy="21.9276" r="1.28986" transform="rotate(90 63.2023 21.9276)" fill="#014C47"/><circle cx="73.5226" cy="21.9276" r="1.28986" transform="rotate(90 73.5226 21.9276)" fill="#014C47"/><circle cx="83.841" cy="21.9276" r="1.28986" transform="rotate(90 83.841 21.9276)" fill="#014C47"/><circle cx="94.1594" cy="21.9276" r="1.28986" transform="rotate(90 94.1594 21.9276)" fill="#014C47"/><circle cx="104.478" cy="21.9276" r="1.28986" transform="rotate(90 104.478 21.9276)" fill="#014C47"/><circle cx="114.798" cy="21.9276" r="1.28986" transform="rotate(90 114.798 21.9276)" fill="#014C47"/><circle cx="125.116" cy="21.9276" r="1.28986" transform="rotate(90 125.116 21.9276)" fill="#014C47"/><circle cx="135.435" cy="21.9276" r="1.28986" transform="rotate(90 135.435 21.9276)" fill="#014C47"/><circle cx="156.073" cy="21.9276" r="1.28986" transform="rotate(90 156.073 21.9276)" fill="#014C47"/><circle cx="145.753" cy="21.9276" r="1.28986" transform="rotate(90 145.753 21.9276)" fill="#014C47"/><circle cx="166.392" cy="21.9276" r="1.28986" transform="rotate(90 166.392 21.9276)" fill="#014C47"/><circle cx="176.71" cy="21.9276" r="1.28986" transform="rotate(90 176.71 21.9276)" fill="#014C47"/><circle cx="11.6086" cy="11.6087" r="1.28986" transform="rotate(90 11.6086 11.6087)" fill="#014C47"/><circle cx="32.2473" cy="11.6087" r="1.28986" transform="rotate(90 32.2473 11.6087)" fill="#014C47"/><circle cx="11.6086" cy="11.6087" r="1.28986" transform="rotate(90 11.6086 11.6087)" fill="#014C47"/><circle cx="21.9269" cy="11.6087" r="1.28986" transform="rotate(90 21.9269 11.6087)" fill="#014C47"/><circle cx="42.5656" cy="11.6087" r="1.28986" transform="rotate(90 42.5656 11.6087)" fill="#014C47"/><circle cx="52.884" cy="11.6087" r="1.28986" transform="rotate(90 52.884 11.6087)" fill="#014C47"/><circle cx="63.2023" cy="11.6087" r="1.28986" transform="rotate(90 63.2023 11.6087)" fill="#014C47"/><circle cx="73.5226" cy="11.6087" r="1.28986" transform="rotate(90 73.5226 11.6087)" fill="#014C47"/><circle cx="83.841" cy="11.6087" r="1.28986" transform="rotate(90 83.841 11.6087)" fill="#014C47"/><circle cx="94.1594" cy="11.6087" r="1.28986" transform="rotate(90 94.1594 11.6087)" fill="#014C47"/><circle cx="104.478" cy="11.6087" r="1.28986" transform="rotate(90 104.478 11.6087)" fill="#014C47"/><circle cx="114.798" cy="11.6087" r="1.28986" transform="rotate(90 114.798 11.6087)" fill="#014C47"/><circle cx="125.116" cy="11.6087" r="1.28986" transform="rotate(90 125.116 11.6087)" fill="#014C47"/><circle cx="156.073" cy="11.6087" r="1.28986" transform="rotate(90 156.073 11.6087)" fill="#014C47"/><circle cx="135.435" cy="11.6087" r="1.28986" transform="rotate(90 135.435 11.6087)" fill="#014C47"/><circle cx="145.753" cy="11.6087" r="1.28986" transform="rotate(90 145.753 11.6087)" fill="#014C47"/><circle cx="166.392" cy="11.6087" r="1.28986" transform="rotate(90 166.392 11.6087)" fill="#014C47"/><circle cx="176.71" cy="11.6087" r="1.28986" transform="rotate(90 176.71 11.6087)" fill="#014C47"/><circle cx="32.2473" cy="1.28986" r="1.28986" transform="rotate(90 32.2473 1.28986)" fill="#014C47"/><circle cx="11.6086" cy="1.28986" r="1.28986" transform="rotate(90 11.6086 1.28986)" fill="#014C47"/><circle cx="11.6086" cy="1.28986" r="1.28986" transform="rotate(90 11.6086 1.28986)" fill="#014C47"/><circle cx="21.9269" cy="1.28986" r="1.28986" transform="rotate(90 21.9269 1.28986)" fill="#014C47"/><circle cx="42.5656" cy="1.28986" r="1.28986" transform="rotate(90 42.5656 1.28986)" fill="#014C47"/><circle cx="52.884" cy="1.28986" r="1.28986" transform="rotate(90 52.884 1.28986)" fill="#014C47"/><circle cx="63.2023" cy="1.28986" r="1.28986" transform="rotate(90 63.2023 1.28986)" fill="#014C47"/><circle cx="73.5226" cy="1.28986" r="1.28986" transform="rotate(90 73.5226 1.28986)" fill="#014C47"/><circle cx="83.841" cy="1.28986" r="1.28986" transform="rotate(90 83.841 1.28986)" fill="#014C47"/><circle cx="94.1594" cy="1.28986" r="1.28986" transform="rotate(90 94.1594 1.28986)" fill="#014C47"/><circle cx="104.478" cy="1.28986" r="1.28986" transform="rotate(90 104.478 1.28986)" fill="#014C47"/><circle cx="114.798" cy="1.28986" r="1.28986" transform="rotate(90 114.798 1.28986)" fill="#014C47"/><circle cx="156.073" cy="1.28986" r="1.28986" transform="rotate(90 156.073 1.28986)" fill="#014C47"/><circle cx="125.116" cy="1.28986" r="1.28986" transform="rotate(90 125.116 1.28986)" fill="#014C47"/><circle cx="135.435" cy="1.28986" r="1.28986" transform="rotate(90 135.435 1.28986)" fill="#014C47"/><circle cx="145.753" cy="1.28986" r="1.28986" transform="rotate(90 145.753 1.28986)" fill="#014C47"/><circle cx="166.392" cy="1.28986" r="1.28986" transform="rotate(90 166.392 1.28986)" fill="#014C47"/><circle cx="176.71" cy="1.28986" r="1.28986" transform="rotate(90 176.71 1.28986)" fill="#014C47"/></svg>
                    </span>
                    </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>
    <section class="section-page project-section">
        <div class="container">
            <h3 class="page-title">Các sản phẩm ấn tượng <span>của chúng tôi</span></h3>
            <div class="row row_8 project-list">
                @if(isset($projects))
                    @foreach($projects as $key => $project)
                        <div class="project-item">
                            <a href="{{route('get.detail.project', [$project->slug])}}" style="background-image: url({{pare_url_file($project->avatar, 'projects')}});"><!--750x390-->
                                <strong>
                                    {{$project->title}}
                                    <em>Xem chi tiết <svg width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13 5L13.7071 4.29289L14.4142 5L13.7071 5.70711L13 5ZM1 6C0.447715 6 0 5.55228 0 5C0 4.44772 0.447715 4 1 4V6ZM9.70711 0.292893L13.7071 4.29289L12.2929 5.70711L8.29289 1.70711L9.70711 0.292893ZM13.7071 5.70711L9.70711 9.70711L8.29289 8.29289L12.2929 4.29289L13.7071 5.70711ZM13 6H1V4H13V6Z" fill="#161E31"/></svg></em>
                                </strong>
                            </a>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    <section class="contact-section">
        <div class="container">
            <h2 class="contact-title">Để lại thông tin</h2>
            <p class="contact-desc">Chúng tôi sẽ liên hệ với bạn</p>
            <a href="#" class="button-link bg-white">Liên hệ với Consolar</a>
        </div>
    </section>
@stop

@section('script')
    <link href="{{asset('fe_template/css/owl.carousel.min.css')}}" rel="stylesheet" />
    <script type="text/javascript" src="{{asset('fe_template/js/owl.carousel.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.coffee-banner .owl-carousel').owlCarousel({ items: 1, loop: true, lazyLoad: true, autoplay: true, autoplayTimeout: 5000, nav: false, dots: false, mouseDrag:true, touchDrag: true, });
            let h = 230;
            if($(window).width() >= 1200) h = 315;
            else if($(window).width() >= 992) h = 290;
            else if($(window).width() >= 768) h = 240;
            $('.project-item').each(function(index){
                if(index == 2 || index == 4){
                    $(this).height(h);
                }else if(index == 0 || index == 1){
                    $(this).height(h - 70);
                }else{
                    $(this).css({ 'height' : h + 70, 'margin-top': '-70px' });
                }
            });
        });
    </script>
@stop
