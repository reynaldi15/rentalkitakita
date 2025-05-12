<div class="mb-3">
    <label>Kategori</label>
    <select name="category_id" class="form-control @error('category_id') is-invalid @enderror">
        <option value="">-- Pilih Kategori --</option>
        @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ old('category_id', $travel->category_id ?? '') == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>
    @error('category_id')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<!-- <div class="mb-3">
    <label>Keberangkatan</label>
    <input type="text" name="departure" class="form-control @error('departure') is-invalid @enderror"
           value="{{ old('departure', $travel->departure ?? '') }}">
    @error('departure')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div> -->

<div class="mb-3">
    <label>Tujuan</label>
    <input type="text" name="destination" class="form-control @error('destination') is-invalid @enderror"
           value="{{ old('destination', $travel->destination ?? '') }}">
    @error('destination')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label>Harga</label>
    <input type="number" name="price" class="form-control @error('price') is-invalid @enderror"
           value="{{ old('price', $travel->price ?? '') }}">
    @error('price')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label>Fitur (maksimal 4 fitur)</label>
    @php
        $features = old('features', $travel->features ?? []);
    @endphp
    @for ($i = 0; $i < 4; $i++)
        <input type="text" name="features[]" class="form-control mb-2 @error("features.$i") is-invalid @enderror"
               value="{{ $features[$i] ?? '' }}" placeholder="Contoh: AC, Reclining Seat, dll">
        @error("features.$i")
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    @endfor
</div>

<div class="mb-3">
    <label>Nomor WhatsApp</label>
    <input type="text" name="waLink" class="form-control @error('waLink') is-invalid @enderror"
           value="{{ old('waLink', $travel->waLink ?? '') }}">
    @error('waLink')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label>Gambar</label>
    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
    @error('image')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror

    @if(isset($travel) && $travel->image)
        <img src="{{ asset('storage/' . $travel->image) }}" width="100" class="mt-2">
    @endif
</div>
