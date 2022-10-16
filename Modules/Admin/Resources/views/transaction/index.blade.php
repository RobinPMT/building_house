@extends('admin::layouts.master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom p-1">
                    <div class="head-label"><h6 class="mb-0">Danh sách </h6></div>
                </div>
                <table id="example" class="table table-bordered  display nowrap" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Mã Oder</th>
                        <th>Khách hàng</th>
                        <th>Sản phẩm</th>
                        <th>Link design</th>
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
                                <td>{{$user['title']}}</td>
                                <td style="">
                                    <div class="d-flex justify-content-left align-items-center">
                                        <div class="d-flex flex-column">
                                            @if(isset($user['creator']))
                                                <span class="emp_name text-truncate font-weight-bold">{{$user['creator']['name'] ?? 'Không rõ'}}</span>
                                                <small class="emp_post text-truncate text-muted">Email: <strong style="color: brown;">{{$user['creator']['email'] ?? 'Không rõ'}}</strong></small>
                                                <small class="emp_post text-truncate text-muted">Số điện thoại: <strong style="color: brown;">{{$user['creator']['phone'] ?? 'Không rõ'}}</strong></small>
                                                <small class="emp_post text-truncate text-muted">Địa chỉ: <strong style="color: brown;">{{$user['creator']['address'] ?? 'Không rõ'}}</strong></small>
                                            @else
                                                <span class="emp_name text-truncate font-weight-bold">{{$user['name'] ?? 'Không rõ'}}</span>
                                                <small class="emp_post text-truncate text-muted">Email: <strong style="color: brown;">{{$user['email'] ?? 'Không rõ'}}</strong></small>
                                                <small class="emp_post text-truncate text-muted">Số điện thoại: <strong style="color: brown;">{{$user['phone'] ?? 'Không rõ'}}</strong></small>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                                <td>{{$user['product']['title'] ?? 'Không rõ'}}</td>
                                <td style="">
                                    <a class="badge badge-pill badge-light-primary item-detail" href="{{route('get.detail.wishlists.design', [$user['product']['slug'], 'code' => $user['title'], 'user_id' => $user['creator_id']])}}" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-archive font-small-4 mr-50">
                                            <polyline points="21 8 21 21 3 21 3 8"></polyline>
                                            <rect x="1" y="3" width="22" height="5"></rect>
                                            <line x1="10" y1="12" x2="14" y2="12"></line>
                                        </svg>Xem
                                    </a>
                                </td>
                                <td style="">{{$user['handler']['name'] ?? ''}}</td>
                                <td style="">
                                    <a class="badge badge-pill {{$user['arr_status']['class']}}" href="{{route('admin.get.action.transaction', ['active', $user['id']])}}">
                                        {{$user['arr_status']['name']}}
                                    </a>
                                </td>
                                <td style="display: none;">
                                    <a href="{{route('admin.get.action.transaction', ['delete', $user['id']])}}" class="delete-record"  id="confirm-color" data-id="{{$user['id']}}">
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
                        <th>Mã Oder</th>
                        <th>Khách hàng</th>
                        <th>Sản phẩm</th>
                        <th>Link design</th>
                        <th>Người xử lý</th>
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
                                        <a href="{{route('admin.get.list.transaction', ['_page' => $meta['pagination']['page'] - 1])}}" aria-controls="example" data-dt-idx="0" tabindex="0" class="page-link">Trang trước</a>
                                    </li>
                                    @if(isset($meta['pagination']['lastPage']))
                                        @for($i = 1; $i <= $meta['pagination']['lastPage']; $i++)
                                            <li class="paginate_button page-item {{$meta['pagination']['page'] == $i ? 'active' : ''}}">
                                                <a href="{{route('admin.get.list.transaction', ['_page' => $i])}}" aria-controls="example" data-dt-idx="1" tabindex="0" class="page-link">{{$i}}</a>
                                            </li>
                                        @endfor
                                    @endif
                                    <li class="paginate_button page-item next {{$meta['pagination']['page'] < $meta['pagination']['lastPage'] ? '' : 'disabled'}}" id="example_next">
                                        <a href="{{route('admin.get.list.transaction', ['_page' => $meta['pagination']['page'] + 1])}}" aria-controls="example" data-dt-idx="2" tabindex="0" class="page-link">Trang sau</a>
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
        $(document).ready(function() {
            $('#example').DataTable({
                responsive: true,
                "columns": [
                    null,
                    null,
                    { "width": "20%" },
                    null,
                    null,
                    null,
                    null,
                    null
                ],
                paging: false,
                showEntries: false,
                lengthChange: false,
                searching: false,
                ordering    : true,
                bInfo      : false,
                autoWidth  : false
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
