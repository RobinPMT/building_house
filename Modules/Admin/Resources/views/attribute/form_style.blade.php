
<div class="modal modal-slide-in new-record-modal fade" id="modals-style-in" style="display: none;" aria-hidden="true">
    <div class="modal-dialog sidebar-lg">
        <form class="add-new-record-style modal-content pt-0 style-repeater" action="" id="form-crud-style" method="POST" role="form" enctype="multipart/form-data">
            @csrf
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
            <div class="modal-header mb-1">
                <h5 class="modal-title" id="example-style"></h5>
{{--                <h5 class="modal-title" id="exampleModalLabel">{{ isset($category->id) ? "Cập nhật" : "Thêm mới" }}</h5>--}}
            </div>
            <div class="modal-body flex-grow-1">
                <div class="form-group">
                    <label class="form-label" for="title-style">Tên thuộc tính <span style="color: red">*</span></label>
                    <input type="text" name="title" class="form-control dt-full-name" id="title-style" placeholder="Tiêu đề" aria-label="Tiêu đề" />
                </div>
                <div class="form-group">
                    <label for="room_id-style">Chọn phòng <span style="color: red">*</span></label>

                    <select name="room_id" id="room_id-style" class="select2 form-control form-control-lg select-single">
                        <option value="" selected>Chọn phòng</option>
                        @php echo Modules\Admin\Http\Controllers\AdminRoomController::showRooms();  @endphp
                    </select>

                </div>
                <div class="form-group">
                    <label>Upload ảnh cho thư viện</label>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <input type="file" name="images[]" id="file-1" multiple class="filename"
                               data-overwrite-initial="fasle" data-min-file-count="0">
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="attribute">Thuộc tính</label>
                    <input type="text" name="type" value="{{\App\Models\Attribute::TYPE_STYLE}}" class="form-control" hidden/>
                    <hr />
                    <div data-repeater-list="data_new" class="">

                        <div class="data_new_style">
                            <div data-repeater-item>
                                <label for="">Thuộc tính mới</label>
                                <div class="row d-flex align-items-end">
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="value">Tên màu sác</label>
                                            <input type="text" name="value" class="form-control" id="value" aria-describedby="Nội dung" placeholder="Nội dung" />
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="color">Chọn màu</label>
                                            <input type="color" name="color" class="form-control" id="color" aria-describedby="Nội dung" placeholder="Nội dung" />
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
                                <hr />
                            </div>
                        </div>

                        <div class="data_old_style">

                        </div>
                    </div>
{{--                    <div data-repeater-list="data_old" class="data_old_style">--}}
{{--                        --}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-12">--}}
{{--                            <button class="btn btn-icon btn-primary" type="button" data-repeater-create>--}}
{{--                                <i data-feather="plus" class="mr-25"></i>--}}
{{--                                <span>Thêm mới thuộc tính</span>--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="active" class="custom-control-input" id="checkbox_active-style">
                        <label class="custom-control-label" for="checkbox_active-style">Public</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary data-submit mr-1 waves-effect waves-float waves-light">Lưu</button>
                <button type="reset" class="btn btn-outline-secondary waves-effect" aria-hidden="true" data-dismiss="modal">Hủy</button>
            </div>
        </form>

    </div>
</div>

