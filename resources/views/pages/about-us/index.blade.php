@extends('layouts.app')

@section('content')
    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade"
        style="background-image: url('{{ asset('storage/img/page-title-bg.webp') }}');">
        <div class="container position-relative">
            <h1>About Us</h1>
            <p>CV. Banyumas Bonanza Indonesia — Premier Indonesian Coffee Producer &amp; Exporter of Java Slamet Coffee
                (Kopi PbG)</p>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="current">About Us</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->


    <!-- About Us Section -->
    <section id="about-3" class="about-3 section">
        <div class="container">
            <div class="row gy-4 justify-content-between align-items-center">

                <div class="col-lg-6 order-lg-2 position-relative" data-aos="zoom-out">
                    <img src="{{ asset('storage/img/coffee/about-coffee.jpg') }}" alt="Java Slamet Coffee"
                        class="img-fluid">
                </div>

                <div class="col-lg-5 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                    <span class="content-subtitle">Who We Are</span>
                    <h2 class="content-title mb-4">
                        Indonesian Specialty Coffee, <strong>Delivered to the World</strong>
                    </h2>
                    <p class="mb-4">
                        CV. Banyumas Bonanza Indonesia is a premier Indonesian coffee producer and exporter
                        specializing in high-quality green and roasted coffee beans. Operating under the brand
                        <strong>Kopi PbG (Java Slamet Coffee)</strong>, we offer Arabica and Robusta varieties
                        sourced from carefully selected coffee-growing regions in Central Java, Indonesia.
                    </p>
                    <p class="mb-4">
                        Our integrated operation covers the entire value chain — from farm-level sourcing and
                        post-harvest processing to product preparation and export readiness. Every shipment
                        delivers <strong>100% natural coffee without added ingredients</strong>, meeting
                        international quality standards and buyer expectations.
                    </p>
                    <ul class="list-unstyled list-check">
                        <li>Traceable single-origin from Mount Slamet &amp; Mount Sindoro-Sumbing</li>
                        <li>740 MT/year production capacity (Arabica + Robusta)</li>
                        <li>100% natural — no additives, no blending</li>
                    </ul>
                    <p><a href="{{ url('/contact') }}" class="btn-cta">Get in Touch</a></p>
                </div>

            </div>
        </div>
    </section><!-- /About Us Section -->


    <!-- Our Heritage Section -->
    <section id="heritage" class="section" style="background-color: #f9f6f2;">
        <div class="container">

            <div class="container section-title" data-aos="fade-up">
                <h2>Our Heritage</h2>
                <p><em>"Expertly Roasted, Naturally Perfected"</em></p>
            </div>

            <div class="row gy-4 justify-content-between align-items-center">

                <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('storage/img/coffee/heritage.jpg') }}" alt="Coffee Heritage"
                        class="img-fluid rounded">
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <p class="mb-4">
                        Rooted in the fertile volcanic slopes of <strong>Mount Slamet</strong> in Banyumas Raya
                        and <strong>Mount Sindoro-Sumbing</strong> in Temanggung, Central Java, our coffee benefits
                        from ideal growing conditions at altitudes ranging from <strong>800 to 1,600+ meters above sea
                            level</strong>.
                        This unique terroir, combined with generations of farming expertise, produces coffee beans
                        with distinctive flavor profiles that represent the best of Indonesian specialty coffee.
                    </p>
                    <p class="mb-4">
                        We are committed to building long-term partnerships based on integrity, commitment, and
                        mutual respect. Our dedication extends beyond business — we support local farming communities
                        and promote sustainable agricultural practices that protect the environment while delivering
                        exceptional coffee to the world.
                    </p>

                    <!-- Stats -->
                    <div class="row text-center mt-4">
                        <div class="col-4">
                            <h3 style="font-size:1.8rem; font-weight:700; color:#6b4c2a;">740 MT</h3>
                            <p style="font-size:0.85rem; color:#666; margin:0;">Production / Year</p>
                        </div>
                        <div class="col-4">
                            <h3 style="font-size:1.8rem; font-weight:700; color:#6b4c2a;">770K+</h3>
                            <p style="font-size:0.85rem; color:#666; margin:0;">Coffee Plants</p>
                        </div>
                        <div class="col-4">
                            <h3 style="font-size:1.8rem; font-weight:700; color:#6b4c2a;">1,600+</h3>
                            <p style="font-size:0.85rem; color:#666; margin:0;">Max MASL</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section><!-- /Our Heritage Section -->


    <!-- Growing Regions Section -->
    <section id="growing-regions" class="section">
        <div class="container">

            <div class="container section-title" data-aos="fade-up">
                <h2>Growing Regions</h2>
                <p>Single-origin sourcing from the finest coffee-growing areas of Central Java</p>
            </div>

            <div class="row gy-4">

                <!-- Banyumas -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div
                        style="background:#fff; border-radius:12px; padding:32px; box-shadow:0 4px 20px rgba(0,0,0,0.07); height:100%; border-top: 4px solid #6b4c2a;">
                        <div class="mb-3">
                            <i class="bi bi-geo-alt-fill" style="font-size:2rem; color:#6b4c2a;"></i>
                        </div>
                        <h4 style="font-weight:700; margin-bottom:8px;">Banyumas</h4>
                        <p style="color:#888; font-size:0.9rem; margin-bottom:16px;">Mount Slamet Area</p>
                        <span
                            style="background:#f3ece4; color:#6b4c2a; padding:4px 12px; border-radius:20px; font-size:0.85rem; font-weight:600;">800
                            – 1,600+ MASL</span>
                        <p style="color:#555; font-size:0.9rem; margin-top:16px;">
                            Grown on the volcanic slopes of Mount Slamet, producing beans with rich body and
                            distinctive Central Java character.
                        </p>
                        <hr style="border-color:#f0e8df;">
                        <p style="margin:0; font-size:0.85rem; color:#888;">
                            <strong>Varieties:</strong> Arabica, Robusta<br>
                            <strong>Process:</strong> Full Wash, Natural, Honey
                        </p>
                    </div>
                </div>

                <!-- Temanggung -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div
                        style="background:#fff; border-radius:12px; padding:32px; box-shadow:0 4px 20px rgba(0,0,0,0.07); height:100%; border-top: 4px solid #6b4c2a;">
                        <div class="mb-3">
                            <i class="bi bi-geo-alt-fill" style="font-size:2rem; color:#6b4c2a;"></i>
                        </div>
                        <h4 style="font-weight:700; margin-bottom:8px;">Temanggung</h4>
                        <p style="color:#888; font-size:0.9rem; margin-bottom:16px;">Mount Sindoro-Sumbing</p>
                        <span
                            style="background:#f3ece4; color:#6b4c2a; padding:4px 12px; border-radius:20px; font-size:0.85rem; font-weight:600;">800
                            – 1,500 MASL</span>
                        <p style="color:#555; font-size:0.9rem; margin-top:16px;">
                            From the twin volcanic peaks of Sindoro and Sumbing, known for producing well-balanced
                            coffee with complex aromatic profiles.
                        </p>
                        <hr style="border-color:#f0e8df;">
                        <p style="margin:0; font-size:0.85rem; color:#888;">
                            <strong>Varieties:</strong> Arabica, Robusta<br>
                            <strong>Process:</strong> Full Wash, Natural, Honey
                        </p>
                    </div>
                </div>

                <!-- Purbalingga -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div
                        style="background:#fff; border-radius:12px; padding:32px; box-shadow:0 4px 20px rgba(0,0,0,0.07); height:100%; border-top: 4px solid #6b4c2a;">
                        <div class="mb-3">
                            <i class="bi bi-geo-alt-fill" style="font-size:2rem; color:#6b4c2a;"></i>
                        </div>
                        <h4 style="font-weight:700; margin-bottom:8px;">Purbalingga</h4>
                        <p style="color:#888; font-size:0.9rem; margin-bottom:16px;">Mount Slamet Area</p>
                        <span
                            style="background:#f3ece4; color:#6b4c2a; padding:4px 12px; border-radius:20px; font-size:0.85rem; font-weight:600;">800
                            – 1,600+ MASL</span>
                        <p style="color:#555; font-size:0.9rem; margin-top:16px;">
                            Adjacent to the Banyumas region on the northern slopes of Mount Slamet, offering
                            excellent growing conditions for high-altitude specialty coffee.
                        </p>
                        <hr style="border-color:#f0e8df;">
                        <p style="margin:0; font-size:0.85rem; color:#888;">
                            <strong>Varieties:</strong> Arabica, Robusta<br>
                            <strong>Process:</strong> Full Wash, Natural, Honey
                        </p>
                    </div>
                </div>

            </div>

            <!-- Production Portfolio Table -->
            <div class="row mt-5" data-aos="fade-up" data-aos-delay="100">
                <div class="col-12">
                    <div
                        style="background:#fff; border-radius:12px; padding:36px; box-shadow:0 4px 20px rgba(0,0,0,0.07);">
                        <h4 style="font-weight:700; margin-bottom:24px; color:#3d2b1a;">Production Portfolio</h4>
                        <div class="table-responsive">
                            <table class="table" style="margin:0;">
                                <thead style="background:#6b4c2a; color:#fff;">
                                    <tr>
                                        <th style="padding:14px 20px; border:none;">Variety</th>
                                        <th style="padding:14px 20px; border:none;">Altitude (MASL)</th>
                                        <th style="padding:14px 20px; border:none;">Processing Methods</th>
                                        <th style="padding:14px 20px; border:none;">Capacity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr style="border-bottom:1px solid #f0e8df;">
                                        <td style="padding:14px 20px; font-weight:600;">Arabica</td>
                                        <td style="padding:14px 20px;">1,200 – 1,600+ MASL</td>
                                        <td style="padding:14px 20px;">Full Wash, Natural, Honey</td>
                                        <td style="padding:14px 20px;">40 MT / Year</td>
                                    </tr>
                                    <tr>
                                        <td style="padding:14px 20px; font-weight:600;">Robusta</td>
                                        <td style="padding:14px 20px;">800 – 1,200 MASL</td>
                                        <td style="padding:14px 20px;">Full Wash, Natural</td>
                                        <td style="padding:14px 20px;">700 MT / Year</td>
                                    </tr>
                                </tbody>
                                <tfoot style="background:#f9f6f2;">
                                    <tr>
                                        <td colspan="3" style="padding:14px 20px; font-weight:700; color:#3d2b1a;">
                                            Total Production Capacity</td>
                                        <td style="padding:14px 20px; font-weight:700; color:#6b4c2a;">740 MT / Year</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- /Growing Regions Section -->


    <!-- Vision Mission Section -->
    <section id="vision-mission" class="section" style="background-color: #f9f6f2;">
        <div class="container">

            <div class="container section-title" data-aos="fade-up">
                <h2>Vision &amp; Mission</h2>
                <p>Our direction and commitment to the global coffee market</p>
            </div>

            <div class="row gy-4">
                <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">
                    <div
                        style="background:#fff; border-radius:12px; padding:36px; box-shadow:0 4px 20px rgba(0,0,0,0.07); height:100%;">
                        <h4 style="font-weight:700; margin-bottom:16px; color:#3d2b1a;">
                            <i class="bi bi-eye me-2" style="color:#6b4c2a;"></i> Our Vision
                        </h4>
                        <p style="color:#555; line-height:1.8;">
                            To become a leading Indonesian coffee exporter that brings Indonesian specialty coffee
                            to global markets, showcasing superior quality and high value while supporting
                            sustainable farming communities.
                        </p>
                    </div>
                </div>
                <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">
                    <div
                        style="background:#fff; border-radius:12px; padding:36px; box-shadow:0 4px 20px rgba(0,0,0,0.07); height:100%;">
                        <h4 style="font-weight:700; margin-bottom:16px; color:#3d2b1a;">
                            <i class="bi bi-rocket me-2" style="color:#6b4c2a;"></i> Our Mission
                        </h4>
                        <ol style="padding-left:1.2rem; color:#555; line-height:2.2;">
                            <li>Providing the best quality Indonesian coffee products tailored to customer requirements —
                                customer satisfaction is our top priority.</li>
                            <li>Building strong partnerships with coffee farmers to ensure sustainable sourcing, consistent
                                quality, and fair trade practices.</li>
                            <li>Utilizing advanced processing technology and experienced labor to generate high-quality
                                products conforming to international standards.</li>
                            <li>Promoting Indonesian specialty coffee to global markets through transparency, traceability,
                                and excellence in every shipment.</li>
                            <li>Supporting local farming communities through sustainable practices and capacity building
                                programs.</li>
                        </ol>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- /Vision Mission Section -->


    <!-- QUEST Values Section -->
    <section id="quest-values" class="services section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Our QUEST Values</h2>
            <p>"Our QUEST for the Perfect Cup" — The values that drive everything we do</p>
        </div>
        <div class="content">
            <div class="container">
                <div class="row g-0">

                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <span class="number">Q</span>
                            <div class="service-item-icon">
                                <i class="bi bi-award" style="font-size:3rem;"></i>
                            </div>
                            <div class="service-item-content">
                                <h3 class="service-heading">Quality Excellence</h3>
                                <p>Rigorous quality control from farm selection to final export — every batch cupped and
                                    verified to meet international specialty coffee standards.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <span class="number">U</span>
                            <div class="service-item-icon">
                                <i class="bi bi-shield-check" style="font-size:3rem;"></i>
                            </div>
                            <div class="service-item-content">
                                <h3 class="service-heading">Uncompromising Integrity</h3>
                                <p>Full transparency with farmers, partners, and buyers in every transaction — fairness and
                                    respect form the foundation of every partnership.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <span class="number">E</span>
                            <div class="service-item-icon">
                                <i class="bi bi-file-earmark-check" style="font-size:3rem;"></i>
                            </div>
                            <div class="service-item-content">
                                <h3 class="service-heading">Enduring Commitment</h3>
                                <p>Long-term partnership dedication — consistent quality from your first to your fiftieth
                                    shipment, every single time.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <span class="number">S</span>
                            <div class="service-item-icon">
                                <i class="bi bi-tree" style="font-size:3rem;"></i>
                            </div>
                            <div class="service-item-content">
                                <h3 class="service-heading">Sustainable Practices</h3>
                                <p>Environmentally responsible farming protecting Central Java's coffee farming communities
                                    and the volcanic terroir that makes our coffee exceptional.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <span class="number">T</span>
                            <div class="service-item-icon">
                                <i class="bi bi-cpu" style="font-size:3rem;"></i>
                            </div>
                            <div class="service-item-content">
                                <h3 class="service-heading">Technology &amp; Innovation</h3>
                                <p>Modern Natural, Washed, and Honey processing backed by high-technology production
                                    machinery, respecting traditional farming wisdom.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <span class="number">+</span>
                            <div class="service-item-icon">
                                <i class="bi bi-globe" style="font-size:3rem;"></i>
                            </div>
                            <div class="service-item-content">
                                <h3 class="service-heading">Global Export Ready</h3>
                                <p>Structured shipment process from inquiry to documentation — serving buyers in Korea,
                                    Australia, Europe, and beyond reliably.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section><!-- /QUEST Values Section -->
@endsection
