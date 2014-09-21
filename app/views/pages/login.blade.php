@extends('master')

@section('title','Login')

@section('head')

@stop

@section('foot')
{{HTML::script('js/main.js')}}
<script type="text/javascript">
$('.form').transition({
    animation : 'tada'
  });
</script>
@stop

@section('body')


<div class="center-block">
  <div class="panel panel-primary col-xs-6 col-sm-offset-3">
      <div class="panel-heading">Login</div>
      <div class="panel-body">
      {{Form::open(['route' => 'login.store','class'=>'form-horizontal','role'=>'form'])}}

        <div class="form-group">
            {{ Form::label('username','Username:') }}
            {{ Form::text('username',null,['placeholder'=>'Username','class'=>'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('password','Password:') }}
            {{ Form::password('password',['placeholder'=>'Password','class'=>'form-control']) }}
        </div>
      {{Form::submit('Login',['class' => 'btn btn-primary btn-lg btn-block'])}}
      
      {{Form::close()}}
      </div>
   </div>
</div>
@stop