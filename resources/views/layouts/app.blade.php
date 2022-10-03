<!DOCTYPE html>
<html lang="vi">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('fe_template/favicon.ico')}}" rel="icon" type="image/x-icon" />
    <title>Consolar housing</title>
    <meta name="description" content="Consolar housing" />
    <meta name="keywords" content="Consolar housing" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="{{asset('fe_template/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{asset('admin_template/app-assets/vendors/css/extensions/toastr.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_template/app-assets/css/plugins/extensions/ext-component-toastr.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="{{asset('fe_template/css/style.css')}}" rel="stylesheet" />
    <link href="{{asset('fe_template/css/font-awesome.min.css')}}" rel="stylesheet" />

    {!! htmlScriptTagJsApi() !!}
{{--    file css theo componet--}}
    <link href="{{asset('fe_template/css/'.get_name_route(\Request::route()->getName()).'.css')}}" rel="stylesheet" />
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
<script src="{{asset('admin_template/app-assets/vendors/js/extensions/toastr.min.js')}}"></script>
<link href="{{asset('fe_template/css/animate.css')}}" rel="stylesheet" />

@yield('script')
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).ready(function() {
        $('.share').click(function(e) {
            e.preventDefault();
            window.open($(this).attr('href'), 'fbShareWindow', 'height=450, width=550, top=' + ($(window).height() / 2 - 275) + ', left=' + ($(window).width() / 2 - 225) + ', toolbar=0, location=0, menubar=0,         directories=0, scrollbars=0');
            return false;
        });
    });
    $(document).ready(function() {
        toastr.options.timeOut = 10000;
        @if (Session::has('danger'))
            setTimeout(function () {
                toastr['error'](
                    "{{\Session::get('danger')}}",
                    '👋 Thất bại!',
                    {
                        closeButton: true,
                        tapToDismiss: false,
                    }
                );
            }, 300);
        @elseif(Session::has('success'))
            setTimeout(function () {
                toastr['success'](
                    "{{\Session::get('success')}}",
                    '👋 Thành công!',
                    {
                        closeButton: true,
                        tapToDismiss: false,
                    }
                );
            }, 300);
        @endif

        {{--hiện ảnh--}}
        function readUrl(input) {
            if (input.files && input.files[0] ){
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#output_image').attr('src',e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#input_image").change(function () {
            readUrl(this);
        });

    });
</script>
</body>
</html>
