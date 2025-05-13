<div class="mb-3">
    <label>Nama Produk</label>
    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
        value="{{ old('name', $product->name ?? '') }}">
    @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label>Deskripsi</label>
    <textarea name="description" class="form-control @error('description') is-invalid @enderror">{{ old('description', $product->description ?? '') }}</textarea>
    @error('description')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label>Harga / Hari</label>
    <input type="number" name="price_per_day" class="form-control @error('price_per_day') is-invalid @enderror"
        value="{{ old('price_per_day', $product->price_per_day ?? '') }}">
    @error('price_per_day')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label>Ketersediaan</label>
    <select name="availability" class="form-control @error('availability') is-invalid @enderror">
        <option value="1" {{ old('availability', $product->availability ?? 1) == 1 ? 'selected' : '' }}>Tersedia</option>
        <option value="0" {{ old('availability', $product->availability ?? 1) == 0 ? 'selected' : '' }}>Tidak Tersedia</option>
    </select>
    @error('availability')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label>Gambar</label>
    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
    @error('image')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
    @if(isset($product) && $product->image)
        <img src="{{ asset('storage/' . $product->image) }}" width="100" class="mt-2">
    @endif
</div>



<!-- <div class="mb-3">
    <label>Nama Produk</label>
    <input type="text" name="name" class="form-control"
           value="{{ old('name', isset($product) ? $product->name : '') }}">
</div>

<div class="mb-3">
    <label>Deskripsi</label>
    <textarea name="description" class="form-control">{{ old('description', isset($product) ? $product->description : '') }}</textarea>
</div>

<div class="mb-3">
    <label>Harga / Hari</label>
    <input type="number" name="price_per_day" class="form-control"
           value="{{ old('price_per_day', isset($product) ? $product->price_per_day : '') }}">
</div>

<div class="mb-3">
    <label>Ketersediaan</label>
    <select name="availability" class="form-control">
        <option value="1" {{ old('availability', isset($product) ? $product->availability : 1) == 1 ? 'selected' : '' }}>Tersedia</option>
        <option value="0" {{ old('availability', isset($product) ? $product->availability : 1) == 0 ? 'selected' : '' }}>Tidak Tersedia</option>
    </select>
</div>

<div class="mb-3">
    <label>Gambar</label>
    <input type="file" name="image" class="form-control">
    @if(isset($product) && $product->image)
        <img src="{{ asset('storage/' . $product->image) }}" width="100" class="mt-2">
    @endif
</div> -->
