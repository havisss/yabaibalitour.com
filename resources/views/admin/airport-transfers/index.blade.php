<x-admin-layout>
    <x-slot:title>
        Manage Airport Transfers
    </x-slot:title>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
            <button onclick="this.parentElement.remove()" style="background:none; border:none; color:inherit; font-size:1.2rem; cursor:pointer;">&times;</button>
        </div>
    @endif

    <div class="content-card">
        <div class="card-header">
            <form action="{{ route('admin.airport-transfers.index') }}" method="GET" class="filter-bar">
                <input type="text" name="search" value="{{ $search }}" placeholder="Search routes..." class="search-input">
                @if($search)
                    <a href="{{ route('admin.airport-transfers.index') }}" class="btn btn-secondary">Clear</a>
                @endif
            </form>
            <a href="{{ route('admin.airport-transfers.create') }}" class="btn btn-primary">
                <svg viewBox="0 0 24 24" style="width:16px; height:16px; fill:currentColor;"><path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/></svg>
                Add Transfer Route
            </a>
        </div>

        <div class="table-wrapper">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Route Title</th>
                        <th>Destination Location</th>
                        <th>Est. Duration</th>
                        <th>Price Label</th>
                        <th>Popular</th>
                        <th>Tags</th>
                        <th style="width: 150px; text-align: center;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($transfers as $transfer)
                        <tr>
                            <td>
                                <img src="{{ $transfer->image_url }}" alt="{{ $transfer->title }}" class="table-image">
                            </td>
                            <td>
                                <strong>{{ $transfer->title }}</strong>
                            </td>
                            <td><span class="badge badge-info">{{ $transfer->location }}</span></td>
                            <td>{{ $transfer->duration }}</td>
                            <td>{{ $transfer->price }}</td>
                            <td>
                                @if($transfer->is_popular)
                                    <span class="badge badge-success">Yes</span>
                                @else
                                    <span class="badge badge-secondary">No</span>
                                @endif
                            </td>
                            <td>
                                <div class="tag-list">
                                    @if(is_array($transfer->tags))
                                        @foreach($transfer->tags as $tag)
                                            <span class="tag-badge">{{ $tag }}</span>
                                        @endforeach
                                    @endif
                                </div>
                            </td>
                            <td>
                                <div style="display:flex; gap:0.5rem; justify-content:center;">
                                    <a href="{{ route('admin.airport-transfers.edit', $transfer->id) }}" class="btn btn-secondary btn-sm">Edit</a>
                                    <form action="{{ route('admin.airport-transfers.destroy', $transfer->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this airport transfer package?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" style="text-align: center; color: var(--text-muted); padding: 3rem;">No airport transfer routes found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($transfers->hasPages())
            <div class="pagination-container">
                {{ $transfers->links('components.pagination') }}
            </div>
        @endif
    </div>
</x-admin-layout>
