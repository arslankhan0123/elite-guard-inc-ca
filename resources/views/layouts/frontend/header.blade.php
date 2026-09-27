<header id="header" class="header-two-tier sticky-top">
  <style>
    .header-two-tier {
      position: sticky;
      top: 0;
      z-index: 997;
      background: transparent;
    }
    
    .top-header {
      background: #ffffff;
      padding: 6px 0;
      border-bottom: 1px solid #f0f0f0;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.03);
    }

    .bottom-nav-wrapper {
      padding: 6px 0;
    }

    .bottom-nav-container {
      background: #ffffff;
      border-radius: 50px;
      padding: 3px 25px;
      border: 1px solid #e2e8f0;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.06);
    }

    .bottom-nav-container .navmenu {
      padding: 0;
    }

    @media (min-width: 1200px) {
      .bottom-nav-container .navmenu > ul {
        display: flex;
        align-items: center;
        margin-bottom: 0;
        padding-left: 0;
        list-style: none;
      }
    }

    .bottom-nav-container .navmenu a {
      color: #2d3748 !important;
      font-size: 13px !important;
      font-weight: 600 !important;
      padding: 6px 12px !important;
      font-family: 'Poppins', sans-serif !important;
      transition: all 0.2s ease;
    }

    .bottom-nav-container .navmenu a:hover,
    .bottom-nav-container .navmenu a.active {
      color: #b8860b !important;
    }

    .bottom-nav-container .navmenu a::before {
      display: none !important;
    }

    .btn-contact-quote {
      background-color: #ebba34;
      color: #1a202c !important;
      font-weight: 700;
      font-size: 12px;
      padding: 6px 18px;
      border-radius: 50px;
      text-decoration: none;
      display: inline-block;
      transition: all 0.2s ease-in-out;
      border: none;
      white-space: nowrap;
    }

    .btn-contact-quote:hover {
      background-color: #d4af37;
      color: #000 !important;
      box-shadow: 0 4px 12px rgba(212, 175, 55, 0.3);
    }

    .search-icon-btn {
      color: #2d3748;
      font-size: 16px;
      background: none;
      border: none;
      cursor: pointer;
      padding: 2px 6px;
      transition: color 0.2s;
    }

    .search-icon-btn:hover {
      color: #d4af37;
    }

    /* Mobile Responsive Optimizations */
    @media (max-width: 1199px) {
      .top-header {
        padding: 6px 0;
      }
      .brand-title {
        font-size: 18px !important;
      }
      .brand-tagline {
        font-size: 8px !important;
        letter-spacing: 1.2px !important;
      }
      .brand-logo-img {
        height: 38px !important;
      }
      .bottom-nav-wrapper {
        padding: 4px 0;
      }
      .bottom-nav-container {
        border-radius: 30px;
        padding: 6px 16px;
      }
      .btn-contact-quote {
        font-size: 11px;
        padding: 5px 14px;
      }
      .mobile-nav-toggle {
        font-size: 24px;
        color: #1a202c;
        cursor: pointer;
        margin-left: 5px;
      }
      .mobile-nav-active .navmenu > ul {
        display: block !important;
        position: fixed;
        top: 70px;
        left: 15px;
        right: 15px;
        max-height: calc(100vh - 90px);
        overflow-y: auto;
        background: #ffffff;
        box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        padding: 15px 0;
        z-index: 9999;
      }
      .mobile-nav-active .navmenu a {
        color: #1a202c !important;
        padding: 12px 20px !important;
        font-size: 15px !important;
      }
    }
  </style>

  <!-- Top Tier Header -->
  <div class="top-header">
    <div class="container-fluid container-xxl d-flex align-items-center justify-content-between px-3 px-md-4">
      
      <!-- Left: Logo + Text & Tagline -->
      <a href="{{ route('home') }}" class="d-flex align-items-center text-decoration-none">
        <img src="{{ asset('frontend/assets/img/logo.png') }}" alt="Elite Guard Inc. Logo" style="height: 48px; width: auto; object-fit: contain;" class="me-2 brand-logo-img">
        <div>
          <div class="brand-title" style="font-size: 22px; font-weight: 900; color: #111; line-height: 1; letter-spacing: -0.5px; font-family: 'Poppins', sans-serif;">
            ELITE GUARD <span style="color: #d4af37;">INC.</span>
          </div>
          <div class="brand-tagline" style="font-size: 9px; font-weight: 700; color: #d4af37; letter-spacing: 1.8px; text-transform: uppercase; margin-top: 2px;">
            PROTECT • MONITOR • RESPOND
          </div>
        </div>
      </a>

      <!-- Center: Maple Leaf + Motto Badge -->
      <div class="d-none d-lg-flex align-items-center gap-2">
        <i class="fa-brands fa-canadian-maple-leaf" style="font-size: 24px; color: #d4af37;"></i>
        <div style="font-size: 9px; font-weight: 800; color: #4a5568; line-height: 1.2; text-transform: uppercase; letter-spacing: 0.4px;">
          LOCALLY OWNED<br>
          PROFESSIONALLY MANAGED<br>
          SAFER COMMUNITIES
        </div>
      </div>

      <!-- Right: Phone Contacts -->
      <div class="d-none d-md-flex align-items-center gap-3">
        <!-- 24/7 Security Line -->
        <div class="d-flex align-items-center gap-2">
          <i class="fa-solid fa-phone-volume" style="font-size: 18px; color: #d4af37;"></i>
          <div>
            <div style="font-size: 9px; font-weight: 800; color: #4a5568; text-transform: uppercase; letter-spacing: 0.4px;">24/7 SECURITY</div>
            <a href="tel:4034277773" style="font-size: 14px; font-weight: 900; color: #111; text-decoration: none; line-height: 1; display: block;">403.427.7773</a>
          </div>
        </div>

        <div style="height: 25px; width: 1px; background: #e2e8f0;"></div>

        <!-- Office Line -->
        <div class="d-flex align-items-center gap-2">
          <i class="fa-solid fa-phone" style="font-size: 18px; color: #d4af37;"></i>
          <div>
            <div style="font-size: 9px; font-weight: 800; color: #4a5568; text-transform: uppercase; letter-spacing: 0.4px;">OFFICE</div>
            <a href="tel:4038307772" style="font-size: 14px; font-weight: 900; color: #111; text-decoration: none; line-height: 1; display: block;">403.830.7772</a>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Bottom Tier Nav Bar (Rounded Floating Container) -->
  <div class="bottom-nav-wrapper">
    <div class="container-fluid container-xxl">
      <div class="bottom-nav-container d-flex align-items-center justify-content-between">
        
        <!-- Mobile Quick Phone Call Link (Visible on Mobile) -->
        <a href="tel:4034277773" class="d-flex d-xl-none align-items-center gap-2 text-decoration-none me-auto" style="font-size: 12px; font-weight: 800; color: #111;">
          <div style="background: #fff8e6; width: 28px; height: 28px; border-radius: 50%; display: flex; align-items: center; justify-content: center; border: 1px solid #f6e09e;">
            <i class="fa-solid fa-phone-volume" style="font-size: 12px; color: #d4af37;"></i>
          </div>
          <span style="font-size: 12px; font-weight: 800; color: #1a202c;">403.427.7773</span>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul class="mb-0 ps-0 list-unstyled">
            <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
            <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
            <li class="dropdown"><a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'active' : '' }}"><span>Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a></li>
            <li class="dropdown"><a href="{{ route('industries') }}" class="{{ request()->routeIs('industries') ? 'active' : '' }}"><span>Industries</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a></li>
            <li><a href="{{ route('mobile-patrol') }}" class="{{ request()->routeIs('mobile-patrol') ? 'active' : '' }}">Mobile Patrol</a></li>
            <li class="dropdown"><a href="{{ route('technology') }}" class="{{ request()->routeIs('technology') ? 'active' : '' }}"><span>Technology</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a></li>
            <li><a href="{{ route('careers') }}" class="{{ request()->routeIs('careers') ? 'active' : '' }}">Careers</a></li>
            <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
            
            <!-- Mobile Menu Footer Contact Card -->
            <li class="d-block d-xl-none mt-3 px-3 pt-3" style="border-top: 1px solid #edf2f7;">
              <div class="p-3" style="background: #faf5e8; border-radius: 10px; border: 1px solid #f3e5be;">
                <div class="d-flex align-items-center gap-2 mb-2">
                  <i class="fa-solid fa-phone-volume" style="color: #d4af37; font-size: 14px;"></i>
                  <div>
                    <span style="display: block; font-size: 9px; font-weight: 800; color: #718096; text-transform: uppercase;">24/7 Security Line</span>
                    <a href="tel:4034277773" style="font-size: 14px; font-weight: 900; color: #111; text-decoration: none;">403.427.7773</a>
                  </div>
                </div>
                <div class="d-flex align-items-center gap-2">
                  <i class="fa-solid fa-phone" style="color: #d4af37; font-size: 14px;"></i>
                  <div>
                    <span style="display: block; font-size: 9px; font-weight: 800; color: #718096; text-transform: uppercase;">Office Line</span>
                    <a href="tel:4038307772" style="font-size: 14px; font-weight: 900; color: #111; text-decoration: none;">403.830.7772</a>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </nav>

        <!-- Right Action Items & Mobile Menu Toggle -->
        <div class="d-flex align-items-center gap-2">
          <a href="{{ route('quote') }}" class="btn-contact-quote">
            Get a Quote
          </a>
          <button type="button" class="search-icon-btn d-none d-sm-inline-block" title="Search">
            <i class="bi bi-search"></i>
          </button>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </div>

      </div>
    </div>
  </div>
</header>