@extends('layouts.app')

@section('title', 'Our Products')
@section('meta_description',
    'Premium Indonesian green coffee beans — Arabica and Robusta from Central Java.
    Specialty-grade, traceable origin, export-ready.')

@section('content')

    {{-- Page Title --}}
    <div class="page-title dark-background" style="background-image: url('{{ asset('assets/img/page-title-bg.jpg') }}');">
        <div class="container position-relative">
            <h1>Our Products</h1>
            <p>Specialty Green Coffee Beans from Central Java, Indonesia</p>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="current">Products</li>
                </ol>
            </nav>
        </div>
    </div>

    {{-- Products Grid --}}
    <section id="products" class="services section">
        <div class="container">

            @php
                $categories = $products->groupBy(fn($p) => $p->specifications['category'] ?? 'Other');
            @endphp

            @foreach ($categories as $category => $items)
                <div class="mb-5" data-aos="fade-up">

                    {{-- Category heading --}}
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <h2 style="font-size: 1.4rem; margin: 0; color: var(--heading-color);">
                            {{ $category }} Coffee
                        </h2>
                        <div
                            style="flex: 1; height: 1px; background: color-mix(in srgb, var(--default-color), transparent 88%);">
                        </div>
                        <span style="font-size: 13px; color: color-mix(in srgb, var(--default-color), transparent 45%);">
                            {{ $items->count() }} {{ Str::plural('product', $items->count()) }}
                        </span>
                    </div>

                    <div class="row gy-4">
                        @foreach ($items as $product)
                            <div class="col-lg-4 col-md-6">
                                <div class="service-item h-100 d-flex flex-column"
                                    style="transition: transform 0.3s ease, box-shadow 0.3s ease;"
                                    onmouseover="this.style.transform='translateY(-4px)'; this.style.boxShadow='0 12px 32px rgba(38,30,20,0.12)'"
                                    onmouseout="this.style.transform=''; this.style.boxShadow=''">

                                    {{-- Thumbnail --}}
                                    <div style="overflow:hidden; border-radius: 4px 4px 0 0;">
                                        <img src="{{ asset($product->thumbnail ?? 'assets/img/products/default.jpg') }}"
                                            alt="{{ $product->name }}" class="img-fluid w-100"
                                            style="height: 200px; object-fit: cover; transition: transform 0.5s ease;"
                                            loading="lazy" onmouseover="this.style.transform='scale(1.05)'"
                                            onmouseout="this.style.transform=''">
                                    </div>

                                    <div class="p-4 flex-grow-1 d-flex flex-column">
                                        {{-- Category + Score badge --}}
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span
                                                style="font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.08em; color: var(--accent-color);">
                                                {{ $product->category }}
                                            </span>
                                            @if ($product->cupping_score)
                                                <span
                                                    style="
                  background: color-mix(in srgb, var(--accent-color), transparent 88%);
                  color: var(--accent-color);
                  font-size: 12px; font-weight: 700;
                  padding: 3px 10px; border-radius: 20px;">
                                                    ☕ {{ $product->cupping_score }} pts
                                                </span>
                                            @endif
                                        </div>

                                        <h3 class="service-heading" style="font-size: 1.1rem;">{{ $product->name }}</h3>
                                        <p class="flex-grow-1" style="font-size: 14px;">{{ $product->short_description }}
                                        </p>

                                        {{-- Mini specs --}}
                                        @php $specs = $product->specifications ?? []; @endphp
                                        <div class="row g-2 mt-2 mb-3"
                                            style="border-top: 1px solid color-mix(in srgb, var(--default-color), transparent 90%); padding-top: 12px; font-size: 13px;">
                                            @if (!empty($specs['origin']))
                                                <div class="col-6">
                                                    <div
                                                        style="color: color-mix(in srgb, var(--default-color), transparent 50%); font-size: 11px; text-transform: uppercase; letter-spacing: 0.06em;">
                                                        Origin</div>
                                                    <strong>{{ Str::limit($specs['origin'], 30) }}</strong>
                                                </div>
                                            @endif
                                            @if (!empty($specs['altitude']))
                                                <div class="col-6">
                                                    <div
                                                        style="color: color-mix(in srgb, var(--default-color), transparent 50%); font-size: 11px; text-transform: uppercase; letter-spacing: 0.06em;">
                                                        Altitude</div>
                                                    <strong>{{ $specs['altitude'] }}</strong>
                                                </div>
                                            @endif
                                            @if (!empty($specs['process']))
                                                <div class="col-6">
                                                    <div
                                                        style="color: color-mix(in srgb, var(--default-color), transparent 50%); font-size: 11px; text-transform: uppercase; letter-spacing: 0.06em;">
                                                        Process</div>
                                                    <strong>{{ $specs['process'] }}</strong>
                                                </div>
                                            @endif
                                            @if (!empty($specs['annual_capacity']))
                                                <div class="col-6">
                                                    <div
                                                        style="color: color-mix(in srgb, var(--default-color), transparent 50%); font-size: 11px; text-transform: uppercase; letter-spacing: 0.06em;">
                                                        Capacity</div>
                                                    <strong>{{ $specs['annual_capacity'] }}</strong>
                                                </div>
                                            @endif
                                        </div>

                                        {{-- Taste notes --}}
                                        @if (!empty($specs['taste_notes']))
                                            <div class="d-flex flex-wrap gap-1 mb-3">
                                                @foreach ($specs['taste_notes'] as $note)
                                                    <span
                                                        style="
                  font-size: 11px; padding: 2px 8px;
                  border-radius: 20px;
                  border: 1px solid color-mix(in srgb, var(--accent-color), transparent 70%);
                  color: var(--accent-color);">
                                                        {{ $note }}
                                                    </span>
                                                @endforeach
                                            </div>
                                        @endif

                                        <a href="{{ route('products.show', $product->slug) }}"
                                            class="d-flex align-items-center gap-1 mt-auto"
                                            style="font-weight: 600; color: var(--accent-color); font-size: 14px; text-decoration: none;">
                                            View Full Details <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach

        </div>
    </section>

    {{-- CTA Strip --}}
    {{-- @include('components-new.cta') --}}

@endsection
