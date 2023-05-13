<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        @yield('title')
    </title>
    <meta name="description"
        content="Spa Factory Bali is a renowned, professional contract manufacturer in Bali with a production facility that complies with Good Manufacture Practice standards. ">
    <meta name="keywords"
        content="Contract manufacturing, Private Label, Private label cosmetic, OEM natural products, Spa product,
        Natural spa product, Bali spa product, Bali natural product, Premium spa product, Sustainable spa product,
        Handmade spa product, Beauty spa product, Natural skincare, Natural cosmetics, Organic skincare, Botanical product,
        Botanical cosmetics, Sustainable skincare, Sustainable body product, Sustainable cosmetics, Handmade cosmetics,
        Hotel amenities, Luxury amenities, Natural hotel amenities, Sustainable hotel amenities, Refillable hotel amenities">
    <meta name="author" content="Spa Factory Bali">

    <meta property="og:title" content="Spa Factory Bali" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://spafactorybali.biz" />
    <meta property="og:image" content="https://spafactorybali.biz/images/logo.png" />

    <meta name="twitter:title" content="Spa Factory Bali">
    <meta name="twitter:description"
        content=" Spa Factory Bali is a renowned, professional contract manufacturer in Bali with a production facility that complies with Good Manufacture Practice standards. ">
    <meta name="twitter:image" content=" https://spafactorybali.biz/images/logo.png">
    <meta name="twitter:card" content="https://spafactorybali.biz/images/logo.png">

    <meta property="og:site_name" content="Spa Factory Bali">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="canonical" href="{{ url()->current() }}" />

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-3HY997DX1Y"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-3HY997DX1Y');
    </script>

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&family=Source+Sans+Pro:wght@300;400;600;700&display=swap"
        rel="stylesheet">

    {{-- jQuery --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- AOS --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    {{-- Slick Carousel --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
        integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Leaflet --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
        integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
        integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"
        integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKG2MA8i3rV/DGa3tdttQGgWyatG/SkncT53KHQaS5Jh9MNOT3dmFL0FjTY08And/Cw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"
        integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <x-navbar :type="\Request::route()->getName()" />

    <main>
        {{ $slot }}
    </main>

    <x-sidemobile />


    <script>
        AOS.init({
            once: true,
            duration: 600,
        });
    </script>

    <x-footer />
</body>

</html>
