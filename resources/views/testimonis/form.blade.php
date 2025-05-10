<div class="mb-3">
    <label>Judul</label>
    <input type="text" name="title" class="form-control"
           value="{{ old('title', isset($testimoni) ? $testimoni->title : '') }}">
</div>

<div class="mb-3">
    <label>Testimoni</label>
    <input type="file" name="image" class="form-control">
    @if(isset($testimoni) && $testimoni->image)
        <img src="{{ asset('storage/' . $testimoni->image) }}" class="mt-2" width="100">
    @endif
</div>
