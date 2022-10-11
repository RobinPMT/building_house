
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
                    <label for="slug">Slug <span style="color: red">*</span></label>
                    <input name="slug" type="text" class="form-control" id="slug" placeholder="Slug">
                </div>
{{--                <div class="form-group">--}}
{{--                    <label for="parent_id">Danh mục cha</label>--}}

{{--                    <select name="parent_id" id="parent_id" class="select2 form-control form-control-lg select-single">--}}
{{--                        <option value="" selected>Chọn danh mục cha</option>--}}
{{--                        @if(isset($data, $status) && $status)--}}
{{--                            @php echo Modules\Admin\Http\Controllers\AdminCategoryController::showCategories($data);  @endphp--}}
{{--                        @endif--}}
{{--                    </select>--}}

{{--                </div>--}}
                <div class="demo-inline-spacing">
                    <div class="form-group">
                        <label for="order" style="">Thứ tự <span style="color: red">*</span></label>
                        <div class="input-group input-group-lg" style="right: 10px; width: 14.5rem">
                            <input type="text" class="touchspin" name="order" id="order" value="0" data-bts-step="1" data-bts-decimals="0" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label" for="content">Nội dung</label>
                    <textarea type="text" name="content" id="content" rows="3" class="form-control dt-post" placeholder="Nội dung" aria-label="Nội dung">
                    </textarea>
                </div>
                <div class="form-group">
                    <label class="form-label" for="title_seo">Meta Title</label>
                    <input type="text" name="title_seo" id="title_seo" class="form-control dt-email" placeholder="Meta Title" aria-label="Meta Title" />
                </div>
                <div class="form-group">
                    <label class="form-label" for="description_seo">Meta Description</label>
                    <input type="text" name="description_seo" id="description_seo" class="form-control dt-email" placeholder="Meta Description" aria-label="Meta Description" />
                </div>
                <div class="form-group">
                    <label class="form-label" for="keyword_seo">Keyword Seo</label>
                    <input type="text" name="keyword_seo" id="keyword_seo" class="form-control dt-email" placeholder="Keyword Seo" aria-label="Keyword Seo" />
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

