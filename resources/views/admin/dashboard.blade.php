<x-admin-layout>
    <x-slot:title>
        Overview Dashboard
    </x-slot:title>

    <!-- Stats Widgets -->
    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-info">
                <h3>Total Tour Packages</h3>
                <p>{{ $totalTours }}</p>
            </div>
            <div class="stat-icon primary">
                <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/></svg>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-info">
                <h3>Airport Transfers</h3>
                <p>{{ $totalTransfers }}</p>
            </div>
            <div class="stat-icon primary" style="background-color: rgba(99, 110, 114, 0.1); color: var(--text-muted);">
                <svg viewBox="0 0 24 24" style="fill:none; stroke:currentColor; stroke-width:2; stroke-linecap:round; stroke-linejoin:round;"><path d="M21 16v-2l-8-5V3.5c0-.83-.67-1.5-1.5-1.5S10 2.67 10 3.5V9l-8 5v2l8-2.5V19l-2 1.5V22l3.5-1 3.5 1v-1.5L13 19v-5.5l8 2.5z"/></svg>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-info">
                <h3>Total Car Partners</h3>
                <p>{{ $totalPartners }}</p>
            </div>
            <div class="stat-icon success">
                <svg viewBox="0 0 24 24"><path d="M18.92 6.01C18.72 5.42 18.16 5 17.5 5h-11c-.66 0-1.21.42-1.42 1.01L3 12v8c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h12v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-8l-2.08-5.99zM6.5 16c-.83 0-1.5-.67-1.5-1.5S5.67 13 6.5 13s1.5.67 1.5 1.5S7.33 16 6.5 16zm11 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5z"/></svg>
            </div>
        </div>
    </div>

    <!-- Overview Grid -->
    <div class="dashboard-grid">
        <!-- Recent Tour Packages -->
        <div class="content-card">
            <div class="card-header">
                <div class="card-title">Recent Tour Packages</div>
                <a href="{{ route('admin.tours.index') }}" class="btn btn-secondary btn-sm">View All</a>
            </div>
            <div class="table-wrapper">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($recentTours as $tour)
                            <tr>
                                <td>
                                    <img src="{{ $tour->image_url }}" alt="{{ $tour->title }}" class="table-image">
                                </td>
                                <td>
                                    <strong>{{ $tour->title }}</strong>
                                    <div style="font-size: 0.8rem; color: var(--text-muted);">{{ $tour->location }}</div>
                                </td>
                                <td><span class="badge badge-info">{{ $tour->category }}</span></td>
                                <td>{{ $tour->price }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" style="text-align: center; color: var(--text-muted); padding: 2rem;">No tour packages found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Recent Car Partners -->
        <div class="content-card">
            <div class="card-header">
                <div class="card-title">Recent Car Partners</div>
                <a href="{{ route('admin.car-partners.index') }}" class="btn btn-secondary btn-sm">View All</a>
            </div>
            <div class="table-wrapper">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Car Model</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($recentPartners as $partner)
                            <tr>
                                <td>
                                    <strong>{{ $partner->name }}</strong>
                                    <div style="font-size: 0.8rem; color: var(--text-muted);">Rating: {{ $partner->rating }} ★</div>
                                </td>
                                <td>{{ $partner->car_type }}</td>
                                <td>
                                    @if($partner->is_available)
                                        <span class="badge badge-success">Available</span>
                                    @else
                                        <span class="badge badge-danger">Unavailable</span>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" style="text-align: center; color: var(--text-muted); padding: 2rem;">No car partners found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
