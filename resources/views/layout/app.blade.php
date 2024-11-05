<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css'])
    @stack('styles')
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="contaner-fluid">
        @include('layout.header')
    </div>

    <div class="flex-grow-1">
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif

        @if(session()->has('error'))
            <div class="alert alert-danger">
                {{ session()->get('error') }}
            </div>
        @endif

        @yield('content')
    </div>


    @vite(['resources/js/app.js'])
    @stack('js')
</body>
</html>