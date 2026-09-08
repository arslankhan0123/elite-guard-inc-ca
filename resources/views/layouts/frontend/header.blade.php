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
    class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

    <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto me-xl-0">
      <!-- Logo with white circular background badge -->
      <span class="logo-badge" style="background: #ffffff; border-radius: 50%; width: 44px; height: 44px; display: inline-flex; align-items: center; justify-content: center; padding: 2px; margin-right: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.2); flex-shrink: 0; overflow: hidden;">
        <img src="{{ asset('frontend/assets/img/logo.png') }}" alt="Logo" style="width: 100%; height: 100%; max-height: 100% !important; object-fit: contain; margin-right: 0;">
      </span>
      <h1 class="sitename">Elite Guard Inc.</h1>
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="{{ route('home') }}#hero" class="active">Home</a></li>
        <li><a href="{{ route('home') }}#about">About</a></li>
        <li><a href="{{ route('home') }}#services">Services</a></li>
        <!-- <li><a href="#portfolio">Portfolio</a></li> -->
        <!-- <li><a href="#team">Team</a></li> -->
        <!-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            <li><a href="#">Dropdown 1</a></li>
            <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                  class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="#">Deep Dropdown 1</a></li>
                <li><a href="#">Deep Dropdown 2</a></li>
                <li><a href="#">Deep Dropdown 3</a></li>
                <li><a href="#">Deep Dropdown 4</a></li>
                <li><a href="#">Deep Dropdown 5</a></li>
              </ul>
            </li>
            <li><a href="#">Dropdown 2</a></li>
            <li><a href="#">Dropdown 3</a></li>
            <li><a href="#">Dropdown 4</a></li>
          </ul>
        </li> -->
        <li><a href="{{ route('home') }}#contact">Contact</a></li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

    <a class="btn-getstarted" href="{{ route('home') }}#contact">Get Started</a>

  </div>
</header>