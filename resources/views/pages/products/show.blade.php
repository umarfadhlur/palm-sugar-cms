@extends('layouts.app')

@section('title', $product->name)
@section('meta_description', $product->short_description)

@section('content')

    @php $specs = $product->specifications ?? []; @endphp

    {{-- Page Title --}}
    <div class="page-title dark-background" style="background-image: url('{{ asset('assets/img/page-title-bg.jpg') }}');">
        <div class="container position-relative">
            <h1>{{ $product->name }}</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('products.index') }}">Products</a></li>
                    <li class="current">{{ $product->name }}</li>
                </ol>
            </nav>
        </div>
    </div>

    <section class="section">
        <div class="container">
            <div class="row gy-5">

                {{-- ── LEFT: Image + Quick Specs ────────────────── --}}
                <div class="col-lg-5" data-aos="fade-right">

                    {{-- Main image --}}
                    <img src="{{ asset($product->thumbnail ?? 'assets/img/products/default.jpg') }}"
                        alt="{{ $product->name }}" class="img-fluid rounded w-100 mb-4"
                        style="box-shadow: 0 8px 32px rgba(38,30,20,0.12); object-fit: cover; max-height: 380px;">

                    {{-- Quick Specs Card --}}
                    <div
                        style="
          background: var(--surface-color);
          border: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
          border-radius: 8px;
          padding: 24px;">

                        <h5
                            style="font-size: 14px; text-transform: uppercase; letter-spacing: 0.1em; color: color-mix(in srgb, var(--default-color), transparent 40%); margin-bottom: 16px;">
                            Quick Specifications
                        </h5>

                        <table class="w-100" style="font-size: 14px; border-collapse: collapse;">
                            @php
                                $quickSpecs = [
                                    'category' => 'Category',
                                    'origin' => 'Origin',
                                    'altitude' => 'Altitude',
                                    'process' => 'Process',
                                    'screen_size' => 'Screen Size',
                                    'moisture' => 'Moisture',
                                    'defect_rate' => 'Defect Rate',
                                    'annual_capacity' => 'Annual Capacity',
                                    'min_order' => 'Min. Order',
                                ];
                            @endphp
                            @foreach ($quickSpecs as $key => $label)
                                @if (!empty($specs[$key]))
                                    <tr
                                        style="border-bottom: 1px solid color-mix(in srgb, var(--default-color), transparent 92%);">
                                        <td
                                            style="padding: 9px 0; color: color-mix(in srgb, var(--default-color), transparent 45%); width: 42%; vertical-align: top;">
                                            {{ $label }}
                                        </td>
                                        <td style="padding: 9px 0; font-weight: 600; color: var(--heading-color);">
                                            {{ $specs[$key] }}
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </table>

                        {{-- Taste notes --}}
                        @if (!empty($specs['taste_notes']))
                            <div class="mt-3">
                                <div
                                    style="font-size: 12px; text-transform: uppercase; letter-spacing: 0.08em; color: color-mix(in srgb, var(--default-color), transparent 45%); margin-bottom: 8px;">
                                    Taste Notes
                                </div>
                                <div class="d-flex flex-wrap gap-2">
                                    @foreach ($specs['taste_notes'] as $note)
                                        <span
                                            style="
                font-size: 12px; padding: 4px 12px;
                border-radius: 20px;
                border: 1px solid color-mix(in srgb, var(--accent-color), transparent 65%);
                color: var(--accent-color); font-weight: 500;">
                                            {{ $note }}
                                        </span>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        {{-- Certifications --}}
                        @if (!empty($specs['certifications']))
                            <div class="mt-3">
                                <div
                                    style="font-size: 12px; text-transform: uppercase; letter-spacing: 0.08em; color: color-mix(in srgb, var(--default-color), transparent 45%); margin-bottom: 8px;">
                                    Certifications & Documents
                                </div>
                                <div class="d-flex flex-wrap gap-2">
                                    @foreach ($specs['certifications'] as $cert)
                                        <span
                                            style="
                font-size: 12px; padding: 4px 10px;
                background: color-mix(in srgb, var(--accent-color), transparent 90%);
                border-radius: 4px; color: var(--accent-color); font-weight: 600;">
                                            <i class="bi bi-patch-check-fill me-1"></i>{{ $cert }}
                                        </span>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        {{-- Packaging --}}
                        @if (!empty($specs['packaging']))
                            <div class="mt-3"
                                style="font-size: 13px; color: color-mix(in srgb, var(--default-color), transparent 35%);">
                                <i class="bi bi-box-seam me-1"></i>
                                <strong>Packaging:</strong> {{ $specs['packaging'] }}
                            </div>
                        @endif

                    </div>

                    {{-- Brochure download --}}
                    @if ($product->brochure_file)
                        <a href="{{ asset($product->brochure_file) }}" download
                            class="d-flex align-items-center justify-content-center gap-2 mt-3 p-3"
                            style="
            border: 1px solid color-mix(in srgb, var(--accent-color), transparent 70%);
            border-radius: 6px; color: var(--accent-color); font-weight: 600; font-size: 14px;
            text-decoration: none; transition: all 0.2s;">
                            <i class="bi bi-file-earmark-pdf-fill" style="font-size: 18px;"></i>
                            Download Product Brochure (PDF)
                        </a>
                    @endif

                </div>

                {{-- ── RIGHT: Description + Cupping Chart ─────── --}}
                <div class="col-lg-7" data-aos="fade-left">

                    {{-- Product name + score --}}
                    <div class="d-flex align-items-start justify-content-between flex-wrap gap-2 mb-3">
                        <div>
                            <span
                                style="font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em; color: var(--accent-color);">
                                {{ $specs['category'] ?? 'Coffee' }} · {{ $specs['process'] ?? '' }}
                            </span>
                            <h1
                                style="font-family: var(--heading-font); font-size: 2rem; color: var(--heading-color); margin: 4px 0 0;">
                                {{ $product->name }}
                            </h1>
                        </div>
                        @if ($product->cupping_score)
                            <div style="text-align: right;">
                                <div
                                    style="font-size: 2.5rem; font-weight: 700; color: var(--accent-color); line-height: 1; font-family: var(--heading-font);">
                                    {{ $product->cupping_score }}
                                </div>
                                <div
                                    style="font-size: 11px; text-transform: uppercase; letter-spacing: 0.08em; color: color-mix(in srgb, var(--default-color), transparent 45%);">
                                    Cupping Score
                                </div>
                            </div>
                        @endif
                    </div>

                    {{-- Description --}}
                    <div class="product-description mb-4"
                        style="font-size: 15px; line-height: 1.8; color: var(--default-color);">
                        {!! $product->description !!}
                    </div>

                    {{-- ══ CUPPING SCORE BAR CHART ══════════════════ --}}
                    @if (!empty($product->flavor_profile))
                        <div
                            style="
          background: var(--surface-color);
          border: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
          border-radius: 8px;
          padding: 28px;">

                            <div class="d-flex justify-content-between align-items-baseline mb-4">
                                <h4
                                    style="font-family: var(--heading-font); font-size: 1.2rem; margin: 0; color: var(--heading-color);">
                                    Flavor Profile
                                </h4>
                                @if ($product->cupping_score)
                                    <span
                                        style="font-size: 13px; color: color-mix(in srgb, var(--default-color), transparent 40%);">
                                        Total Cupping Score: <strong
                                            style="color: var(--accent-color);">{{ $product->cupping_score }}</strong> /
                                        100
                                    </span>
                                @endif
                            </div>

                            {{-- Chart.js Bar Chart --}}
                            <canvas id="cuppingChart" height="280"></canvas>

                            {{-- Raw scores as accessible table (hidden visually, screen-reader accessible) --}}
                            <table class="sr-only" aria-label="Cupping scores breakdown">
                                <thead>
                                    <tr>
                                        <th>Attribute</th>
                                        <th>Score</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($product->flavor_profile as $attr => $score)
                                        <tr>
                                            <td>{{ $attr }}</td>
                                            <td>{{ $score }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>

                        {{-- Chart.js script --}}
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const labels = @json(array_keys($product->flavor_profile));
                                const scores = @json(array_values($product->flavor_profile));

                                const isDark = document.documentElement.getAttribute('data-theme') === 'dark';
                                const textColor = isDark ? '#e8ddd0' : '#3d2408';
                                const gridColor = isDark ? 'rgba(255,255,255,0.06)' : 'rgba(61,36,8,0.07)';

                                const ctx = document.getElementById('cuppingChart').getContext('2d');
                                const chart = new Chart(ctx, {
                                    type: 'bar',
                                    data: {
                                        labels: labels,
                                        datasets: [{
                                            label: 'Score',
                                            data: scores,
                                            backgroundColor: scores.map(s =>
                                                s >= 10 ?
                                                'rgba(194, 106, 42, 0.85)' // terracotta — perfect score
                                                :
                                                'rgba(92, 59, 30, 0.75)' // coffee brown — regular
                                            ),
                                            borderColor: scores.map(s =>
                                                s >= 10 ? '#c26a2a' : '#5c3b1e'
                                            ),
                                            borderWidth: 1.5,
                                            borderRadius: 4,
                                            borderSkipped: false,
                                        }]
                                    },
                                    options: {
                                        responsive: true,
                                        maintainAspectRatio: true,
                                        plugins: {
                                            legend: {
                                                display: false
                                            },
                                            tooltip: {
                                                callbacks: {
                                                    label: ctx => ` Score: ${ctx.parsed.y.toFixed(2)}`,
                                                    afterLabel: ctx => {
                                                        const max = 10;
                                                        const pct = ((ctx.parsed.y / max) * 100).toFixed(0);
                                                        return ` (${pct}% of max)`;
                                                    }
                                                },
                                                backgroundColor: '#3d2408',
                                                titleColor: '#f0e6d8',
                                                bodyColor: '#e8ddd0',
                                                padding: 10,
                                                cornerRadius: 6,
                                            },
                                        },
                                        scales: {
                                            x: {
                                                ticks: {
                                                    color: textColor,
                                                    font: {
                                                        size: 12
                                                    },
                                                    maxRotation: 30,
                                                },
                                                grid: {
                                                    display: false
                                                },
                                            },
                                            y: {
                                                min: 0,
                                                max: 10,
                                                ticks: {
                                                    color: textColor,
                                                    font: {
                                                        size: 11
                                                    },
                                                    stepSize: 2,
                                                    callback: v => v === 0 ? '' : v,
                                                },
                                                grid: {
                                                    color: gridColor,
                                                    drawBorder: false,
                                                },
                                            }
                                        },
                                        animation: {
                                            duration: 900,
                                            easing: 'easeOutQuart',
                                        }
                                    }
                                });

                                // Re-draw jika theme toggle berubah
                                const observer = new MutationObserver(() => {
                                    const dark = document.documentElement.getAttribute('data-theme') === 'dark';
                                    chart.options.scales.x.ticks.color = dark ? '#e8ddd0' : '#3d2408';
                                    chart.options.scales.y.ticks.color = dark ? '#e8ddd0' : '#3d2408';
                                    chart.options.scales.y.grid.color = dark ? 'rgba(255,255,255,0.06)' : 'rgba(61,36,8,0.07)';
                                    chart.update();
                                });
                                observer.observe(document.documentElement, {
                                    attributes: true,
                                    attributeFilter: ['data-theme']
                                });
                            });
                        </script>
                    @endif
                    {{-- ════════════════════════════════════════════ --}}

                    {{-- CTA Buttons --}}
                    {{-- <div class="d-flex flex-wrap gap-3 mt-4">
                        <a href="{{ route('contact') }}" class="btn-get-started">
                            Request a Sample
                        </a>
                        <a href="https://wa.me/6287851708758?text={{ urlencode('Hi, I am interested in ' . $product->name . '. Could you send me more details?') }}"
                            target="_blank" rel="noopener noreferrer" class="btn-get-started"
                            style="background: #25D366; border-color: #25D366; display:inline-flex; align-items:center; gap:8px;">
                            <i class="bi bi-whatsapp"></i>
                            Inquire via WhatsApp
                        </a>
                    </div> --}}

                </div>
            </div>

            {{-- ── Related Products ────────────────────────────── --}}
            @if ($related->count() > 0)
                <div class="mt-5 pt-4"
                    style="border-top: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);">
                    <h3 style="font-family: var(--heading-font); font-size: 1.3rem; margin-bottom: 24px;">
                        Other Products You May Like
                    </h3>
                    <div class="row gy-4">
                        @foreach ($related as $rel)
                            @php $relSpecs = $rel->specifications ?? []; @endphp
                            <div class="col-md-6">
                                <a href="{{ route('products.show', $rel->slug) }}" style="text-decoration: none;">
                                    <div class="d-flex gap-3 align-items-start p-3"
                                        style="
                background: var(--surface-color);
                border: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
                border-radius: 8px;
                transition: box-shadow 0.25s;">
                                        <img src="{{ asset($rel->thumbnail ?? 'assets/img/products/default.jpg') }}"
                                            alt="{{ $rel->name }}"
                                            style="width: 70px; height: 70px; object-fit: cover; border-radius: 6px; flex-shrink: 0;"
                                            loading="lazy">
                                        <div>
                                            <div
                                                style="font-size: 11px; text-transform: uppercase; letter-spacing: 0.08em; color: var(--accent-color); font-weight: 700;">
                                                {{ $relSpecs['category'] ?? '' }}
                                                @if (!empty($rel->cupping_score))
                                                    · {{ $rel->cupping_score }} pts
                                                @endif
                                            </div>
                                            <div
                                                style="font-size: 15px; font-weight: 600; color: var(--heading-color); margin: 2px 0;">
                                                {{ $rel->name }}
                                            </div>
                                            <div
                                                style="font-size: 13px; color: color-mix(in srgb, var(--default-color), transparent 35%);">
                                                {{ Str::limit($rel->short_description, 70) }}
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

        </div>
    </section>
@endsection

@push('scripts')
    {{-- 1. Load CDN dulu --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.3/dist/chart.umd.min.js"></script>

    {{-- 2. Baru script Chart-nya --}}
    @if (!empty($product->flavor_profile))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const labels = @json(array_keys($product->flavor_profile));
                const scores = @json(array_values($product->flavor_profile));
                // ... sisa kode chart
            });
        </script>
    @endif
@endpush
