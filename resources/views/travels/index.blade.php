@extends('fragment.admin')

@section('content')
<h2>Daftar Travel</h2>

<!-- Tombol Create Modal -->
<button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#createModal">
    + Tambah Travel
</button>

@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<!-- Tabel Travel -->
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Kategori</th>
            <th>Keberangkatan</th>
            <th>Tujuan</th>
            <th>Harga</th>
            <th>Fitur</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($travels as $travel)
        <tr>
            <td>{{ $travel->category->name ?? '-' }}</td>
            <td>{{ $travel->category->name }}</td>
            <td>{{ $travel->destination }}</td>
            <td>Rp. {{ number_format($travel->price, 0, ',', '.') }}</td>
            <td>
                <ul>
                    @foreach($travel->features ?? [] as $feature)
                        <li>{{ $feature }}</li>
                    @endforeach
                </ul>
            </td>
            <td>
                @if($travel->image)
                    <img src="{{ asset('storage/' . $travel->image) }}" width="80">
                @endif
            </td>
            <td>
                <!-- Tombol Edit -->
                <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                        data-bs-target="#editModal{{ $travel->id }}">Edit</button>

                <!-- Tombol Hapus -->
                <form action="{{ route('travels.destroy', $travel) }}" method="POST" style="display:inline-block">
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
    {{ $travels->links() }}
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="createModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form method="POST" action="{{ route('travels.store') }}" enctype="multipart/form-data" class="modal-content">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title">Tambah Travel</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <!-- @if ($errors->any() && old('_method') !== 'PUT')
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif -->
                @include('travels.form', ['travel' => null])
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>

<!-- Modal Edit -->
@foreach($travels as $travel)
<div class="modal fade" id="editModal{{ $travel->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form method="POST" action="{{ route('travels.update', $travel) }}" enctype="multipart/form-data" class="modal-content">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{ $travel->id }}">
            <input type="hidden" name="_method" value="PUT">
            <div class="modal-header">
                <h5 class="modal-title">Edit Travel</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <!-- @if ($errors->any() && old('_method') === 'PUT' && old('id') == $travel->id)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif -->
                @include('travels.form', ['travel' => $travel])
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endforeach

<!-- Script untuk menjaga modal tetap terbuka saat ada error -->
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
