<x-layout>
    <x-slot:title>
        {{ __('Tour Packages') }}
    </x-slot:title>

    <div class="page-wrapper">
        <section class="section section-bg-alt">
            <div class="container" style="padding-top: 2rem;">
                <h1 class="section-title">{{ __('Our Tour Packages') }}</h1>
                
                <!-- Search & Filters -->
                <div style="margin-bottom: 2rem; display: flex; flex-direction: column; gap: 1.5rem; align-items: center;">
                    <form action="/tours" method="GET" style="display: flex; gap: 0.5rem; max-width: 500px; width: 100%;">
                        <input type="text" name="search" value="{{ request('search') }}" placeholder="{{ __('Search tours...') }}" 
                               style="flex: 1; padding: 0.75rem 1.25rem; border-radius: 50px; border: 1px solid var(--glass-border); outline: none; background: #fff; box-shadow: var(--shadow-sm); font-family: inherit;">
                        <button type="submit" class="btn btn-primary" style="border-radius: 50px; padding: 0.75rem 1.5rem; background: var(--primary); color:#fff; border:none; font-weight:600; cursor:pointer;">
                            {{ __('Search') }}
                        </button>
                    </form>

                    <div class="filter-bar" style="display: flex; justify-content: center; flex-wrap: wrap; gap: 0.5rem;">
                        <a href="/tours?category=all" class="filter-btn {{ request('category', 'all') === 'all' ? 'active' : '' }}">ALL</a>
                        <a href="/tours?category=BALI FULL DAY TOUR" class="filter-btn {{ request('category') === 'BALI FULL DAY TOUR' ? 'active' : '' }}">BALI FULL DAY TOUR</a>
                        <a href="/tours?category=BALI ACTIVITIES" class="filter-btn {{ request('category') === 'BALI ACTIVITIES' ? 'active' : '' }}">BALI ACTIVITIES</a>
                        <a href="/tours?category=NUSA PENIDA TOUR" class="filter-btn {{ request('category') === 'NUSA PENIDA TOUR' ? 'active' : '' }}">NUSA PENIDA TOUR</a>
                        <a href="/tours?category=PRIVATE CAR CHARTER" class="filter-btn {{ request('category') === 'PRIVATE CAR CHARTER' ? 'active' : '' }}">PRIVATE CAR CHARTER</a>
                        <a href="/tours?category=AIRPORT TRANSFER" class="filter-btn {{ request('category') === 'AIRPORT TRANSFER' ? 'active' : '' }}">AIRPORT TRANSFER</a>
                    </div>
                </div>

                <!-- Tours Grid -->
                <div class="destination-grid">
                    @forelse($tours as $tour)
                    <div class="tour-item">
                        <x-destination-card 
                            :id="$tour->id"
                            :image="$tour->image_url"
                            :location="$tour->location"
                            :title="$tour->title"
                            :description="$tour->description"
                            :duration="$tour->duration"
                            :price="$tour->price"
                            :tags="$tour->tags"
                        />
                    </div>
                    @empty
                    <div style="grid-column: 1/-1; text-align: center; padding: 4rem 2rem; background: #fff; border-radius: 16px; border: 1px solid var(--glass-border);">
                        <p style="font-size: 1.2rem; color: var(--text-muted);">
                            {{ __('No tour packages found matching your criteria.') }}
                        </p>
                        <a href="/tours" class="btn btn-primary" style="margin-top: 1rem; display: inline-block;">{{ __('Reset Filters') }}</a>
                    </div>
                    @endforelse
                </div>

                <!-- Custom Pagination Rendering -->
                @if ($tours->hasPages())
                    <div class="custom-pagination" style="display: flex; justify-content: center; gap: 0.5rem; margin-top: 3rem;">
                        @if ($tours->onFirstPage())
                            <span class="page-link disabled" style="opacity: 0.5; cursor: not-allowed; padding: 0.5rem 1rem; border: 1px solid var(--glass-border); border-radius: 8px;">&laquo; Previous</span>
                        @else
                            <a href="{{ $tours->previousPageUrl() }}" class="page-link" style="padding: 0.5rem 1rem; border: 1px solid var(--glass-border); border-radius: 8px; background:#fff;">&laquo; Previous</a>
                        @endif

                        @if ($tours->hasMorePages())
                            <a href="{{ $tours->nextPageUrl() }}" class="page-link" style="padding: 0.5rem 1rem; border: 1px solid var(--glass-border); border-radius: 8px; background:#fff;">Next &raquo;</a>
                        @else
                            <span class="page-link disabled" style="opacity: 0.5; cursor: not-allowed; padding: 0.5rem 1rem; border: 1px solid var(--glass-border); border-radius: 8px;">Next &raquo;</span>
                        @endif
                    </div>
                @endif
            </div>
        </section>
    </div>
</x-layout>
