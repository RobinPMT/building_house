@extends('mail.master')

@section('title')
    Bạn nhận được lời mời dạy thêm lớp
@endsection

@section('content1')
    <p style="Margin: 0;line-height: 150%;"><br></p>
{{--    <p style="Margin: 0;line-height: 150%;">Giáo viên <strong>{{$teacher_name}}</strong> vừa mời bạn dạy cùng lớp <strong>{{$class_name}}</strong>. Vui lòng nhấn vào <strong> link hot </strong> ở dưới để tham gia lớp học.<br>Không chia sẻ link mời của bạn với bất kỳ ai.</p>--}}
@endsection

@section('content_important')
{{--    <a href="{{$link}}"> {{$link}} </a>--}}
@endsection

@section('content2')
    <p style="Margin: 0;line-height: 150%; text-align: center;"><em>Đây là một tin nhắn tự động, vui lòng không trả lời.</em></p>
@endsection
