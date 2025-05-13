@extends('fragment.admin')

@section('content')
<h2>Daftar Armada</h2>

<!-- Tombol Tambah Armada -->
<button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#createModal">
    + Tambah Armada
</button>

@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<!-- Tabel Armada -->
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Tipe</th>
            <th>Harga</th>
            <th>Fitur</th>
            <th>WhatsApp</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cars as $car)
        <tr>
            <td>{{ $car->name }}</td>
            <td>{{ ucfirst($car->type) }}</td>
            <td>Rp {{ number_format($car->price, 0, ',', '.') }}</td>
            <td>
                <ul>
                    @foreach($car->features ?? [] as $feature)
                        <li>{{ $feature }}</li>
                    @endforeach
                </ul>
            </td>
            <td>{{ $car->waLink }}</td>
            <td>
                @if($car->image)
                    <img src="{{ asset('storage/' . $car->image) }}" width="80">
                @endif
            </td>
            <td>
                <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                        data-bs-target="#editModal{{ $car->id }}">Edit</button>

                <form action="{{ route('cars.destroy', $car) }}" method="POST" style="display:inline-block">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- Pagination -->
<div class="mt-3">
    {{ $cars->links() }}
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="createModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form method="POST" action="{{ route('cars.store') }}" enctype="multipart/form-data" class="modal-content">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title">Tambah Armada</h5>
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
<div class="modal fade" id="editModal{{ $car->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form method="POST" action="{{ route('cars.update', $car) }}" enctype="multipart/form-data" class="modal-content">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{ $car->id }}">
            <input type="hidden" name="_method" value="PUT">
            <div class="modal-header">
                <h5 class="modal-title">Edit Armada</h5>
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

<!-- Script Modal Tetap Terbuka Saat Error -->
@if ($errors->any())
<script>
    document.addEventListener("DOMContentLoaded", function() {
        @if(old('_method') === 'PUT')
            const id = '{{ old('id') }}';
            const modalId = `#editModal${id}`;
            const modal = new bootstrap.Modal(document.querySelector(modalId));
            modal.show();
        @else
            const modal = new bootstrap.Modal(document.querySelector('#createModal'));
            modal.show();
        @endif
    });
</script>
@endif

@endsection
