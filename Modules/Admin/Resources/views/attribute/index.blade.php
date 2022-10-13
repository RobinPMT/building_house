@extends('admin::layouts.master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom p-1">
                    <div class="head-label"><h6 class="mb-0">DataTable with Buttons</h6></div>
                    <div class="dt-action-buttons text-right">
                        <div class="dt-buttons d-inline-flex">
                            <button class="dt-button create-new btn btn-primary item-add" tabindex="0" aria-controls="DataTables_Table_0" type="button" data-toggle="modal" data-target="#modals-style-in" type-target="style">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus mr-50 font-small-4">
                                            <line x1="12" y1="5" x2="12" y2="19"></line>
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                        </svg>
                                        Thêm mới kiểu dáng
                                    </span>
                            </button>
                        </div>
                        <div class="dt-buttons d-inline-flex">
                            <button class="dt-button create-new btn btn-primary item-add" tabindex="0" aria-controls="DataTables_Table_0" type="button" data-toggle="modal" data-target="#modals-system-in" type-target="system">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus mr-50 font-small-4">
                                            <line x1="12" y1="5" x2="12" y2="19"></line>
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                        </svg>
                                        Thêm mới hệ thống
                                    </span>
                            </button>
                        </div>
                    </div>
                </div>
                <table id="example" class="table table-bordered  display nowrap" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên thuộc tính</th>
                        <th>Loại</th>
                        <th>Người tạo</th>
                        <th>Phòng</th>
                        <th>Trạng thái</th>
                        <th>Hành động</th>
                    </tr>
                    </thead>
                    <tbody>
{{--                    {{dd(Modules\Admin\Http\Controllers\AdminRoomController::showChildRooms())}}--}}
                        @if(isset($data, $status) && $status)
                            @foreach($data as $stt => $item)
                                <tr id="sid{{$item['id']}}">
                                    <td scope="row">{{$stt + 1}}</td>
                                    <td>{{$item['title']}}</td>
{{--                                    <td>{{ $item['type']}}</td>--}}
                                    <td>{{ $item['type'] == \App\Models\Attribute::TYPE_SYSTEM ? 'Hệ thống' : 'Kiểu dáng' }}</td>
                                    <td style="">{{$item['creator']['name']}}</td>
                                    <td style="">
                                        {{isset($item['room']['title']) ? $item['room']['title'] : ''}}
                                    </td>
                                    <td style="">
                                        <a class="badge badge-pill {{$item['arr_active']['class']}}" href="{{route('admin.get.action.attribute', ['active', $item['id']])}}">
                                            {{$item['arr_active']['name']}}
                                        </a>
                                    </td>
                                    <td style="display: none;">
                                        <a href="{{route('admin.get.action.attribute', ['delete', $item['id']])}}" class="delete-record"  id="confirm-color" data-id="{{$item['id']}}">
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
                                        <a href="{{route('admin.get.find.attribute', $item['id'])}}" data-url-update="{{route('admin.update.attribute', $item['id'])}}" class="item-edit" data-toggle="modal" type-target="{{$item['type']}}" data-target="#modals-{{$item['type']}}-in">
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
                        <th>Tên thuộc tính</th>
                        <th>Loại</th>
                        <th>Người tạo</th>
                        <th>Phòng</th>
                        <th>Trạng thái</th>
                        <th>Hành động</th>
                    </tr>
                    </tfoot>
                </table>
                @include("admin::attribute.form")
                @include("admin::attribute.form_style")
            </div>

        </div>
    </div>

@stop
@section('script')
    <script>
        $(document).ready(function() {
            $('input#file-1').change(function(){
                var files = $(this)[0].files;
                console.log(files)
                let html = '';
                for (let i = 0; i <  files.length; i++ ) {
                    html += `
                        <div data-repeater-item="" style="">
                            <label for="">Thuộc tính mới</label>
                            <div class="row d-flex align-items-end">
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="value">Tên màu sác</label>
                                        <input type="text" name="data_new[${i}][value]" class="form-control" id="value" aria-describedby="Nội dung" placeholder="Nội dung">
                                    </div>
                                </div>

                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="color">Chọn màu</label>
                                        <input type="color" name="data_new[${i}][color]" class="form-control" id="color" aria-describedby="Nội dung" placeholder="Nội dung">
                                    </div>
                                </div>

                                <div class="col-md-4 col-12 mb-50">
                                    <div class="form-group">
                                        <button class="btn btn-outline-danger text-nowrap px-1 waves-effect" data-repeater-delete="" type="button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x mr-25"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                            <span>Delete</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                    `;
                }
                $(".data_new_style").html(html);
            });
            // style
            $('.style-repeater').repeater({
                defaultValues: {
                    'type': 'home',
                },
                initEmpty: true,
                show: function () {
                    $(this).slideDown();
                },
                hide: function (deleteElement) {
                    if (confirm('Bạn có muốn xóa thuộc tính này?')) {
                        $(this).slideUp(deleteElement);
                    }
                }
            });
            $(".filename").fileinput({
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

            // $(".fileinput-remove-button").click(function (event) {
            //     event.preventDefault();
            //     $(".data_new_style").remove();
            // });


            $('#example').DataTable({
                responsive: true,
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
            $( "#room_id-system" ).change(function () {
                $("#select2-room_id-system-container").text($( "#room_id-system option:selected" ).text().trim());
            });
            $( "#room_id-style" ).change(function () {
                $("#select2-room_id-style-container").text($( "#room_id-style option:selected" ).text().trim());
            });
            function callProductAjax(product_id, target) {
                let url = '/admin/room/render_room_with_product/'+product_id;
                if(product_id) {
                    $.ajax({
                        type: 'GET',
                        url: url,
                        success: function (response) {
                            $("#room_id-" + target).val('').change();
                            console.log(response)
                            let html = `<option value="" selected>Chọn tiện nghi</option>` + response.data;
                            $('#room_id-'+ target).html(html);

                        }
                    });
                }
            }
            $( "#product_id-style" ).change(function () {
                callProductAjax($("#product_id-style" ).val(), 'style');
            });
            $( "#product_id-system" ).change(function () {
                callProductAjax($("#product_id-system" ).val(), 'system');
            });
            // form repeater jquery system
            $('.invoice-repeater').repeater({
                defaultValues: {
                    'type': 'home',
                },
                show: function () {
                    $(this).slideDown();
                    // Feather Icons
                    // if (feather) {
                    //     feather.replace({ width: 14, height: 14 });
                    // }
                },
                hide: function (deleteElement) {
                    if (confirm('Bạn có muốn xóa thuộc tính này?')) {
                        $(this).slideUp(deleteElement);
                    }
                }
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
            function edit(url, data_url_update, target) {
                // $("#"+modal).modal('show');
                $.ajax({
                    type: 'GET',
                    url: url,
                    success: async function (response) {
                        // console.log(response)
                        if(response.status) {
                            if(response.data.active == '1'){
                                $("form #checkbox_active-"+target).attr('checked', true)
                            }
                            if(response.data.arr_value) {
                                get_arr_value(response.data.arr_value);
                            }
                            if(response.data.arr_image) {
                                get_arr_image(response.data.arr_image);
                            }
                            $('#title-'+target).val(response.data.title);
                            $('#output_image').attr('src', response.data.avatar);


                            $('#exampleModalLabel').text('Cập nhật hệ thống');
                            $('#example-style').text('Cập nhật kiểu dáng');
                            $('#form-crud-'+target).attr('action', data_url_update);

                            await $('#product_id-'+target).val(response.data.product_id).change();
                            let url2 = '/admin/room/render_room_with_product/'+response.data.product_id;
                            await $.ajax({
                                type: 'GET',
                                url: url2,
                                success: async function (response) {
                                    console.log(response)
                                    $("#room_id-" + target).val('').change();
                                    let html = `<option value="" selected>Chọn tiện nghi</option>` + response.data;
                                    await $('#room_id-' + target).html(html);
                                }
                            });
                            console.log(response.data.room_id);

                            $("#room_id-" + target).val(response.data.room_id).change();



                        }
                    }
                })
            }
            function get_arr_image(data){
                let arr_images = data;
                console.log(arr_images);
                let html = '';
                if(arr_images.length > 0 ) {
                    for (let j = 0; j < arr_images.length; j++) {
                        html += `
                             <div data-repeater-item id="style-${arr_images[j]['key']}">
                            <label for="">Thuộc tính</label>
                            <div class="row d-flex align-items-end">
                                <div class="col-md-3 col-12">
                                    <div class="form-group">
                                        <label for="value">Tên màu sác</label>
                                        <input type="text" name="data_new[${arr_images[j]['key']}][value]" value="${arr_images[j]['value']}" class="form-control" id="value" aria-describedby="Nội dung" placeholder="Nội dung">
                                    </div>
                                </div>
                                <input type="text" name="data_new[${arr_images[j]['key']}][key]" value="${arr_images[j]['key']}" class="form-control" id="key" hidden>
                                <div class="col-md-3 col-12">
                                    <div class="form-group">
                                        <label for="color">Chọn màu</label>
                                        <input type="color" name="data_new[${arr_images[j]['key']}][color]" value="${arr_images[j]['color']}" class="form-control" id="color" aria-describedby="Nội dung" placeholder="Nội dung">
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="image">Ảnh</label>
                                         <img id="image" src="${arr_images[j]['image']}" alt="" width="200px" height="160px">
                                    </div>
                                </div>

                                <div class="col-md-2 col-12 mb-50">
                                    <div class="form-group">
                                        <button class="btn btn-outline-danger text-nowrap px-1 waves-effect" data-repeater-delete type="button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x mr-25"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                            <span>Delete</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                        `;
                    }
                    $(".data_old_style").html(html);
                }
            }
            function get_arr_value(data){
                let arr_values = data;
                console.log(arr_values);
                let html = '';
                if(arr_values.length > 0 ) {
                    for (let i = 0; i < arr_values.length; i++) {
                        html += `
                        <div data-repeater-item id="sid${i}">
                            <div class="row d-flex align-items-end">
                                <div class="col-md-10 col-12">
                                    <div class="form-group">
                                        <input type="text" name="key" value="${arr_values[i]['key']}" class="form-control" id="key" hidden />
                                        <label for="value">Thuộc tính</label>
                                        <input type="text" name="value" value="${arr_values[i]['value']}" class="form-control" id="value" aria-describedby="Nội dung" placeholder="Nội dung" />
                                    </div>
                                </div>
                                <div class="col-md-2 col-12 mb-50">
                                    <div class="form-group">
                                        <button class="btn btn-outline-danger text-nowrap px-1 waves-effect" data-repeater-delete type="button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x mr-25"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                            <span>Delete</span>
                                        </button>
                                    </div>
                                </div>

                            </div>
                            <hr />
                        </div>
                    `
                    }
                } else {
                    html = `
                        <div data-repeater-item>
                            <div class="row d-flex align-items-end">
                                <div class="col-md-10 col-12">
                                    <div class="form-group">
                                        <label for="value">Thuộc tính mới</label>
                                        <input type="text" name="value" class="form-control" id="value" aria-describedby="Nội dung" placeholder="Nội dung" />
                                    </div>
                                </div>

                                <div class="col-md-2 col-12 mb-50">
                                    <div class="form-group">
                                        <button class="btn btn-outline-danger text-nowrap px-1 waves-effect" data-repeater-delete="" type="button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x mr-25"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                            <span>Delete</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <hr />
                        </div>
                    `
                }
                $(".data_new").html(html);

            }

            $('table tbody').on( 'click', 'li span a.item-edit', function (event) {
                event.preventDefault();
                let $this = $(this);
                let url = $this.attr('href');
                let target = $this.attr('type-target');
                let data_url_update = $this.attr('data-url-update');
                edit(url, data_url_update, target)
            });
            $(".item-edit").click(function (event) {
                event.preventDefault();
                let $this = $(this);
                let url = $this.attr('href');
                // let modal = $this.attr('data-target');
                let target = $this.attr('type-target');
                let data_url_update = $this.attr('data-url-update');
                edit(url, data_url_update, target)
            });
        });


        // form add
        $(document).ready(function() {
            $(".item-add").click(function (event) {
                // console.log($('#form-crud').attr('action'));
                let $this = $(this);
                let target = $this.attr('type-target');
                console.log(target);
                if($('#form-crud-'+target).attr('action') !== '{{route('admin.store.attribute')}}'){
                    $('#form-crud-'+target).trigger("reset");
                    // $('#modals-slide-in').on('hidden.bs.modal', function (event) {
                    //     $(this).find('form').trigger('reset');
                    // });
                }
                $('#form-crud-'+target).trigger("reset");
                $("#product_id").val('').change();
                $("#room_id-"+target).val('').change();
                $(".data_new").html('');
                $(".data_old_style").html('');
                $(".data_new_style").html('');
                $('#form-crud-'+target).attr('action', '{{route('admin.store.attribute')}}');
                $('#exampleModalLabel').text('Thêm mới hệ thống');
                $('#example-style').text('Thêm mới kiểu dáng');

                let newUserForm = $(".add-new-record-"+target);
                // let newUserSidebar = $(".new-user-modal");
                // Form Validation
                if (newUserForm.length) {
                    newUserForm.validate({
                        errorClass: "error",
                        rules: {
                            title: {
                                required: true,
                            },
                            room_id: {
                                required: true,
                            },
                            product_id: {
                                required: true,
                            },
                        },
                        messages: {
                            title: {
                                required: "Vui lòng không bỏ trống!"
                            },
                            room_id: {
                                required: "Vui lòng không bỏ trống!"
                            },
                            product_id: {
                                required: "Vui lòng không bỏ trống!"
                            },
                        }
                    });
                }
            });


        });

    </script>
@stop
