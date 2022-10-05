@extends('admin::layouts.master')
@section('content')
    <!-- account setting page -->
    <section id="page-account-settings">
        <div class="row">
            <!-- left menu section -->
            <div class="col-md-3 mb-2 mb-md-0">
                <ul class="nav nav-pills flex-column nav-left">
                    <!-- general -->
                    <li class="nav-item">
                        <a class="nav-link active" id="account-pill-general" data-toggle="pill" href="#account-vertical-general" aria-expanded="true">
                            <i data-feather="user" class="font-medium-3 mr-1"></i>
                            <span class="font-weight-bold">Chung</span>
                        </a>
                    </li>
                    <!-- change password -->
                    <li class="nav-item">
                        <a class="nav-link" id="account-pill-password" data-toggle="pill" href="#account-vertical-password" aria-expanded="false">
                            <i data-feather="lock" class="font-medium-3 mr-1"></i>
                            <span class="font-weight-bold">Đổi mật khẩu</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!--/ left menu section -->

            <!-- right content section -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="tab-content">
                            <!-- general tab -->
                            <div role="tabpanel" class="tab-pane active" id="account-vertical-general" aria-labelledby="account-pill-general" aria-expanded="true">
                                <!-- form -->
                                <form class="validate-form mt-2" action="" method="POST" role="form">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="account-name">Tên</label>
                                                <input type="text" class="form-control" id="account-name" name="name" placeholder="Tên" value="{{get_data_user('admins','name')}}" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="account-phone">Số điện thoại</label>
                                                <input type="text" class="form-control" id="account-phone" name="phone" placeholder="Số điện thoại" value="{{get_data_user('admins','phone')}}" />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary mt-2 mr-1">Lưu</button>
                                            <button type="reset" class="btn btn-outline-secondary mt-2">Hủy</button>
                                        </div>
                                    </div>
                                </form>
                                <!--/ form -->
                            </div>
                            <!--/ general tab -->

                            <!-- change password -->
                            <div class="tab-pane fade" id="account-vertical-password" role="tabpanel" aria-labelledby="account-pill-password" aria-expanded="false">
                                <!-- form -->
                                <form class="validate-form" action="" method="POST" role="form">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="account-old-password">Nhập mật khẩu hiện tại</label>
                                                <div class="input-group form-password-toggle input-group-merge">
                                                    <input type="password" class="form-control" id="account-old-password" name="password_old" placeholder="Nhập mật khẩu hiện tại" />
                                                    <div class="input-group-append">
                                                        <div class="input-group-text cursor-pointer">
                                                            <i data-feather="eye"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="account-new-password">Nhập mật khẩu</label>
                                                <div class="input-group form-password-toggle input-group-merge">
                                                    <input type="password" id="account-new-password" name="password" class="form-control" placeholder="Nhập mật khẩu" />
                                                    <div class="input-group-append">
                                                        <div class="input-group-text cursor-pointer">
                                                            <i data-feather="eye"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="account-retype-new-password">Nhập lại mật khẩu</label>
                                                <div class="input-group form-password-toggle input-group-merge">
                                                    <input type="password" class="form-control" id="account-retype-new-password" name="confirm-new-password" placeholder="Nhập lại mật khẩu" />
                                                    <div class="input-group-append">
                                                        <div class="input-group-text cursor-pointer"><i data-feather="eye"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary mr-1 mt-1">Lưu</button>
                                            <button type="reset" class="btn btn-outline-secondary mt-1">Hủy</button>
                                        </div>
                                    </div>
                                </form>
                                <!--/ form -->
                            </div>
                            <!--/ change password -->
                        </div>
                    </div>
                </div>
            </div>
            <!--/ right content section -->
        </div>
    </section>
    <!-- / account setting page -->
@stop
@section('script')
    <script>
        $(document).ready(function() {
            let form = $(".validate-form");
            if (form.length) {
                form.each(function () {
                    let $this = $(this);

                    $this.validate({
                        rules: {
                            name: {
                                required: true,
                            },
                            "new-password": {
                                required: true,
                                minlength: 6,
                            },
                            "confirm-new-password": {
                                required: true,
                                minlength: 6,
                                equalTo: "#account-new-password",
                            },
                            phone: {
                                required: true,
                            },
                        },
                        messages: {
                            username: {
                                required: "Vui lòng không bỏ trống!"
                            },
                            phone: {
                                required: "Vui lòng không bỏ trống!"
                            },
                            "new-password": {
                                required: "Vui lòng không bỏ trống!",
                                minlength: jQuery.validator.format("Vui lòng nhập giá trị lớn hơn hoặc bằng {6} kí tự.")
                            },
                            "confirm-new-password": {
                                required: "Vui lòng không bỏ trống!",
                                minlength: jQuery.validator.format("Vui lòng nhập giá trị lớn hơn hoặc bằng {6} kí tự."),
                                equalTo: "Mật khẩu không khớp!"
                            },
                        }
                    });
                });
            }
        });


    </script>
@stop
