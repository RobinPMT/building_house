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
                <form class="tree-most" id="form_filter" method="get" action="{{route('admin.get.list.room', ['_page' => 1])}}">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_length" id="example_length">
                                <label for="product_id" style="margin-left: 20px;margin-bottom: 10px;margin-top: 15px;">Lọc theo sản phẩm
                                    <select name="product_id" id="product_id" aria-controls="example" class="custom-select custom-select-sm form-control form-control-sm" class="product_id_filter" onchange="onChangeV('product_id', value)">
                                        <option value="" selected>Chọn sản phẩm</option>
                                        @if(isset($products, $status) && $status)
                                            @foreach($products as $key => $product)
                                                <option {{\Request::get('product_id') == $product['id'] ? "selected=selected" : ""}} value="{{ $product['id']}}">{{ $product['title']}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </label>

                                <label for="product_id" style="margin-left: 20px;margin-bottom: 10px;margin-top: 15px;">Lọc theo phòng
                                    <select name="_parent_id" id="_parent_id" aria-controls="example" class="custom-select custom-select-sm form-control form-control-sm" class="_parent_id_filter" onchange="onChangeV('_parent_id', value)">
                                        <option value="" selected>Chọn phòng</option>
                                        @if(isset($rooms, $status) && $status)
                                            @foreach($rooms as $key => $room)
                                                <option {{\Request::get('_parent_id') == $room['id'] ? "selected=selected" : ""}} value="{{ $room['id']}}">{{ $room['title']}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </label>
                            </div>
                        </div>
{{--                                            <div class="col-sm-12 col-md-6">--}}
{{--                                                <div id="example_filter" class="dataTables_filter">--}}
{{--                                                    <label>Search:--}}
{{--                                                        <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example">--}}
{{--                                                    </label>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
                    </div>
                </form>
                <table id="example" class="table table-bordered  display nowrap" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tiêu đề</th>
                        <th>Danh mục cha</th>
                        <th>Sản phẩm</th>
                        <th>Thứ tự</th>
                        <th>Người tạo</th>
                        <th>Trạng thái</th>
                        <th>Hành động</th>
                    </tr>
                    </thead>
                    <tbody>
                        @if(isset($data, $status) && $status)
                            @foreach($data as $stt => $item)
                                <tr id="sid{{$item['id']}}">
                                    <td scope="row">{{$stt + 1}}</td>
                                    <td style="white-space: normal;">{{$item['title']}}</td>
                                    <td style="white-space: normal;">
                                        {{isset($item['parent']['title']) ? $item['parent']['title'] : ''}}
                                    </td>
                                    <td style="">
                                        <ul>
                                            @if(isset($item['products']))
                                                @foreach($item['products'] as $product)
                                                    <li>{{$product['title']}}</li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </td>
                                    <td>{{$item['order']}}</td>
                                    <td style="white-space: normal;">{{$item['creator']['name']}}</td>
                                    <td style="">
                                        <a class="badge badge-pill {{$item['arr_active']['class']}}" href="{{route('admin.get.action.room', ['active', $item['id']])}}">
                                            {{$item['arr_active']['name']}}
                                        </a>
                                    </td>
                                    <td style="display: none;">
                                        <a href="{{route('admin.get.action.room', ['delete', $item['id']])}}" class="delete-record"  id="confirm-color" data-id="{{$item['id']}}">
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
                                        <a href="{{route('admin.get.find.room', $item['id'])}}" data-url-update="{{route('admin.update.room', $item['id'])}}" class="item-edit" data-toggle="modal" data-target="#modals-slide-in">
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
                        <th>Danh mục cha</th>
                        <th>Sản phẩm</th>
                        <th>Thứ tự</th>
                        <th>Người tạo</th>
                        <th>Trạng thái</th>
                        <th>Hành động</th>
                    </tr>
                    </tfoot>
                </table>
                @include("admin::room.form")
                <div class="row" style="margin-top: 8px;">
                    <div class="col-sm-12 col-md-5" style="margin-top: 8px;">
{{--                                                <div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 1 to 5 of 5 entries</div>--}}
                    </div>
                    <div class="col-sm-12 col-md-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="example_paginate">
                            <ul class="pagination" style="justify-content: flex-end">
                                @if(isset($meta['pagination']))
                                    <li class="paginate_button page-item previous {{$meta['pagination']['page'] > 1 ? '' : 'disabled'}}" id="example_previous">
                                        <a href="{{route('admin.get.list.room', ['_page' => $meta['pagination']['page'] - 1, 'product_id' =>\Request::get('product_id'), '_parent_id' =>\Request::get('_parent_id')])}}" aria-controls="example" data-dt-idx="0" tabindex="0" class="page-link">Trang trước</a>
                                    </li>
                                    @if(isset($meta['pagination']['lastPage']))
                                        @for($i = 1; $i <= $meta['pagination']['lastPage']; $i++)
                                            <li class="paginate_button page-item {{$meta['pagination']['page'] == $i ? 'active' : ''}}">
                                                <a href="{{route('admin.get.list.room', ['_page' => $i, 'product_id' =>\Request::get('product_id'), '_parent_id' =>\Request::get('_parent_id')])}}" aria-controls="example" data-dt-idx="1" tabindex="0" class="page-link">{{$i}}</a>
                                            </li>
                                        @endfor
                                    @endif
                                    <li class="paginate_button page-item next {{$meta['pagination']['page'] < $meta['pagination']['lastPage'] ? '' : 'disabled'}}" id="example_next">
                                        <a href="{{route('admin.get.list.room', ['_page' => $meta['pagination']['page'] + 1, 'product_id' =>\Request::get('product_id'), '_parent_id' =>\Request::get('_parent_id')])}}" aria-controls="example" data-dt-idx="2" tabindex="0" class="page-link">Trang sau</a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
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
    </script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                responsive: true,
                "columns": [
                    { "width": "2%" },
                    { "width": "15%" },
                    { "width": "5%" },
                    null,
                    { "width": "5%" },
                    { "width": "5%" },
                    { "width": "5%" },
                    { "width": "5%" },
                ],
                paging: false,
                showEntries: false,
                lengthChange: false,
                searching: false,
                ordering    : true,
                bInfo      : false,
                autoWidth  : false
            });
            $(".select-multi").select2({
                // placeholder: "Chọn danh mục cha",
                // tags: true,
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
            $( "#parent_id" ).change(function () {
                let count  = 0;
                $("#select2-parent_id-container").text($( "#parent_id option:selected" ).text().trim());
                let current_id = null;
                if ($("#_id" ).val()) {
                    current_id = $("#_id" ).val();
                }
                let url = '/admin/room/check_order/'+$("#parent_id option:selected" ).val() + '/' +current_id;
                console.log();
                if($("#parent_id option:selected" ).val()) {
                    $.ajax({
                        type: 'GET',
                        url: url,
                        success: function (response) {
                            console.log(response)
                            $('#_order_room').val(response.order);
                        }
                    })
                }

            });
        });
        // ClassicEditor
        //     .create( document.querySelector( '#content' ) )
        //     .catch( error => {
        //         console.error( error );
        // });


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
                            $("#parent_id").val(response.data.parent_id).change();
                            $("#product_ids").val(response.data.product_ids).change();
                            $('#_order_room').val(response.data.order);
                            $('#title').val(response.data.title);
                            if(response.data.active == '1'){
                                $("form #checkbox_active").attr('checked', true)
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


        // form add
        $(document).ready(function() {
            $(".item-add").click(function (event) {
                if($('#form-crud').attr('action') !== '{{route('admin.store.room')}}'){
                    $('#form-crud').trigger("reset");
                    $("#parent_id").val('').change();
                    $("#product_ids").val('').change();
                    // $('#modals-slide-in').on('hidden.bs.modal', function (event) {
                    //     $(this).find('form').trigger('reset');
                    // });
                }
                $('#form-crud').attr('action', '{{route('admin.store.room')}}');
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
                        }

                    },
                    messages: {
                        title: {
                            required: "Vui lòng không bỏ trống!"
                        }
                    }
                });
            }
        });

    </script>
@stop
