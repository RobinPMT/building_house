@extends('layouts.app')
@section('content')
    <section class="section-page">
        <div class="container">
            <div class="faqs-section">
                <h2 class="page-title text-center">Câu hỏi thường gặp</h2>
                <div class="faqs-list">
                    @if(isset($questions))
                        @foreach($questions as $key => $question)
                            <div class="faqs-item">
                                <span class="faqs-question">{!! $question->title !!}</span>
                                <div class="faqs-answer wrapper">
                                    {!! $question->content !!}
                                </div>
                            </div>
                        @endforeach
                    @endif

                </div>
                <!--20 item/page-->
                <div class="wrapper-pagination text-center">
                    @if(isset($questions))
                        {{ $questions->links('vendor.pagination.default') }}
                    @endif
                </div>
            </div>
        </div>
    </section>
@stop

@section('script')
    <script defer>
        $(document).ready(function(){
            $('.faqs-list .faqs-item').each(function(i,e){
                $(e).find('.faqs-question').click(function(){
                    $(this).parent().toggleClass('active');
                });
            });
        });
    </script>
@stop

