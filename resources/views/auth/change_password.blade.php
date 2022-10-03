@extends('layouts.app')
@section('content')
    <section class="section-page">
        <div class="member-form">
            <div class="member-form-ctx">
                <h2 class="page-title text-center">Thay đổi mật khẩu</h2>
                <div class="main-form">
                    <form action="{{route('post.change.password.auth')}}" method="post" role="form">
                        @csrf
                        <input type="password" required name="password_old" placeholder="Mật khẩu hiện tại*" />
                        <input type="password" required name="password" placeholder="Mật khẩu mới*" />
                        <input type="password" required name="password_comfirm" placeholder="Nhập lại mật khẩu*" />
                        <div class="text-center"><button type="submit" class="button-link bg-green">Cập nhật</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@stop

@section('script')

@stop
