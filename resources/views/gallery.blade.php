<x-layout>
    <x-slot:title>
        {{ __('Gallery') }}
    </x-slot:title>

    <!-- Hero Header -->
    <section class="section section-bg" style="min-height: 50vh; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; position: relative; overflow: hidden; padding-top: 120px; background-color: #f8fafc;">
        
        <!-- Subtle Dot Pattern -->
        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-image: radial-gradient(rgba(0,0,0,0.05) 2px, transparent 2px); background-size: 30px 30px; z-index: 0;"></div>

        <!-- Soft Glowing Background Blobs -->
        <div style="position: absolute; top: 5%; left: 15%; width: 400px; height: 400px; background: rgba(59, 130, 246, 0.15); border-radius: 50%; filter: blur(100px); z-index: 1; animation: float 10s ease-in-out infinite;"></div>
        <div style="position: absolute; bottom: 5%; right: 15%; width: 500px; height: 500px; background: rgba(20, 184, 166, 0.2); border-radius: 50%; filter: blur(120px); z-index: 1; animation: float 12s ease-in-out infinite reverse;"></div>
        
        <div class="container" style="position: relative; z-index: 10;">
            <h1 class="section-title" data-animate="fade-up" style="font-size: clamp(2.5rem, 4vw, 4rem); margin-bottom: 1rem; font-weight: 800; letter-spacing: -1px; color: var(--color-dark);">
                <span style="background: linear-gradient(135deg, var(--color-primary), #0ea5e9); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">{{ __('Gallery') }}</span>
                <br class="block md:hidden">
                <span style="font-size: clamp(1.8rem, 3vw, 2.5rem); font-weight: 600;">{{ __('Special Moments Collection with Us') }}</span>
            </h1>
            <p class="section-desc" data-animate="fade-up" data-animate-delay="100" style="max-width: 600px; margin: 0 auto; font-size: 1.15rem; line-height: 1.8; color: var(--text-muted);">
                {{ __('Glimpses of unforgettable moments and breathtaking scenery from our previous trips around Bali.') }}
            </p>
        </div>
    </section>

    <!-- Gallery Grid -->
    <section class="section section-bg" style="padding-top: 20px; padding-bottom: 80px; background-color: #f8fafc;">
        <div class="container">
            <div class="gallery-masonry" data-animate="fade-up">
                <!-- Gallery Items using Custom AI Images -->
                @php
                    $images = [
                        ['url' => asset('images/bali_friends_rice_terrace_1783531274043.png'), 'title' => 'Tegallalang Rice Terrace', 'height' => '450px'],
                        ['url' => asset('images/bali_couple_beach_1783531285434.png'), 'title' => 'Sunset at Seminyak Beach', 'height' => '300px'],
                        ['url' => asset('images/bali_tourist_waterfall_1783531300884.png'), 'title' => 'Tegenungan Waterfall', 'height' => '350px'],
                        ['url' => asset('images/bali_temple_tourists_1783531314760.png'), 'title' => 'Besakih Temple Tour', 'height' => '400px'],
                        ['url' => asset('images/bali_friends_beachclub_1783531336257.png'), 'title' => 'Relaxing at Beach Club', 'height' => '280px'],
                        ['url' => asset('images/bali_monkey_forest_1783531347703.png'), 'title' => 'Ubud Monkey Forest', 'height' => '350px'],
                        ['url' => asset('images/bali_private_tour_1783531356853.png'), 'title' => 'Comfortable Private Tour', 'height' => '450px'],
                        ['url' => asset('images/bali_cliff_view_1783531367828.png'), 'title' => 'Nusa Penida Cliff', 'height' => '320px'],
                        ['url' => asset('images/bali_tourist_waterfall_1783531300884.png'), 'title' => 'Jungle Trekking Guide', 'height' => '380px'],
                        ['url' => asset('images/bali_couple_beach_1783531285434.png'), 'title' => 'Romantic Getaway', 'height' => '280px'],
                        ['url' => asset('images/bali_temple_tourists_1783531314760.png'), 'title' => 'Cultural Exploration', 'height' => '420px'],
                        ['url' => asset('images/bali_friends_rice_terrace_1783531274043.png'), 'title' => 'Friends Group Tour', 'height' => '300px'],
                    ];
                @endphp

                @foreach($images as $img)
                <div class="gallery-item" style="position: relative; overflow: hidden; border-radius: 16px; box-shadow: 0 10px 40px rgba(0,0,0,0.08); cursor: pointer; background: #fff; margin-bottom: 25px; break-inside: avoid;">
                    <img src="{{ $img['url'] }}" alt="{{ $img['title'] }}" style="width: 100%; height: {{ $img['height'] }}; object-fit: cover; transition: transform 0.7s cubic-bezier(0.4, 0, 0.2, 1);" class="hover-zoom">
                    <div style="position: absolute; inset: 0; background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, transparent 60%); display: flex; align-items: flex-end; padding: 25px; opacity: 0; transition: opacity 0.4s ease;" class="hover-overlay">
                        <div>
                            <h4 style="color: #fff; font-size: 1.25rem; font-weight: bold; margin: 0; transform: translateY(20px); transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);" class="hover-title">{{ $img['title'] }}</h4>
                            <span style="display: block; width: 40px; height: 3px; background: var(--color-primary); margin-top: 10px; transform: scaleX(0); transform-origin: left; transition: transform 0.4s ease 0.2s;" class="hover-line"></span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            <style>
                .gallery-masonry {
                    column-count: 3;
                    column-gap: 25px;
                }
                .gallery-item:hover .hover-zoom {
                    transform: scale(1.1);
                }
                .gallery-item:hover .hover-overlay {
                    opacity: 1;
                }
                .gallery-item:hover .hover-title {
                    transform: translateY(0);
                }
                .gallery-item:hover .hover-line {
                    transform: scaleX(1);
                }
                
                @media (max-width: 992px) {
                    .gallery-masonry {
                        column-count: 2;
                    }
                }
                @media (max-width: 576px) {
                    .gallery-masonry {
                        column-count: 1;
                    }
                }
            </style>
        </div>
    </section>
</x-layout>
