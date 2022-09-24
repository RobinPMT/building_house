
<div class="modal modal-slide-in new-record-modal fade" id="modals-system-in" style="display: none;" aria-hidden="true">
    <div class="modal-dialog sidebar-lg">
        <form class="add-new-record modal-content pt-0 invoice-repeater" action="" id="form-crud-system" method="POST" role="form" enctype="multipart/form-data">
            @csrf
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
            <div class="modal-header mb-1">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
{{--                <h5 class="modal-title" id="exampleModalLabel">{{ isset($category->id) ? "Cập nhật" : "Thêm mới" }}</h5>--}}
            </div>
            <div class="modal-body flex-grow-1">
                <div class="form-group">
                    <label class="form-label" for="title">Tên thuộc tính <span style="color: red">*</span></label>
                    <input type="text" name="title" class="form-control dt-full-name" id="title" placeholder="Tiêu đề" aria-label="Tiêu đề" />
                </div>
                <div class="form-group">
                    <label for="room_id">Chọn phòng <span style="color: red">*</span></label>

                    <select name="room_id" id="room_id" class="select2 form-control form-control-lg select-single">
                        <option value="" selected>Chọn phòng</option>
                        @php echo Modules\Admin\Http\Controllers\AdminRoomController::showRooms();  @endphp
                    </select>

                </div>
                <div class="form-group">
                    <label class="form-label" for="attribute">Thuộc tính</label>
                    <hr />
                    <div data-repeater-list="data_new" class="data_new">
                        <input type="text" name="type" value="{{\App\Models\Attribute::TYPE_SYSTEM}}" class="form-control" hidden/>
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
                    </div>
                    <div data-repeater-list="data_old" class="data_old">

                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button class="btn btn-icon btn-primary" type="button" data-repeater-create>
                                <i data-feather="plus" class="mr-25"></i>
                                <span>Thêm mới thuộc tính</span>
                            </button>
                        </div>
                    </div>
                </div>

{{--                <div class="form-group">--}}
{{--                    <label for="slug">Slug <span style="color: red">*</span></label>--}}
{{--                    <input name="slug" type="text" class="form-control" id="slug" placeholder="Slug">--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="parent_id">Chọn phòng</label>--}}

{{--                    <select name="parent_id" id="parent_id" class="select2 form-control form-control-lg select-single">--}}
{{--                        <option value="" selected>Chọn phòng</option>--}}
{{--                        @if(isset($data, $status) && $status)--}}
{{--                            @php echo Modules\Admin\Http\Controllers\AdminRoomController::__list();  @endphp--}}
{{--                        @endif--}}
{{--                    </select>--}}

{{--                </div>--}}
                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="active" class="custom-control-input" id="checkbox_active">
                        <label class="custom-control-label" for="checkbox_active">Public</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary data-submit mr-1 waves-effect waves-float waves-light">Lưu</button>
                <button type="reset" class="btn btn-outline-secondary waves-effect" aria-hidden="true" data-dismiss="modal">Hủy</button>
            </div>
        </form>

    </div>
</div>

