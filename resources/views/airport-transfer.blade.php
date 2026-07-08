<x-layout>
    <x-slot:title>
        {{ __('Airport Transfer') }}
    </x-slot:title>

    <div class="page-wrapper">
        <!-- Hero Banner -->
        <section class="hero" style="min-height: 40vh; height: 40vh; background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1544644181-1484b3fdfc62?auto=format&fit=crop&w=1920&q=80');">
            <div class="hero-content">
                <h1 class="hero-title" style="font-size: 2.5rem;">{{ __('Airport Transfer Service') }}</h1>
                <p class="hero-subtitle">{{ __('Hassle-free private airport pickup and drop-off service in Bali with professional drivers.') }}</p>
            </div>
        </section>

        <!-- Features Bar -->
        <section class="section section-bg" style="padding: 3rem 1.5rem 0;">
            <div class="container">
                <div class="features-grid" style="grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem;">
                    <div class="feature-card" style="text-align: center; padding: 1.5rem; background: #fff; border-radius: 12px; border: 1px solid var(--glass-border);">
                        <div class="feature-icon" style="color: var(--primary); font-size: 1.5rem; margin-bottom: 0.5rem; display: inline-block;">
                            <svg viewBox="0 0 24 24" style="width: 32px; height: 32px; fill: currentColor;"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/></svg>
                        </div>
                        <h4 style="margin-bottom: 0.5rem;">{{ __('Flight Monitoring') }}</h4>
                        <p style="font-size: 0.85rem; color: var(--text-muted);">We track your flight arrival. No extra charge if your flight is delayed.</p>
                    </div>
                    <div class="feature-card" style="text-align: center; padding: 1.5rem; background: #fff; border-radius: 12px; border: 1px solid var(--glass-border);">
                        <div class="feature-icon" style="color: var(--primary); font-size: 1.5rem; margin-bottom: 0.5rem; display: inline-block;">
                            <svg viewBox="0 0 24 24" style="width: 32px; height: 32px; fill: currentColor;"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                        </div>
                        <h4 style="margin-bottom: 0.5rem;">{{ __('All-Inclusive Rates') }}</h4>
                        <p style="font-size: 0.85rem; color: var(--text-muted);">Driver, petrol, parking, and toll fees are all included in the price.</p>
                    </div>
                    <div class="feature-card" style="text-align: center; padding: 1.5rem; background: #fff; border-radius: 12px; border: 1px solid var(--glass-border);">
                        <div class="feature-icon" style="color: var(--primary); font-size: 1.5rem; margin-bottom: 0.5rem; display: inline-block;">
                            <svg viewBox="0 0 24 24" style="width: 32px; height: 32px; fill: currentColor;"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                        </div>
                        <h4 style="margin-bottom: 0.5rem;">{{ __('Meet & Greet') }}</h4>
                        <p style="font-size: 0.85rem; color: var(--text-muted);">Our driver will be waiting at the arrival terminal holding a sign with your name.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Content (List of rates) -->
        <section class="section section-bg">
            <div class="container">
                <h2 class="section-title">{{ __('Our Transfer Rates') }}</h2>
                
                <div class="destination-grid" style="grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; margin-top: 2rem;">
                    @forelse($transfers as $transfer)
                    <div class="tour-item" style="background: #fff; border-radius: 16px; border: 1px solid var(--glass-border); overflow: hidden; display: flex; flex-direction: column; justify-content: space-between; box-shadow: var(--shadow-sm); transition: var(--transition);">
                        <!-- Image -->
                        <div style="height: 200px; overflow: hidden; position: relative;">
                            <img src="{{ $transfer->image_url }}" alt="{{ $transfer->title }}" style="width: 100%; height: 100%; object-fit: cover;">
                            <div style="position: absolute; bottom: 1rem; left: 1rem; background: rgba(0,0,0,0.6); backdrop-filter: blur(4px); color: #fff; padding: 0.25rem 0.75rem; border-radius: 50px; font-size: 0.85rem; font-weight: 500; display: flex; align-items: center; gap: 0.25rem;">
                                <svg viewBox="0 0 24 24" style="width: 14px; height: 14px; fill: currentColor;"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z"/></svg>
                                {{ $transfer->location }}
                            </div>
                        </div>

                        <!-- Content Body -->
                        <div style="padding: 1.5rem; flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
                            <div>
                                <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 0.5rem; color: var(--text-main);">{{ $transfer->title }}</h3>
                                <p style="font-size: 0.9rem; color: var(--text-muted); line-height: 1.5; margin-bottom: 1rem;">
                                    {{ $transfer->description }}
                                </p>
                                
                                <div style="display: flex; justify-content: space-between; align-items: center; padding-top: 1rem; border-top: 1px solid var(--glass-border); margin-bottom: 1.5rem;">
                                    <div>
                                        <span style="font-size: 0.75rem; color: var(--text-muted); display: block;">{{ __('ESTIMATED TIME') }}</span>
                                        <span style="font-size: 0.9rem; font-weight: 600;">{{ $transfer->duration }}</span>
                                    </div>
                                    <div style="text-align: right;">
                                        <span style="font-size: 0.75rem; color: var(--text-muted); display: block;">{{ __('PRICE PER VEHICLE') }}</span>
                                        <strong style="color: var(--primary); font-size: 1.2rem;">{{ $transfer->price }}</strong>
                                    </div>
                                </div>
                            </div>

                            @php
                                $waText = rawurlencode("Hello, I would like to book an Airport Transfer:\n- Route: " . $transfer->title . "\n- Price: " . $transfer->price);
                                $waLink = "https://wa.me/6281234567890?text=" . $waText;
                            @endphp
                            <a href="{{ $waLink }}" target="_blank" rel="noopener noreferrer" class="btn btn-primary" 
                               style="display: flex; justify-content: center; align-items: center; gap: 0.5rem; text-align: center; border-radius: 10px; width: 100%; font-weight: 600; padding: 0.75rem; background: var(--primary); border: none; color:#fff;">
                                <svg viewBox="0 0 24 24" style="width: 20px; height: 20px; fill: currentColor;"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.396.86s.274.045.376-.043c.101-.087.433-.503.549-.678.116-.173.231-.145.39-.087s1.011.477 1.184.564c.173.087.289.129.332.202.043.073.043.423-.101.827z"/></svg>
                               {{ __('Book on WhatsApp') }}
                            </a>
                        </div>
                    </div>
                    @empty
                    <div style="grid-column: 1/-1; text-align: center; padding: 4rem; border: 2px dashed var(--glass-border); border-radius: 16px;">
                        <p style="font-size: 1.2rem; color: var(--text-muted);">
                            {{ __('No airport transfer packages available at the moment.') }}
                        </p>
                    </div>
                    @endforelse
                </div>
            </div>
        </section>
    </div>
</x-layout>
