@extends('layouts.app')
@section('content')
    <section class="section-page">
        <div class="member-form">
            <div class="member-form-ctx">
                <h2 class="page-title text-center">Đăng ký thành viên</h2>
                <div class="main-form">
                    <form action="{{route('post.register.auth')}}" method="post" role="form">
                        @csrf
                        <input type="text" required name="name" placeholder="Họ tên *" value="{{old('name',isset($user->name) ? $user->name : '')}}"/>
                        <input type="text" required name="phone" placeholder="Điện thoại *" value="{{old('phone',isset($user->phone) ? $user->phone : '')}}"/>
                        <input type="email" required name="email" placeholder="Email *" value="{{old('email',isset($user->email) ? $user->email : '')}}"/>
{{--                        @if($errors->has('email'))--}}
{{--                            <div class="error-text">--}}
{{--                                {{$errors->first('email')}}--}}
{{--                            </div>--}}
{{--                        @endif--}}
                        <input type="password" required name="password" placeholder="Mật khẩu *" />
                        <input type="text" name="address" placeholder="Địa chỉ" value="{{old('address',isset($user->address) ? $user->address : '')}}"/>
                        <div class="text-center"><button type="submit" class="button-link bg-green">Đăng ký</button></div>
                        <div class="text-center member-action">
                            Nếu bạn đã có tài khoản, <span style="display: inline-block">click <a href="{{route('get.login.auth')}}">vào đây</a> để Đăng nhập.</span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@stop

@section('script')

@stop
