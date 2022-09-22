@extends('admin::layouts.master')
@section('content')
{{--    {{dd($data)}}--}}
    <section class="form-control-repeater">
        <div class="row">
            <!-- Invoice repeater -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Cài đặt</h4>
                    </div>
                    <div class="card-body">
                        <form action=""  method="POST" role="form">
                            @csrf
                            <div data-repeater-list="invoice">
                                @if(isset($data, $status) && $status)
{{--                                    {{dd($data)}}--}}
                                    @foreach($data as $stt => $item)
                                        <div data-repeater-item id="sid{{$item['id']}}">
                                            <div class="row d-flex align-items-end">
                                                <div class="col-md-4 col-12">
                                                    <div class="form-group">
                                                        <label for="name">Tên</label>
                                                        <input type="text" value="{{old('name',isset($item['name']) ? $item['name'] : '')}}" style="height: 45px;" class="form-control" id="name" aria-describedby="name" placeholder="Tên" disabled />
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="value">Value</label>
{{--                                                            @if($item['key'] == 'housing')--}}
                                                                <textarea class="form-control" value="{{old('value',isset($item['value']) ? $item['value'] : '')}}" id="value" rows="1" placeholder="Nội dung">{{old('value',isset($item['value']) ? $item['value'] : '')}}</textarea>
{{--                                                            @else--}}
{{--                                                                <input type="text" value="{{old('value',isset($item['value']) ? $item['value'] : '')}}" class="form-control" id="value" aria-describedby="Nội dung" placeholder="Nội dung" />--}}
{{--                                                            @endif--}}


                                                    </div>
                                                </div>

                                                <div class="col-md-2 col-12 mb-75">
                                                    <label for="active{{$item['id']}}">Success</label>
                                                    <div class="form-group custom-control custom-switch custom-switch-success">
                                                        <input type="checkbox" class="custom-control-input" id="active{{$item['id']}}" {{(isset($item['active']) && $item['active']) ? 'checked' : ''}}>
                                                        <label class="custom-control-label" for="active{{$item['id']}}">
                                                            <span class="switch-icon-left"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
                                                            <span class="switch-icon-right"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span>
                                                        </label>
                                                    </div>
                                                </div>

{{--                                                <div class="col-md-2 col-12 mb-50">--}}
{{--                                                    <div class="form-group">--}}
{{--                                                        <button class="btn btn-outline-danger text-nowrap px-1" data-repeater-delete type="button">--}}
{{--                                                            <i data-feather="x" class="mr-25"></i>--}}
{{--                                                            <span>Delete</span>--}}
{{--                                                        </button>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
                                            </div>
                                            <hr />
                                        </div>
                                    @endforeach
                                @endif

                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button class="btn btn-icon btn-primary submit__items" type="submit">
                                        <i data-feather="plus" class="mr-25"></i>
                                        <span>Lưu</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /Invoice repeater -->
        </div>
    </section>

<section class="form-control-repeater">
    <div class="row">
        <!-- Invoice repeater -->
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Invoice</h4>
                </div>
                <div class="card-body">
                    <form action="#" class="invoice-repeater">
                        <div data-repeater-list="invoice">
                            <div data-repeater-item>
                                <div class="row d-flex align-items-end">
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="itemname">Item Name</label>
                                            <input type="text" class="form-control" id="itemname" aria-describedby="itemname" placeholder="Vuexy Admin Template" />
                                        </div>
                                    </div>

                                    <div class="col-md-2 col-12">
                                        <div class="form-group">
                                            <label for="itemcost">Cost</label>
                                            <input type="number" class="form-control" id="itemcost" aria-describedby="itemcost" placeholder="32" />
                                        </div>
                                    </div>

                                    <div class="col-md-2 col-12">
                                        <div class="form-group">
                                            <label for="itemquantity">Quantity</label>
                                            <input type="number" class="form-control" id="itemquantity" aria-describedby="itemquantity" placeholder="1" />
                                        </div>
                                    </div>

                                    <div class="col-md-2 col-12">
                                        <div class="form-group">
                                            <label for="staticprice">Price</label>
                                            <input type="text" readonly class="form-control-plaintext" id="staticprice" value="$32" />
                                        </div>
                                    </div>

                                    <div class="col-md-2 col-12 mb-50">
                                        <div class="form-group">
                                            <button class="btn btn-outline-danger text-nowrap px-1" data-repeater-delete type="button">
                                                <i data-feather="x" class="mr-25"></i>
                                                <span>Delete</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <hr />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button class="btn btn-icon btn-primary" type="button" data-repeater-create>
                                    <i data-feather="plus" class="mr-25"></i>
                                    <span>Add New</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /Invoice repeater -->
    </div>
</section>
@stop

@section('script')
    <script>
        $(document).ready(function() {

                $.ajax({
                type: 'get',
                url: '{{route('admin.get.list.setting.arr')}}',
                success: function (response) {
                    $(".submit__items").click(function (e) {
                        e.preventDefault();
                        {{--let data = JSON.parse('<?= json_encode($data) ?>');--}}
                        let data = response.data;
                        console.log(data);
                        let newData = {};
                        $.map( data, function( val, i ) {
                            let $this = $('#sid'+val.id);
                            let name = $this.find('#name').val();
                            let value = $this.find('#value').val();
                            let active = $this.find('#active'+val.id).is(':checked');
                            // newData.push(Object({
                            //     'id' : val.id,
                            //     'name': name,
                            //     'key': val.key,
                            //     'value': value,
                            //     'active': active
                            // }
                            newData[val.key] = Object({
                                'name': name,
                                'key': val.key,
                                'value': value,
                                'active': active
                            });
                        });
                        $.ajax({
                            type: 'POST',
                            url: '{{route('admin.get.update.setting')}}',
                            data: {newData},
                            success: function (response) {
                                console.log(response)
                                if(response.status) {
                                    setTimeout(function () {
                                        toastr['success'](
                                            response.success,
                                            '👋 Thành công!',
                                            {
                                                closeButton: true,
                                                tapToDismiss: false,
                                                // rtl: isRtl
                                            }
                                        );
                                    }, 300);
                                } else {
                                    setTimeout(function () {
                                        toastr['error'](
                                            response.danger,
                                            '👋 Thất bại!',
                                            {
                                                closeButton: true,
                                                tapToDismiss: false,
                                                // rtl: isRtl
                                            }
                                        );
                                    }, 300);
                                }
                            }
                        });
                    })
                }
            });

        });
    </script>

    <script>
        // form repeater jquery
        $('.invoice-repeater, .repeater-default').repeater({
            show: function () {
                $(this).slideDown();
                // Feather Icons
                if (feather) {
                    feather.replace({ width: 14, height: 14 });
                }
            },
            hide: function (deleteElement) {
                if (confirm('Are you sure you want to delete this element?')) {
                    $(this).slideUp(deleteElement);
                }
            }
        });
    </script>
@stop
