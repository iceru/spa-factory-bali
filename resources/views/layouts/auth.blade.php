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
    <x-navbar type="auth" />

    <main>
        <div
            class=" bg-header bg-black bg-opacity-50
            bg-blend-darken bg-center bg-no-repeat bg-cover -mt-32 pt-32">
            <div class="container grid lg:grid-cols-2 gap-8  items-center">
                <div class="login__image relative " style="height: 50vw">
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                        <img src="/images/logo-white.png" class="h-40 w-auto object-contain" alt="Spa Factory Bali">
                    </div>
                </div>
                {{ $slot }}
            </div>
        </div>
    </main>

    <x-footer />
</body>

</html>
