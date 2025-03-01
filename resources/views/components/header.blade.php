<!-- resources/views/components/header.blade.php -->
<header id="header" class="header d-flex align-items-center fixed-top bg-white">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="/" class="logo d-flex align-items-center me-auto">
            <img src="{{ asset('assets/images/SHULE1 LOGO 1.png') }}" alt="ShuleOne Logo" width="120">
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About Us</a></li>
                <li class="dropdown">
                    <a href="#" class="{{ request()->routeIs('services.*') ? 'active' : '' }}">
                        Services <i class="bi bi-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('services.coding') }}">Coding Classes</a></li>
                        <li><a href="{{ route('services.robotics') }}">Robotics</a></li>
                        <li><a href="{{ route('services.e-learning') }}">E-Learning</a></li>
                        <li><a href="{{ route('services.school-erp') }}">School ERP System</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
                <li><a href="{{ route('blog') }}" class="{{ request()->routeIs('blog') ? 'active' : '' }}">Blog</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="btn-getstarted flex-md-shrink-0" href="{{ route('login') }}">Login</a>
        <a class="btn-getregister flex-md-shrink-0" href="{{ route('registration') }}">Registration</a>
    </div>
</header>
