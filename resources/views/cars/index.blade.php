@extends('fragment.admin')

@section('content')
<h2>Daftar Mobil</h2>

<!-- Tombol Create Modal -->
<button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#createCarModal">
    + Tambah Mobil
</button>

@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<!-- Tabel Mobil -->
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Harga</th>
            <th>Jenis</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cars as $car)
        <tr>
            <td>{{ $car->name }}</td>
            <td>Rp{{ number_format($car->price, 0, ',', '.') }}</td>
            <td>{{ ucfirst($car->type) }}</td>
            <td>
                @if($car->image)
                    <img src="{{ asset('storage/' . $car->image) }}" width="80">
                @endif
            </td>
            <td>
                <!-- Tombol Edit Modal -->
                <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editCarModal{{ $car->id }}">Edit</button>

                <!-- Form Hapus -->
                <form method="POST" action="{{ route('cars.destroy', $car->id) }}" style="display:inline-block">
                    @csrf @method('DELETE')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- Modal Create -->
<div class="modal fade" id="createCarModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form method="POST" action="{{ route('cars.store') }}" enctype="multipart/form-data" class="modal-content">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title">Tambah Mobil</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                @include('cars.form', ['car' => null])
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>

<!-- Modal Edit -->
@foreach($cars as $car)
<div class="modal fade" id="editCarModal{{ $car->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form method="POST" action="{{ route('cars.update', $car->id) }}" enctype="multipart/form-data" class="modal-content">
            @csrf @method('PUT')
            <div class="modal-header">
                <h5 class="modal-title">Edit Mobil</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                @include('cars.form', ['car' => $car])
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endforeach
@endsection