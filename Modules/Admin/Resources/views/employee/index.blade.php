@extends('admin::layouts.master')
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom p-1">
                    <div class="head-label"><h6 class="mb-0">DataTable with Buttons</h6></div>
                    <div class="dt-action-buttons text-right">
                        <div class="dt-buttons d-inline-flex">
                            <button class="dt-button create-new btn btn-primary" tabindex="0" aria-controls="DataTables_Table_0" type="button" data-toggle="modal" data-target="#modals-slide-in">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus mr-50 font-small-4">
                                            <line x1="12" y1="5" x2="12" y2="19"></line>
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                        </svg>
                                        Add New Record
                                    </span>
                            </button>
                        </div>
                    </div>
                </div>
                <table id="example" class="table table-bordered  display nowrap" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>User</th>
                        <th>Email</th>
{{--                        <th>Role</th>--}}
                        <th>Phone</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        @if(isset($data, $status) && $status)
                            @foreach($data as $stt => $user)
                                <tr>
                                    <td scope="row">{{$stt + 1}}</td>
                                    <td style="">
                                        <div class="d-flex justify-content-left align-items-center">
                                            <div class="avatar mr-1"><img src="{{$user['avatar']}}" alt="Avatar" width="32" height="32" /></div>
                                            <div class="d-flex flex-column">
                                                <span class="emp_name text-truncate font-weight-bold">{{$user['name']}}</span>
                                                <small class="emp_post text-truncate text-muted">Cost Accountant</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{$user['email']}}</td>
                                    <td style="">{{$user['phone']}}</td>
                                    <td style=""><span class="badge badge-pill badge-light-warning">{{$user['active']}}</span></td>
                                    <td style="display: none;">
                                        <a href="javascript:;" class="delete-record">
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
                                        <a href="javascript:;" class="item-edit">
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
                        <th>User</th>
                        <th>Email</th>
{{--                        <th>Role</th>--}}
                        <th>Phone</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </tfoot>
                </table>
            </div>

        </div>
    </div>
    @include("admin::employee.form")
@stop
@section('script')
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                responsive: true,
            });
        } );
        $(window).on('load', function() {
            let newUserForm = $(".add-new-record");
            let newUserSidebar = $(".new-user-modal");
            $("#checkbox_active").prop('checked', true);
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
                    },
                    messages: {
                        phone: {
                            required: "Vui lòng không bỏ trống!"
                        },
                        name: {
                            required: "Vui lòng không bỏ trống!"
                        },
                        email: {
                            required: "Vui lòng không bỏ trống!",
                            email: "Vui lòng nhập đúng định dạng email!"
                        }
                    }
                });

                newUserForm.on("submit", function (e) {
                    var isValid = newUserForm.valid();
                    // console.log(e);
                    // e.preventDefault();
                    if (isValid) {
                        newUserSidebar.modal("hide");
                    }
                });
            }
            {{--console.log(JSON.parse(' {{{json_encode($data)}}}'));--}}
            {{--console.log(JSON.parse('<?= json_encode($data) ?>'));--}}
            {{--$('#basic-datatable').DataTable( {--}}
            {{--    --}}
            {{--} );--}}
        });

    </script>
@stop
