<x-layout>
    <x-slot:title>
        {{ $tour->title }}
    </x-slot:title>

    <!-- Tour Hero -->
    <section style="position: relative; height: 65vh; min-height: 420px; display: flex; align-items: flex-end;">
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 0;">
            <img src="{{ $tour->image_url }}" alt="{{ $tour->title }}" style="width: 100%; height: 100%; object-fit: cover;">
            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(to top, rgba(15,23,42,0.85) 0%, rgba(15,23,42,0.2) 50%, transparent 100%);"></div>
        </div>
        
        <div style="position: relative; z-index: 2; max-width: 1200px; margin: 0 auto; padding: 0 24px 48px; width: 100%; color: #fff;">
            <div style="margin-bottom: 16px; display: flex; gap: 8px; flex-wrap: wrap;">
                @if($tour->tags && count($tour->tags) > 0)
                    @foreach($tour->tags as $tag)
                        <span style="background: rgba(20,184,166,0.9); padding: 6px 14px; border-radius: 9999px; font-size: 0.8rem; font-weight: 600; backdrop-filter: blur(10px);">
                            {{ $tag }}
                        </span>
                    @endforeach
                @endif
            </div>
            <h1 style="font-family: var(--font-heading); font-size: clamp(2rem, 4vw, 3rem); font-weight: 800; margin-bottom: 8px; line-height: 1.15; letter-spacing: -0.02em;">{{ $tour->title }}</h1>
            <p style="font-size: 1.05rem; color: rgba(255,255,255,0.8); display: flex; align-items: center; gap: 6px;">📍 {{ $tour->location }}</p>
        </div>
    </section>

    <!-- Details Section -->
    <section class="section section-bg" style="padding-top: 64px;">
        <div class="container">
            <div style="display: grid; grid-template-columns: 1.8fr 1fr; gap: 40px;">
                
                <!-- Left: Description -->
                <div data-animate="fade-right">
                    <div style="background: #fff; padding: 36px; border-radius: 20px; border: 1px solid var(--color-border);">
                        <h2 style="font-family: var(--font-heading); font-size: 1.4rem; font-weight: 700; margin-bottom: 20px; color: var(--color-dark); display: flex; align-items: center; gap: 10px;">
                            <span style="width: 4px; height: 24px; background: var(--color-primary); border-radius: 4px; display: inline-block;"></span>
                            {{ __('Overview') }}
                        </h2>
                        <p style="font-size: 1.02rem; line-height: 1.85; color: var(--color-muted);">
                            {{ $tour->description }}
                        </p>
                        
                        <div style="margin-top: 32px;">
                            <h3 style="font-family: var(--font-heading); font-size: 1.1rem; font-weight: 600; margin-bottom: 16px; color: var(--color-dark);">{{ __("What's Included") }}</h3>
                            <div style="display: flex; flex-direction: column; gap: 10px;">
                                <div style="display: flex; align-items: center; gap: 10px; font-size: 0.95rem; color: var(--color-muted);">
                                    <span style="color: var(--color-primary); font-weight: 600;">✓</span> Professional Driver / Guide
                                </div>
                                <div style="display: flex; align-items: center; gap: 10px; font-size: 0.95rem; color: var(--color-muted);">
                                    <span style="color: var(--color-primary); font-weight: 600;">✓</span> Fuel & Parking Fees
                                </div>
                                <div style="display: flex; align-items: center; gap: 10px; font-size: 0.95rem; color: var(--color-muted);">
                                    <span style="color: var(--color-primary); font-weight: 600;">✓</span> Private Air-Conditioned Vehicle
                                </div>
                                <div style="display: flex; align-items: center; gap: 10px; font-size: 0.95rem; color: var(--color-muted);">
                                    <span style="color: var(--color-primary); font-weight: 600;">✓</span> Mineral Water
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: Booking Widget -->
                <div data-animate="fade-left" data-animate-delay="200">
                    <div style="background: #fff; padding: 32px; border-radius: 20px; border: 1px solid var(--color-border); position: sticky; top: 100px;">
                        <div style="margin-bottom: 24px; padding-bottom: 20px; border-bottom: 1px solid var(--color-border);">
                            <span style="display: block; font-size: 0.85rem; color: var(--color-muted); margin-bottom: 4px; font-weight: 500;">{{ __('Starting from') }}</span>
                            <span style="font-family: var(--font-heading); font-size: 2rem; font-weight: 800; color: var(--color-primary);">{{ $tour->price }}</span>
                        </div>
                        
                        <div style="margin-bottom: 24px; display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
                            <div style="background: var(--color-surface); padding: 14px; border-radius: 12px;">
                                <span style="display: block; font-size: 0.8rem; color: var(--color-muted); margin-bottom: 2px;">{{ __('Duration') }}</span>
                                <span style="font-family: var(--font-heading); font-size: 0.95rem; font-weight: 600; color: var(--color-dark);">{{ $tour->duration }}</span>
                            </div>
                            <div style="background: var(--color-surface); padding: 14px; border-radius: 12px;">
                                <span style="display: block; font-size: 0.8rem; color: var(--color-muted); margin-bottom: 2px;">{{ __('Category') }}</span>
                                <span style="font-family: var(--font-heading); font-size: 0.95rem; font-weight: 600; color: var(--color-dark);">{{ $tour->category }}</span>
                            </div>
                        </div>

                        @php
                            $waNumber = '6281234567890';
                            $waText = urlencode('Hello! I want to book the ' . $tour->title . ' package.');
                        @endphp

                        <a href="https://wa.me/{{ $waNumber }}?text={{ $waText }}" 
                           target="_blank" 
                           rel="noopener noreferrer"
                           class="btn btn-primary"
                           style="display: block; width: 100%; text-align: center; padding: 16px; font-size: 1rem; border-radius: 14px;">
                            {{ __('Book This Tour') }} →
                        </a>

                        <p style="text-align: center; margin-top: 12px; font-size: 0.8rem; color: var(--color-muted);">
                            {{ __('Free cancellation • Instant confirmation') }}
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <style>
        @media(max-width: 900px) {
            .section .container > div[style*="grid-template-columns"] {
                grid-template-columns: 1fr !important;
            }
            section[style*="height: 65vh"] h1 {
                font-size: 1.8rem !important;
            }
        }
    </style>
</x-layout>
