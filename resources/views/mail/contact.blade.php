@extends('mail.master_contact')

@section('title')
    Khách hàng cần liên hệ
@endsection

@section('content1')
    <p style="Margin: 0;line-height: 150%;">Khách hàng: <strong>{{ $name }}</strong> với email: <strong><a target="_blank" href="mailto:{{ $email }}" style="text-decoration: underline;">{{ $email }}</a></strong> cần được liên hệ tư vấn về <strong>{{$type}}</strong>. Vui lòng liên hệ với khách hàng qua số điện thoại: <strong><a target="_blank" href="tel:{{ $phone }}" style="text-decoration: underline;">{{ $phone }}</a></strong></p>
    @if(isset($content))
        <p style="Margin: 0;line-height: 150%;">Lời nhắn:{{$content}}<br></p>
    @else
        <p style="Margin: 0;line-height: 150%;">Link thiết kế: <a target="_blank" href="{{$link}}"><strong>Bấm vào đây!</strong></a><br></p>
    @endif

@endsection

{{--@section('content_important')--}}


{{--@endsection--}}

@section('content2')
    <p style="Margin: 0;line-height: 150%; text-align: center;"><em>Đây là một tin nhắn tự động, vui lòng không trả lời.</em></p>
@endsection
