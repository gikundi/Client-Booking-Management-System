@extends('layouts.layout')

<html>
    <head>
        <title>@yield('title')</title>
    </head>
    <body>


        @section('sidebar')
        This is the master sidebar.
        @show

        <div class="container">
            @yield('content')

            @include('sweet::alert')
        </div>
    </body>
</html>
