@extends('admin::layouts.master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom p-1">
                    <div class="head-label"><h6 class="mb-0">Sản phẩm</h6></div>
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
                <form class="tree-most" id="form_filter" method="get" action="{{route('admin.get.list.product', ['_page' => 1])}}">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_length" id="example_length">
                                <label for="_category_id" style="margin-left: 20px;margin-bottom: 10px;margin-top: 15px;">Lọc sản phẩm theo danh mục
                                    <select name="_category_id" id="_category_id" aria-controls="example" class="custom-select custom-select-sm form-control form-control-sm" class="_category_id_filter" onchange="onChangeV('_category_id', value)">
                                        <option value="" selected>Chọn danh mục</option>
                                        @if(isset($categories, $status) && $status)
                                            @foreach($categories as $key => $category)
                                                <option {{\Request::get('_category_id') == $category['id'] ? "selected=selected" : ""}} value="{{ $category['id']}}">{{ $category['title']}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </label>
                            </div>
                        </div>
                        {{--                    <div class="col-sm-12 col-md-6">--}}
                        {{--                        <div id="example_filter" class="dataTables_filter">--}}
                        {{--                            <label>Search:--}}
                        {{--                                <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example">--}}
                        {{--                            </label>--}}
                        {{--                        </div>--}}
                        {{--                    </div>--}}
                    </div>
                </form>

                <table id="example" class="table table-bordered  display nowrap" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên</th>
                        <th>Ảnh bản vẽ</th>
                        <th>Ảnh tự thiết kế</th>
                        <th>Kích thước</th>
                        <th>List ảnh</th>
                        <th>Người tạo</th>
{{--                        <th>Thứ tự</th>--}}
                        <th>Trạng thái</th>
                        <th>Nổi bật</th>
                        <th>Hành động</th>
                    </tr>
                    </thead>
                    <tbody>
                        @if(isset($data, $status) && $status)
                            @foreach($data as $stt => $item)
                                <tr id="sid{{$item['id']}}">
{{--                                    <td scope="row">{{$stt + 1}}</td>--}}
                                    <td style="">{{$item['order']}}</td>
                                    <td style="white-space: normal;">
                                        <div class="d-flex justify-content-left align-items-center">
                                            <div class="d-flex flex-column">
                                                <span class="emp_name text-truncate font-weight-bold">{{$item['title']}}</span>
                                                <small class="emp_post text-truncate text-muted">{{isset($item['category']['title']) ? $item['category']['title'] : 'Không rõ'}}</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td style="">
                                        <img src="{{$item['avatar_design']}}" width="100px" height="100px" alt="">
                                    </td>
                                    <td style="">
                                        <img src="{{$item['image_back_ground_design']}}" width="100px" height="100px" alt="">
                                    </td>
                                    <td style="">
                                        <ul>
                                            <li>Chiều dài: {{$item['longs']}} m</li>
                                            <li>Chiều rộng: {{$item['width']}} m</li>
                                            <li>Chiều cao: {{$item['height']}} m</li>
                                            <li>Diện tích: {{$item['area']}} m<sup>2</sup></li>
                                        </ul>
                                    </td>
                                    <td style="">
                                        <a class="badge badge-pill badge-light-primary item-detail" action-image="{{route('admin.action.images.product', [$item['id'], ''])}}" href="{{route('admin.delete.images.product', [$item['id'], ''])}}" data-title="{{$item['title']}}" data-arr-images="{{$item['arr_image']}}" data-toggle="modal" data-target="#detail-image">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-archive font-small-4 mr-50">
                                                <polyline points="21 8 21 21 3 21 3 8"></polyline>
                                                <rect x="1" y="3" width="22" height="5"></rect>
                                                <line x1="10" y1="12" x2="14" y2="12"></line>
                                            </svg>Xem
                                        </a>
                                    </td>
                                    <td style="">{{$item['creator']['name']}}</td>
{{--                                    <td style="">{{$item['order']}}</td>--}}
                                    <td style="">
                                        <a class="badge badge-pill {{$item['arr_active']['class']}}" href="{{route('admin.get.action.product', ['active', $item['id']])}}">
                                            {{$item['arr_active']['name']}}
                                        </a>
                                    </td>
                                    <td style="">
                                        <a class="badge badge-pill {{$item['arr_hot']['class']}}" href="{{route('admin.get.action.product', ['hot', $item['id']])}}">
                                            {{$item['arr_hot']['name']}}
                                        </a>
                                    </td>
                                    <td style="display: none;">
{{--                                        <a href="#" class="item-detail" data-title="{{$item['title']}}" data-content="{{$item['content'] ?? null}}" data-toggle="modal" data-target="#detail-post">--}}
{{--                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text font-small-4 mr-50">--}}
{{--                                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>--}}
{{--                                                <polyline points="14 2 14 8 20 8"></polyline>--}}
{{--                                                <line x1="16" y1="13" x2="8" y2="13"></line>--}}
{{--                                                <line x1="16" y1="17" x2="8" y2="17"></line>--}}
{{--                                                <polyline points="10 9 9 9 8 9"></polyline></svg>--}}
{{--                                        </a>--}}
                                        <a href="{{route('admin.get.action.product', ['delete', $item['id']])}}" class="delete-record"  id="confirm-color" data-id="{{$item['id']}}">
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
                                        <a href="{{route('admin.get.find.product', $item['id'])}}" data-url-update="{{route('admin.update.product', $item['id'])}}" class="item-edit" data-toggle="modal" data-target="#modals-slide-in">
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
                        <th>Tên</th>
                        <th>Ảnh bản vẽ</th>
                        <th>Ảnh tự thiết kế</th>
                        <th>Kích thước</th>
                        <th>List ảnh</th>
                        <th>Người tạo</th>
{{--                        <th>Thứ tự</th>--}}
                        <th>Trạng thái</th>
                        <th>Nổi bật</th>
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
                                        <a href="{{route('admin.get.list.product', array_merge(['_page' => $meta['pagination']['page'] - 1], ['_category_id' => \Request::get('_category_id')]))}}" aria-controls="example" data-dt-idx="0" tabindex="0" class="page-link">Trang trước</a>
                                    </li>
                                    @if(isset($meta['pagination']['lastPage']))
                                        @for($i = 1; $i <= $meta['pagination']['lastPage']; $i++)
                                            <li class="paginate_button page-item {{$meta['pagination']['page'] == $i ? 'active' : ''}}">
                                                <a href="{{route('admin.get.list.product', array_merge(['_page' => $i], ['_category_id' =>\Request::get('_category_id')]))}}" aria-controls="example" data-dt-idx="1" tabindex="0" class="page-link">{{$i}}</a>
                                            </li>
                                        @endfor
                                    @endif
                                    <li class="paginate_button page-item next {{$meta['pagination']['page'] < $meta['pagination']['lastPage'] ? '' : 'disabled'}}" id="example_next">
                                        <a href="{{route('admin.get.list.product', array_merge(['_page' => $meta['pagination']['page'] + 1], ['_category_id' =>\Request::get('_category_id')]))}}" aria-controls="example" data-dt-idx="2" tabindex="0" class="page-link">Trang sau</a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
{{--    {{dd($settingkeys)}}--}}
    @include("admin::product.form")
{{--    @include("admin::product.detail")--}}
    @include("admin::product.detail_image")
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
        function onChangeV(key, value) {
            $("#form_filter").submit();
        }
            // $('div.dataTables_length').on('click', 'label select.category_id_filter', function(e){
            //     console.log(1234)
            //     $("#form_filter").submit();
            // });
    </script>
    <script>
        // CKEDITOR.replace('content');
        // CKEDITOR.replace('editor1', {
        //     height: 150,
        //     removeButtons: 'PasteFromWord'
        // });
    </script>
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
                autoWidth  : false,
                "columns": [
                    { "width": "2%" },
                    { "width": "15%" },
                    null,
                    null,
                    null,
                    null,
                    null,
                    null,
                    null,
                    null,
                    // null
                ]
            });
            $(".select-single").select2({
                // placeholder: "Chọn danh mục cha",
                // tags: true,
                allowClear: true,
                language: {
                    noResults: function (params) {
                        return "Không tìm thấy kết quả!";
                    }
                }
            });
            $( "#category_id" ).change(function () {
                $("#select2-category_id-container").text($( "#category_id option:selected" ).text().trim());
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
        });
        // ClassicEditor
        //     .create( document.querySelector( '#content' ) )
        //     .catch( error => {
        //         console.error( error );
        // });

        // show item detail
        $(document).ready(function() {
            function detail(title, data_images, url, url_action_image) {
                $(".content__title").text(title);
                let arr_images = JSON.parse(data_images);
                console.log(arr_images)
                let html = '';
                for (let i = 0; i < arr_images.length; i++) {
                    html +=`
                        <div class="file-preview-frame krajee-default kv-preview-thumb" id="modal-image-${i}">
                            <div class="kv-zoom-cache">
                                <div class="file-preview-frame krajee-default kv-zoom-thumb"  >
                                    <div class="kv-file-content">
                                        <img src="${arr_images[i]['image']}" class="center-block img-responsive" style="margin: auto; width: auto; height: auto; max-width: 100%; max-height: 100%; image-orientation: from-image;" />
                                    </div>
                                </div>
                            </div>
                            <div class="file-actions">
                                <div class="file-footer-buttons">
                                    <a href="${url_action_image}" data-id-modal="${i}" data-image-src="${arr_images[i]['image']}" class="kv-file-remove btn btn-sm btn-kv btn-default btn-outline-${arr_images[i]['status'] ? 'warning' : 'secondary'}  item-update-modal" title="Trạng thái">
                                        ${arr_images[i]['status'] ? 'Chính' : 'Phụ'}
                                    </a>
                                    <a href="${url}" data-id-modal="${i}" data-image-src="${arr_images[i]['image']}" class="kv-file-remove btn btn-sm btn-kv btn-default btn-outline-secondary item-delete-modal" title="Remove file">
                                        <i class="glyphicon glyphicon-trash"></i>
                                    </a>
                                    <a href="#" data-image-src="${arr_images[i]['image']}" data-toggle="modal" data-target="#image_modal" class="kv-file-zoom btn btn-sm btn-kv btn-default btn-outline-secondary item-detail-modal" title="View Details">
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
                $(".item-update-modal").click(function (event) {
                    event.preventDefault();
                    let $this = $(this);
                    let src = $this.attr('data-image-src');
                    let url = $this.attr('href');
                    let id = $this.attr('data-id-modal');
                    console.log(url);
                    let arr = src.split('/');
                    let image = arr[arr.length - 1];
                    console.log(image);
                    Swal.fire({
                        title: 'Bạn có chắc không?',
                        text: "Bạn muốn cập nhật tài nguyên này!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Vâng, cập nhật!',
                        cancelButtonText: 'Hủy!',
                        customClass: {
                            confirmButton: 'btn btn-primary',
                            cancelButton: 'btn btn-outline-danger ml-1'
                        },
                        buttonsStyling: false
                    }).then((result) => {
                        if (result.value) {
                            window.location.href = url+ '/' +image;
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
                detail($this.attr('data-title'), $this.attr('data-arr-images'), $this.attr('href'), $this.attr('action-image'));
            });
            $(".item-detail").click(function (event) {
                event.preventDefault();
                let $this = $(this);
                detail($this.attr('data-title'), $this.attr('data-arr-images'), $this.attr('href'), $this.attr('action-image'));
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
                            $("#_id").val(response.data.id).change();
                            $('#title').val(response.data.title);
                            $('#title').removeClass('error');
                            $('#title-error').remove();
                            $('#slug').val(response.data.slug);
                            $('#slug').removeClass('error');
                            $('#slug-error').remove();
                            $('#longs').val(response.data.longs);
                            $('#width').val(response.data.width);
                            $('#height').val(response.data.height);
                            $('#area').val(response.data.area);
                            $('#room_number').val(response.data.room_number);
                            $('#room_description').val(response.data.room_description);
                            $("#category_id").val(response.data.category_id).change();
                            $('#output_image').attr('src', response.data.avatar_design);
                            $('#input_image').removeAttr('required');
                            $('#input_image').removeClass('error');
                            $('.file_src1').text(response.data.avatar_design);
                            $('#input_image-error').remove();
                            $('#output_image_extra').attr('src', response.data.image_back_ground_design);
                            $('#input_image_extra').removeAttr('required');
                            $('#input_image_extra').removeClass('error');
                            $('.file_src2').text(response.data.image_back_ground_design);
                            $('#input_image_extra-error').remove();
                            $("textarea#description").html(response.data.description);
                            $('#keyword_seo').val(response.data.keyword_seo);
                            $('#order').val(response.data.order);
                            // $('#content').text(response.data.content);
                            // $("textarea#content").html(response.data.content);
                            // CKEDITOR.instances.content.setData( response.data.content);
                            let setting_keys = response.data.setting_keys;
                            if(setting_keys) {
                                for (let i = 0; i < setting_keys.length; i++) {
                                    if (setting_keys[i]['tag_type'] === 'input') {
                                        $('#'+setting_keys[i]['key']).val(setting_keys[i]['value']);
                                    } else if (setting_keys[i]['tag_type'] === 'checkbox') {
                                        if(setting_keys[i]['value'] === '1'){
                                            $('form #'+setting_keys[i]['key']).attr('checked', true)
                                        }
                                    } else if (setting_keys[i]['tag_type'] === 'textarea') {
                                        $("textarea#"+setting_keys[i]['key']).html(setting_keys[i]['value']);
                                    }
                                }
                            }
                            $('#description_seo').val(response.data.description_seo);
                            $('#title_seo').val(response.data.title_seo);
                            // $('#output_image').attr('src', response.data.avatar);
                            // $('#input_image').val(response.data.avatar);
                            if(response.data.active == '1'){
                                $("form #checkbox_active").attr('checked', true)
                            }
                            if(response.data.hot == '1'){
                                $("form #checkbox_hot").attr('checked', true)
                            }
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

        // show item detail
        $(document).ready(function() {
            function detail(title, content) {
                $(".content__title").text(title);
                $(".content__body").html(content);
            }
            $('table tbody').on( 'click', 'li span a.item-detail', function (event) {
                event.preventDefault();
                let $this = $(this);
                detail($this.attr('data-title'), $this.attr('data-content'));
            });
            $(".item-detail").click(function (event) {
                event.preventDefault();
                let $this = $(this);
                detail($this.attr('data-title'), $this.attr('data-content'));
                // $("#detail-post").modal('show');
            });
        });

        // form add
        $(document).ready(function() {
            $(".item-add").click(function (event) {
                if($('#form-crud').attr('action') !== '{{route('admin.store.product')}}'){
                    $('#form-crud').trigger("reset");
                    // CKEDITOR.instances.content.setData('<p>Viết nội dung ở đây</p>');
                    // $('#modals-slide-in').on('hidden.bs.modal', function (event) {
                    //     $(this).find('form').trigger('reset');
                    // });
                    $('.file_src1').text('Chọn ảnh');
                    $('#input_image').attr("required", true);
                    $('.file_src2').text('Chọn ảnh');
                    $('#input_image_extra').attr("required", true);
                }
                $('#output_image').attr('src', '{{asset('images/no_image.png')}}');
                $('#output_image_extra').attr('src', '{{asset('images/no_image.png')}}');
                $("#_id" ).val('');
                $("#category_id").val('').change();
                $('#form-crud').attr('action', '{{route('admin.store.product')}}');
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
                        order: {
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
                        order: {
                            required: "Vui lòng không bỏ trống!"
                        },
                    }
                });
            }
        });

    </script>
@stop
