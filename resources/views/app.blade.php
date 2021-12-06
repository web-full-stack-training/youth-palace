<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ str_replace('_', ' ', env('APP_NAME')) }}</title>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
    @include('layout.header')
    @yield('content')
    @include('layout.footer')
    @include('layout.modal')
    <div class="dot-spin"></div>
    <script src="{{ asset('js/helpers.js') }}"></script>
    </body>
</html>
