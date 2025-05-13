<section id="kontak">
    <div class="konten9">
        <div class="container">
            <a class="navbar-brand text-black fw-bold" href="#">KitaKita Rent Car</a>
            <p class="brand">Rental Mobil Profesional</p>
            <div class="row">
                <div class="col-md-6">
                    <p class="judul">Alamat Kantor Pusat :</p>
                    <p>{{ $contactFooter->address ?? 'Alamat belum tersedia' }}</p>
                    <p>www.kitakita.com</p>
                    <div class="round-icon">
                        <a href="{{ $contactFooter->instagram ?? '#' }}">
                            <i class="bi bi-instagram insta"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <p class="judul">Kontak :</p>
                    <p>
                        <a href="https://wa.me/+62{{ preg_replace('/[^0-9]/', '', $contactFooter->waLink) }}" target="_blank" class="text-decoration-none text-dark">
                            <i class="bi bi-whatsapp icon"></i> 0{{ $contactFooter->waLink ?? '-' }}
                        </a>
                    </p>
                    <p><i class="bi bi-telephone-fill icon"></i> {{ $contactFooter->contactNumber ?? '-' }}</p>
                    <p>
                        <a href="mailto:{{ $contactFooter->email }}" class="text-decoration-none text-dark">
                            <i class="bi bi-envelope-fill icon"></i> {{ $contactFooter->email ?? '-' }}
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
