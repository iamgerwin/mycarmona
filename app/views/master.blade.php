<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>MyCarmona | @yield('title')</title>
        <meta name="author" content="John Gerwin De las Alas">
        <meta name="viewport" content="width=device-width">
    
        {{HTML::style('tb/css/bootstrap.min.css')}}
        {{HTML::style('tb/css/plugins/metisMenu/metisMenu.min.css')}}
        {{HTML::style('tb/css/sb-admin-2.css')}}
        {{HTML::style('tb/font-awesome-4.1.0/css/font-awesome.min.css')}}

        @yield('header')

    </head>
    <body>
    <div class="container">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->
        @yield('head')

        @yield('body')



        {{HTML::script('tb/js/jquery-1.11.0.js')}}
        {{HTML::script('tb/js/bootstrap.min.js')}}
        {{HTML::script('tb/js/plugins/metisMenu/metisMenu.min.js')}}
        {{HTML::script('tb/js/sb-admin-2.js')}}

        @yield('foot')
    </div>
    </body>
</html>
