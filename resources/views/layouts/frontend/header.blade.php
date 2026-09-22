<header id="header" class="header d-flex align-items-center sticky-top">
  <!-- <style>
    .header .header-container {
      padding: 12px 30px !important;
    }
    .header .logo img {
      max-height: 100% !important;
    }
  </style> -->
  
  <div
    class="header-container container-fluid container-xxl position-relative d-flex align-items-center justify-content-between">

    <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto me-xl-0">
      <!-- Logo with white circular background badge -->
      <span class="logo-badge" style="background: #ffffff; border-radius: 50%; width: 44px; height: 44px; display: inline-flex; align-items: center; justify-content: center; padding: 2px; margin-right: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.2); flex-shrink: 0; overflow: hidden;">
        <img src="{{ asset('frontend/assets/img/logo.png') }}" alt="Logo" style="width: 100%; height: 100%; max-height: 100% !important; object-fit: contain; margin-right: 0;">
      </span>
      <h1 class="sitename">Elite Guard Inc.</h1>
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
        <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
        <li><a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'active' : '' }}">Services</a></li>
        <li><a href="{{ route('industries') }}" class="{{ request()->routeIs('industries') ? 'active' : '' }}">Industries</a></li>
        <li><a href="{{ route('mobile-patrol') }}" class="{{ request()->routeIs('mobile-patrol') ? 'active' : '' }}">Mobile Patrol</a></li>
        <li><a href="{{ route('technology') }}" class="{{ request()->routeIs('technology') ? 'active' : '' }}">Technology</a></li>
        <li><a href="{{ route('careers') }}" class="{{ request()->routeIs('careers') ? 'active' : '' }}">Careers</a></li>
        <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
        <li><a href="{{ route('quote') }}" class="{{ request()->routeIs('quote') ? 'active' : '' }}">Quote</a></li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

    <a class="btn-getstarted" href="{{ route('contact') }}">Get Started</a>

  </div>
</header>