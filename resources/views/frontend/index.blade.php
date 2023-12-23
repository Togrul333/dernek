@extends('frontend.layouts.master')
@section('header')
    @include('frontend.includes.header')
@endsection
@section('content')
    @include('frontend.includes.main-slider-section')
{{--    @include('frontend.includes.give_helping')--}}
    @include('frontend.includes.popular_causes')
    @include('frontend.includes.you_can_help')
    @include('frontend.includes.counter_one')
{{--    @include('frontend.includes.charity_activity')--}}
{{--    @include('frontend.includes.meet_volunteers_one')--}}
    @include('frontend.includes.cta_one')
    @include('frontend.includes.gallery')
{{--    @include('frontend.includes.events')--}}
    @include('frontend.includes.news')
{{--    @include('frontend.includes.brand')--}}
@endsection
