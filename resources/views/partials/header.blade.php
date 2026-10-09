<!-- HEADER -->
<header class="header">
    <div id="logo">
        <a href="./index.html">
            <img src="./assets/images/logo.webp" alt="Atlantic Oil and Lubricants Logo" />
        </a>
    </div>

    <!-- checkbox -->
    <input type="checkbox" id="menu-toggle" />

    <!-- hamburger -->
    <label for="menu-toggle" class="menu-icon">
        <span class="hide-span"></span>
        <span class="hide-span"></span>
        <span class="hide-span"></span>
    </label>

    <!-- menu -->
    <ul class="nav-links">
        <li>
            <a href="{{url('/')}}">
                <i class="fas fa-home"></i>
                کور پاڼه
            </a>
        </li>

        <li>
            <a href="{{ url('about') }}">
                <i class="fas fa-info-circle"></i>
                زموږ په اړه
            </a>
        </li>

        <li>
            <a href="{{ url('services') }}">
                <i class="fas fa-concierge-bell"></i>
                خدمات
            </a>
        </li>

        <li>
            <a href="{{ url('products') }}">
                <i class="fas fa-box"></i>
                محصولات
            </a>
        </li>

        <li>
            <a href="{{ url('blog') }}">
                <i class="fas fa-blog"></i>
                بلاګ
            </a>
        </li>

        <li>
            <a href="{{ url('contact') }}">
                <i class="fas fa-envelope"></i>
                تماس
            </a>
        </li>

        <li class="mobile-auth">
            <a href="./login.html" id="login">Login</a>
            <a href="./signup.html" id="signup">SignUp</a>
        </li>
    </ul>
</header>