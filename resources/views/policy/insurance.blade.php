
@extends('layouts.app')
@section('content')
    <section class="section-page">
        <div class="container">
            <div class="policy-section">
                <h2 class="page-title text-center">Chính sách bảo hành</h2>
                <div class="wrapper get-anchor">
                    @if(isset($insurance))
                        {!! $insurance->value !!}
                    @endif
                </div>
            </div>
        </div>
    </section>
@stop
@section('script')

@stop
