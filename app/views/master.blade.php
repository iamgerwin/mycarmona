<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>myCarmona | @yield('title')</title>
        <meta name="author" content="John Gerwin De las Alas">
        <meta name="viewport" content="width=device-width">

        {{HTML::style('semantic/css/semantic.min.css')}}

            <style type="text/css">
                html, body {
                height: 100%;
                min-width: 320px;
                font-size: 15px;
                }
                html, body {
                    font-family: "Helvetica Neue", Arial, Helvetica, sans-serif;
                }
                .hide {
                    position: absolute;
                }
            </style>
        @yield('head')
    </head>
    <body>

        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->
        @include('layouts.header')

        @yield('body')

        @include('layouts.footer')
        
        {{HTML::script('jq/jquery-2.1.1.min.js')}}
        {{HTML::script('semantic/javascript/semantic.min.js')}}

        @yield('foot')
    </body>
</html>
