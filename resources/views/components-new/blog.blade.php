{{-- resources/views/components/home/blog.blade.php --}}

@props(['posts' => collect()])

<section id="blog" class="blog-snippet py-5">
    <div class="container">

        {{-- Header --}}
        <div class="d-flex flex-column flex-md-row align-items-md-end justify-content-md-between mb-5 gap-3"
            data-aos="fade-up">
            <div>
                <span class="blog-snippet-tag">
                    @translate('Latest Updates', 'home', 'blog.tag')
                </span>
                <h2 class="blog-snippet-title mt-3 mb-0">
                    @translate('From Our', 'home', 'blog.title')
                    <em>@translate('Blog', 'home', 'blog.title_em')</em>
                </h2>
            </div>
            <a href="{{ url('blog') }}" class="btn-blog-all flex-shrink-0">
                @translate('All Posts', 'home', 'blog.all')
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" aria-hidden="true">
                    <path d="M5 12h14M12 5l7 7-7 7" />
                </svg>
            </a>
        </div>

        {{-- Grid --}}
        <div class="row g-4">
            @forelse ($posts as $post)
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <article class="blog-card">

                        {{-- Thumbnail --}}
                        <a href="{{ url('blog/' . $post->slug) }}" class="blog-card-img-wrap" tabindex="-1"
                            aria-hidden="true">
                            <img src="{{ $post->thumbnail ? asset('storage/' . $post->thumbnail) : asset('assets/img/blog/blog-placeholder.jpg') }}"
                                alt="{{ $post->title }}" class="blog-card-img" loading="lazy" decoding="async">

                            {{-- Date badge --}}
                            @if ($post->published_at)
                                <div class="blog-card-date">
                                    <span class="blog-card-date-day">{{ $post->published_at->format('d') }}</span>
                                    <span class="blog-card-date-month">{{ $post->published_at->format('M') }}</span>
                                </div>
                            @endif
                        </a>

                        {{-- Body --}}
                        <div class="blog-card-body">

                            {{-- Meta --}}
                            <div class="blog-card-meta">
                                <span>
                                    <i class="bi bi-person"></i>
                                    {{ $post->user->name ?? 'Admin' }}
                                </span>
                                <span class="blog-card-meta-divider">·</span>
                                <span>
                                    <i class="bi bi-folder2"></i>
                                    {{ $post->category->name ?? 'News' }}
                                </span>
                            </div>

                            {{-- Title --}}
                            <h3 class="blog-card-title">
                                <a href="{{ url('blog/' . $post->slug) }}">{{ $post->title }}</a>
                            </h3>

                            {{-- Excerpt --}}
                            @if ($post->excerpt ?? ($post->short_description ?? null))
                                <p class="blog-card-excerpt">
                                    {{ Str::limit($post->excerpt ?? $post->short_description, 90) }}
                                </p>
                            @endif

                            {{-- Read More --}}
                            <a href="{{ url('blog/' . $post->slug) }}" class="blog-card-readmore">
                                @translate('Read More', 'home', 'blog.read_more')
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" aria-hidden="true">
                                    <path d="M5 12h14M12 5l7 7-7 7" />
                                </svg>
                            </a>

                        </div>
                    </article>
                </div>
            @empty
                <div class="col-12 text-center text-muted py-5">
                    @translate('No posts available yet.', 'home', 'blog.empty')
                </div>
            @endforelse
        </div>

    </div>
</section>

<style>
    .blog-snippet {
        background-color: #fff;
    }

    .blog-snippet-tag {
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

    .blog-snippet-title {
        font-family: var(--font-display);
        font-size: clamp(1.75rem, 1rem + 2vw, 2.75rem);
        color: #261e14;
        line-height: 1.15;
    }

    .blog-snippet-title em {
        font-style: italic;
        color: #c26a2a;
    }

    .btn-blog-all {
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
        padding: 0.6rem 1.5rem;
        border: 2px solid #5c3b1e;
        color: #5c3b1e !important;
        font-size: 0.8rem;
        font-weight: 600;
        border-radius: 9999px;
        text-decoration: none;
        white-space: nowrap;
        transition: background 180ms, color 180ms;
    }

    .btn-blog-all:hover {
        background: #5c3b1e;
        color: #faf8f4 !important;
    }

    /* Card */
    .blog-card {
        display: flex;
        flex-direction: column;
        height: 100%;
        border-radius: 1rem;
        overflow: hidden;
        border: 1px solid #e8e0d5;
        background: #faf8f4;
        box-shadow: 0 2px 8px rgb(0 0 0 / 0.05);
        transition: transform 200ms, box-shadow 200ms;
    }

    .blog-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 28px rgb(0 0 0 / 0.10);
    }

    /* Thumbnail */
    .blog-card-img-wrap {
        position: relative;
        display: block;
        width: 100%;
        aspect-ratio: 16/9;
        overflow: hidden;
        background: #e4d7c8;
        flex-shrink: 0;
    }

    .blog-card-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 300ms;
    }

    .blog-card:hover .blog-card-img {
        transform: scale(1.05);
    }

    /* Date badge */
    .blog-card-date {
        position: absolute;
        bottom: 0.75rem;
        left: 0.75rem;
        display: flex;
        flex-direction: column;
        align-items: center;
        background: #5c3b1e;
        color: #fff;
        border-radius: 0.5rem;
        padding: 0.35rem 0.65rem;
        line-height: 1.2;
        min-width: 44px;
        text-align: center;
    }

    .blog-card-date-day {
        font-family: var(--font-display);
        font-size: 1.1rem;
        font-weight: 700;
    }

    .blog-card-date-month {
        font-size: 0.65rem;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        opacity: 0.85;
    }

    /* Body */
    .blog-card-body {
        display: flex;
        flex-direction: column;
        flex: 1;
        padding: 1.25rem;
        gap: 0.5rem;
    }

    .blog-card-meta {
        display: flex;
        align-items: center;
        gap: 0.4rem;
        font-size: 0.775rem;
        color: #a08060;
        flex-wrap: wrap;
    }

    .blog-card-meta i {
        margin-right: 0.2rem;
    }

    .blog-card-meta-divider {
        color: #d8d0c4;
    }

    .blog-card-title {
        font-family: var(--font-display);
        font-size: 1rem;
        font-weight: 700;
        line-height: 1.4;
        margin: 0;
        flex: 1;
    }

    .blog-card-title a {
        color: #261e14;
        text-decoration: none;
        transition: color 150ms;
    }

    .blog-card-title a:hover {
        color: #c26a2a;
    }

    .blog-card-excerpt {
        font-size: 0.85rem;
        color: #7a6e62;
        line-height: 1.7;
        margin: 0;
    }

    .blog-card-readmore {
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
        font-size: 0.8rem;
        font-weight: 700;
        color: #c26a2a;
        text-decoration: none;
        text-transform: uppercase;
        letter-spacing: 0.06em;
        margin-top: auto;
        padding-top: 0.75rem;
        border-top: 1px solid #e8e0d5;
        transition: gap 150ms;
    }

    .blog-card-readmore:hover {
        gap: 0.7rem;
        color: #a0521e;
    }
</style>
