<x-admin-layout>
    <x-slot:title>
        Manage Car Partners
    </x-slot:title>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
            <button onclick="this.parentElement.remove()" style="background:none; border:none; color:inherit; font-size:1.2rem; cursor:pointer;">&times;</button>
        </div>
    @endif

    <div class="content-card">
        <div class="card-header">
            <form action="{{ route('admin.car-partners.index') }}" method="GET" class="filter-bar">
                <input type="text" name="search" value="{{ $search }}" placeholder="Search partners..." class="search-input">
                @if($search)
                    <a href="{{ route('admin.car-partners.index') }}" class="btn btn-secondary">Clear</a>
                @endif
            </form>
            <a href="{{ route('admin.car-partners.create') }}" class="btn btn-primary">
                <svg viewBox="0 0 24 24" style="width:16px; height:16px; fill:currentColor;"><path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/></svg>
                Add Car Partner
            </a>
        </div>

        <div class="table-wrapper">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Car Model</th>
                        <th>Capacity</th>
                        <th>Price Label</th>
                        <th>Phone/WA</th>
                        <th>Rating</th>
                        <th>Available</th>
                        <th style="width: 150px; text-align: center;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($partners as $partner)
                        <tr>
                            <td>
                                @if($partner->image_url)
                                    <img src="{{ $partner->image_url }}" alt="{{ $partner->name }}" class="table-image">
                                @else
                                    <div style="width:50px; height:50px; border-radius:8px; background-color:#e2e8f0; display:flex; align-items:center; justify-content:center; color:#64748b; font-weight:700;">
                                        {{ substr($partner->name, 0, 2) }}
                                    </div>
                                @endif
                            </td>
                            <td>
                                <strong>{{ $partner->name }}</strong>
                            </td>
                            <td>{{ $partner->car_type }}</td>
                            <td>{{ $partner->capacity }} Seats</td>
                            <td>{{ $partner->price }}</td>
                            <td>
                                <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $partner->phone_number) }}" target="_blank" style="color:var(--success); font-weight:600; text-decoration:underline;">
                                    {{ $partner->phone_number }}
                                </a>
                            </td>
                            <td><strong style="color:var(--warning);">{{ number_format($partner->rating, 1) }} ★</strong></td>
                            <td>
                                @if($partner->is_available)
                                    <span class="badge badge-success">Yes</span>
                                @else
                                    <span class="badge badge-danger">No</span>
                                @endif
                            </td>
                            <td>
                                <div style="display:flex; gap:0.5rem; justify-content:center;">
                                    <a href="{{ route('admin.car-partners.edit', $partner->id) }}" class="btn btn-secondary btn-sm">Edit</a>
                                    <form action="{{ route('admin.car-partners.destroy', $partner->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this car partner?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9" style="text-align: center; color: var(--text-muted); padding: 3rem;">No car partners found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($partners->hasPages())
            <div class="pagination-container">
                {{ $partners->links('components.pagination') }}
            </div>
        @endif
    </div>
</x-admin-layout>
