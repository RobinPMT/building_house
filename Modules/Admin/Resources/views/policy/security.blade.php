@extends('admin::layouts.master')
@section('content')
    <section class="form-control-repeater">
        <div class="row">
            <!-- Invoice repeater -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Chính sách bảo mật</h4>
                    </div>
                    <div class="card-body">
                        @if(isset($security))
                            <form action="{{route('admin.update.security.policy', [$security->id])}}"  method="POST" role="form" enctype="multipart/form-data">
                                @csrf
                                <div>
                                    <div id="sid{{$security->id}}" data-id="{{$security->id}}">
                                        <div class="row d-flex align-items-end">
                                            <div class="col-md-12 col-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="content">Nội dung</label>
                                                    <textarea type="text" name="value" id="content" rows="3" class="form-control dt-post" placeholder="Nội dung" aria-label="Nội dung">{{isset($security->value)? old('value', $security->value) : old('value')}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <hr />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <button class="btn btn-icon btn-primary submit__items" type="submit">
                                            <i data-feather="save" class="mr-25"></i>
                                            <span>Lưu</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
            <!-- /Invoice repeater -->
        </div>
    </section>
@stop
@section('script')
    <script>
        CKEDITOR.replace('content');
        // CKEDITOR.instances.content.setData('<p>Viết nội dung ở đây</p>');
    </script>
@stop
