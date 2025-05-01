@extends('fragment.admin')

@section('content')
<h2>Daftar Produk</h2>

<!-- Tombol Create Modal -->
<button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#createModal">
    + Tambah Produk
</button>

@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<!-- Tabel Produk -->
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Harga/Hari</th>
            <th>Tersedia</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>Rp{{ number_format($product->price_per_day, 0, ',', '.') }}</td>
            <td>{{ $product->availability ? 'Ya' : 'Tidak' }}</td>
            <td>
                @if($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}" width="80">
                @endif
            </td>
            <td>
                <!-- Tombol Edit Modal -->
                <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                        data-bs-target="#editModal{{ $product->id }}">Edit</button>

                <!-- Form Hapus -->
                <form method="POST" action="{{ route('products.destroy', $product) }}" style="display:inline-block">
                    @csrf @method('DELETE')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus?')">Hapus</button>
                </form>
            </td>
        </tr>

        <!-- Modal Edit -->
        <div class="modal fade" id="editModal{{ $product->id }}" tabindex="-1">
            <div class="modal-dialog">
                <form method="POST" action="{{ route('products.update', $product) }}"
                      enctype="multipart/form-data" class="modal-content">
                    @csrf @method('PUT')
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Produk</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        @include('products.form', ['product' => $product])
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
        @endforeach
    </tbody>
</table>

<!-- Modal Create -->
<div class="modal fade" id="createModal" tabindex="-1">
    <div class="modal-dialog">
        <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data" class="modal-content">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title">Tambah Produk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                @include('products.form')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>

@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const createModal = document.getElementById('createModal');

    createModal.addEventListener('show.bs.modal', function () {
        @if (!session()->has('_old_input'))
            createModal.querySelector('input[name="name"]').value = '';
            createModal.querySelector('textarea[name="description"]').value = '';
            createModal.querySelector('input[name="price_per_day"]').value = '';
            createModal.querySelector('select[name="availability"]').value = '1';
            createModal.querySelector('input[name="image"]').value = '';
        @endif
    });
});
</script>
@endsection
