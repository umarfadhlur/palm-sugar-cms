{{-- resources/views/components/home/testimonials-snippet.blade.php --}}

@php
    $testimonials = [
        [
            'name' => 'Ahmad Fauzi',
            'company' => 'PT. Nusantara Trading Co.',
            'country' => 'Indonesia',
            'flag' => '🇮🇩',
            'avatar' => null,
            'rating' => 5,
            'message' =>
                'Kualitas kopi Arabica dari Java Slamet benar-benar luar biasa. Aroma dan cita rasanya konsisten di setiap shipment. Mitra terpercaya untuk bisnis kami.',
        ],
        [
            'name' => 'Hiroshi Tanaka',
            'company' => 'Tanaka Coffee Import',
            'country' => 'Japan',
            'flag' => '🇯🇵',
            'avatar' => null,
            'rating' => 5,
            'message' =>
                'We have been importing Java Slamet Robusta for 2 years. The quality is always excellent and the export documentation is always complete and on time.',
        ],
        [
            'name' => 'Mohammed Al-Rashid',
            'company' => 'Al-Rashid Commodities LLC',
            'country' => 'UAE',
            'flag' => '🇦🇪',
            'avatar' => null,
            'rating' => 5,
            'message' =>
                'Outstanding product quality and very professional team. Their traceable sourcing process gives us full confidence in every order we place.',
        ],
    ];
@endphp

<section id="testimonials" class="testimonials-snippet py-5">
    <div class="container">

        {{-- Header --}}
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="testimonials-tag">
                @translate('What Clients Say', 'home', 'testimonials.tag')
            </span>
            <h2 class="testimonials-title mt-3">
                @translate('Trusted by', 'home', 'testimonials.title')
                <em>@translate('Buyers Worldwide', 'home', 'testimonials.title_em')</em>
            </h2>
            <p class="testimonials-subtitle mx-auto mt-3">
                @translate('Our partners across Asia, the Middle East, and beyond share their experience working with us.', 'home', 'testimonials.subtitle')
            </p>
        </div>

        {{-- Cards --}}
        <div class="row g-4 justify-content-center">
            @foreach ($testimonials as $i => $t)
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                    <div class="testimonial-card">

                        {{-- Quote icon --}}
                        <div class="testimonial-quote-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="#c26a2a" opacity="0.2"
                                aria-hidden="true">
                                <path
                                    d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                            </svg>
                        </div>

                        {{-- Stars --}}
                        <div class="testimonial-stars mb-3">
                            @for ($s = 0; $s < $t['rating']; $s++)
                                <i class="bi bi-star-fill"></i>
                            @endfor
                        </div>

                        {{-- Message --}}
                        <p class="testimonial-message">"{{ $t['message'] }}"</p>

                        {{-- Author --}}
                        <div class="testimonial-author mt-4">
                            <div class="testimonial-avatar">
                                @if ($t['avatar'])
                                    <img src="{{ asset('storage/' . $t['avatar']) }}" alt="{{ $t['name'] }}">
                                @else
                                    <span>{{ strtoupper(substr($t['name'], 0, 1)) }}</span>
                                @endif
                            </div>
                            <div>
                                <div class="testimonial-name">{{ $t['name'] }}</div>
                                <div class="testimonial-company">{{ $t['company'] }} {{ $t['flag'] }}</div>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>

<style>
    .testimonials-snippet {
        background-color: #faf8f4;
    }

    .testimonials-tag {
        display: inline-flex;
        align-items: center;
        padding: 0.25rem 1rem;
        background: #e4d7c8;
        color: #5c3b1e;
        font-size: 0.75rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        border-radius: 9999px;
    }

    .testimonials-title {
        font-family: var(--font-display);
        font-size: clamp(1.75rem, 1rem + 2vw, 2.75rem);
        color: #261e14;
        line-height: 1.15;
    }

    .testimonials-title em {
        font-style: italic;
        color: #c26a2a;
    }

    .testimonials-subtitle {
        color: #7a6e62;
        max-width: 52ch;
        line-height: 1.8;
    }

    /* Card */
    .testimonial-card {
        position: relative;
        background: #fff;
        border: 1px solid #e8e0d5;
        border-radius: 1rem;
        padding: 2rem 1.75rem 1.75rem;
        height: 100%;
        display: flex;
        flex-direction: column;
        box-shadow: 0 2px 8px rgb(0 0 0 / 0.05);
        transition: box-shadow 200ms, transform 200ms;
    }

    .testimonial-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 28px rgb(0 0 0 / 0.10);
    }

    .testimonial-quote-icon {
        position: absolute;
        top: 1.25rem;
        right: 1.5rem;
    }

    .testimonial-stars {
        display: flex;
        gap: 0.2rem;
        color: #f5a623;
        font-size: 0.85rem;
    }

    .testimonial-message {
        font-size: 0.925rem;
        color: #4a3f35;
        line-height: 1.8;
        flex: 1;
        margin: 0;
    }

    .testimonial-author {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding-top: 1.25rem;
        border-top: 1px solid #e8e0d5;
    }

    .testimonial-avatar {
        width: 44px;
        height: 44px;
        border-radius: 50%;
        background: #e4d7c8;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: 1rem;
        color: #5c3b1e;
        flex-shrink: 0;
        overflow: hidden;
    }

    .testimonial-avatar img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .testimonial-name {
        font-weight: 700;
        font-size: 0.9rem;
        color: #261e14;
    }

    .testimonial-company {
        font-size: 0.775rem;
        color: #7a6e62;
    }
</style>
