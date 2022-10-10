@extends('admin::layouts.master')
@section('content')
{{--    {{dd($data)}}--}}
    <section class="form-control-repeater">
        <div class="row">
            <!-- Invoice repeater -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Thông tin liên hệ và mô tả Consolar Housing</h4>
                    </div>
                    <div class="card-body">
                        <form action=""  method="POST" role="form">
                            @csrf
                            <div>
                                @if(isset($data, $status) && $status)
{{--                                    {{dd($data)}}--}}
                                    @foreach($data as $stt => $item)
                                        @if($item['type'] == 'setting')
                                            <div id="sid{{$item['id']}}">
                                                <div class="row d-flex align-items-end">
                                                    <div class="col-md-4 col-12">
                                                        <div class="form-group">
                                                            <label for="name">Tên</label>
                                                            <input type="text" value="{{old('name',isset($item['name']) ? $item['name'] : '')}}" style="height: 45px;" class="form-control" id="name" aria-describedby="name" placeholder="Tên" disabled />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="value">Value</label>
                                                            {{--                                                            @if($item['key'] == 'housing')--}}
                                                            <textarea class="form-control" value="{{old('value',isset($item['value']) ? $item['value'] : '')}}" id="value" rows="1" placeholder="Nội dung">{{old('value',isset($item['value']) ? $item['value'] : '')}}</textarea>
                                                            {{--                                                            @else--}}
                                                            {{--                                                                <input type="text" value="{{old('value',isset($item['value']) ? $item['value'] : '')}}" class="form-control" id="value" aria-describedby="Nội dung" placeholder="Nội dung" />--}}
                                                            {{--                                                            @endif--}}


                                                        </div>
                                                    </div>

                                                    <div class="col-md-2 col-12 mb-75">
                                                        <label for="active{{$item['id']}}">Success</label>
                                                        <div class="form-group custom-control custom-switch custom-switch-success">
                                                            <input type="checkbox" class="custom-control-input" id="active{{$item['id']}}" {{(isset($item['active']) && $item['active']) ? 'checked' : ''}}>
                                                            <label class="custom-control-label" for="active{{$item['id']}}">
                                                                <span class="switch-icon-left"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
                                                                <span class="switch-icon-right"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    {{--                                                <div class="col-md-2 col-12 mb-50">--}}
                                                    {{--                                                    <div class="form-group">--}}
                                                    {{--                                                        <button class="btn btn-outline-danger text-nowrap px-1" data-repeater-delete type="button">--}}
                                                    {{--                                                            <i data-feather="x" class="mr-25"></i>--}}
                                                    {{--                                                            <span>Delete</span>--}}
                                                    {{--                                                        </button>--}}
                                                    {{--                                                    </div>--}}
                                                    {{--                                                </div>--}}
                                                </div>
                                                <hr />
                                            </div>
                                        @endif

                                    @endforeach
                                @endif

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
                    </div>
                </div>
            </div>
            <!-- /Invoice repeater -->
        </div>
    </section>

<section class="form-control-repeater">
    <div class="row">
        <!-- Invoice repeater -->
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Giải pháp kinh doanh với Coffee & Food</h4>
                </div>
                <div class="card-body">
                    @if(isset($data, $status) && $status)
                        @foreach($data as $stt => $item)
                            @if($item['type'] == 'coffee_home')
                                <form action="{{route('admin.update.setting', [$item['id']])}}"  method="POST" role="form" enctype="multipart/form-data">
                                    @csrf
                                    <div>
                                        <div id="sid{{$item['id']}}">
                                            <div class="row d-flex align-items-end">
                                                <div class="col-md-12 col-12">
                                                    <div class="form-group">
                                                        <label for="value">Mô tả</label>
                                                        <textarea class="form-control" name="value" value="{{old('value',isset($item['value']) ? $item['value'] : '')}}" id="value" rows="3" placeholder="Nội dung">{{old('value',isset($item['value']) ? $item['value'] : '')}}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12">
                                                    <label>Upload ảnh cho thư viện <strong>(Kích thước: 590x410 pixel)</strong></label>
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
                                            <button class="btn btn-icon btn-primary" type="submit">
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
                                                    @if(isset($item['arr_avatar']) && $avatars = json_decode($item['arr_avatar']))
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
                                                                                <a href="{{route('admin.delete.images.setting',[$item['id'], $avatar])}}" data-id="{{$item['id']}}" class="kv-file-remove btn btn-sm btn-kv btn-default btn-outline-secondary delete-image" title="Remove file"><i class="glyphicon glyphicon-trash"></i></a>
                                                                                <a href="#" id="data-image-{{$item['id']}}"  data-detail-title="{{$avatar}}" data-image-src="{{pare_url_file($avatar, 'settings')}}" data-toggle="modal" data-target="#image_modal" class="kv-file-zoom btn btn-sm btn-kv btn-default btn-outline-secondary item-detail" title="View Details"><i class="glyphicon glyphicon-zoom-in"></i></a>
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
                        @endforeach
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

{{--<section class="form-control-repeater">--}}
{{--    <div class="row">--}}
{{--        <!-- Invoice repeater -->--}}
{{--        <div class="col-12">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">--}}
{{--                    <h4 class="card-title">Lợi ích đến từ Consolar Housing</h4>--}}
{{--                </div>--}}

{{--                <div class="card-body">--}}

{{--                    <form action="{{route('admin.store.setting')}}" class="invoice-repeater" method="POST" role="form">--}}
{{--                        @csrf--}}
{{--                        <div data-repeater-list="data_new">--}}
{{--                            <div data-repeater-item>--}}
{{--                                <div class="row d-flex align-items-end">--}}
{{--                                    <div class="col-md-10 col-12">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <input type="text" name="type" value="home" class="form-control" hidden/>--}}
{{--                                            <label for="value">Nội dung mới</label>--}}
{{--                                            <input type="text" name="value" class="form-control" id="value" aria-describedby="Nội dung" placeholder="Nội dung" />--}}
{{--                                            --}}{{--                                            <textarea class="form-control" value="{{old('value',isset($item['value']) ? $item['value'] : '')}}" id="value" rows="1" placeholder="Nội dung">{{old('value',isset($item['value']) ? $item['value'] : '')}}</textarea>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-md-2 col-12 mb-50">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <button class="btn btn-outline-danger text-nowrap px-1 waves-effect" data-repeater-delete="" type="button">--}}
{{--                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x mr-25"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>--}}
{{--                                                <span>Delete</span>--}}
{{--                                            </button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}


{{--                                </div>--}}
{{--                                <hr />--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        @if(isset($data, $status) && $status)--}}
{{--                            @foreach($data as $stt => $itemv)--}}
{{--                                @if($itemv['type'] == 'home')--}}
{{--                                    <div data-repeater-list="data_old">--}}
{{--                                    <div data-repeater-item id="sid{{$itemv['id']}}">--}}
{{--                                        <div class="row d-flex align-items-end">--}}

{{--                                            <div class="col-md-10 col-12">--}}
{{--                                                <input type="text" name="ids[]" value="{{old('id',isset($itemv['id']) ? $itemv['id'] : '')}}" class="form-control" id="id" hidden/>--}}
{{--                                                <div class="form-group">--}}

{{--                                                    <label for="value">Nội dung</label>--}}
{{--                                                    <input type="text" name="values[]" value="{{old('value',isset($itemv['value']) ? $itemv['value'] : '')}}" class="form-control" id="value" aria-describedby="Nội dung" placeholder="Nội dung" />--}}
{{--                                                    --}}{{--                                            <textarea class="form-control" value="{{old('value',isset($item['value']) ? $item['value'] : '')}}" id="value" rows="1" placeholder="Nội dung">{{old('value',isset($item['value']) ? $item['value'] : '')}}</textarea>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="col-md-2 col-12 mb-50">--}}
{{--                                                <div class="form-group">--}}
{{--                                                    <a data-id="{{$itemv['id']}}" href="{{route('admin.get.action.setting', ['delete', $itemv['id']])}}" class="btn btn-outline-danger text-nowrap px-1 detele-item" data-repeater-delete type="button">--}}
{{--                                                        <i data-feather="x" class="mr-25"></i>--}}
{{--                                                        <span>Delete</span>--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                        </div>--}}
{{--                                        <hr />--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                @endif--}}
{{--                            @endforeach--}}
{{--                        @endif--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-12">--}}
{{--                                <button class="btn btn-icon btn-primary" type="button" data-repeater-create>--}}
{{--                                    <i data-feather="plus" class="mr-25"></i>--}}
{{--                                    <span>Thêm mới</span>--}}
{{--                                </button>--}}
{{--                                <button class="btn btn-icon btn-primary submit-des-home" type="submit">--}}
{{--                                    <i data-feather="save" class="mr-25"></i>--}}
{{--                                    <span>Lưu</span>--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- /Invoice repeater -->--}}
{{--    </div>--}}
{{--</section>--}}
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header border-bottom p-1">
                <div class="head-label"><h4 class="mb-0">Lợi ích đến từ Consolar Housing</h4></div>
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
                    <th>Trạng thái</th>
                    <th>Hành động</th>
                </tr>
                </thead>
                <tbody>
                <?php $i =1?>
                @if(isset($data, $status) && $status)
                    @foreach($data as $stt => $item)
                        @if($item['type'] == 'home')
                            <tr id="sid{{$item['id']}}">
                                <td scope="row">{{$i}}</td>
                                <td>{{$item['value']}}</td>
                                <td style="">
                                    <img src="{{$item['avatar']}}" width="100px" height="100px" alt="">
                                </td>
                                <td style="">
                                    <a class="badge badge-pill {{$item['arr_active']['class']}}" href="{{route('admin.get.action.setting', ['active', $item['id']])}}">
                                        {{$item['arr_active']['name']}}
                                    </a>
                                </td>
                                <td style="display: none;">
                                    <a href="{{route('admin.get.action.setting', ['delete', $item['id']])}}" class="delete-record"  id="confirm-color" data-id="{{$item['id']}}">
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
                                    <a href="{{route('admin.get.find.setting', $item['id'])}}" data-url-update="{{route('admin.update.setting', $item['id'])}}" class="item-edit" data-toggle="modal" data-target="#modals-slide-in">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit font-small-4">
                                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            <?php $i++?>
                        @endif

                    @endforeach
                @endif

                </tbody>
                <tfoot>
                <tr>
                    <th>STT</th>
                    <th>Tiêu đề</th>
                    <th>Ảnh</th>
                    <th>Trạng thái</th>
                    <th>Hành động</th>
                </tr>
                </tfoot>
            </table>
        </div>

    </div>
</div>

@include("admin::setting.form")
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
                maxFileSize: 10000,
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

            $.ajax({
                type: 'get',
                url: '{{route('admin.get.list.setting.arr')}}',
                success: function (response) {
                    $(".submit__items").click(function (e) {
                        e.preventDefault();
                        {{--let data = JSON.parse('<?= json_encode($data) ?>');--}}
                        let data = response.data;
                        console.log(data);
                        let newData = {};
                        $.map( data, function( val, i ) {
                            let $this = $('#sid'+val.id);
                            let name = $this.find('#name').val();
                            let value = $this.find('#value').val();
                            let active = $this.find('#active'+val.id).is(':checked');
                            // newData.push(Object({
                            //     'id' : val.id,
                            //     'name': name,
                            //     'key': val.key,
                            //     'value': value,
                            //     'active': active
                            // }
                            newData[val.key] = Object({
                                'name': name,
                                'key': val.key,
                                'value': value,
                                'active': active
                            });
                        });
                        $.ajax({
                            type: 'POST',
                            url: '{{route('admin.get.update.setting')}}',
                            data: {newData},
                            success: function (response) {
                                console.log(response)
                                if(response.status) {
                                    setTimeout(function () {
                                        toastr['success'](
                                            response.success,
                                            '👋 Thành công!',
                                            {
                                                closeButton: true,
                                                tapToDismiss: false,
                                                // rtl: isRtl
                                            }
                                        );
                                    }, 300);
                                } else {
                                    setTimeout(function () {
                                        toastr['error'](
                                            response.danger,
                                            '👋 Thất bại!',
                                            {
                                                closeButton: true,
                                                tapToDismiss: false,
                                                // rtl: isRtl
                                            }
                                        );
                                    }, 300);
                                }
                            }
                        });
                    })
                }
            });

        });
    </script>

    <script>
        // form repeater jquery
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
                if (confirm('Are you sure you want to delete this element?')) {
                    $(this).slideUp(deleteElement);
                }
            }
        });
        $(document).ready(function() {
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
                                    // if (result.value) {
                                    //     window.location.reload();
                                    // }
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
                            $('#title').val(response.data.value);
                            $('#output_image').attr('src', response.data.avatar);
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
                if($('#form-crud').attr('action') !== '{{route('admin.store.setting')}}'){
                    $('#form-crud').trigger("reset");
                    $("form #checkbox_active").attr('checked', false);
                    $('#output_image').attr('src', '{{asset('images/no_image.png')}}');
                }
                $('#form-crud').attr('action', '{{route('admin.store.setting')}}');
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
