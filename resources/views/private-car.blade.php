<x-layout>
    <x-slot:title>
        {{ __('Private Car') }}
    </x-slot:title>

    <!-- Hero Header -->
    <section class="section section-bg" style="min-height: 100vh; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; position: relative; overflow: hidden; background-color: #f8fafc;">
        
        <!-- Subtle Dot Pattern -->
        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-image: radial-gradient(rgba(0,0,0,0.05) 2px, transparent 2px); background-size: 30px 30px; z-index: 0;"></div>
        
        <!-- Soft Glowing Background Blobs (Visible on all sizes) -->
        <div style="position: absolute; top: 5%; left: -5%; width: 500px; height: 500px; background: rgba(20, 184, 166, 0.3); border-radius: 50%; filter: blur(100px); z-index: 1; animation: float 10s ease-in-out infinite;"></div>
        <div style="position: absolute; bottom: 10%; right: -5%; width: 600px; height: 600px; background: rgba(59, 130, 246, 0.25); border-radius: 50%; filter: blur(120px); z-index: 1; animation: float 12s ease-in-out infinite reverse;"></div>

        <!-- Floating Decorations (Left) -->
        <div class="hidden lg:block absolute" style="left: calc(50% - 650px); top: 50%; margin-top: -140px; animation: float 6s ease-in-out infinite; z-index: 5;">
            <img src="{{ asset('images/car_steering.png') }}" alt="Car Steering" style="width: 220px; height: 280px; object-fit: cover; border-radius: 24px; box-shadow: 0 20px 40px rgba(0,0,0,0.15); border: 6px solid #fff; transform: rotate(-8deg);">
        </div>
        <div class="hidden lg:block absolute" style="left: calc(50% - 480px); bottom: 15%; animation: float 8s ease-in-out infinite; animation-delay: 2s; z-index: 4;">
            <img src="{{ asset('images/bali_private_tour_1783531356853.png') }}" alt="Bali Driving" style="width: 160px; height: 160px; object-fit: cover; border-radius: 50%; box-shadow: 0 15px 30px rgba(0,0,0,0.1); border: 5px solid #fff; transform: rotate(12deg);">
        </div>

        <!-- Floating Decorations (Right) -->
        <div class="hidden lg:block absolute" style="right: calc(50% - 680px); top: 50%; margin-top: -160px; animation: float 7s ease-in-out infinite; animation-delay: 1s; z-index: 5;">
            <img src="{{ asset('images/bali_monkey_forest_1783531347703.png') }}" alt="Bali Road" style="width: 250px; height: 320px; object-fit: cover; border-radius: 24px; box-shadow: 0 20px 40px rgba(0,0,0,0.15); border: 6px solid #fff; transform: rotate(6deg);">
        </div>
        <div class="hidden lg:block absolute" style="right: calc(50% - 450px); top: 15%; animation: float 9s ease-in-out infinite; animation-delay: 3s; z-index: 4;">
            <img src="{{ asset('images/airport_transfer.png') }}" alt="Car Travel" style="width: 140px; height: 140px; object-fit: cover; border-radius: 24px; box-shadow: 0 15px 30px rgba(0,0,0,0.1); border: 5px solid #fff; transform: rotate(-15deg);">
        </div>

        <div class="container" style="margin-top: -80px; position: relative; z-index: 10;">
            <h1 class="section-title" data-animate="fade-up" style="max-width: 650px; margin: 0 auto 1.5rem; font-size: clamp(3rem, 5vw, 4.5rem); font-weight: 800; letter-spacing: -1px; line-height: 1.1;">
                <span style="background: linear-gradient(135deg, var(--color-primary), #0ea5e9); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">{{ __('Private Car') }}</span>
                <span style="color: var(--color-dark);">{{ __('Charter') }}</span>
            </h1>
            <p class="section-desc" data-animate="fade-up" data-animate-delay="100" style="max-width: 800px; margin: 0 auto; font-size: 1.25rem; line-height: 1.8; color: var(--text-muted);">
                {{ __('Rent a private car with an English-speaking driver to explore Bali at your own pace. All prices include fuel and driver.') }}
            </p>
        </div>

        <!-- Scroll Down Indicator -->
        <div style="position: absolute; bottom: 40px; left: 50%; transform: translateX(-50%); z-index: 10;">
            <div data-animate="fade-up" data-animate-delay="300">
                <a href="#explore-cars" style="display: flex; flex-direction: column; align-items: center; color: var(--color-primary); text-decoration: none;">
                    <span style="font-size: 0.75rem; font-weight: 600; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 10px; color: var(--text-muted);">{{ __('Scroll Down') }}</span>
                    <div class="animate-bounce" style="background: rgba(255,255,255,0.5); border: 1px solid rgba(0,0,0,0.05); box-shadow: 0 4px 10px rgba(0,0,0,0.05); border-radius: 50%; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; backdrop-filter: blur(10px);">
                        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M12 5v14M19 12l-7 7-7-7"/></svg>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Cars Content -->
    <div class="page-wrapper section-dark" style="padding-top: 0; position: relative;" id="explore-cars">
        <!-- Shape Divider at the top of dark section -->
        <div class="custom-shape-divider-top" style="z-index: 1;">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".7" style="fill: var(--color-primary);"></path>
                <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
            </svg>
        </div>

        <!-- We use section-dark for its mesh gradient styling -->
        <section class="section" style="padding-top: 150px; background: transparent !important; position: relative; z-index: 2;">
            <div class="container">
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

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px;">
                    @foreach($cars as $car)
                    <div data-animate="fade-up" data-animate-delay="{{ ($loop->index % 4) * 100 }}">
                        <div class="car-card" style="height: 100%; display: flex; flex-direction: column;">
                            <div class="car-content" style="flex: 1; display: flex; flex-direction: column; text-align: left; padding: 25px;">
                                <h2 class="car-title" style="font-size: 1.5rem; text-align: center; margin-bottom: 15px; color: var(--color-primary);">{{ $car['name'] }}</h2>
                                
                                <div style="height: 200px; display: flex; align-items: center; justify-content: center; margin-bottom: 15px; background: #fff; border-radius: 12px; padding: 10px;">
                                    <img src="{{ $car['image'] }}" alt="{{ $car['name'] }}" style="width: 100%; height: 100%; object-fit: contain;">
                                </div>
                                
                                <h3 style="font-size: 1.4rem; font-weight: bold; text-align: center; margin-bottom: 15px; color: #F8FAFC;">{{ __('IDR') }} {{ $car['price'] }}</h3>
                                
                                <div class="car-specs" style="justify-content: center; margin-bottom: 20px; display: flex; gap: 15px; flex-wrap: wrap;">
                                    <span style="display: flex; align-items: center; gap: 8px; color: #CBD5E1;">
                                        <svg width="16" height="16" fill="currentColor" viewBox="0 0 640 512"><path d="M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm448 0c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm32 32h-64c-17.6 0-33.5 7.1-45.1 18.6 40.3 22.1 68.9 62 75.1 109.4h66c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64zm-256 0c61.9 0 112-50.1 112-112S381.9 32 320 32 208 82.1 208 144s50.1 112 112 112zm76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2zm-223.7-13.4C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4z"/></svg>
                                        {{ $car['seats'] }}
                                    </span>
                                </div>
                                
                                <a href="https://wa.me/6281234567890?text={{ urlencode('Hello Bos Muda Bali Tour, I am interested in booking a Private Car Charter ('.$car['name'].') for my trip.') }}" class="btn btn-outline" style="width: 100%; text-align: center; margin-bottom: 25px;">{{ __('Book This Vehicle') }}</a>
                                
                                <h2 style="font-size: 1.2rem; font-weight: bold; margin-bottom: 10px; color: #fff;">{{ __('Includes:') }}</h2>
                                <ul style="list-style: disc; padding-left: 20px; margin-bottom: 20px; font-size: 0.95rem; color: #CBD5E1; line-height: 1.8;">
                                    <li>{{ __('English Speaking Driver') }}</li>
                                    <li>{{ __('Air Conditioned Vehicles') }}</li>
                                    <li>{{ __('Mineral Water') }}</li>
                                    <li>{{ __('Fuel') }}</li>
                                    <li>{{ __('Parking') }}</li>
                                </ul>
                                
                                <h2 style="font-size: 1.2rem; font-weight: bold; margin-bottom: 10px; color: #fff;">{{ __('Notes:') }}</h2>
                                <ul style="list-style: disc; padding-left: 20px; font-size: 0.95rem; color: #CBD5E1; line-height: 1.8; margin-bottom: 0;">
                                    <li><strong style="color: #fff;">{{ __('Duration:') }}</strong> {{ __('10 hours /Day') }}</li>
                                    <li><strong style="color: #fff;">{{ __('Over Time:') }}</strong> {{ __('10% From Price /Hours') }}</li>
                                    <li><strong style="color: #fff;">{{ __('Capacity:') }}</strong> {{ $car['seats'] }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
</x-layout>
