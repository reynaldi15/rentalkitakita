@extends('fragment.app')

@section('title', 'Travel')

@section('content')

<section>
    <div class="travel1">
        <div class="container text-center">
            <h1>Rental KitaKita</h1>
            <h4>Charter 1 Mobil Drop Off Door to Door</h4>
        </div>
    </div>
</section>

<section>
    <div class="travel2">
        <div class="container">
            <p class="lokasi text-center">Pilih Lokasi Penjemputan dan Destinasi Anda</p>
            <hr>
            <!-- @foreach ($travelData as $city => $travels)
                <div class="{{ strtolower($city) }}" id="{{ strtolower($city) }}">
                    <h3 class="text-center">{{ $city }}</h3>
                    <div class="row mb-4">
                        @foreach ($travels as $travel)
                            <div class="col-md-4">
                                <div class="card shadow-custom card-travel">
                                    <p class="judul-card text-center">{{ $travel->category->name }} - {{ $travel->destination }}</p>
                                    <img src="{{ asset('storage/' . $travel->image) }}" class="card-img-top" alt="img/car">
                                    <div class="card-body">
                                        <hr>
                                        <h4 class="text-center fw-bold">Rp. {{ number_format($travel->price, 0, ',', '.') }}</h4>
                                        <a class="btn d-block mx-auto" href="https://wa.me/+62{{$travel->waLink}}?text={{ urlencode('Halo, saya tertarik memesan perjalanan rute ' . $travel->departure . '-' . $travel->destination . '. Apakah masih tersedia? saya ingin memesan untuk tanggal : ') }}" target="_blank">
                                            <i class="bi bi-whatsapp me-2"></i> <span> Pesan Sekarang </span>
                                        </a>
                                        <p class="detail">Detail Fitur :</p>
                                        @foreach ($travel->features as $fitur)
                                            <li>{{ $fitur }}</li>
                                        @endforeach
                                        <br><br>
                                        <p class="akhir">Harga belum termasuk BBM, Toll, Parkir dan Makan Driver</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach -->

            @foreach ($travelData as $categoryName => $travels)
            <div class="{{ strtolower($categoryName) }}" id="{{ strtolower($categoryName) }}">
                <h3 class="text-center">{{ $categoryName }}</h3>
                <div class="row mb-4">
                    @foreach ($travels as $travel)
                        <div class="col-md-4">
                            <div class="card shadow-custom card-travel">
                                <p class="judul-card text-center">{{ $categoryName }} - {{ $travel->destination }}</p>
                                <img src="{{ asset('storage/' . $travel->image) }}" class="card-img-top" alt="img/car">
                                <div class="card-body">
                                    <hr>
                                    <h4 class="text-center fw-bold">Rp. {{ number_format($travel->price, 0, ',', '.') }}</h4>
                                    <a class="btn d-block mx-auto"
                                    href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $travel->waLink) }}?text={{ urlencode('Halo, saya tertarik memesan perjalanan rute ' . $categoryName . '-' . $travel->destination . '. Apakah masih tersedia? Saya ingin memesan untuk tanggal: ') }}"
                                    target="_blank">
                                        <i class="bi bi-whatsapp me-2"></i> <span> Pesan Sekarang </span>
                                    </a>
                                    <p class="detail">Detail Fitur :</p>
                                    @foreach ($travel->features as $fitur)
                                        <li>{{ $fitur }}</li>
                                    @endforeach
                                    <br><br>
                                    <p class="akhir">Harga belum termasuk BBM, Toll, Parkir dan Makan Driver</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
        </div>
    </div>
</section>

@endsection


