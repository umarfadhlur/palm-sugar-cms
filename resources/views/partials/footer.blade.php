{{-- resources/views/components/home/footer.blade.php --}}

<footer class="site-footer">

    {{-- Top: CTA Banner --}}
    <div class="footer-cta">
        <div class="container">
            <div class="footer-cta-inner" data-aos="fade-up">
                <div>
                    <h3 class="footer-cta-title">
                        @translate('Ready to Source Premium Indonesian Products?', 'home', 'footer.cta_title')
                    </h3>
                    <p class="footer-cta-desc">
                        @translate('Let\'s discuss your requirements. Our export team is ready to assist you.', 'home', 'footer.cta_desc')
                    </p>
                </div>
                <a href="#contact" class="btn-footer-cta">
                    @translate('Contact Us Now', 'home', 'footer.cta_btn')
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" aria-hidden="true">
                        <path d="M5 12h14M12 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
        </div>
    </div>

    {{-- Main Footer --}}
    <div class="footer-main">
        <div class="container">
            <div class="row g-5">

                {{-- Col 1: Brand --}}
                <div class="col-lg-4">
                    <a href="{{ url('/') }}" class="footer-brand">
                        <img src="{{ asset('assets/img/logo-light.png') }}" alt="Java Slamet Coffee" height="48"
                            onerror="this.style.display='none'">
                        <span class="footer-brand-text">Java Slamet<br><small>Coffee</small></span>
                    </a>
                    <p class="footer-about mt-4">
                        @translate('Premium Arabica & Robusta coffee from the volcanic slopes of Mount Slamet, Central Java. Traceable, natural, and export-ready.', 'home', 'footer.about')
                    </p>
                    <div class="footer-socials mt-4">
                        <a href="#" class="footer-social-link" aria-label="Instagram" target="_blank"
                            rel="noopener">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="#" class="footer-social-link" aria-label="Facebook" target="_blank"
                            rel="noopener">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="#" class="footer-social-link" aria-label="WhatsApp" target="_blank"
                            rel="noopener">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                        <a href="#" class="footer-social-link" aria-label="LinkedIn" target="_blank"
                            rel="noopener">
                            <i class="bi bi-linkedin"></i>
                        </a>
                    </div>
                </div>

                {{-- Col 2: Quick Links --}}
                <div class="col-6 col-lg-2">
                    <h4 class="footer-heading">
                        @translate('Quick Links', 'home', 'footer.quicklinks_title')
                    </h4>
                    <ul class="footer-links">
                        <li><a href="{{ url('/') }}">@translate('Home', 'home', 'footer.nav_home')</a></li>
                        <li><a href="{{ route('about.index') }}">@translate('About Us', 'home', 'footer.nav_about')</a></li>
                        <li><a href="{{ route('products.index') }}">@translate('Products', 'home', 'footer.nav_products')</a></li>
                        <li><a href="{{ url('blog') }}">@translate('Blog', 'home', 'footer.nav_blog')</a></li>
                        <li><a href="#contact">@translate('Contact', 'home', 'footer.nav_contact')</a></li>
                    </ul>
                </div>

                {{-- Col 3: Products --}}
                <div class="col-6 col-lg-2">
                    <h4 class="footer-heading">
                        @translate('Our Products', 'home', 'footer.products_title')
                    </h4>
                    <ul class="footer-links">
                        <li><a href="{{ route('products.index') }}">Arabica Coffee</a></li>
                        <li><a href="{{ route('products.index') }}">Robusta Coffee</a></li>
                        <li><a href="{{ route('products.index') }}">Green Bean</a></li>
                        <li><a href="{{ route('products.index') }}">Roasted Bean</a></li>
                        <li><a href="{{ route('products.index') }}">Palm Sugar</a></li>
                    </ul>
                </div>

                {{-- Col 4: Contact Info --}}
                <div class="col-lg-4">
                    <h4 class="footer-heading">
                        @translate('Contact Info', 'home', 'footer.contact_title')
                    </h4>
                    <ul class="footer-contact-list">
                        <li>
                            <i class="bi bi-geo-alt-fill"></i>
                            <span>Banyumas, Jawa Tengah, Indonesia</span>
                        </li>
                        <li>
                            <i class="bi bi-envelope-fill"></i>
                            <a href="mailto:info@javaslamet.com">info@javaslamet.com</a>
                        </li>
                        <li>
                            <i class="bi bi-whatsapp"></i>
                            <a href="https://wa.me/6281234567890" target="_blank" rel="noopener">+62 812-3456-7890</a>
                        </li>
                        <li>
                            <i class="bi bi-clock-fill"></i>
                            <span>Mon – Fri, 08.00 – 17.00 WIB</span>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    {{-- Bottom Bar --}}
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-inner">
                <p class="footer-copyright">
                    &copy; {{ date('Y') }} <strong>CV. Banyumas Bonanza Indonesia</strong>.
                    @translate('All rights reserved.', 'home', 'footer.copyright')
                </p>
                <p class="footer-credit">
                    @translate('Crafted with', 'home', 'footer.credit')
                    <i class="bi bi-heart-fill text-danger mx-1"></i>
                    @translate('in Banyumas, Java.', 'home', 'footer.credit_end')
                </p>
            </div>
        </div>
    </div>

</footer>

<style>
    /* CTA Banner */
    .footer-cta {
        background: #5c3b1e;
        padding: 3rem 0;
    }

    .footer-cta-inner {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 2rem;
        flex-wrap: wrap;
    }

    .footer-cta-title {
        font-family: var(--font-display);
        font-size: clamp(1.2rem, 1rem + 1.5vw, 1.75rem);
        color: #faf8f4;
        margin: 0 0 0.5rem;
    }

    .footer-cta-desc {
        color: #c9b89e;
        margin: 0;
        font-size: 0.9rem;
    }

    .btn-footer-cta {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.8rem 2rem;
        background: #c26a2a;
        color: #fff !important;
        font-size: 0.875rem;
        font-weight: 700;
        border-radius: 9999px;
        text-decoration: none;
        white-space: nowrap;
        flex-shrink: 0;
        transition: background 180ms, box-shadow 180ms;
        box-shadow: 0 4px 12px rgb(0 0 0 / 0.2);
    }

    .btn-footer-cta:hover {
        background: #a0521e;
        box-shadow: 0 8px 24px rgb(0 0 0 / 0.25);
    }

    /* Main */
    .footer-main {
        background: #1e1208;
        padding: 4rem 0 3rem;
    }

    /* Brand */
    .footer-brand {
        display: inline-flex;
        align-items: center;
        gap: 0.75rem;
        text-decoration: none;
    }

    .footer-brand-text {
        font-family: var(--font-display);
        font-size: 1.3rem;
        font-weight: 700;
        color: #faf8f4;
        line-height: 1.2;
    }

    .footer-brand-text small {
        font-size: 0.75rem;
        color: #c9b89e;
        font-weight: 400;
        letter-spacing: 0.1em;
        text-transform: uppercase;
    }

    .footer-about {
        color: #a08060;
        font-size: 0.875rem;
        line-height: 1.8;
        max-width: 36ch;
    }

    /* Socials */
    .footer-socials {
        display: flex;
        gap: 0.6rem;
    }

    .footer-social-link {
        width: 38px;
        height: 38px;
        border-radius: 50%;
        border: 1px solid #3a2510;
        background: #2a1a0a;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #c9b89e;
        font-size: 1rem;
        text-decoration: none;
        transition: background 150ms, color 150ms, border-color 150ms;
    }

    .footer-social-link:hover {
        background: #c26a2a;
        border-color: #c26a2a;
        color: #fff;
    }

    /* Headings */
    .footer-heading {
        font-size: 0.75rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.12em;
        color: #faf8f4;
        margin-bottom: 1.25rem;
    }

    /* Links */
    .footer-links {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        flex-direction: column;
        gap: 0.65rem;
    }

    .footer-links a {
        color: #a08060;
        text-decoration: none;
        font-size: 0.875rem;
        transition: color 150ms, padding-left 150ms;
        display: inline-block;
    }

    .footer-links a:hover {
        color: #c26a2a;
        padding-left: 4px;
    }

    /* Contact list */
    .footer-contact-list {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .footer-contact-list li {
        display: flex;
        align-items: flex-start;
        gap: 0.75rem;
        font-size: 0.875rem;
        color: #a08060;
    }

    .footer-contact-list i {
        color: #c26a2a;
        font-size: 1rem;
        flex-shrink: 0;
        margin-top: 2px;
    }

    .footer-contact-list a {
        color: #a08060;
        text-decoration: none;
        transition: color 150ms;
    }

    .footer-contact-list a:hover {
        color: #c26a2a;
    }

    /* Bottom bar */
    .footer-bottom {
        background: #130c04;
        padding: 1.25rem 0;
        border-top: 1px solid #2a1a0a;
    }

    .footer-bottom-inner {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 0.5rem;
    }

    .footer-copyright,
    .footer-credit {
        font-size: 0.8rem;
        color: #5a4535;
        margin: 0;
    }

    .footer-credit i {
        font-size: 0.7rem;
    }

    @media (max-width: 576px) {
        .footer-cta-inner {
            flex-direction: column;
            text-align: center;
        }

        .footer-bottom-inner {
            flex-direction: column;
            text-align: center;
        }

        .footer-about {
            max-width: 100%;
        }
    }
</style>
