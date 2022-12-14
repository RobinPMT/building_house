
<div class="modal modal-slide-in new-record-modal fade" id="modals-slide-in" style="display: none;" aria-hidden="true">
    <div class="modal-dialog sidebar-sm">
        <form class="add-new-record modal-content pt-0" action="" id="form-crud" method="POST" role="form" enctype="multipart/form-data">
            @csrf
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
            <div class="modal-header mb-1">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                {{--                <h5 class="modal-title" id="exampleModalLabel">{{ isset($category->id) ? "Cập nhật" : "Thêm mới" }}</h5>--}}
            </div>
            <div class="modal-body flex-grow-1">
                <div class="form-group">
                    <label class="form-label" for="name">Tiêu đề <span style="color: red">*</span></label>
                    <input type="text" name="name" class="form-control dt-full-name" id="name" placeholder="Tên" aria-label="Tên" />
                </div>
                <div class="form-group">
                    <label for="key">Key <span style="color: red">*</span></label>
                    <input name="key" type="text" class="form-control" id="key" placeholder="Key">
                </div>
                <div class="form-group">
                    <label for="tag_type">Loại thẻ <span style="color: red">*</span></label>

                    <select name="tag_type" id="tag_type" class="select2 form-control form-control-lg select-single">
                        <option value="input" selected>Input</option>
                        <option value="textarea">Textarea</option>
                        <option value="checkbox">Checkbox</option>
                    </select>

                </div>
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

