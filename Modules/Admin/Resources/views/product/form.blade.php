
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
                <div class="row d-flex align-items-end">
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label class="form-label" for="title">Tên <span style="color: red">*</span></label>
                            <input type="text" name="title" class="form-control dt-full-name" id="title" placeholder="Tên" aria-label="Tên" />
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="category_id">Danh mục cha</label>

                            <select name="category_id" id="category_id" class="select2 form-control form-control-lg select-single">
                                <option value="" selected>Chọn danh mục cha</option>
                                @if(isset($categories, $status) && $status)
                                    @php echo Modules\Admin\Http\Controllers\AdminCategoryController::showCategories($categories);  @endphp
                                @endif
                            </select>

                        </div>
                    </div>
                </div>
                <div class="row d-flex align-items-end">
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="slug">Slug <span style="color: red">*</span></label>
                            <input name="slug" type="text" class="form-control" id="slug" placeholder="Slug">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="description">Mô tả</label>
                            <textarea type="text" name="description" id="description" rows="2" class="form-control dt-post" placeholder="Mô tả" aria-label="Mô tả"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="description">Kích thước</label>
                            <hr/>
                            <div class="demo-inline-spacing">
                                <div class="form-group">
                                    <label for="longs">Chiều dài</label>
                                    <div class="input-group input-group-lg" style="right: 10px; width: 14.5rem">
                                        <input type="text" class="touchspin" name="longs" id="longs" value="0" data-bts-step="0.5" data-bts-decimals="2" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="width">Chiều Rộng</label>
                                    <div class="input-group input-group-lg" style="right: 10px; width: 14.5rem">
                                        <input type="text" class="touchspin" name="width" id="width" value="0" data-bts-step="0.5" data-bts-decimals="2" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="height">Chiều Cao</label>
                                    <div class="input-group input-group-lg" style="right: 10px; width: 14.5rem">
                                        <input type="text" class="touchspin" name="height" id="height" value="0" data-bts-step="0.5" data-bts-decimals="2" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="area">Diện tích</label>
                                    <div class="input-group input-group-lg" style="right: 10px; width: 14.5rem">
                                        <input type="text" class="touchspin" name="area" id="area" value="0" data-bts-step="0.5" data-bts-decimals="2" />
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <img id="output_image" src="{{asset('images/no_image.png')}}" alt="" width="200px" height="180px">
                                </div>
                                <div class="form-group">
                                    <label for="input_image">Ảnh bản vẽ <strong>(Kích thước: 540x320 pixel)</strong></label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="input_image" name="avatar_design">
                                        <label class="custom-file-label" for="input_image">Chọn ảnh</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <img id="output_image_extra" src="{{asset('images/no_image.png')}}" alt="" width="200px" height="180px">
                                </div>
                                <div class="form-group">
                                    <label for="input_image_extra">Ảnh tự thiết kế <strong>(Kích thước: 1170x550 pixel)</strong></label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="input_image_extra" name="image_back_ground_design">
                                        <label class="custom-file-label" for="input_image_extra">Chọn ảnh</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                    <div class="col-4">
                                        <div class="demo-inline-spacing">
                                            <div class="form-group">
                                                <label for="room_number" style="">Số phòng</label>
                                                <div class="input-group input-group-lg" style="right: 10px; width: 14.5rem">
                                                    <input type="text" class="touchspin" name="room_number" id="room_number" value="0" data-bts-step="1" data-bts-decimals="0" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-8" style="margin-top: 12px !important">
                                        <div class="form-group" style="">
                                            <label for="room_description">Mô tả phòng</label>
                                            <input name="room_description" type="text" class="form-control" id="room_description" placeholder="2 phòng ngủ, 1 phòng bếp, 1 phòng vệ sinh">
                                        </div>

                                    </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Upload ảnh cho thư viện <strong>(Kích thước: 930x845 pixel)</strong></label>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <input type="file" name="images[]" id="file-1" multiple class="filename"
                               data-overwrite-initial="fasle" data-min-file-count="0">
                    </div>
                    {{--                    <input type="file" class="form-control" name="photos[]" multiple />--}}
                </div>
                <div class="content-element">

                    @if(isset($settingkeys))
                        @foreach($settingkeys as $settingkey)
                            @if(isset($settingkey['html']))
                                {!! $settingkey['html'] !!}
                            @endif
                        @endforeach
                    @endif

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

