<x-admin-layout>
    <x-slot:title>
        Edit Tour Package
    </x-slot:title>

    <div class="content-card">
        <form action="{{ route('admin.tours.update', $tour->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-grid">
                <div class="form-group">
                    <label for="title">Tour Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $tour->title) }}" required>
                    @error('title')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="category">Category</label>
                    <select name="category" id="category" class="form-control" required>
                        @foreach($categories as $cat)
                            <option value="{{ $cat }}" {{ old('category', $tour->category) === $cat ? 'selected' : '' }}>{{ $cat }}</option>
                        @endforeach
                    </select>
                    @error('category')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" name="location" id="location" class="form-control" value="{{ old('location', $tour->location) }}" required>
                    @error('location')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="duration">Duration</label>
                    <input type="text" name="duration" id="duration" class="form-control" value="{{ old('duration', $tour->duration) }}" required>
                    @error('duration')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="price">Price Label</label>
                    <input type="text" name="price" id="price" class="form-control" value="{{ old('price', $tour->price) }}" required>
                    @error('price')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="image_url">Image URL</label>
                    <input type="url" name="image_url" id="image_url" class="form-control" value="{{ old('image_url', $tour->image_url) }}" required>
                    @error('image_url')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="tags_input">Tags (separated by comma)</label>
                    <input type="text" name="tags_input" id="tags_input" class="form-control" value="{{ old('tags_input', is_array($tour->tags) ? implode(', ', $tour->tags) : '') }}">
                    @error('tags_input')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="form-group" style="justify-content: center; display: flex; flex-direction: row; align-items: center; gap: 1rem;">
                    <label class="switch">
                        <input type="checkbox" name="is_popular" value="1" {{ old('is_popular', $tour->is_popular) ? 'checked' : '' }}>
                        <span class="slider"></span>
                    </label>
                    <span style="font-weight: 600; font-size: 0.9rem; color: #475569;">Mark as Popular Destination</span>
                </div>

                <div class="form-group full-width">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" class="form-control" rows="5" required>{{ old('description', $tour->description) }}</textarea>
                    @error('description')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
            </div>

            <div class="form-footer">
                <a href="{{ route('admin.tours.index') }}" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-primary">Update Tour Package</button>
            </div>
        </form>
    </div>
</x-admin-layout>
