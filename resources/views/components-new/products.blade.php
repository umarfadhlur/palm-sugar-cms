{{-- resources/views/components/home/products.blade.php --}}

<section id="products" class="products-snippet py-5">
    <div class="container">

        {{-- Header --}}
        <div class="products-snippet-header text-center mb-5" data-aos="fade-up">
            <span class="products-snippet-tag">
                @translate('What We Offer', 'home', 'products.tag')
            </span>
            <h2 class="products-snippet-title mt-3">
                @translate('Our', 'home', 'products.title')
                <em>@translate('Products', 'home', 'products.title_em')</em>
            </h2>
            <p class="products-snippet-subtitle mx-auto mt-3">
                @translate('Premium Indonesian specialty products — traceable, natural, and export-ready.', 'home', 'products.subtitle')
            </p>
        </div>

        {{-- Grid --}}
        <div class="row g-4 justify-content-center">
            @forelse ($featuredProducts as $product)
                <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <a href="{{ route('products.show', $product->slug) }}" class="product-card">

                        {{-- Thumbnail --}}
                        <div class="product-card-img-wrap">
                            @if ($product->thumbnail)
                                <img src="{{ asset('storage/' . $product->thumbnail) }}" alt="{{ $product->name }}"
                                    class="product-card-img" loading="lazy" decoding="async">
                            @else
                                <div class="product-card-img-placeholder">
                                    <i class="bi bi-box-seam"></i>
                                </div>
                            @endif
                        </div>

                        {{-- Body --}}
                        <div class="product-card-body">
                            <h3 class="product-card-name">{{ $product->name }}</h3>

                            @if ($product->short_description)
                                <p class="product-card-desc">{{ Str::limit($product->short_description, 80) }}</p>
                            @endif

                            {{-- Specs preview (max 2 items) --}}
                            @if ($product->specifications)
                                @php $specs = collect($product->specifications)->take(2); @endphp
                                <ul class="product-card-specs">
                                    @foreach ($specs as $key => $value)
                                        <li>
                                            <span class="spec-key">{{ $key }}</span>
                                            <span class="spec-val">{{ $value }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif

                            <div class="product-card-cta">
                                @translate('View Details', 'home', 'products.cta')
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" aria-hidden="true">
                                    <path d="M5 12h14M12 5l7 7-7 7" />
                                </svg>
                            </div>
                        </div>

                    </a>
                </div>
            @empty
                <div class="col-12 text-center text-muted py-5">
                    @translate('No featured products yet.', 'home', 'products.empty')
                </div>
            @endforelse
        </div>

        {{-- View All --}}
        @if ($featuredProducts->isNotEmpty())
            <div class="text-center mt-5" data-aos="fade-up">
                <a href="{{ route('products.index') }}" class="btn-view-all">
                    @translate('View All Products', 'home', 'products.view_all')
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" aria-hidden="true">
                        <path d="M5 12h14M12 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
        @endif

    </div>
</section>

<style>
    .products-snippet {
        background-color: #fff;
    }

    .products-snippet-tag {
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

    .products-snippet-title {
        font-family: var(--font-display);
        font-size: clamp(1.75rem, 1rem + 2vw, 2.75rem);
        color: #261e14;
        line-height: 1.15;
    }

    .products-snippet-title em {
        font-style: italic;
        color: #c26a2a;
    }

    .products-snippet-subtitle {
        color: #7a6e62;
        max-width: 52ch;
        line-height: 1.8;
    }

    /* Card */
    .product-card {
        display: flex;
        flex-direction: column;
        height: 100%;
        border-radius: 1rem;
        overflow: hidden;
        border: 1px solid #e8e0d5;
        background: #faf8f4;
        text-decoration: none;
        color: inherit;
        transition: transform 200ms, box-shadow 200ms;
        box-shadow: 0 2px 8px rgb(0 0 0 / 0.06);
    }

    .product-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 28px rgb(0 0 0 / 0.12);
        color: inherit;
    }

    .product-card-img-wrap {
        width: 100%;
        aspect-ratio: 4/3;
        overflow: hidden;
        background: #e4d7c8;
    }

    .product-card-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 300ms;
    }

    .product-card:hover .product-card-img {
        transform: scale(1.05);
    }

    .product-card-img-placeholder {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #a08060;
        font-size: 2.5rem;
    }

    .product-card-body {
        flex: 1;
        display: flex;
        flex-direction: column;
        padding: 1.25rem;
        gap: 0.5rem;
    }

    .product-card-name {
        font-family: var(--font-display);
        font-size: 1.1rem;
        font-weight: 700;
        color: #261e14;
        margin: 0;
    }

    .product-card-desc {
        font-size: 0.875rem;
        color: #7a6e62;
        line-height: 1.6;
        margin: 0;
        flex: 1;
    }

    /* Specs */
    .product-card-specs {
        list-style: none;
        padding: 0;
        margin: 0.25rem 0 0;
        display: flex;
        flex-direction: column;
        gap: 0.25rem;
    }

    .product-card-specs li {
        display: flex;
        justify-content: space-between;
        font-size: 0.775rem;
        border-bottom: 1px dashed #d8d0c4;
        padding-bottom: 0.25rem;
    }

    .spec-key {
        color: #7a6e62;
        text-transform: capitalize;
    }

    .spec-val {
        font-weight: 600;
        color: #261e14;
    }

    /* CTA inline */
    .product-card-cta {
        margin-top: 0.75rem;
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
        font-size: 0.8rem;
        font-weight: 700;
        color: #c26a2a;
        text-transform: uppercase;
        letter-spacing: 0.06em;
    }

    /* View All button */
    .btn-view-all {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.75rem 2rem;
        border: 2px solid #5c3b1e;
        color: #5c3b1e !important;
        font-size: 0.875rem;
        font-weight: 600;
        border-radius: 9999px;
        text-decoration: none;
        transition: background 180ms, color 180ms;
    }

    .btn-view-all:hover {
        background: #5c3b1e;
        color: #faf8f4 !important;
    }
</style>
