@extends('layouts.app')
@section('content')
    <section class="section-page">
        <div class="member-form">
            <div class="member-form-ctx">
                <h2 class="page-title text-center">Đăng nhập</h2>
                <div class="main-form">
                    <form action="{{route('post.login.auth')}}" method="post" role="form">
                        @csrf
                        <input type="email" required name="email" placeholder="Email *" value="{{old('email',isset($user->email) ? $user->email : '')}}"/>
                        <input type="password" required name="password" placeholder="Mật khẩu *" />
                        <div class="text-center"><button type="submit" class="button-link bg-green">Đăng nhập</button></div>
                        <div class="text-center member-action">
                            Nếu bạn chưa có tài khoản, <span style="display: inline-block">click <a href="{{route('get.register.auth')}}">vào đây</a> để đăng kí.</span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@stop

@section('script')

@stop
