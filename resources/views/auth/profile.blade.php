@extends('layouts.app')
@section('content')
    <section class="section-page">
        <div class="member-form">
            <div class="member-form-ctx">
                <h2 class="page-title text-center">Cập nhật thông tin cá nhân</h2>
                <div class="main-form">
                    <form action="{{route('post.change.profile.auth')}}" method="post" role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
{{--                            <label>Avatar</label>--}}
                            <span class="clearfix" >
                                <img id="output_image" src="{{get_data_user('web','avatar') ? pare_url_file(get_data_user('web','avatar'), 'avatars') : asset('fe_template/images/avatar.jpg')}}"  alt="{{get_data_user('web','avatar') ? get_data_user('web','avatar') : 'avatar.jpg'}}" width="100px" height="100px" style="border-radius: 10px;">
                            </span>
                        </div>
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="input_image" name="avatar">
                            </div>
                        </div>
                        <input type="text" required name="name" placeholder="Họ tên *" value="{{get_data_user('web','name')}}"/>
                        <input type="text" required name="phone" placeholder="Điện thoại *" value="{{get_data_user('web','phone')}}"/>
                        <input type="text" name="address" placeholder="Địa chỉ" value="{{get_data_user('web','address')}}"/>
                        <div class="text-center"><button type="submit" class="button-link bg-green">Cập nhật</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@stop

@section('script')

@stop
