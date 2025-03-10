
@extends('layouts.app')

@section('subtitle', 'Welcome')
@section('content_header title','home')
@section('conten_header_subtitle', 'Welcome')

@section('content_body')
@stop
@push('css')
    
@endpush

@push('js')
    <script> console.log("Hi, I'm using the Laravel-adminLTE package!");</script>
@endpush