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
    <title>Rental KitaKita</title>
</head>

<body>
    <!-- navbar -->
    <section>
        <nav id="mainNavbar" class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <a class="navbar-brand text-black ps-5 fw-bold" href="#">KitaKita Rent Car</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                    aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarContent">
                    <ul class="navbar-nav mb-2 mb-lg-0 column-gap-5">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#armada">ARMADA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tentang">TENTANG KAMI</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">TRAVEL</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#kontak">KONTAK</a>
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
                    <div class="col-md-4 driver">
                        <div class="card text-center">
                            <img src="{{ asset('asset/driver.jpeg') }}" class="card-img-top mx-auto d-block" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Mobil + Driver</h5>
                                <p class="card-text">kami melayani sewa mobil dengan driver yang berpengalaman.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 bandara">
                        <div class="card text-center">
                            <img src="{{ asset('asset/bandara.jpg') }}" class="card-img-top mx-auto d-block" alt="...">
                            <div class="card-body">
                                <h5 class="card-title ">Mobil Bandara</h5>
                                <p class="card-text">Driver kami siap melayani Antar jemput bandara hingga 24 jam.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 travel">
                        <div class="card text-center">
                            <img src="{{ asset('asset/travel.jpg') }}" class="card-img-top mx-auto d-block" alt="...">
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
                <p class="labelRekening mt-3">Rekening Resmi KitaKita RentCar</p>
                <button class="Rekening mt-5">BCA 021 843 8932<span>PT. Ayomi Raya</span></button>
            </div>
        </div>
    </section>

    <!-- konten4 -->
    <section id="armada">
        <div class="konten4">
            <div class="container">
                <div class="judul mt-5">
                    <p>Armada Kami</p>
                    <i class="bi bi-caret-down-fill"></i>
                </div>
                <hr>
                <div class="card-item">
                    <!-- armada kecil -->
                    <div class="row mb-4">
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{ asset('asset/mobil1.png') }}" class="card-img-top" alt="img/car">
                                <div class="card-body">
                                    <hr>
                                    <h4 class="text-center fw-bold">Rp. 800,000</h4>
                                    <a class="btn d-block mx-auto" href="https://wa.me/6281234567890" target="_blank"><i class="bi bi-whatsapp me-2"></i> <span> Pesan Sekarang </span></a>
                                    <p class="detail">Detail Fitur :</p>
                                    <p class="kriteria">Mobil & Driver</p>
                                    <p class="kriteria">Durasi 12 Jam</p>
                                    <p class="kriteria">Kapasitas 7 Penumpang sudah termasuk jasa Driver</p>
                                    <p class="akhir">Harga belum termasuk BBM, Toll, Parkir dan Makan Driver</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{ asset('asset/mobil1.png') }}" class="card-img-top" alt="img/car">
                                <div class="card-body">
                                    <hr>
                                    <h4 class="text-center fw-bold">Rp. 800,000</h4>
                                    <a class="btn d-block mx-auto" href="https://wa.me/6281234567890" target="_blank"><i class="bi bi-whatsapp me-2"></i> <span> Pesan Sekarang </span></a>
                                    <p class="detail">Detail Fitur :</p>
                                    <p class="kriteria">Mobil & Driver</p>
                                    <p class="kriteria">Durasi 12 Jam</p>
                                    <p class="kriteria">Kapasitas 7 Penumpang sudah termasuk jasa Driver</p>
                                    <p class="akhir">Harga belum termasuk BBM, Toll, Parkir dan Makan Driver</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{ asset('asset/mobil1.png') }}" class="card-img-top" alt="img/car">
                                <div class="card-body">
                                    <hr>
                                    <h4 class="text-center fw-bold">Rp. 800,000</h4>
                                    <a class="btn d-block mx-auto" href="https://wa.me/6281234567890" target="_blank"><i class="bi bi-whatsapp me-2"></i> <span> Pesan Sekarang </span></a>
                                    <p class="detail">Detail Fitur :</p>
                                    <p class="kriteria">Mobil & Driver</p>
                                    <p class="kriteria">Durasi 12 Jam</p>
                                    <p class="kriteria">Kapasitas 7 Penumpang sudah termasuk jasa Driver</p>
                                    <p class="akhir">Harga belum termasuk BBM, Toll, Parkir dan Makan Driver</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- armada besar -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <img src="{{ asset('asset/mobil1.png') }}" class="card-img-top" alt="img/car">
                                <div class="card-body">
                                    <hr>
                                    <h4 class="text-center fw-bold">Rp. 800,000</h4>
                                    <a class="btn d-block mx-auto" href="https://wa.me/6281234567890" target="_blank"><i class="bi bi-whatsapp me-2"></i> <span> Pesan Sekarang </span></a>
                                    <p class="detail">Detail Fitur :</p>
                                    <p class="kriteria">Mobil & Driver</p>
                                    <p class="kriteria">Durasi 12 Jam</p>
                                    <p class="kriteria">Kapasitas 7 Penumpang sudah termasuk jasa Driver</p>
                                    <p class="akhir">Harga belum termasuk BBM, Toll, Parkir dan Makan Driver</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <img src="{{ asset('asset/mobil1.png') }}" class="card-img-top" alt="img/car">
                                <div class="card-body">
                                    <hr>
                                    <h4 class="text-center fw-bold">Rp. 800,000</h4>
                                    <a class="btn d-block mx-auto" href="https://wa.me/6281234567890" target="_blank"><i class="bi bi-whatsapp me-2"></i> <span> Pesan Sekarang </span></a>
                                    <p class="detail">Detail Fitur :</p>
                                    <p class="kriteria">Mobil & Driver</p>
                                    <p class="kriteria">Durasi 12 Jam</p>
                                    <p class="kriteria">Kapasitas 7 Penumpang sudah termasuk jasa Driver</p>
                                    <p class="akhir">Harga belum termasuk BBM, Toll, Parkir dan Makan Driver</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- konten 5 -->
    <section>
        <div class="konten5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="judul">Segera Hubungi Kami!</p>
                        <p class="penawaran">Dapatkan Harga Menarik dan Perjalanan Yang Berkesan Bersama KitaKita Rent Car.</p>
                        <a class="btn hubungi" href="#">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- konten6 -->
    <section id="tentang">
        <div class="konten6">
            <div class="container">
                <h3 class="judul text-center">Ten<span>tang K</span>ami</h3>
                <p class="tentang1">KitaKita Rent Car adalah salah satu penyedia jasa layanan sewa mobil profesional dan terpercaya dengan pelayanan bintang 5. Kami menyediakan unit mobil dan
                    layanan yang cukup lengkap, mulai dari Mobil dan Driver, Antar Jemput Bandara, Mobil Travel dan lain – lain. Kami selalu berkomitmen menjaga kepercayaan
                    konsumen dengan menghadirkan armada yang bersih demi kenyamanan konsumen.</p>
                <p class="tentang2">KitaKita Rent Car selalu menjaga ketepatan waktu dalam melayani, mulai dari kesiapan mobil, hingga ketepatan waktu penjemputan. Selain itu, KitaKita Rent Car
                    juga menawarkan layanan sewa mobil profesional dengan harga yang sangat terjangkau namun tetap mengutamakan kualitas pelayanan kami.</p>
                <hr>
            </div>
        </div>
    </section>

    <!-- konten7 -->
    <section>
        <div class="konten7">
            <div class="container">
                <p class="judul text-center">Kenapa Harus Me<span>nggun</span>akan Jasa Kami?</p>
                <div class="row">
                    <div class="col-md-6 d-grid gap-0 row-gap-3 text-center">
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="card pengalaman">
                                    <div class="card-body">
                                        <div class="icon-round mx-auto">
                                            <i class="fa-solid fa-user-tie user"></i>
                                        </div>
                                        <p class="card-text">Berpengalaman</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card terjangkau">
                                    <div class="card-body">
                                        <div class="icon-round mx-auto">
                                            <i class="fa-solid fa-dollar-sign harga"></i>
                                        </div>
                                        <p class="card-text">Harga Terjangkau</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card terawat">
                                    <div class="card-body">
                                        <div class="icon-round mx-auto">
                                            <i class="fa-solid fa-car mobil"></i>
                                        </div>
                                        <p class="card-text">Mobil Terawat</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card support">
                                    <div class="card-body">
                                        <div class="icon-round mx-auto">
                                            <i class="fa-solid fa-user-clock jam"></i>
                                        </div>
                                        <p class="card-text">Support 24/7</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn d-block mx-auto" href="https://wa.me/6281234567890" target="_blank"><i class="bi bi-whatsapp me-2"></i> <span> Booking Sekarang </span></a>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('asset/mobil1.png') }}" alt="konten mendukung" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- konten8 -->
    <section>
        <div class="konten8">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 galery">
                        <h2 class="judul">Gallery Kami</h2>
                    </div>
                    <div class="col-md-7">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <!-- 8 Gambar -->
                                <div class="swiper-slide img-fluid"><img src="{{ asset('asset/mobil1.png') }}"></div>
                                <div class="swiper-slide"><img src="{{ asset('asset/mobil1.png') }}"></div>
                                <div class="swiper-slide"><img src="{{ asset('asset/mobil1.png') }}"></div>
                                <div class="swiper-slide"><img src="{{ asset('asset/mobil1.png') }}"></div>
                                <div class="swiper-slide"><img src="{{ asset('asset/mobil1.png') }}"></div>
                                <div class="swiper-slide"><img src="{{ asset('asset/mobil1.png') }}"></div>
                                <div class="swiper-slide"><img src="{{ asset('asset/mobil1.png') }}"></div>
                                <div class="swiper-slide"><img src="{{ asset('asset/mobil1.png') }}"></div>
                            </div>

                            <!-- Pagination -->
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- konten9 -->
    <section id="kontak">
        <div class="konten9">
            <div class="container">
                <a class="navbar-brand text-black fw-bold" href="#">KitaKita Rent Car</a>
                <p class="brand">Rental Mobil Profesional</p>
                <div class="row">
                    <div class="col-md-6">
                        <p class="judul">Alamat Kantor Pusat :</p>
                        <p>Selakopi Hijau blok F no 3-4, Pasir Mulya, Bogor Barat, Kota Bogor, 16118</p>
                        <p>www.kitakita.com</p>
                        <div class="round-icon">
                            <a href="https:\\www.instagram.com/jepri_halomoan1"><i class="bi bi-instagram insta"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p class="judul">Kontak :</p>
                        <p><i class="bi bi-whatsapp icon"></i> 0852-1234-5678</p>
                        <p><i class="bi bi-telephone-fill icon"></i> 0852-1234-5678</p>
                        <p><i class="bi bi-envelope-fill icon"></i> kitakita@gmail.com</p>
                    </div>
                </div>
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
    <script src="{{ asset('js/home.js') }}"></script>
    <!-- swipper js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- animasi -->
    <script
        src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs"
        type="module"></script>
</body>

</html>