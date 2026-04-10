{{-- resources/views/components/hero.blade.php --}}

<style>
    :root {
        --font-display: 'Instrument Serif', Georgia, serif;
        --color-primary: #5c3b1e;
        --color-primary-hover: #422a12;
        --color-primary-highlight: #e4d7c8;
        --color-accent: #c26a2a;
        --color-text-muted: #7a6e62;
        --color-divider: #d8d0c4;
        --color-surface-offset: #f2ece3;
    }

    #hero {
        min-height: calc(100dvh - 72px);
        background-color: var(--color-surface-offset);
        position: relative;
        overflow: hidden;
    }

    .hero-bg {
        position: absolute;
        inset: 0;
        background:
            radial-gradient(ellipse 70% 60% at 80% 50%, oklch(0.35 0.08 50 / 0.08) 0%, transparent 70%),
            radial-gradient(ellipse 50% 50% at 20% 80%, oklch(0.5 0.1 40 / 0.05) 0%, transparent 60%);
        pointer-events: none;
    }

    .hero-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.25rem 1rem;
        background: var(--color-primary-highlight);
        color: var(--color-primary);
        font-size: 0.75rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        border-radius: 9999px;
        border: 1px solid rgb(92 59 30 / 0.2);
    }

    .hero-title {
        font-family: var(--font-display);
        font-size: clamp(2.5rem, 1rem + 4vw, 5rem);
        line-height: 1.1;
        color: #261e14;
    }

    .hero-title em {
        font-style: italic;
        color: var(--color-accent);
    }

    .hero-subtitle {
        font-size: clamp(1.125rem, 1rem + 0.75vw, 1.5rem);
        color: var(--color-text-muted);
        line-height: 1.7;
        max-width: 52ch;
    }

    .btn-hero-primary {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.75rem 2rem;
        background: var(--color-primary);
        color: #faf8f4 !important;
        font-size: 0.875rem;
        font-weight: 600;
        border-radius: 9999px;
        text-decoration: none;
        border: none;
        box-shadow: 0 4px 12px rgb(0 0 0 / 0.10);
        transition: background 180ms, box-shadow 180ms;
    }

    .btn-hero-primary:hover {
        background: var(--color-primary-hover);
        box-shadow: 0 12px 32px rgb(0 0 0 / 0.14);
    }

    .btn-hero-secondary {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.75rem 2rem;
        background: transparent;
        color: #261e14 !important;
        font-size: 0.875rem;
        font-weight: 500;
        border-radius: 9999px;
        text-decoration: none;
        border: 1px solid var(--color-divider);
        transition: background 180ms;
    }

    .btn-hero-secondary:hover {
        background: var(--color-surface-offset);
    }

    .hero-stats {
        border-top: 1px solid var(--color-divider);
        padding-top: 3rem;
        margin-top: 3rem;
    }

    .hero-stat-value {
        font-family: var(--font-display);
        font-size: clamp(1.5rem, 1rem + 1.5vw, 2.25rem);
        color: var(--color-primary);
        line-height: 1;
        margin-bottom: 0.25rem;
    }

    .hero-stat-label {
        font-size: 0.75rem;
        color: var(--color-text-muted);
        text-transform: uppercase;
        letter-spacing: 0.08em;
    }

    .hero-image-wrap {
        border-radius: 1rem;
        overflow: hidden;
        aspect-ratio: 4/5;
        box-shadow: 0 12px 32px rgb(0 0 0 / 0.14);
    }

    .hero-image-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .hero-image-badge {
        position: absolute;
        bottom: 1.5rem;
        left: 1.5rem;
        background: rgb(250 248 244 / 0.95);
        backdrop-filter: blur(8px);
        padding: 0.75rem 1.25rem;
        border-radius: 0.75rem;
        border: 1px solid var(--color-divider);
        box-shadow: 0 4px 12px rgb(0 0 0 / 0.10);
    }

    .hero-image-badge-label {
        font-size: 0.75rem;
        color: var(--color-text-muted);
        text-transform: uppercase;
        letter-spacing: 0.08em;
        margin-bottom: 0.25rem;
    }

    .hero-image-badge-value {
        font-family: var(--font-display);
        font-size: clamp(1.125rem, 1rem + 0.75vw, 1.5rem);
        color: #261e14;
    }
</style>

<section id="hero" aria-labelledby="hero-heading" class="d-flex align-items-center py-5">

    <div class="hero-bg" aria-hidden="true"></div>

    <div class="container-xl position-relative">
        <div class="row align-items-center g-5">

            {{-- LEFT: Copy --}}
            <div class="col-lg-6">

                {{-- Badge --}}
                <div class="hero-badge mb-4">
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="currentColor" aria-hidden="true">
                        <circle cx="6" cy="6" r="6" />
                    </svg>
                    Kopi PbG · Java Slamet Coffee
                </div>

                {{-- Headline --}}
                <h1 class="hero-title mb-4" id="hero-heading">
                    @translate('Expertly Sourced,', 'home', 'hero.title_line1')<br>
                    <em>@translate('Naturally Perfected', 'home', 'hero.title_line2')</em>
                </h1>

                {{-- Subheading --}}
                <p class="hero-subtitle mb-5">
                    @translate('Premium Indonesian specialty coffee from the volcanic slopes of Mount Slamet, Central Java. Arabica & Robusta green beans — traceable, certified, and export-ready.', 'home', 'hero.subtitle')
                </p>

                {{-- CTA Buttons --}}
                <div class="d-flex flex-wrap align-items-center gap-3 mb-5">
                    <a href="{{ route('products.index') }}" class="btn-hero-primary">
                        @translate('Explore Our Products', 'home', 'hero.cta_primary')
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" aria-hidden="true">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </a>
                    <a href="{{ route('home') }}#contact" class="btn-hero-secondary">
                        @translate('Request a Sample', 'home', 'hero.cta_secondary')
                    </a>
                </div>

                {{-- Stats --}}
                <div class="hero-stats">
                    <div class="row g-4">
                        <div class="col-4">
                            <div class="hero-stat-value">740 MT</div>
                            <div class="hero-stat-label">@translate('Annual Capacity', 'home', 'hero.stat1_label')</div>
                        </div>
                        <div class="col-4">
                            <div class="hero-stat-value">770K</div>
                            <div class="hero-stat-label">@translate('Coffee Plants', 'home', 'hero.stat2_label')</div>
                        </div>
                        <div class="col-4">
                            <div class="hero-stat-value">4+</div>
                            <div class="hero-stat-label">@translate('Export Markets', 'home', 'hero.stat3_label')</div>
                        </div>
                    </div>
                </div>

            </div>

            {{-- RIGHT: Image --}}
            <div class="col-lg-6 d-none d-lg-block">
                <div class="hero-image-wrap position-relative">
                    <img src="{{ asset('storage/img/coffee/hero-coffee.jpg') }}" alt="@translate('Coffee farmer harvesting red coffee cherries on the slopes of Mount Slamet, Central Java', 'home', 'hero.img_alt')" width="600"
                        height="750" loading="eager" decoding="async">

                    <div class="hero-image-badge">
                        <div class="hero-image-badge-label">@translate('Cupping Score', 'home', 'hero.badge_label')</div>
                        <div class="hero-image-badge-value">84.25 Arabica</div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>
