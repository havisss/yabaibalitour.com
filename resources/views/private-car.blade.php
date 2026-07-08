<x-layout>
    <x-slot:title>
        {{ __('Private Car Partner') }}
    </x-slot:title>

    <div class="page-wrapper">
        <!-- Hero Banner -->
        <section class="hero" style="min-height: 40vh; height: 40vh; background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=format&fit=crop&w=1920&q=80');">
            <div class="hero-content">
                <h1 class="hero-title" style="font-size: 2.5rem;">{{ __('Private Car Partners') }}</h1>
                <p class="hero-subtitle">{{ __('Explore Bali at your own pace with our premium cars and experienced local drivers.') }}</p>
            </div>
        </section>

        <!-- Main Partner List -->
        <section class="section section-bg">
            <div class="container">
                <h2 class="section-title">{{ __('Choose Your Partner') }}</h2>
                
                <div class="services-grid" style="grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2.5rem; margin-top: 3rem;">
                    @forelse($partners as $partner)
                    <div class="service-card" style="text-align: left; padding: 0; overflow: hidden; display: flex; flex-direction: column; height: 100%; position: relative;">
                        <!-- Car Image -->
                        <div style="height: 220px; overflow: hidden; position: relative;">
                            <img src="{{ $partner->image_url }}" alt="{{ $partner->car_type }}" style="width: 100%; height: 100%; object-fit: cover; transition: var(--transition);">
                            <div style="position: absolute; top: 1rem; right: 1rem; background: var(--primary); color: #fff; padding: 0.25rem 0.75rem; border-radius: 50px; font-weight: 600; font-size: 0.85rem; box-shadow: var(--shadow-sm);">
                                {{ $partner->price }}
                            </div>
                        </div>

                        <!-- Card Body -->
                        <div style="padding: 1.5rem; flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
                            <div>
                                <!-- Driver & Rating Header -->
                                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.5rem;">
                                    <h3 class="service-title" style="font-size: 1.35rem; margin: 0; font-weight: 700;">{{ $partner->car_type }}</h3>
                                    <div style="display: flex; align-items: center; gap: 0.25rem; background: rgba(255, 193, 7, 0.1); color: var(--star-color); padding: 0.25rem 0.5rem; border-radius: 6px; font-weight: 700; font-size: 0.85rem;">
                                        <svg viewBox="0 0 24 24" style="width: 14px; height: 14px; fill: currentColor;"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                                        {{ number_format($partner->rating, 1) }}
                                    </div>
                                </div>

                                <!-- Driver Info -->
                                <p style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1rem; display: flex; align-items: center; gap: 0.5rem;">
                                    <svg viewBox="0 0 24 24" style="width: 16px; height: 16px; fill: var(--primary);"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
                                    {{ __('Driver') }}: <strong>{{ $partner->name }}</strong>
                                </p>

                                <!-- Capacity and Specs -->
                                <div style="display: flex; gap: 0.5rem; margin-bottom: 1rem; flex-wrap: wrap;">
                                    <span style="background: rgba(3,169,244,0.08); color: var(--primary); padding: 0.25rem 0.6rem; border-radius: 6px; font-size: 0.8rem; font-weight: 600;">
                                        {{ $partner->capacity }} {{ __('Seats') }}
                                    </span>
                                    <span style="background: rgba(16,185,129,0.08); color: var(--success); padding: 0.25rem 0.6rem; border-radius: 6px; font-size: 0.8rem; font-weight: 600;">
                                        {{ $partner->is_available ? __('Available') : __('Booked') }}
                                    </span>
                                </div>

                                <!-- Description -->
                                <p style="font-size: 0.9rem; color: var(--text-muted); line-height: 1.5; margin-bottom: 1.5rem;">
                                    {{ $partner->description }}
                                </p>
                            </div>

                            <!-- CTA Button -->
                            @php
                                $waText = rawurlencode("Hello, I would like to book a private car partner:\n- Car: " . $partner->car_type . "\n- Driver: " . $partner->name . "\n- Price: " . $partner->price);
                                $waLink = "https://wa.me/" . preg_replace('/[^0-9]/', '', $partner->phone_number) . "?text=" . $waText;
                            @endphp
                            <a href="{{ $waLink }}" target="_blank" rel="noopener noreferrer" class="btn btn-success" 
                               style="display: flex; justify-content: center; align-items: center; gap: 0.5rem; text-align: center; border-radius: 10px; width: 100%; font-weight: 600; padding: 0.75rem;">
                                <svg viewBox="0 0 24 24" style="width: 20px; height: 20px; fill: currentColor;"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.396.86s.274.045.376-.043c.101-.087.433-.503.549-.678.116-.173.231-.145.39-.087s1.011.477 1.184.564c.173.087.289.129.332.202.043.073.043.423-.101.827z"/></svg>
                               {{ __('Book on WhatsApp') }}
                            </a>
                        </div>
                    </div>
                    @empty
                    <div style="grid-column: 1/-1; text-align: center; padding: 4rem; border: 2px dashed var(--glass-border); border-radius: 16px;">
                        <p style="font-size: 1.2rem; color: var(--text-muted);">
                            {{ __('No private car partners available at the moment.') }}
                        </p>
                    </div>
                    @endforelse
                </div>
            </div>
        </section>
    </div>
</x-layout>
