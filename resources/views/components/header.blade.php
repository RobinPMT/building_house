<header>
    <div class="header-content">
        <div class="container">
            <a href="{{route('home')}}" class="header-logo"><img src="{{asset('fe_template/images/logo.png')}}" height="50" alt="logo" /></a>
            <div class="header-center-ovelay hidden-desktop"></div>
            <div class="header-center">
                <a href="#" class="mobile-logo hidden-desktop"><img src="{{asset('fe_template/images/logo.png')}}" height="50" alt="logo" /></a>
                <nav class="navbar-menu navbar-collapse clearfix" id="dropmenu">
                    <ul class="navbar-nav clearfix">
                        <li class="{{ \Request::route()->getName() == 'home' ? 'active' : '' }}"><a href="{{route('home')}}">Trang chủ</a></li>
                        <li class="{{ (\Request::route()->getName() == 'get.list.product' || \Request::route()->getName() == 'get.detail.product') ? 'active' : '' }}"><a href="{{route('get.list.product')}}">Sản phẩm</a></li>
                        <li class="dropdown {{
                        (   request()->getUri() == route('get.list.post', ['tin-khuyen-mai']) || request()->getUri() == route('get.list.post', ['tin-tai-chinh']) ||
                            request()->getUri() == route('get.list.post', ['tin-tuc-su-kien']) || check_active_url(request()->getUri(), 'tin-khuyen-mai') ||
                            check_active_url(request()->getUri(), 'tin-tai-chinh') || check_active_url(request()->getUri(), 'tin-tuc-su-kien')
                        ) ? 'active' : '' }}"
                        >
                            <a href="#">Consolar Housing</a>
                            <button class="dropdown-icon" data-toggle="dropdown"><i class="fa fa-caret-down"></i></button>
                            <ul class="dropdown-menu">
                                <li class="{{ (request()->getUri() == route('get.list.post', ['tin-khuyen-mai']) || check_active_url(request()->getUri(), 'tin-khuyen-mai') ) ? 'active' : '' }}"><a href="{{route('get.list.post', ['tin-khuyen-mai'])}}">Tin khuyến mãi</a></li>
                                <li class="{{ (request()->getUri() == route('get.list.post', ['tin-tai-chinh']) || check_active_url(request()->getUri(), 'tin-tai-chinh') ) ? 'active' : '' }}"><a href="{{route('get.list.post', ['tin-tai-chinh'])}}">Tin tài chính</a></li>
                                <li class="{{ (request()->getUri() == route('get.list.post', ['tin-tuc-su-kien']) || check_active_url(request()->getUri(), 'tin-tuc-su-kien') ) ? 'active' : '' }}"><a href="{{route('get.list.post', ['tin-tuc-su-kien'])}}">Tin tức - Sự kiện</a></li>
                            </ul>
                        </li>
                        <li class="{{ \Request::route()->getName() == 'get.list.design' ? 'active' : '' }}"><a href="{{route('get.list.design')}}">Tự thiết kế</a></li>
                        <li class="{{ \Request::route()->getName() == 'get.list.coffee' ? 'active' : '' }}">
                            <a href="{{route('get.list.coffee')}}">Coffee & Food</a>
                        </li>
{{--                        <li><a href="#">Kênh đại lý</a></li>--}}
                        <li class="{{ (\Request::route()->getName() == 'get.list.project' || \Request::route()->getName() == 'get.detail.project') ? 'active' : '' }}">
                            <a href="{{route('get.list.project')}}">Dự án</a>
                        </li>
                        <li class="dropdown {{
                            (   request()->getUri() == route('get.list.post', ['tin-tuc']) || \Request::route()->getName() == 'get.list.library' ||
                                \Request::route()->getName() == 'get.detail.library' || check_active_url(request()->getUri(), 'tin-tuc/')
                            ) ? 'active' : '' }}">
                            <a href="#" >News & Gallery</a>
                            <button class="dropdown-icon" data-toggle="dropdown"><i class="fa fa-caret-down"></i></button>
                            <ul class="dropdown-menu mini-submenu">
                                <li class="{{  (request()->getUri() == route('get.list.post', ['tin-tuc']) || check_active_url(request()->getUri(), 'tin-tuc/')) ? 'active' : '' }}"><a href="{{route('get.list.post', ['tin-tuc'])}}">Tin tức</a></li>

                                <li class="{{ (\Request::route()->getName() == 'get.list.library' || \Request::route()->getName() == 'get.detail.library' ) ? 'active' : '' }}"><a href="{{route('get.list.library')}}">Thư viện ảnh</a></li>
                            </ul>
                        </li>
                        <li class="{{ \Request::route()->getName() == 'get.list.contact' ? 'active' : '' }}"><a href="{{route('get.list.contact')}}">Liên hệ</a></li>
                    </ul>
                </nav>
                <span class="mobile-hotline hidden-desktop clearfix">
                    <a href="tel:{{isset($settings['phone']) ? $settings['phone'] : ''}}"><i class="fa fa-phone"></i> Hotline: {{isset($settings['phone']) ? $settings['phone'] : ''}}</a>
                    <strong><i class="fa fa-times"></i></strong>
                </span>
            </div>
        </div>
        <div class="right-header clearfix">
            <ul class="header-member">


                @if(Auth::check())
                    <li>
                        <span class="clearfix">
                            <img src="{{get_data_user('web','avatar') ? pare_url_file(get_data_user('web','avatar'), 'avatars') : asset('fe_template/images/avatar.jpg')}}" height="50" width="50" alt="user" />
                            <strong>{{ Auth::user()->name}}</strong>
                            <i class="fa fa-caret-down"></i>
                        </span>
                        <ul>
                            <li><a href="{{route('get.change.profile.auth')}}">Quản lý tài khoản</a></li>
                            <li><a href="{{route('get.list.wishlist.product')}}">Danh sách đã lưu</a></li>
                            <li><a href="{{route('get.change.password.auth')}}">Đổi mật khẩu</a></li>
                            <li><a href="{{route('get.logout.user.auth')}}">Đăng xuất</a></li>
                        </ul>
                    </li>
                @else
                    <li>
                    <span class="clearfix">
                        <i class="fa fa-user-o fa-2x" aria-hidden="true" style="margin-top: 10px"></i>
                        <i class="fa fa-caret-down"></i>
                    </span>
                        <ul>
                            <li><a href="{{route('get.register.auth')}}">Đăng kí</a></li>
                            <li><a href="{{route('get.login.auth')}}">Đăng nhập</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
            <button class="hidden-desktop open-menu" type="button">
                <i class="fa fa-bars"></i>
            </button>
            <div class="search-header">
                <span><i class="fa fa-search"></i></span>
                <form action="{{route('get.list.product')}}"  method="get">
                    <div class="search-form">
                        <input type="text" name="keyword" placeholder="Nhập từ khóa" value="" required />
                        <div class="clearfix">
                            <button type="submit"><i class="fa fa-search"></i> Tìm kiếm</button>
                            <button type="button"><i class="fa fa-times"></i> Đóng lại</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</header>
