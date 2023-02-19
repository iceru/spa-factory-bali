<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&family=Source+Sans+Pro:wght@300;400;600;700&display=swap"
        rel="stylesheet">


    <title>{{ config('app.name', 'Spa Factory Bali') }}</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <x-navbar type="transparent" />

    <main>
        {{ $slot }}
    </main>

    <x-footer />
</body>

</html>
