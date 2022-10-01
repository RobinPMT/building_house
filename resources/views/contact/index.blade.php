@extends('layouts.app')
@section('content')

    <section class="google-map">
        <iframe src="{{isset($settings['map']) ? $settings['map'] : ''}}" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>
    <section class="section-page">
        <div class="container">
            <div class="contact-section">
                <h2 class="page-title text-center">Liên hệ tư vấn</h2>
                <form  action="{{route('get.store.contact')}}" method="POST" role="form" >
                    @csrf
                    <div class="contact-form">
                        <input type="text" class="contact-input" required name="name" placeholder="Họ tên *" />
                        <input type="text" class="contact-input" required name="phone" placeholder="Điện thoại *" />
                        <input type="email" class="contact-input" required name="email" placeholder="Email" />
                        <select name="product_id" class="contact-input">
                            <option value="" selected>Chọn sản phẩm</option>
                            @php echo App\Http\Controllers\ProductController::showProducts();  @endphp
                        </select>
                        <textarea class="contact-input" required name="content" rows="4" placeholder="Lời nhắn"></textarea>
                        {{--                    <div class="contact-captcha text-center">--}}
                        {{--                        Google captcha here--}}
                        {{--                    </div>--}}
                        <div class="contact-action text-center">
                            <button type="submit" class="contact-button">Gửi thông tin</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </section>
@stop

@section('script')
@stop
