<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Lagwerta Nature Park</title>

        <link rel="stylesheet" href="{{ asset('assets/css/login_register.css') }}">

    </head>
    <body>
        {{ $slot }}
    </body>
</html>
