<!-- Navbar Start -->
<div class="container-fluid p-0 nav-bar">
    <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
        <a href="/" class="navbar-brand">
            <h1 class="m-0 display-4 font-weight-bold text-uppercase text-white">SlimTech</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto p-4 bg-secondary border-rounded">
                <a href="/" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                <a href="/shop" class="nav-item nav-link {{ request()->is('shop') ? 'active' : '' }}">Shop</a>
                <a href="/about" class="nav-item nav-link {{ request()->is('about') ? 'active' : '' }}">About Us</a>
                <a href="/contact" class="nav-item nav-link {{ request()->is('contact') ? 'active' : '' }}">Contact</a>
                @auth
                <a href="/cart"
                    class="nav-item nav-link {{ request()->is('cart') ? 'active' : '' }}">Cart({{Helper::cart_count()}})</a>
                <a href="/profile" class="nav-item nav-link {{ request()->is('profile') ? 'active' : '' }}">Profile</a>
                <a href="/logout" class="nav-item nav-link {{ request()->is('logout') ? 'active' : '' }}">Logout</a>
                @else
                <a href="/login" class="nav-item nav-link {{ request()->is('login') ? 'active' : '' }}">Login</a>
                <a href="/register"
                    class="nav-item nav-link {{ request()->is('register') ? 'active' : '' }}">Register</a>
                @endauth
            </div>
        </div>
    </nav>
</div>
<!-- Navbar End -->