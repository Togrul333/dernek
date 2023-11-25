@extends('layouts.backend.master')
@section('title', trans('backend.titles.donations'))
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="d-flex flex-column-fluid">
            <div class="container">
                <div class="card card-custom">
                    @include('backend.includes.table.header', ['page' => 'donations', 'id' => $donation->id])
                    @include('backend.donations.tables.show')
                    @include('backend.includes.table.footer', ['page' => 'donations', 'id' => ['donation' => $donation->id]])
                </div>
            </div>
        </div>
    </div>
@endsection
