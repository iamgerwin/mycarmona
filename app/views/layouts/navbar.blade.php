<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
      <a class="navbar-brand" href="{{URL::route('dashboard.page')}}" ><i class="glyphicon glyphicon-cloud"></i> MyCarmona</a>
    </div>


    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="{{ URL::route('dashboard.page') === URL::current() ? 'active' : '' }}"><a href="{{URL::route('dashboard.page')}}"><i class="glyphicon glyphicon-home"></i> Home</a></li>

       <li class="{{ URL::route('cctvs.index') === URL::current() ? 'active' : '' }}"><a href="{{URL::route('cctvs.index')}}"><i class="glyphicon glyphicon-camera"></i> CCTVs</a></li>
        <li class="{{ URL::route('articles.index') === URL::current() ? 'active' : '' }}"><a href="{{URL::route('articles.index')}}"><i class="glyphicon glyphicon-book"></i> Articles</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> Profile<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Users</a></li>
            <li><a href="#">Edit Profile</a></li>
            <li class="divider"></li>
            <li><a href="{{URL::route('logout')}}">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>