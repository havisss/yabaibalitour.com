<x-admin-layout>
    <x-slot:title>
        Add Car Partner
    </x-slot:title>

    <div class="content-card">
        <form action="{{ route('admin.car-partners.store') }}" method="POST">
            @csrf

            <div class="form-grid">
                <div class="form-group">
                    <label for="name">Driver/Partner Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" placeholder="e.g. Wayan Sudirta" required>
                    @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="car_type">Car Model/Type</label>
                    <input type="text" name="car_type" id="car_type" class="form-control" value="{{ old('car_type') }}" placeholder="e.g. Toyota Avanza" required>
                    @error('car_type')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="capacity">Passenger Capacity</label>
                    <input type="number" name="capacity" id="capacity" class="form-control" value="{{ old('capacity', 6) }}" placeholder="e.g. 6" required>
                    @error('capacity')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="price">Price Label</label>
                    <input type="text" name="price" id="price" class="form-control" value="{{ old('price') }}" placeholder="e.g. IDR 550K / 10 Hours" required>
                    @error('price')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="phone_number">Phone Number (WhatsApp, e.g. +628123456789)</label>
                    <input type="text" name="phone_number" id="phone_number" class="form-control" value="{{ old('phone_number') }}" placeholder="e.g. +628123456789" required>
                    @error('phone_number')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="image_url">Image URL</label>
                    <input type="url" name="image_url" id="image_url" class="form-control" value="{{ old('image_url') }}" placeholder="https://images.unsplash.com/photo-..." required>
                    @error('image_url')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="rating">Rating (1.0 - 5.0)</label>
                    <input type="number" step="0.1" name="rating" id="rating" class="form-control" value="{{ old('rating', '4.8') }}" placeholder="e.g. 4.8" required>
                    @error('rating')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="form-group" style="justify-content: center; display: flex; flex-direction: row; align-items: center; gap: 1rem;">
                    <label class="switch">
                        <input type="checkbox" name="is_available" value="1" {{ old('is_available', '1') ? 'checked' : '' }}>
                        <span class="slider"></span>
                    </label>
                    <span style="font-weight: 600; font-size: 0.9rem; color: #475569;">Mark as Available</span>
                </div>

                <div class="form-group full-width">
                    <label for="description">Services Included & Description</label>
                    <textarea name="description" id="description" class="form-control" rows="4" placeholder="e.g. Driver, petrol, parking fees included. Comfort MPV, AC." required>{{ old('description') }}</textarea>
                    @error('description')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
            </div>

            <div class="form-footer">
                <a href="{{ route('admin.car-partners.index') }}" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-primary">Save Car Partner</button>
            </div>
        </form>
    </div>
</x-admin-layout>
