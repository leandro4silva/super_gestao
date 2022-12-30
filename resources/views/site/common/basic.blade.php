<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Super gestão - @yield('title')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{asset('css/globalStyle.css')}}">
    </head>
    <body>
        @include('site.common._partials.header')
        @yield('content')
    </body>
</html>