<header>
    <div class="header-content">
        <div class="container">
            <a href="index.html" class="header-logo"><img src="{{asset('fe_template/images/logo.png')}}" height="50" alt="logo" /></a>
            <div class="header-center-ovelay hidden-desktop"></div>
            <div class="header-center">
                <a href="#" class="mobile-logo hidden-desktop"><img src="{{asset('fe_template/images/logo.png')}}" height="50" alt="logo" /></a>
                <nav class="navbar-menu navbar-collapse clearfix" id="dropmenu">
                    <ul class="navbar-nav clearfix">
                        <li class="{{ \Request::route()->getName() == 'home' ? 'active' : '' }}"><a href="{{route('home')}}">Trang chủ</a></li>
                        <li class="dropdown">
                            <a href="#">Consolar Housing</a>
                            <button class="dropdown-icon" data-toggle="dropdown"><i class="fa fa-caret-down"></i></button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Tin khuyến mãi</a></li>
                                <li><a href="#">Tin tài chính</a></li>
                                <li><a href="#">Tin tức - Sự kiện</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Consolar Decor</a></li>
                        <li><a href="#">Consolar Coffee & Food</a></li>
                        <li><a href="#">Kênh đại lý</a></li>
                        <li class="dropdown {{ \Request::route()->getName() == 'get.list.post' ? 'active' : '' }}">
                            <a href="#" >News & Gallery</a>
                            <button class="dropdown-icon" data-toggle="dropdown"><i class="fa fa-caret-down"></i></button>
                            <ul class="dropdown-menu mini-submenu">
                                <li class="{{ \Request::route()->getName() == 'get.list.post' ? 'active' : '' }}"><a href="{{route('get.list.post')}}">Tin tức</a></li>
                                <li><a href="#">Thư viện ảnh</a></li>
                            </ul>
                        </li>
                        <!--<li><a href="#">Liên hệ</a></li>-->
                    </ul>
                </nav>
                <span class="mobile-hotline hidden-desktop clearfix">
                    <a href="tel:086.7107.086"><i class="fa fa-phone"></i> Hotline: 086.7107.086</a>
                    <strong><i class="fa fa-times"></i></strong>
                </span>
            </div>
        </div>
        <div class="right-header clearfix">
            <ul class="header-member">
                <li>
                    <span class="clearfix">
                        <img src="{{asset('fe_template/images/avatar.jpg')}}" height="50" alt="user" />
                        <strong>Vũ Ngọc Tú</strong>
                        <i class="fa fa-caret-down"></i>
                    </span>
                    <ul>
                        <li><a href="#">Quản lý tài khoản</a></li>
                        <li><a href="#">Danh sách đã lưu</a></li>
                        <li><a href="#">Đổi mật khẩu</a></li>
                        <li><a href="#">Đăng xuất</a></li>
                    </ul>
                </li>
            </ul>
            <button class="hidden-desktop open-menu" type="button">
                <i class="fa fa-bars"></i>
            </button>
            <div class="search-header">
                <span><i class="fa fa-search"></i></span>
                <div class="search-form">
                    <input type="text" name="keyword" placeholder="Nhập từ khóa" value="" required />
                    <div class="clearfix">
                        <button type="submit"><i class="fa fa-search"></i> Tìm kiếm</button>
                        <button type="button"><i class="fa fa-times"></i> Đóng lại</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
