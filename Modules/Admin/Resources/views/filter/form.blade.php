
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
                    <label class="form-label" for="title">Tiêu đề <span style="color: red">*</span></label>
                    <input type="text" name="title" class="form-control dt-full-name" id="title" placeholder="Từ 0m2 đến 20m2" aria-label="Từ 0m2 đến 20m2" />
                </div>
                <div class="demo-inline-spacing">
                    <div class="form-group">
                        <label for="from" style="">Từ (m<sup>2</sup>)</label>
                        <div class="input-group input-group-lg" style="right: 10px; width: 14.5rem">
                            <input type="text" class="touchspin" name="from" id="from" value="0" data-bts-step="1" data-bts-decimals="0" />
                        </div>
                    </div>
                </div>
                <div class="demo-inline-spacing">
                    <div class="form-group">
                        <label for="to" style="">Đến (m<sup>2</sup>)</label>
                        <div class="input-group input-group-lg" style="right: 10px; width: 14.5rem">
                            <input type="text" class="touchspin" name="to" id="to" value="0" data-bts-step="1" data-bts-decimals="0" />
                        </div>
                    </div>
                </div>

                <div class="demo-inline-spacing">
                    <div class="form-group">
                        <label for="order" style="">Thứ tự <span style="color: red">*</span></label>
                        <div class="input-group input-group-lg" style="right: 10px; width: 14.5rem">
                            <input type="text" class="touchspin" name="order" id="order" value="0" data-bts-step="1" data-bts-decimals="0" />
                        </div>
                    </div>
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

