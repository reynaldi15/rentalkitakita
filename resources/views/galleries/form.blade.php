<div class="mb-3">
    <label>Judul</label>
    <input type="text" name="title" class="form-control"
           value="{{ old('title', isset($gallery) ? $gallery->title : '') }}">
</div>

<div class="mb-3">
    <label>Gambar</label>
    <input type="file" name="image" class="form-control">
    @if(isset($gallery) && $gallery->image)
        <img src="{{ asset('storage/' . $gallery->image) }}" class="mt-2" width="100">
    @endif
</div>
