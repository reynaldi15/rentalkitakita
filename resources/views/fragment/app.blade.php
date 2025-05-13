<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- boostsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- swipper css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <title>@yield('title', 'Rental KitaKita')</title>
</head>
<body>

    @include('fragment.navbar')
    @yield('content')
    @include('fragment.footer')

    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/6281234567890" target="_blank"
        class="btn btn-success rounded-circle position-fixed d-flex align-items-center justify-content-center"
        style="width: 60px; height: 60px; bottom: 20px; left: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); z-index: 999;">
        <i class="bi bi-whatsapp" style="font-size: 24px;"></i>
    </a>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
    <!-- js -->
    <script src="{{ asset('js/home.js') }}"></script>
    <!-- swipper js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- animasi -->
    <script
        src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs"
        type="module"></script>
</body>
</html>