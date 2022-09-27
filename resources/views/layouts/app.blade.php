<!DOCTYPE html>
<html lang="vi">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('fe_template/favicon.ico')}}" rel="icon" type="image/x-icon" />
    <title>Consolar housing</title>
    <meta name="description" content="Consolar housing" />
    <meta name="keywords" content="Consolar housing" />
    <link href="{{asset('fe_template/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="{{asset('fe_template/css/style.css')}}" rel="stylesheet" />
    <link href="{{asset('fe_template/css/font-awesome.min.css')}}" rel="stylesheet" />
{{--    file css theo componet--}}
    <link href="{{asset('fe_template/css/'.\Request::route()->getName().'.css')}}" rel="stylesheet" />
{{--    file css theo componet--}}
</head>
<body>
@include('components.header')


@yield('content')


@include('components.footer')
<script type="text/javascript" src="{{asset('fe_template/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('fe_template/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('fe_template/js/website.js')}}"></script>
<script type="text/javascript" src="{{asset('fe_template/js/lazyload.js')}}"></script>
<link href="{{asset('fe_template/css/animate.css')}}" rel="stylesheet" />
@yield('script')
</body>
</html>
