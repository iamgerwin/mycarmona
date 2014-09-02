@extends('master')

@section('title','New CCTV')

@section('body')
    New CCTV
    {{Form::open()}}
        @include('pages.partials.cctv')
    {{Form::close()}}


@stop

@section('foot')

@stop