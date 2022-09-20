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
                                    <img src="{{$item['avatar']}}" width="100px" height="100px" alt="">
                                </td>
                                <td style=""></td>
                                <td style="">{{$item['creator']['name']}}</td>
                                <td style="">
                                    <a class="badge badge-pill {{$item['arr_active']['class']}}" href="{{route('admin.get.action.slide', ['active', $item['id']])}}">
                                        {{$item['arr_active']['name']}}
                                    </a>
                                </td>
{{--                                <td style="">--}}
{{--                                    <a class="badge badge-pill {{$item['arr_hot']['class']}}" href="{{route('admin.get.action.slide', ['hot', $item['id']])}}">--}}
{{--                                        {{$item['arr_hot']['name']}}--}}
{{--                                    </a>--}}
{{--                                </td>--}}
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
                        <th>Hành động</th>
                    </tr>
                    </tfoot>
                </table>
            </div>

        </div>
    </div>
    @include("admin::library.form")
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
    </script>
@stop
