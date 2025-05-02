<div class="mb-3">
    <label>Nama Mobil</label>
    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
           value="{{ old('name', $car->name ?? '') }}">
    @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label>Harga</label>
    <input type="number" name="price" class="form-control @error('price') is-invalid @enderror"
           value="{{ old('price', $car->price ?? '') }}">
    @error('price')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label>Tipe</label>
    <select name="type" class="form-control @error('type') is-invalid @enderror">
        <option value="">-- Pilih Tipe --</option>
        <option value="kecil" {{ old('type', $car->type ?? '') == 'kecil' ? 'selected' : '' }}>Kecil</option>
        <option value="besar" {{ old('type', $car->type ?? '') == 'besar' ? 'selected' : '' }}>Besar</option>
    </select>
    @error('type')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label>Fitur (maksimal 4 fitur)</label>
    @php
        $features = old('features', $car->features ?? []);
    @endphp
    @for ($i = 0; $i < 4; $i++)
        <input type="text" name="features[]" class="form-control mb-2 @error("features.$i") is-invalid @enderror"
               value="{{ $features[$i] ?? '' }}" placeholder="Contoh: AC, Charger USB, dll">
        @error("features.$i")
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    @endfor
</div>

<div class="mb-3">
    <label>Gambar</label>
    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
    @error('image')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror

    @if(isset($car) && $car->image)
        <img src="{{ asset('storage/' . $car->image) }}" width="100" class="mt-2">
    @endif
</div>
