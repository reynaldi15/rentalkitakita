@extends('fragment.app')

@section('title', 'Testimoni')

@section('content')

<section>
    <div class="travel1 ">
        <div class="container text-center">
            <h1>Rental KitaKita</h1>
            <h4>Charter 1 Mobil Drop Off Door to Door</h4>
        </div>
    </div>
</section>

<!-- testimoni -->
<!-- <section>
    <div class="testimoni">
        <div class="container">
            <p>Testimoni</p>
            <hr>
        </div>
    </div>
</section> -->

<!-- <section>
    <div class="testimoni py-5">
        <div class="container">
            <p>Testimoni</p>
            <hr class="mx-auto">

            <div class="row g-3">
                <div class="col-6 col-md-3">
                    <div class="testimonial-card shadow-custom">
                        <img src="{{ asset('asset/mobil1.png') }}" class="img-fluid rounded" alt="Testimoni 1">
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="testimonial-card shadow-custom">
                        <img src="{{ asset('asset/mobil1.png') }}" class="img-fluid rounded" alt="Testimoni 2">
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="testimonial-card shadow-custom">
                        <img src="{{ asset('asset/mobil1.png') }}" class="img-fluid rounded" alt="Testimoni 3">
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="testimonial-card shadow-custom">
                        <img src="{{ asset('asset/mobil1.png') }}" class="img-fluid rounded" alt="Testimoni 4">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="batas-testi"></div>
</section> -->
<section>
    <div class="testimoni py-5">
        <div class="container">
            <p class="h4 text-center">Testimoni</p>
            <hr class="mx-auto mb-4" style="width: 100px; border-top: 2px solid #000;">

            <div class="row g-3">
                @foreach($testimonis as $testimoni)
                    <div class="col-6 col-md-3">
                        <div class="testimonial-card shadow-custom p-2">
                            <img src="{{ asset('storage/' . $testimoni->image) }}" class="img-fluid rounded" alt="Testimoni {{ $loop->iteration }}">
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-center mt-4">
                {{ $testimonis->links() }}
            </div>
        </div>
    </div>
</section>

<section>
    <div class="batas-testi" style="height: 50px;"></div>
</section>



<!-- kontak -->
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



@endsection