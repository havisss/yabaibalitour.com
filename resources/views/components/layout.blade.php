<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Yabai Bali Trip - Your trusted travel companion for exploring the magical island of Bali. Premium tour packages, private car charter, and airport transfer services.">
    <title>Yabai Bali Trip | {{ $title ?? 'Home' }}</title>

    <!-- Vite CSS & JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar" id="mainNavbar">
        <div class="nav-brand">
            <a href="/" style="display: flex; align-items: center; gap: 10px;">
                <img src="{{ asset('images/logo.png') }}" alt="Yabai Bali Logo" style="height: 65px; width: auto; object-fit: contain;">
                <span class="brand-text">Yabai<span>BaliTrip</span></span>
            </a>
        </div>
        
        <ul class="nav-links">
            <li><a href="/" class="{{ request()->is('/') ? 'active' : '' }}">{{ __('Home') }}</a></li>
            <li><a href="/tours" class="{{ request()->is('tours') || request()->is('tours/*') ? 'active' : '' }}">{{ __('Tours') }}</a></li>
            <li><a href="/private-car" class="{{ request()->is('private-car') ? 'active' : '' }}">{{ __('Private Car') }}</a></li>
            <li><a href="/airport-transfer" class="{{ request()->is('airport-transfer') ? 'active' : '' }}">{{ __('Airport Transfer') }}</a></li>
            <li><a href="/gallery" class="{{ request()->is('gallery') ? 'active' : '' }}">{{ __('Gallery') }}</a></li>
            <li><a href="/about" class="{{ request()->is('about') ? 'active' : '' }}">{{ __('About') }}</a></li>
            <li><a href="/contact" class="{{ request()->is('contact') ? 'active' : '' }}">{{ __('Contact') }}</a></li>
        </ul>

        <div class="nav-actions">
            <div class="lang-switch">
                <select onchange="window.location.href=this.value">
                    <option value="/lang/id" {{ app()->getLocale() == 'id' ? 'selected' : '' }}>🇮🇩 ID</option>
                    <option value="/lang/en" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>🇬🇧 EN</option>
                    <option value="/lang/ja" {{ app()->getLocale() == 'ja' ? 'selected' : '' }}>🇯🇵 JA</option>
                </select>
            </div>

            <a href="https://wa.me/6281234567890?text={{ urlencode('Hello! I want to book a Bali tour.') }}" class="btn-book-nav" target="_blank" rel="noopener noreferrer">
                {{ __('Book Now') }}
            </a>
            
            <button class="mobile-menu-btn" aria-label="Open menu">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
            </button>
        </div>
    </nav>

    <!-- Mobile Menu Overlay -->
    <div class="mobile-menu" id="mobileMenu">
        <button class="mobile-close-btn" aria-label="Close menu">&times;</button>
        <a href="/" class="{{ request()->is('/') ? 'active' : '' }}">{{ __('Home') }}</a>
        <a href="/tours" class="{{ request()->is('tours') || request()->is('tours/*') ? 'active' : '' }}">{{ __('Tours') }}</a>
        <a href="/private-car" class="{{ request()->is('private-car') ? 'active' : '' }}">{{ __('Private Car') }}</a>
        <a href="/airport-transfer" class="{{ request()->is('airport-transfer') ? 'active' : '' }}">{{ __('Airport Transfer') }}</a>
        <a href="/gallery" class="{{ request()->is('gallery') ? 'active' : '' }}">{{ __('Gallery') }}</a>
        <a href="/about" class="{{ request()->is('about') ? 'active' : '' }}">{{ __('About') }}</a>
        <a href="/contact" class="{{ request()->is('contact') ? 'active' : '' }}">{{ __('Contact') }}</a>
    </div>

    <div class="page-wrapper">
        <main>
            {{ $slot }}
        </main>

        <!-- FOOTER -->
        <footer class="footer-container">
            <div class="footer-inner">
                <div class="footer-grid">
                    <div class="footer-brand">
                        <div class="footer-logo">
                            <svg viewBox="0 0 24 24" style="width: 24px; height: 24px; fill: currentColor;">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                            </svg>
                            Yabai Bali Trip
                        </div>
                        <p class="footer-desc">
                            Your trusted travel companion for exploring the magical island of Bali. We help you create unforgettable memories with carefully curated experiences.
                        </p>
                        <div class="footer-contact">
                            <p>
                                <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z"/></svg>
                                Jl. Raya Ubud, Bali, Indonesia
                            </p>
                            <p>
                                <svg viewBox="0 0 24 24"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                                +62 812 3456 7890
                            </p>
                            <p>
                                <svg viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
                                hello@yabaibalitour.com
                            </p>
                        </div>
                    </div>
                    
                    <div>
                        <h4 class="footer-heading">Quick Links</h4>
                        <ul class="footer-links">
                            <li><a href="/about">About Us</a></li>
                            <li><a href="/tours">Tour Packages</a></li>
                            <li><a href="/gallery">Gallery</a></li>
                            <li><a href="/contact">Contact Us</a></li>
                        </ul>
                    </div>
                    
                    <div>
                        <h4 class="footer-heading">Top Destinations</h4>
                        <ul class="footer-links">
                            <li><a href="/?category=BALI+FULL+DAY+TOUR">Ubud Tours</a></li>
                            <li><a href="/?category=NUSA+PENIDA+TOUR">Nusa Penida</a></li>
                            <li><a href="/?category=BALI+ACTIVITIES">Water Sports</a></li>
                            <li><a href="/?category=BALI+FULL+DAY+TOUR">Uluwatu Sunset</a></li>
                            <li><a href="/?category=PRIVATE+CAR+CHARTER">Car Charter</a></li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="footer-heading">Support</h4>
                        <ul class="footer-links">
                            <li><a href="/contact">Help Center</a></li>
                            <li><a href="#">Travel Insurance</a></li>
                            <li><a href="#">Booking Support</a></li>
                        </ul>
                        <div class="footer-badges">
                            <div class="footer-badge">
                                <svg viewBox="0 0 24 24" style="fill: #22c55e;"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                                <div>
                                    <div style="font-weight: 600; font-size: 0.8rem; color: var(--color-dark);">Verified Agency</div>
                                    <div style="font-size: 0.7rem; color: var(--color-muted);">Trusted Partner</div>
                                </div>
                            </div>
                            <div class="footer-badge">
                                <svg viewBox="0 0 24 24" style="fill: #14B8A6;"><path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm-6 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3.1-9H8.9V6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2z"/></svg>
                                <div>
                                    <div style="font-weight: 600; font-size: 0.8rem; color: var(--color-dark);">SSL Secured</div>
                                    <div style="font-size: 0.7rem; color: var(--color-muted);">Safe & Secure</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer-bottom">
                    <div>
                        &copy; {{ date('Y') }} Yabai Bali Trip. All rights reserved. Made with ❤️ in Bali.
                    </div>
                    <div class="footer-bottom-links">
                        <a href="#">Privacy Policy</a>
                        <a href="#">Terms of Service</a>
                        <a href="#">Refund Policy</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Floating WhatsApp -->
    <a href="https://wa.me/6281234567890" class="floating-wa" target="_blank" rel="noopener noreferrer" aria-label="Chat on WhatsApp">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.396.86s.274.045.376-.043c.101-.087.433-.503.549-.678.116-.173.231-.145.39-.087s1.011.477 1.184.564c.173.087.289.129.332.202.043.073.043.423-.101.827z" />
        </svg>
    </a>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
</html>
