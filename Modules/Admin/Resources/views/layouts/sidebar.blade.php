
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="{{asset('admin_template/html/ltr/vertical-menu-template-bordered/index.html')}}"><span class="brand-logo">
                            <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                                <defs>
                                    <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                                        <stop stop-color="#000000" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                    <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                                        <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                        <g id="Group" transform="translate(400.000000, 178.000000)">
                                            <path class="text-primary" id="Path" d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z" style="fill:currentColor"></path>
                                            <path id="Path1" d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z" fill="url(#linearGradient-1)" opacity="0.2"></path>
                                            <polygon id="Path-2" fill="#000000" opacity="0.049999997" points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                                            <polygon id="Path-21" fill="#000000" opacity="0.099999994" points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                                            <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994" points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                                        </g>
                                    </g>
                                </g>
                            </svg></span>
                    <h2 class="brand-text">Vuexy</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>

    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="{{ \Request::route()->getName() == 'admin.home' ? 'active' : '' }} nav-item"><a class="d-flex align-items-center" href="{{route('admin.home')}}"><i data-feather="home"></i>
                    <span class="menu-title text-truncate" data-i18n="Dashboards">Dashboards</span>
{{--                    <span class="badge badge-light-warning badge-pill ml-auto mr-1">2</span></a>--}}
{{--                <ul class="menu-content">--}}
{{--                    <li><a class="d-flex align-items-center" href="dashboard-analytics.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics">Analytics</span></a>--}}
{{--                    </li>--}}
{{--                    <li class="active"><a class="d-flex align-items-center" href="dashboard-ecommerce.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">eCommerce</span></a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
            </li>
            <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Apps &amp; Pages</span><i data-feather="more-horizontal"></i>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="app-email.html"><i data-feather="mail"></i><span class="menu-title text-truncate" data-i18n="Email">Email</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="app-chat.html"><i data-feather="message-square"></i><span class="menu-title text-truncate" data-i18n="Chat">Chat</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Invoice">Invoice</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="app-invoice-list.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">List</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="app-invoice-preview.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Preview">Preview</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="app-invoice-edit.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Edit">Edit</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="app-invoice-add.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Add">Add</span></a>
                    </li>
                </ul>
            </li>

            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="shopping-cart"></i><span class="menu-title text-truncate" data-i18n="eCommerce">eCommerce</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="app-ecommerce-shop.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Shop">Shop</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="app-ecommerce-details.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Details">Details</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="app-ecommerce-wishlist.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Wish List">Wish List</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="app-ecommerce-checkout.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Checkout">Checkout</span></a>
                    </li>
                </ul>
            </li>
            <li class="{{ \Request::route()->getName() == 'admin.get.list.category' ? 'active' : '' }} nav-item"><a class="d-flex align-items-center" href="{{route('admin.get.list.category')}}"><i data-feather="calendar"></i><span class="menu-title text-truncate" data-i18n="Category">Danh mục</span></a>
            </li>
            <li class="{{ \Request::route()->getName() == 'admin.get.list.product' ? 'active' : '' }} nav-item"><a class="d-flex align-items-center" href="{{route('admin.get.list.product')}}"><i data-feather="grid"></i><span class="menu-title text-truncate" data-i18n="Product">Sản Phẩm</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="check-square"></i><span class="menu-title text-truncate" data-i18n="File Manager">Quản lý thuộc tính</span></a>
                <ul class="menu-content">
                    <li class="{{ \Request::route()->getName() == 'admin.get.list.room' ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{route('admin.get.list.room')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Slide">Phòng & tiện nghi</span></a>
                    </li>
                    <li class="{{ \Request::route()->getName() == 'admin.get.list.attribute' ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{route('admin.get.list.attribute')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List Library">Thuộc tính phòng</span></a>
                    </li>
                </ul>
            </li>
{{--            <li class="{{ \Request::route()->getName() == 'admin.get.list.housing' ? 'active' : '' }} nav-item"><a class="d-flex align-items-center" href="{{route('admin.get.list.housing')}}"><i data-feather="briefcase"></i><span class="menu-title text-truncate" data-i18n="Todo">Consolar Housing</span></a>--}}
{{--            </li>--}}
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
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="User">Người dùng</span></a>
                <ul class="menu-content">
                    <li class="{{ \Request::route()->getName() == 'admin.get.list.admin' ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{route('admin.get.list.admin')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Admin</span></a>
                    </li>
                    <li  class="{{ \Request::route()->getName() == 'admin.get.list.user' ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{route('admin.get.list.user')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="View">Khách hàng</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href=""><i data-feather="settings"></i><span class="menu-title text-truncate" data-i18n="Settings">Cài đặt</span></a>
                <ul class="menu-content">
{{--                    <li><a class="d-flex align-items-center" href="app-user-edit.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Edit">Cài đặt hệ thống</span></a>--}}
{{--                    </li>--}}
                    <li class="{{ \Request::route()->getName() == 'admin.get.list.banner' ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{route('admin.get.list.banner')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="View">Cài đặt Banner</span></a>
                    </li>
                    <li class="{{ \Request::route()->getName() == 'admin.get.list.setting' ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{route('admin.get.list.setting')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Cài đặt trang chủ</span></a>
                    </li>
                    <li class="{{ \Request::route()->getName() == 'admin.get.list.setting_key_product' ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{route('admin.get.list.setting_key_product')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="View">Cài đặt sản phẩm</span></a>
                    </li>
                    <li class="{{ \Request::route()->getName() == 'admin.get.list.housing' ? 'active' : '' }} nav-item"><a class="d-flex align-items-center" href="{{route('admin.get.list.housing')}}"><i data-feather="circle"></i><span class="menu-title text-truncate" data-i18n="Todo">Coffee & Food</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href=""><i data-feather="check-circle"></i><span class="menu-title text-truncate" data-i18n="Form Validation">Chính sách</span></a>
                <ul class="menu-content">
                    <li class="{{ \Request::route()->getName() == 'admin.get.list.shopping.policy' ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{route('admin.get.list.shopping.policy')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="View">Mua hàng</span></a>
                    </li>
                    <li class="{{ \Request::route()->getName() == 'admin.get.list.security.policy' ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{route('admin.get.list.security.policy')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Bảo mật thông tin</span></a>
                    </li>
                    <li class="{{ \Request::route()->getName() == 'admin.get.list.transport.policy' ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{route('admin.get.list.transport.policy')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Vận chuyển</span></a>
                    </li>
                    <li class="{{ \Request::route()->getName() == 'admin.get.list.insurance.policy' ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{route('admin.get.list.insurance.policy')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Bảo hành</span></a>
                    </li>
                </ul>
            </li>
            <li class="{{ \Request::route()->getName() == 'admin.get.list.question' ? 'active' : '' }} nav-item"><a class="d-flex align-items-center" href="{{route('admin.get.list.question')}}"><i data-feather="stop-circle"></i><span class="menu-title text-truncate" data-i18n="Form Validation">Câu hỏi thường gặp</span></a>
            </li>
        </ul>
    </div>
</div>
