<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite(['resources/css/app.css','resources/js/app.js'])
        <title>{{ $title ?? 'STT CIPASUNG' }}</title>
    </head>
    <body class="mx-[7em]">
        <x-header/>
        {{-- All content  --}}
            {{ $slot }}
        <x-footer/>
    </body>
</html>
