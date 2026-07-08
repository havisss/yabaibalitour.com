<x-layout>
    <x-slot:title>
        {{ $tour->title }}
    </x-slot:title>

    <div class="page-wrapper">
        <!-- Hero section with the tour image -->
        <section class="tour-hero" style="position: relative; height: 60vh; min-height: 400px; display: flex; align-items: flex-end; padding-bottom: 3rem;">
            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: -1;">
                <img src="{{ $tour->image_url }}" alt="{{ $tour->title }}" style="width: 100%; height: 100%; object-fit: cover;">
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);"></div>
            </div>
            
            <div class="container" style="color: #fff;">
                <div style="margin-bottom: 1rem; display: flex; gap: 0.5rem; flex-wrap: wrap;">
                    @if($tour->tags && count($tour->tags) > 0)
                        @foreach($tour->tags as $tag)
                            <span style="background: var(--primary); padding: 0.35rem 0.75rem; border-radius: 4px; font-size: 0.85rem; font-weight: 500;">
                                {{ $tag }}
                            </span>
                        @endforeach
                    @endif
                </div>
                <h1 style="font-size: 2.5rem; font-weight: 700; margin-bottom: 0.5rem; line-height: 1.2;">{{ $tour->title }}</h1>
                <p style="font-size: 1.1rem; color: rgba(255,255,255,0.9);"><i class="fa fa-map-marker"></i> {{ $tour->location }}</p>
            </div>
        </section>

        <!-- Details Section -->
        <section class="section section-bg">
            <div class="container">
                <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 3rem;">
                    
                    <!-- Left Column: Description -->
                    <div class="tour-description" style="background: #fff; padding: 2.5rem; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                        <h2 style="font-size: 1.5rem; margin-bottom: 1.5rem; border-bottom: 2px solid var(--primary); padding-bottom: 0.5rem; display: inline-block;">Overview</h2>
                        <p style="font-size: 1.05rem; line-height: 1.8; color: var(--text-main);">
                            {{ $tour->description }}
                        </p>
                        
                        <div style="margin-top: 2rem;">
                            <h3 style="font-size: 1.2rem; margin-bottom: 1rem;">What's Included</h3>
                            <ul style="list-style: none; padding: 0;">
                                <li style="margin-bottom: 0.5rem; color: var(--text-muted);">✓ Professional Driver / Guide</li>
                                <li style="margin-bottom: 0.5rem; color: var(--text-muted);">✓ Fuel & Parking Fees</li>
                                <li style="margin-bottom: 0.5rem; color: var(--text-muted);">✓ Private Air-Conditioned Vehicle</li>
                                <li style="margin-bottom: 0.5rem; color: var(--text-muted);">✓ Mineral Water</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Right Column: Booking Widget -->
                    <div class="tour-sidebar">
                        <div style="background: #fff; padding: 2rem; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); position: sticky; top: 100px;">
                            <div style="margin-bottom: 1.5rem; padding-bottom: 1.5rem; border-bottom: 1px solid rgba(0,0,0,0.1);">
                                <span style="display: block; font-size: 0.9rem; color: var(--text-muted); margin-bottom: 0.25rem;">Price</span>
                                <span style="font-size: 1.8rem; font-weight: 700; color: var(--primary);">{{ $tour->price }}</span>
                            </div>
                            
                            <div style="margin-bottom: 1.5rem; display: flex; align-items: center; gap: 1rem;">
                                <div style="flex: 1;">
                                    <span style="display: block; font-size: 0.9rem; color: var(--text-muted);">Duration</span>
                                    <span style="font-size: 1.1rem; font-weight: 600;">{{ $tour->duration }}</span>
                                </div>
                                <div style="flex: 1;">
                                    <span style="display: block; font-size: 0.9rem; color: var(--text-muted);">Category</span>
                                    <span style="font-size: 1.1rem; font-weight: 600;">{{ $tour->category }}</span>
                                </div>
                            </div>

                            @php
                                $waNumber = '6281234567890';
                                $waText = urlencode('Hello! I want to book the ' . $tour->title . ' package.');
                            @endphp

                            <a href="https://wa.me/{{ $waNumber }}?text={{ $waText }}" 
                               target="_blank" 
                               rel="noopener noreferrer" 
                               style="display: block; width: 100%; text-align: center; background: var(--primary); color: #fff; padding: 1rem; border-radius: 8px; font-weight: 700; font-size: 1.1rem; text-decoration: none; transition: var(--transition);"
                               onmouseover="this.style.background='var(--primary-hover)'"
                               onmouseout="this.style.background='var(--primary)'">
                                Book This Tour
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>

    <!-- Responsive styles for grid -->
    <style>
        @media(max-width: 900px) {
            .section .container > div {
                grid-template-columns: 1fr !important;
            }
            .tour-hero h1 {
                font-size: 2rem !important;
            }
        }
    </style>
</x-layout>
