@csrf

<div>
    <label for="name">Назва страви:</label><br>
    <input type="text" id="name" name="name" value="{{ old('name', $dish->name ?? '') }}" maxlength="100" required>
    @error('name')
    <div style="color: red;">{{ $message }}</div>
    @enderror
</div>

<div>
    <label for="category">Категорія:</label><br>
    <input type="text" id="category" name="category" value="{{ old('category', $dish->category ?? '') }}" maxlength="50" required>
    @error('category')
    <div style="color: red;">{{ $message }}</div>
    @enderror
</div>

<div>
    <label for="price">Ціна (грн):</label><br>
    <input type="number" step="0.01" id="price" name="price" value="{{ old('price', $dish->price ?? '') }}" min="0" required>
    @error('price')
    <div style="color: red;">{{ $message }}</div>
    @enderror
</div>

<div>
    <label for="description">Опис:</label><br>
    <textarea id="description" name="description" rows="4">{{ old('description', $dish->description ?? '') }}</textarea>
    @error('description')
    <div style="color: red;">{{ $message }}</div>
    @enderror
</div>

<br>
<button type="submit">Зберегти</button>
