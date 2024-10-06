<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Main Page' }}</title>
        <link rel="stylesheet" href="{{ asset('assets/css/user-dashboard.css') }}">
    </head>
    <body>
        {{ $slot }}
        <p>this is from main blade blade ndshds</p>
    </body>
</html>
