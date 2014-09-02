@extends('master')

@section('title','Login')

@section('head')

@stop

@section('foot')
{{HTML::script('js/main.js')}}
<script type="text/javascript">
$('.form').transition({
    animation : 'tada',
  });
</script>
@stop

@section('body')
@include('pages._flash')
<div class="ui three column grid form">
  <div class="column">
  </div>
  <div class="column middle">
    <div class="ui fluid form segment">
      <h3 class="ui header"><i class="cloud icon"></i> myCarmona Web API</h3>
      {{Form::open(['data-remote', 'data-remote-success-message' => 'checking credentials'])}}
      <div class="field">
        <label>Username</label>
        <input name="username" placeholder="Username" type="text" />
      </div>
      <div class="field">
        <label>Password</label>
        <input name="password" placeholder="Password" type="password" />
      </div>

      {{Form::submit('Login',['class' => 'ui vertical animated blue button','data-confirm'=>'Are you sure?'])}}
      
      {{Form::close()}}
    </div>
  </div>
  <div class="column">
  </div>
</div>

@stop