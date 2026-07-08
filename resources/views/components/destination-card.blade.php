@props(['id' => null, 'image', 'location', 'title', 'description', 'duration', 'price', 'tags' => [], 'whatsapp_number' => '6281234567890'])

<div class="destination-card">
    <div class="destination-img-wrapper">
        <a href="{{ $id ? url('/tours/' . $id) : '#' }}">
            <img src="{{ $image }}" alt="{{ $title }}" class="destination-img" loading="lazy">
        </a>
    </div>
    
    <div class="destination-content">
        <div class="dest-meta-top">
            <span class="dest-location">📍 {{ $location }}</span>
            <div class="dest-stars">
                ★★★★★
            </div>
        </div>
        
        @if(count($tags) > 0)
        <div class="dest-tags">
            @foreach($tags as $tag)
                <span class="dest-tag">{{ $tag }}</span>
            @endforeach
        </div>
        @endif

        <h3 class="destination-title">
            <a href="{{ $id ? url('/tours/' . $id) : '#' }}" style="color: inherit; text-decoration: none;">
                {{ $title }}
            </a>
        </h3>
        <p class="destination-desc">{{ Str::limit($description, 100) }}</p>
        
        <div class="destination-footer">
            <span class="dest-duration">🕐 {{ $duration }}</span>
            <span class="destination-price">{{ $price }}</span>
        </div>
    </div>
    
    <div class="book-btn-wrapper">
        <a href="https://wa.me/{{ $whatsapp_number }}?text={{ urlencode('Hello! I want to book the ' . $title . ' package.') }}" 
           class="btn-book-full" 
           target="_blank" 
           rel="noopener noreferrer">
            {{ __('Book Now') }} →
        </a>
    </div>
</div>
