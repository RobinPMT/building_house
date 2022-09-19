@extends('admin::layouts.master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom p-1">
                    <div class="head-label"><h6 class="mb-0">DataTable with Buttons</h6></div>
{{--                    <div class="dt-action-buttons text-right">--}}
{{--                        <div class="dt-buttons d-inline-flex">--}}
{{--                            <button class="dt-button create-new btn btn-primary item-add" tabindex="0" aria-controls="DataTables_Table_0" type="button" data-toggle="modal" data-target="#modals-slide-in">--}}
{{--                                    <span>--}}
{{--                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus mr-50 font-small-4">--}}
{{--                                            <line x1="12" y1="5" x2="12" y2="19"></line>--}}
{{--                                            <line x1="5" y1="12" x2="19" y2="12"></line>--}}
{{--                                        </svg>--}}
{{--                                        Thêm mới--}}
{{--                                    </span>--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
                <table id="example" class="table table-bordered  display nowrap" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Người dùng</th>
                        <th>Email</th>
                        <th>Người xử lý</th>
                        <th>Trạng thái</th>
                        <th>Hành động</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($data, $status) && $status)
                        @foreach($data as $stt => $user)
                            <tr id="sid{{$user['id']}}">
                                <td scope="row">{{$stt + 1}}</td>
                                <td style="">
                                    <div class="d-flex justify-content-left align-items-center">
                                        <div class="d-flex flex-column">
                                            <span class="emp_name text-truncate font-weight-bold">{{$user['name']}}</span>
                                            <small class="emp_post text-truncate text-muted">Số điện thoại: {{$user['phone']}}</small>
                                        </div>
                                    </div>
                                </td>
                                <td>{{$user['email']}}</td>
                                <td style="">{{$user['handler']['name'] ?? ''}}</td>
                                <td style="">
                                    <a class="badge badge-pill {{$user['arr_active']['class']}}" href="{{route('admin.get.action.contact', ['active', $user['id']])}}">
                                        {{$user['arr_active']['name']}}
                                    </a>
                                </td>
                                <td style="display: none;">
                                    <a href="{{route('admin.get.action.contact', ['delete', $user['id']])}}" class="delete-record"  id="confirm-color" data-id="{{$user['id']}}">
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
{{--                                    <a href="{{route('admin.get.find.admin', $user['id'])}}" data-url-update="{{route('admin.update.admin', $user['id'])}}" class="item-edit" data-toggle="modal" data-target="#modals-slide-in">--}}
{{--                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit font-small-4">--}}
{{--                                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>--}}
{{--                                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>--}}
{{--                                        </svg>--}}
{{--                                    </a>--}}
                                </td>
                            </tr>
                        @endforeach
                    @endif

                    </tbody>
                    <tfoot>
                    <tr>
                        <th>STT</th>
                        <th>Người dùng</th>
                        <th>Email</th>
                        <th>Người xử lý</th>
                        <th>Trạng thái</th>
                        <th>Hành động</th>
                    </tr>
                    </tfoot>
                </table>
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
    </script>
@stop
