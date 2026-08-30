<footer id="footer" class="footer position-relative dark-background">

  <div class="container footer-top">
    <div class="row gy-4">
      <div class="col-lg-4 col-md-6 footer-about">
        <a href="{{ route('home') }}" class="logo d-flex align-items-center">
          <img src="{{ asset('frontend/assets/img/logo.png') }}" alt="">
          <span class="sitename">Elite Guard Inc.</span>
        </a>
        <div class="footer-contact pt-3">
          <p>A108 Adam Street</p>
          <p>New York, NY 535022</p>
          <p class="mt-3"><strong>Phone:</strong> <span>(403) 830-7772</span></p>
          <p><strong>Email:</strong> <span><a href="mailto:info@eliteguardinc.ca">info@eliteguardinc.ca</a></span></p>
        </div>
        <div class="social-links d-flex mt-4">
          <a href=""><i class="bi bi-twitter-x"></i></a>
          <a href=""><i class="bi bi-facebook"></i></a>
          <a href=""><i class="bi bi-instagram"></i></a>
          <a href=""><i class="bi bi-linkedin"></i></a>
        </div>
      </div>

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><a href="{{ route('home') }}#hero">Home</a></li>
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
          Elite Guard Inc. is Alberta's premier security provider, delivering professional, licensed, and reliable safety solutions for all properties.
        </p>
      </div>

    </div>
  </div>

  <div class="container copyright text-center mt-4">
    <p>© <span>Copyright</span> <strong class="px-1 sitename">Elite Guard Inc.</strong> <span>All Rights Reserved</span></p>
    <div class="credits">
      Designed by <a href="{{ route('home') }}">Elite Guard Inc.</a>
    </div>
  </div>

</footer>