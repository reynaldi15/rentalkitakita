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

<section>
    <div class="testimoni py-5">
        <div class="container">
            <p class="h4 text-center">Testimoni</p>
            <hr class="mx-auto mb-4" style="width: 100px; border-top: 2px solid #000;">

            <div class="row g-3">
                @foreach($testimonis as $testimoni)
                    <div class="col-6 col-md-3">
                        <div class="testimonial-card shadow-custom p-2 text-center">
                            <img src="{{ asset('storage/' . $testimoni->image) }}" class="img-fluid rounded mb-2" alt="Testimoni {{ $loop->iteration }}">
                            <small class="text-muted">
                                {{ \Carbon\Carbon::parse($testimoni->waktu)->translatedFormat('d F Y') }}
                            </small>
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


@endsection