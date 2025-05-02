@extends('fragment.admin')

@section('content')
<h2>Daftar Armada</h2>

<!-- Tombol Create Modal -->
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
        <th>
            Nama
            <a href="{{ route('cars.index', ['sort' => 'name', 'order' => request('order') === 'asc' ? 'desc' : 'asc']) }}">
                @if(request('sort') === 'name')
                    <i class="bi {{ request('order') === 'asc' ? 'bi-caret-up-fill' : 'bi-caret-down-fill' }}"></i>
                @else
                    <i class="bi bi-caret-down"></i> {{-- ikon default saat belum disortir --}}
                @endif
            </a>
        </th>
            <th>Harga</th>
            <th>Tipe</th>
            <th>Fitur</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cars as $car)
        <tr>
            <td>{{ $car->name }}</td>
            <td>Rp. {{ number_format($car->price, 0, ',', '.') }}</td>
            <td>{{ ucfirst($car->type) }}</td>
            <td>
                <ul>
                    @foreach($car->features ?? [] as $feature)
                        <li>{{ $feature }}</li>
                    @endforeach
                </ul>
            </td>
            <td>
                @if($car->image)
                    <img src="{{ asset('storage/' . $car->image) }}" width="80">
                @endif
            </td>
            <td>
                <!-- Tombol Edit -->
                <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                        data-bs-target="#editModal{{ $car->id }}">
                    Edit
                </button>

                <!-- Form Hapus -->
                <form method="POST" action="{{ route('cars.destroy', $car) }}" style="display:inline-block">
                    @csrf @method('DELETE')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- Pagination -->
<div class="mt-3">
    {{ $cars->appends(request()->query())->links() }}
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
            @csrf @method('PUT')
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
@endsection
