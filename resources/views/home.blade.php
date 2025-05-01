@extends('fragment.app')

@section('title', 'Home')

@section('content')
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
                    @foreach($products as $product)
                        <div class="col-md-3 mb-4">
                            <div class="card text-center" style="width: 18rem;">
                                <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <p class="card-text">{{ $product->description }}</p>
                                    <p><strong>Rp {{ number_format($product->price, 0, ',', '.') }}</strong></p>
                                    <a href="https://wa.me/6285212298688?text={{ urlencode('Halo, saya tertarik dengan produk jasa ' . $product->name . '. Apakah masih tersedia?') }}"
                                    target="_blank"
                                    class="btn btn-success">
                                    Hubungi via WhatsApp
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
@endsection