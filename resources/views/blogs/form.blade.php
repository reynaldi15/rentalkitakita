<div class="mb-3">
    <label>Judul</label>
    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
        value="{{ old('title', $blog->title ?? '') }}">
    @error('title')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label>Isi Konten</label>
    <textarea name="content" class="form-control @error('content') is-invalid @enderror">{{ old('content', $blog->content ?? '') }}</textarea>
    @error('content')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label>Gambar</label>
    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
    @error('image')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror

    @if(isset($blog) && $blog->image)
        <img src="{{ asset('storage/' . $blog->image) }}" width="100" class="mt-2">
    @endif
</div>
