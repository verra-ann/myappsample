<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <img src="/img/2.jpg" class="absolute object-cover w-full h-full"/> --}}

  @vite('resources/css/app.css')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>ToDoList</title>
    <link rel="shortcut icon" href="<?php echo asset('img/3.png'); ?>">
</head>
<body class="h-full">
    @yield('content')
    
    @yield('head')
    @yield('list')
    @yield('edit')
    @yield('404')
    @yield('home')
</body>
</html>