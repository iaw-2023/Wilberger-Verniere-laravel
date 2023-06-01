<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/master.css'])


        <title>WebCines</title>
    </head>

    <body>
        @show
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        @vite(['resources/js/sidebar-toggle.js'])
        <div class="main">
             <!-- Sidebar -->
            <button class="sidenav-toggle "><i class="fa fa-plus icon"></i></button>
            <div class="sidenav">
                @include('sidebar')
            </div>

             <!-- Page content -->
            <div class="content">
                @yield('content')
            </div>
        </div>
    </body>
</html>