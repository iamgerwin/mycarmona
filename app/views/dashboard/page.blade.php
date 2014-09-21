@extends('pages.full-page')

@section('title', 'Dashboard')

@section('body')

    <div id="wrapper">
        <!--Main Navigation -->
        @include('layouts.navbar')
    <div class="panel panel-info col-xs-2">
      <div class="panel-heading">Panel heading without title</div>
      <div class="panel-body">
        Panel content
      </div>
    </div>

    </div>
@stop

@section('foot')

    @include('layouts.footer')
@stop