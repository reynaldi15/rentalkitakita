@extends('fragment.admin')

@section('content')
<h2>Daftar Blog</h2>
<a href="{{ route('blogs.create') }}" class="btn btn-primary">+ Tambah Blog</a>
<table class="table mt-3">
    <thead>
        <tr><th>Judul</th><th>Gambar</th><th>Aksi</th></tr>
    </thead>
    <tbody>
        @foreach($blogs as $blog)
        <tr>
            <td>{{ $blog->title }}</td>
            <td>
                @if($blog->image)
                <img src="{{ asset('storage/' . $blog->image) }}" width="100">
                @endif
            </td>
            <td>
                <a href="{{ route('blogs.edit', $blog) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('blogs.destroy', $blog) }}" method="POST" style="display:inline-block;">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus blog ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
