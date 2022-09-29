
<div class="modal modal-slide-in new-record-modal fade" id="modals-slide-in" style="display: none;" aria-hidden="true">
    <div class="modal-dialog sidebar-lg">
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
                    <input type="text" name="title" class="form-control dt-full-name" id="title" placeholder="Tiêu đề" aria-label="Tiêu đề" />
                </div>
                <div class="form-group">
                    <label class="form-label" for="link">Link <span style="color: red">*</span></label>
                    <input type="text" name="link" class="form-control dt-full-name" id="link" placeholder="Link" aria-label="Link" />
                </div>
                <div class="form-group">
                    <label class="form-label" for="description">Mô tả</label>
                    <textarea type="text" name="description" id="description" rows="4" class="form-control dt-post" placeholder="Mô tả" aria-label="Mô tả"></textarea>
                </div>
                <div class="form-group">
                    <img id="output_image" src="{{asset('images/no_image.png')}}" alt="" width="200px" height="160px">
                </div>
                <div class="form-group">
                    <label for="input_image">Ảnh chính</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="input_image" name="avatar_main">
                        <label class="custom-file-label" for="input_image">Chọn ảnh chính</label>
                    </div>
                </div>

                <div class="form-group">
                    <img id="output_image_extra" src="{{asset('images/no_image.png')}}" alt="" width="200px" height="160px">
                </div>
                <div class="form-group">
                    <label for="input_image_extra">Ảnh phụ</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="input_image_extra" name="avatar_not_main">
                        <label class="custom-file-label" for="input_image_extra">Chọn ảnh phụ</label>
                    </div>
                </div>
{{--                <input type="text" name="type" class="form-control dt-full-name" value="home" hidden />--}}
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