@extends('admin::layouts.master')
@section('content')

{{--    <style>--}}
{{--        .main-section {--}}
{{--            margin: 0 auto;--}}
{{--            padding: 20px;--}}
{{--            margin-top: 100px;--}}
{{--            background-color: #0b3e6f;--}}
{{--            box-shadow: 0px 0px 20px #0b3e6f;--}}
{{--        }--}}
{{--    </style>--}}
{{--    <section class="content-header">--}}
{{--        <h1>Slide Ảnh</h1>--}}
{{--    </section>--}}
    <section class="form-control-repeater">
        <div class="row">
            <!-- Invoice repeater -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Upload Slide ảnh</h4>
                    </div>
                    <div class="card-body">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <input type="file" name="images" id="file-1" multiple class="filename"
                                   data-overwrite-initial="fasle" data-min-file-count="2">
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Invoice repeater -->
        </div>
    </section>
<!-- Multi row Slides Per View swiper -->
<section id="component-swiper-multi-row">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Multi Row Slides Layout</h4>
        </div>
        <div class="card-body">
            <div class="swiper-multi-row swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img class="img-fluid" src="{{asset('admin_template/app-assets/images/banner/banner-26.jpg')}}" alt="banner" />
                    </div>
                    <div class="swiper-slide">
                        <img class="img-fluid" src="{{asset('admin_template/app-assets/images/banner/banner-39.jpg')}}" alt="banner" />
                    </div>
                    <div class="swiper-slide">
                        <img class="img-fluid" src="{{asset('admin_template/app-assets/images/banner/banner-28.jpg')}}" alt="banner" />
                    </div>
                    <div class="swiper-slide">
                        <img class="img-fluid" src="{{asset('admin_template/app-assets/images/banner/banner-29.jpg')}}" alt="banner" />
                    </div>
                    <div class="swiper-slide">
                        <img class="img-fluid" src="{{asset('admin_template/app-assets/images/banner/banner-30.jpg')}}" alt="banner" />
                    </div>
                    <div class="swiper-slide">
                        <img class="img-fluid" src="{{asset('admin_template/app-assets/images/banner/banner-31.jpg')}}" alt="banner" />
                    </div>
                    <div class="swiper-slide">
                        <img class="img-fluid" src="{{asset('admin_template/app-assets/images/banner/banner-32.jpg')}}" alt="banner" />
                    </div>
                    <div class="swiper-slide">
                        <img class="img-fluid" src="{{asset('admin_template/app-assets/images/banner/banner-33.jpg')}}" alt="banner" />
                    </div>
                    <div class="swiper-slide">
                        <img class="img-fluid" src="{{asset('admin_template/app-assets/images/banner/banner-34.jpg')}}" alt="banner" />
                    </div>
                    <div class="swiper-slide">
                        <img class="img-fluid" src="{{asset('admin_template/app-assets/images/banner/banner-35.jpg')}}" alt="banner" />
                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</section>
<!--/ Multi row Slides Per View swiper -->

@stop

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            $("#file-1").fileinput({
                {{--uploadUrl: '{{route('admin.store.slide')}}',--}}
                {{--enableResumableUpload: true,--}}
                {{--initialPreviewAsData: true,--}}
                {{--allowedFileTypes: ['image'],--}}
                {{--showCancel: true,--}}
                {{--resumableUploadOptions: {--}}
                {{--    testUrl: "/site/test-file-chunks",--}}
                {{--    chunkSize: 1024, // 1 MB chunk size--}}
                {{--},--}}
                {{--maxFileCount: 5,--}}
                {{--theme: 'fa5',--}}
                {{--deleteUrl: '/site/file-delete',--}}
                {{--fileActionSettings: {--}}
                {{--    showZoom: function(config) {--}}
                {{--        if (config.type === 'pdf' || config.type === 'image') {--}}
                {{--            return true;--}}
                {{--        }--}}
                {{--        return false;--}}
                {{--    }--}}
                {{--}--}}

                theme: 'fa5',
                uploadUrl: '{{route('admin.store.slide')}}',
                // enableResumableUpload: true,
                initialPreviewAsData: true,
                showCancel: true,
                allowedFileTypes: ['image'],
                allowedFileExtensions: ['jpg','png','gif'],
                overwriteInitial: false,
                maxFileSize: 2000,
                maxFileNum: 8,
                uploadExtraData:function () {
                    return{
                        _token: $("input[name='_token']").val()
                    };
                },

                slugCallback:function (filename) {
                    return filename.replace('(','_').replace(']','_');
                }

            });
            var mySwiper5 = new Swiper('.swiper-multi-row', {
                slidesPerView: 3,
                slidesPerColumn: 2,
                spaceBetween: 30,
                slidesPerColumnFill: 'row',
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true
                }
            });
        });
    </script>
@stop
