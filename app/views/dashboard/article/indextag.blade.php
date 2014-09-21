@extends('master')

@section('title', ucwords($tag->name))

@section('body')

    @include('layouts.navbar')

    <h2><span class="label label-info">{{ucwords($tag->name)}}</span></h2>

   <table id="article" class="display" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>Title</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    @foreach($articles as $article)
        <tr>
            <th>{{$article->title}}</th>
            <th>{{HTML::linkRoute('articles.edit','Edit',['id'=>$article->id],['class'=>'btn btn-primary'])}}</th>
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
        $('#article').dataTable();
    } );
    </script>
@stop