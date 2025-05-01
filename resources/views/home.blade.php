<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- boostsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <title>Rental KitaKita</title>
</head>

<body>
    <section>
        <nav id="mainNavbar" class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <a class="navbar-brand text-black ps-5 fw-bold" href="#">Rental Mobil</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                    aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarContent">
                    <ul class="navbar-nav mb-2 mb-lg-0 column-gap-5">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">ARMADA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">TENTANG KAMI</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">TRAVEL</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">KONTAK</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">BLOG</a>
                        </li>
                    </ul>
                </div>
                <span class="d-none d-lg-block text-black fw-bold pe-5">
                    <i class="bi bi-telephone-fill me-2"></i>081234567890
                </span>
            </div>
        </nav>
    </section>

    <!-- konten 1 -->
    <section>
        <div class="konten1 ">
            <div class="container text-center">
                <h1>Rental KitaKita</h1>
                <h4>Sewa Mobil Profesional & Terpercaya Dengan Layanan Bintang Lima</h4>
                <a class="btn" href="https://wa.me/6281234567890" target="_blank"><i class="bi bi-whatsapp me-2"></i> <span> Booking Sekarang </span></a>
            </div>
        </div>
    </section>

    <!-- konten 2 -->
    <section>
        <div class="konten2">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 driver">
                        <div class="card text-center" style="width: 18rem;">
                            <img src="{{ asset('asset/mobil1.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Mobil + Driver</h5>
                                <p class="card-text">kami melayani sewa mobil dengan driver yang berpengalaman.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 bandara">
                        <div class="card text-center" style="width: 18rem;">
                            <img src="{{ asset('asset/mobil1.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title ">Mobil Bandara</h5>
                                <p class="card-text">Driver kami siap melayani Antar jemput bandara hingga 24 jam.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 travel">
                        <div class="card text-center" style="width: 18rem;">
                            <img src="{{ asset('asset/mobil1.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Travel Car</h5>
                                <p class="card-text">Kami menyediakan mobil untuk kebutuhan Travel ke luar kota.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- konten3 -->
    <section>
        <div class="konten3">
            <div class="container text-center">
                <dotlottie-player class="warningIcon text-center" src="https://lottie.host/3eab4402-6814-4b3f-b2be-3abd4cadc2e8/PAvP5Kv4mH.lottie" background="transparent" speed="1" loop autoplay></dotlottie-player>
                <p class="mt-4 waspada">WASPADA PENIPUAN!!</p>
                <p class="labelNomor">Nomor admin resmi Rental KitaKita</p>
                <a class="Nomor btn mt-5" href="">0821 2345 6789</a>
                <p class="labelRekening mt-3">Rekening Resmi Arasya RentCar</p>
                <button class="Rekening mt-5">BCA 021 843 8932<span>PT. Ayomi Raya</span></button>
            </div>
        </div>
    </section>


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
    <!-- <script src="{{ asset('js/home.js') }}"></script> -->
    <!-- animasi -->
    <script
        src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs"
        type="module"></script>
</body>

</html>