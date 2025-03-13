<!doctype html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', 'Мой код')</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>

        @include('layouts.header')

        <main>
            @yield('content')
        </main>

        @include('layouts.footer')

    </body>
</html>
