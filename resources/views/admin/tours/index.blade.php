<x-admin-layout>
    <x-slot:title>
        Manage Tour Packages
    </x-slot:title>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
            <button onclick="this.parentElement.remove()" style="background:none; border:none; color:inherit; font-size:1.2rem; cursor:pointer;">&times;</button>
        </div>
    @endif

    <div class="content-card">
        <div class="card-header">
            <form action="{{ route('admin.tours.index') }}" method="GET" class="filter-bar">
                <input type="text" name="search" value="{{ $search }}" placeholder="Search tours..." class="search-input">
                <select name="category" onchange="this.form.submit()" class="select-input">
                    <option value="all">All Categories</option>
                    @foreach($categories as $cat)
                        <option value="{{ $cat }}" {{ $category === $cat ? 'selected' : '' }}>{{ $cat }}</option>
                    @endforeach
                </select>
                @if($search || $category !== 'all')
                    <a href="{{ route('admin.tours.index') }}" class="btn btn-secondary">Clear</a>
                @endif
            </form>
            <a href="{{ route('admin.tours.create') }}" class="btn btn-primary">
                <svg viewBox="0 0 24 24" style="width:16px; height:16px; fill:currentColor;"><path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/></svg>
                Add Tour Package
            </a>
        </div>

        <div class="table-wrapper">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Duration</th>
                        <th>Price</th>
                        <th>Popular</th>
                        <th>Tags</th>
                        <th style="width: 150px; text-align: center;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($tours as $tour)
                        <tr>
                            <td>
                                <img src="{{ $tour->image_url }}" alt="{{ $tour->title }}" class="table-image">
                            </td>
                            <td>
                                <strong>{{ $tour->title }}</strong>
                                <div style="font-size: 0.8rem; color: var(--text-muted);">{{ $tour->location }}</div>
                            </td>
                            <td><span class="badge badge-info">{{ $tour->category }}</span></td>
                            <td>{{ $tour->duration }}</td>
                            <td>{{ $tour->price }}</td>
                            <td>
                                @if($tour->is_popular)
                                    <span class="badge badge-success">Yes</span>
                                @else
                                    <span class="badge badge-secondary">No</span>
                                @endif
                            </td>
                            <td>
                                <div class="tag-list">
                                    @if(is_array($tour->tags))
                                        @foreach($tour->tags as $tag)
                                            <span class="tag-badge">{{ $tag }}</span>
                                        @endforeach
                                    @endif
                                </div>
                            </td>
                            <td>
                                <div style="display:flex; gap:0.5rem; justify-content:center;">
                                    <a href="{{ route('admin.tours.edit', $tour->id) }}" class="btn btn-secondary btn-sm">Edit</a>
                                    <form action="{{ route('admin.tours.destroy', $tour->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this tour package?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" style="text-align: center; color: var(--text-muted); padding: 3rem;">No tour packages found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($tours->hasPages())
            <div class="pagination-container">
                {{ $tours->links('components.pagination') }}
            </div>
        @endif
    </div>
</x-admin-layout>
