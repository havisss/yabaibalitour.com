<x-layout>
    <x-slot:title>
        {{ __('About Us') }}
    </x-slot:title>

    <!-- Hero Header -->
    <section class="section section-dark" style="padding-top: 180px; padding-bottom: 120px; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; position: relative; overflow: hidden;">
        <!-- Soft Glowing Background Blobs -->
        <div style="position: absolute; top: 10%; left: 5%; width: 400px; height: 400px; background: rgba(59, 130, 246, 0.25); border-radius: 50%; filter: blur(100px); z-index: 1; animation: float 10s ease-in-out infinite;"></div>
        <div style="position: absolute; bottom: 10%; right: 5%; width: 500px; height: 500px; background: rgba(20, 184, 166, 0.2); border-radius: 50%; filter: blur(120px); z-index: 1; animation: float 12s ease-in-out infinite reverse;"></div>
        
        <div class="container" style="position: relative; z-index: 10;">
            <h1 class="section-title" data-animate="fade-up" style="font-size: clamp(2.5rem, 4vw, 4rem); margin-bottom: 1rem; font-weight: 800; letter-spacing: -1px;">
                <span style="color: #fff;">{{ __('About') }}</span>
                <span style="background: linear-gradient(135deg, var(--color-primary), #0ea5e9); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">{{ __('Yabai Bali Trip') }}</span>
            </h1>
            <p class="section-desc" data-animate="fade-up" data-animate-delay="100" style="max-width: 600px; margin: 0 auto; font-size: 1.15rem; line-height: 1.8; color: #cbd5e1;">
                {{ __('Your most trusted and reliable local travel companion. We bring you the authentic beauty and culture of Bali.') }}
            </p>
        </div>

        <!-- Abstract Bottom Divider -->
        <div class="custom-shape-divider-bottom">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill" style="fill: #f8fafc;"></path>
                <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".7" class="shape-fill" style="fill: #14B8A6;"></path>
                <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill" style="fill: #f8fafc;"></path>
            </svg>
        </div>
    </section>

    <!-- Company Story Section -->
    <section class="section section-bg" style="padding-top: 80px; padding-bottom: 80px; background-color: #f8fafc; position: relative;">
        <!-- Subtle Dot Pattern -->
        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-image: radial-gradient(rgba(0,0,0,0.05) 2px, transparent 2px); background-size: 30px 30px; z-index: 0;"></div>
        
        <div class="container" style="position: relative; z-index: 5;">
            <div style="display: flex; flex-wrap: wrap; align-items: center; gap: 40px;">
                <!-- Logo Side -->
                <div style="flex: 1; min-width: 300px; text-align: center;" data-animate="fade-up">
                    <div style="background: #fff; padding: 40px; border-radius: 24px; box-shadow: 0 20px 40px rgba(0,0,0,0.05); display: inline-block;">
                        <img src="{{ asset('images/logo.png') }}" alt="Yabai Bali Trip Logo" style="max-width: 100%; height: auto; max-height: 350px; object-fit: contain;">
                    </div>
                </div>
                
                <!-- Text Side -->
                <div style="flex: 1; min-width: 300px;" data-animate="fade-up" data-animate-delay="100">
                    <h2 style="font-size: 2.5rem; font-weight: 800; color: var(--color-dark); margin-bottom: 20px;">Who We Are</h2>
                    <p style="font-size: 1.1rem; line-height: 1.8; color: var(--text-muted); margin-bottom: 20px;">
                        <strong>Yabai Bali Trip</strong> is a premium travel agency based in the heart of Bali. The word "Yabai" represents something extraordinary and breathtaking, which perfectly describes the experience we strive to provide for every single one of our guests.
                    </p>
                    <p style="font-size: 1.1rem; line-height: 1.8; color: var(--text-muted); margin-bottom: 20px;">
                        We specialize in curating high-quality tour packages, reliable private car charters, and seamless airport transfers. With years of experience and deep knowledge of the island, our mission is to turn your dream Bali vacation into a beautiful reality.
                    </p>
                    <div style="display: flex; gap: 20px; margin-top: 30px;">
                        <div style="display: flex; align-items: center; gap: 10px;">
                            <div style="width: 50px; height: 50px; border-radius: 50%; background: rgba(14, 165, 233, 0.1); color: var(--color-primary); display: flex; justify-content: center; align-items: center;">
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                            </div>
                            <div style="font-weight: 600; color: var(--color-dark);">Trusted & Safe</div>
                        </div>
                        <div style="display: flex; align-items: center; gap: 10px;">
                            <div style="width: 50px; height: 50px; border-radius: 50%; background: rgba(14, 165, 233, 0.1); color: var(--color-primary); display: flex; justify-content: center; align-items: center;">
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                            </div>
                            <div style="font-weight: 600; color: var(--color-dark);">24/7 Support</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Owner / Founder Section -->
    <section class="section" style="padding-top: 80px; padding-bottom: 80px; background-color: #fff;">
        <div class="container">
            <div style="display: flex; flex-wrap: wrap; align-items: center; gap: 60px; flex-direction: row-reverse;">
                
                <!-- Owner Photo -->
                <div style="flex: 1; min-width: 300px;" data-animate="fade-up">
                    <div style="position: relative; padding-bottom: 20px; padding-left: 20px;">
                        <div style="position: absolute; bottom: 0; left: 0; right: 20px; top: 20px; border-radius: 24px; border: 4px solid var(--color-primary); z-index: 1;"></div>
                        <img src="{{ asset('images/owner.png') }}" alt="Founder of Yabai Bali Trip" style="width: 100%; border-radius: 24px; position: relative; z-index: 2; box-shadow: 0 20px 40px rgba(0,0,0,0.15);">
                    </div>
                </div>
                
                <!-- Owner Info -->
                <div style="flex: 1; min-width: 300px;" data-animate="fade-up" data-animate-delay="100">
                    <div style="display: inline-block; padding: 6px 16px; background: rgba(14, 165, 233, 0.1); color: var(--color-primary); font-weight: 600; border-radius: 30px; margin-bottom: 15px; font-size: 0.9rem;">
                        Meet The Founder
                    </div>
                    <h2 style="font-size: 2.5rem; font-weight: 800; color: var(--color-dark); margin-bottom: 10px;">Mr. Rangga</h2>
                    <h4 style="font-size: 1.2rem; color: var(--color-primary); font-weight: 600; margin-bottom: 25px;">Founder & CEO of Yabai Bali Trip</h4>
                    
                    <p style="font-size: 1.1rem; line-height: 1.8; color: var(--text-muted); margin-bottom: 20px;">
                        "Om Swastyastu! Welcome to Bali."
                    </p>
                    <p style="font-size: 1.1rem; line-height: 1.8; color: var(--text-muted); margin-bottom: 20px;">
                        Born and raised on this magical island, I established Yabai Bali Trip out of a deep love for my homeland and a strong desire to share its wonders with the world. I understand that a vacation is not just about visiting places, but about creating memories that will last a lifetime.
                    </p>
                    <p style="font-size: 1.1rem; line-height: 1.8; color: var(--text-muted); margin-bottom: 30px;">
                        My team and I are dedicated to providing you with the warmest Balinese hospitality, personalized services, and absolute comfort. Whether you want to explore hidden gems, experience local culture, or simply relax at the beach, we are here to make your journey completely hassle-free and unforgettable.
                    </p>
                    
                    <div style="font-style: italic; font-family: 'Georgia', serif; font-size: 1.2rem; color: var(--color-dark);">
                        "Let us be your family in Bali."
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layout>
