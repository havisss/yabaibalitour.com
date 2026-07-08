<x-admin-layout>
    <x-slot:title>
        Edit Car Partner
    </x-slot:title>

    <div class="content-card">
        <form action="{{ route('admin.car-partners.update', $carPartner->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-grid">
                <div class="form-group">
                    <label for="name">Driver/Partner Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $carPartner->name) }}" required>
                    @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="car_type">Car Model/Type</label>
                    <input type="text" name="car_type" id="car_type" class="form-control" value="{{ old('car_type', $carPartner->car_type) }}" required>
                    @error('car_type')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="capacity">Passenger Capacity</label>
                    <input type="number" name="capacity" id="capacity" class="form-control" value="{{ old('capacity', $carPartner->capacity) }}" required>
                    @error('capacity')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="price">Price Label</label>
                    <input type="text" name="price" id="price" class="form-control" value="{{ old('price', $carPartner->price) }}" required>
                    @error('price')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="phone_number">Phone Number (WhatsApp)</label>
                    <input type="text" name="phone_number" id="phone_number" class="form-control" value="{{ old('phone_number', $carPartner->phone_number) }}" required>
                    @error('phone_number')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="image_url">Image URL</label>
                    <input type="url" name="image_url" id="image_url" class="form-control" value="{{ old('image_url', $carPartner->image_url) }}" required>
                    @error('image_url')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="form-group">
                    <label for="rating">Rating (1.0 - 5.0)</label>
                    <input type="number" step="0.1" name="rating" id="rating" class="form-control" value="{{ old('rating', $carPartner->rating) }}" required>
                    @error('rating')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="form-group" style="justify-content: center; display: flex; flex-direction: row; align-items: center; gap: 1rem;">
                    <label class="switch">
                        <input type="checkbox" name="is_available" value="1" {{ old('is_available', $carPartner->is_available) ? 'checked' : '' }}>
                        <span class="slider"></span>
                    </label>
                    <span style="font-weight: 600; font-size: 0.9rem; color: #475569;">Mark as Available</span>
                </div>

                <div class="form-group full-width">
                    <label for="description">Services Included & Description</label>
                    <textarea name="description" id="description" class="form-control" rows="4" required>{{ old('description', $carPartner->description) }}</textarea>
                    @error('description')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
            </div>

            <div class="form-footer">
                <a href="{{ route('admin.car-partners.index') }}" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-primary">Update Car Partner</button>
            </div>
        </form>
    </div>
</x-admin-layout>
