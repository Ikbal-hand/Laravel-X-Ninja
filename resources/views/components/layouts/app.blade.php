<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {{-- <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;700&display=swap" rel="stylesheet"> --}}

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        @vite(['resources/css/app.css','resources/js/app.js'])

        <title>{{ $title ?? 'STT CIPASUNG' }}</title>
    </head>
    <body >
        <x-header/>
        {{-- All content  --}}
            {{ $slot }}
        <x-footer/>
    </body>
</html>
