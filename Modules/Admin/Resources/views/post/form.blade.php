
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
                <div class="demo-inline-spacing">
                    <div class="form-group">
                        <label for="order" style="">Thứ tự <span style="color: red">*</span></label>
                        <div class="input-group input-group-lg" style="right: 10px; width: 14.5rem">
                            <input type="text" class="touchspin" name="order" id="order" value="0" data-bts-step="1" data-bts-decimals="0" />
                        </div>
                    </div>
                </div>
{{--                <div class="form-group">--}}
{{--                    <label for="type">Chọn mục tin tức <span style="color: red">*</span></label>--}}

{{--                    <select name="type" id="type" class="select2 form-control form-control-lg select-single">--}}
{{--                        <option value="" selected>Chọn mục tin tức</option>--}}
{{--                        <option value="tin-tuc">Tin tức</option>--}}
{{--                        <option value="tin-tuc-su-kien">Tin tức - Sự kiện</option>--}}
{{--                        <option value="tin-tai-chinh">Tin tài chính</option>--}}
{{--                        <option value="tin-khuyen-mai">Tin khuyến mãi</option>--}}
{{--                    </select>--}}

{{--                </div>--}}
                <div class="form-group">
                    <label class="form-label" for="description">Mô tả</label>
                    <textarea type="text" name="description" id="description" rows="3" class="form-control dt-post" placeholder="Mô tả" aria-label="Mô tả"></textarea>
                </div>
                <div class="form-group">
                    <img id="output_image" src="{{asset('images/no_image.png')}}" alt="" width="200px" height="160px">
                </div>
                <div class="form-group">
                    <label for="input_image">Ảnh <strong>(Kích thước: 1350x530 pixel)</strong> <span style="color: red">*</span></label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="input_image" name="avatar" required>
                        <label class="custom-file-label file_src" for="input_image">Chọn ảnh</label>
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
                    <label class="form-label" for="tag_ids">Tags</label>
                    <select class="select2-size-lg form-control select-multi" name="tag_ids[]" multiple="multiple" id="tag_ids" >
                        @php echo Modules\Admin\Http\Controllers\AdminTagController::showTags();  @endphp
                    </select>
                </div>
                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="active" class="custom-control-input" id="checkbox_active">
                        <label class="custom-control-label" for="checkbox_active">Public</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="hot" class="custom-control-input" id="checkbox_hot">
                        <label class="custom-control-label" for="checkbox_hot">Nổi bật</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary data-submit mr-1 waves-effect waves-float waves-light">Lưu</button>
                <button type="reset" class="btn btn-outline-secondary waves-effect" aria-hidden="true" data-dismiss="modal">Hủy</button>
            </div>
        </form>

    </div>
</div>

{{--<div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in">--}}
{{--    <div class="modal-dialog">--}}
{{--        <form class="add-new-record modal-content pt-0">--}}
{{--            <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>--}}
{{--            <div class="modal-header mb-1">--}}
{{--                <h5 class="modal-title" id="exampleModalLabel">New User</h5>--}}
{{--            </div>--}}
{{--            <div class="modal-body flex-grow-1">--}}
{{--                <div class="form-group">--}}
{{--                    <label class="form-label" for="basic-icon-default-fullname">Full Name</label>--}}
{{--                    <input type="text" class="form-control dt-full-name" id="basic-icon-default-fullname" placeholder="John Doe" name="name" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label class="form-label" for="basic-icon-default-uname">Username</label>--}}
{{--                    <input type="text" id="basic-icon-default-uname" class="form-control dt-uname" placeholder="Web Developer" aria-label="jdoe1" aria-describedby="basic-icon-default-uname2" name="user-name" />--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label class="form-label" for="basic-icon-default-email">Email</label>--}}
{{--                    <input type="text" id="basic-icon-default-email" class="form-control dt-email" placeholder="john.doe@example.com" aria-label="john.doe@example.com" aria-describedby="basic-icon-default-email2" name="user-email" />--}}
{{--                    <small class="form-text text-muted"> You can use letters, numbers & periods </small>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label class="form-label" for="user-role">User Role</label>--}}
{{--                    <select id="user-role" class="form-control">--}}
{{--                        <option value="subscriber">Subscriber</option>--}}
{{--                        <option value="editor">Editor</option>--}}
{{--                        <option value="maintainer">Maintainer</option>--}}
{{--                        <option value="author">Author</option>--}}
{{--                        <option value="admin">Admin</option>--}}
{{--                    </select>--}}
{{--                </div>--}}
{{--                <div class="form-group mb-2">--}}
{{--                    <label class="form-label" for="user-plan">Select Plan</label>--}}
{{--                    <select id="user-plan" class="form-control">--}}
{{--                        <option value="basic">Basic</option>--}}
{{--                        <option value="enterprise">Enterprise</option>--}}
{{--                        <option value="company">Company</option>--}}
{{--                        <option value="team">Team</option>--}}
{{--                    </select>--}}
{{--                </div>--}}
{{--                <button type="submit" class="btn btn-primary mr-1 data-submit">Submit</button>--}}
{{--                <button type="reset" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </div>--}}
{{--</div>--}}

