@extends('admin::layouts.master')
@section('content')
    <section class="form-control-repeater">
        <div class="row">
            <!-- Invoice repeater -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Mô tả Consolar Coffee & Food</h4>
                    </div>
                    <div class="card-body">
                        @if(isset($setting))
                            <form action="{{route('admin.update.setting', [$setting['id']])}}"  method="POST" role="form" enctype="multipart/form-data">
                                @csrf
                                <div>
                                    <div id="sid{{$setting['id']}}" data-id="{{$setting['id']}}">
                                        <div class="row d-flex align-items-end">
                                            <div class="col-md-12 col-12">
                                                <div class="form-group">
                                                    <label for="value">Đoạn header Consolar Coffee & Food</label>
                                                    <textarea class="form-control" name="value" value="{{old('value',isset($setting['value']) ? $setting['value'] : '')}}" id="value" rows="4" placeholder="Nội dung">{{old('value',isset($setting['value']) ? $setting['value'] : '')}}</textarea>
                                                </div>
                                            </div>
{{--                                            <div class="col-md-4 col-12">--}}
{{--                                                <div class="form-group">--}}
{{--                                                    <img id="output_image_extra" src="{{isset($setting['avatar']) ? pare_url_file($setting['avatar'], 'settings') : asset('images/no_image.png')}}" alt="" width="200px" height="160px">--}}
{{--                                                </div>--}}
{{--                                                <div class="form-group">--}}
{{--                                                    <label for="input_image_extra">Ảnh Banner <strong>(Kích thước: 1920x620 pixel)</strong> <span style="color: red">*</span></label>--}}
{{--                                                    <div class="custom-file">--}}
{{--                                                        <input type="file" class="custom-file-input" id="input_image_extra" name="avatar" {{isset($setting['avatar']) ? '' : 'required'}}>--}}
{{--                                                        <label class="custom-file-label" for="input_image_extra">Chọn ảnh</label>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
                                            <div class="col-md-12 col-12">
                                                <label>Upload ảnh cho thư viện <strong>(Kích thước: 1920x620 pixel)</strong></label>
                                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                <div class="form-group">
                                                    <input type="file" name="images[]" id="file-1" multiple class="filename"
                                                           data-overwrite-initial="fasle" data-min-file-count="0">
                                                </div>
                                            </div>

                                        </div>
                                        <hr />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <button class="btn btn-icon btn-primary submit__items" type="submit">
                                            <i data-feather="save" class="mr-25"></i>
                                            <span>Lưu</span>
                                        </button>
                                    </div>
                                </div>
                            </form>

                            <hr />

                            <section id="component-swiper-multi-row">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Danh sách Slide</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="swiper-multi-row swiper-container">
                                            <div class="swiper-wrapper">
                                                @if(isset($setting['avatar']) && $avatars = json_decode($setting['avatar']))
                                                    @foreach($avatars as $stt => $avatar)
                                                        <div class="swiper-slide" id="sid{{$stt}}">
                                                            <div class="file-preview-frame krajee-default kv-preview-thumb"  data-template="image">
                                                                <div class="kv-zoom-cache">
                                                                    <div class="file-preview-frame krajee-default kv-zoom-thumb"  data-template="image">
                                                                        <div class="kv-file-content">
                                                                            <img
                                                                                    src="{{pare_url_file($avatar, 'settings')}}"

                                                                                    title="{{$avatar}}"
                                                                                    alt="{{$avatar}}"
                                                                                    style="width: auto; height: auto; max-width: 100%; max-height: 100%; image-orientation: from-image;"
                                                                            />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="file-thumbnail-footer">
                                                                    <div class="file-footer-caption">
                                                                        <div class="file-caption-info">{{$avatar}}</div>
                                                                    </div>
                                                                    <div class="file-actions">
                                                                        <div class="file-footer-buttons">
                                                                            <a href="{{route('admin.delete.images.setting',[$setting['id'], $avatar])}}" data-id="{{$setting['id']}}" class="kv-file-remove btn btn-sm btn-kv btn-default btn-outline-secondary delete-image" title="Remove file"><i class="glyphicon glyphicon-trash"></i></a>
                                                                            <a href="#" id="data-image-{{$setting['id']}}"  data-detail-title="{{$avatar}}" data-image-src="{{pare_url_file($avatar, 'settings')}}" data-toggle="modal" data-target="#image_modal" class="kv-file-zoom btn btn-sm btn-kv btn-default btn-outline-secondary item-detail" title="View Details"><i class="glyphicon glyphicon-zoom-in"></i></a>
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
                        @endif
                    </div>
                </div>
            </div>
            <!-- /Invoice repeater -->
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
    <section class="form-control-repeater">
        <div class="row">
            <!-- Invoice repeater -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Cơ hội kinh doanh tiềm năng cùng Consolar Housing</h4>
                    </div>
                    <div class="card-body">
                        @if(isset($settingHousing))
                            <form action="{{route('admin.update.setting', [$settingHousing['id']])}}"  method="POST" role="form" enctype="multipart/form-data">
                                @csrf
                                <div>
                                    <div id="sid{{$settingHousing['id']}}" data-id="{{$settingHousing['id']}}">
                                        <div class="row d-flex align-items-end">
                                            <div class="col-md-12 col-12">
                                                <div class="form-group">
                                                    <label for="content">Mô tả cơ hội kinh doanh tiềm năng cùng Consolar Housing</label>
                                                    <textarea class="form-control" name="value" value="{{old('value',isset($settingHousing['value']) ? $settingHousing['value'] : '')}}" id="content" rows="4" placeholder="Nội dung">{{old('value',isset($settingHousing['value']) ? $settingHousing['value'] : '')}}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <img id="output_image_extra_setting_main" src="{{isset($settingHousing['avatar']) ? pare_url_file($settingHousing['avatar'], 'settings') : asset('images/no_image.png')}}" alt="" width="200px" height="160px">
                                                </div>
                                                <div class="form-group">
                                                    <label for="input_image_extra_setting_main">Ảnh trước <strong>(Kích thước: 330x200 pixel)</strong> <span style="color: red">*</span></label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="input_image_extra_setting_main" name="avatar" {{isset($settingHousing['avatar']) ? '' : 'required'}}>
                                                        <label class="custom-file-label" for="input_image_extra_setting_main">Chọn ảnh</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <img id="output_image_extra_setting" src="{{isset($settingHousing['avatar_not_main']) ? pare_url_file($settingHousing['avatar_not_main'], 'settings') : asset('images/no_image.png')}}" alt="" width="200px" height="160px">
                                                </div>
                                                <div class="form-group">
                                                    <label for="input_image_extra_setting">Ảnh sau <strong>(Kích thước: 660x440 pixel)</strong> <span style="color: red">*</span></label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="input_image_extra_setting" name="avatar_not_main" {{isset($settingHousing['avatar_not_main']) ? '' : 'required'}}>
                                                        <label class="custom-file-label" for="input_image_extra_setting">Chọn ảnh</label>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <hr />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <button class="btn btn-icon btn-primary submit__items" type="submit">
                                            <i data-feather="save" class="mr-25"></i>
                                            <span>Lưu</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
            <!-- /Invoice repeater -->
        </div>
    </section>
    <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header border-bottom p-1">
                <div class="head-label"><h4 class="mb-0">Quy trình làm việc</h4></div>
                <div class="dt-action-buttons text-right">
                    <div class="dt-buttons d-inline-flex">
                        <button class="dt-button create-new btn btn-primary item-add" tabindex="0" aria-controls="DataTables_Table_0" type="button" data-toggle="modal" data-target="#modals-slide-in">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus mr-50 font-small-4">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>
                                Thêm mới
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <table id="example" class="table table-bordered  display nowrap" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>STT</th>
                    <th>Tiêu đề</th>
                    <th>Ảnh</th>
{{--                    <th>Thứ tự</th>--}}
                    <th>Trạng thái</th>
                    <th>Hành động</th>
                </tr>
                </thead>
                <tbody>
                @if(isset($data, $status) && $status)
                    @foreach($data as $stt => $item)
                        <tr id="sid{{$item['id']}}">
{{--                                <td scope="row">{{$stt+1}}</td>--}}
                                <td style="">{{$item['order']}}</td>
                                <td>{{$item['title']}}</td>
                                <td style="">
                                    <img src="{{$item['avatar_main']}}" width="100px" height="100px" alt="">
                                </td>
{{--                                <td style="">{{$item['order']}}</td>--}}
                                <td style="">
                                    <a class="badge badge-pill {{$item['arr_active']['class']}}" href="{{route('admin.get.action.housing', ['active', $item['id']])}}">
                                        {{$item['arr_active']['name']}}
                                    </a>
                                </td>
                                <td style="display: none;">
                                    <a href="{{route('admin.get.action.housing', ['delete', $item['id']])}}" class="delete-record"  id="confirm-color" data-id="{{$item['id']}}">
                                        <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-trash-2 font-small-4 mr-50"
                                        >
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                        </svg>
                                    </a>
                                    <a href="{{route('admin.get.find.housing', $item['id'])}}" data-url-update="{{route('admin.update.housing', $item['id'])}}" class="item-edit" data-toggle="modal" data-target="#modals-slide-in">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit font-small-4">
                                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                    @endforeach
                @endif

                </tbody>
                <tfoot>
                <tr>
                    <th>STT</th>
                    <th>Tiêu đề</th>
                    <th>Ảnh</th>
{{--                    <th>Thứ tự</th>--}}
                    <th>Trạng thái</th>
                    <th>Hành động</th>
                </tr>
                </tfoot>
            </table>
            <div class="row" style="margin-top: 8px;">
                <div class="col-sm-12 col-md-5" style="margin-top: 8px;">
                    {{--                        <div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 1 to 5 of 5 entries</div>--}}
                </div>
                <div class="col-sm-12 col-md-7">
                    <div class="dataTables_paginate paging_simple_numbers" id="example_paginate">
                        <ul class="pagination" style="justify-content: flex-end">
                            @if(isset($meta['pagination']))
                                <li class="paginate_button page-item previous {{$meta['pagination']['page'] > 1 ? '' : 'disabled'}}" id="example_previous">
                                    <a href="{{route('admin.get.list.housing', ['_page' => $meta['pagination']['page'] - 1])}}" aria-controls="example" data-dt-idx="0" tabindex="0" class="page-link">Trang trước</a>
                                </li>
                                @if(isset($meta['pagination']['lastPage']))
                                    @for($i = 1; $i <= $meta['pagination']['lastPage']; $i++)
                                        <li class="paginate_button page-item {{$meta['pagination']['page'] == $i ? 'active' : ''}}">
                                            <a href="{{route('admin.get.list.housing', ['_page' => $i])}}" aria-controls="example" data-dt-idx="1" tabindex="0" class="page-link">{{$i}}</a>
                                        </li>
                                    @endfor
                                @endif
                                <li class="paginate_button page-item next {{$meta['pagination']['page'] < $meta['pagination']['lastPage'] ? '' : 'disabled'}}" id="example_next">
                                    <a href="{{route('admin.get.list.housing', ['_page' => $meta['pagination']['page'] + 1])}}" aria-controls="example" data-dt-idx="2" tabindex="0" class="page-link">Trang sau</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@include("admin::housing.form")
@stop

@section('script')
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                responsive: true,
                paging: false,
                showEntries: false,
                lengthChange: false,
                searching: false,
                ordering    : true,
                bInfo      : false,
                autoWidth  : false
            });
        });
        $("#file-1").fileinput({
            theme: 'fa5',
            showUpload: false,
            showRemove:true,
            initialPreviewAsData: true,
            showCancel: true,
            allowedFileTypes: ['image'],
            allowedFileExtensions: ['jpg','png','gif'],
            overwriteInitial: false,
            maxFileSize: 20000,
            maxFileNum: 20,
            minFileNum: 2,
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

    <script>
        $(document).ready(function() {
            $(".delete-image").click(function (e) {
                e.preventDefault();
                let $this = $(this);
                let url = $this.attr('href');
                let id = $this.index();
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
                                // console.log(response);
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
                                        window.location.reload();
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

            });
            // $(".detele-item").click(function (e) {
            $(".delete-record").click(function (e) {
                e.preventDefault();
                let $this = $(this);
                let url = $this.attr('href');
                let id = $this.attr('data-id');

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
                                // console.log(response);
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
                                        window.location.reload();
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

            });
        });

        //edit
        $(document).ready(function() {
            function edit(url, data_url_update) {
                $("#modals-slide-in").modal('show');
                $.ajax({
                    type: 'GET',
                    url: url,
                    success: function (response) {
                        console.log(response)
                        if(response.status) {
                            $('#title').val(response.data.title);
                            $('#title').removeClass('error');
                            $('#title-error').remove();
                            $('#link').val(response.data.link);
                            $('#order').val(response.data.order);
                            $('#output_image').attr('src', response.data.avatar_main);
                            $('#input_image').removeAttr('required');
                            $('#input_image').removeClass('error');
                            $('.file_src').text(response.data.avatar_main);
                            $('#input_image-error').remove();
                            $('#output_image_extra').attr('src', response.data.avatar_not_main);
                            if(response.data.active == '1'){
                                $("form #checkbox_active").attr('checked', true)
                            }
                            $('textarea#_content').val(response.data.content);
                            // $("textarea#_content").html(response.data.content);
                            $('#exampleModalLabel').text('Cập nhật');
                            $('#form-crud').attr('action', data_url_update);
                        }
                    }
                })
            }
            $('table tbody').on( 'click', 'li span a.item-edit', function (event) {
                event.preventDefault();
                let $this = $(this);
                let url = $this.attr('href');
                let data_url_update = $this.attr('data-url-update');
                edit(url, data_url_update)
            });
            $(".item-edit").click(function (event) {
                event.preventDefault();
                let $this = $(this);
                let url = $this.attr('href');
                let data_url_update = $this.attr('data-url-update');
                edit(url, data_url_update)
            });
        });

        // form add
        $(document).ready(function() {
            $(".item-add").click(function (event) {
                if($('#form-crud').attr('action') !== '{{route('admin.store.housing')}}'){
                    $('#form-crud').trigger("reset");
                    $("form #checkbox_active").attr('checked', false);
                    $('#output_image').attr('src', '{{asset('images/no_image.png')}}');
                    $('#output_image_extra').attr('src', '{{asset('images/no_image.png')}}');
                    $('.file_src').text('Chọn ảnh');
                    $('#input_image').attr("required", true);
                }
                $('#form-crud').attr('action', '{{route('admin.store.housing')}}');
                $('#exampleModalLabel').text('Thêm mới');
            });

            let newUserForm = $(".add-new-record");
            // let newUserSidebar = $(".new-user-modal");
            // Form Validation
            if (newUserForm.length) {
                newUserForm.validate({
                    errorClass: "error",
                    rules: {
                        title: {
                            required: true,
                        },
                        link: {
                            required: true,
                        },
                        order: {
                            required: true,
                        },
                    },
                    messages: {
                        title: {
                            required: "Vui lòng không bỏ trống!"
                        },
                        link: {
                            required: "Vui lòng không bỏ trống!"
                        },
                        order: {
                            required: "Vui lòng không bỏ trống!"
                        },
                    }
                });
            }
        });
    </script>
@stop
