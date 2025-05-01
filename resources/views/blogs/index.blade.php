@extends('fragment.admin')

@section('content')
<h2>Daftar Blog</h2>

<!-- Tombol Create Modal -->
<button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#createModal">
    + Tambah Blog
</button>

@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<!-- Tabel Blog -->
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Judul</th>
            <th>Isi</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($blogs as $blog)
        <tr>
            <td>{{ $blog->title }}</td>
            <td>{{ Str::limit($blog->content, 50) }}</td>
            <td>
                @if($blog->image)
                    <img src="{{ asset('storage/' . $blog->image) }}" width="80">
                @endif
            </td>
            <td>
                <!-- Tombol Edit Modal -->
                <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                        data-bs-target="#editModal{{ $blog->id }}"
                        data-title="{{ $blog->title }}"
                        data-content="{{ $blog->content }}"
                        data-image="{{ asset('storage/' . $blog->image) }}">
                    Edit
                </button>

                <!-- Form Hapus -->
                <form method="POST" action="{{ route('blogs.destroy', $blog) }}" style="display:inline-block">
                    @csrf @method('DELETE')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- Modal Create (di luar table dan foreach) -->
<div class="modal fade" id="createModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form method="POST" action="{{ route('blogs.store') }}" enctype="multipart/form-data" class="modal-content">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title">Tambah Blog</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                @include('blogs.form', ['blog' => null])
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>

<!-- Modal Edit (diletakkan setelah tabel) -->
@foreach($blogs as $blog)
<div class="modal fade" id="editModal{{ $blog->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form method="POST" action="{{ route('blogs.update', $blog) }}" enctype="multipart/form-data" class="modal-content">
            @csrf @method('PUT')
            <div class="modal-header">
                <h5 class="modal-title">Edit Blog</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                @include('blogs.form', ['blog' => $blog])
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

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('editModal');
    modal.addEventListener('show.bs.modal', function (event) {
        const button = event.relatedTarget;
        const id = button.getAttribute('data-id');
        const title = button.getAttribute('data-title');
        const content = button.getAttribute('data-content');
        const image = button.getAttribute('data-image');

        modal.querySelector('form').action = `/blogs/${id}`;
        modal.querySelector('input[name="title"]').value = title;
        modal.querySelector('textarea[name="content"]').value = content;

        // Set image preview (optional)
        if (image) {
            modal.querySelector('#edit-image-preview').src = image;
        }
    });
});
</script>
@endpush
