@extends('master')

@section('title','CCTV $cctv->name')

@section('body')

    @include('layouts.navbar')
    <div class="panel panel-default col-xs-offset-3 col-xs-6">
    <div class="panel-heading">Edit CCTV {{$cctv->id}}</div>
    <div class="panel-body">

       {{Form::model($cctv,['route'=>['cctvs.update',$cctv->id],'method'=>'put','role'=>'form','class'=> 'form-horizontal'])}}
            <div class="form-group">
                {{ Form::label('name','Name:',['class' => 'col-xs-2 control-label']) }}
                <div class="col-xs-10">
                    {{ Form::text('name',null,['class' => 'form-control col-xs-10']) }}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('location','Location:',['class' => 'col-xs-2 control-label']) }}
                <div class="col-xs-10">
                    {{ Form::text('location',null,['class' => 'form-control ']) }}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('description','Description:',['class' => 'col-xs-2 control-label']) }}
                <div class="col-xs-10">
                    {{ Form::textarea('description',null,['class' => 'form-control ']) }}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('link','Link:',['class' => 'col-xs-2 control-label']) }}
                <div class="col-xs-10">
                    {{ Form::text('link',null,['class' => 'form-control ']) }}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('active','Active:',['class' => 'col-xs-2 control-label']) }}
                {{ Form::checkbox('active') }}
            </div>

            {{ Form::submit('Update',['class'=>'btn btn-primary btn-block btn-lg']) }}
       {{ Form::close() }}
    </div>
    </div>
@stop

