<input type="text" name="name" id="create-name" class="form-control"
    value="{{ old('name', isset($product) ? $product->name : '') }}">

<textarea name="description" id="create-description" class="form-control">{{ old('description', isset($product) ? $product->description : '') }}</textarea>

<input type="number" name="price_per_day" id="create-price" class="form-control"
    value="{{ old('price_per_day', isset($product) ? $product->price_per_day : '') }}">

<select name="availability" id="create-availability" class="form-control">
    <option value="1" {{ old('availability', isset($product) ? $product->availability : 1) == 1 ? 'selected' : '' }}>Tersedia</option>
    <option value="0" {{ old('availability', isset($product) ? $product->availability : 1) == 0 ? 'selected' : '' }}>Tidak Tersedia</option>
</select>

<input type="file" name="image" id="create-image" class="form-control">
