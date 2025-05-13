@extends('fragment.admin')

@section('content')
<h2>Daftar Testimoni</h2>

<!-- Tombol Create Modal -->
<button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#createModal">
    + Tambah Gambar
</button>

@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<!-- Tabel Galeri -->
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Judul</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($testimonis as $testimoni)
        <tr>
            <td>{{ $testimoni->title }}</td>
            <td>
                @if($testimoni->image)
                    <img src="{{ asset('storage/' . $testimoni->image) }}" width="100">
                @endif
            </td>
            <td>
                <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{ $testimoni->id }}">Edit</button>
                <form action="{{ route('testimonis.destroy', $testimoni) }}" method="POST" style="display:inline-block">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- Modal Create -->
<div class="modal fade" id="createModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <form method="POST" action="{{ route('testimonis.store') }}" enctype="multipart/form-data" class="modal-content">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title">Tambah Gambar Testimoni</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                @include('testimonis.form', ['testimoni' => null])
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>

<!-- Modal Edit -->
@foreach($testimonis as $testimoni)
<div class="modal fade" id="editModal{{ $testimoni->id }}" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <form method="POST" action="{{ route('testimonis.update', $testimoni) }}" enctype="multipart/form-data" class="modal-content">
            @csrf @method('PUT')
            <div class="modal-header">
                <h5 class="modal-title">Edit Gambar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                @include('testimonis.form', ['testimoni' => $testimoni])
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
