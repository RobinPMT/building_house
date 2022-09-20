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
                                   data-overwrite-initial="fasle" data-min-file-count="1">
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Invoice repeater -->
        </div>
    </section>
<!-- Multi row Slides Per View swiper -->
{{--{{dd($data)}}--}}
<section id="component-swiper-multi-row">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Danh sách Slide</h4>
        </div>
        <div class="card-body">
            <div class="swiper-multi-row swiper-container">
                <div class="swiper-wrapper">
                    @if(isset($data, $status) && $status)
                        @foreach($data as $stt => $item)
{{--                            <div class="swiper-slide">--}}
{{--                                <img class="img-fluid" src="{{$item['avatar_url']}}" alt="banner" />--}}
{{--                            </div>--}}

                            <div class="swiper-slide" id="sid{{$item['id']}}">
                                <div class="file-preview-frame krajee-default kv-preview-thumb" id="thumb-file-1-8750_images.png" data-fileindex="-1" data-fileid="8750_images.png" data-template="image">
                                <div class="kv-zoom-cache">
                                    <div class="file-preview-frame krajee-default kv-zoom-thumb" id="zoom-thumb-file-1-8750_images.png" data-fileindex="-1" data-fileid="8750_images.png" data-template="image">
                                        <div class="kv-file-content">
                                            <img
                                                    src="{{$item['avatar_url']}}"

                                                    title="{{$item['avatar']}}"
                                                    alt="{{$item['avatar']}}"
                                                    style="width: auto; height: auto; max-width: 100%; max-height: 100%; image-orientation: from-image;"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="file-thumbnail-footer">
                                    <div class="file-footer-caption" title="{{$item['avatar']}}">
                                        <div class="file-caption-info">{{$item['avatar']}}</div>
                                        <div class="file-size-info"><samp>{{\Carbon\Carbon::parse($item['created_at'])->diffForHumans()}}</samp></div>
                                    </div>
                                    <div style="margin-bottom: 5px; margin-top: -15px;">
                                        <a  class="badge badge-pill {{$item['arr_active']['class']}}" href="{{ route('admin.get.action.slide',['active', $item['id']])}}">
                                            {{ $item['arr_active']['name'] }}
                                        </a>
                                        <a class="badge badge-pill {{$item['arr_banner_home']['class']}}" href="{{ route('admin.get.action.slide',['banner_home', $item['id']])}}">
                                            {{ $item['arr_banner_home']['name'] }}
                                        </a>
                                    </div>
                                    <div style="margin-bottom: 10px;">
                                        <a class="badge badge-pill {{ $item['arr_banner_product']['class'] }}" href="{{ route('admin.get.action.slide',['banner_pro', $item['id']])}}">
                                            {{ $item['arr_banner_product']['name'] }}
                                        </a>
                                    </div>
                                    <div class="file-actions">
                                        <div class="file-footer-buttons">
{{--                                            <button type="button" class="kv-file-upload btn btn-sm btn-kv btn-default btn-outline-secondary" title="Upload file"><i class="glyphicon glyphicon-upload"></i></button>--}}
                                            <a href="{{route('admin.get.action.slide',['delete', $item['id']])}}" data-id="{{$item['id']}}" class="kv-file-remove btn btn-sm btn-kv btn-default btn-outline-secondary delete-record" title="Remove file"><i class="glyphicon glyphicon-trash"></i></a>
                                            <a href="#" id="data-image-{{$item['id']}}"  data-detail-title="{{$item['avatar']}}" data-image-src="{{$item['avatar_url']}}" data-toggle="modal" data-target="#image_modal" class="kv-file-zoom btn btn-sm btn-kv btn-default btn-outline-secondary item-detail" title="View Details"><i class="glyphicon glyphicon-zoom-in"></i></a>
                                        </div>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>


                            </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                <br>
                <!-- Add Pagination -->
                <div class="swiper-pagination" style="margin-top: 150px"></div>
                <br>
            </div>
        </div>
    </div>
</section>

{{--<!--/ Multi row Slides Per View swiper -->--}}
<div id="image_modal" class="file-zoom-dialog modal fade" tabindex="-1" aria-labelledby="image_modal" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="">Detailed Preview</h5>
                <span class="kv-zoom-title" title="" id="detail-title">wip-work-in-progress-1024x701.jpg
{{--                    <samp id="detail-storage">(75.52 KB)</samp>--}}
                </span>
                <div class="kv-zoom-actions">
{{--                    <button type="button" class="btn btn-sm btn-kv btn-default btn-outline-secondary btn-toggleheader" title="Toggle header" data-toggle="button" aria-pressed="false" autocomplete="off">--}}
{{--                        <i class="glyphicon glyphicon-resize-vertical"></i>--}}
{{--                    </button>--}}
{{--                    <button type="button" class="btn btn-sm btn-kv btn-default btn-outline-secondary btn-fullscreen" title="Toggle full screen" data-toggle="button" aria-pressed="false" autocomplete="off">--}}
{{--                        <i class="glyphicon glyphicon-fullscreen"></i>--}}
{{--                    </button>--}}
{{--                    <button type="button" class="btn btn-sm btn-kv btn-default btn-outline-secondary btn-borderless" title="Toggle borderless mode" data-toggle="button" aria-pressed="false" autocomplete="off">--}}
{{--                        <i class="glyphicon glyphicon-resize-full"></i>--}}
{{--                    </button>--}}
                    <button type="button" class="btn btn-sm btn-kv btn-default btn-outline-secondary btn-close" title="Close detailed preview" data-dismiss="modal" aria-hidden="true">
                        <i class="glyphicon glyphicon-remove"></i>
                    </button>
                </div>
            </div>
            <div class="modal-body">
                <div class="floating-buttons"></div>
                <div class="kv-zoom-body file-zoom-content krajee-default">
                    <img src="" class="file-preview-image kv-preview-data file-zoom-detail" title="wip-work-in-progress-1024x701.jpg" alt="wip-work-in-progress-1024x701.jpg" style="width: auto; height: auto; max-width: 100%; max-height: 100%;">
                </div>

                <button type="button" class="btn btn-navigate btn-prev" title="View previous file" style="display: none;"><i class="glyphicon glyphicon-triangle-left"></i></button> <button type="button" class="btn btn-navigate btn-next" title="View next file" style="display: none;"><i class="glyphicon glyphicon-triangle-right"></i></button>
            </div>
        </div>
    </div>
</div>

@stop

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#file-1').on('filebatchuploadcomplete', function(event, files, extra) {
                setTimeout(function () {
                    toastr['success'](
                        'Upload thành công!',
                        '👋 Thành công!',
                        {
                            closeButton: true,
                            tapToDismiss: false,
                            // rtl: isRtl
                        }
                    );
                    window.location.reload();
                }, 800);
            });
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
                initialPreviewAsData: true,
                showCancel: true,
                allowedFileTypes: ['image'],
                allowedFileExtensions: ['jpg','png','gif'],
                overwriteInitial: false,
                maxFileSize: 2000,
                maxFileNum: 20,
                minFileNum: 1,

                // minFileCount: 0,
                // maxFileCount: 0,
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
                slidesPerView: 5,
                slidesPerColumn: 2,
                spaceBetween: 10,
                slidesPerColumnFill: 'row',
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true
                }
            });
            $(".view-image").click(function (event) {
                event.preventDefault();
                let $this = $(this);
                let id = $this.attr('id');
                console.log(id);
                $("#"+id).fileinput({
                    initialPreviewAsData: true,
                    overwriteInitial: false,
                    showCancel: true,
                });

            });
        });
        //delete
        $(document).ready(function() {
            function deleteItem(url, id){
                Swal.fire({
                    title: 'Bạn có chắc không?',
                    text: "Bạn sẽ không thể hoàn nguyên điều này!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Vâng, xóa nó!',
                    cancelButtonText: 'Hủy!',
                    customClass: {
                        confirmButton: 'btn btn-primary',
                        cancelButton: 'btn btn-outline-danger ml-1'
                    },
                    buttonsStyling: false
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            type: 'get',
                            url: url,
                            success: function(response) {
                                console.log(response);
                                $('#sid'+id).remove();
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Đã xóa!',
                                    text: 'Tài nguyên này đã được xóa!',
                                    customClass: {
                                        confirmButton: 'btn btn-success'
                                    }
                                }).then((result) => {
                                    if (result.value) {
                                        // window.location.reload();
                                    }
                                });

                            },
                            error: function (jqXHR, textStatus, errorThrown) {
                                //xử lý lỗi tại đây
                            }
                        });
                    } else if (result.dismiss === Swal.DismissReason.cancel) {
                        Swal.fire({
                            title: 'Đã hủy',
                            text: 'Tài nguyên của bạn an toàn :)',
                            icon: 'error',
                            customClass: {
                                confirmButton: 'btn btn-success'
                            }
                        });
                    }
                });
            }
            $(".delete-record").click(function (event) {
                event.preventDefault();
                let $this = $(this);
                let url = $this.attr('href');
                let id = $this.attr('data-id');
                deleteItem(url, id)
            });
        });
        $(document).ready(function() {
            $(".item-detail").click(function (event) {
                event.preventDefault();
                // $('#output_image').attr('src', response.data.avatar);
                let $this = $(this);
                let src = $this.attr('data-image-src');
                let detailTitle = $this.attr('data-detail-title');

                console.log(src);
                $(' img.file-zoom-detail ').attr('src', src);
                $('#detail-title').text(detailTitle);
            });

        });

    </script>
@stop
