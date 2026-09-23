<footer id="footer" class="footer position-relative dark-background">

  <div class="container footer-top">
    <div class="row gy-4">
      <div class="col-lg-4 col-md-6 footer-about">
        <a href="{{ route('home') }}" class="logo d-flex align-items-center">
          <span class="logo-badge"
            style="background: #ffffff; border-radius: 50%; width: 44px; height: 44px; display: inline-flex; align-items: center; justify-content: center; padding: 2px; margin-right: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.2); flex-shrink: 0; overflow: hidden;">
            <img src="{{ asset('frontend/assets/img/logo.png') }}" alt="Logo"
              style="width: 100%; height: 100%; max-height: 100% !important; object-fit: contain; margin-right: 0;">
          </span>
          <span class="sitename">Elite Guard Inc.</span>
        </a>
        <div class="footer-contact pt-3">
          <p><a href="https://maps.app.goo.gl/HchLa4W9ooqHE58w8?g_st=iwb" target="_blank"
              style="color: inherit; text-decoration: none;">3961 52 Ave NE #2104</a></p>
          <p><a href="https://maps.app.goo.gl/HchLa4W9ooqHE58w8?g_st=iwb" target="_blank"
              style="color: inherit; text-decoration: none;">Calgary, AB T3J 0J7</a></p>
          <p class="mt-3" style="line-height: 1.6;"><strong>Phone:</strong><br><span
              class="d-inline-block mt-1">403.830.7772 (Office)</span><br><span>403.427.7773 (24/7 Security)</span></p>
          <p><strong>Email:</strong> <span><a href="mailto:info@eliteguardinc.ca">info@eliteguardinc.ca</a></span></p>
        </div>
        <div class="social-links d-flex mt-4">
          <a href=""><i class="bi bi-twitter-x"></i></a>
          <a href=""><i class="bi bi-facebook"></i></a>
          <a href=""><i class="bi bi-instagram"></i></a>
          <a href="https://www.linkedin.com/company/elite-guard-inc"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><a href="{{ route('home') }}#home">Home</a></li>
          <li><a href="{{ route('home') }}#about">About us</a></li>
          <li><a href="{{ route('home') }}#services">Services</a></li>
          <li><a href="{{ route('home') }}#contact">Contact</a></li>
        </ul>
      </div>

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Our Services</h4>
        <ul>
          @php
            $latestServices = \App\Models\Service::where('status', 'active')->latest()->take(5)->get();
          @endphp
          @forelse($latestServices as $latestService)
            <li><a href="{{ route('services.details', $latestService->id) }}">{{ $latestService->name }}</a></li>
          @empty
            <li><a href="#">Security Guards</a></li>
            <li><a href="#">Patrol Services</a></li>
          @endforelse
        </ul>
      </div>

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Legal</h4>
        <ul>
          <li><a href="{{ route('privacy.policy') }}">Privacy Policy</a></li>
          <li><a href="{{ route('refund.policy') }}">Refund Policy</a></li>
          <li><a href="{{ route('terms.conditions') }}">Terms & Conditions</a></li>
        </ul>
      </div>

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>About Company</h4>
        <p style="font-size: 14px; line-height: 1.6; color: rgba(255, 255, 255, 0.6); margin: 0;">
          Elite Guard Inc. is Alberta's premier security provider, delivering professional, licensed, and reliable
          safety solutions for all properties.
        </p>
      </div>

    </div>
  </div>

  <div class="container copyright text-center mt-4">
    <p>© <span>Copyright</span> <strong class="px-1 sitename">Elite Guard Inc.</strong> <span>All Rights Reserved</span>
    </p>
    <div class="credits">
      Designed by <a href="{{ route('home') }}">Elite Guard Inc.</a>
    </div>
  </div>

</footer>