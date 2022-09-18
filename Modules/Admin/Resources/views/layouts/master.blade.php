<!DOCTYPE html>
<html class="loading bordered-layout" lang="en" data-layout="bordered-layout" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
{{--    <meta name="csrf-token" content="{{ csrf_token() }}" />--}}
    <title>Dashboard ecommerce - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="{{asset('admin_template/app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="icon" type="image/x-icon" href="{{asset('admin_template/app-assets/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_template/app-assets/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_template/app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_template/app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_template/app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('admin_template/app-assets/vendors/css/charts/apexcharts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_template/app-assets/vendors/css/extensions/toastr.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_template/app-assets/vendors/css/extensions/sweetalert2.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_template/app-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_template/app-assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_template/app-assets/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_template/app-assets/css/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_template/app-assets/css/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_template/app-assets/css/themes/bordered-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_template/app-assets/css/themes/semi-dark-layout.css')}}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_template/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_template/app-assets/css/pages/dashboard-ecommerce.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_template/app-assets/css/plugins/charts/chart-apex.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_template/app-assets/css/plugins/extensions/ext-component-toastr.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_template/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_template/app-assets/css/plugins/forms/form-validation.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_template/app-assets/css/plugins/forms/pickers/form-flat-pickr.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_template/app-assets/css/plugins/extensions/ext-component-sweet-alerts.css')}}">
    <!-- END: Page CSS-->
    <!--  Datatables  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>

    <!--  extension responsive  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_template/assets/css/style.css')}}">
    <!-- END: Custom CSS-->
    <style>
        @media (min-width: 720px) {
            .modal-slide-in .modal-dialog.sidebar-lg {
                width: 50rem;
            }
        }
        @media (min-width: 1200px) {
            .modal-slide-in .modal-dialog.sidebar-lg {
                width: 80rem;
            }
        }
        @media (min-width: 1800px) {
            .modal-slide-in .modal-dialog.sidebar-lg {
                width: 100rem;
            }
        }
    </style>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

<!-- BEGIN: Header-->
@include('admin::layouts.header')
<!-- END: Header-->


<!-- BEGIN: Main Menu-->
@include('admin::layouts.sidebar')
<!-- END: Main Menu-->

<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body">
            @yield('content')
        </div>
    </div>
</div>

<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
@include('admin::layouts.footer')
<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->
<script src="{{asset('admin_template/app-assets/vendors/js/vendors.min.js')}}"></script>



<script src="{{asset('admin_template/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin_template/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin_template/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('admin_template/app-assets/vendors/js/tables/datatable/responsive.bootstrap4.js')}}"></script>
<script src="{{asset('admin_template/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
<script src="{{asset('admin_template/app-assets/vendors/js/tables/datatable/buttons.bootstrap4.min.js')}}"></script>

<script src="{{asset('admin_template/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin_template/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin_template/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('admin_template/app-assets/vendors/js/tables/datatable/responsive.bootstrap4.js')}}"></script>
<script src="{{asset('admin_template/app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js')}}"></script>
<script src="{{asset('admin_template/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
<script src="{{asset('admin_template/app-assets/vendors/js/tables/datatable/jszip.min.js')}}"></script>
<script src="{{asset('admin_template/app-assets/vendors/js/tables/datatable/pdfmake.min.js')}}"></script>
<script src="{{asset('admin_template/app-assets/vendors/js/tables/datatable/vfs_fonts.js')}}"></script>
<script src="{{asset('admin_template/app-assets/vendors/js/tables/datatable/buttons.html5.min.js')}}"></script>
<script src="{{asset('admin_template/app-assets/vendors/js/tables/datatable/buttons.print.min.js')}}"></script>
<script src="{{asset('admin_template/app-assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js')}}"></script>
<script src="{{asset('admin_template/app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('admin_template/app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
<script src="{{asset('admin_template/app-assets/vendors/js/extensions/toastr.min.js')}}"></script>

<script src="{{asset('admin_template/app-assets/vendors/js/extensions/sweetalert2.all.min.js')}}"></script>
<script src="{{asset('admin_template/app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
<script src="{{asset('admin_template/app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('admin_template/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js')}}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{asset('admin_template/app-assets/js/core/app-menu.js')}}"></script>
<script src="{{asset('admin_template/app-assets/js/core/app.js')}}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->

<script src="{{asset('admin_template/app-assets/js/scripts/forms/form-validation.js')}}"></script>
{{--<script src="{{asset('admin_template/app-assets/js/scripts/pages/dashboard-ecommerce.js')}}"></script>--}}
{{--<script src="{{asset('admin_template/app-assets/js/scripts/pages/app-user-list.js')}}"></script>--}}
{{--<script src="{{asset('admin_template/app-assets/js/scripts/tables/table-datatables-basic.js')}}"></script>--}}
<script src="{{asset('admin_template/app-assets/js/scripts/extensions/ext-component-sweet-alerts.js')}}"></script>
<!-- END: Page JS-->

{{--<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>--}}
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!--   Datatables-->
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>

<!-- extension responsive -->
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

{{--<script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>--}}
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<script>
    // $.ajaxSetup({
    //     headers: {
    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //     }
    // });

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


    //check slug
    $('#title').change(function (event) {
        console.log(234);
        $.get('{{route('admin.checkSlug.post')}}',
            { 'title' : $(this).val()},
            function (data) {
                console.log(data);
                $('#slug').val(data.slug);
            }
        );
    });
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
        let isRtl = $('html').attr('data-textdirection') === 'rtl';
        let danger = "{{\Session::has('danger')}}";
        let success = "{{\Session::has('success')}}";
        // On load Toast
        if(danger) {
            setTimeout(function () {
                toastr['error'](
                    "{{\Session::get('danger')}}",
                    '👋 Thất bại!',
                    {
                        closeButton: true,
                        tapToDismiss: false,
                        rtl: isRtl
                    }
                );
            }, 300);
        }
        if(success) {
            setTimeout(function () {
                toastr['success'](
                    "{{\Session::get('success')}}",
                    '👋 Thành công!',
                    {
                        closeButton: true,
                        tapToDismiss: false,
                        rtl: isRtl
                    }
                );
            }, 300);
        }
    });



</script>
@yield('script')
</body>
<!-- END: Body-->

</html>
