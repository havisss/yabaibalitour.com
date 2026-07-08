<x-layout>
    <x-slot:title>
        {{ __('Welcome to Bali Tour') }}
    </x-slot:title>

    <!-- HERO SECTION -->
    <section class="hero">
        <div class="hero-content">
            <h1 class="hero-title">{{ __('Discover the Magic of Bali') }}</h1>
            <p class="hero-subtitle">
                {{ __('Experience unforgettable adventures with our premium tour packages and private car services.') }}
            </p>
            <div class="hero-actions">
                <a href="/tours" class="btn btn-primary">{{ __('Explore Tours') }}</a>
                <a href="/contact" class="btn btn-glass">{{ __('Contact Us') }}</a>
            </div>
        </div>
    </section>

    <!-- FEATURES / WHY CHOOSE US SECTION -->
    <section class="section section-bg">
        <div class="container">
            <h2 class="section-title">{{ __('Why Choose Us') }}</h2>
            
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="feature-title">{{ __('Professional Guides') }}</h3>
                    <p class="text-muted">Experienced and friendly local guides to make your trip special.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
                        </svg>
                    </div>
                    <h3 class="feature-title">{{ __('Premium Transport') }}</h3>
                    <p class="text-muted">Comfortable and clean vehicles for your safe journey around Bali.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="feature-title">{{ __('Best Price Guarantee') }}</h3>
                    <p class="text-muted">Affordable packages without compromising on quality or experience.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- POPULAR DESTINATIONS (Phase 3) -->
    <section class="section section-bg-alt">
        <div class="container">
            <h2 class="section-title" style="display: none;">{{ __('Popular Destinations') }}</h2>
            
            <div class="filter-bar">
                <a href="/?category=all" class="filter-btn {{ request('category', 'all') === 'all' ? 'active' : '' }}">ALL</a>
                <a href="/?category=BALI FULL DAY TOUR" class="filter-btn {{ request('category') === 'BALI FULL DAY TOUR' ? 'active' : '' }}">BALI FULL DAY TOUR</a>
                <a href="/?category=BALI ACTIVITIES" class="filter-btn {{ request('category') === 'BALI ACTIVITIES' ? 'active' : '' }}">BALI ACTIVITIES</a>
                <a href="/?category=NUSA PENIDA TOUR" class="filter-btn {{ request('category') === 'NUSA PENIDA TOUR' ? 'active' : '' }}">NUSA PENIDA TOUR</a>
                <a href="/?category=PRIVATE CAR CHARTER" class="filter-btn {{ request('category') === 'PRIVATE CAR CHARTER' ? 'active' : '' }}">PRIVATE CAR CHARTER</a>
                <a href="/?category=AIRPORT TRANSFER" class="filter-btn {{ request('category') === 'AIRPORT TRANSFER' ? 'active' : '' }}">AIRPORT TRANSFER</a>
            </div>

            <div class="destination-grid">
                @foreach($tours as $tour)
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
                @endforeach
            </div>

            <!-- Custom Pagination Rendering for Vanilla CSS -->
            @if ($tours->hasPages())
                <div class="custom-pagination">
                    {{-- Previous Page Link --}}
                    @if ($tours->onFirstPage())
                        <span class="page-link disabled">&laquo; Previous</span>
                    @else
                        <a href="{{ $tours->previousPageUrl() }}" class="page-link">&laquo; Previous</a>
                    @endif

                    {{-- Next Page Link --}}
                    @if ($tours->hasMorePages())
                        <a href="{{ $tours->nextPageUrl() }}" class="page-link">Next &raquo;</a>
                    @else
                        <span class="page-link disabled">Next &raquo;</span>
                    @endif
                </div>
            @endif
        </div>
    </section>

    <!-- OUR SERVICES SECTION -->
    <section class="section section-bg">
        <div class="container">
            <h2 class="section-title">{{ __('Our Services') }}</h2>
            
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon-wrapper">
                        <!-- Airport icon -->
                        <svg viewBox="0 0 24 24"><path d="M21 16v-2l-8-5V3.5c0-.83-.67-1.5-1.5-1.5S10 2.67 10 3.5V9l-8 5v2l8-2.5V19l-2 1.5V22l3.5-1 3.5 1v-1.5L13 19v-5.5l8 2.5z"/></svg>
                    </div>
                    <h3 class="service-title">Airport Transfer</h3>
                    <p class="text-muted">Hassle-free airport pickup and drop-off services directly to your hotel or villa with professional drivers.</p>
                </div>

                <div class="service-card">
                    <div class="service-icon-wrapper">
                        <!-- Car icon -->
                        <svg viewBox="0 0 24 24"><path d="M18.92 6.01C18.72 5.42 18.16 5 17.5 5h-11c-.66 0-1.21.42-1.42 1.01L3 12v8c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h12v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-8l-2.08-5.99zM6.5 16c-.83 0-1.5-.67-1.5-1.5S5.67 13 6.5 13s1.5.67 1.5 1.5S7.33 16 6.5 16zm11 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM5 11l1.5-4.5h11L19 11H5z"/></svg>
                    </div>
                    <h3 class="service-title">Private Car Charter</h3>
                    <p class="text-muted">Explore Bali at your own pace with our comfortable private cars and experienced English-speaking drivers.</p>
                </div>

                <div class="service-card">
                    <div class="service-icon-wrapper">
                        <!-- Compass/Tour icon -->
                        <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z"/></svg>
                    </div>
                    <h3 class="service-title">Custom Tour Packages</h3>
                    <p class="text-muted">Tailor-made itineraries designed specifically for you, whether you want adventure, culture, or relaxation.</p>
                </div>
            </div>
        </div>
    </section>

</x-layout>
