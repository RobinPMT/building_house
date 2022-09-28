@extends('layouts.app')
@section('content')
    <section class="slideshow">
        <div class="owl-carousel">
            <div class="owl-itemct">
                <img class="bg-banner" src="{{asset('fe_template/images/banner/bg1.jpg')}}" alt="1920x1080" class="animated slideScaleIn" data-animation-in="slideScaleIn" data-animation-out="animate-out slideScaleOut" />
                <img class="detail-banner" src="{{asset('fe_template/images/banner/1.png')}}" alt="1920x1080" class="animated slideScaleInDt" data-animation-in="slideScaleInDt" data-animation-out="animate-out slideScaleOutDt" />
                <div class="banner-descr">
                    <h2>Lợi ích đến từ Consolar Housing</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                    <a href="#" class="button-link bg-green">Xem thêm <svg width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13 5L13.7071 4.29289L14.4142 5L13.7071 5.70711L13 5ZM1 6C0.447715 6 0 5.55228 0 5C0 4.44772 0.447715 4 1 4V6ZM9.70711 0.292893L13.7071 4.29289L12.2929 5.70711L8.29289 1.70711L9.70711 0.292893ZM13.7071 5.70711L9.70711 9.70711L8.29289 8.29289L12.2929 4.29289L13.7071 5.70711ZM13 6H1V4H13V6Z" fill="#161E31"></path>
                        </svg></a>
                </div>
            </div>
            <div class="owl-itemct">
                <img class="bg-banner" src="{{asset('fe_template/images/banner/bg2.jpg')}}" alt="1920x1080" class="animated slideScaleIn" data-animation-in="slideScaleIn" data-animation-out="animate-out slideScaleOut" />
                <img class="detail-banner" src="{{asset('fe_template/images/banner/2.png')}}" alt="1920x1080" class="animated slideScaleInDt" data-animation-in="slideScaleInDt" data-animation-out="animate-out slideScaleOutDt" />
                <div class="banner-descr">
                    <h2>Lợi ích đến từ Consolar Housing</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                    <a href="#" class="button-link bg-green">Xem thêm <svg width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13 5L13.7071 4.29289L14.4142 5L13.7071 5.70711L13 5ZM1 6C0.447715 6 0 5.55228 0 5C0 4.44772 0.447715 4 1 4V6ZM9.70711 0.292893L13.7071 4.29289L12.2929 5.70711L8.29289 1.70711L9.70711 0.292893ZM13.7071 5.70711L9.70711 9.70711L8.29289 8.29289L12.2929 4.29289L13.7071 5.70711ZM13 6H1V4H13V6Z" fill="#161E31"></path>
                        </svg></a>
                </div>
            </div>
        </div>
    </section>
    <section class="benefit-section">
        <div class="container">
            <div class="homepage-title clearfix">
                <h2 class="home-title"><em>Lợi ích</em> đến từ
                    Consolar Housing
                </h2>
                <div class="homedesc"><div>{{isset($settings['housing']) ? $settings['housing'] : ''}}</div></div>
            </div>
            <div class="benefit-list">
                <div class="row row_sm_10">
                    <div class="col-xs-6 benefit-item">
                        <div class="benefit-item-content">
                            <picture>
                                <source media="(min-width: 1500px)" srcset="{{asset('fe_template/images/benifit/1.jpg')}}"> <!-- 690x840 -->
                                <source media="(min-width: 1230px)" srcset="{{asset('fe_template/images/benifit/1_1.jpg')}}"> <!-- 570x700 -->
                                <source media="(min-width: 992px)" srcset="{{asset('fe_template/images/benifit/1_4.jpg')}}"> <!-- 455x560 -->
                                <source media="(min-width: 571px)" srcset="{{asset('fe_template/images/benifit/1_2.jpg')}}"> <!-- 470x570 -->
                                <img class="lazyload" src="{{asset('fe_template/images/loading.gif')}}" data-src="{{asset('fe_template/images/benifit/1_3.jpg')}}" alt="540x320" />
                            </picture>
                            <div class="benefit-item-desc">
                                <span>01</span>
                                <strong>Giải pháp xây dựng
                                    linh hoạt, nhanh chóng
                                </strong>
                                <div class="behotline"><a href="contact.html"><i class="fa fa-phone"></i> Liên hệ tư vấn</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 benefit-item">
                        <div class="benefit-item-content">
                            <picture>
                                <source media="(min-width: 1500px)" srcset="{{asset('fe_template/images/benifit/2.jpg')}}"> <!-- 690x405 -->
                                <source media="(min-width: 1230px)" srcset="{{asset('fe_template/images/benifit/2_1.jpg')}}"> <!-- 570x335 -->
                                <source media="(min-width: 992px)" srcset="{{asset('fe_template/images/benifit/2_4.jpg')}}"> <!-- 455x265 -->
                                <source media="(min-width: 571px)" srcset="{{asset('fe_template/images/benifit/2_2.jpg')}}"> <!-- 470x275 -->
                                <img class="lazyload" src="{{asset('fe_template/images/loading.gif')}}" data-src="{{asset('fe_template/images/benifit/2_3.jpg')}}" alt="540x320" />
                            </picture>
                            <div class="benefit-item-desc">
                                <span>02</span>
                                <strong>Chi phí đầu tư hợp lý</strong>
                                <div class="behotline"><a href="contact.html"><i class="fa fa-phone"></i> Liên hệ tư vấn</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 benefit-item">
                        <div class="benefit-item-content">
                            <picture>
                                <source media="(min-width: 1500px)" srcset="{{asset('fe_template/images/benifit/3.jpg')}}"> <!-- 690x405 -->
                                <source media="(min-width: 1230px)" srcset="{{asset('fe_template/images/benifit/3_1.jpg')}}"> <!-- 570x335 -->
                                <source media="(min-width: 992px)" srcset="{{asset('fe_template/images/benifit/3_4.jpg')}}"> <!-- 455x265 -->
                                <source media="(min-width: 571px)" srcset="{{asset('fe_template/images/benifit/3_2.jpg')}}"> <!-- 470x275 -->
                                <img class="lazyload" src="{{asset('fe_template/images/loading.gif')}}" data-src="{{asset('fe_template/images/benifit/3_3.jpg')}}" alt="540x320" />
                            </picture>
                            <div class="benefit-item-desc">
                                <span>03</span>
                                <strong>Hỗ trợ vận chuyển &
                                    lắp đặt trọn gói
                                </strong>
                                <div class="behotline"><a href="contact.html"><i class="fa fa-phone"></i> Liên hệ tư vấn</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 benefit-item">
                        <div class="benefit-item-content">
                            <picture>
                                <source media="(min-width: 1500px)" srcset="{{asset('fe_template/images/benifit/4.jpg')}}"> <!-- 1440x410 -->
                                <source media="(min-width: 1230px)" srcset="{{asset('fe_template/images/benifit/4_1.jpg')}}"> <!-- 1170x335 -->
                                <source media="(min-width: 992px)" srcset="{{asset('fe_template/images/benifit/4_4.jpg')}}"> <!-- 940x270 -->
                                <source media="(min-width: 571px)" srcset="{{asset('fe_template/images/benifit/4_2.jpg')}}"> <!-- 970x280 -->
                                <img class="lazyload" src="{{asset('fe_template/images/loading.gif')}}" data-src="{{asset('fe_template/images/benifit/4_3.jpg')}}" alt="540x320" />
                            </picture>
                            <div class="benefit-item-desc">
                                <span>03</span>
                                <strong>Thiết kế đa dạng, độc đáo
                                </strong>
                                <div class="behotline"><a href="contact.html"><i class="fa fa-phone"></i> Liên hệ tư vấn</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 benefit-item">
                        <div class="benefit-item-content">
                            <picture>
                                <source media="(min-width: 1500px)" srcset="{{asset('fe_template/images/benifit/5.jpg')}}"> <!-- 690x600 -->
                                <source media="(min-width: 1230px)" srcset="{{asset('fe_template/images/benifit/5.jpg')}}"> <!-- 570x495 -->
                                <source media="(min-width: 992px)" srcset="{{asset('fe_template/images/benifit/5.jpg')}}"> <!-- 455x395 -->
                                <source media="(min-width: 571px)" srcset="{{asset('fe_template/images/benifit/5.jpg')}}"> <!-- 455x395 -->
                                <img class="lazyload" src="{{asset('fe_template/images/loading.gif')}}" data-src="{{asset('fe_template/images/benifit/5.jpg')}}" alt="540x320" />
                            </picture>
                            <div class="benefit-item-desc">
                                <span>05</span>
                                <strong>Tiêu chuẩn Châu Âu,
                                    thân thiện với môi trường
                                </strong>
                                <div class="behotline"><a href="contact.html"><i class="fa fa-phone"></i> Liên hệ tư vấn</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 benefit-item">
                        <div class="benefit-item-content">
                            <picture>
                                <source media="(min-width: 1500px)" srcset="{{asset('fe_template/images/benifit/6.jpg')}}"> <!-- 690x600 -->
                                <source media="(min-width: 1230px)" srcset="{{asset('fe_template/images/benifit/6.jpg')}}"> <!-- 570x495 -->
                                <source media="(min-width: 992px)" srcset="{{asset('fe_template/images/benifit/6.jpg')}}"> <!-- 455x395 -->
                                <source media="(min-width: 571px)" srcset="{{asset('fe_template/images/benifit/6.jpg')}}"> <!-- 455x395 -->
                                <img class="lazyload" src="{{asset('fe_template/images/loading.gif')}}" data-src="{{asset('fe_template/images/benifit/6.jpg')}}" alt="540x320" />
                            </picture>
                            <div class="benefit-item-desc">
                                <span>06</span>
                                <strong>Ứng dụng cho mọi
                                    địa hình & thời tiết</strong>
                                <div class="behotline"><a href="contact.html"><i class="fa fa-phone"></i> Liên hệ tư vấn</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="product-section">
        <div class="container">
            <div class="homepage-title clearfix">
                <h2 class="home-title"><em>Khám phá</em> và lựa chọn
                    ngôi nhà bạn mong muốn</h2>
                <div class="homedesc"><a href="#" class="button-link bg-green get-contact-popup" data-toggle="modal" data-target="#contact-wrapper"><i class="fa fa-phone"></i> Liên hệ tư vấn</a></div>

            </div>
            <div class="ul-product-tab">
                <ul class="clearfix">
                    <li data-id="1"><a href="#">Mẫu Trio</a></li>
                    <li data-id="2"><a href="#">Mẫu Diamond</a></li>
                    <li data-id="3"><a href="#">Mẫu Cubic</a></li>
                    <li data-id="4"><a href="#">Mẫu Oval</a></li>
                    <li data-id="5"><a href="#">Mẫu Rectro</a></li>
                </ul>
            </div>
        </div>
        <div class="product-tab-content">
            <div class="product-tab-item">
                <div class="product-slider">
                    <div class="product-slider-content">
                        <div class="owl-carousel larger-carousel">
                            <!--product-->
                            <div class="container">
                                <div class="product-item clearfix" data-id="1">
                                    <div class="product-item-left">
                                        <picture class="product-larger-thumb">
                                            <img src="{{asset('fe_template/images/product/1.jpg')}}" alt="930x845" />
                                        </picture>
                                        <div class="product-small-thumb">
                                            <div class="owl-carousel">
                                                <a href="#"><img data-larger="images/product/1.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/1.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/2.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/2.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/3.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/3.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/4.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/4.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/5.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/5.jpg')}}" alt="145x100" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item-right">
                                        <h3 class="product-name"><a href="#">Trio House</a></h3>
                                        <div class="product-description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                        <ul class="product-information clearfix">
                                            <li>
                                                Chiều dài
                                                <strong>201.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều rộng
                                                <strong>101.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều cao
                                                <strong>11<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Diện tích
                                                <strong>48<sup>m2</sup></strong>
                                            </li>
                                        </ul>
                                        <div class="product-featured">
                                            <ul>
                                                <li>
                                                    <label>Công nghệ</label>
                                                    <div>
                                                        <ul>
                                                            <li>Khung kết cấu thép</li>
                                                            <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                            <li>Chông thấm: Tole</li>
                                                            <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                            <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                            <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <label>Số phòng</label>
                                                    <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                </li>
                                                <li>
                                                    <label>Tiện nghi</label>
                                                    <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                </li>
                                                <li>
                                                    <label>Diện tích</label>
                                                    <div>48m2</div>
                                                </li>
                                                <li>
                                                    <label>Sức chứa</label>
                                                    <div>03 người lớn, 01 trẻ em</div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="button-link bg-green">Tự thiết kế</a>
                                            <a href="#" data-id="1" class="button-link get-detail-popup" data-toggle="modal" data-target="#product-wrapper">Thông số chi tiết</a>
                                            <a href="#" data-id="1" class="button-link get-compare-popup" data-toggle="modal" data-target="#product-compare">So sánh</a>
                                        </div>
                                    </div>
                                    <div class="hidden">
                                        <div class="row detail-popup">
                                            <div class="col-sm-7">
                                                <h3 class="popup-title">Thông số chi tiết</h3>
                                                <ul class="detail-popup-ul">
                                                    <li>
                                                        <label>Công nghệ</label>
                                                        <div>
                                                            <ul>
                                                                <li>Khung kết cấu thép</li>
                                                                <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                                <li>Chông thấm: Tole</li>
                                                                <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                                <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                                <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống nước</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống điện</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Công năng</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Bếp</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị vệ sinh</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Vật dụng khác</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Vận chuyển</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Bảo hành</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Diện tích sàn</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Kích thước</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Độ cao trần</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Sức chứa</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Giao hàng</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="product-tech-img"><img src="{{asset('fe_template/images/techimg.jpg')}}" alt="" /></div>
                                                <div class="popup-action">
                                                    <a href="#" class="button-link bg-green">Tự thiết kế</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product-->
                            <!--product-->
                            <div class="container">
                                <div class="product-item clearfix" data-id="2">
                                    <div class="product-item-left">
                                        <picture class="product-larger-thumb">
                                            <img src="{{asset('fe_template/images/product/1.jpg')}}" alt="930x845" />
                                        </picture>
                                        <div class="product-small-thumb">
                                            <div class="owl-carousel">
                                                <a href="#"><img data-larger="images/product/1.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/1.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/2.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/2.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/3.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/3.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/4.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/4.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/5.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/5.jpg')}}" alt="145x100" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item-right">
                                        <h3 class="product-name"><a href="#">Trio House</a></h3>
                                        <div class="product-description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                        <ul class="product-information clearfix">
                                            <li>
                                                Chiều dài
                                                <strong>201.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều rộng
                                                <strong>101.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều cao
                                                <strong>11<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Diện tích
                                                <strong>48<sup>m2</sup></strong>
                                            </li>
                                        </ul>
                                        <div class="product-featured">
                                            <ul>
                                                <li>
                                                    <label>Công nghệ</label>
                                                    <div>
                                                        <ul>
                                                            <li>Khung kết cấu thép</li>
                                                            <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                            <li>Chông thấm: Tole</li>
                                                            <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                            <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                            <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <label>Số phòng</label>
                                                    <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                </li>
                                                <li>
                                                    <label>Tiện nghi</label>
                                                    <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                </li>
                                                <li>
                                                    <label>Diện tích</label>
                                                    <div>48m2</div>
                                                </li>
                                                <li>
                                                    <label>Sức chứa</label>
                                                    <div>03 người lớn, 01 trẻ em</div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="button-link bg-green">Tự thiết kế</a>
                                            <a href="#" data-id="1" class="button-link get-detail-popup" data-toggle="modal" data-target="#product-wrapper">Thông số chi tiết</a>
                                            <a href="#" data-id="1" class="button-link get-compare-popup" data-toggle="modal" data-target="#product-compare">So sánh</a>
                                        </div>
                                    </div>
                                    <div class="hidden">
                                        <div class="row detail-popup">
                                            <div class="col-sm-7">
                                                <h3 class="popup-title">Thông số chi tiết</h3>
                                                <ul class="detail-popup-ul">
                                                    <li>
                                                        <label>Công nghệ</label>
                                                        <div>
                                                            <ul>
                                                                <li>Khung kết cấu thép</li>
                                                                <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                                <li>Chông thấm: Tole</li>
                                                                <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                                <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                                <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống nước</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống điện</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Công năng</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Bếp</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị vệ sinh</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Vật dụng khác</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Vận chuyển</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Bảo hành</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Diện tích sàn</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Kích thước</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Độ cao trần</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Sức chứa</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Giao hàng</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="product-tech-img"><img src="{{asset('fe_template/images/techimg.jpg')}}" alt="" /></div>
                                                <div class="popup-action">
                                                    <a href="#" class="button-link bg-green">Tự thiết kế</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product-->
                            <!--product-->
                            <div class="container">
                                <div class="product-item clearfix" data-id="5">
                                    <div class="product-item-left">
                                        <picture class="product-larger-thumb">
                                            <img src="{{asset('fe_template/images/product/1.jpg')}}" alt="930x845" />
                                        </picture>
                                        <div class="product-small-thumb">
                                            <div class="owl-carousel">
                                                <a href="#"><img data-larger="images/product/1.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/1.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/2.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/2.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/3.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/3.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/4.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/4.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/5.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/5.jpg')}}" alt="145x100" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item-right">
                                        <h3 class="product-name"><a href="#">Trio House</a></h3>
                                        <div class="product-description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                        <ul class="product-information clearfix">
                                            <li>
                                                Chiều dài
                                                <strong>201.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều rộng
                                                <strong>101.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều cao
                                                <strong>11<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Diện tích
                                                <strong>48<sup>m2</sup></strong>
                                            </li>
                                        </ul>
                                        <div class="product-featured">
                                            <ul>
                                                <li>
                                                    <label>Công nghệ</label>
                                                    <div>
                                                        <ul>
                                                            <li>Khung kết cấu thép</li>
                                                            <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                            <li>Chông thấm: Tole</li>
                                                            <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                            <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                            <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <label>Số phòng</label>
                                                    <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                </li>
                                                <li>
                                                    <label>Tiện nghi</label>
                                                    <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                </li>
                                                <li>
                                                    <label>Diện tích</label>
                                                    <div>48m2</div>
                                                </li>
                                                <li>
                                                    <label>Sức chứa</label>
                                                    <div>03 người lớn, 01 trẻ em</div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="button-link bg-green">Tự thiết kế</a>
                                            <a href="#" data-id="1" class="button-link get-detail-popup" data-toggle="modal" data-target="#product-wrapper">Thông số chi tiết</a>
                                            <a href="#" data-id="1" class="button-link get-compare-popup" data-toggle="modal" data-target="#product-compare">So sánh</a>
                                        </div>
                                    </div>
                                    <div class="hidden">
                                        <div class="row detail-popup">
                                            <div class="col-sm-7">
                                                <h3 class="popup-title">Thông số chi tiết</h3>
                                                <ul class="detail-popup-ul">
                                                    <li>
                                                        <label>Công nghệ</label>
                                                        <div>
                                                            <ul>
                                                                <li>Khung kết cấu thép</li>
                                                                <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                                <li>Chông thấm: Tole</li>
                                                                <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                                <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                                <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống nước</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống điện</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Công năng</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Bếp</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị vệ sinh</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Vật dụng khác</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Vận chuyển</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Bảo hành</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Diện tích sàn</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Kích thước</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Độ cao trần</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Sức chứa</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Giao hàng</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="product-tech-img"><img src="{{asset('fe_template/images/techimg.jpg')}}" alt="" /></div>
                                                <div class="popup-action">
                                                    <a href="#" class="button-link bg-green">Tự thiết kế</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product-->
                            <!--product-->
                            <div class="container">
                                <div class="product-item clearfix" data-id="5">
                                    <div class="product-item-left">
                                        <picture class="product-larger-thumb">
                                            <img src="{{asset('fe_template/images/product/1.jpg')}}" alt="930x845" />
                                        </picture>
                                        <div class="product-small-thumb">
                                            <div class="owl-carousel">
                                                <a href="#"><img data-larger="images/product/1.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/1.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/2.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/2.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/3.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/3.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/4.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/4.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/5.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/5.jpg')}}" alt="145x100" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item-right">
                                        <h3 class="product-name"><a href="#">Trio House</a></h3>
                                        <div class="product-description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                        <ul class="product-information clearfix">
                                            <li>
                                                Chiều dài
                                                <strong>201.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều rộng
                                                <strong>101.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều cao
                                                <strong>11<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Diện tích
                                                <strong>48<sup>m2</sup></strong>
                                            </li>
                                        </ul>
                                        <div class="product-featured">
                                            <ul>
                                                <li>
                                                    <label>Công nghệ</label>
                                                    <div>
                                                        <ul>
                                                            <li>Khung kết cấu thép</li>
                                                            <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                            <li>Chông thấm: Tole</li>
                                                            <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                            <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                            <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <label>Số phòng</label>
                                                    <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                </li>
                                                <li>
                                                    <label>Tiện nghi</label>
                                                    <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                </li>
                                                <li>
                                                    <label>Diện tích</label>
                                                    <div>48m2</div>
                                                </li>
                                                <li>
                                                    <label>Sức chứa</label>
                                                    <div>03 người lớn, 01 trẻ em</div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="button-link bg-green">Tự thiết kế</a>
                                            <a href="#" data-id="1" class="button-link get-detail-popup" data-toggle="modal" data-target="#product-wrapper">Thông số chi tiết</a>
                                            <a href="#" data-id="1" class="button-link get-compare-popup" data-toggle="modal" data-target="#product-compare">So sánh</a>
                                        </div>
                                    </div>
                                    <div class="hidden">
                                        <div class="row detail-popup">
                                            <div class="col-sm-7">
                                                <h3 class="popup-title">Thông số chi tiết</h3>
                                                <ul class="detail-popup-ul">
                                                    <li>
                                                        <label>Công nghệ</label>
                                                        <div>
                                                            <ul>
                                                                <li>Khung kết cấu thép</li>
                                                                <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                                <li>Chông thấm: Tole</li>
                                                                <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                                <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                                <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống nước</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống điện</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Công năng</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Bếp</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị vệ sinh</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Vật dụng khác</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Vận chuyển</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Bảo hành</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Diện tích sàn</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Kích thước</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Độ cao trần</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Sức chứa</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Giao hàng</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="product-tech-img"><img src="{{asset('fe_template/images/techimg.jpg')}}" alt="" /></div>
                                                <div class="popup-action">
                                                    <a href="#" class="button-link bg-green">Tự thiết kế</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product-->
                            <!--product-->
                            <div class="container">
                                <div class="product-item clearfix" data-id="5">
                                    <div class="product-item-left">
                                        <picture class="product-larger-thumb">
                                            <img src="{{asset('fe_template/images/product/1.jpg')}}" alt="930x845" />
                                        </picture>
                                        <div class="product-small-thumb">
                                            <div class="owl-carousel">
                                                <a href="#"><img data-larger="images/product/1.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/1.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/2.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/2.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/3.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/3.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/4.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/4.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/5.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/5.jpg')}}" alt="145x100" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item-right">
                                        <h3 class="product-name"><a href="#">Trio House</a></h3>
                                        <div class="product-description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                        <ul class="product-information clearfix">
                                            <li>
                                                Chiều dài
                                                <strong>201.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều rộng
                                                <strong>101.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều cao
                                                <strong>11<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Diện tích
                                                <strong>48<sup>m2</sup></strong>
                                            </li>
                                        </ul>
                                        <div class="product-featured">
                                            <ul>
                                                <li>
                                                    <label>Công nghệ</label>
                                                    <div>
                                                        <ul>
                                                            <li>Khung kết cấu thép</li>
                                                            <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                            <li>Chông thấm: Tole</li>
                                                            <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                            <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                            <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <label>Số phòng</label>
                                                    <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                </li>
                                                <li>
                                                    <label>Tiện nghi</label>
                                                    <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                </li>
                                                <li>
                                                    <label>Diện tích</label>
                                                    <div>48m2</div>
                                                </li>
                                                <li>
                                                    <label>Sức chứa</label>
                                                    <div>03 người lớn, 01 trẻ em</div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="button-link bg-green">Tự thiết kế</a>
                                            <a href="#" data-id="1" class="button-link get-detail-popup" data-toggle="modal" data-target="#product-wrapper">Thông số chi tiết</a>
                                            <a href="#" data-id="1" class="button-link get-compare-popup" data-toggle="modal" data-target="#product-compare">So sánh</a>
                                        </div>
                                    </div>
                                    <div class="hidden">
                                        <div class="row detail-popup">
                                            <div class="col-sm-7">
                                                <h3 class="popup-title">Thông số chi tiết</h3>
                                                <ul class="detail-popup-ul">
                                                    <li>
                                                        <label>Công nghệ</label>
                                                        <div>
                                                            <ul>
                                                                <li>Khung kết cấu thép</li>
                                                                <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                                <li>Chông thấm: Tole</li>
                                                                <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                                <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                                <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống nước</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống điện</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Công năng</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Bếp</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị vệ sinh</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Vật dụng khác</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Vận chuyển</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Bảo hành</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Diện tích sàn</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Kích thước</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Độ cao trần</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Sức chứa</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Giao hàng</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="product-tech-img"><img src="{{asset('fe_template/images/techimg.jpg')}}" alt="" /></div>
                                                <div class="popup-action">
                                                    <a href="#" class="button-link bg-green">Tự thiết kế</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product-->
                            <!--product-->
                            <div class="container">
                                <div class="product-item clearfix" data-id="5">
                                    <div class="product-item-left">
                                        <picture class="product-larger-thumb">
                                            <img src="{{asset('fe_template/images/product/1.jpg')}}" alt="930x845" />
                                        </picture>
                                        <div class="product-small-thumb">
                                            <div class="owl-carousel">
                                                <a href="#"><img data-larger="images/product/1.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/1.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/2.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/2.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/3.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/3.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/4.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/4.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/5.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/5.jpg')}}" alt="145x100" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item-right">
                                        <h3 class="product-name"><a href="#">Trio House</a></h3>
                                        <div class="product-description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                        <ul class="product-information clearfix">
                                            <li>
                                                Chiều dài
                                                <strong>201.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều rộng
                                                <strong>101.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều cao
                                                <strong>11<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Diện tích
                                                <strong>48<sup>m2</sup></strong>
                                            </li>
                                        </ul>
                                        <div class="product-featured">
                                            <ul>
                                                <li>
                                                    <label>Công nghệ</label>
                                                    <div>
                                                        <ul>
                                                            <li>Khung kết cấu thép</li>
                                                            <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                            <li>Chông thấm: Tole</li>
                                                            <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                            <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                            <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <label>Số phòng</label>
                                                    <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                </li>
                                                <li>
                                                    <label>Tiện nghi</label>
                                                    <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                </li>
                                                <li>
                                                    <label>Diện tích</label>
                                                    <div>48m2</div>
                                                </li>
                                                <li>
                                                    <label>Sức chứa</label>
                                                    <div>03 người lớn, 01 trẻ em</div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="button-link bg-green">Tự thiết kế</a>
                                            <a href="#" data-id="1" class="button-link get-detail-popup" data-toggle="modal" data-target="#product-wrapper">Thông số chi tiết</a>
                                            <a href="#" data-id="1" class="button-link get-compare-popup" data-toggle="modal" data-target="#product-compare">So sánh</a>
                                        </div>
                                    </div>
                                    <div class="hidden">
                                        <div class="row detail-popup">
                                            <div class="col-sm-7">
                                                <h3 class="popup-title">Thông số chi tiết</h3>
                                                <ul class="detail-popup-ul">
                                                    <li>
                                                        <label>Công nghệ</label>
                                                        <div>
                                                            <ul>
                                                                <li>Khung kết cấu thép</li>
                                                                <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                                <li>Chông thấm: Tole</li>
                                                                <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                                <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                                <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống nước</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống điện</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Công năng</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Bếp</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị vệ sinh</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Vật dụng khác</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Vận chuyển</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Bảo hành</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Diện tích sàn</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Kích thước</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Độ cao trần</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Sức chứa</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Giao hàng</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="product-tech-img"><img src="{{asset('fe_template/images/techimg.jpg')}}" alt="" /></div>
                                                <div class="popup-action">
                                                    <a href="#" class="button-link bg-green">Tự thiết kế</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-tab-item">
                <div class="product-slider">
                    <div class="product-slider-content">
                        <div class="owl-carousel larger-carousel">
                            <!--product-->
                            <div class="container">
                                <div class="product-item clearfix" data-id="1">
                                    <div class="product-item-left">
                                        <picture class="product-larger-thumb">
                                            <img src="{{asset('fe_template/images/product/1.jpg')}}" alt="930x845" />
                                        </picture>
                                        <div class="product-small-thumb">
                                            <div class="owl-carousel">
                                                <a href="#"><img data-larger="images/product/1.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/1.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/2.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/2.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/3.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/3.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/4.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/4.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/5.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/5.jpg')}}" alt="145x100" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item-right">
                                        <h3 class="product-name"><a href="#">Trio House</a></h3>
                                        <div class="product-description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                        <ul class="product-information clearfix">
                                            <li>
                                                Chiều dài
                                                <strong>201.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều rộng
                                                <strong>101.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều cao
                                                <strong>11<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Diện tích
                                                <strong>48<sup>m2</sup></strong>
                                            </li>
                                        </ul>
                                        <div class="product-featured">
                                            <ul>
                                                <li>
                                                    <label>Công nghệ</label>
                                                    <div>
                                                        <ul>
                                                            <li>Khung kết cấu thép</li>
                                                            <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                            <li>Chông thấm: Tole</li>
                                                            <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                            <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                            <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <label>Số phòng</label>
                                                    <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                </li>
                                                <li>
                                                    <label>Tiện nghi</label>
                                                    <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                </li>
                                                <li>
                                                    <label>Diện tích</label>
                                                    <div>48m2</div>
                                                </li>
                                                <li>
                                                    <label>Sức chứa</label>
                                                    <div>03 người lớn, 01 trẻ em</div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="button-link bg-green">Tự thiết kế</a>
                                            <a href="#" data-id="1" class="button-link get-detail-popup" data-toggle="modal" data-target="#product-wrapper">Thông số chi tiết</a>
                                            <a href="#" data-id="1" class="button-link get-compare-popup" data-toggle="modal" data-target="#product-compare">So sánh</a>
                                        </div>
                                    </div>
                                    <div class="hidden">
                                        <div class="row detail-popup">
                                            <div class="col-sm-7">
                                                <h3 class="popup-title">Thông số chi tiết</h3>
                                                <ul class="detail-popup-ul">
                                                    <li>
                                                        <label>Công nghệ</label>
                                                        <div>
                                                            <ul>
                                                                <li>Khung kết cấu thép</li>
                                                                <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                                <li>Chông thấm: Tole</li>
                                                                <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                                <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                                <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống nước</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống điện</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Công năng</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Bếp</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị vệ sinh</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Vật dụng khác</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Vận chuyển</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Bảo hành</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Diện tích sàn</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Kích thước</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Độ cao trần</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Sức chứa</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Giao hàng</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="product-tech-img"><img src="{{asset('fe_template/images/techimg.jpg')}}" alt="" /></div>
                                                <div class="popup-action">
                                                    <a href="#" class="button-link bg-green">Tự thiết kế</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product-->
                            <!--product-->
                            <div class="container">
                                <div class="product-item clearfix" data-id="2">
                                    <div class="product-item-left">
                                        <picture class="product-larger-thumb">
                                            <img src="{{asset('fe_template/images/product/1.jpg')}}" alt="930x845" />
                                        </picture>
                                        <div class="product-small-thumb">
                                            <div class="owl-carousel">
                                                <a href="#"><img data-larger="images/product/1.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/1.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/2.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/2.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/3.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/3.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/4.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/4.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/5.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/5.jpg')}}" alt="145x100" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item-right">
                                        <h3 class="product-name"><a href="#">Trio House</a></h3>
                                        <div class="product-description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                        <ul class="product-information clearfix">
                                            <li>
                                                Chiều dài
                                                <strong>201.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều rộng
                                                <strong>101.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều cao
                                                <strong>11<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Diện tích
                                                <strong>48<sup>m2</sup></strong>
                                            </li>
                                        </ul>
                                        <div class="product-featured">
                                            <ul>
                                                <li>
                                                    <label>Công nghệ</label>
                                                    <div>
                                                        <ul>
                                                            <li>Khung kết cấu thép</li>
                                                            <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                            <li>Chông thấm: Tole</li>
                                                            <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                            <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                            <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <label>Số phòng</label>
                                                    <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                </li>
                                                <li>
                                                    <label>Tiện nghi</label>
                                                    <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                </li>
                                                <li>
                                                    <label>Diện tích</label>
                                                    <div>48m2</div>
                                                </li>
                                                <li>
                                                    <label>Sức chứa</label>
                                                    <div>03 người lớn, 01 trẻ em</div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="button-link bg-green">Tự thiết kế</a>
                                            <a href="#" data-id="1" class="button-link get-detail-popup" data-toggle="modal" data-target="#product-wrapper">Thông số chi tiết</a>
                                            <a href="#" data-id="1" class="button-link get-compare-popup" data-toggle="modal" data-target="#product-compare">So sánh</a>
                                        </div>
                                    </div>
                                    <div class="hidden">
                                        <div class="row detail-popup">
                                            <div class="col-sm-7">
                                                <h3 class="popup-title">Thông số chi tiết</h3>
                                                <ul class="detail-popup-ul">
                                                    <li>
                                                        <label>Công nghệ</label>
                                                        <div>
                                                            <ul>
                                                                <li>Khung kết cấu thép</li>
                                                                <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                                <li>Chông thấm: Tole</li>
                                                                <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                                <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                                <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống nước</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống điện</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Công năng</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Bếp</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị vệ sinh</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Vật dụng khác</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Vận chuyển</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Bảo hành</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Diện tích sàn</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Kích thước</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Độ cao trần</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Sức chứa</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Giao hàng</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="product-tech-img"><img src="{{asset('fe_template/images/techimg.jpg')}}" alt="" /></div>
                                                <div class="popup-action">
                                                    <a href="#" class="button-link bg-green">Tự thiết kế</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product-->
                            <!--product-->
                            <div class="container">
                                <div class="product-item clearfix" data-id="5">
                                    <div class="product-item-left">
                                        <picture class="product-larger-thumb">
                                            <img src="{{asset('fe_template/images/product/1.jpg')}}" alt="930x845" />
                                        </picture>
                                        <div class="product-small-thumb">
                                            <div class="owl-carousel">
                                                <a href="#"><img data-larger="images/product/1.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/1.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/2.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/2.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/3.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/3.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/4.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/4.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/5.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/5.jpg')}}" alt="145x100" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item-right">
                                        <h3 class="product-name"><a href="#">Trio House</a></h3>
                                        <div class="product-description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                        <ul class="product-information clearfix">
                                            <li>
                                                Chiều dài
                                                <strong>201.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều rộng
                                                <strong>101.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều cao
                                                <strong>11<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Diện tích
                                                <strong>48<sup>m2</sup></strong>
                                            </li>
                                        </ul>
                                        <div class="product-featured">
                                            <ul>
                                                <li>
                                                    <label>Công nghệ</label>
                                                    <div>
                                                        <ul>
                                                            <li>Khung kết cấu thép</li>
                                                            <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                            <li>Chông thấm: Tole</li>
                                                            <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                            <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                            <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <label>Số phòng</label>
                                                    <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                </li>
                                                <li>
                                                    <label>Tiện nghi</label>
                                                    <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                </li>
                                                <li>
                                                    <label>Diện tích</label>
                                                    <div>48m2</div>
                                                </li>
                                                <li>
                                                    <label>Sức chứa</label>
                                                    <div>03 người lớn, 01 trẻ em</div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="button-link bg-green">Tự thiết kế</a>
                                            <a href="#" data-id="1" class="button-link get-detail-popup" data-toggle="modal" data-target="#product-wrapper">Thông số chi tiết</a>
                                            <a href="#" data-id="1" class="button-link get-compare-popup" data-toggle="modal" data-target="#product-compare">So sánh</a>
                                        </div>
                                    </div>
                                    <div class="hidden">
                                        <div class="row detail-popup">
                                            <div class="col-sm-7">
                                                <h3 class="popup-title">Thông số chi tiết</h3>
                                                <ul class="detail-popup-ul">
                                                    <li>
                                                        <label>Công nghệ</label>
                                                        <div>
                                                            <ul>
                                                                <li>Khung kết cấu thép</li>
                                                                <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                                <li>Chông thấm: Tole</li>
                                                                <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                                <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                                <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống nước</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống điện</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Công năng</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Bếp</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị vệ sinh</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Vật dụng khác</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Vận chuyển</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Bảo hành</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Diện tích sàn</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Kích thước</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Độ cao trần</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Sức chứa</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Giao hàng</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="product-tech-img"><img src="{{asset('fe_template/images/techimg.jpg')}}" alt="" /></div>
                                                <div class="popup-action">
                                                    <a href="#" class="button-link bg-green">Tự thiết kế</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product-->
                            <!--product-->
                            <div class="container">
                                <div class="product-item clearfix" data-id="5">
                                    <div class="product-item-left">
                                        <picture class="product-larger-thumb">
                                            <img src="{{asset('fe_template/images/product/1.jpg')}}" alt="930x845" />
                                        </picture>
                                        <div class="product-small-thumb">
                                            <div class="owl-carousel">
                                                <a href="#"><img data-larger="images/product/1.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/1.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/2.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/2.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/3.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/3.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/4.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/4.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/5.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/5.jpg')}}" alt="145x100" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item-right">
                                        <h3 class="product-name"><a href="#">Trio House</a></h3>
                                        <div class="product-description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                        <ul class="product-information clearfix">
                                            <li>
                                                Chiều dài
                                                <strong>201.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều rộng
                                                <strong>101.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều cao
                                                <strong>11<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Diện tích
                                                <strong>48<sup>m2</sup></strong>
                                            </li>
                                        </ul>
                                        <div class="product-featured">
                                            <ul>
                                                <li>
                                                    <label>Công nghệ</label>
                                                    <div>
                                                        <ul>
                                                            <li>Khung kết cấu thép</li>
                                                            <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                            <li>Chông thấm: Tole</li>
                                                            <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                            <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                            <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <label>Số phòng</label>
                                                    <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                </li>
                                                <li>
                                                    <label>Tiện nghi</label>
                                                    <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                </li>
                                                <li>
                                                    <label>Diện tích</label>
                                                    <div>48m2</div>
                                                </li>
                                                <li>
                                                    <label>Sức chứa</label>
                                                    <div>03 người lớn, 01 trẻ em</div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="button-link bg-green">Tự thiết kế</a>
                                            <a href="#" data-id="1" class="button-link get-detail-popup" data-toggle="modal" data-target="#product-wrapper">Thông số chi tiết</a>
                                            <a href="#" data-id="1" class="button-link get-compare-popup" data-toggle="modal" data-target="#product-compare">So sánh</a>
                                        </div>
                                    </div>
                                    <div class="hidden">
                                        <div class="row detail-popup">
                                            <div class="col-sm-7">
                                                <h3 class="popup-title">Thông số chi tiết</h3>
                                                <ul class="detail-popup-ul">
                                                    <li>
                                                        <label>Công nghệ</label>
                                                        <div>
                                                            <ul>
                                                                <li>Khung kết cấu thép</li>
                                                                <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                                <li>Chông thấm: Tole</li>
                                                                <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                                <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                                <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống nước</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống điện</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Công năng</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Bếp</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị vệ sinh</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Vật dụng khác</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Vận chuyển</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Bảo hành</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Diện tích sàn</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Kích thước</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Độ cao trần</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Sức chứa</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Giao hàng</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="product-tech-img"><img src="{{asset('fe_template/images/techimg.jpg')}}" alt="" /></div>
                                                <div class="popup-action">
                                                    <a href="#" class="button-link bg-green">Tự thiết kế</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product-->
                            <!--product-->
                            <div class="container">
                                <div class="product-item clearfix" data-id="5">
                                    <div class="product-item-left">
                                        <picture class="product-larger-thumb">
                                            <img src="{{asset('fe_template/images/product/1.jpg')}}" alt="930x845" />
                                        </picture>
                                        <div class="product-small-thumb">
                                            <div class="owl-carousel">
                                                <a href="#"><img data-larger="images/product/1.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/1.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/2.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/2.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/3.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/3.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/4.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/4.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/5.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/5.jpg')}}" alt="145x100" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item-right">
                                        <h3 class="product-name"><a href="#">Trio House</a></h3>
                                        <div class="product-description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                        <ul class="product-information clearfix">
                                            <li>
                                                Chiều dài
                                                <strong>201.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều rộng
                                                <strong>101.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều cao
                                                <strong>11<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Diện tích
                                                <strong>48<sup>m2</sup></strong>
                                            </li>
                                        </ul>
                                        <div class="product-featured">
                                            <ul>
                                                <li>
                                                    <label>Công nghệ</label>
                                                    <div>
                                                        <ul>
                                                            <li>Khung kết cấu thép</li>
                                                            <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                            <li>Chông thấm: Tole</li>
                                                            <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                            <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                            <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <label>Số phòng</label>
                                                    <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                </li>
                                                <li>
                                                    <label>Tiện nghi</label>
                                                    <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                </li>
                                                <li>
                                                    <label>Diện tích</label>
                                                    <div>48m2</div>
                                                </li>
                                                <li>
                                                    <label>Sức chứa</label>
                                                    <div>03 người lớn, 01 trẻ em</div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="button-link bg-green">Tự thiết kế</a>
                                            <a href="#" data-id="1" class="button-link get-detail-popup" data-toggle="modal" data-target="#product-wrapper">Thông số chi tiết</a>
                                            <a href="#" data-id="1" class="button-link get-compare-popup" data-toggle="modal" data-target="#product-compare">So sánh</a>
                                        </div>
                                    </div>
                                    <div class="hidden">
                                        <div class="row detail-popup">
                                            <div class="col-sm-7">
                                                <h3 class="popup-title">Thông số chi tiết</h3>
                                                <ul class="detail-popup-ul">
                                                    <li>
                                                        <label>Công nghệ</label>
                                                        <div>
                                                            <ul>
                                                                <li>Khung kết cấu thép</li>
                                                                <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                                <li>Chông thấm: Tole</li>
                                                                <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                                <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                                <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống nước</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống điện</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Công năng</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Bếp</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị vệ sinh</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Vật dụng khác</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Vận chuyển</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Bảo hành</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Diện tích sàn</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Kích thước</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Độ cao trần</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Sức chứa</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Giao hàng</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="product-tech-img"><img src="{{asset('fe_template/images/techimg.jpg')}}" alt="" /></div>
                                                <div class="popup-action">
                                                    <a href="#" class="button-link bg-green">Tự thiết kế</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product-->
                            <!--product-->
                            <div class="container">
                                <div class="product-item clearfix" data-id="5">
                                    <div class="product-item-left">
                                        <picture class="product-larger-thumb">
                                            <img src="{{asset('fe_template/images/product/1.jpg')}}" alt="930x845" />
                                        </picture>
                                        <div class="product-small-thumb">
                                            <div class="owl-carousel">
                                                <a href="#"><img data-larger="images/product/1.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/1.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/2.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/2.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/3.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/3.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/4.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/4.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/5.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/5.jpg')}}" alt="145x100" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item-right">
                                        <h3 class="product-name"><a href="#">Trio House</a></h3>
                                        <div class="product-description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                        <ul class="product-information clearfix">
                                            <li>
                                                Chiều dài
                                                <strong>201.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều rộng
                                                <strong>101.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều cao
                                                <strong>11<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Diện tích
                                                <strong>48<sup>m2</sup></strong>
                                            </li>
                                        </ul>
                                        <div class="product-featured">
                                            <ul>
                                                <li>
                                                    <label>Công nghệ</label>
                                                    <div>
                                                        <ul>
                                                            <li>Khung kết cấu thép</li>
                                                            <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                            <li>Chông thấm: Tole</li>
                                                            <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                            <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                            <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <label>Số phòng</label>
                                                    <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                </li>
                                                <li>
                                                    <label>Tiện nghi</label>
                                                    <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                </li>
                                                <li>
                                                    <label>Diện tích</label>
                                                    <div>48m2</div>
                                                </li>
                                                <li>
                                                    <label>Sức chứa</label>
                                                    <div>03 người lớn, 01 trẻ em</div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="button-link bg-green">Tự thiết kế</a>
                                            <a href="#" data-id="1" class="button-link get-detail-popup" data-toggle="modal" data-target="#product-wrapper">Thông số chi tiết</a>
                                            <a href="#" data-id="1" class="button-link get-compare-popup" data-toggle="modal" data-target="#product-compare">So sánh</a>
                                        </div>
                                    </div>
                                    <div class="hidden">
                                        <div class="row detail-popup">
                                            <div class="col-sm-7">
                                                <h3 class="popup-title">Thông số chi tiết</h3>
                                                <ul class="detail-popup-ul">
                                                    <li>
                                                        <label>Công nghệ</label>
                                                        <div>
                                                            <ul>
                                                                <li>Khung kết cấu thép</li>
                                                                <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                                <li>Chông thấm: Tole</li>
                                                                <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                                <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                                <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống nước</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống điện</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Công năng</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Bếp</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị vệ sinh</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Vật dụng khác</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Vận chuyển</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Bảo hành</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Diện tích sàn</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Kích thước</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Độ cao trần</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Sức chứa</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Giao hàng</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="product-tech-img"><img src="{{asset('fe_template/images/techimg.jpg')}}" alt="" /></div>
                                                <div class="popup-action">
                                                    <a href="#" class="button-link bg-green">Tự thiết kế</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-tab-item">
                <div class="product-slider">
                    <div class="product-slider-content">
                        <div class="owl-carousel larger-carousel">
                            <!--product-->
                            <div class="container">
                                <div class="product-item clearfix" data-id="1">
                                    <div class="product-item-left">
                                        <picture class="product-larger-thumb">
                                            <img src="{{asset('fe_template/images/product/1.jpg')}}" alt="930x845" />
                                        </picture>
                                        <div class="product-small-thumb">
                                            <div class="owl-carousel">
                                                <a href="#"><img data-larger="images/product/1.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/1.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/2.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/2.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/3.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/3.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/4.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/4.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/5.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/5.jpg')}}" alt="145x100" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item-right">
                                        <h3 class="product-name"><a href="#">Trio House</a></h3>
                                        <div class="product-description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                        <ul class="product-information clearfix">
                                            <li>
                                                Chiều dài
                                                <strong>201.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều rộng
                                                <strong>101.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều cao
                                                <strong>11<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Diện tích
                                                <strong>48<sup>m2</sup></strong>
                                            </li>
                                        </ul>
                                        <div class="product-featured">
                                            <ul>
                                                <li>
                                                    <label>Công nghệ</label>
                                                    <div>
                                                        <ul>
                                                            <li>Khung kết cấu thép</li>
                                                            <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                            <li>Chông thấm: Tole</li>
                                                            <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                            <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                            <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <label>Số phòng</label>
                                                    <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                </li>
                                                <li>
                                                    <label>Tiện nghi</label>
                                                    <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                </li>
                                                <li>
                                                    <label>Diện tích</label>
                                                    <div>48m2</div>
                                                </li>
                                                <li>
                                                    <label>Sức chứa</label>
                                                    <div>03 người lớn, 01 trẻ em</div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="button-link bg-green">Tự thiết kế</a>
                                            <a href="#" data-id="1" class="button-link get-detail-popup" data-toggle="modal" data-target="#product-wrapper">Thông số chi tiết</a>
                                            <a href="#" data-id="1" class="button-link get-compare-popup" data-toggle="modal" data-target="#product-compare">So sánh</a>
                                        </div>
                                    </div>
                                    <div class="hidden">
                                        <div class="row detail-popup">
                                            <div class="col-sm-7">
                                                <h3 class="popup-title">Thông số chi tiết</h3>
                                                <ul class="detail-popup-ul">
                                                    <li>
                                                        <label>Công nghệ</label>
                                                        <div>
                                                            <ul>
                                                                <li>Khung kết cấu thép</li>
                                                                <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                                <li>Chông thấm: Tole</li>
                                                                <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                                <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                                <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống nước</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống điện</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Công năng</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Bếp</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị vệ sinh</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Vật dụng khác</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Vận chuyển</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Bảo hành</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Diện tích sàn</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Kích thước</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Độ cao trần</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Sức chứa</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Giao hàng</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="product-tech-img"><img src="{{asset('fe_template/images/techimg.jpg')}}" alt="" /></div>
                                                <div class="popup-action">
                                                    <a href="#" class="button-link bg-green">Tự thiết kế</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product-->
                            <!--product-->
                            <div class="container">
                                <div class="product-item clearfix" data-id="2">
                                    <div class="product-item-left">
                                        <picture class="product-larger-thumb">
                                            <img src="{{asset('fe_template/images/product/1.jpg')}}" alt="930x845" />
                                        </picture>
                                        <div class="product-small-thumb">
                                            <div class="owl-carousel">
                                                <a href="#"><img data-larger="images/product/1.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/1.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/2.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/2.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/3.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/3.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/4.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/4.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/5.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/5.jpg')}}" alt="145x100" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item-right">
                                        <h3 class="product-name"><a href="#">Trio House</a></h3>
                                        <div class="product-description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                        <ul class="product-information clearfix">
                                            <li>
                                                Chiều dài
                                                <strong>201.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều rộng
                                                <strong>101.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều cao
                                                <strong>11<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Diện tích
                                                <strong>48<sup>m2</sup></strong>
                                            </li>
                                        </ul>
                                        <div class="product-featured">
                                            <ul>
                                                <li>
                                                    <label>Công nghệ</label>
                                                    <div>
                                                        <ul>
                                                            <li>Khung kết cấu thép</li>
                                                            <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                            <li>Chông thấm: Tole</li>
                                                            <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                            <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                            <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <label>Số phòng</label>
                                                    <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                </li>
                                                <li>
                                                    <label>Tiện nghi</label>
                                                    <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                </li>
                                                <li>
                                                    <label>Diện tích</label>
                                                    <div>48m2</div>
                                                </li>
                                                <li>
                                                    <label>Sức chứa</label>
                                                    <div>03 người lớn, 01 trẻ em</div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="button-link bg-green">Tự thiết kế</a>
                                            <a href="#" data-id="1" class="button-link get-detail-popup" data-toggle="modal" data-target="#product-wrapper">Thông số chi tiết</a>
                                            <a href="#" data-id="1" class="button-link get-compare-popup" data-toggle="modal" data-target="#product-compare">So sánh</a>
                                        </div>
                                    </div>
                                    <div class="hidden">
                                        <div class="row detail-popup">
                                            <div class="col-sm-7">
                                                <h3 class="popup-title">Thông số chi tiết</h3>
                                                <ul class="detail-popup-ul">
                                                    <li>
                                                        <label>Công nghệ</label>
                                                        <div>
                                                            <ul>
                                                                <li>Khung kết cấu thép</li>
                                                                <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                                <li>Chông thấm: Tole</li>
                                                                <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                                <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                                <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống nước</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống điện</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Công năng</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Bếp</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị vệ sinh</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Vật dụng khác</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Vận chuyển</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Bảo hành</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Diện tích sàn</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Kích thước</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Độ cao trần</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Sức chứa</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Giao hàng</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="product-tech-img"><img src="{{asset('fe_template/images/techimg.jpg')}}" alt="" /></div>
                                                <div class="popup-action">
                                                    <a href="#" class="button-link bg-green">Tự thiết kế</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product-->
                            <!--product-->
                            <div class="container">
                                <div class="product-item clearfix" data-id="5">
                                    <div class="product-item-left">
                                        <picture class="product-larger-thumb">
                                            <img src="{{asset('fe_template/images/product/1.jpg')}}" alt="930x845" />
                                        </picture>
                                        <div class="product-small-thumb">
                                            <div class="owl-carousel">
                                                <a href="#"><img data-larger="images/product/1.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/1.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/2.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/2.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/3.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/3.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/4.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/4.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/5.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/5.jpg')}}" alt="145x100" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item-right">
                                        <h3 class="product-name"><a href="#">Trio House</a></h3>
                                        <div class="product-description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                        <ul class="product-information clearfix">
                                            <li>
                                                Chiều dài
                                                <strong>201.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều rộng
                                                <strong>101.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều cao
                                                <strong>11<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Diện tích
                                                <strong>48<sup>m2</sup></strong>
                                            </li>
                                        </ul>
                                        <div class="product-featured">
                                            <ul>
                                                <li>
                                                    <label>Công nghệ</label>
                                                    <div>
                                                        <ul>
                                                            <li>Khung kết cấu thép</li>
                                                            <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                            <li>Chông thấm: Tole</li>
                                                            <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                            <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                            <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <label>Số phòng</label>
                                                    <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                </li>
                                                <li>
                                                    <label>Tiện nghi</label>
                                                    <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                </li>
                                                <li>
                                                    <label>Diện tích</label>
                                                    <div>48m2</div>
                                                </li>
                                                <li>
                                                    <label>Sức chứa</label>
                                                    <div>03 người lớn, 01 trẻ em</div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="button-link bg-green">Tự thiết kế</a>
                                            <a href="#" data-id="1" class="button-link get-detail-popup" data-toggle="modal" data-target="#product-wrapper">Thông số chi tiết</a>
                                            <a href="#" data-id="1" class="button-link get-compare-popup" data-toggle="modal" data-target="#product-compare">So sánh</a>
                                        </div>
                                    </div>
                                    <div class="hidden">
                                        <div class="row detail-popup">
                                            <div class="col-sm-7">
                                                <h3 class="popup-title">Thông số chi tiết</h3>
                                                <ul class="detail-popup-ul">
                                                    <li>
                                                        <label>Công nghệ</label>
                                                        <div>
                                                            <ul>
                                                                <li>Khung kết cấu thép</li>
                                                                <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                                <li>Chông thấm: Tole</li>
                                                                <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                                <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                                <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống nước</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống điện</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Công năng</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Bếp</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị vệ sinh</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Vật dụng khác</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Vận chuyển</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Bảo hành</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Diện tích sàn</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Kích thước</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Độ cao trần</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Sức chứa</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Giao hàng</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="product-tech-img"><img src="{{asset('fe_template/images/techimg.jpg')}}" alt="" /></div>
                                                <div class="popup-action">
                                                    <a href="#" class="button-link bg-green">Tự thiết kế</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product-->
                            <!--product-->
                            <div class="container">
                                <div class="product-item clearfix" data-id="5">
                                    <div class="product-item-left">
                                        <picture class="product-larger-thumb">
                                            <img src="{{asset('fe_template/images/product/1.jpg')}}" alt="930x845" />
                                        </picture>
                                        <div class="product-small-thumb">
                                            <div class="owl-carousel">
                                                <a href="#"><img data-larger="images/product/1.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/1.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/2.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/2.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/3.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/3.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/4.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/4.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/5.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/5.jpg')}}" alt="145x100" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item-right">
                                        <h3 class="product-name"><a href="#">Trio House</a></h3>
                                        <div class="product-description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                        <ul class="product-information clearfix">
                                            <li>
                                                Chiều dài
                                                <strong>201.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều rộng
                                                <strong>101.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều cao
                                                <strong>11<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Diện tích
                                                <strong>48<sup>m2</sup></strong>
                                            </li>
                                        </ul>
                                        <div class="product-featured">
                                            <ul>
                                                <li>
                                                    <label>Công nghệ</label>
                                                    <div>
                                                        <ul>
                                                            <li>Khung kết cấu thép</li>
                                                            <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                            <li>Chông thấm: Tole</li>
                                                            <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                            <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                            <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <label>Số phòng</label>
                                                    <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                </li>
                                                <li>
                                                    <label>Tiện nghi</label>
                                                    <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                </li>
                                                <li>
                                                    <label>Diện tích</label>
                                                    <div>48m2</div>
                                                </li>
                                                <li>
                                                    <label>Sức chứa</label>
                                                    <div>03 người lớn, 01 trẻ em</div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="button-link bg-green">Tự thiết kế</a>
                                            <a href="#" data-id="1" class="button-link get-detail-popup" data-toggle="modal" data-target="#product-wrapper">Thông số chi tiết</a>
                                            <a href="#" data-id="1" class="button-link get-compare-popup" data-toggle="modal" data-target="#product-compare">So sánh</a>
                                        </div>
                                    </div>
                                    <div class="hidden">
                                        <div class="row detail-popup">
                                            <div class="col-sm-7">
                                                <h3 class="popup-title">Thông số chi tiết</h3>
                                                <ul class="detail-popup-ul">
                                                    <li>
                                                        <label>Công nghệ</label>
                                                        <div>
                                                            <ul>
                                                                <li>Khung kết cấu thép</li>
                                                                <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                                <li>Chông thấm: Tole</li>
                                                                <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                                <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                                <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống nước</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống điện</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Công năng</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Bếp</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị vệ sinh</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Vật dụng khác</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Vận chuyển</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Bảo hành</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Diện tích sàn</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Kích thước</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Độ cao trần</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Sức chứa</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Giao hàng</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="product-tech-img"><img src="{{asset('fe_template/images/techimg.jpg')}}" alt="" /></div>
                                                <div class="popup-action">
                                                    <a href="#" class="button-link bg-green">Tự thiết kế</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product-->
                            <!--product-->
                            <div class="container">
                                <div class="product-item clearfix" data-id="5">
                                    <div class="product-item-left">
                                        <picture class="product-larger-thumb">
                                            <img src="{{asset('fe_template/images/product/1.jpg')}}" alt="930x845" />
                                        </picture>
                                        <div class="product-small-thumb">
                                            <div class="owl-carousel">
                                                <a href="#"><img data-larger="images/product/1.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/1.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/2.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/2.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/3.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/3.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/4.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/4.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/5.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/5.jpg')}}" alt="145x100" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item-right">
                                        <h3 class="product-name"><a href="#">Trio House</a></h3>
                                        <div class="product-description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                        <ul class="product-information clearfix">
                                            <li>
                                                Chiều dài
                                                <strong>201.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều rộng
                                                <strong>101.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều cao
                                                <strong>11<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Diện tích
                                                <strong>48<sup>m2</sup></strong>
                                            </li>
                                        </ul>
                                        <div class="product-featured">
                                            <ul>
                                                <li>
                                                    <label>Công nghệ</label>
                                                    <div>
                                                        <ul>
                                                            <li>Khung kết cấu thép</li>
                                                            <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                            <li>Chông thấm: Tole</li>
                                                            <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                            <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                            <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <label>Số phòng</label>
                                                    <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                </li>
                                                <li>
                                                    <label>Tiện nghi</label>
                                                    <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                </li>
                                                <li>
                                                    <label>Diện tích</label>
                                                    <div>48m2</div>
                                                </li>
                                                <li>
                                                    <label>Sức chứa</label>
                                                    <div>03 người lớn, 01 trẻ em</div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="button-link bg-green">Tự thiết kế</a>
                                            <a href="#" data-id="1" class="button-link get-detail-popup" data-toggle="modal" data-target="#product-wrapper">Thông số chi tiết</a>
                                            <a href="#" data-id="1" class="button-link get-compare-popup" data-toggle="modal" data-target="#product-compare">So sánh</a>
                                        </div>
                                    </div>
                                    <div class="hidden">
                                        <div class="row detail-popup">
                                            <div class="col-sm-7">
                                                <h3 class="popup-title">Thông số chi tiết</h3>
                                                <ul class="detail-popup-ul">
                                                    <li>
                                                        <label>Công nghệ</label>
                                                        <div>
                                                            <ul>
                                                                <li>Khung kết cấu thép</li>
                                                                <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                                <li>Chông thấm: Tole</li>
                                                                <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                                <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                                <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống nước</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống điện</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Công năng</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Bếp</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị vệ sinh</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Vật dụng khác</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Vận chuyển</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Bảo hành</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Diện tích sàn</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Kích thước</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Độ cao trần</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Sức chứa</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Giao hàng</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="product-tech-img"><img src="{{asset('fe_template/images/techimg.jpg')}}" alt="" /></div>
                                                <div class="popup-action">
                                                    <a href="#" class="button-link bg-green">Tự thiết kế</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product-->
                            <!--product-->
                            <div class="container">
                                <div class="product-item clearfix" data-id="5">
                                    <div class="product-item-left">
                                        <picture class="product-larger-thumb">
                                            <img src="{{asset('fe_template/images/product/1.jpg')}}" alt="930x845" />
                                        </picture>
                                        <div class="product-small-thumb">
                                            <div class="owl-carousel">
                                                <a href="#"><img data-larger="images/product/1.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/1.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/2.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/2.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/3.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/3.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/4.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/4.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/5.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/5.jpg')}}" alt="145x100" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item-right">
                                        <h3 class="product-name"><a href="#">Trio House</a></h3>
                                        <div class="product-description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                        <ul class="product-information clearfix">
                                            <li>
                                                Chiều dài
                                                <strong>201.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều rộng
                                                <strong>101.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều cao
                                                <strong>11<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Diện tích
                                                <strong>48<sup>m2</sup></strong>
                                            </li>
                                        </ul>
                                        <div class="product-featured">
                                            <ul>
                                                <li>
                                                    <label>Công nghệ</label>
                                                    <div>
                                                        <ul>
                                                            <li>Khung kết cấu thép</li>
                                                            <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                            <li>Chông thấm: Tole</li>
                                                            <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                            <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                            <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <label>Số phòng</label>
                                                    <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                </li>
                                                <li>
                                                    <label>Tiện nghi</label>
                                                    <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                </li>
                                                <li>
                                                    <label>Diện tích</label>
                                                    <div>48m2</div>
                                                </li>
                                                <li>
                                                    <label>Sức chứa</label>
                                                    <div>03 người lớn, 01 trẻ em</div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="button-link bg-green">Tự thiết kế</a>
                                            <a href="#" data-id="1" class="button-link get-detail-popup" data-toggle="modal" data-target="#product-wrapper">Thông số chi tiết</a>
                                            <a href="#" data-id="1" class="button-link get-compare-popup" data-toggle="modal" data-target="#product-compare">So sánh</a>
                                        </div>
                                    </div>
                                    <div class="hidden">
                                        <div class="row detail-popup">
                                            <div class="col-sm-7">
                                                <h3 class="popup-title">Thông số chi tiết</h3>
                                                <ul class="detail-popup-ul">
                                                    <li>
                                                        <label>Công nghệ</label>
                                                        <div>
                                                            <ul>
                                                                <li>Khung kết cấu thép</li>
                                                                <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                                <li>Chông thấm: Tole</li>
                                                                <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                                <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                                <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống nước</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống điện</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Công năng</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Bếp</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị vệ sinh</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Vật dụng khác</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Vận chuyển</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Bảo hành</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Diện tích sàn</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Kích thước</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Độ cao trần</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Sức chứa</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Giao hàng</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="product-tech-img"><img src="{{asset('fe_template/images/techimg.jpg')}}" alt="" /></div>
                                                <div class="popup-action">
                                                    <a href="#" class="button-link bg-green">Tự thiết kế</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-tab-item">
                <div class="product-slider">
                    <div class="product-slider-content">
                        <div class="owl-carousel larger-carousel">
                            <!--product-->
                            <div class="container">
                                <div class="product-item clearfix" data-id="1">
                                    <div class="product-item-left">
                                        <picture class="product-larger-thumb">
                                            <img src="{{asset('fe_template/images/product/1.jpg')}}" alt="930x845" />
                                        </picture>
                                        <div class="product-small-thumb">
                                            <div class="owl-carousel">
                                                <a href="#"><img data-larger="images/product/1.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/1.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/2.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/2.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/3.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/3.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/4.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/4.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/5.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/5.jpg')}}" alt="145x100" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item-right">
                                        <h3 class="product-name"><a href="#">Trio House</a></h3>
                                        <div class="product-description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                        <ul class="product-information clearfix">
                                            <li>
                                                Chiều dài
                                                <strong>201.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều rộng
                                                <strong>101.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều cao
                                                <strong>11<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Diện tích
                                                <strong>48<sup>m2</sup></strong>
                                            </li>
                                        </ul>
                                        <div class="product-featured">
                                            <ul>
                                                <li>
                                                    <label>Công nghệ</label>
                                                    <div>
                                                        <ul>
                                                            <li>Khung kết cấu thép</li>
                                                            <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                            <li>Chông thấm: Tole</li>
                                                            <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                            <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                            <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <label>Số phòng</label>
                                                    <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                </li>
                                                <li>
                                                    <label>Tiện nghi</label>
                                                    <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                </li>
                                                <li>
                                                    <label>Diện tích</label>
                                                    <div>48m2</div>
                                                </li>
                                                <li>
                                                    <label>Sức chứa</label>
                                                    <div>03 người lớn, 01 trẻ em</div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="button-link bg-green">Tự thiết kế</a>
                                            <a href="#" data-id="1" class="button-link get-detail-popup" data-toggle="modal" data-target="#product-wrapper">Thông số chi tiết</a>
                                            <a href="#" data-id="1" class="button-link get-compare-popup" data-toggle="modal" data-target="#product-compare">So sánh</a>
                                        </div>
                                    </div>
                                    <div class="hidden">
                                        <div class="row detail-popup">
                                            <div class="col-sm-7">
                                                <h3 class="popup-title">Thông số chi tiết</h3>
                                                <ul class="detail-popup-ul">
                                                    <li>
                                                        <label>Công nghệ</label>
                                                        <div>
                                                            <ul>
                                                                <li>Khung kết cấu thép</li>
                                                                <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                                <li>Chông thấm: Tole</li>
                                                                <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                                <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                                <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống nước</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống điện</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Công năng</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Bếp</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị vệ sinh</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Vật dụng khác</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Vận chuyển</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Bảo hành</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Diện tích sàn</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Kích thước</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Độ cao trần</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Sức chứa</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Giao hàng</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="product-tech-img"><img src="{{asset('fe_template/images/techimg.jpg')}}" alt="" /></div>
                                                <div class="popup-action">
                                                    <a href="#" class="button-link bg-green">Tự thiết kế</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product-->
                            <!--product-->
                            <div class="container">
                                <div class="product-item clearfix" data-id="2">
                                    <div class="product-item-left">
                                        <picture class="product-larger-thumb">
                                            <img src="{{asset('fe_template/images/product/1.jpg')}}" alt="930x845" />
                                        </picture>
                                        <div class="product-small-thumb">
                                            <div class="owl-carousel">
                                                <a href="#"><img data-larger="images/product/1.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/1.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/2.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/2.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/3.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/3.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/4.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/4.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/5.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/5.jpg')}}" alt="145x100" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item-right">
                                        <h3 class="product-name"><a href="#">Trio House</a></h3>
                                        <div class="product-description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                        <ul class="product-information clearfix">
                                            <li>
                                                Chiều dài
                                                <strong>201.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều rộng
                                                <strong>101.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều cao
                                                <strong>11<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Diện tích
                                                <strong>48<sup>m2</sup></strong>
                                            </li>
                                        </ul>
                                        <div class="product-featured">
                                            <ul>
                                                <li>
                                                    <label>Công nghệ</label>
                                                    <div>
                                                        <ul>
                                                            <li>Khung kết cấu thép</li>
                                                            <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                            <li>Chông thấm: Tole</li>
                                                            <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                            <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                            <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <label>Số phòng</label>
                                                    <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                </li>
                                                <li>
                                                    <label>Tiện nghi</label>
                                                    <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                </li>
                                                <li>
                                                    <label>Diện tích</label>
                                                    <div>48m2</div>
                                                </li>
                                                <li>
                                                    <label>Sức chứa</label>
                                                    <div>03 người lớn, 01 trẻ em</div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="button-link bg-green">Tự thiết kế</a>
                                            <a href="#" data-id="1" class="button-link get-detail-popup" data-toggle="modal" data-target="#product-wrapper">Thông số chi tiết</a>
                                            <a href="#" data-id="1" class="button-link get-compare-popup" data-toggle="modal" data-target="#product-compare">So sánh</a>
                                        </div>
                                    </div>
                                    <div class="hidden">
                                        <div class="row detail-popup">
                                            <div class="col-sm-7">
                                                <h3 class="popup-title">Thông số chi tiết</h3>
                                                <ul class="detail-popup-ul">
                                                    <li>
                                                        <label>Công nghệ</label>
                                                        <div>
                                                            <ul>
                                                                <li>Khung kết cấu thép</li>
                                                                <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                                <li>Chông thấm: Tole</li>
                                                                <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                                <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                                <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống nước</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống điện</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Công năng</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Bếp</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị vệ sinh</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Vật dụng khác</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Vận chuyển</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Bảo hành</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Diện tích sàn</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Kích thước</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Độ cao trần</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Sức chứa</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Giao hàng</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="product-tech-img"><img src="{{asset('fe_template/images/techimg.jpg')}}" alt="" /></div>
                                                <div class="popup-action">
                                                    <a href="#" class="button-link bg-green">Tự thiết kế</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product-->
                            <!--product-->
                            <div class="container">
                                <div class="product-item clearfix" data-id="5">
                                    <div class="product-item-left">
                                        <picture class="product-larger-thumb">
                                            <img src="{{asset('fe_template/images/product/1.jpg')}}" alt="930x845" />
                                        </picture>
                                        <div class="product-small-thumb">
                                            <div class="owl-carousel">
                                                <a href="#"><img data-larger="images/product/1.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/1.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/2.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/2.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/3.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/3.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/4.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/4.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/5.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/5.jpg')}}" alt="145x100" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item-right">
                                        <h3 class="product-name"><a href="#">Trio House</a></h3>
                                        <div class="product-description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                        <ul class="product-information clearfix">
                                            <li>
                                                Chiều dài
                                                <strong>201.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều rộng
                                                <strong>101.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều cao
                                                <strong>11<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Diện tích
                                                <strong>48<sup>m2</sup></strong>
                                            </li>
                                        </ul>
                                        <div class="product-featured">
                                            <ul>
                                                <li>
                                                    <label>Công nghệ</label>
                                                    <div>
                                                        <ul>
                                                            <li>Khung kết cấu thép</li>
                                                            <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                            <li>Chông thấm: Tole</li>
                                                            <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                            <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                            <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <label>Số phòng</label>
                                                    <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                </li>
                                                <li>
                                                    <label>Tiện nghi</label>
                                                    <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                </li>
                                                <li>
                                                    <label>Diện tích</label>
                                                    <div>48m2</div>
                                                </li>
                                                <li>
                                                    <label>Sức chứa</label>
                                                    <div>03 người lớn, 01 trẻ em</div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="button-link bg-green">Tự thiết kế</a>
                                            <a href="#" data-id="1" class="button-link get-detail-popup" data-toggle="modal" data-target="#product-wrapper">Thông số chi tiết</a>
                                            <a href="#" data-id="1" class="button-link get-compare-popup" data-toggle="modal" data-target="#product-compare">So sánh</a>
                                        </div>
                                    </div>
                                    <div class="hidden">
                                        <div class="row detail-popup">
                                            <div class="col-sm-7">
                                                <h3 class="popup-title">Thông số chi tiết</h3>
                                                <ul class="detail-popup-ul">
                                                    <li>
                                                        <label>Công nghệ</label>
                                                        <div>
                                                            <ul>
                                                                <li>Khung kết cấu thép</li>
                                                                <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                                <li>Chông thấm: Tole</li>
                                                                <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                                <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                                <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống nước</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống điện</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Công năng</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Bếp</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị vệ sinh</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Vật dụng khác</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Vận chuyển</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Bảo hành</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Diện tích sàn</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Kích thước</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Độ cao trần</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Sức chứa</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Giao hàng</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="product-tech-img"><img src="{{asset('fe_template/images/techimg.jpg')}}" alt="" /></div>
                                                <div class="popup-action">
                                                    <a href="#" class="button-link bg-green">Tự thiết kế</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product-->
                            <!--product-->
                            <div class="container">
                                <div class="product-item clearfix" data-id="5">
                                    <div class="product-item-left">
                                        <picture class="product-larger-thumb">
                                            <img src="{{asset('fe_template/images/product/1.jpg')}}" alt="930x845" />
                                        </picture>
                                        <div class="product-small-thumb">
                                            <div class="owl-carousel">
                                                <a href="#"><img data-larger="images/product/1.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/1.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/2.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/2.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/3.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/3.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/4.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/4.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/5.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/5.jpg')}}" alt="145x100" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item-right">
                                        <h3 class="product-name"><a href="#">Trio House</a></h3>
                                        <div class="product-description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                        <ul class="product-information clearfix">
                                            <li>
                                                Chiều dài
                                                <strong>201.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều rộng
                                                <strong>101.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều cao
                                                <strong>11<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Diện tích
                                                <strong>48<sup>m2</sup></strong>
                                            </li>
                                        </ul>
                                        <div class="product-featured">
                                            <ul>
                                                <li>
                                                    <label>Công nghệ</label>
                                                    <div>
                                                        <ul>
                                                            <li>Khung kết cấu thép</li>
                                                            <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                            <li>Chông thấm: Tole</li>
                                                            <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                            <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                            <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <label>Số phòng</label>
                                                    <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                </li>
                                                <li>
                                                    <label>Tiện nghi</label>
                                                    <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                </li>
                                                <li>
                                                    <label>Diện tích</label>
                                                    <div>48m2</div>
                                                </li>
                                                <li>
                                                    <label>Sức chứa</label>
                                                    <div>03 người lớn, 01 trẻ em</div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="button-link bg-green">Tự thiết kế</a>
                                            <a href="#" data-id="1" class="button-link get-detail-popup" data-toggle="modal" data-target="#product-wrapper">Thông số chi tiết</a>
                                            <a href="#" data-id="1" class="button-link get-compare-popup" data-toggle="modal" data-target="#product-compare">So sánh</a>
                                        </div>
                                    </div>
                                    <div class="hidden">
                                        <div class="row detail-popup">
                                            <div class="col-sm-7">
                                                <h3 class="popup-title">Thông số chi tiết</h3>
                                                <ul class="detail-popup-ul">
                                                    <li>
                                                        <label>Công nghệ</label>
                                                        <div>
                                                            <ul>
                                                                <li>Khung kết cấu thép</li>
                                                                <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                                <li>Chông thấm: Tole</li>
                                                                <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                                <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                                <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống nước</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống điện</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Công năng</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Bếp</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị vệ sinh</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Vật dụng khác</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Vận chuyển</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Bảo hành</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Diện tích sàn</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Kích thước</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Độ cao trần</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Sức chứa</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Giao hàng</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="product-tech-img"><img src="{{asset('fe_template/images/techimg.jpg')}}" alt="" /></div>
                                                <div class="popup-action">
                                                    <a href="#" class="button-link bg-green">Tự thiết kế</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product-->
                            <!--product-->
                            <div class="container">
                                <div class="product-item clearfix" data-id="5">
                                    <div class="product-item-left">
                                        <picture class="product-larger-thumb">
                                            <img src="{{asset('fe_template/images/product/1.jpg')}}" alt="930x845" />
                                        </picture>
                                        <div class="product-small-thumb">
                                            <div class="owl-carousel">
                                                <a href="#"><img data-larger="images/product/1.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/1.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/2.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/2.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/3.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/3.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/4.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/4.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/5.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/5.jpg')}}" alt="145x100" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item-right">
                                        <h3 class="product-name"><a href="#">Trio House</a></h3>
                                        <div class="product-description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                        <ul class="product-information clearfix">
                                            <li>
                                                Chiều dài
                                                <strong>201.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều rộng
                                                <strong>101.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều cao
                                                <strong>11<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Diện tích
                                                <strong>48<sup>m2</sup></strong>
                                            </li>
                                        </ul>
                                        <div class="product-featured">
                                            <ul>
                                                <li>
                                                    <label>Công nghệ</label>
                                                    <div>
                                                        <ul>
                                                            <li>Khung kết cấu thép</li>
                                                            <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                            <li>Chông thấm: Tole</li>
                                                            <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                            <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                            <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <label>Số phòng</label>
                                                    <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                </li>
                                                <li>
                                                    <label>Tiện nghi</label>
                                                    <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                </li>
                                                <li>
                                                    <label>Diện tích</label>
                                                    <div>48m2</div>
                                                </li>
                                                <li>
                                                    <label>Sức chứa</label>
                                                    <div>03 người lớn, 01 trẻ em</div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="button-link bg-green">Tự thiết kế</a>
                                            <a href="#" data-id="1" class="button-link get-detail-popup" data-toggle="modal" data-target="#product-wrapper">Thông số chi tiết</a>
                                            <a href="#" data-id="1" class="button-link get-compare-popup" data-toggle="modal" data-target="#product-compare">So sánh</a>
                                        </div>
                                    </div>
                                    <div class="hidden">
                                        <div class="row detail-popup">
                                            <div class="col-sm-7">
                                                <h3 class="popup-title">Thông số chi tiết</h3>
                                                <ul class="detail-popup-ul">
                                                    <li>
                                                        <label>Công nghệ</label>
                                                        <div>
                                                            <ul>
                                                                <li>Khung kết cấu thép</li>
                                                                <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                                <li>Chông thấm: Tole</li>
                                                                <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                                <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                                <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống nước</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống điện</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Công năng</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Bếp</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị vệ sinh</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Vật dụng khác</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Vận chuyển</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Bảo hành</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Diện tích sàn</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Kích thước</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Độ cao trần</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Sức chứa</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Giao hàng</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="product-tech-img"><img src="{{asset('fe_template/images/techimg.jpg')}}" alt="" /></div>
                                                <div class="popup-action">
                                                    <a href="#" class="button-link bg-green">Tự thiết kế</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product-->
                            <!--product-->
                            <div class="container">
                                <div class="product-item clearfix" data-id="5">
                                    <div class="product-item-left">
                                        <picture class="product-larger-thumb">
                                            <img src="{{asset('fe_template/images/product/1.jpg')}}" alt="930x845" />
                                        </picture>
                                        <div class="product-small-thumb">
                                            <div class="owl-carousel">
                                                <a href="#"><img data-larger="images/product/1.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/1.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/2.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/2.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/3.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/3.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/4.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/4.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/5.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/5.jpg')}}" alt="145x100" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item-right">
                                        <h3 class="product-name"><a href="#">Trio House</a></h3>
                                        <div class="product-description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                        <ul class="product-information clearfix">
                                            <li>
                                                Chiều dài
                                                <strong>201.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều rộng
                                                <strong>101.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều cao
                                                <strong>11<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Diện tích
                                                <strong>48<sup>m2</sup></strong>
                                            </li>
                                        </ul>
                                        <div class="product-featured">
                                            <ul>
                                                <li>
                                                    <label>Công nghệ</label>
                                                    <div>
                                                        <ul>
                                                            <li>Khung kết cấu thép</li>
                                                            <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                            <li>Chông thấm: Tole</li>
                                                            <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                            <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                            <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <label>Số phòng</label>
                                                    <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                </li>
                                                <li>
                                                    <label>Tiện nghi</label>
                                                    <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                </li>
                                                <li>
                                                    <label>Diện tích</label>
                                                    <div>48m2</div>
                                                </li>
                                                <li>
                                                    <label>Sức chứa</label>
                                                    <div>03 người lớn, 01 trẻ em</div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="button-link bg-green">Tự thiết kế</a>
                                            <a href="#" data-id="1" class="button-link get-detail-popup" data-toggle="modal" data-target="#product-wrapper">Thông số chi tiết</a>
                                            <a href="#" data-id="1" class="button-link get-compare-popup" data-toggle="modal" data-target="#product-compare">So sánh</a>
                                        </div>
                                    </div>
                                    <div class="hidden">
                                        <div class="row detail-popup">
                                            <div class="col-sm-7">
                                                <h3 class="popup-title">Thông số chi tiết</h3>
                                                <ul class="detail-popup-ul">
                                                    <li>
                                                        <label>Công nghệ</label>
                                                        <div>
                                                            <ul>
                                                                <li>Khung kết cấu thép</li>
                                                                <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                                <li>Chông thấm: Tole</li>
                                                                <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                                <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                                <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống nước</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống điện</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Công năng</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Bếp</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị vệ sinh</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Vật dụng khác</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Vận chuyển</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Bảo hành</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Diện tích sàn</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Kích thước</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Độ cao trần</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Sức chứa</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Giao hàng</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="product-tech-img"><img src="{{asset('fe_template/images/techimg.jpg')}}" alt="" /></div>
                                                <div class="popup-action">
                                                    <a href="#" class="button-link bg-green">Tự thiết kế</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-tab-item">
                <div class="product-slider">
                    <div class="product-slider-content">
                        <div class="owl-carousel larger-carousel">
                            <!--product-->
                            <div class="container">
                                <div class="product-item clearfix" data-id="1">
                                    <div class="product-item-left">
                                        <picture class="product-larger-thumb">
                                            <img src="{{asset('fe_template/images/product/1.jpg')}}" alt="930x845" />
                                        </picture>
                                        <div class="product-small-thumb">
                                            <div class="owl-carousel">
                                                <a href="#"><img data-larger="images/product/1.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/1.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/2.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/2.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/3.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/3.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/4.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/4.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/5.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/5.jpg')}}" alt="145x100" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item-right">
                                        <h3 class="product-name"><a href="#">Trio House</a></h3>
                                        <div class="product-description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                        <ul class="product-information clearfix">
                                            <li>
                                                Chiều dài
                                                <strong>201.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều rộng
                                                <strong>101.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều cao
                                                <strong>11<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Diện tích
                                                <strong>48<sup>m2</sup></strong>
                                            </li>
                                        </ul>
                                        <div class="product-featured">
                                            <ul>
                                                <li>
                                                    <label>Công nghệ</label>
                                                    <div>
                                                        <ul>
                                                            <li>Khung kết cấu thép</li>
                                                            <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                            <li>Chông thấm: Tole</li>
                                                            <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                            <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                            <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <label>Số phòng</label>
                                                    <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                </li>
                                                <li>
                                                    <label>Tiện nghi</label>
                                                    <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                </li>
                                                <li>
                                                    <label>Diện tích</label>
                                                    <div>48m2</div>
                                                </li>
                                                <li>
                                                    <label>Sức chứa</label>
                                                    <div>03 người lớn, 01 trẻ em</div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="button-link bg-green">Tự thiết kế</a>
                                            <a href="#" data-id="1" class="button-link get-detail-popup" data-toggle="modal" data-target="#product-wrapper">Thông số chi tiết</a>
                                            <a href="#" data-id="1" class="button-link get-compare-popup" data-toggle="modal" data-target="#product-compare">So sánh</a>
                                        </div>
                                    </div>
                                    <div class="hidden">
                                        <div class="row detail-popup">
                                            <div class="col-sm-7">
                                                <h3 class="popup-title">Thông số chi tiết</h3>
                                                <ul class="detail-popup-ul">
                                                    <li>
                                                        <label>Công nghệ</label>
                                                        <div>
                                                            <ul>
                                                                <li>Khung kết cấu thép</li>
                                                                <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                                <li>Chông thấm: Tole</li>
                                                                <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                                <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                                <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống nước</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống điện</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Công năng</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Bếp</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị vệ sinh</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Vật dụng khác</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Vận chuyển</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Bảo hành</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Diện tích sàn</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Kích thước</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Độ cao trần</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Sức chứa</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Giao hàng</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="product-tech-img"><img src="{{asset('fe_template/images/techimg.jpg')}}" alt="" /></div>
                                                <div class="popup-action">
                                                    <a href="#" class="button-link bg-green">Tự thiết kế</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product-->
                            <!--product-->
                            <div class="container">
                                <div class="product-item clearfix" data-id="2">
                                    <div class="product-item-left">
                                        <picture class="product-larger-thumb">
                                            <img src="{{asset('fe_template/images/product/1.jpg')}}" alt="930x845" />
                                        </picture>
                                        <div class="product-small-thumb">
                                            <div class="owl-carousel">
                                                <a href="#"><img data-larger="images/product/1.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/1.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/2.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/2.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/3.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/3.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/4.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/4.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/5.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/5.jpg')}}" alt="145x100" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item-right">
                                        <h3 class="product-name"><a href="#">Trio House</a></h3>
                                        <div class="product-description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                        <ul class="product-information clearfix">
                                            <li>
                                                Chiều dài
                                                <strong>201.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều rộng
                                                <strong>101.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều cao
                                                <strong>11<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Diện tích
                                                <strong>48<sup>m2</sup></strong>
                                            </li>
                                        </ul>
                                        <div class="product-featured">
                                            <ul>
                                                <li>
                                                    <label>Công nghệ</label>
                                                    <div>
                                                        <ul>
                                                            <li>Khung kết cấu thép</li>
                                                            <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                            <li>Chông thấm: Tole</li>
                                                            <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                            <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                            <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <label>Số phòng</label>
                                                    <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                </li>
                                                <li>
                                                    <label>Tiện nghi</label>
                                                    <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                </li>
                                                <li>
                                                    <label>Diện tích</label>
                                                    <div>48m2</div>
                                                </li>
                                                <li>
                                                    <label>Sức chứa</label>
                                                    <div>03 người lớn, 01 trẻ em</div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="button-link bg-green">Tự thiết kế</a>
                                            <a href="#" data-id="1" class="button-link get-detail-popup" data-toggle="modal" data-target="#product-wrapper">Thông số chi tiết</a>
                                            <a href="#" data-id="1" class="button-link get-compare-popup" data-toggle="modal" data-target="#product-compare">So sánh</a>
                                        </div>
                                    </div>
                                    <div class="hidden">
                                        <div class="row detail-popup">
                                            <div class="col-sm-7">
                                                <h3 class="popup-title">Thông số chi tiết</h3>
                                                <ul class="detail-popup-ul">
                                                    <li>
                                                        <label>Công nghệ</label>
                                                        <div>
                                                            <ul>
                                                                <li>Khung kết cấu thép</li>
                                                                <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                                <li>Chông thấm: Tole</li>
                                                                <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                                <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                                <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống nước</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống điện</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Công năng</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Bếp</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị vệ sinh</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Vật dụng khác</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Vận chuyển</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Bảo hành</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Diện tích sàn</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Kích thước</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Độ cao trần</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Sức chứa</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Giao hàng</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="product-tech-img"><img src="{{asset('fe_template/images/techimg.jpg')}}" alt="" /></div>
                                                <div class="popup-action">
                                                    <a href="#" class="button-link bg-green">Tự thiết kế</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product-->
                            <!--product-->
                            <div class="container">
                                <div class="product-item clearfix" data-id="5">
                                    <div class="product-item-left">
                                        <picture class="product-larger-thumb">
                                            <img src="{{asset('fe_template/images/product/1.jpg')}}" alt="930x845" />
                                        </picture>
                                        <div class="product-small-thumb">
                                            <div class="owl-carousel">
                                                <a href="#"><img data-larger="images/product/1.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/1.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/2.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/2.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/3.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/3.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/4.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/4.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/5.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/5.jpg')}}" alt="145x100" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item-right">
                                        <h3 class="product-name"><a href="#">Trio House</a></h3>
                                        <div class="product-description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                        <ul class="product-information clearfix">
                                            <li>
                                                Chiều dài
                                                <strong>201.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều rộng
                                                <strong>101.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều cao
                                                <strong>11<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Diện tích
                                                <strong>48<sup>m2</sup></strong>
                                            </li>
                                        </ul>
                                        <div class="product-featured">
                                            <ul>
                                                <li>
                                                    <label>Công nghệ</label>
                                                    <div>
                                                        <ul>
                                                            <li>Khung kết cấu thép</li>
                                                            <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                            <li>Chông thấm: Tole</li>
                                                            <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                            <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                            <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <label>Số phòng</label>
                                                    <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                </li>
                                                <li>
                                                    <label>Tiện nghi</label>
                                                    <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                </li>
                                                <li>
                                                    <label>Diện tích</label>
                                                    <div>48m2</div>
                                                </li>
                                                <li>
                                                    <label>Sức chứa</label>
                                                    <div>03 người lớn, 01 trẻ em</div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="button-link bg-green">Tự thiết kế</a>
                                            <a href="#" data-id="1" class="button-link get-detail-popup" data-toggle="modal" data-target="#product-wrapper">Thông số chi tiết</a>
                                            <a href="#" data-id="1" class="button-link get-compare-popup" data-toggle="modal" data-target="#product-compare">So sánh</a>
                                        </div>
                                    </div>
                                    <div class="hidden">
                                        <div class="row detail-popup">
                                            <div class="col-sm-7">
                                                <h3 class="popup-title">Thông số chi tiết</h3>
                                                <ul class="detail-popup-ul">
                                                    <li>
                                                        <label>Công nghệ</label>
                                                        <div>
                                                            <ul>
                                                                <li>Khung kết cấu thép</li>
                                                                <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                                <li>Chông thấm: Tole</li>
                                                                <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                                <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                                <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống nước</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống điện</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Công năng</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Bếp</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị vệ sinh</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Vật dụng khác</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Vận chuyển</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Bảo hành</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Diện tích sàn</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Kích thước</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Độ cao trần</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Sức chứa</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Giao hàng</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="product-tech-img"><img src="{{asset('fe_template/images/techimg.jpg')}}" alt="" /></div>
                                                <div class="popup-action">
                                                    <a href="#" class="button-link bg-green">Tự thiết kế</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product-->
                            <!--product-->
                            <div class="container">
                                <div class="product-item clearfix" data-id="5">
                                    <div class="product-item-left">
                                        <picture class="product-larger-thumb">
                                            <img src="{{asset('fe_template/images/product/1.jpg')}}" alt="930x845" />
                                        </picture>
                                        <div class="product-small-thumb">
                                            <div class="owl-carousel">
                                                <a href="#"><img data-larger="images/product/1.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/1.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/2.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/2.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/3.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/3.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/4.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/4.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/5.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/5.jpg')}}" alt="145x100" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item-right">
                                        <h3 class="product-name"><a href="#">Trio House</a></h3>
                                        <div class="product-description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                        <ul class="product-information clearfix">
                                            <li>
                                                Chiều dài
                                                <strong>201.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều rộng
                                                <strong>101.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều cao
                                                <strong>11<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Diện tích
                                                <strong>48<sup>m2</sup></strong>
                                            </li>
                                        </ul>
                                        <div class="product-featured">
                                            <ul>
                                                <li>
                                                    <label>Công nghệ</label>
                                                    <div>
                                                        <ul>
                                                            <li>Khung kết cấu thép</li>
                                                            <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                            <li>Chông thấm: Tole</li>
                                                            <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                            <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                            <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <label>Số phòng</label>
                                                    <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                </li>
                                                <li>
                                                    <label>Tiện nghi</label>
                                                    <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                </li>
                                                <li>
                                                    <label>Diện tích</label>
                                                    <div>48m2</div>
                                                </li>
                                                <li>
                                                    <label>Sức chứa</label>
                                                    <div>03 người lớn, 01 trẻ em</div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="button-link bg-green">Tự thiết kế</a>
                                            <a href="#" data-id="1" class="button-link get-detail-popup" data-toggle="modal" data-target="#product-wrapper">Thông số chi tiết</a>
                                            <a href="#" data-id="1" class="button-link get-compare-popup" data-toggle="modal" data-target="#product-compare">So sánh</a>
                                        </div>
                                    </div>
                                    <div class="hidden">
                                        <div class="row detail-popup">
                                            <div class="col-sm-7">
                                                <h3 class="popup-title">Thông số chi tiết</h3>
                                                <ul class="detail-popup-ul">
                                                    <li>
                                                        <label>Công nghệ</label>
                                                        <div>
                                                            <ul>
                                                                <li>Khung kết cấu thép</li>
                                                                <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                                <li>Chông thấm: Tole</li>
                                                                <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                                <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                                <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống nước</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống điện</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Công năng</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Bếp</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị vệ sinh</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Vật dụng khác</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Vận chuyển</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Bảo hành</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Diện tích sàn</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Kích thước</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Độ cao trần</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Sức chứa</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Giao hàng</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="product-tech-img"><img src="{{asset('fe_template/images/techimg.jpg')}}" alt="" /></div>
                                                <div class="popup-action">
                                                    <a href="#" class="button-link bg-green">Tự thiết kế</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product-->
                            <!--product-->
                            <div class="container">
                                <div class="product-item clearfix" data-id="5">
                                    <div class="product-item-left">
                                        <picture class="product-larger-thumb">
                                            <img src="{{asset('fe_template/images/product/1.jpg')}}" alt="930x845" />
                                        </picture>
                                        <div class="product-small-thumb">
                                            <div class="owl-carousel">
                                                <a href="#"><img data-larger="images/product/1.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/1.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/2.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/2.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/3.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/3.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/4.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/4.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/5.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/5.jpg')}}" alt="145x100" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item-right">
                                        <h3 class="product-name"><a href="#">Trio House</a></h3>
                                        <div class="product-description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                        <ul class="product-information clearfix">
                                            <li>
                                                Chiều dài
                                                <strong>201.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều rộng
                                                <strong>101.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều cao
                                                <strong>11<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Diện tích
                                                <strong>48<sup>m2</sup></strong>
                                            </li>
                                        </ul>
                                        <div class="product-featured">
                                            <ul>
                                                <li>
                                                    <label>Công nghệ</label>
                                                    <div>
                                                        <ul>
                                                            <li>Khung kết cấu thép</li>
                                                            <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                            <li>Chông thấm: Tole</li>
                                                            <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                            <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                            <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <label>Số phòng</label>
                                                    <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                </li>
                                                <li>
                                                    <label>Tiện nghi</label>
                                                    <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                </li>
                                                <li>
                                                    <label>Diện tích</label>
                                                    <div>48m2</div>
                                                </li>
                                                <li>
                                                    <label>Sức chứa</label>
                                                    <div>03 người lớn, 01 trẻ em</div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="button-link bg-green">Tự thiết kế</a>
                                            <a href="#" data-id="1" class="button-link get-detail-popup" data-toggle="modal" data-target="#product-wrapper">Thông số chi tiết</a>
                                            <a href="#" data-id="1" class="button-link get-compare-popup" data-toggle="modal" data-target="#product-compare">So sánh</a>
                                        </div>
                                    </div>
                                    <div class="hidden">
                                        <div class="row detail-popup">
                                            <div class="col-sm-7">
                                                <h3 class="popup-title">Thông số chi tiết</h3>
                                                <ul class="detail-popup-ul">
                                                    <li>
                                                        <label>Công nghệ</label>
                                                        <div>
                                                            <ul>
                                                                <li>Khung kết cấu thép</li>
                                                                <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                                <li>Chông thấm: Tole</li>
                                                                <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                                <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                                <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống nước</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống điện</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Công năng</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Bếp</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị vệ sinh</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Vật dụng khác</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Vận chuyển</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Bảo hành</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Diện tích sàn</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Kích thước</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Độ cao trần</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Sức chứa</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Giao hàng</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="product-tech-img"><img src="{{asset('fe_template/images/techimg.jpg')}}" alt="" /></div>
                                                <div class="popup-action">
                                                    <a href="#" class="button-link bg-green">Tự thiết kế</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product-->
                            <!--product-->
                            <div class="container">
                                <div class="product-item clearfix" data-id="5">
                                    <div class="product-item-left">
                                        <picture class="product-larger-thumb">
                                            <img src="{{asset('fe_template/images/product/1.jpg')}}" alt="930x845" />
                                        </picture>
                                        <div class="product-small-thumb">
                                            <div class="owl-carousel">
                                                <a href="#"><img data-larger="images/product/1.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/1.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/2.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/2.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/3.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/3.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/4.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/4.jpg')}}" alt="145x100" /></a>
                                                <a href="#"><img data-larger="images/product/5.jpg')}}" class="owl-lazy" data-src="{{asset('fe_template/images/product/5.jpg')}}" alt="145x100" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item-right">
                                        <h3 class="product-name"><a href="#">Trio House</a></h3>
                                        <div class="product-description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </div>
                                        <ul class="product-information clearfix">
                                            <li>
                                                Chiều dài
                                                <strong>201.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều rộng
                                                <strong>101.2<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Chiều cao
                                                <strong>11<sup>m</sup></strong>
                                            </li>
                                            <li>
                                                Diện tích
                                                <strong>48<sup>m2</sup></strong>
                                            </li>
                                        </ul>
                                        <div class="product-featured">
                                            <ul>
                                                <li>
                                                    <label>Công nghệ</label>
                                                    <div>
                                                        <ul>
                                                            <li>Khung kết cấu thép</li>
                                                            <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                            <li>Chông thấm: Tole</li>
                                                            <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                            <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                            <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <label>Số phòng</label>
                                                    <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                </li>
                                                <li>
                                                    <label>Tiện nghi</label>
                                                    <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                </li>
                                                <li>
                                                    <label>Diện tích</label>
                                                    <div>48m2</div>
                                                </li>
                                                <li>
                                                    <label>Sức chứa</label>
                                                    <div>03 người lớn, 01 trẻ em</div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="button-link bg-green">Tự thiết kế</a>
                                            <a href="#" data-id="1" class="button-link get-detail-popup" data-toggle="modal" data-target="#product-wrapper">Thông số chi tiết</a>
                                            <a href="#" data-id="1" class="button-link get-compare-popup" data-toggle="modal" data-target="#product-compare">So sánh</a>
                                        </div>
                                    </div>
                                    <div class="hidden">
                                        <div class="row detail-popup">
                                            <div class="col-sm-7">
                                                <h3 class="popup-title">Thông số chi tiết</h3>
                                                <ul class="detail-popup-ul">
                                                    <li>
                                                        <label>Công nghệ</label>
                                                        <div>
                                                            <ul>
                                                                <li>Khung kết cấu thép</li>
                                                                <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                                                <li>Chông thấm: Tole</li>
                                                                <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                                                <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                                                <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống nước</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Hệ thống điện</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Công năng</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Bếp</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Thiết bị vệ sinh</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Vật dụng khác</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Vận chuyển</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Bảo hành</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Diện tích sàn</label>
                                                        <div>01 phòng khách, 03 phòng ngủ lớn, 01 phòng vệ sinh</div>
                                                    </li>
                                                    <li>
                                                        <label>Kích thước</label>
                                                        <div>Điều hòa, tủ lạnh,  bếp, thiết bị vệ sinh, Sofa, TV, tủ </div>
                                                    </li>
                                                    <li>
                                                        <label>Độ cao trần</label>
                                                        <div>48m2</div>
                                                    </li>
                                                    <li>
                                                        <label>Sức chứa</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                    <li>
                                                        <label>Giao hàng</label>
                                                        <div>03 người lớn, 01 trẻ em</div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="product-tech-img"><img src="{{asset('fe_template/images/techimg.jpg')}}" alt="" /></div>
                                                <div class="popup-action">
                                                    <a href="#" class="button-link bg-green">Tự thiết kế</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end product-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade product-popup" id="product-wrapper" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="container">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal-body"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade product-popup" id="product-compare" tabindex="-2" role="dialog" aria-hidden="true">
        <div class="container">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal-body">
                        <!---->
                        <div class="row-compare header-row clearfix">
                            <label class="compare-label"></label>
                            <h3 class="page-title">So sánh sản phẩm</h3>
                        </div>
                        <!---->
                        <div class="row-compare header-row clearfix">
                            <label class="compare-label"></label>
                            <div class="row-sub-compare">
                                <div class="compare-column">
                                    <div class="compare-thumb">
                                        <a href="#"><img src="{{asset('fe_template/images/product/cp-1.jpg')}}" alt="420x250" /></a>
                                        <a href="#"><i class="fa fa-times"></i></a>
                                    </div>
                                </div>
                                <div class="compare-column">
                                    <div class="compare-thumb">
                                        <a href="#"><img src="{{asset('fe_template/images/product/cp-1.jpg')}}" alt="420x250" /></a>
                                        <a href="#"><i class="fa fa-times"></i></a>
                                    </div>
                                </div>
                                <div class="compare-column">
                                    <div class="compare-thumb not-product">
                                        <span onclick="window.location='link-trang-san-pham'"><strong>Thêm sản phẩm </strong><i class="fa fa-plus-circle"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!---->
                        <div class="row-compare clearfix">
                            <label class="compare-label">Tên sản phẩm</label>
                            <div class="row-sub-compare">
                                <div class="compare-column">
                                    <a href="#">Căn Trio</a>
                                </div>
                                <div class="compare-column">
                                    <a href="#">Căn Diamond</a>
                                </div>
                                <div class="compare-column">
                                </div>
                            </div>
                        </div>
                        <!---->
                        <div class="row-compare clearfix">
                            <label class="compare-label">Công nghệ</label>
                            <div class="row-sub-compare">
                                <div class="compare-column">
                                    <ul>
                                        <li>Khung kết cấu thép</li>
                                        <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                        <li>Chông thấm: Tole</li>
                                        <li>Hoàn thiện ngoài: Bitum/Tole/Gỗ/Bê tông</li>
                                        <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                        <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                    </ul>
                                </div>
                                <div class="compare-column">
                                    <ul>
                                        <li>Khung kết cấu thép</li>
                                        <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                        <li>Lớp tạo hình trong: Ván ép/gỗ</li>
                                        <li>Hoàn thiện trong: Kính/Tấm PVC/Gỗ</li>
                                    </ul>
                                </div>
                                <div class="compare-column">
                                </div>
                            </div>
                        </div>
                        <!---->
                        <div class="row-compare clearfix">
                            <label class="compare-label">Hệ thống nước</label>
                            <div class="row-sub-compare">
                                <div class="compare-column">
                                    Hoàn thiện
                                </div>
                                <div class="compare-column">
                                    Hoàn thiện
                                </div>
                                <div class="compare-column">

                                </div>
                            </div>
                        </div>
                        <!---->
                        <div class="row-compare clearfix">
                            <label class="compare-label">Hệ thống điện</label>
                            <div class="row-sub-compare">
                                <div class="compare-column">
                                    Hoàn thiện
                                </div>
                                <div class="compare-column">
                                    Hoàn thiện
                                </div>
                                <div class="compare-column">

                                </div>
                            </div>
                        </div>
                        <!---->
                        <div class="row-compare clearfix">
                            <label class="compare-label">Công năng</label>
                            <div class="row-sub-compare">
                                <div class="compare-column">
                                    <ul>
                                        <li>Khung kết cấu thép</li>
                                        <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                        <li>Chông thấm: Tole</li>
                                    </ul>
                                </div>
                                <div class="compare-column">
                                    <ul>
                                        <li>Khung kết cấu thép</li>
                                        <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                        <li>Chông thấm: Tole</li>
                                    </ul>
                                </div>
                                <div class="compare-column">

                                </div>
                            </div>
                        </div>
                        <!---->
                        <div class="row-compare clearfix">
                            <label class="compare-label">Bếp</label>
                            <div class="row-sub-compare">
                                <div class="compare-column">
                                    Có
                                </div>
                                <div class="compare-column">
                                    Có
                                </div>
                                <div class="compare-column">

                                </div>
                            </div>
                        </div>
                        <!---->
                        <div class="row-compare clearfix">
                            <label class="compare-label">Thiết bị</label>
                            <div class="row-sub-compare">
                                <div class="compare-column">
                                    <ul>
                                        <li>Khung kết cấu thép</li>
                                        <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                        <li>Chông thấm: Tole</li>
                                    </ul>
                                </div>
                                <div class="compare-column">
                                    <ul>
                                        <li>Khung kết cấu thép</li>
                                        <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                        <li>Chông thấm: Tole</li>
                                    </ul>
                                </div>
                                <div class="compare-column">

                                </div>
                            </div>
                        </div>
                        <!---->
                        <div class="row-compare clearfix">
                            <label class="compare-label">Thiết bị vệ sinh</label>
                            <div class="row-sub-compare">
                                <div class="compare-column">
                                    <ul>
                                        <li>Khung kết cấu thép</li>
                                        <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                        <li>Chông thấm: Tole</li>
                                    </ul>
                                </div>
                                <div class="compare-column">
                                    <ul>
                                        <li>Khung kết cấu thép</li>
                                        <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                        <li>Chông thấm: Tole</li>
                                    </ul>
                                </div>
                                <div class="compare-column">

                                </div>
                            </div>
                        </div>
                        <!---->
                        <div class="row-compare clearfix">
                            <label class="compare-label">Vật dụng khác</label>
                            <div class="row-sub-compare">
                                <div class="compare-column">
                                    <ul>
                                        <li>Khung kết cấu thép</li>
                                        <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                        <li>Chông thấm: Tole</li>
                                    </ul>
                                </div>
                                <div class="compare-column">
                                    <ul>
                                        <li>Khung kết cấu thép</li>
                                        <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                        <li>Chông thấm: Tole</li>
                                    </ul>
                                </div>
                                <div class="compare-column">

                                </div>
                            </div>
                        </div>
                        <!---->
                        <div class="row-compare clearfix">
                            <label class="compare-label">Vận chuyển</label>
                            <div class="row-sub-compare">
                                <div class="compare-column">
                                    Container
                                </div>
                                <div class="compare-column">
                                    Container
                                </div>
                                <div class="compare-column">

                                </div>
                            </div>
                        </div>
                        <!---->
                        <div class="row-compare clearfix">
                            <label class="compare-label">Bảo hành</label>
                            <div class="row-sub-compare">
                                <div class="compare-column">
                                    <ul>
                                        <li>Khung kết cấu thép</li>
                                        <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                        <li>Chông thấm: Tole</li>
                                    </ul>
                                </div>
                                <div class="compare-column">
                                    <ul>
                                        <li>Khung kết cấu thép</li>
                                        <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                        <li>Chông thấm: Tole</li>
                                    </ul>
                                </div>
                                <div class="compare-column">

                                </div>
                            </div>
                        </div>
                        <!---->
                        <div class="row-compare clearfix">
                            <label class="compare-label">Diện tích sàn</label>
                            <div class="row-sub-compare">
                                <div class="compare-column">
                                    7.2 m2
                                </div>
                                <div class="compare-column">
                                    7.2 m2
                                </div>
                                <div class="compare-column">

                                </div>
                            </div>
                        </div>
                        <!---->
                        <div class="row-compare clearfix">
                            <label class="compare-label">Kích thước</label>
                            <div class="row-sub-compare">
                                <div class="compare-column">
                                    <ul>
                                        <li>Khung kết cấu thép</li>
                                        <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                        <li>Chông thấm: Tole</li>
                                    </ul>
                                </div>
                                <div class="compare-column">
                                    <ul>
                                        <li>Khung kết cấu thép</li>
                                        <li>Cách âm, nhiệt: Bông, Thủy tinh</li>
                                        <li>Chông thấm: Tole</li>
                                    </ul>
                                </div>
                                <div class="compare-column">

                                </div>
                            </div>
                        </div>
                        <!---->
                        <div class="row-compare clearfix">
                            <label class="compare-label">Độ cao trần</label>
                            <div class="row-sub-compare">
                                <div class="compare-column">
                                    3.16m
                                </div>
                                <div class="compare-column">
                                    3.16m
                                </div>
                                <div class="compare-column">

                                </div>
                            </div>
                        </div>
                        <!---->
                        <div class="row-compare clearfix">
                            <label class="compare-label">Sức chứa</label>
                            <div class="row-sub-compare">
                                <div class="compare-column">
                                    2 người lớn
                                </div>
                                <div class="compare-column">
                                    2 người lớn
                                </div>
                                <div class="compare-column">

                                </div>
                            </div>
                        </div>
                        <!---->
                        <div class="row-compare clearfix">
                            <label class="compare-label">Giao hàng</label>
                            <div class="row-sub-compare">
                                <div class="compare-column">
                                    Giao hàng có thu phí
                                </div>
                                <div class="compare-column">
                                    Giao hàng có thu phí
                                </div>
                                <div class="compare-column">

                                </div>
                            </div>
                        </div>
                        <!---->
                        <div style="padding-top:20px">
                            <a href="#" class="button-link bg-green">Tự thiết kế</a>
                            <a href="#" class="button-link">Tiếp tục khám phá</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="coffee-section">
        <div class="container">
            <div class="coffee-left">
                <h3 class="coffee-title">Giải pháp kinh doanh <span>trọn gói chỉ với</span> <strong>180 triệu</strong></h3>
                <a href="coffee.html" class="button-link">Tìm hiểu ngay</a>
                <div class="nav-coffee-slider clearfix">
                    <button type="button" role="presentation" class="customPrevBtn slideraction">
                        <svg width="23" height="16" viewBox="0 0 23 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 8.00002L1.29289 8.70713L0.585787 8.00002L1.29289 7.29291L2 8.00002ZM22 7.00002C22.5523 7.00002 23 7.44774 23 8.00002C23 8.55231 22.5523 9.00002 22 9.00002L22 7.00002ZM7.95956 15.3738L1.29289 8.70713L2.70711 7.29291L9.37377 13.9596L7.95956 15.3738ZM1.29289 7.29291L7.95956 0.626248L9.37377 2.04046L2.70711 8.70713L1.29289 7.29291ZM2 7.00002L22 7.00002L22 9.00002L2 9.00002L2 7.00002Z" fill="#fff"/></svg>
                    </button>
                    <button type="button" role="presentation" class="customNextBtn slideraction">
                        <svg width="23" height="16" viewBox="0 0 23 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21 7.99998L21.7071 7.29287L22.4142 7.99998L21.7071 8.70709L21 7.99998ZM1 8.99998C0.447716 8.99998 0 8.55226 0 7.99998C0 7.44769 0.447716 6.99998 1 6.99998V8.99998ZM15.0404 0.626206L21.7071 7.29287L20.2929 8.70709L13.6262 2.04042L15.0404 0.626206ZM21.7071 8.70709L15.0404 15.3738L13.6262 13.9595L20.2929 7.29287L21.7071 8.70709ZM21 8.99998H1V6.99998H21V8.99998Z" fill="#fff"/></svg>
                    </button>
                </div>
            </div>
            <div class="coffee-right">
                <div class="coffee-right-content">
                    <div class="owl-carousel">
                        <picture>
                            <source media="(min-width: 1500px)" srcset="{{asset('fe_template/images/coffee/1.jpg')}}"> <!-- 1000x700 -->
                            <source media="(min-width: 1230px)" srcset="{{asset('fe_template/images/coffee/1.jpg')}}"> <!-- 680x520 -->
                            <source media="(min-width: 992px)" srcset="{{asset('fe_template/images/coffee/1.jpg')}}"> <!-- 730x510 -->
                            <img src="{{asset('fe_template/images/coffee/1.jpg')}}" alt="590x410" />
                        </picture>
                        <picture>
                            <source media="(min-width: 1500px)" srcset="{{asset('fe_template/images/coffee/2.jpg')}}"> <!-- 1000x700 -->
                            <source media="(min-width: 1230px)" srcset="{{asset('fe_template/images/coffee/2.jpg')}}"> <!-- 680x520 -->
                            <source media="(min-width: 992px)" srcset="{{asset('fe_template/images/coffee/2.jpg')}}"> <!-- 730x510 -->
                            <img src="{{asset('fe_template/images/coffee/2.jpg')}}" alt="590x410" />
                        </picture>
                        <picture>
                            <source media="(min-width: 1500px)" srcset="{{asset('fe_template/images/coffee/1.jpg')}}"> <!-- 1000x700 -->
                            <source media="(min-width: 1230px)" srcset="{{asset('fe_template/images/coffee/1.jpg')}}"> <!-- 680x520 -->
                            <source media="(min-width: 992px)" srcset="{{asset('fe_template/images/coffee/1.jpg')}}"> <!-- 730x510 -->
                            <img src="{{asset('fe_template/images/coffee/1.jpg')}}" alt="590x410" />
                        </picture>
                    </div>
                </div>
            </div>
        </div>
        <span><svg width="947" height="133" viewBox="0 0 947 133" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M22.4016 133C53.5939 133 76.2061 113.491 78.7087 86.1427L78.798 85.1628H52.5214L52.3426 86.0536C48.857 101.287 37.953 110.195 22.4016 110.195C1.75562 110.195 -11.4721 93.4474 -11.4721 66.3664V66.2773C-11.4721 39.3744 1.75562 22.8051 22.4016 22.8051C38.4893 22.8051 49.0357 32.0697 52.0745 46.2338L52.432 47.7482H78.7087L78.6193 46.9464C76.1168 19.6872 53.6833 0 22.4016 0C-15.2259 0 -39 24.9431 -39 66.3664V66.4555C-39 107.879 -15.3153 133 22.4016 133Z" fill="white" fill-opacity="0.1"/>
            <path d="M153.695 133C192.038 133 215.901 107.433 215.901 66.5445V66.3664C215.901 25.5666 191.949 0 153.695 0C115.532 0 91.4895 25.4776 91.4895 66.3664V66.5445C91.4895 107.433 115.353 133 153.695 133ZM153.695 110.195C132.513 110.195 119.017 93.4474 119.017 66.5445V66.3664C119.017 39.4635 132.603 22.8051 153.695 22.8051C174.878 22.8051 188.373 39.5526 188.373 66.3664V66.5445C188.373 93.1802 175.146 110.195 153.695 110.195Z" fill="white" fill-opacity="0.1"/>
            <path d="M233.33 130.773H260.232V46.5901H260.768L319.22 130.773H342.637V2.22706H315.735V85.7863H315.199L256.925 2.22706H233.33V130.773Z" fill="white" fill-opacity="0.1"/>
            <path d="M411.278 133C443.811 133 463.295 117.321 463.295 92.6457V92.5566C463.295 72.3349 451.14 61.3778 424.148 56.0328L410.474 53.2713C395.637 50.3315 389.023 45.6102 389.023 37.5037V37.4146C389.023 28.2391 397.335 21.9143 411.189 21.8252C424.506 21.8252 433.801 27.9719 435.142 38.0382L435.231 39.1072H460.703L460.614 37.4146C459.363 14.8768 441.04 0 411.189 0C382.588 0 362.032 15.5003 362.032 39.0181V39.1072C362.032 58.438 374.902 70.5532 400.374 75.6309L413.959 78.3034C429.958 81.5995 436.303 85.9645 436.303 94.6946V94.7837C436.303 104.583 426.919 111.086 411.993 111.086C397.246 111.086 386.61 104.85 384.912 94.8727L384.733 93.8928H359.261L359.35 95.3181C360.87 119.014 380.622 133 411.278 133Z" fill="white" fill-opacity="0.1"/>
            <path d="M538.014 133C576.356 133 600.22 107.433 600.22 66.5445V66.3664C600.22 25.5666 576.267 0 538.014 0C499.85 0 475.808 25.4776 475.808 66.3664V66.5445C475.808 107.433 499.671 133 538.014 133ZM538.014 110.195C516.832 110.195 503.336 93.4474 503.336 66.5445V66.3664C503.336 39.4635 516.921 22.8051 538.014 22.8051C559.196 22.8051 572.692 39.5526 572.692 66.3664V66.5445C572.692 93.1802 559.464 110.195 538.014 110.195Z" fill="white" fill-opacity="0.1"/>
            <path d="M617.648 130.773H701.036V108.591H644.64V2.22706H617.648V130.773Z" fill="white" fill-opacity="0.1"/>
            <path d="M708.812 130.773H737.144L746.886 99.5941H792.468L802.21 130.773H830.543L785.586 2.22706H753.858L708.812 130.773ZM769.409 27.1701H769.945L786.212 79.4615H753.143L769.409 27.1701Z" fill="white" fill-opacity="0.1"/>
            <path d="M843.77 130.773H870.762V84.1829H892.391L916.433 130.773H947L919.83 80.1741C934.13 74.562 943.157 60.4869 943.157 43.5613V43.3831C943.157 17.5492 925.997 2.22706 897.039 2.22706H843.77V130.773ZM870.762 63.783V23.2505H893.732C907.049 23.2505 915.54 31.0898 915.54 43.3831V43.5613C915.54 56.211 907.496 63.783 894.089 63.783H870.762Z" fill="white" fill-opacity="0.1"/>
            </svg></span>
    </section>
    <section class="gallery-section">
        <div class="container">
            <div class="homepage-title clearfix">
                <h2 class="home-title">Thư viện hình ảnh</h2>
            </div>
        </div>
        <div class="photo-grid-container">
            <div class="photo-grid-item">
                <img src="{{asset('fe_template/images/photos/1.jpg')}}">
                <div class="item_description">
                    <a href="gallery.html" class="pictures-title">Lorem Ipsum is simply dummy text</a>
                    <a href="#" class="button-link">Xem thêm ảnh</a>
                </div>
            </div>
            <div class="photo-grid-item">
                <img src="{{asset('fe_template/images/photos/2.jpg')}}">
                <div class="item_description">
                    <a href="gallery.html" class="pictures-title">Lorem Ipsum is simply dummy text</a>
                    <a href="#" class="button-link">Xem thêm ảnh</a>
                </div>
            </div>
            <div class="photo-grid-item">
                <img src="{{asset('fe_template/images/photos/3.jpg')}}">
                <div class="item_description">
                    <a href="gallery.html" class="pictures-title">Lorem Ipsum is simply dummy text</a>
                    <a href="#" class="button-link">Xem thêm ảnh</a>
                </div>
            </div>
            <div class="photo-grid-item">
                <img src="{{asset('fe_template/images/photos/4.jpg')}}">
                <div class="item_description">
                    <a href="gallery.html" class="pictures-title">Lorem Ipsum is simply dummy text</a>
                    <a href="#" class="button-link">Xem thêm ảnh</a>
                </div>
            </div>
            <div class="photo-grid-item">
                <img src="{{asset('fe_template/images/photos/5.jpg')}}">
                <div class="item_description">
                    <a href="gallery.html" class="pictures-title">Lorem Ipsum is simply dummy text</a>
                    <a href="#" class="button-link">Xem thêm ảnh</a>
                </div>
            </div>
            <div class="photo-grid-item">
                <img src="{{asset('fe_template/images/photos/6.jpg')}}">
                <div class="item_description">
                    <a href="gallery.html" class="pictures-title">Lorem Ipsum is simply dummy text</a>
                    <a href="#" class="button-link">Xem thêm ảnh
                    </a>
                </div>
            </div>
        </div>
        <div class="text-center container"><a href="#" class="button-link">Xem tất cả <svg width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13 5L13.7071 4.29289L14.4142 5L13.7071 5.70711L13 5ZM1 6C0.447715 6 0 5.55228 0 5C0 4.44772 0.447715 4 1 4V6ZM9.70711 0.292893L13.7071 4.29289L12.2929 5.70711L8.29289 1.70711L9.70711 0.292893ZM13.7071 5.70711L9.70711 9.70711L8.29289 8.29289L12.2929 4.29289L13.7071 5.70711ZM13 6H1V4H13V6Z" fill="#161E31"/>
                </svg></a></div>
    </section>
    <section class="news-section">
        <div class="container">
            <div class="homepage-title clearfix">
                <h2 class="home-title">Tin tức & Sự kiện</h2>
            </div>
        </div>
        <div class="news-slider">
            <div class="owl-carousel">
                <div class="news-item">
                    <a href="news.html" class="news-thumb">
                        <picture>
                            <source media="(min-width: 1500px)" srcset="{{asset('fe_template/images/news/1.jpg')}}"> <!-- 500x620 -->
                            <source media="(min-width: 992px)" srcset="{{asset('fe_template/images/news/1.jpg')}}"> <!-- 370x465 -->
                            <img class="owl-lazy" data-src="{{asset('fe_template/images/news/1.jpg')}}" alt="450x560" />
                        </picture>
                    </a>
                    <a href="news.html" class="news-title limit-two-line">Lorem ipsum dolor sit amet, consectetur adipiscing elit,  sed do eiusmod</a>
                    <span>20/04/2022 • admin</span>
                </div>
                <div class="news-item">
                    <a href="news.html" class="news-thumb">
                        <picture>
                            <source media="(min-width: 1500px)" srcset="{{asset('fe_template/images/news/2.jpg')}}"> <!-- 500x620 -->
                            <source media="(min-width: 992px)" srcset="{{asset('fe_template/images/news/2.jpg')}}"> <!-- 370x465 -->
                            <img class="owl-lazy" data-src="{{asset('fe_template/images/news/2.jpg')}}" alt="450x560" />
                        </picture>
                    </a>
                    <a href="news.html" class="news-title limit-two-line">Lorem ipsum dolor sit amet, consectetur adipiscing elit,  sed do eiusmod</a>
                    <span>20/04/2022 • admin</span>
                </div>
                <div class="news-item">
                    <a href="news.html" class="news-thumb">
                        <picture>
                            <source media="(min-width: 1500px)" srcset="{{asset('fe_template/images/news/3.jpg')}}"> <!-- 500x620 -->
                            <source media="(min-width: 992px)" srcset="{{asset('fe_template/images/news/3.jpg')}}"> <!-- 370x465 -->
                            <img class="owl-lazy" data-src="{{asset('fe_template/images/news/3.jpg')}}" alt="450x560" />
                        </picture>
                    </a>
                    <a href="news.html" class="news-title limit-two-line">Lorem ipsum dolor sit amet, consectetur adipiscing elit,  sed do eiusmod</a>
                    <span>20/04/2022 • admin</span>
                </div>
                <div class="news-item">
                    <a href="news.html" class="news-thumb">
                        <picture>
                            <source media="(min-width: 1500px)" srcset="{{asset('fe_template/images/news/4.jpg')}}"> <!-- 500x620 -->
                            <source media="(min-width: 992px)" srcset="{{asset('fe_template/images/news/4.jpg')}}"> <!-- 370x465 -->
                            <img class="owl-lazy" data-src="{{asset('fe_template/images/news/4.jpg')}}" alt="450x560" />
                        </picture>
                    </a>
                    <a href="news.html" class="news-title limit-two-line">Lorem ipsum dolor sit amet, consectetur adipiscing elit,  sed do eiusmod</a>
                    <span>20/04/2022 • admin</span>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="news-action">
                <div class="news-action-slider">
                    <button type="button" role="presentation" class="customPrevBtnNews slideraction">
                        <svg width="23" height="16" viewBox="0 0 23 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 8.00002L1.29289 8.70713L0.585787 8.00002L1.29289 7.29291L2 8.00002ZM22 7.00002C22.5523 7.00002 23 7.44774 23 8.00002C23 8.55231 22.5523 9.00002 22 9.00002L22 7.00002ZM7.95956 15.3738L1.29289 8.70713L2.70711 7.29291L9.37377 13.9596L7.95956 15.3738ZM1.29289 7.29291L7.95956 0.626248L9.37377 2.04046L2.70711 8.70713L1.29289 7.29291ZM2 7.00002L22 7.00002L22 9.00002L2 9.00002L2 7.00002Z" fill="#fff"></path></svg>
                    </button>
                    <button type="button" role="presentation" class="customNextBtnNews slideraction">
                        <svg width="23" height="16" viewBox="0 0 23 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21 7.99998L21.7071 7.29287L22.4142 7.99998L21.7071 8.70709L21 7.99998ZM1 8.99998C0.447716 8.99998 0 8.55226 0 7.99998C0 7.44769 0.447716 6.99998 1 6.99998V8.99998ZM15.0404 0.626206L21.7071 7.29287L20.2929 8.70709L13.6262 2.04042L15.0404 0.626206ZM21.7071 8.70709L15.0404 15.3738L13.6262 13.9595L20.2929 7.29287L21.7071 8.70709ZM21 8.99998H1V6.99998H21V8.99998Z" fill="#fff"></path></svg>
                    </button>
                </div>
                <a href="#" class="button-link">Xem tất cả <svg width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13 5L13.7071 4.29289L14.4142 5L13.7071 5.70711L13 5ZM1 6C0.447715 6 0 5.55228 0 5C0 4.44772 0.447715 4 1 4V6ZM9.70711 0.292893L13.7071 4.29289L12.2929 5.70711L8.29289 1.70711L9.70711 0.292893ZM13.7071 5.70711L9.70711 9.70711L8.29289 8.29289L12.2929 4.29289L13.7071 5.70711ZM13 6H1V4H13V6Z" fill="#161E31"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>
    <section class="contact-section">
        <div class="container">
            <h2 class="contact-title">Để lại thông tin</h2>
            <p class="contact-desc">Chúng tôi sẽ liên hệ với bạn</p>
            <a href="contact.html" class="button-link bg-white">Liên hệ với Consolar</a>
        </div>
    </section>

    <div class="modal fade contact-popup" id="contact-wrapper" tabindex="-3" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body">
                    <h3 class="contact-popup-title">Liên hệ với chúng tôi <span>để nhận tư vấn</span></h3>
                    <div class="contact-popup-form">
                        <input type="text" name="name" required placeholder="Họ tên *" />
                        <input type="text" name="phone" required placeholder="Số điện thoại *" />
                        <input type="email" name="email" required placeholder="Email *" />
                        <div class="text-center"><button type="submit" class="button-link bg-green">Gửi thông tin</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="loaderpage"><div></div></div>
@stop

@section('script')
<!--home page-->
<link href="{{asset('fe_template/css/owl.carousel.min.css')}}" rel="stylesheet" />
<script type="text/javascript" src="{{asset('fe_template/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('fe_template/js/gallery/foundation.min.js')}}"></script>
<script src="{{asset('fe_template/js/gallery/pycs-layout.jquery.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function(){
        var bannerSL = $('.slideshow .owl-carousel');
        bannerSL.on('initialized.owl.carousel', function(event) {
            var $currentItem = $('.owl-item', bannerSL).eq(event.item.index);
            var $elemsToanim = $currentItem.find("[data-animation-in]");
            setAnimation ($elemsToanim, 'in');
        });
        bannerSL.owlCarousel({ items: 1, loop: true, lazyLoad: true, autoplay: true, autoplayTimeout: 5000, nav: false, dots: false, mouseDrag:true, touchDrag: true, animateOut: 'fadeOut', animateIn: 'fadeIn', });
        function setAnimation ( _elem, _InOut ) {
            // Store all animationend event name in a string.
            // cf animate.css documentation
            var animationEndEvent = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
            _elem.each ( function () {
                var $elem = $(this);
                var $animationType = 'animated ' + $elem.data( 'animation-' + _InOut );
                $elem.addClass($animationType).one(animationEndEvent, function () {
                    $elem.removeClass($animationType);
                });
            });
        }
        bannerSL.on('change.owl.carousel', function(event) {
            var $currentItem = $('.owl-item', bannerSL).eq(event.item.index);
            var $elemsToanim = $currentItem.find("[data-animation-out]");
            setAnimation ($elemsToanim, 'out');
        });
        bannerSL.on('changed.owl.carousel', function(event) {
            var $currentItem = $('.owl-item', bannerSL).eq(event.item.index);
            var $elemsToanim = $currentItem.find("[data-animation-in]");
            setAnimation ($elemsToanim, 'in');
        });
        bannerSL.on('translated.owl.carousel', function(event) {
            bannerSL.find('.owl-item').removeClass('animated').removeClass('owl-animated-out').removeClass('fadeOut').removeClass('owl-animated-in').removeClass('fadeIn');
        });
        //
        $('.larger-carousel').each(function(){
            var productSl = $(this);
            productSl.owlCarousel({ lazyLoad: true, margin : 0, items: 1, loop: true, autoheight: true, autoplay: false, nav: true, dots: false, center: true, responsive:{ 992:{ items: 2, autoWidth:true } }, navText: ['<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30"><g id="Left-2" data-name="Left"><polygon points="24 12.001 2.914 12.001 8.208 6.706 7.501 5.999 1 12.501 7.5 19.001 8.207 18.294 2.914 13.001 24 13.001 24 12.001" style="fill:#fff"/></g></svg>','<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30"><g id="Right-2" data-name="Right"><polygon points="17.5 5.999 16.793 6.706 22.086 11.999 1 11.999 1 12.999 22.086 12.999 16.792 18.294 17.499 19.001 24 12.499 17.5 5.999" style="fill:#fff"/></g></svg>'] });
            productSl.on('loaded.owl.lazy', function(event) {
                productSl.find('.product-small-thumb .owl-carousel').owlCarousel({ lazyLoad: true, margin: 15, items: 3, loop: false, autoplay: false, nav: true, dots: false, responsive:{ 571:{ items: 4 } }, });
            });
        });
        if($('.ul-product-tab li').length > 0){
            var cur_tab = 0, cur_ctn = $('.product-tab-item').eq(cur_tab);
            $('.ul-product-tab li').eq(cur_tab).addClass('active');
            cur_ctn.addClass('active');
            //var productSl = cur_ctn.find('.larger-carousel');
            //runSlider(productSl);
        }
        $('.ul-product-tab li a').click(function(e){
            e.preventDefault();
            var parent = $(this).parent(), idx = parent.index();
            $('.ul-product-tab li, .product-tab-item').removeClass('active');parent.addClass('active');
            cur_ctn = $('.product-tab-item').eq(idx);
            cur_ctn.addClass('active');
            //var productSl = cur_ctn.find('.larger-carousel');
            //runSlider(productSl);
        });
        $('.product-item').each(function(){
            var parent = $(this);
            parent.find('.product-small-thumb a').click(function(e){
                e.preventDefault();
                var larger_thumb = $(this).find('img').data('larger');
                parent.find('.product-larger-thumb img').attr('src',larger_thumb);
            });
        });
        $('.get-detail-popup').click(function(){
            var parid = $(this).data('id');
            var html = $('.product-item[data-id="'+parid+'"]').children('.hidden').html();
            $('#product-wrapper .modal-body').html(html);
        });
        $('.compare-thumb a:last-child').click(function(e){
            e.preventDefault();
            var parent = $(this).parent().parent(), idx = parent.index();
            $('.row-sub-compare').each(function(){
                $(this).children('.compare-column').eq(idx).remove();
                var par = $(this).parent();
                if(par.hasClass('header-row')){
                    $(this).append('<div class="compare-column"><div class="compare-thumb not-product"><span onclick="window.location=\'link-trang-san-pham\'"><strong>Thêm sản phẩm </strong><i class="fa fa-plus-circle"></i></span></div></div>');
                }else{
                    $(this).append('<div class="compare-column"></div>');
                }
            });
        });

        //
        var coffeesl = $('.coffee-right .owl-carousel');
        coffeesl.owlCarousel({ lazyLoad: true, margin: 20, items: 1, loop: true, autoplay: false, nav: false, dots: false, responsive:{ 1200:{ stagePadding: 200, } }, });
        function hiddenPrev(curitem){
            coffeesl.find('.owl-item').css('opacity', 1);
            if(coffeesl.find('.owl-item').eq(curitem-1)){
                coffeesl.find('.owl-item').eq(curitem-1).css('opacity', 0);
            }
        }
        var curitem = coffeesl.find('.owl-item.active').index();
        hiddenPrev(curitem);
        coffeesl.on('translated.owl.carousel', function(event) {
            var curitem = coffeesl.find('.owl-item.active').index();
            hiddenPrev(curitem);
        });
        $('.customNextBtn').click(function() { coffeesl.trigger('next.owl.carousel'); });
        $('.customPrevBtn').click(function() { coffeesl.trigger('prev.owl.carousel'); })
        //

        var newsSL = $('.news-section .owl-carousel'),
            newsloop = $('.news-section .news-item').length > 1 ? true : false;
        newsSL.owlCarousel({ items: 1, loop: newsloop, lazyLoad: true, autoplay: 5000, nav: false, dots: false, margin: 15, responsive:{ 481:{ items: 2,  }, 768:{ items: 3,  }, 992:{ items: 4, center: true, margin: 30, } }, });
        $('.customNextBtnNews').click(function() { newsSL.trigger('next.owl.carousel'); });
        $('.customPrevBtnNews').click(function() { newsSL.trigger('prev.owl.carousel'); })
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
    });
    $(window).load(function(){
        var win_h = $(window).height();
        //if(win_h > $('.bg-banner').height()) win_h = $('.bg-banner').height();
        $('.slideshow .owl-carousel .owl-itemct').css('height',win_h);
    });
</script>
<!--end home page-->
@stop