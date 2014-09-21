@extends('master')

@section('title','Page Not Found')

@section('body')
<div class="row">
    <div class="span12">
      <div class="jumbotron center">
          <h1>Page Not Found <small><font face="Tahoma" color="red">Error 404</font></small></h1>
          <br />
          <p>The page you requested could not be found, either contact your webmaster or try again. Use your browsers <b>Back</b> button to navigate to the page you have prevously come from</p>
          <p><b>Or you could just press this neat little button:</b></p>
          <a href="{{route('dashboard.page')}}" class="btn btn-lg btn-info"><i class="glyphicon glyphicon-home"></i> Take Me Home</a>
        </div>

    </div>
  </div>
@stop