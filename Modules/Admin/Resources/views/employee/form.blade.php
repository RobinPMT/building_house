
<div class="modal modal-slide-in new-record-modal fade" id="modals-slide-in" style="display: none;" aria-hidden="true">
    <div class="modal-dialog sidebar-sm">
        <form class="add-new-record modal-content pt-0" action="" id="form-crud" method="POST" role="form">
            @csrf
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
            <div class="modal-header mb-1">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
{{--                <h5 class="modal-title" id="exampleModalLabel">{{ isset($category->id) ? "Cập nhật" : "Thêm mới" }}</h5>--}}
            </div>
            <div class="modal-body flex-grow-1">
                <div class="form-group">
                    <label class="form-label" for="name">Họ tên <span style="color: red">*</span></label>
                    <input type="text" name="name" class="form-control dt-full-name" id="name" placeholder="John Doe" aria-label="John Doe" />
                </div>
                <div class="form-group">
                    <label class="form-label" for="phone">Số điện thoại</label>
                    <input type="text" name="phone" id="phone" class="form-control dt-post" placeholder="0123456789" aria-label="0123456789" />
                </div>
                <div class="form-group">
                    <label class="form-label" for="email">Email <span style="color: red">*</span></label>
                    <input type="email" name="email" id="email" class="form-control dt-email" placeholder="employee@example.com" aria-label="employee@example.com" />
                    <small class="form-text text-muted"> Dùng email này để đăng nhập </small>
                </div>
                <div class="form-group">
                    <label class="form-label" for="password">Mật khẩu <span style="color: red">*</span></label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="********" aria-label="********" />
                </div>
                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="active" class="custom-control-input" id="checkbox_active">
                        <label class="custom-control-label" for="checkbox_active">Hoạt động</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary data-submit mr-1 waves-effect waves-float waves-light">Lưu</button>
                <button type="reset" class="btn btn-outline-secondary waves-effect" data-dismiss="modal">Hủy</button>
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
