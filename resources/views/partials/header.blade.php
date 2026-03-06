<header id="header" class="header d-flex align-items-center position-relative">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="{{ route('home') }}" class="logo d-flex align-items-center">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Banyumas Bonanza">
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li>
                    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{ route('about.index') }}"
                        class="{{ request()->routeIs('about.index') ? 'active' : '' }}">
                        About Us
                    </a>
                </li>
                <li><a href="#">Our Services</a></li>
                <li><a href="#">Testimonials</a></li>
                <li>
                    <a href="{{ route('blog.index') }}" class="{{ request()->routeIs('blog.*') ? 'active' : '' }}">
                        Blog
                    </a>
                </li>
                <li><a href="#">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

    </div>
</header>
