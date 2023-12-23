@extends('layouts.backend.master')
@section('title', trans('backend.titles.languages'))
@section('styles')
    <link rel="stylesheet" href="{{asset('backend/css/sweetalert.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/datatables.bundle.css')}}">
@endsection
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="d-flex flex-column-fluid">
            <div class="container">
                <div class="card card-custom">
                    <div class="card-header flex-wrap py-5">
                        <div class="card-title">
                            <h3 class="card-label">@lang("backend.titles.languages")</h3>
                        </div>
                    </div>
                    @include('backend.languages.tables.index')
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{asset('backend/js/sweetalert.min.js')}}"></script>
    <script src="{{asset('backend/js/datatables.bundle.js')}}"></script>
    @include('backend.includes.plugins.datatable',['columns'=>['id','name','code','default','status','actions'], 'route'=>route('backend.languages.index')])
@endsection
