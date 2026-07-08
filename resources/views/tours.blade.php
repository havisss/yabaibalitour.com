<x-layout>
    <x-slot:title>
        {{ __('Tour Packages') }}
    </x-slot:title>

    <!-- Hero Header -->
    <section class="section section-dark" style="min-height: 100vh; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; position: relative; overflow: hidden;">
        
        <!-- Soft Glowing Background Blobs (Visible on all sizes) -->
        <div style="position: absolute; top: 10%; left: 5%; width: 300px; height: 300px; background: rgba(20, 184, 166, 0.2); border-radius: 50%; filter: blur(80px); z-index: 1; animation: float 10s ease-in-out infinite;"></div>
        <div style="position: absolute; bottom: 20%; right: 10%; width: 400px; height: 400px; background: rgba(59, 130, 246, 0.15); border-radius: 50%; filter: blur(100px); z-index: 1; animation: float 12s ease-in-out infinite reverse;"></div>

        <!-- Floating Decorations (Left) -->
        <div class="hidden lg:block absolute" style="left: calc(50% - 650px); top: 50%; margin-top: -140px; animation: float 6s ease-in-out infinite; z-index: 5;">
            <img src="{{ asset('images/tour_temple.png') }}" alt="Bali Temple" style="width: 220px; height: 280px; object-fit: cover; border-radius: 24px; box-shadow: 0 20px 40px rgba(0,0,0,0.4); border: 4px solid rgba(255,255,255,0.05); transform: rotate(-8deg);">
        </div>
        <div class="hidden lg:block absolute" style="left: calc(50% - 480px); bottom: 15%; animation: float 8s ease-in-out infinite; animation-delay: 2s; z-index: 4;">
            <img src="{{ asset('images/tour_beach.png') }}" alt="Bali Beach" style="width: 160px; height: 160px; object-fit: cover; border-radius: 50%; box-shadow: 0 15px 30px rgba(0,0,0,0.3); border: 3px solid rgba(255,255,255,0.05); transform: rotate(12deg);">
        </div>

        <!-- Floating Decorations (Right) -->
        <div class="hidden lg:block absolute" style="right: calc(50% - 680px); top: 50%; margin-top: -160px; animation: float 7s ease-in-out infinite; animation-delay: 1s; z-index: 5;">
            <img src="{{ asset('images/tour_terrace.png') }}" alt="Bali Rice Terrace" style="width: 250px; height: 320px; object-fit: cover; border-radius: 24px; box-shadow: 0 20px 40px rgba(0,0,0,0.4); border: 4px solid rgba(255,255,255,0.05); transform: rotate(6deg);">
        </div>
        <div class="hidden lg:block absolute" style="right: calc(50% - 450px); top: 15%; animation: float 9s ease-in-out infinite; animation-delay: 3s; z-index: 4;">
            <img src="{{ asset('images/tour_culture.png') }}" alt="Bali Culture" style="width: 140px; height: 140px; object-fit: cover; border-radius: 24px; box-shadow: 0 15px 30px rgba(0,0,0,0.3); border: 3px solid rgba(255,255,255,0.05); transform: rotate(-15deg);">
        </div>

        <div class="container" style="margin-top: -80px; position: relative; z-index: 10;">
            <h1 class="section-title" data-animate="fade-up" style="font-size: clamp(3rem, 5vw, 4.5rem); margin-bottom: 1.5rem; text-shadow: 0 10px 30px rgba(0,0,0,0.5); font-weight: 800; letter-spacing: -1px;">
                <span style="color: #fff;">{{ __('Bali Tour') }}</span>
                <span style="background: linear-gradient(135deg, var(--color-primary), #0ea5e9); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">{{ __('Packages') }}</span>
            </h1>
            <p class="section-desc" data-animate="fade-up" data-animate-delay="100" style="max-width: 800px; margin: 0 auto; font-size: 1.25rem; line-height: 1.8; text-shadow: 0 5px 15px rgba(0,0,0,0.5);">
                {{ __('Explore the breathtaking landscapes and rich culture of Bali through our carefully curated tour packages. From sacred temples and majestic waterfalls to thrilling activities and pristine beaches, we have the perfect itinerary for your dream vacation.') }}
            </p>
        </div>

        <!-- Scroll Down Indicator -->
        <div style="position: absolute; bottom: 80px; left: 50%; transform: translateX(-50%); z-index: 10;">
            <div data-animate="fade-up" data-animate-delay="300">
                <a href="#explore-tours" style="display: flex; flex-direction: column; align-items: center; color: var(--color-primary); text-decoration: none;">
                    <span style="font-size: 0.75rem; font-weight: 600; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 10px; color: var(--color-muted);">{{ __('Scroll Down') }}</span>
                    <div class="animate-bounce" style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); border-radius: 50%; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; backdrop-filter: blur(10px);">
                        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M12 5v14M19 12l-7 7-7-7"/></svg>
                    </div>
                </a>
            </div>
        </div>
        
        <!-- Shape Divider at the bottom of hero -->
        <div class="custom-shape-divider-bottom" style="position: absolute; bottom: 0; left: 0; width: 100%; overflow: hidden; line-height: 0; transform: rotate(180deg);">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" style="position: relative; display: block; width: calc(100% + 1.3px); height: 60px;">
                <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" style="fill: var(--color-section);"></path>
                <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".7" style="fill: var(--color-primary);"></path>
                <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" style="fill: var(--color-section);"></path>
            </svg>
        </div>
    </section>

    <!-- Tours Content -->
    <div class="page-wrapper" style="padding-top: 0;" id="explore-tours">
        <section class="section section-bg-alt" style="padding-top: 40px;">
            <div class="container">
                <div class="filter-bar" data-animate="fade-up" style="margin-top: -20px; position: relative; z-index: 10;">
                    <a href="/tours?category=all" class="filter-btn {{ request('category', 'all') === 'all' ? 'active' : '' }}">ALL</a>
                    <a href="/tours?category=BALI FULL DAY TOUR" class="filter-btn {{ request('category') === 'BALI FULL DAY TOUR' ? 'active' : '' }}">FULL DAY TOUR</a>
                    <a href="/tours?category=BALI ACTIVITIES" class="filter-btn {{ request('category') === 'BALI ACTIVITIES' ? 'active' : '' }}">ACTIVITIES</a>
                    <a href="/tours?category=NUSA PENIDA TOUR" class="filter-btn {{ request('category') === 'NUSA PENIDA TOUR' ? 'active' : '' }}">NUSA PENIDA</a>
                    <a href="/tours?category=PRIVATE CAR CHARTER" class="filter-btn {{ request('category') === 'PRIVATE CAR CHARTER' ? 'active' : '' }}">CAR CHARTER</a>
                    <a href="/tours?category=AIRPORT TRANSFER" class="filter-btn {{ request('category') === 'AIRPORT TRANSFER' ? 'active' : '' }}">AIRPORT TRANSFER</a>
                </div>

                <div class="destination-grid">
                    @forelse($tours as $tour)
                    <div data-animate="fade-up" data-animate-delay="{{ ($loop->index % 4) * 100 }}">
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
                    <div style="grid-column: 1 / -1; text-align: center; padding: 4rem;">
                        <p style="font-size: 1.2rem; color: var(--text-muted);">{{ __('No tours found in this category.') }}</p>
                    </div>
                    @endforelse
                </div>

                <!-- Pagination -->
                @if ($tours->hasPages())
                    <div class="custom-pagination">
                        @if ($tours->onFirstPage())
                            <span class="page-link disabled">&laquo; {{ __('Previous') }}</span>
                        @else
                            <a href="{{ $tours->previousPageUrl() }}" class="page-link">&laquo; {{ __('Previous') }}</a>
                        @endif

                        @if ($tours->hasMorePages())
                            <a href="{{ $tours->nextPageUrl() }}" class="page-link">{{ __('Next') }} &raquo;</a>
                        @else
                            <span class="page-link disabled">{{ __('Next') }} &raquo;</span>
                        @endif
                    </div>
                @endif
            </div>
        </section>
    </div>
</x-layout>
