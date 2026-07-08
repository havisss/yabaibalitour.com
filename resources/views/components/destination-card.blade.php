@props(['id' => null, 'image', 'location', 'title', 'description', 'duration', 'price', 'tags' => [], 'whatsapp_number' => '6281234567890'])

<div class="destination-card">
    <div class="destination-img-wrapper">
        <a href="{{ $id ? url('/tours/' . $id) : '#' }}">
            <img src="{{ $image }}" alt="{{ $title }}" class="destination-img" loading="lazy">
        </a>
    </div>
    
    <div class="destination-content">
        <div class="dest-meta-top">
            <span class="dest-location">{{ $location }}</span>
            <div class="dest-stars">
                &#9733;&#9733;&#9733;&#9733;&#9733;
            </div>
        </div>
        
        @if(count($tags) > 0)
        <div class="dest-tags">
            @foreach($tags as $tag)
                <span class="dest-tag">
                    @if(str_contains(strtolower($tag), 'private'))
                        <!-- User icon -->
                        <svg viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
                    @else
                        <!-- Car icon -->
                        <svg viewBox="0 0 24 24"><path d="M18.92 6.01C18.72 5.42 18.16 5 17.5 5h-11c-.66 0-1.21.42-1.42 1.01L3 12v8c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h12v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-8l-2.08-5.99zM6.5 16c-.83 0-1.5-.67-1.5-1.5S5.67 13 6.5 13s1.5.67 1.5 1.5S7.33 16 6.5 16zm11 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM5 11l1.5-4.5h11L19 11H5z"/></svg>
                    @endif
                    {{ $tag }}
                </span>
            @endforeach
        </div>
        @endif

        <h3 class="destination-title">
            <a href="{{ $id ? url('/tours/' . $id) : '#' }}" style="color: inherit; text-decoration: none;">
                {{ $title }}
            </a>
        </h3>
        <p class="destination-desc">{{ $description }}</p>
        
        <div class="destination-footer">
            <span class="dest-duration">{{ $duration }}</span>
            <span class="destination-price">{{ $price }}</span>
        </div>
    </div>
    
    <div class="book-btn-wrapper">
        <a href="https://wa.me/{{ $whatsapp_number }}?text={{ urlencode('Hello! I want to book the ' . $title . ' package.') }}" 
           class="btn-book-full" 
           target="_blank" 
           rel="noopener noreferrer">
            {{ __('Book Now') }}
        </a>
    </div>
</div>
