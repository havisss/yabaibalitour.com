<x-admin-layout>
    <x-slot:title>
        Add Airport Transfer Package
    </x-slot:title>

    <div class="content-card">
        <form action="{{ route('admin.airport-transfers.store') }}" method="POST">
            @csrf

            <div class="form-grid">
                <div class="form-group">
                    <label for="title">Route Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" placeholder="e.g. Airport to Ubud Transfer" required>
                    @error('title')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="location">Destination Location</label>
                    <input type="text" name="location" id="location" class="form-control" value="{{ old('location') }}" placeholder="e.g. Ubud" required>
                    @error('location')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="duration">Est. Duration</label>
                    <input type="text" name="duration" id="duration" class="form-control" value="{{ old('duration') }}" placeholder="e.g. 1 Hour" required>
                    @error('duration')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="price">Price Label</label>
                    <input type="text" name="price" id="price" class="form-control" value="{{ old('price') }}" placeholder="e.g. IDR 300K/Car" required>
                    @error('price')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="image_url">Image URL</label>
                    <input type="url" name="image_url" id="image_url" class="form-control" value="{{ old('image_url') }}" placeholder="https://images.unsplash.com/photo-..." required>
                    @error('image_url')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="tags_input">Tags (separated by comma)</label>
                    <input type="text" name="tags_input" id="tags_input" class="form-control" value="{{ old('tags_input', 'Private Car, Driver Included, Toll & Parking') }}" placeholder="e.g. Private Car, Meet & Greet">
                    @error('tags_input')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="form-group" style="justify-content: center; display: flex; flex-direction: row; align-items: center; gap: 1rem;">
                    <label class="switch">
                        <input type="checkbox" name="is_popular" value="1" {{ old('is_popular') ? 'checked' : '' }}>
                        <span class="slider"></span>
                    </label>
                    <span style="font-weight: 600; font-size: 0.9rem; color: #475569;">Mark as Popular Destination</span>
                </div>

                <div class="form-group full-width">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" class="form-control" rows="4" placeholder="Detailed description of the transfer route..." required>{{ old('description', 'Comfortable private car transfer with English-speaking driver. All-inclusive rate including fuel, parking fees, and highway tolls.') }}</textarea>
                    @error('description')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
            </div>

            <div class="form-footer">
                <a href="{{ route('admin.airport-transfers.index') }}" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-primary">Save Transfer Package</button>
            </div>
        </form>
    </div>
</x-admin-layout>
