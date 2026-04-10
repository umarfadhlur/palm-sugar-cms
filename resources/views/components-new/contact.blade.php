{{-- resources/views/components/home/contact.blade.php --}}

<section id="contact" class="contact-snippet py-5">
    <div class="container">

        {{-- Header --}}
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="contact-tag">
                @translate('Get In Touch', 'home', 'contact.tag')
            </span>
            <h2 class="contact-title mt-3">
                @translate('Send Us a', 'home', 'contact.title')
                <em>@translate('Message', 'home', 'contact.title_em')</em>
            </h2>
            <p class="contact-subtitle mx-auto mt-3">
                @translate('Interested in our products or have a business inquiry? Fill in the form and our team will get back to you shortly.', 'home', 'contact.subtitle')
            </p>
        </div>

        <div class="row g-5 justify-content-center">

            {{-- LEFT: Info --}}
            <div class="col-lg-4" data-aos="fade-right">
                <div class="contact-info-wrap">

                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <div>
                            <div class="contact-info-label">@translate('Address', 'home', 'contact.address_label')</div>
                            <div class="contact-info-value">Banyumas, Jawa Tengah, Indonesia</div>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="bi bi-envelope-fill"></i>
                        </div>
                        <div>
                            <div class="contact-info-label">@translate('Email', 'home', 'contact.email_label')</div>
                            <div class="contact-info-value">
                                <a href="mailto:info@javасламет.com">info@javaslamet.com</a>
                            </div>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="bi bi-whatsapp"></i>
                        </div>
                        <div>
                            <div class="contact-info-label">WhatsApp</div>
                            <div class="contact-info-value">
                                <a href="https://wa.me/6281234567890" target="_blank" rel="noopener">+62
                                    812-3456-7890</a>
                            </div>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="bi bi-clock-fill"></i>
                        </div>
                        <div>
                            <div class="contact-info-label">@translate('Business Hours', 'home', 'contact.hours_label')</div>
                            <div class="contact-info-value">Mon – Fri, 08.00 – 17.00 WIB</div>
                        </div>
                    </div>

                </div>
            </div>

            {{-- RIGHT: Form --}}
            <div class="col-lg-7" data-aos="fade-left" data-aos-delay="100">
                <form id="contactForm" class="contact-form" novalidate>
                    @csrf

                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label class="contact-label" for="cf_name">
                                @translate('Full Name', 'home', 'contact.field_name') <span class="text-danger">*</span>
                            </label>
                            <input type="text" id="cf_name" name="name" class="contact-input"
                                placeholder="John Doe" required maxlength="100">
                            <div class="contact-error" id="err_name"></div>
                        </div>

                        <div class="col-sm-6">
                            <label class="contact-label" for="cf_email">
                                @translate('Email Address', 'home', 'contact.field_email') <span class="text-danger">*</span>
                            </label>
                            <input type="email" id="cf_email" name="email" class="contact-input"
                                placeholder="john@company.com" required maxlength="100">
                            <div class="contact-error" id="err_email"></div>
                        </div>

                        <div class="col-sm-6">
                            <label class="contact-label" for="cf_phone">
                                @translate('Phone / WhatsApp', 'home', 'contact.field_phone')
                            </label>
                            <input type="text" id="cf_phone" name="phone" class="contact-input"
                                placeholder="+62 812-xxxx-xxxx" maxlength="20">
                        </div>

                        <div class="col-sm-6">
                            <label class="contact-label" for="cf_subject">
                                @translate('Subject', 'home', 'contact.field_subject')
                            </label>
                            <input type="text" id="cf_subject" name="subject" class="contact-input"
                                placeholder="Product Inquiry" maxlength="150">
                        </div>

                        <div class="col-12">
                            <label class="contact-label" for="cf_message">
                                @translate('Message', 'home', 'contact.field_message') <span class="text-danger">*</span>
                            </label>
                            <textarea id="cf_message" name="message" class="contact-input contact-textarea"
                                placeholder="Tell us about your inquiry..." required maxlength="2000" rows="5"></textarea>
                            <div class="contact-error" id="err_message"></div>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn-contact-submit" id="contactSubmitBtn">
                                <span class="btn-contact-text">
                                    @translate('Send Message', 'home', 'contact.submit')
                                </span>
                                <span class="btn-contact-loading d-none">
                                    <span class="spinner-border spinner-border-sm me-2" role="status"></span>
                                    @translate('Sending...', 'home', 'contact.sending')
                                </span>
                            </button>
                        </div>

                    </div>

                    {{-- Alert --}}
                    <div id="contactAlert" class="contact-alert d-none mt-4" role="alert"></div>

                </form>
            </div>

        </div>
    </div>
</section>

<style>
    .contact-snippet {
        background-color: #faf8f4;
    }

    .contact-tag {
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

    .contact-title {
        font-family: var(--font-display);
        font-size: clamp(1.75rem, 1rem + 2vw, 2.75rem);
        color: #261e14;
        line-height: 1.15;
    }

    .contact-title em {
        font-style: italic;
        color: #c26a2a;
    }

    .contact-subtitle {
        color: #7a6e62;
        max-width: 52ch;
        line-height: 1.8;
    }

    /* Info */
    .contact-info-wrap {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
    }

    .contact-info-item {
        display: flex;
        gap: 1rem;
        align-items: flex-start;
    }

    .contact-info-icon {
        width: 44px;
        height: 44px;
        background: #e4d7c8;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #5c3b1e;
        font-size: 1.1rem;
        flex-shrink: 0;
    }

    .contact-info-label {
        font-size: 0.72rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        color: #a08060;
        margin-bottom: 0.2rem;
    }

    .contact-info-value {
        font-size: 0.9rem;
        color: #261e14;
        font-weight: 500;
    }

    .contact-info-value a {
        color: #c26a2a;
        text-decoration: none;
    }

    .contact-info-value a:hover {
        text-decoration: underline;
    }

    /* Form */
    .contact-form {
        background: #fff;
        border: 1px solid #e8e0d5;
        border-radius: 1rem;
        padding: 2rem;
        box-shadow: 0 2px 12px rgb(0 0 0 / 0.05);
    }

    .contact-label {
        display: block;
        font-size: 0.8rem;
        font-weight: 600;
        color: #4a3f35;
        margin-bottom: 0.4rem;
        text-transform: uppercase;
        letter-spacing: 0.06em;
    }

    .contact-input {
        width: 100%;
        padding: 0.65rem 1rem;
        border: 1.5px solid #d8d0c4;
        border-radius: 0.6rem;
        background: #faf8f4;
        font-size: 0.9rem;
        color: #261e14;
        outline: none;
        transition: border-color 150ms, box-shadow 150ms;
    }

    .contact-input:focus {
        border-color: #c26a2a;
        box-shadow: 0 0 0 3px rgb(194 106 42 / 0.12);
        background: #fff;
    }

    .contact-input.is-invalid {
        border-color: #e53e3e;
    }

    .contact-textarea {
        resize: vertical;
        min-height: 130px;
    }

    .contact-error {
        font-size: 0.775rem;
        color: #e53e3e;
        margin-top: 0.3rem;
        min-height: 1rem;
    }

    /* Submit button */
    .btn-contact-submit {
        width: 100%;
        padding: 0.85rem;
        background: #5c3b1e;
        color: #faf8f4;
        font-size: 0.9rem;
        font-weight: 700;
        border: none;
        border-radius: 0.75rem;
        cursor: pointer;
        transition: background 180ms, box-shadow 180ms;
        box-shadow: 0 4px 12px rgb(0 0 0 / 0.10);
    }

    .btn-contact-submit:hover:not(:disabled) {
        background: #422a12;
        box-shadow: 0 8px 24px rgb(0 0 0 / 0.14);
    }

    .btn-contact-submit:disabled {
        opacity: 0.7;
        cursor: not-allowed;
    }

    /* Alert */
    .contact-alert {
        padding: 0.85rem 1.25rem;
        border-radius: 0.65rem;
        font-size: 0.875rem;
        font-weight: 500;
    }

    .contact-alert.success {
        background: #f0fdf4;
        border: 1px solid #86efac;
        color: #166534;
    }

    .contact-alert.error {
        background: #fef2f2;
        border: 1px solid #fca5a5;
        color: #991b1b;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('contactForm');
        const submitBtn = document.getElementById('contactSubmitBtn');
        const btnText = submitBtn.querySelector('.btn-contact-text');
        const btnLoad = submitBtn.querySelector('.btn-contact-loading');
        const alert = document.getElementById('contactAlert');

        form.addEventListener('submit', async function(e) {
            e.preventDefault();

            // Reset errors
            ['name', 'email', 'message'].forEach(f => {
                document.getElementById('err_' + f).textContent = '';
                document.getElementById('cf_' + f).classList.remove('is-invalid');
            });
            alert.className = 'contact-alert d-none mt-4';
            alert.textContent = '';

            // Loading state
            submitBtn.disabled = true;
            btnText.classList.add('d-none');
            btnLoad.classList.remove('d-none');

            try {
                const res = await fetch('{{ route('contact.store') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]')
                            .value,
                        'Accept': 'application/json',
                    },
                    body: JSON.stringify({
                        name: document.getElementById('cf_name').value,
                        email: document.getElementById('cf_email').value,
                        phone: document.getElementById('cf_phone').value,
                        subject: document.getElementById('cf_subject').value,
                        message: document.getElementById('cf_message').value,
                    }),
                });

                const data = await res.json();

                if (res.ok && data.success) {
                    // Success
                    alert.textContent = data.message;
                    alert.className = 'contact-alert success mt-4';
                    form.reset();
                } else if (res.status === 422 && data.errors) {
                    // Validation errors
                    Object.entries(data.errors).forEach(([field, msgs]) => {
                        const errEl = document.getElementById('err_' + field);
                        const inputEl = document.getElementById('cf_' + field);
                        if (errEl) errEl.textContent = msgs[0];
                        if (inputEl) inputEl.classList.add('is-invalid');
                    });
                } else {
                    throw new Error('Unexpected error');
                }

            } catch (err) {
                alert.textContent = 'Something went wrong. Please try again.';
                alert.className = 'contact-alert error mt-4';
            } finally {
                submitBtn.disabled = false;
                btnText.classList.remove('d-none');
                btnLoad.classList.add('d-none');
            }
        });
    });
</script>
