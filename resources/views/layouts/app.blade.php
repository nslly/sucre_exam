<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sucre Exam</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('head-scripts')
</head>
<body class="bg-gray-50 h-screen flex items-center justify-center">
    @yield('content')

    @stack('scripts')
</body>
</html>