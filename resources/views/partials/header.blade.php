<header class="site-header">
    <div class="site-header__inner">
        <a class="brand" href="{{ route('home') }}" aria-label="Atlantic Oil home"><img src="{{ asset('images/logo.webp') }}" alt="Atlantic Oil & Lubricants"></a>
        <input class="menu-toggle" type="checkbox" id="menu-toggle" aria-label="Toggle navigation">
        <label class="menu-icon" for="menu-toggle" aria-hidden="true"><span></span><span></span><span></span></label>
        <nav class="header-menu" aria-label="اصلي لارښود">
            <ul class="nav-links">
                <li><a class="{{ request()->routeIs('home*') ? 'is-active' : '' }}" href="{{ route('home') }}"><i class="fas fa-house" aria-hidden="true"></i>کور پاڼه</a></li>
                <li><a class="{{ request()->routeIs('about') ? 'is-active' : '' }}" href="{{ route('about') }}"><i class="fas fa-circle-info" aria-hidden="true"></i>زموږ په اړه</a></li>
                <li><a class="{{ request()->routeIs('services.*') ? 'is-active' : '' }}" href="{{ route('services.index') }}"><i class="fas fa-gears" aria-hidden="true"></i>خدمات</a></li>
                <li><a class="{{ request()->routeIs('products.*') ? 'is-active' : '' }}" href="{{ route('products.index') }}"><i class="fas fa-box" aria-hidden="true"></i>محصولات</a></li>
                <li><a class="{{ request()->routeIs('blog.*') ? 'is-active' : '' }}" href="{{ route('blog.index') }}"><i class="fas fa-newspaper" aria-hidden="true"></i>بلاګ</a></li>
                <li><a class="{{ request()->routeIs('contact') ? 'is-active' : '' }}" href="{{ route('contact') }}"><i class="fas fa-envelope" aria-hidden="true"></i>اړیکه</a></li>
                <li class="nav-auth"><a href="{{ route('login') }}">Login</a><a href="{{ route('signup') }}">Sign up</a></li>
            </ul>
        </nav>
    </div>
</header>