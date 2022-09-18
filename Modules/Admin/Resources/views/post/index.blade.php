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
                        <th>Người tạo</th>
                        <th>Trạng thái</th>
                        <th>Nổi bật</th>
                        <th>Hành động</th>
                    </tr>
                    </thead>
                    <tbody>
                        @if(isset($data, $status) && $status)
                            @foreach($data as $stt => $post)
                                <tr id="sid{{$post['id']}}">
                                    <td scope="row">{{$stt + 1}}</td>
                                    <td>{{$post['title']}}</td>
                                    <td style="">
                                        <img src="{{$post['avatar']}}" width="100px" height="100px" alt="">
                                    </td>
                                    <td style="">{{$post['creator']['name']}}</td>
                                    <td style="">
                                        <a class="badge badge-pill {{$post['arr_active']['class']}}" href="{{route('admin.get.action.post', ['active', $post['id']])}}">
                                            {{$post['arr_active']['name']}}
                                        </a>
                                    </td>
                                    <td style="">
                                        <a class="badge badge-pill {{$post['arr_hot']['class']}}" href="{{route('admin.get.action.post', ['hot', $post['id']])}}">
                                            {{$post['arr_hot']['name']}}
                                        </a>
                                    </td>
                                    <td style="display: none;">
                                        <a href="#" class="item-detail" data-title="{{$post['title']}}" data-content="{{$post['content']}}" data-toggle="modal" data-target="#detail-post">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text font-small-4 mr-50">
                                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                                <polyline points="14 2 14 8 20 8"></polyline>
                                                <line x1="16" y1="13" x2="8" y2="13"></line>
                                                <line x1="16" y1="17" x2="8" y2="17"></line>
                                                <polyline points="10 9 9 9 8 9"></polyline></svg>
                                        </a>
                                        <a href="{{route('admin.get.action.post', ['delete', $post['id']])}}" class="delete-record"  id="confirm-color" data-id="{{$post['id']}}">
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
                                        <a href="{{route('admin.get.find.post', $post['id'])}}" data-url-update="{{route('admin.update.post', $post['id'])}}" class="item-edit" data-toggle="modal" data-target="#modals-slide-in">
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
    @include("admin::post.form")
    @include("admin::post.detail")
@stop
@section('script')
    <script>
        CKEDITOR.replace('content');
    </script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                responsive: true,
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
            $("#confirm-color").click(function (event) {
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
                            $('#description').val(response.data.description);
                            // $('#content').text(response.data.content);
                            // $("textarea#content").html(response.data.content);
                            CKEDITOR.instances.content.setData( response.data.content);
                            $('#description_seo').val(response.data.description_seo);
                            $('#title_seo').val(response.data.title_seo);
                            $('#output_image').attr('src', response.data.avatar);
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
                if($('#form-crud').attr('action') !== '{{route('admin.store.post')}}'){
                    $('#form-crud').trigger("reset");
                    CKEDITOR.instances.content.setData('<p>Viết nội dung ở đây</p>');
                    // $('#modals-slide-in').on('hidden.bs.modal', function (event) {
                    //     $(this).find('form').trigger('reset');
                    // });
                }
                $('#form-crud').attr('action', '{{route('admin.store.post')}}');
                $('#exampleModalLabel').text('Thêm mới');
            });

            let newUserForm = $(".add-new-record");
            // let newUserSidebar = $(".new-user-modal");
            // Form Validation
            if (newUserForm.length) {
                newUserForm.validate({
                    errorClass: "error",
                    rules: {
                        phone: {
                            required: true,
                        },
                        name: {
                            required: true,
                        },
                        email: {
                            required: true,
                        },
                        password: {
                            // required: true,
                            minlength: 4,
                        },
                    },
                    messages: {
                        phone: {
                            required: "Vui lòng không bỏ trống!",
                            number: "Vui lòng nhập đúng số điện thoại!",
                        },
                        name: {
                            required: "Vui lòng không bỏ trống!"
                        },
                        email: {
                            required: "Vui lòng không bỏ trống!",
                            email: "Vui lòng nhập đúng định dạng email!"
                        },
                        password: {
                            // required: "Vui lòng không bỏ trống!",
                            minlength: jQuery.validator.format("Vui lòng nhập giá trị lớn hơn hoặc bằng {4} kí tự.")
                        },
                    }
                });

                // newUserForm.on("submit", function (e) {
                //     var isValid = newUserForm.valid();
                //     // console.log(e);
                //     // e.preventDefault();
                //
                //     if (isValid) {
                //         newUserSidebar.modal("hide");
                //
                //     }
                // });
            }
            {{--console.log(JSON.parse(' {{{json_encode($data)}}}'));--}}
            {{--console.log(JSON.parse('<?= json_encode($data) ?>'));--}}
        });

    </script>
@stop
