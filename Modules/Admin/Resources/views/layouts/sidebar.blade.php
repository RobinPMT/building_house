
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="{{env('APP_URL')}}" style="    margin-top: 15px;
    margin-bottom: 20px;
    margin-left: 5px;"><span class="brand-logo">
                            <img src="{{asset('admin_template/logo_admin.png')}}"  height="36" alt="logo" /></span>
                    <h2 class="brand-text" style="font-size: 1rem">{{env('APP_NAME')}}</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>

    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="{{ \Request::route()->getName() == 'admin.home' ? 'active' : '' }} nav-item"><a class="d-flex align-items-center" href="{{route('admin.home')}}"><i data-feather="home"></i>
                    <span class="menu-title text-truncate" data-i18n="Dashboards">Dashboard</span>
{{--                    <span class="badge badge-light-warning badge-pill ml-auto mr-1">2</span>--}}
                </a>
{{--                <ul class="menu-content">--}}
{{--                    <li><a class="d-flex align-items-center" href="dashboard-analytics.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics">Analytics</span></a>--}}
{{--                    </li>--}}
{{--                    <li class="active"><a class="d-flex align-items-center" href="dashboard-ecommerce.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">eCommerce</span></a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
            </li>
            <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Apps &amp; Pages</span><i data-feather="more-horizontal"></i>
            </li>

            <li class="{{ \Request::route()->getName() == 'admin.get.list.category' ? 'active' : '' }} nav-item"><a class="d-flex align-items-center" href="{{route('admin.get.list.category')}}"><i data-feather="calendar"></i><span class="menu-title text-truncate" data-i18n="Category">Danh mục</span></a>
            </li>
            <li class="{{ \Request::route()->getName() == 'admin.get.list.product' ? 'active' : '' }} nav-item"><a class="d-flex align-items-center" href="{{route('admin.get.list.product')}}"><i data-feather="grid"></i><span class="menu-title text-truncate" data-i18n="Product">Sản Phẩm</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="check-square"></i><span class="menu-title text-truncate" data-i18n="File Manager">Tự thiết kế</span></a>
                <ul class="menu-content">
                    <li class="{{ \Request::route()->getName() == 'admin.get.list.room' ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{route('admin.get.list.room')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Slide">Phòng & tiện nghi</span></a>
                    </li>
                    <li class="{{ \Request::route()->getName() == 'admin.get.list.attribute' ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{route('admin.get.list.attribute')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List Library">Thuộc tính phòng</span></a>
                    </li>
                </ul>
            </li>
            <li class="{{ \Request::route()->getName() == 'admin.get.list.project' ? 'active' : '' }} nav-item"><a class="d-flex align-items-center" href="{{route('admin.get.list.project')}}"><i data-feather="box"></i><span class="menu-title text-truncate" data-i18n="Todo">Dự án</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="save"></i><span class="menu-title text-truncate" data-i18n="File Manager">Thư viện ảnh</span></a>
                <ul class="menu-content">
                    <li class="{{ \Request::route()->getName() == 'admin.get.list.slide' ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{route('admin.get.list.slide')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Slide">Slide nổi bật</span></a>
                    </li>
                    <li class="{{ \Request::route()->getName() == 'admin.get.list.library' ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{route('admin.get.list.library')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List Library">Danh sách thư viện</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="{{route('admin.get.list.post')}}"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Post">Bài viết</span></a>
                <ul class="menu-content">
                    <li class="{{ \Request::route()->getName() == 'admin.get.list.tag' ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{route('admin.get.list.tag')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="View">Tags</span></a>
                    </li>
                    <li class="{{ \Request::route()->getName() == 'admin.get.list.post' ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{route('admin.get.list.post')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Quản lý bài viết</span></a>
                    </li>
                </ul>
            </li>
            <li class="{{ \Request::route()->getName() == 'admin.get.list.contact' ? 'active' : '' }} nav-item"><a class="d-flex align-items-center" href="{{route('admin.get.list.contact')}}"><i data-feather="mail"></i><span class="menu-title text-truncate" data-i18n="Contact">Liên hệ</span></a>
            </li>
            <li class="{{ \Request::route()->getName() == 'admin.get.list.transaction' ? 'active' : '' }} nav-item"><a class="d-flex align-items-center" href="{{route('admin.get.list.transaction')}}"><i data-feather="shopping-cart"></i><span class="menu-title text-truncate" data-i18n="Contact">Order</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="User">Người dùng</span></a>
                <ul class="menu-content">
                    <li class="{{ \Request::route()->getName() == 'admin.get.list.admin' ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{route('admin.get.list.admin')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Admin</span></a>
                    </li>
                    <li  class="{{ \Request::route()->getName() == 'admin.get.list.user' ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{route('admin.get.list.user')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="View">Khách hàng</span></a>
                    </li>
                </ul>
            </li>
            <li class="nav-item"><a class="d-flex align-items-center" id="lfm" href=""><i data-feather='file'></i><span class="menu-title text-truncate" data-i18n="Todo">Quản lý File</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href=""><i data-feather="settings"></i><span class="menu-title text-truncate" data-i18n="Settings">Cài đặt</span></a>
                <ul class="menu-content">
                    <li class="{{ \Request::route()->getName() == 'admin.get.list.filter' ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{route('admin.get.list.filter')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Edit">Cài đặt bộ lọc</span></a>
                    </li>
                    <li class="{{ \Request::route()->getName() == 'admin.get.list.banner' ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{route('admin.get.list.banner')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="View">Cài đặt Banner</span></a>
                    </li>
                    <li class="{{ \Request::route()->getName() == 'admin.get.list.setting' ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{route('admin.get.list.setting')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Cài đặt trang chủ</span></a>
                    </li>
                    <li class="{{ \Request::route()->getName() == 'admin.get.list.setting_key_product' ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{route('admin.get.list.setting_key_product')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="View" style="white-space: normal; font-size: 14px;">Các thuộc tính sản phẩm</span></a>
                    </li>
                    <li class="{{ \Request::route()->getName() == 'admin.get.list.housing' ? 'active' : '' }} nav-item"><a class="d-flex align-items-center" href="{{route('admin.get.list.housing')}}"><i data-feather="circle"></i><span class="menu-title text-truncate" data-i18n="Todo">Coffee & Food</span></a>
                    </li>
                </ul>
            </li>
{{--            <li class=" nav-item"><a class="d-flex align-items-center" href=""><i data-feather="check-circle"></i><span class="menu-title text-truncate" data-i18n="Form Validation">Chính sách</span></a>--}}
{{--                <ul class="menu-content">--}}
{{--                    <li class="{{ \Request::route()->getName() == 'admin.get.list.shopping.policy' ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{route('admin.get.list.shopping.policy')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="View">Mua hàng</span></a>--}}
{{--                    </li>--}}
{{--                    <li class="{{ \Request::route()->getName() == 'admin.get.list.security.policy' ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{route('admin.get.list.security.policy')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Bảo mật thông tin</span></a>--}}
{{--                    </li>--}}
{{--                    <li class="{{ \Request::route()->getName() == 'admin.get.list.transport.policy' ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{route('admin.get.list.transport.policy')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Vận chuyển</span></a>--}}
{{--                    </li>--}}
{{--                    <li class="{{ \Request::route()->getName() == 'admin.get.list.insurance.policy' ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{route('admin.get.list.insurance.policy')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Bảo hành</span></a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
            <li class="{{ \Request::route()->getName() == 'admin.get.list.policy' ? 'active' : '' }} nav-item"><a class="d-flex align-items-center" href="{{route('admin.get.list.policy')}}"><i data-feather="check-circle"></i><span class="menu-title text-truncate" data-i18n="Form Validation">Chính sách</span></a>
            </li>
            <li class="{{ \Request::route()->getName() == 'admin.get.list.question' ? 'active' : '' }} nav-item"><a class="d-flex align-items-center" href="{{route('admin.get.list.question')}}"><i data-feather="stop-circle"></i><span class="menu-title text-truncate" data-i18n="Form Validation">Câu hỏi thường gặp</span></a>
            </li>
        </ul>
    </div>
</div>
