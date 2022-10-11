
@extends('layouts.app')
@section('content')
    <section class="section-page">
        <div class="container">
            <div class="policy-section">
                @if(isset($policy))
                    <h2 class="page-title text-center">{{$policy->title}}</h2>
                    <div class="wrapper get-anchor">
                        {!! $policy->content !!}
                    </div>
                @endif
            </div>
        </div>
    </section>
@stop
@section('script')

@stop
