<x-layout>
    <x-slot:title>
        {{ __('Welcome to Yabai Bali Trip') }}
    </x-slot:title>

    <!-- ═══════════════════════════════════════════════════
         HERO SECTION (100vh)
         ═══════════════════════════════════════════════════ -->
    <section class="hero">
        <!-- Decorative blobs -->
        <div class="hero-blob hero-blob-1"></div>
        <div class="hero-blob hero-blob-2"></div>

        <div class="hero-container">
            <!-- Left: Content -->
            <div data-animate="fade-right">

                <h1 class="hero-title">
                    {{ __('Stress Free Vacation') }}<br>
                    <span class="highlight">{{ __('Enjoy Your Trip!') }}</span>
                </h1>
                <p class="hero-subtitle">
                    {{ __('We’ve prepared everything you need. Let us handle the planning while you enjoy the beauty of Bali and Nusa Penida with comfort, flexibility, and trusted service.') }}
                </p>
                <div class="hero-actions">
                    <a href="/tours" class="btn btn-primary">{{ __('Explore Tours') }} →</a>
                    <a href="/contact" class="btn btn-outline">{{ __('Contact Us') }}</a>
                </div>
                <div class="hero-trust">
                    <div class="hero-trust-item">
                        <span class="icon"><svg width="18" height="18" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg></span> 4.9 Rating
                    </div>
                    <div class="hero-trust-item">
                        <span class="icon"><svg width="18" height="18" fill="currentColor" viewBox="0 0 20 20"><path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path></svg></span> 1000+ Travelers
                    </div>
                    <div class="hero-trust-item">
                        <span class="icon"><svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span> Local Expert
                    </div>
                </div>
            </div>

            <!-- Right: Image + Floating Cards -->
            <div class="hero-graphic" data-animate="fade-left" data-animate-delay="200">
                <img src="{{ asset('images/bali_welcome_hero.png') }}" alt="Beautiful Bali Tour" class="hero-image" style="object-fit: cover; border-radius: 24px;">
                
                <!-- Floating Cards -->
                <div class="floating-card card-rating">
                    <div class="floating-card-icon bg-amber"><svg width="20" height="20" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg></div>
                    <div>
                        <div class="floating-card-value">4.9</div>
                        <div class="floating-card-text">Guest Rating</div>
                    </div>
                </div>
                <div class="floating-card card-travelers">
                    <div class="floating-card-icon bg-teal"><svg width="20" height="20" fill="currentColor" viewBox="0 0 20 20"><path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path></svg></div>
                    <div>
                        <div class="floating-card-value">1,000+</div>
                        <div class="floating-card-text">Happy Travelers</div>
                    </div>
                </div>
                <div class="floating-card card-expert">
                    <div class="floating-card-icon bg-green"><svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></div>
                    <div>
                        <div class="floating-card-value">Trusted</div>
                        <div class="floating-card-text">Local Expert Guide</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════════════
         ABOUT US
         ═══════════════════════════════════════════════════ -->
    <section class="section">
        <div class="container about-container">
            <div class="about-graphic" data-animate="fade-right">
                <img src="{{ asset('images/bali_welcome_about.png') }}" alt="Authentic Bali Experience" class="about-image">
                <div class="about-badge">
                    <div class="about-badge-number">10+</div>
                    <div class="about-badge-text">Years of<br>Experience</div>
                </div>
            </div>
            
            <div class="about-content" data-animate="fade-left">

                <h2 class="section-title">{{ __('Discovering Authentic Bali Experiences') }}</h2>
                <p class="section-desc" style="text-align: left; max-width: 100%; margin-left: 0;">
                    {{ __('We are passionate about showcasing the true beauty of Bali. With years of experience, our local guides ensure you get an authentic, memorable, and stress-free journey across the Island of the Gods.') }}
                </p>
                
                <ul class="about-features">
                    <li>
                        <span class="about-feature-icon">✔</span>
                        <div>
                            <strong>{{ __('Experienced Local Guides') }}</strong>
                            <p>{{ __('Friendly and knowledgeable English-speaking drivers.') }}</p>
                        </div>
                    </li>
                    <li>
                        <span class="about-feature-icon">✔</span>
                        <div>
                            <strong>{{ __('Tailored Itineraries') }}</strong>
                            <p>{{ __('Customize your trip according to your preferences and pace.') }}</p>
                        </div>
                    </li>
                </ul>
                
                <a href="/about" class="btn btn-primary" style="margin-top: 24px;">{{ __('Learn More About Us') }} →</a>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════════════
         WHY CHOOSE US
         ═══════════════════════════════════════════════════ -->
    <section class="section section-dark">
        <div class="custom-shape-divider-top">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".7" class="shape-fill" style="fill: #14B8A6;"></path>
                <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
            </svg>
        </div>
        <div class="container">
            <div class="section-header" data-animate="fade-up">

                <h2 class="section-title">{{ __('Why Choose Yabai Bali Trip') }}</h2>
                <p class="section-desc">{{ __('We provide the best experience with professional service and local expertise to make your Bali trip unforgettable.') }}</p>
            </div>
            
            <div class="features-grid">
                <div class="feature-card" data-animate="fade-up" data-animate-delay="0">
                    <div class="feature-icon">
                        <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    </div>
                    <h3 class="feature-title">{{ __('Trusted Local Guides') }}</h3>
                    <p class="text-muted">{{ __('Experienced and certified local guides who know every hidden gem in Bali.') }}</p>
                </div>
                
                <div class="feature-card" data-animate="fade-up" data-animate-delay="100">
                    <div class="feature-icon">
                        <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h3 class="feature-title">{{ __('Best Price Guarantee') }}</h3>
                    <p class="text-muted">{{ __('Affordable packages without compromising on quality or experience.') }}</p>
                </div>

                <div class="feature-card" data-animate="fade-up" data-animate-delay="200">
                    <div class="feature-icon">
                        <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h3 class="feature-title">{{ __('Flexible Schedule') }}</h3>
                    <p class="text-muted">{{ __('Customize your itinerary and travel at your own pace with full flexibility.') }}</p>
                </div>

                <div class="feature-card" data-animate="fade-up" data-animate-delay="300">
                    <div class="feature-icon">
                        <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/></svg>
                    </div>
                    <h3 class="feature-title">{{ __('Premium Transport') }}</h3>
                    <p class="text-muted">{{ __('Comfortable and clean vehicles for your safe journey around Bali.') }}</p>
                </div>

            </div>
        </div>
        <div class="custom-shape-divider-bottom">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".7" class="shape-fill" style="fill: #14B8A6;"></path>
                <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
            </svg>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════════════
         POPULAR TOURS
         ═══════════════════════════════════════════════════ -->
    <section class="section section-bg-alt">
        <div class="container">
            <div class="section-header" data-animate="fade-up">

                <h2 class="section-title">{{ __('Explore Our Best Destinations') }}</h2>
                <p class="section-desc">{{ __('Discover the most popular tour packages curated by local experts for the ultimate Bali experience.') }}</p>
            </div>
            


            <div class="destination-grid">
                @foreach($tours as $tour)
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
                @endforeach
            </div>

            <!-- View All Button -->
            <div style="text-align: center; margin-top: 48px;" data-animate="fade-up">
                <a href="/tours" class="btn btn-primary" style="padding: 12px 32px; font-size: 1.1rem; box-shadow: 0 10px 20px rgba(20, 184, 166, 0.2);">
                    {{ __('View All Tours') }} &rarr;
                </a>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════════════
         PRIVATE CAR CHARTER
         ═══════════════════════════════════════════════════ -->
    <section class="section section-dark" style="overflow: hidden;">
        <div class="custom-shape-divider-top">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".7" class="shape-fill" style="fill: #14B8A6;"></path>
                <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
            </svg>
        </div>
        <div class="container">
            <div class="section-header" data-animate="fade-up">

                <h2 class="section-title">{{ __('Explore Bali In Comfort') }}</h2>
                <p class="section-desc">{{ __('Rent a private car with an English-speaking driver to explore Bali at your own pace. All prices include fuel and driver.') }}</p>
            </div>
            
            @php
            $cars = [
                ['name' => 'City Car', 'price' => '550.000', 'image' => 'https://bosmudabalitour.com/wp-content/uploads/2025/08/mobil-agya.jpg', 'seats' => '4 Seats'],
                ['name' => 'Toyota Avanza Old', 'price' => '650.000', 'image' => 'https://bosmudabalitour.com/wp-content/uploads/2025/08/Avanza-Old.png', 'seats' => '5-6 Seats'],
                ['name' => 'Suzuki APV', 'price' => '650.000', 'image' => 'https://bosmudabalitour.com/wp-content/uploads/2025/08/Suzuki-APV.jpg', 'seats' => '7 Seats'],
                ['name' => 'Toyota Avanza New', 'price' => '750.000', 'image' => 'https://bosmudabalitour.com/wp-content/uploads/2025/08/avanza-e1754656337145.png', 'seats' => '5-6 Seats'],
                ['name' => 'Mitsubishi Xpander', 'price' => '750.000', 'image' => 'https://bosmudabalitour.com/wp-content/uploads/2025/08/xpander-1024x683.png', 'seats' => '6 Seats'],
                ['name' => 'Innova Reborn', 'price' => '950.000', 'image' => 'https://bosmudabalitour.com/wp-content/uploads/2025/08/Innova-Rebornn.png', 'seats' => '7 Seats'],
                ['name' => 'Isuzu ELF', 'price' => '1.200.000', 'image' => 'https://bosmudabalitour.com/wp-content/uploads/2025/08/Isuzu-Elf.jpg', 'seats' => '14 Seats'],
                ['name' => 'Toyota Hiace', 'price' => '1.300.000', 'image' => 'https://bosmudabalitour.com/wp-content/uploads/2025/08/Toyota-Hiace-1024x576.png', 'seats' => '15 Seats'],
                ['name' => 'Innova Zenix', 'price' => '1.500.000', 'image' => 'https://bosmudabalitour.com/wp-content/uploads/2025/08/Innova-Zenix-e1754658229697.png', 'seats' => '7 Seats'],
                ['name' => 'VW Safari', 'price' => '1.600.000', 'image' => 'https://bosmudabalitour.com/wp-content/uploads/2025/08/Sewa-Mobil-Vw-Safari-Jogja-removebg-preview-1-e1754660301510.png', 'seats' => '3 Seats'],
                ['name' => 'Toyota Alphard', 'price' => '2.500.000', 'image' => 'https://bosmudabalitour.com/wp-content/uploads/2025/08/Toyota-Alphard-1024x683.webp', 'seats' => '6 Seats'],
            ];
            @endphp
            
            <div class="cars-slider-wrapper" style="position: relative; max-width: 1200px; margin: 0 auto;">
                <div class="swiper cars-swiper" data-animate="fade-up" data-animate-delay="100" style="padding-bottom: 30px;">
                    <div class="swiper-wrapper">
                        @foreach($cars as $car)
                        <div class="swiper-slide">
                            <div class="car-card">
                                <div style="height: 220px; display: flex; align-items: center; justify-content: center; overflow: hidden; background: #fff;">
                                    <img src="{{ $car['image'] }}" alt="{{ $car['name'] }}" style="width: 100%; height: 100%; object-fit: contain; padding: 10px;">
                                </div>
                                <div class="car-content">
                                    <h3 class="car-title" style="font-size: 1.3rem;">{{ $car['name'] }}</h3>
                                    <div class="car-specs">
                                        <span>{{ __($car['seats']) }}</span>
                                        <span>AC</span>
                                    </div>
                                    <div class="car-price">
                                        {{ __('IDR') }} <strong>{{ $car['price'] }}</strong> <span>/ {{ __('10 Hours') }}</span>
                                    </div>
                                    <a href="https://wa.me/6281234567890?text={{ urlencode('Hello Bos Muda Bali Tour, I am interested in booking a Private Car Charter ('.$car['name'].') for my trip.') }}" class="btn btn-outline" style="width: 100%; text-align: center;">{{ __('Book Now') }}</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- Custom Navigation placed BELOW the cards -->
                <div class="cars-nav-container">
                    <button class="car-nav-btn car-prev">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
                    </button>
                    <button class="car-nav-btn car-next">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </button>
                </div>
            </div>

            <script>
            document.addEventListener('DOMContentLoaded', function() {
                if(typeof Swiper !== 'undefined') {
                    new Swiper('.cars-swiper', {
                        slidesPerView: 1,
                        spaceBetween: 20,
                        loop: true,
                        centeredSlides: true,
                        navigation: {
                            nextEl: '.car-next',
                            prevEl: '.car-prev',
                        },
                        breakpoints: {
                            640: {
                                slidesPerView: 2,
                                spaceBetween: 30,
                            },
                            1024: {
                                slidesPerView: 3,
                                spaceBetween: 40,
                            }
                        }
                    });
                }
            });
            </script>
            
            <div data-animate="fade-up" style="max-width: 600px; margin: 40px auto 0; text-align: center;">
                <p style="font-size: 1.1rem; color: #CBD5E1; margin-bottom: 20px;">
                    {{ __('For more details on what is included, vehicle capacities, and additional notes, please visit our dedicated Private Car Charter page.') }}
                </p>
                <a href="{{ url('/private-car') }}" class="btn btn-primary" style="padding: 12px 35px; font-size: 1.1rem; border-radius: 50px;">
                    {{ __('View All Private Cars') }}
                </a>
            </div>

        </div>
        <div class="custom-shape-divider-bottom">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".7" class="shape-fill" style="fill: #14B8A6;"></path>
                <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
            </svg>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════════════
         AIRPORT TRANSFER
         ═══════════════════════════════════════════════════ -->
    <section class="section">
        <div class="container">
            <div style="position: relative; border-radius: 30px; overflow: hidden; box-shadow: 0 25px 50px rgba(0,0,0,0.15);" data-animate="fade-up">
                <img src="{{ asset('images/airport_transfer.png') }}" alt="Bali Airport Transfer" style="width: 100%; height: 400px; object-fit: cover;">
                <div style="position: absolute; inset: 0; background: linear-gradient(to right, rgba(15, 23, 42, 0.95) 0%, rgba(15, 23, 42, 0.8) 40%, rgba(15, 23, 42, 0.2) 100%); display: flex; align-items: center; padding: 80px; padding-right: 20px;">
                    <div style="max-width: 550px;">
                        <span style="display: inline-flex; align-items: center; gap: 8px; padding: 8px 16px; background: rgba(20, 184, 166, 0.15); border: 1px solid rgba(20, 184, 166, 0.3); color: #14b8a6; border-radius: 100px; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px; text-transform: uppercase; margin-bottom: 20px;">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                            {{ __('24/7 Premium Service') }}
                        </span>
                        <h2 style="color: #fff; font-size: 2.8rem; font-weight: 800; margin-bottom: 20px; line-height: 1.2;">{{ __('Hassle-Free Airport Transfers') }}</h2>
                        <p style="color: rgba(255,255,255,0.85); font-size: 1.15rem; line-height: 1.7; margin-bottom: 35px;">
                            {{ __('Start and end your Bali trip smoothly with our reliable airport pickup and drop-off services. Enjoy a comfortable ride right from the terminal to your hotel.') }}
                        </p>
                        <a href="/airport-transfer" class="btn" style="background: var(--color-primary); color: #fff; font-size: 1.1rem; font-weight: 600; padding: 15px 35px; border-radius: 100px; display: inline-flex; align-items: center; gap: 12px; border: none; box-shadow: 0 15px 30px rgba(20, 184, 166, 0.3); transition: transform 0.3s ease, box-shadow 0.3s ease;" onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 20px 40px rgba(20, 184, 166, 0.4)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 15px 30px rgba(20, 184, 166, 0.3)';">
                            {{ __('View Details & Book') }}
                            <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════════════
         GALLERY
         ═══════════════════════════════════════════════════ -->
    <section class="section section-bg">
        <div class="container">
            <div class="section-header" style="text-align: center; margin-bottom: 3rem;" data-animate="fade-up">
                <span style="color: var(--color-primary); font-weight: 700; text-transform: uppercase; letter-spacing: 2px; display: block; margin-bottom: 10px;">{{ __('Special Moments Collection with Us') }}</span>
                <h2 class="section-title" style="margin-bottom: 15px;">{{ __('Happy Travelers') }}</h2>
                <p style="color: var(--text-muted); font-size: 1.1rem; max-width: 600px; margin: 0 auto;">{{ __('See the smiles and unforgettable moments captured by our guests. Don\'t just take our word for it—let their pictures speak for the joy!') }}</p>
            </div>
            
            <div class="gallery-grid">
                <img src="{{ asset('images/bali_friends_rice_terrace_1783531274043.png') }}" alt="Happy Travelers 1" class="gallery-img" data-animate="zoom-in" data-animate-delay="0">
                <img src="{{ asset('images/bali_couple_beach_1783531285434.png') }}" alt="Happy Travelers 2" class="gallery-img" data-animate="zoom-in" data-animate-delay="100">
                <img src="{{ asset('images/bali_tourist_waterfall_1783531300884.png') }}" alt="Happy Travelers 3" class="gallery-img" data-animate="zoom-in" data-animate-delay="200">
                <img src="{{ asset('images/bali_temple_tourists_1783531314760.png') }}" alt="Happy Travelers 4" class="gallery-img" data-animate="zoom-in" data-animate-delay="300">
                <img src="{{ asset('images/bali_cliff_view_1783531367828.png') }}" alt="Happy Travelers 5" class="gallery-img" data-animate="zoom-in" data-animate-delay="400">
            </div>

            <div style="text-align: center; margin-top: 50px;" data-animate="fade-up">
                <a href="/gallery" class="btn btn-outline" style="border-width: 2px; font-weight: 600; padding: 12px 30px; display: inline-flex; align-items: center; gap: 10px;">
                    {{ __('View Full Gallery') }}
                    <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
            </div>
        </div>
    </section>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const section = document.querySelector('.section-bg-alt'); // Popular Tours section
        if (!section) return;

        section.addEventListener('click', function(e) {
            const link = e.target.closest('.filter-btn, .page-link');
            if (!link || link.classList.contains('disabled')) return;
            
            e.preventDefault();
            const url = link.href;
            
            // Visual feedback
            const grid = section.querySelector('.destination-grid');
            if (grid) {
                grid.style.opacity = '0.3';
                grid.style.transition = 'opacity 0.3s ease';
            }

            fetch(url, {
                headers: { 'X-Requested-With': 'XMLHttpRequest' }
            })
            .then(res => res.text())
            .then(html => {
                const parser = new DOMParser();
                const doc = parser.parseFromString(html, 'text/html');
                
                const newFilterBar = doc.querySelector('.filter-bar');
                const oldFilterBar = section.querySelector('.filter-bar');
                if (newFilterBar && oldFilterBar) {
                    oldFilterBar.innerHTML = newFilterBar.innerHTML;
                }
                
                const newGrid = doc.querySelector('.destination-grid');
                if (newGrid && grid) {
                    grid.innerHTML = newGrid.innerHTML;
                    grid.style.opacity = '1';
                }
                
                const newPagination = doc.querySelector('.custom-pagination');
                const oldPagination = section.querySelector('.custom-pagination');
                if (oldPagination) {
                    if (newPagination) {
                        oldPagination.innerHTML = newPagination.innerHTML;
                    } else {
                        oldPagination.remove();
                    }
                } else if (newPagination) {
                    section.querySelector('.container').appendChild(newPagination.cloneNode(true));
                }
                
                history.pushState(null, '', url);
                
                if (typeof AOS !== 'undefined') {
                    setTimeout(() => AOS.refreshHard(), 50);
                }
            })
            .catch(err => {
                window.location.href = url; // Fallback
            });
        });
    });
    </script>

</x-layout>
