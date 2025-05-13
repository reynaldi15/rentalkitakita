@extends('fragment.admin')

@section('content')
<div class="container mt-5 ms-3">
    <h2>Informasi Kontak</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('contacts.update') }}" method="POST">
        @csrf

        <div class="mb-3 row">
            <label class="col-2 col-form-label">Nomor Kontak</label>
            <div class="col-md-4">
                <input type="text" name="contactNumber" class="form-control" value="{{ old('contactNumber', $contact->contactNumber ?? '') }}">
            </div>
        </div>

        <div class="mb-3 row">
            <label class="col-2 col-form-label">Nomor Rekening</label>
            <div class="col-md-4">
                <input type="text" name="rekeningNumber" class="form-control" value="{{ old('rekeningNumber', $contact->rekeningNumber ?? '') }}">
            </div>
        </div>

        <div class="mb-3 row">
            <label class="col-2 col-form-label">Nama Nasabah</label>
            <div class="col-md-4">
                <input type="text" name="nasabahName" class="form-control" value="{{ old('nasabahName', $contact->nasabahName ?? '') }}">
            </div>
        </div>

        <div class="mb-3 row">
            <label class="col-2 col-form-label">Link WA</label>
            <div class="col-md-4">
                <input type="text" name="waLink" class="form-control" value="{{ old('waLink', $contact->waLink ?? '') }}">
            </div>
        </div>

        <div class="mb-3 row">
            <label class="col-2 col-form-label">Tentang Kami</label>
            <div class="col-md-4">
                <textarea name="about" class="form-control">{{ old('about', $contact->about ?? '') }}</textarea>
            </div>
        </div>

        <div class="mb-3 row">
            <label class="col-2 col-form-label">Email</label>
            <div class="col-md-4">
                <input type="email" name="email" class="form-control" value="{{ old('email', $contact->email ?? '') }}">
            </div>
        </div>

        <div class="mb-3 row">
            <label class="col-2 col-form-label">Instagram</label>
            <div class="col-md-4">
                <input type="text" name="instagram" class="form-control" value="{{ old('instagram', $contact->instagram ?? '') }}">
            </div>
        </div>

        <div class="mb-3 row">
            <label class="col-2 col-form-label">Alamat</label>
            <div class="col-md-4">
                <textarea name="address" class="form-control">{{ old('address', $contact->address ?? '') }}</textarea>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
