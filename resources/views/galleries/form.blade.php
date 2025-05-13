@if(isset($gallery))
    <input type="hidden" name="id" value="{{ $gallery->id }}">
@endif

<div class="mb-3">
    <label for="title">Judul</label>
    <input type="text" name="title" id="title"
        class="form-control @error('title') is-invalid @enderror"
        value="{{ old('title', isset($gallery) ? $gallery->title : '') }}">
    @error('title')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="image">Gambar</label>
    <input type="file" name="image" id="image"
        class="form-control @error('image') is-invalid @enderror">
    
    @if(isset($gallery) && $gallery->image)
        <img src="{{ asset('storage/' . $gallery->image) }}" class="mt-2" width="100">
    @endif

    @error('image')
        <div class="invalid-feedback d-block">{{ $message }}</div>
    @enderror
</div>