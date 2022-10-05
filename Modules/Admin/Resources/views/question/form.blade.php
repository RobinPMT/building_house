
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
                    <label class="form-label" for="title">Câu hỏi <span style="color: red">*</span></label>
                    <textarea type="text" name="title" id="title" rows="2" class="form-control dt-post" placeholder="Câu hỏi" aria-label="Câu hỏi"></textarea>
                </div>
                <div class="form-group">
                    <label class="form-label" for="content">Nội dung</label>
                    <textarea type="text" name="content" id="content" rows="3" class="form-control dt-post" placeholder="Nội dung" aria-label="Nội dung">
                    </textarea>
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

