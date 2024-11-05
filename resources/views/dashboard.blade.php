@extends('layout.app')

@section('title', 'Dashboard')

@push('styles')
    <style>
        .custom-vh-80 {
            height: 80vh;
        }
    </style>
@endpush

@section('content')
    <div class="d-flex justify-content-center align-items-center custom-vh-80 ">
        <h1>Welcome to Mapple Corp.</h1>

    </div>
@endsection
