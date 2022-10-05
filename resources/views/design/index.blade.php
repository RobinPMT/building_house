@extends('layouts.app')
@section('content')
    <section class="design-banner-group">
        <div class="design-banner">
            <div class="larger-picture">
                <img class="main-picture" src="{{asset('fe_template/images/design/main.jpg')}}" data-srcs="{{asset('fe_template/images/design/main.jpg')}}" alt="1170x550" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-push-8">
                        <div class="design-short-inf">
                            <h2>Thiết kế nội thất & tiện nghi theo ý thích của bạn </h2>
                            <div class="design-short-inf-button clearfix">
                                <a href="#" data-toggle="modal" data-target="#contact-wrapper">
                                    Liên hệ tư vấn
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.16406 4.66675H6.85743C7.48037 4.66675 7.79184 4.66675 8.03319 4.81559C8.09585 4.85423 8.15404 4.89967 8.20673 4.95108C8.40966 5.14912 8.4852 5.4513 8.63628 6.05564L8.82545 6.81228C8.94578 7.2936 9.00594 7.53426 9.10597 7.73291C9.37505 8.26727 9.86922 8.65311 10.4529 8.78455C10.6699 8.83341 10.9179 8.83341 11.4141 8.83341V8.83341" stroke="#014C47" stroke-width="2" stroke-linecap="round"/><path d="M19.748 18.2083H8.86357C8.65954 18.2083 8.55753 18.2083 8.48053 18.1962C7.93082 18.11 7.55721 17.5916 7.64925 17.0428C7.66214 16.966 7.6944 16.8692 7.75892 16.6756V16.6756C7.83055 16.4607 7.86636 16.3533 7.90868 16.2597C8.20189 15.6108 8.81796 15.1668 9.52624 15.0938C9.62847 15.0833 9.74172 15.0833 9.96823 15.0833H15.5814" stroke="#014C47" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M16.2336 15.0833H12.4289C11.0933 15.0833 10.4255 15.0833 9.92492 14.7535C9.79066 14.6651 9.66756 14.5608 9.55827 14.4429C9.15074 14.0033 9.04096 13.3446 8.82139 12.0272C8.59876 10.6914 8.48745 10.0236 8.7842 9.54398C8.86259 9.41728 8.95943 9.30297 9.07152 9.20481C9.49579 8.83325 10.1729 8.83325 11.5271 8.83325H18.5947C20.045 8.83325 20.7702 8.83325 21.0633 9.30752C21.3565 9.78179 21.0321 10.4304 20.3835 11.7277L19.8113 12.8721C19.2734 13.9479 19.0044 14.4859 18.5211 14.7846C18.0378 15.0833 17.4364 15.0833 16.2336 15.0833Z" stroke="#014C47" stroke-width="2" stroke-linecap="round"/><circle cx="18.7057" cy="21.3334" r="1.04167" fill="#014C47"/><circle cx="10.3737" cy="21.3334" r="1.04167" fill="#014C47"/></svg>
                                </a>
                                <a href="#">
                                    Lưu
                                    <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.1139 8.32009C15.2089 8.43409 15.3497 8.5 15.498 8.5H17.798C18.3664 8.5 18.7625 8.50039 19.0709 8.52559C19.3735 8.55031 19.5474 8.5964 19.679 8.66349C19.9613 8.8073 20.1907 9.03677 20.3346 9.31901C20.4016 9.45069 20.4477 9.62454 20.4725 9.92712C20.4977 10.2355 20.498 10.6317 20.498 11.2V13.8C20.498 14.3683 20.4977 14.7645 20.4725 15.0729C20.4477 15.3755 20.4016 15.5493 20.3346 15.681C20.1907 15.9632 19.9613 16.1927 19.679 16.3365C19.5474 16.4036 19.3735 16.4497 19.0709 16.4744C18.7625 16.4996 18.3664 16.5 17.798 16.5H10.198C9.62974 16.5 9.23359 16.4996 8.92517 16.4744C8.62258 16.4497 8.44874 16.4036 8.31706 16.3365C8.03482 16.1927 7.80535 15.9632 7.66154 15.681C7.59444 15.5493 7.54836 15.3755 7.52363 15.0729C7.49844 14.7645 7.49805 14.3683 7.49805 13.8V8.2C7.49805 7.6317 7.49844 7.23554 7.52363 6.92712C7.54836 6.62454 7.59444 6.45069 7.66154 6.31901C7.80535 6.03677 8.03482 5.8073 8.31706 5.66349C8.44874 5.5964 8.62258 5.55031 8.92517 5.52559C9.23359 5.50039 9.62974 5.5 10.198 5.5H11.4992C12.0772 5.5 12.2745 5.50402 12.451 5.55151C12.6206 5.59714 12.7809 5.67222 12.9246 5.77332C13.0741 5.87852 13.2034 6.02748 13.5734 6.4715L15.1139 8.32009Z" stroke="white" stroke-linejoin="round"/><path d="M17.998 16V17.6C17.998 18.4401 17.998 18.8601 17.8346 19.181C17.6907 19.4632 17.4613 19.6927 17.179 19.8365C16.8582 20 16.4381 20 15.598 20H6.39805C5.55797 20 5.13793 20 4.81706 19.8365C4.53482 19.6927 4.30535 19.4632 4.16154 19.181C3.99805 18.8601 3.99805 18.4401 3.99805 17.6V10.4C3.99805 9.55992 3.99805 9.13988 4.16154 8.81901C4.30535 8.53677 4.53482 8.3073 4.81706 8.16349C5.13793 8 5.55797 8 6.39805 8H7.99805" stroke="white" stroke-linejoin="round"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="design-tab-link">
            <div class="container">
                <ul class="clearfix">
                    <li class="active"><a href="#tabid1">Mẫu căn hộ</a></li>
                    <li><a href="#tabid2">Phòng khách</a></li>
                    <li><a href="#tabid3">Phòng ngủ</a></li>
                    <li><a href="#tabid4">Phòng vệ sinh</a></li>
                </ul>
                <select class="slcDsTab">
                    <option value="#tabid1">Mẫu căn hộ</option>
                    <option value="#tabid2">Phòng khách</option>
                    <option value="#tabid3">Phòng ngủ</option>
                    <option value="#tabid4">Phòng vệ sinh</option>
                </select>
            </div>
        </div>
    </section>
    <section class="section-page">
        <div class="container">
            <div class="row-design" id="tabid1">
                <h3 class="design-list-title">Chọn mẫu căn hộ</h3>
                <div class="design-list category-list">
                    <div class="row row_sm_10">
                        <div class="col-sm-4 col-xss-6 category-item active">
                            <a href="#">
                                <img class="lazyload" src="{{asset('fe_template/images/loading.gif')}}" data-src="{{asset('fe_template/images/product/list-1.jpg')}}" alt="540x400" />
                                <strong>Căn Trio</strong>
                            </a>
                        </div>
                        <div class="col-sm-4 col-xss-6 category-item">
                            <a href="#">
                                <img class="lazyload" src="{{asset('fe_template/images/loading.gif')}}" data-src="{{asset('fe_template/images/product/list-2.jpg')}}" alt="540x400" />
                                <strong>Căn Trio</strong>
                            </a>
                        </div>
                        <div class="col-sm-4 col-xss-6 category-item">
                            <a href="#">
                                <img class="lazyload" src="{{asset('fe_template/images/loading.gif')}}" data-src="{{asset('fe_template/images/product/list-3.jpg')}}" alt="540x400" />
                                <strong>Căn Trio</strong>
                            </a>
                        </div>
                        <div class="col-sm-4 col-xss-6 category-item">
                            <a href="#">
                                <img class="lazyload" src="{{asset('fe_template/images/loading.gif')}}" data-src="{{asset('fe_template/images/product/list-4.jpg')}}" alt="540x400" />
                                <strong>Căn Trio</strong>
                            </a>
                        </div>
                        <div class="col-sm-4 col-xss-6 category-item">
                            <a href="#">
                                <img class="lazyload" src="{{asset('fe_template/images/loading.gif')}}" data-src="{{asset('fe_template/images/product/list-5.jpg')}}" alt="540x400" />
                                <strong>Căn Trio</strong>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-design" id="tabid2">
                <h3 class="design-list-title">Phòng khách</h3>
                <div class="design-list">
                    <div class="design-properties-group">
                        <h4 class="design-list-stitle">Sofa</h4>
                        <div class="row design-list-row">
                            <div class="col-md-6">
                                <h5 class="design-list-sstitle">Kiểu dáng</h5>
                                <div class="row row_5 properties-list" data-propid="1">
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx" data-image="{{asset('fe_template/images/design/main.jpg')}}">
                                            <span style="background-image: url({{asset('fe_template/images/product/list-1.jpg')}});">Kiểu 1</span>
                                            <strong>Kiểu 1</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx" data-image="{{asset('fe_template/images/design/main.jpg')}}">
                                            <span style="background-image: url({{asset('fe_template/images/product/list-2.jpg')}});">Kiểu 1</span>
                                            <strong>Kiểu 2</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx" data-image="{{asset('fe_template/images/design/main.jpg')}}">
                                            <span style="background-image: url({{asset('fe_template/images/product/list-3.jpg')}});">Kiểu 1</span>
                                            <strong>Kiểu 3</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx" data-image="{{asset('fe_template/images/design/main.jpg')}}">
                                            <span style="background-image: url({{asset('fe_template/images/product/list-4.jpg')}});">Kiểu 1</span>
                                            <strong>Kiểu 4</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h5 class="design-list-sstitle">Màu sắc</h5>
                                <div class="row row_5 properties-list" data-propid="2">
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-color: #fff;">Kiểu 1</span>
                                            <strong>Kiểu 1</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx" data-image="{{asset('fe_template/images/design/3.png')}}">
                                            <span style="background-color: #0066CC;">Kiểu 2</span>
                                            <strong>Kiểu 2</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx" data-image="{{asset('fe_template/images/design/main.jpg')}}">
                                            <span style="background-color: #31C375;">Kiểu 3</span>
                                            <strong>Kiểu 3</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx" data-image="{{asset('fe_template/images/design/2.png')}}">
                                            <span style="background-color: #E42E2E;">Kiểu 4</span>
                                            <strong>Kiểu 4</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-color: #3CE8F3;">Kiểu 1</span>
                                            <strong>Kiểu 1</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx" data-image="{{asset('fe_template/images/design/1.png')}}">
                                            <span style="background-color: #FF9CE3;">Kiểu 2</span>
                                            <strong>Kiểu 2</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-color: #8AE95E;">Kiểu 3</span>
                                            <strong>Kiểu 3</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx" data-image="{{asset('fe_template/images/design/4.png')}}">
                                            <span style="background-color: #8FA6D2;">Kiểu 4</span>
                                            <strong>Kiểu 4</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="design-properties-group">
                        <h4 class="design-list-stitle">Bàn ăn</h4>
                        <div class="row design-list-row">
                            <div class="col-md-6">
                                <h5 class="design-list-sstitle">Kiểu dáng</h5>
                                <div class="row row_5 properties-list" data-propid="3">
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-image: url({{asset('fe_template/images/product/list-1.jpg')}});">Kiểu 1</span>
                                            <strong>Kiểu 1</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-image: url({{asset('fe_template/images/product/list-2.jpg')}});">Kiểu 1</span>
                                            <strong>Kiểu 2</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-image: url({{asset('fe_template/images/product/list-3.jpg')}});">Kiểu 1</span>
                                            <strong>Kiểu 3</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-image: url({{asset('fe_template/images/product/list-4.jpg')}});">Kiểu 1</span>
                                            <strong>Kiểu 4</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h5 class="design-list-sstitle">Màu sắc</h5>
                                <div class="row row_5 properties-list" data-propid="4">
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-color: #fff;">Kiểu 1</span>
                                            <strong>Kiểu 1</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-color: #0066CC;">Kiểu 2</span>
                                            <strong>Kiểu 2</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-color: #31C375;">Kiểu 3</span>
                                            <strong>Kiểu 3</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-color: #E42E2E;">Kiểu 4</span>
                                            <strong>Kiểu 4</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-color: #3CE8F3;">Kiểu 1</span>
                                            <strong>Kiểu 1</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-color: #FF9CE3;">Kiểu 2</span>
                                            <strong>Kiểu 2</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-color: #8AE95E;">Kiểu 3</span>
                                            <strong>Kiểu 3</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-color: #8FA6D2;">Kiểu 4</span>
                                            <strong>Kiểu 4</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="design-properties-group">
                        <h4 class="design-list-stitle">Lựa chọn tiện nghi phòng khách</h4>
                        <div class="other-design">
                            <h5 class="other-design-title">Hệ thống điện</h5>
                            <div class="row">
                                <div class="col-xs-6 other-design-item">
                                <span>
                                    Hệ thống đèn 12W trong nhà điều khiển từ xa
                                </span>
                                </div>
                                <div class="col-xs-6 other-design-item">
                                <span>
                                    Hệ thống sưởi
                                </span>
                                </div>
                                <div class="col-xs-6 other-design-item">
                                <span>
                                    Hệ thống máy chiếu
                                </span>
                                </div>
                            </div>
                            <h5 class="other-design-title">Hệ thống nước</h5>
                            <div class="row">
                                <div class="col-xs-6 other-design-item">
                                <span>
                                    Hệ thống nước nóng
                                </span>
                                </div>
                                <div class="col-xs-6 other-design-item">
                                <span>
                                    Hệ thống nước uống liền
                                </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-design not-active" id="tabid3">
                <h3 class="design-list-title">Phòng ngủ</h3>
                <div class="design-list">
                    <div class="design-properties-group">
                        <h4 class="design-list-stitle">Sofa</h4>
                        <div class="row design-list-row" data-propid="5">
                            <div class="col-md-6">
                                <h5 class="design-list-sstitle">Kiểu dáng</h5>
                                <div class="row row_5 properties-list">
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-image: url({{asset('fe_template/images/product/list-1.jpg')}});">Kiểu 1</span>
                                            <strong>Kiểu 1</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-image: url({{asset('fe_template/images/product/list-2.jpg')}});">Kiểu 1</span>
                                            <strong>Kiểu 2</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-image: url({{asset('fe_template/images/product/list-3.jpg')}});">Kiểu 1</span>
                                            <strong>Kiểu 3</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-image: url({{asset('fe_template/images/product/list-4.jpg')}});">Kiểu 1</span>
                                            <strong>Kiểu 4</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h5 class="design-list-sstitle">Màu sắc</h5>
                                <div class="row row_5 properties-list" data-propid="6">
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-color: #fff;">Kiểu 1</span>
                                            <strong>Kiểu 1</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-color: #0066CC;">Kiểu 2</span>
                                            <strong>Kiểu 2</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-color: #31C375;">Kiểu 3</span>
                                            <strong>Kiểu 3</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-color: #E42E2E;">Kiểu 4</span>
                                            <strong>Kiểu 4</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-color: #3CE8F3;">Kiểu 1</span>
                                            <strong>Kiểu 1</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-color: #FF9CE3;">Kiểu 2</span>
                                            <strong>Kiểu 2</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-color: #8AE95E;">Kiểu 3</span>
                                            <strong>Kiểu 3</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-color: #8FA6D2;">Kiểu 4</span>
                                            <strong>Kiểu 4</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="design-properties-group">
                        <h4 class="design-list-stitle">Bàn ăn</h4>
                        <div class="row design-list-row">
                            <div class="col-md-6">
                                <h5 class="design-list-sstitle">Kiểu dáng</h5>
                                <div class="row row_5 properties-list" data-propid="7">
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-image: url({{asset('fe_template/images/product/list-1.jpg')}});">Kiểu 1</span>
                                            <strong>Kiểu 1</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-image: url({{asset('fe_template/images/product/list-2.jpg')}});">Kiểu 1</span>
                                            <strong>Kiểu 2</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-image: url({{asset('fe_template/images/product/list-3.jpg')}});">Kiểu 1</span>
                                            <strong>Kiểu 3</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-image: url({{asset('fe_template/images/product/list-4.jpg')}});">Kiểu 1</span>
                                            <strong>Kiểu 4</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h5 class="design-list-sstitle">Màu sắc</h5>
                                <div class="row row_5 properties-list" data-propid="8">
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-color: #fff;">Kiểu 1</span>
                                            <strong>Kiểu 1</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-color: #0066CC;">Kiểu 2</span>
                                            <strong>Kiểu 2</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-color: #31C375;">Kiểu 3</span>
                                            <strong>Kiểu 3</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-color: #E42E2E;">Kiểu 4</span>
                                            <strong>Kiểu 4</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-color: #3CE8F3;">Kiểu 1</span>
                                            <strong>Kiểu 1</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-color: #FF9CE3;">Kiểu 2</span>
                                            <strong>Kiểu 2</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-color: #8AE95E;">Kiểu 3</span>
                                            <strong>Kiểu 3</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-color: #8FA6D2;">Kiểu 4</span>
                                            <strong>Kiểu 4</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="design-properties-group">
                        <h4 class="design-list-stitle">Lựa chọn tiện nghi phòng khách</h4>
                        <div class="other-design">
                            <h5 class="other-design-title">Hệ thống điện</h5>
                            <div class="row">
                                <div class="col-xs-6 other-design-item">
                                <span>
                                    Hệ thống đèn 12W trong nhà điều khiển từ xa
                                </span>
                                </div>
                                <div class="col-xs-6 other-design-item">
                                <span>
                                    Hệ thống sưởi
                                </span>
                                </div>
                                <div class="col-xs-6 other-design-item">
                                <span>
                                    Hệ thống máy chiếu
                                </span>
                                </div>
                            </div>
                            <h5 class="other-design-title">Hệ thống nước</h5>
                            <div class="row">
                                <div class="col-xs-6 other-design-item">
                                <span>
                                    Hệ thống nước nóng
                                </span>
                                </div>
                                <div class="col-xs-6 other-design-item">
                                <span>
                                    Hệ thống nước uống liền
                                </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-design not-active" id="tabid4">
                <h3 class="design-list-title">Phòng vệ sinh</h3>
                <div class="design-list">
                    <div class="design-properties-group">
                        <h4 class="design-list-stitle">Sofa</h4>
                        <div class="row design-list-row">
                            <div class="col-md-6">
                                <h5 class="design-list-sstitle">Kiểu dáng</h5>
                                <div class="row row_5 properties-list" data-propid="9">
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-image: url({{asset('fe_template/images/product/list-1.jpg')}});">Kiểu 1</span>
                                            <strong>Kiểu 1</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-image: url({{asset('fe_template/images/product/list-2.jpg')}});">Kiểu 1</span>
                                            <strong>Kiểu 2</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-image: url({{asset('fe_template/images/product/list-3.jpg')}});">Kiểu 1</span>
                                            <strong>Kiểu 3</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-image: url({{asset('fe_template/images/product/list-4.jpg')}});">Kiểu 1</span>
                                            <strong>Kiểu 4</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h5 class="design-list-sstitle">Màu sắc</h5>
                                <div class="row row_5 properties-list" data-propid="10">
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-color: #fff;">Kiểu 1</span>
                                            <strong>Kiểu 1</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-color: #0066CC;">Kiểu 2</span>
                                            <strong>Kiểu 2</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-color: #31C375;">Kiểu 3</span>
                                            <strong>Kiểu 3</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-color: #E42E2E;">Kiểu 4</span>
                                            <strong>Kiểu 4</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-color: #3CE8F3;">Kiểu 1</span>
                                            <strong>Kiểu 1</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-color: #FF9CE3;">Kiểu 2</span>
                                            <strong>Kiểu 2</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-color: #8AE95E;">Kiểu 3</span>
                                            <strong>Kiểu 3</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-color: #8FA6D2;">Kiểu 4</span>
                                            <strong>Kiểu 4</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="design-properties-group">
                        <h4 class="design-list-stitle">Bàn ăn</h4>
                        <div class="row design-list-row">
                            <div class="col-md-6">
                                <h5 class="design-list-sstitle">Kiểu dáng</h5>
                                <div class="row row_5 properties-list" data-propid="11">
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-image: url({{asset('fe_template/images/product/list-1.jpg')}});">Kiểu 1</span>
                                            <strong>Kiểu 1</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-image: url({{asset('fe_template/images/product/list-2.jpg')}});">Kiểu 1</span>
                                            <strong>Kiểu 2</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-image: url({{asset('fe_template/images/product/list-3.jpg')}});">Kiểu 1</span>
                                            <strong>Kiểu 3</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-image: url({{asset('fe_template/images/product/list-4.jpg')}});">Kiểu 1</span>
                                            <strong>Kiểu 4</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h5 class="design-list-sstitle">Màu sắc</h5>
                                <div class="row row_5 properties-list" data-propid="12">
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-color: #fff;">Kiểu 1</span>
                                            <strong>Kiểu 1</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-color: #0066CC;">Kiểu 2</span>
                                            <strong>Kiểu 2</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-color: #31C375;">Kiểu 3</span>
                                            <strong>Kiểu 3</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-color: #E42E2E;">Kiểu 4</span>
                                            <strong>Kiểu 4</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-color: #3CE8F3;">Kiểu 1</span>
                                            <strong>Kiểu 1</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-color: #FF9CE3;">Kiểu 2</span>
                                            <strong>Kiểu 2</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-color: #8AE95E;">Kiểu 3</span>
                                            <strong>Kiểu 3</strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-2 col-xs-3 col-xss-4 col-vsm-6 properties-item">
                                        <div class="properties-item-ctx">
                                            <span style="background-color: #8FA6D2;">Kiểu 4</span>
                                            <strong>Kiểu 4</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="design-properties-group">
                        <h4 class="design-list-stitle">Lựa chọn tiện nghi phòng khách</h4>
                        <div class="other-design">
                            <h5 class="other-design-title">Hệ thống điện</h5>
                            <div class="row">
                                <div class="col-xs-6 other-design-item">
                                <span>
                                    Hệ thống đèn 12W trong nhà điều khiển từ xa
                                </span>
                                </div>
                                <div class="col-xs-6 other-design-item">
                                <span>
                                    Hệ thống sưởi
                                </span>
                                </div>
                                <div class="col-xs-6 other-design-item">
                                <span>
                                    Hệ thống máy chiếu
                                </span>
                                </div>
                            </div>
                            <h5 class="other-design-title">Hệ thống nước</h5>
                            <div class="row">
                                <div class="col-xs-6 other-design-item">
                                <span>
                                    Hệ thống nước nóng
                                </span>
                                </div>
                                <div class="col-xs-6 other-design-item">
                                <span>
                                    Hệ thống nước uống liền
                                </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('script')
    <script defer>
        $(document).ready(function(){
            $('.design-tab-link ul li a').click(function(e){
                e.preventDefault();
                var tabid = $(this).attr('href');
                if($(tabid).length > 0){
                    $("body,html").animate({ scrollTop: $(tabid).offset().top - $('.design-banner-group').height() - 20 }, "slow")
                }
            });
            if($(window).height() > $('.design-banner-group').height() + 100){
                $('.design-banner-group').addClass('active');
            }
            $('.design-tab-link select').change(function(){
                var tabid = $(this).find('option:selected').val();
                if($(tabid).length > 0){
                    $("body,html").animate({ scrollTop: $(tabid).offset().top - 20 }, "slow");
                }
            });
            $('.design-list-title').click(function(e){
                var parent = $(this).parent(), list = parent.children('.design-list');
                parent.toggleClass('not-active');list.toggleClass('active');
            });

            $('.properties-item').click(function(){
                $('.larger-picture').addClass('loading');
                var parent = $(this).parent(), prop_id = parent.data('propid'),
                    idx =  $(this).index(), image = $(this).children('.properties-item-ctx').data('image');
                parent.find('.properties-item:not(:eq('+idx+')) .properties-item-ctx').removeClass('active');
                $(this).children('.properties-item-ctx').toggleClass('active');
                if(image != undefined && image != ''){
                    if($('.larger-picture').find('img[data-propid="'+prop_id+'"]').length > 0){
                        if($(this).children('.properties-item-ctx').hasClass('active'))
                            $('.larger-picture').find('img[data-propid="'+prop_id+'"]').attr('src', image).attr('data-index', idx);
                        else
                            $('.larger-picture').find('img[data-propid="'+prop_id+'"]').remove();
                    }else if($(this).children('.properties-item-ctx').hasClass('active')){
                        $('.larger-picture').append('<img class="sub-picture" data-index="'+idx+'" data-propid="'+prop_id+'" src="'+image+'" alt="1170x550" />');
                    }
                }
                $('.larger-picture').removeClass('loading');
            });

            $('.properties-item').click(function(){
                $('.larger-picture').addClass('loading');
                var parent = $(this).parent(), idx =  $(this).index(), image = $(this).children('.properties-item-ctx').data('image');
                parent.find('.properties-item:not(:eq('+idx+')) .properties-item-ctx').removeClass('active');
                $(this).children('.properties-item-ctx').toggleClass('active');
                var cur_src = $('.larger-picture .main-picture').data('srcs');
                console.log(image);
                if(image != undefined && image != ''){
                    $('.larger-picture .main-picture').attr('src', image);
                }else{
                    $('.larger-picture .main-picture').attr('src', cur_src);
                }
                $('.larger-picture').removeClass('loading');
            });
            $('.other-design-item').click(function(){
                $(this).toggleClass('active');
            });
        });
    </script>
@stop
