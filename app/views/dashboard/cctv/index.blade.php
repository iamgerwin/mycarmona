@extends('master')

@section('title','CCTVs')

@section('body')

    @include('layouts.navbar')

   <table id="cctv" class="display" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>Name</th>
            <th>Location</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    @foreach($cctvs as $cctv)
        <tr>
            <th>{{$cctv->name}}</th>
            <th>{{$cctv->location}}</th>
            <th>{{HTML::linkRoute('cctvs.edit','Edit',['id'=>$cctv->id],['class'=>'btn btn-primary'])}}</th>
        </tr>
    @endforeach
    </tbody>
   </table>
@stop

@section('header')
    {{HTML::style('dt/css/jquery.dataTables.min.css')}}

@stop

@section('foot')
    {{HTML::script('dt/js/jquery.dataTables.min.js')}}

    <script>
    $(document).ready(function() {
        $('#cctv').dataTable();
    } );
    </script>
@stop