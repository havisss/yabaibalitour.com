<x-layout>
    <x-slot:title>
        {{ __('Contact Us') }}
    </x-slot:title>

    <!-- Hero Header -->
    <section class="section section-dark" style="padding-top: 180px; padding-bottom: 120px; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; position: relative; overflow: hidden;">
        <!-- Soft Glowing Background Blobs -->
        <div style="position: absolute; top: 10%; left: 5%; width: 400px; height: 400px; background: rgba(59, 130, 246, 0.25); border-radius: 50%; filter: blur(100px); z-index: 1; animation: float 10s ease-in-out infinite;"></div>
        <div style="position: absolute; bottom: 10%; right: 5%; width: 500px; height: 500px; background: rgba(20, 184, 166, 0.2); border-radius: 50%; filter: blur(120px); z-index: 1; animation: float 12s ease-in-out infinite reverse;"></div>
        
        <div class="container" style="position: relative; z-index: 10;">
            <h1 class="section-title" data-animate="fade-up" style="font-size: clamp(2.5rem, 4vw, 4rem); margin-bottom: 1rem; font-weight: 800; letter-spacing: -1px;">
                <span style="color: #fff;">{{ __('Get In') }}</span>
                <span style="background: linear-gradient(135deg, var(--color-primary), #0ea5e9); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">{{ __('Touch') }}</span>
            </h1>
            <p class="section-desc" data-animate="fade-up" data-animate-delay="100" style="max-width: 600px; margin: 0 auto; font-size: 1.15rem; line-height: 1.8; color: #cbd5e1;">
                {{ __('Have a question or want to customize your tour? We are here to help you 24/7.') }}
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

    <!-- Main Content Section -->
    <section class="section section-bg" style="padding-top: 60px; padding-bottom: 100px; background-color: #f8fafc; position: relative;">
        <!-- Subtle Dot Pattern -->
        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-image: radial-gradient(rgba(0,0,0,0.05) 2px, transparent 2px); background-size: 30px 30px; z-index: 0;"></div>
        
        <div class="container" style="position: relative; z-index: 5;">
            <div style="display: flex; flex-wrap: wrap; gap: 40px;">
                
                <!-- Contact Information -->
                <div style="flex: 1; min-width: 300px;" data-animate="fade-up">
                    <h2 style="font-size: 2rem; font-weight: 800; color: var(--color-dark); margin-bottom: 20px;">Contact Information</h2>
                    <p style="color: var(--text-muted); font-size: 1.1rem; line-height: 1.7; margin-bottom: 40px;">
                        Reach out to us via WhatsApp for the fastest response. You can also send us an email or visit our office in Bali.
                    </p>
                    
                    <div style="display: flex; flex-direction: column; gap: 30px;">
                        <!-- WhatsApp Card -->
                        <a href="https://wa.me/6281234567890" target="_blank" style="text-decoration: none; display: flex; align-items: flex-start; gap: 20px; background: #fff; padding: 25px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.03); transition: transform 0.3s ease, box-shadow 0.3s ease;" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.08)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 30px rgba(0,0,0,0.03)';">
                            <div style="width: 60px; height: 60px; border-radius: 16px; background: rgba(34, 197, 94, 0.1); color: #22c55e; display: flex; justify-content: center; align-items: center; flex-shrink: 0;">
                                <svg viewBox="0 0 24 24" width="32" height="32" fill="currentColor"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.396.86s.274.045.376-.043c.101-.087.433-.503.549-.678.116-.173.231-.145.39-.087s1.011.477 1.184.564c.173.087.289.129.332.202.043.073.043.423-.101.827z"/></svg>
                            </div>
                            <div>
                                <h4 style="font-size: 1.2rem; font-weight: 700; color: var(--color-dark); margin-bottom: 5px;">WhatsApp Us</h4>
                                <p style="color: var(--text-muted); font-size: 1rem; margin-bottom: 5px;">Fastest response for booking and inquiries.</p>
                                <strong style="color: var(--color-primary); font-size: 1.1rem;">+62 812 3456 7890</strong>
                            </div>
                        </a>

                        <!-- Email Card -->
                        <a href="mailto:hello@yabaibalitour.com" style="text-decoration: none; display: flex; align-items: flex-start; gap: 20px; background: #fff; padding: 25px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.03); transition: transform 0.3s ease, box-shadow 0.3s ease;" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.08)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 30px rgba(0,0,0,0.03)';">
                            <div style="width: 60px; height: 60px; border-radius: 16px; background: rgba(14, 165, 233, 0.1); color: var(--color-primary); display: flex; justify-content: center; align-items: center; flex-shrink: 0;">
                                <svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            </div>
                            <div>
                                <h4 style="font-size: 1.2rem; font-weight: 700; color: var(--color-dark); margin-bottom: 5px;">Email Us</h4>
                                <p style="color: var(--text-muted); font-size: 1rem; margin-bottom: 5px;">We will get back to you within 24 hours.</p>
                                <strong style="color: var(--color-primary); font-size: 1.1rem;">hello@yabaibalitour.com</strong>
                            </div>
                        </a>

                        <!-- Address Card -->
                        <div style="display: flex; align-items: flex-start; gap: 20px; background: #fff; padding: 25px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.03);">
                            <div style="width: 60px; height: 60px; border-radius: 16px; background: rgba(244, 63, 94, 0.1); color: #f43f5e; display: flex; justify-content: center; align-items: center; flex-shrink: 0;">
                                <svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.243-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            </div>
                            <div>
                                <h4 style="font-size: 1.2rem; font-weight: 700; color: var(--color-dark); margin-bottom: 5px;">Office Location</h4>
                                <p style="color: var(--text-muted); font-size: 1rem; margin-bottom: 5px;">Jl. Raya Ubud, Gianyar<br>Bali, Indonesia 80571</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div style="flex: 1.5; min-width: 300px;" data-animate="fade-up" data-animate-delay="100">
                    <div style="background: #fff; padding: 40px; border-radius: 24px; box-shadow: 0 20px 40px rgba(0,0,0,0.05);">
                        <h3 style="font-size: 1.8rem; font-weight: 800; color: var(--color-dark); margin-bottom: 25px;">Send Us A Message</h3>
                        
                        <form style="display: flex; flex-direction: column; gap: 20px;" action="mailto:hello@yabaibalitour.com" method="post" enctype="text/plain">
                            <div style="display: flex; gap: 20px; flex-wrap: wrap;">
                                <div style="flex: 1; min-width: 200px;">
                                    <label style="display: block; font-weight: 600; margin-bottom: 8px; color: var(--color-dark); font-size: 0.95rem;">Your Name <span style="color: red;">*</span></label>
                                    <input type="text" name="Name" required placeholder="John Doe" style="width: 100%; padding: 14px 20px; border: 1px solid #e2e8f0; border-radius: 12px; font-size: 1rem; color: var(--color-dark); outline: none; transition: border-color 0.3s;" onfocus="this.style.borderColor='var(--color-primary)'" onblur="this.style.borderColor='#e2e8f0'">
                                </div>
                                <div style="flex: 1; min-width: 200px;">
                                    <label style="display: block; font-weight: 600; margin-bottom: 8px; color: var(--color-dark); font-size: 0.95rem;">Email Address <span style="color: red;">*</span></label>
                                    <input type="email" name="Email" required placeholder="john@example.com" style="width: 100%; padding: 14px 20px; border: 1px solid #e2e8f0; border-radius: 12px; font-size: 1rem; color: var(--color-dark); outline: none; transition: border-color 0.3s;" onfocus="this.style.borderColor='var(--color-primary)'" onblur="this.style.borderColor='#e2e8f0'">
                                </div>
                            </div>
                            
                            <div>
                                <label style="display: block; font-weight: 600; margin-bottom: 8px; color: var(--color-dark); font-size: 0.95rem;">Subject</label>
                                <input type="text" name="Subject" placeholder="Tour Inquiry / Custom Package" style="width: 100%; padding: 14px 20px; border: 1px solid #e2e8f0; border-radius: 12px; font-size: 1rem; color: var(--color-dark); outline: none; transition: border-color 0.3s;" onfocus="this.style.borderColor='var(--color-primary)'" onblur="this.style.borderColor='#e2e8f0'">
                            </div>

                            <div>
                                <label style="display: block; font-weight: 600; margin-bottom: 8px; color: var(--color-dark); font-size: 0.95rem;">Message <span style="color: red;">*</span></label>
                                <textarea name="Message" required placeholder="Tell us about your trip..." rows="5" style="width: 100%; padding: 14px 20px; border: 1px solid #e2e8f0; border-radius: 12px; font-size: 1rem; color: var(--color-dark); outline: none; transition: border-color 0.3s; resize: vertical;" onfocus="this.style.borderColor='var(--color-primary)'" onblur="this.style.borderColor='#e2e8f0'"></textarea>
                            </div>

                            <button type="submit" style="background: linear-gradient(135deg, var(--color-primary), #0ea5e9); color: #fff; font-weight: 600; font-size: 1.1rem; padding: 16px 32px; border: none; border-radius: 12px; cursor: pointer; transition: transform 0.3s, box-shadow 0.3s; box-shadow: 0 10px 20px rgba(14, 165, 233, 0.3); margin-top: 10px;" onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 15px 25px rgba(14, 165, 233, 0.4)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 20px rgba(14, 165, 233, 0.3)';">
                                Send Message
                            </button>
                        </form>
                    </div>
                </div>

            </div>

            <!-- Map Section -->
            <div style="margin-top: 60px; border-radius: 24px; overflow: hidden; box-shadow: 0 20px 40px rgba(0,0,0,0.1); border: 8px solid #fff;" data-animate="zoom-in">
                <iframe 
                    src="https://maps.google.com/maps?q=Ubud,%20Bali&t=&z=13&ie=UTF8&iwloc=&output=embed" 
                    width="100%" 
                    height="450" 
                    style="border:0; display: block;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

        </div>
    </section>

</x-layout>
