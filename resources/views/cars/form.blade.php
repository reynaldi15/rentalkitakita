<div class="mb-3">
    <label for="name">Nama Mobil</label>
    <input type="text" name="name" id="name" class="form-control" 
        value="{{ old('name', isset($car) ? $car->name : '') }}">
</div>

<div class="mb-3">
    <label for="price">Harga</label>
    <input type="number" name="price" id="price" class="form-control" 
        value="{{ old('price', isset($car) ? $car->price : '') }}">
</div>

<div class="mb-3">
    <label for="type">Jenis Mobil</label>
    <select name="type" id="type" class="form-control">
        <option value="suv" {{ old('type', isset($car) ? $car->type : '') == 'suv' ? 'selected' : '' }}>SUV</option>
        <option value="sedan" {{ old('type', isset($car) ? $car->type : '') == 'sedan' ? 'selected' : '' }}>Sedan</option>
        <option value="mpv" {{ old('type', isset($car) ? $car->type : '') == 'mpv' ? 'selected' : '' }}>MPV</option>
    </select>
</div>

<div class="mb-3">
    <label for="image">Gambar Mobil</label>
    <input type="file" name="image" id="image" class="form-control">
    @if(isset($car) && $car->image)
        <img src="{{ asset('storage/' . $car->image) }}" class="mt-2" width="100">
    @endif
</div>

