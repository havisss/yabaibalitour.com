<x-admin-layout>
    <x-slot:title>
        Edit Airport Transfer Package
    </x-slot:title>

    <div class="content-card">
        <form action="{{ route('admin.airport-transfers.update', $airportTransfer->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-grid">
                <div class="form-group">
                    <label for="title">Route Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $airportTransfer->title) }}" required>
                    @error('title')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="location">Destination Location</label>
                    <input type="text" name="location" id="location" class="form-control" value="{{ old('location', $airportTransfer->location) }}" required>
                    @error('location')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="duration">Est. Duration</label>
                    <input type="text" name="duration" id="duration" class="form-control" value="{{ old('duration', $airportTransfer->duration) }}" required>
                    @error('duration')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="price">Price Label</label>
                    <input type="text" name="price" id="price" class="form-control" value="{{ old('price', $airportTransfer->price) }}" required>
                    @error('price')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="image_url">Image URL</label>
                    <input type="url" name="image_url" id="image_url" class="form-control" value="{{ old('image_url', $airportTransfer->image_url) }}" required>
                    @error('image_url')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="tags_input">Tags (separated by comma)</label>
                    <input type="text" name="tags_input" id="tags_input" class="form-control" value="{{ old('tags_input', is_array($airportTransfer->tags) ? implode(', ', $airportTransfer->tags) : '') }}">
                    @error('tags_input')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="form-group" style="justify-content: center; display: flex; flex-direction: row; align-items: center; gap: 1rem;">
                    <label class="switch">
                        <input type="checkbox" name="is_popular" value="1" {{ old('is_popular', $airportTransfer->is_popular) ? 'checked' : '' }}>
                        <span class="slider"></span>
                    </label>
                    <span style="font-weight: 600; font-size: 0.9rem; color: #475569;">Mark as Popular Destination</span>
                </div>

                <div class="form-group full-width">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" class="form-control" rows="4" required>{{ old('description', $airportTransfer->description) }}</textarea>
                    @error('description')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
            </div>

            <div class="form-footer">
                <a href="{{ route('admin.airport-transfers.index') }}" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-primary">Update Transfer Package</button>
            </div>
        </form>
    </div>
</x-admin-layout>
