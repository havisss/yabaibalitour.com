<x-layout>
    <x-slot:title>
        {{ __('Airport Transfer') }}
    </x-slot:title>

    <div class="page-wrapper" style="background: #ffffff; padding-top: 120px; padding-bottom: 80px;">
        <div class="container" style="max-width: 1200px; margin: 0 auto;">
            
            <div style="display: flex; flex-wrap: wrap; gap: 40px; align-items: flex-start;">
                
                <!-- Left Column (approx 65%) -->
                <div style="flex: 1 1 60%; min-width: 300px;" data-animate="fade-up">
                    <p style="font-size: 1.05rem; color: #4b5563; line-height: 1.8; margin-bottom: 25px;">
                        {{ __('Enjoy the comfort of our professional and reliable Airport Transfer service. We are ready to pick you up from the airport to your destination, or drop you off from your location to Ngurah Rai Airport a convenient and timely transport solution to start or end your journey in Bali.') }}
                    </p>

                    <h3 style="font-size: 1.3rem; font-weight: bold; color: #111827; margin-bottom: 10px;">{{ __('Vehicle Standard MPV') }}</h3>
                    <p style="font-size: 1.05rem; color: #4b5563; line-height: 1.6; margin-bottom: 40px;">
                        <strong style="color: #111827;">{{ __('Vehicle Capacity:') }}</strong><br>
                        {{ __('4 passengers with luggage') }}<br>
                        {{ __('6 passengers without luggage') }}
                    </p>

                    <h2 style="font-size: 1.6rem; font-weight: bold; color: #111827; margin-bottom: 20px;">{{ __('Ngurah Rai Airport Transfer: Pickup or Drop-off Across Bali') }}</h2>
                    
                    <div style="overflow-x: auto;">
                        <table style="width: 100%; border-collapse: collapse; border: 1px solid #e5e7eb; font-size: 0.95rem;">
                            <thead>
                                <tr style="background-color: #0ea5e9; color: white;">
                                    <th style="padding: 12px 15px; text-align: left; font-weight: 600; border: 1px solid #e5e7eb;">{{ __('Location') }}</th>
                                    <th style="padding: 12px 15px; text-align: left; font-weight: 600; border: 1px solid #e5e7eb;">{{ __('Price') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $prices = [
                                        ['loc' => 'Kuta', 'price' => 'IDR 200K'],
                                        ['loc' => 'Jimbaran – Legian', 'price' => 'IDR 250K'],
                                        ['loc' => 'Nusa Dua – Seminyak – Sanur', 'price' => 'IDR 350K'],
                                        ['loc' => 'Uluwatu – Canggu', 'price' => 'IDR 350K'],
                                        ['loc' => 'Ubud', 'price' => 'IDR 400K'],
                                        ['loc' => 'Tegallalang', 'price' => 'IDR 500K'],
                                        ['loc' => 'Padangbai', 'price' => 'IDR 600K'],
                                        ['loc' => 'Amed', 'price' => 'IDR 800K'],
                                        ['loc' => 'Candidasa', 'price' => 'IDR 750K'],
                                        ['loc' => 'Tulamben', 'price' => 'IDR 850K'],
                                        ['loc' => 'Lovina', 'price' => 'IDR 1.000K'],
                                        ['loc' => 'Gilimanuk – Pemuteran', 'price' => 'IDR 1.200K']
                                    ];
                                @endphp
                                @foreach($prices as $item)
                                <tr style="background-color: #fff;">
                                    <td style="padding: 12px 15px; border: 1px solid #e5e7eb; color: #4b5563;">{{ $item['loc'] }}</td>
                                    <td style="padding: 12px 15px; border: 1px solid #e5e7eb; color: #4b5563;">{{ $item['price'] }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Right Column (approx 35%) -->
                <div style="flex: 1 1 30%; min-width: 300px;" data-animate="fade-up" data-animate-delay="100">
                    
                    <!-- Includes -->
                    <h3 style="font-size: 1.4rem; font-weight: bold; color: #111827; margin-bottom: 15px;">{{ __('Includes') }}</h3>
                    <ul style="list-style: none; padding: 0; margin: 0 0 30px 0; color: #4b5563; line-height: 2;">
                        <li style="display: flex; align-items: center; gap: 10px;"><svg width="16" height="16" fill="#0ea5e9" viewBox="0 0 512 512"><path d="M470.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L192 338.7 425.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg> {{ __('English Speaking Driver') }}</li>
                        <li style="display: flex; align-items: center; gap: 10px;"><svg width="16" height="16" fill="#0ea5e9" viewBox="0 0 512 512"><path d="M470.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L192 338.7 425.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg> {{ __('Mineral Water and Snacks in the Car') }}</li>
                        <li style="display: flex; align-items: center; gap: 10px;"><svg width="16" height="16" fill="#0ea5e9" viewBox="0 0 512 512"><path d="M470.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L192 338.7 425.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg> {{ __('Private Transportation') }}</li>
                        <li style="display: flex; align-items: center; gap: 10px;"><svg width="16" height="16" fill="#0ea5e9" viewBox="0 0 512 512"><path d="M470.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L192 338.7 425.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg> {{ __('Air conditioned Vehicles') }}</li>
                        <li style="display: flex; align-items: center; gap: 10px;"><svg width="16" height="16" fill="#0ea5e9" viewBox="0 0 512 512"><path d="M470.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L192 338.7 425.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg> {{ __('Parking/Toll Fees') }}</li>
                        <li style="display: flex; align-items: center; gap: 10px;"><svg width="16" height="16" fill="#0ea5e9" viewBox="0 0 512 512"><path d="M470.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L192 338.7 425.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg> {{ __('Fuel') }}</li>
                    </ul>

                    <!-- Excludes -->
                    <h3 style="font-size: 1.4rem; font-weight: bold; color: #111827; margin-bottom: 15px;">{{ __('Excludes') }}</h3>
                    <ul style="list-style: none; padding: 0; margin: 0 0 30px 0; color: #4b5563; line-height: 2;">
                        <li style="display: flex; align-items: center; gap: 10px;"><svg width="16" height="16" fill="#0ea5e9" viewBox="0 0 384 512"><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg> {{ __('Personal Expenses') }}</li>
                    </ul>

                    <!-- Note -->
                    <h3 style="font-size: 1.4rem; font-weight: bold; color: #111827; margin-bottom: 15px;">{{ __('Note') }}</h3>
                    <ul style="list-style: none; padding: 0; margin: 0 0 40px 0; color: #4b5563; line-height: 2;">
                        <li style="display: flex; align-items: flex-start; gap: 10px;"><svg width="16" height="16" fill="#0ea5e9" style="margin-top: 5px; flex-shrink: 0;" viewBox="0 0 512 512"><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/></svg> {{ __('Don\'t hesitate to contact us for any inquiries.') }}</li>
                    </ul>

                    <!-- Booking Box -->
                    <div style="border: 1px solid #e5e7eb; border-radius: 12px; padding: 25px; margin-bottom: 25px; background: #fafafa; box-shadow: 0 4px 15px rgba(0,0,0,0.03);">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 15px; color: #4b5563;">
                            <svg width="20" height="20" fill="none" stroke="#0ea5e9" stroke-width="2" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                            <span style="font-size: 0.95rem;">{{ __('Safe & Protected Payment') }}</span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 25px; color: #4b5563;">
                            <svg width="20" height="20" fill="none" stroke="#0ea5e9" stroke-width="2" viewBox="0 0 24 24"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                            <span style="font-size: 0.95rem;">{{ __('Fast & Hassle Free Payment') }}</span>
                        </div>
                        <a href="https://wa.me/6281234567890?text={{ urlencode('Hello Bos Muda Bali Tour, I want to book an Airport Transfer.') }}" style="display: inline-flex; align-items: center; gap: 8px; background: #0ea5e9; color: #fff; padding: 10px 20px; border-radius: 6px; text-decoration: none; font-weight: 500; font-size: 0.95rem;">
                            {{ __('Book Now') }} 
                            <svg width="18" height="18" fill="currentColor" viewBox="0 0 448 512"><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-2.1-3.6-.2-5.5 1.7-7.4 1.5-1.5 3.3-3.9 5-5.8 1.6-1.9 2.2-3.2 3.2-5.5 1.1-2.2 .5-4.2-.5-5.5s-12.5-30.1-17.1-41.2c-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>
                        </a>
                    </div>

                    <!-- Trust Box -->
                    <div style="border: 1px solid #e5e7eb; border-radius: 12px; padding: 30px 20px; text-align: center; background: #fafafa; box-shadow: 0 4px 15px rgba(0,0,0,0.03);">
                        <svg width="40" height="40" fill="#0ea5e9" style="margin-bottom: 15px;" viewBox="0 0 512 512"><path d="M256 0c11.4 0 21.9 6.2 27.4 16.2l39 70.8 79.4 17.5c11.9 2.6 21.3 11.5 24.5 23.3l19 69.8 63.8 36.4c10.3 5.9 16.9 16.6 16.9 28.5s-6.6 22.6-16.9 28.5l-63.8 36.4-19 69.8c-3.2 11.8-12.6 20.7-24.5 23.3l-79.4 17.5-39 70.8c-5.5 10-16 16.2-27.4 16.2s-21.9-6.2-27.4-16.2l-39-70.8-79.4-17.5c-11.9-2.6-21.3-11.5-24.5-23.3l-19-69.8L28.1 292.5C17.8 286.6 11.2 275.9 11.2 264s6.6-22.6 16.9-28.5l63.8-36.4 19-69.8c3.2-11.8 12.6-20.7 24.5-23.3L215.1 87l39-70.8C259.6 6.2 270.1 0 281.5 0h-25.5zm-83.3 241.6c-13.6 11.4-15.3 31.8-3.9 45.4l51.5 61.8c5.4 6.5 13.5 10.2 22 10.2s16.6-3.7 22-10.2l99.5-119.4c11.4-13.6 9.6-34-3.9-45.4s-34-9.6-45.4 3.9l-72.2 86.6-24.2-29.1c-11.4-13.6-31.8-15.3-45.4-3.9z"/></svg>
                        <h3 style="font-size: 1.3rem; font-weight: bold; color: #111827; margin-bottom: 25px; line-height: 1.4;">{{ __('Explore Bali with Us Trusted Tour Provider') }}</h3>
                        
                        <div style="background: #0ea5e9; color: #fff; padding: 10px; border-radius: 6px; margin-bottom: 10px; font-size: 0.85rem; font-weight: 500;">
                            {{ __('Friendly Local Drivers, Insightful Tours') }}
                        </div>
                        <div style="background: #0ea5e9; color: #fff; padding: 10px; border-radius: 6px; margin-bottom: 10px; font-size: 0.85rem; font-weight: 500;">
                            {{ __('24/7 Support, Anytime Assistance') }}
                        </div>
                        <div style="background: #0ea5e9; color: #fff; padding: 10px; border-radius: 6px; font-size: 0.85rem; font-weight: 500;">
                            {{ __('Transparent & Affordable Pricing') }}
                        </div>
                    </div>

                </div>
            </div>
            
        </div>
    </div>
</x-layout>
