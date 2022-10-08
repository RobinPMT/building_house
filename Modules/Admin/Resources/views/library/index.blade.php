@extends('admin::layouts.master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom p-1">
                    <div class="head-label"><h6 class="mb-0">DataTable with Buttons</h6></div>
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
                        <th>List ảnh</th>
                        <th>Người tạo</th>
                        <th>Trạng thái</th>
                        <th>Nổi bật</th>
                        <th>Hành động</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($data, $status) && $status)
                        @foreach($data as $stt => $item)
                            <tr id="sid{{$item['id']}}">
                                <td scope="row">{{$stt + 1}}</td>
                                <td>{{$item['title']}}</td>
                                <td style="">
                                    <img src="{{$item['avatar_url']}}" width="100px" height="100px" alt="">
                                </td>
                                <td style="">
                                    <a class="badge badge-pill badge-light-primary item-detail" href="{{route('admin.delete.images.library', [$item['id'], ''])}}" data-title="{{$item['title']}}" data-arr-images="{{$item['arr_image']}}" data-toggle="modal" data-target="#detail-image">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-archive font-small-4 mr-50">
                                            <polyline points="21 8 21 21 3 21 3 8"></polyline>
                                            <rect x="1" y="3" width="22" height="5"></rect>
                                            <line x1="10" y1="12" x2="14" y2="12"></line>
                                        </svg>Xem
                                    </a>
                                </td>
                                <td style="">{{$item['creator']['name']}}</td>
                                <td style="">
                                    <a class="badge badge-pill {{$item['arr_active']['class']}}" href="{{route('admin.get.action.slide', ['active', $item['id']])}}">
                                        {{$item['arr_active']['name']}}
                                    </a>
                                </td>
                                <td style="">
                                    <a class="badge badge-pill {{$item['arr_hot']['class']}}" href="{{route('admin.get.action.slide', ['hot', $item['id']])}}">
                                        {{$item['arr_hot']['name']}}
                                    </a>
                                </td>
                                <td style="display: none;">
{{--                                    <a href="#" class="item-detail" data-title="{{$item['title']}}" data-content="{{$item['content']}}" data-toggle="modal" data-target="#detail-library">--}}
{{--                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text font-small-4 mr-50">--}}
{{--                                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>--}}
{{--                                            <polyline points="14 2 14 8 20 8"></polyline>--}}
{{--                                            <line x1="16" y1="13" x2="8" y2="13"></line>--}}
{{--                                            <line x1="16" y1="17" x2="8" y2="17"></line>--}}
{{--                                            <polyline points="10 9 9 9 8 9"></polyline></svg>--}}
{{--                                    </a>--}}
                                    <a href="{{route('admin.get.action.slide', ['delete', $item['id']])}}" class="delete-record"  id="confirm-color" data-id="{{$item['id']}}">
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
                                    <a href="{{route('admin.get.find.library', $item['id'])}}" data-url-update="{{route('admin.update.library', $item['id'])}}" class="item-edit" data-toggle="modal" data-target="#modals-slide-in">
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
                        <th>List ảnh</th>
                        <th>Người tạo</th>
                        <th>Trạng thái</th>
                        <th>Nổi bật</th>
                        <th>Hành động</th>
                    </tr>
                    </tfoot>
                </table>
            </div>

        </div>
    </div>

    @include("admin::library.form")
    @include("admin::library.image")

    {{--<!--/ Multi row Slides Per View swiper -->--}}
    <div id="image_modal" class="file-zoom-dialog modal fade" tabindex="-1" aria-labelledby="image_modal" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="">Detailed Preview</h5>
                    <span class="kv-zoom-title" title="" id="detail-title">
                </span>
                    <div class="kv-zoom-actions">
                        <button type="button" class="btn btn-sm btn-kv btn-default btn-outline-secondary btn-close" title="Close detailed preview" data-dismiss="modal" aria-hidden="true">
                            <i class="glyphicon glyphicon-remove"></i>
                        </button>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="floating-buttons"></div>
                    <div class="kv-zoom-body file-zoom-content krajee-default">
                        <img src="" class="file-preview-image kv-preview-data file-zoom-detail" title="" alt="" style="width: auto; height: auto; max-width: 100%; max-height: 100%;">
                    </div>

                    <button type="button" class="btn btn-navigate btn-prev" title="View previous file" style="display: none;"><i class="glyphicon glyphicon-triangle-left"></i></button> <button type="button" class="btn btn-navigate btn-next" title="View next file" style="display: none;"><i class="glyphicon glyphicon-triangle-right"></i></button>
                </div>
            </div>
        </div>
    </div>
@stop

@section('script')
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                responsive: true,
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
                maxFileSize: 2000,
                maxFileNum: 20,
                minFileNum: 2,
            });
        });

        // show item detail
        $(document).ready(function() {
            function detail(title, data_images, url) {
                $(".content__title").text(title);
                let arr_images = JSON.parse(data_images);
                let html = '';
                for (let i = 0; i < arr_images.length; i++) {
                    html +=`
                        <div class="file-preview-frame krajee-default kv-preview-thumb" id="modal-image-${i}">
                            <div class="kv-zoom-cache">
                                <div class="file-preview-frame krajee-default kv-zoom-thumb"  >
                                    <div class="kv-file-content">
                                        <img src="${arr_images[i]}" class="center-block img-responsive" style="margin: auto; width: auto; height: auto; max-width: 100%; max-height: 100%; image-orientation: from-image;" />
                                    </div>
                                </div>
                            </div>
                            <div class="file-actions">
                                <div class="file-footer-buttons">
                                    <a href="${url}" data-id-modal="${i}" data-image-src="${arr_images[i]}" class="kv-file-remove btn btn-sm btn-kv btn-default btn-outline-secondary item-delete-modal" title="Remove file">
                                        <i class="glyphicon glyphicon-trash"></i>
                                    </a>
                                    <a href="#" data-image-src="${arr_images[i]}" data-toggle="modal" data-target="#image_modal" class="kv-file-zoom btn btn-sm btn-kv btn-default btn-outline-secondary item-detail-modal" title="View Details">
                                        <i class="glyphicon glyphicon-zoom-in"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
                    `
                }
                $(".content__body").html(html);
                //detail image modal
                $(".item-detail-modal").click(function (event) {
                    event.preventDefault();
                    let $this = $(this);
                    let src = $this.attr('data-image-src');
                    $(' img.file-zoom-detail ').attr('src', src);
                });
                $(".item-delete-modal").click(function (event) {
                    event.preventDefault();
                    let $this = $(this);
                    let src = $this.attr('data-image-src');
                    let url = $this.attr('href');
                    let id = $this.attr('data-id-modal');

                    let arr = src.split('/');
                    let image = arr[arr.length - 1];
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
                                type: 'delete',
                                url: url+ '/' +image,
                                success: function(response) {
                                    if (response.status) {
                                        $('#modal-image-'+id).remove();
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
                                    } else {
                                        Swal.fire({
                                            title: 'Thất bại!',
                                            text: 'Xóa thất bại!',
                                            icon: 'error',
                                            customClass: {
                                                confirmButton: 'btn btn-error'
                                            }
                                        });
                                    }
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
            }
            $('table tbody').on( 'click', 'li span a.item-detail', function (event) {
                event.preventDefault();
                let $this = $(this);
                detail($this.attr('data-title'), $this.attr('data-arr-images'));
            });
            $(".item-detail").click(function (event) {
                event.preventDefault();
                let $this = $(this);
                detail($this.attr('data-title'), $this.attr('data-arr-images'), $this.attr('href'));
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
            }
            $(".delete-record").click(function (event) {
                event.preventDefault();
                let $this = $(this);
                let url = $this.attr('href');
                let id = $this.attr('data-id');
                deleteItem(url, id)
            });
            $('table tbody').on( 'click', 'li span a.delete-record', function (event) {
                event.preventDefault();
                let $this = $(this);
                let url = $this.attr('href');
                let id = $this.attr('data-id');
                deleteItem(url, id)
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
                            $('#slug').val(response.data.slug);
                            $('#output_image').attr('src', response.data.avatar_url);
                            if(response.data.active == '1'){
                                $("form #checkbox_active").attr('checked', true)
                            }
                            if(response.data.hot == '1'){
                                $("form #checkbox_hot").attr('checked', true)
                            }
                            $('#description_seo').val(response.data.description_seo);
                            $('#title_seo').val(response.data.title_seo);
                            $('#keyword_seo').val(response.data.keyword_seo);
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
                if($('#form-crud').attr('action') !== '{{route('admin.store.library')}}'){
                    $('#form-crud').trigger("reset");
                }
                $('#form-crud').attr('action', '{{route('admin.store.library')}}');
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
                        slug: {
                            required: true,
                        },
                    },
                    messages: {
                        title: {
                            required: "Vui lòng không bỏ trống!"
                        },
                        slug: {
                            required: "Vui lòng không bỏ trống!"
                        },
                    }
                });
            }
        });
    </script>
@stop
