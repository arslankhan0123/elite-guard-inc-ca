@extends('layouts.frontend.main')
@section('title', 'Home')

@section('content')

@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if(session('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <i class="fas fa-exclamation-circle me-2"></i> {{ session('error') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<!-- Hero Section -->
<section id="hero" class="hero section">

  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
        <div class="hero-content">
          <h1>Trusted Security Solutions Across Alberta</h1>
          <p>Reliable protection with advanced technology and trained personnel.</p>
          <div class="hero-buttons">
            <a href="{{ route('home') }}#contact" class="btn btn-primary">Get Started</a>
            <a href="{{ route('home') }}#services" class="btn btn-outline">Our Services</a>
          </div>
          <div class="hero-stats">
            <div class="stat-item">
              <span class="stat-number purecounter" data-purecounter-start="0" data-purecounter-end="150"
                data-purecounter-duration="1"></span>
              <span class="stat-label">Projects Completed</span>
            </div>
            <div class="stat-item">
              <span class="stat-number purecounter" data-purecounter-start="0" data-purecounter-end="95"
                data-purecounter-duration="1"></span>
              <span class="stat-label">Client Satisfaction</span>
            </div>
            <div class="stat-item">
              <span class="stat-number purecounter" data-purecounter-start="0" data-purecounter-end="24"
                data-purecounter-duration="1"></span>
              <span class="stat-label">Team Members</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
        <div class="hero-visual">
          <div class="hero-image">
            <img src="https://bootstrapmade.com/content/demo/Clarity/assets/img/misc/misc-16.webp"
              alt="Digital Agency Hero" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="hero-bg-elements">
    <div class="bg-shape shape-1"></div>
    <div class="bg-shape shape-2"></div>
    <div class="bg-particles"></div>
  </div>

</section><!-- /Hero Section -->

<!-- About Section -->
<!-- About Section -->
<section id="about" class="about section">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-5 align-items-center mb-5">

      <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
        <div class="content">
          <h6 class="subtitle">About Us</h6>
          <h2>Your Trusted Security Partner in Alberta</h2>
          <p>
            At Elite Guard Inc., we are committed to providing professional security services across Alberta. Our reputation is built on trust, experience, and a relentless dedication to safeguarding our clients' interests. We offer tailored security solutions designed to meet the unique needs of each client.
          </p>

          <div class="row gy-3 mb-4 mt-2">
            <div class="col-sm-6">
              <div class="mission-box" style="background: #f8fafc; padding: 20px; border-radius: 12px; height: 100%; border-left: 4px solid #34A853; box-shadow: 0 4px 15px rgba(0,0,0,0.02);">
                <h5 style="font-weight: 700; color: #002524; margin-bottom: 8px; font-size: 16px;">Our Mission</h5>
                <p style="color: #475569; font-size: 13px; line-height: 1.5; margin: 0;">
                  To deliver reliable, comprehensive, and proactive security services that ensure the safety and peace of mind of our clients.
                </p>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="values-box" style="background: #f8fafc; padding: 20px; border-radius: 12px; height: 100%; border-left: 4px solid #34A853; box-shadow: 0 4px 15px rgba(0,0,0,0.02);">
                <h5 style="font-weight: 700; color: #002524; margin-bottom: 12px; font-size: 16px;">Our Values</h5>
                <ul style="list-style: none; padding: 0; margin: 0;">
                  <li style="margin-bottom: 8px; display: flex; align-items: flex-start; gap: 8px; font-size: 12px;">
                    <i class="bi bi-shield-fill-check" style="color: #34A853; font-size: 14px; margin-top: 1px;"></i>
                    <span style="color: #475569;"><strong style="color: #002524;">Integrity:</strong> We act with honesty and uphold the highest ethical standards.</span>
                  </li>
                  <li style="margin-bottom: 8px; display: flex; align-items: flex-start; gap: 8px; font-size: 12px;">
                    <i class="bi bi-eye-fill" style="color: #34A853; font-size: 14px; margin-top: 1px;"></i>
                    <span style="color: #475569;"><strong style="color: #002524;">Vigilance:</strong> We remain alert and responsive to potential threats.</span>
                  </li>
                  <li style="display: flex; align-items: flex-start; gap: 8px; font-size: 12px;">
                    <i class="bi bi-person-fill-check" style="color: #34A853; font-size: 14px; margin-top: 1px;"></i>
                    <span style="color: #475569;"><strong style="color: #002524;">Professionalism:</strong> We conduct ourselves with discipline and respect at all times.</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <a href="{{ route('home') }}#contact" class="btn btn-primary" style="border-radius: 30px; padding: 12px 35px;">Contact</a>
        </div>
      </div>

      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
        <div class="image-composition position-relative">
          <div class="image-main" style="border-radius: 20px; overflow: hidden; box-shadow: 0 15px 35px rgba(0,0,0,0.1);">
            <img src="{{ asset('frontend/assets/img/about/about-1.png') }}"
              alt="Elite Guard Team" class="img-fluid" loading="lazy" style="width: 100%; object-fit: cover;">
          </div>
        </div>
      </div>

    </div>

  </div>

</section><!-- /About Section -->

<!-- Services Section -->
<section id="services" class="services section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Services</h2>
    <p>At Elite Guard Inc., we offer a wide range of security services to protect your property, people, and assets. Our team comprises highly trained, licensed security officers who bring extensive experience in security management and risk mitigation. We utilize advanced technologies and proven industry practices to offer superior protection.</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="services-slider swiper init-swiper">
      <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 600,
          "autoplay": {
            "delay": 4000
          },
          "slidesPerView": 1,
          "spaceBetween": 20,
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          },
          "breakpoints": {
            "768": {
              "slidesPerView": 2,
              "spaceBetween": 30
            },
            "1200": {
              "slidesPerView": 3,
              "spaceBetween": 40
            }
          }
        }
      </script>
      <div class="swiper-wrapper">
        @php
          $icons = [
            'bi bi-shield-fill-check',
            'bi bi-eye-fill',
            'bi bi-truck',
            'bi bi-calendar-event-fill',
            'bi bi-phone',
            'bi bi-search',
          ];
        @endphp
        @forelse($services as $service)
          @php
            $imagePath = $service->feature_image ? asset($service->feature_image) : 'https://bootstrapmade.com/content/demo/Clarity/assets/img/portfolio/portfolio-7.webp';
          @endphp
          <div class="swiper-slide">
            <div class="leader-card" style="height: 100%; display: flex; flex-direction: column;">
              <div class="leader-image" style="height: 240px; overflow: hidden; border-radius: 12px 12px 0 0;">
                <img src="{{ $imagePath }}" alt="{{ $service->name }}" style="width: 100%; height: 100%; object-fit: cover;">
              </div>
              <div class="leader-info" style="padding: 25px; flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
                <div>
                  <h5 style="font-weight: 700; font-size: 18px; margin-bottom: 5px;">{{ $service->name }}</h5>
                  <span class="position" style="color: #34A853; font-weight: 700; font-size: 12px; text-transform: uppercase; letter-spacing: 1px; display: block; margin-bottom: 12px;">Security Service</span>
                  <p style="font-size: 14px; color: #94a3b8; line-height: 1.6; margin-bottom: 15px;">{{ $service->short_description ?? Str::limit(strip_tags($service->long_description), 100) }}</p>
                </div>
                <div style="margin-top: auto; text-align: center;">
                  <a href="{{ route('services.details', $service->id) }}" class="btn btn-primary" style="border-radius: 30px; padding: 8px 25px; font-weight: 600; font-size: 13px; background: #34A853; border-color: #34A853; width: 100%;">
                    Learn More <i class="bi bi-arrow-right ms-1"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        @empty
          <div class="swiper-slide text-center">
            <p>No services found.</p>
          </div>
        @endforelse
      </div>
      <div class="swiper-pagination" style="position: relative; margin-top: 40px;"></div>
    </div>

    <div class="row mt-5">
      <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="400">
        <div class="services-cta">
          <h3>Need Expert Security Solutions?</h3>
          <p>Contact us today to learn more about our security services and how we can help protect your property, people, and assets.</p>
          <a href="{{ route('quote') }}" class="btn btn-primary">Request a Free Quote</a>
        </div>
      </div>
    </div>

  </div>

</section><!-- /Services Section -->

<!-- Portfolio Section -->
<!-- <section id="portfolio" class="portfolio section">

  <div class="container section-title" data-aos="fade-up">
    <h2>Services Gallery</h2>
    <p>At Elite Guard Inc., we offer a wide range of security services to protect your property, people, and assets. Our team comprises highly trained, licensed security officers who bring extensive experience in security management and risk mitigation. We utilize advanced technologies and proven industry practices to offer superior protection.</p>
  </div>

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
      <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="200">
        <li data-filter="*" class="filter-active">All Services</li>
        @foreach($categories as $category)
          <li data-filter=".filter-{{ $category->slug }}">{{ $category->name }}</li>
        @endforeach
      </ul>

      <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="300">
        @forelse($services as $service)
          @php
            $catSlug = $service->category->slug ?? 'uncategorized';
            $imagePath = $service->feature_image ? asset($service->feature_image) : 'https://bootstrapmade.com/content/demo/Clarity/assets/img/portfolio/portfolio-7.webp';
          @endphp
          <div class="col-xl-4 col-lg-6 portfolio-item isotope-item filter-{{ $catSlug }}">
            <div class="portfolio-wrapper">
              <div class="portfolio-image">
                <img src="{{ $imagePath }}"
                  alt="{{ $service->name }}" class="img-fluid" loading="lazy" style="width: 100%; height: 280px; object-fit: cover;">
                <div class="portfolio-hover">
                  <div class="portfolio-actions">
                    <a href="{{ $imagePath }}"
                      class="glightbox action-btn preview-btn" title="Preview Image">
                      <i class="bi bi-eye"></i>
                    </a>
                    <a href="{{ route('services.details', $service->id) }}" class="action-btn details-btn" title="View Details">
                      <i class="bi bi-arrow-up-right"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="portfolio-content">
                <div class="portfolio-meta">
                  <span class="project-type">{{ $service->category->name ?? 'Service' }}</span>
                </div>
                <h3><a href="{{ route('services.details', $service->id) }}" style="color: inherit;">{{ $service->name }}</a></h3>
                <p>{{ $service->short_description ?? Str::limit(strip_tags($service->long_description), 100) }}</p>
                
                @if($service->highlights->isNotEmpty())
                  <div class="portfolio-tech">
                    @foreach($service->highlights->take(3) as $highlight)
                      <span class="tech-badge">{{ $highlight->title }}</span>
                    @endforeach
                  </div>
                @endif
              </div>
            </div>
          </div>
        @empty
          <div class="col-12 text-center">
            <p>No services found.</p>
          </div>
        @endforelse
      </div>

    </div>

    <div class="portfolio-cta text-center" data-aos="fade-up" data-aos-delay="400">
      <h4>Ready to get started?</h4>
      <p>Let's work together to bring your vision to life</p>
      <div class="cta-buttons">
        <a href="#contact" class="btn btn-primary">Start a Project</a>
        <a href="{{ route('services') }}" class="btn btn-outline">View All Services</a>
      </div>
    </div>
  </div>

</section> -->

<!-- Why Us Section -->
<section id="why-us" class="why-us section">

  <div class="container section-title" data-aos="fade-up">
    <h2>Why Choose Us</h2>
    <p>Providing unmatched security, absolute reliability, and professional vigilance across Alberta.</p>
  </div>

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row g-4">

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="feature-card">
          <div class="icon-wrapper">
            <i class="bi bi-shield-fill-check" style="color: #34A853;"></i>
          </div>
          <h4>Professional Vigilance</h4>
          <p>Our officers undergo rigorous training, comprehensive background checks, and regular performance audits to ensure the highest standards of vigilance on your premises.</p>
          <div class="feature-stats">
            <span class="stat-number" data-purecounter-start="0" data-purecounter-end="99"
              data-purecounter-duration="2">99</span>
            <span class="stat-label">% On-Time Attendance</span>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="feature-card">
          <div class="icon-wrapper">
            <i class="bi bi-speedometer2" style="color: #34A853;"></i>
          </div>
          <h4>Proactive Mobile Patrols</h4>
          <p>Equipped with GPS tracking and instant dispatch support, our mobile response units ensure prompt incident response and unpredictable patrol coverage to secure your property.</p>
          <div class="feature-stats">
            <span class="stat-number" data-purecounter-start="0" data-purecounter-end="100"
              data-purecounter-duration="2">100</span>
            <span class="stat-label">% Response Reliability</span>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="feature-card">
          <div class="icon-wrapper">
            <i class="bi bi-people-fill" style="color: #34A853;"></i>
          </div>
          <h4>Expert Leadership</h4>
          <p>Managed by security industry veterans, we design custom threat assessment and risk mitigation plans tailored specifically to your facility's unique operational needs.</p>
          <div class="feature-stats">
            <span class="stat-number" data-purecounter-start="0" data-purecounter-end="15"
              data-purecounter-duration="2">15</span>
            <span class="stat-label">+ Years Industry Experience</span>
          </div>
        </div>
      </div>

    </div>

    <div class="row mt-5 align-items-center">
      <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
        <div class="feature-showcase" style="border-radius: 20px; overflow: hidden; box-shadow: 0 15px 35px rgba(0,0,0,0.1);">
          <img src="https://images.unsplash.com/photo-1557597774-9d273605dfa9?auto=format&fit=crop&w=800&q=80"
            alt="Elite Guard Patrol Security" class="img-fluid" style="width: 100%; object-fit: cover; max-height: 480px;">
        </div>
      </div>

      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
        <div class="feature-content">
          <h3>Why Leading Businesses Trust Elite Guard</h3>
          <p class="lead">We combine highly trained licensed guards, advanced digital reporting tools, and dedicated account managers to provide a secure environment.</p>

          <div class="feature-list">
            <div class="feature-item">
              <div class="feature-icon">
                <i class="bi bi-check-circle-fill" style="color: #34A853;"></i>
              </div>
              <div class="feature-text">
                <h5>Licensed & Insured Officers</h5>
                <p>All security guards are fully licensed under Alberta's SSIA, background-checked, and regularly trained.</p>
              </div>
            </div>

            <div class="feature-item">
              <div class="feature-icon">
                <i class="bi bi-check-circle-fill" style="color: #34A853;"></i>
              </div>
              <div class="feature-text">
                <h5>Real-Time Digital Guard Tracking</h5>
                <p>We use GPS tracking and digital patrol logging to provide transparent, real-time security reports.</p>
              </div>
            </div>

            <div class="feature-item">
              <div class="feature-icon">
                <i class="bi bi-check-circle-fill" style="color: #34A853;"></i>
              </div>
              <div class="feature-text">
                <h5>24/7 Dispatch & Support</h5>
                <p>Our round-the-clock dispatch center stands ready to respond immediately to any on-site alerts or emergencies.</p>
              </div>
            </div>
          </div>

          <div class="cta-wrapper mt-4">
            <a href="{{ route('quote') }}" class="btn btn-primary" style="border-radius: 30px; padding: 12px 35px; margin-right: 15px;">Request a Quote</a>
            <a href="#services" class="btn btn-outline" style="border-radius: 30px; padding: 12px 35px;">Our Services</a>
          </div>
        </div>
      </div>
    </div>

  </div>

</section>

<!-- Testimonials Section -->
<section id="testimonials" class="testimonials section">

  <div class="container section-title" data-aos="fade-up">
    <h2>Testimonials</h2>
    <p>See how Elite Guard Inc. protects and serves businesses, properties, and events across Alberta.</p>
  </div>

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="testimonials-slider swiper init-swiper">
      <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 600,
          "autoplay": {
            "delay": 4000
          },
          "slidesPerView": 1,
          "centeredSlides": true,
          "spaceBetween": 20,
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          },
          "breakpoints": {
            "768": {
              "slidesPerView": 1.5,
              "spaceBetween": 30
            },
            "1200": {
              "slidesPerView": 3,
              "spaceBetween": 40
            }
          }
        }
      </script>
      <div class="swiper-wrapper">
        <!-- Testimonial 5: Access Control & Monitoring -->
        <div class="swiper-slide">
          <div class="testimonial-card" data-aos="zoom-in" data-aos-delay="200">
            <div class="testimonial-header">
              <div class="user-avatar">
                <img src="https://bootstrapmade.com/content/demo/Clarity/assets/img/person/person-f-5.webp"
                  alt="Chloe Tremblay">
              </div>
              <div class="user-info">
                <h3>Chloe Tremblay</h3>
                <span class="user-role">Logistics Facilities Director</span>
                <div class="rating">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                </div>
              </div>
            </div>
            <div class="testimonial-content">
              <div class="quote-mark">
                <i class="bi bi-quote"></i>
              </div>
              <p>Elite Guard provides outstanding gate-level <strong>Access Control & Monitoring</strong> for our logistics facility. Their guards are punctual, thorough with digital check-ins, and their entry logs keep us secure.</p>
            </div>
            <div class="testimonial-footer">
              <div class="company-badge">
                <i class="bi bi-building"></i>
                <span>Alberta Logistics Hub</span>
              </div>
              <div class="verified-badge">
                <i class="bi bi-patch-check-fill"></i>
                <span>Verified</span>
              </div>
            </div>
          </div>
        </div><!-- End testimonial item -->

        <!-- Testimonial 7: Uniformed Security Personnel -->
        <div class="swiper-slide">
          <div class="testimonial-card" data-aos="zoom-in" data-aos-delay="200">
            <div class="testimonial-header">
              <div class="user-avatar">
                <img src="https://bootstrapmade.com/content/demo/Clarity/assets/img/person/person-f-8.webp"
                  alt="Lisa Wong">
              </div>
              <div class="user-info">
                <h3>Lisa Wong</h3>
                <span class="user-role">Condo Board President</span>
                <div class="rating">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                </div>
              </div>
            </div>
            <div class="testimonial-content">
              <div class="quote-mark">
                <i class="bi bi-quote"></i>
              </div>
              <p>Our condominium board highly praises their <strong>Uniformed Security Personnel</strong>. Their concierge security officers are incredibly reliable, always responsive, and handle resident inquiries with ultimate care.</p>
            </div>
            <div class="testimonial-footer">
              <div class="company-badge">
                <i class="bi bi-building"></i>
                <span>Riverview Condominiums</span>
              </div>
              <div class="verified-badge">
                <i class="bi bi-patch-check-fill"></i>
                <span>Verified</span>
              </div>
            </div>
          </div>
        </div><!-- End testimonial item -->

        <!-- Testimonial 8: Access Control & Monitoring -->
        <div class="swiper-slide">
          <div class="testimonial-card" data-aos="zoom-in" data-aos-delay="300">
            <div class="testimonial-header">
              <div class="user-avatar">
                <img src="https://bootstrapmade.com/content/demo/Clarity/assets/img/person/person-m-11.webp"
                  alt="Thomas McGregor">
              </div>
              <div class="user-info">
                <h3>Thomas McGregor</h3>
                <span class="user-role">Industrial Safety Director</span>
                <div class="rating">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                </div>
              </div>
            </div>
            <div class="testimonial-content">
              <div class="quote-mark">
                <i class="bi bi-quote"></i>
              </div>
              <p>For our industrial plant sites, strict <strong>Access Control & Monitoring</strong> is vital. Elite Guard officers handle credentials verification, guest badges, and video feed surveillance with unmatched accuracy.</p>
            </div>
            <div class="testimonial-footer">
              <div class="company-badge">
                <i class="bi bi-building"></i>
                <span>McGregor Energy</span>
              </div>
              <div class="verified-badge">
                <i class="bi bi-patch-check-fill"></i>
                <span>Verified</span>
              </div>
            </div>
          </div>
        </div><!-- End testimonial item -->

        <!-- Testimonial 9: Event Security Management -->
        <div class="swiper-slide">
          <div class="testimonial-card" data-aos="zoom-in" data-aos-delay="100">
            <div class="testimonial-header">
              <div class="user-avatar">
                <img src="https://bootstrapmade.com/content/demo/Clarity/assets/img/person/person-f-12.webp"
                  alt="Elena Rostova">
              </div>
              <div class="user-info">
                <h3>Elena Rostova</h3>
                <span class="user-role">Festival Coordinator</span>
                <div class="rating">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                </div>
              </div>
            </div>
            <div class="testimonial-content">
              <div class="quote-mark">
                <i class="bi bi-quote"></i>
              </div>
              <p>We hired Elite Guard for our outdoor festival crowd control and <strong>Event Security Management</strong>. Their staff managed entry points, VIP areas, and emergency lanes with superb coordination and patience.</p>
            </div>
            <div class="testimonial-footer">
              <div class="company-badge">
                <i class="bi bi-building"></i>
                <span>Calgary Summer Festivals</span>
              </div>
              <div class="verified-badge">
                <i class="bi bi-patch-check-fill"></i>
                <span>Verified</span>
              </div>
            </div>
          </div>
        </div><!-- End testimonial item -->

        <!-- Testimonial 10: Mobile Patrol Services -->
        <div class="swiper-slide">
          <div class="testimonial-card" data-aos="zoom-in" data-aos-delay="200">
            <div class="testimonial-header">
              <div class="user-avatar">
                <img src="https://bootstrapmade.com/content/demo/Clarity/assets/img/person/person-m-14.webp"
                  alt="Brian O'Connor">
              </div>
              <div class="user-info">
                <h3>Brian O'Connor</h3>
                <span class="user-role">Operations Manager</span>
                <div class="rating">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                </div>
              </div>
            </div>
            <div class="testimonial-content">
              <div class="quote-mark">
                <i class="bi bi-quote"></i>
              </div>
              <p>Their <strong>Mobile Patrol Services</strong> units are incredibly reliable. Knowing that they check our perimeter fences and warehouse dock doors at irregular intervals throughout the night gives us total peace of mind.</p>
            </div>
            <div class="testimonial-footer">
              <div class="company-badge">
                <i class="bi bi-building"></i>
                <span>Edmonton Logistics Park</span>
              </div>
              <div class="verified-badge">
                <i class="bi bi-patch-check-fill"></i>
                <span>Verified</span>
              </div>
            </div>
          </div>
        </div><!-- End testimonial item -->

      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>

</section><!-- /Testimonials Section -->

<!-- Team Section -->
<section id="team" class="team section">

  <!-- Section Title -->
  <!-- <div class="container section-title" data-aos="fade-up">
    <h2>Team</h2>
    <p>Meet the dedicated security professionals guiding our training, patrol, and response operations across Alberta.</p>
  </div> -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <!-- <div class="row g-4">

      <div class="col-lg-6">
        <div class="team-intro" data-aos="fade-right" data-aos-delay="150">
          <div class="intro-content">
            <h3>Meet Our Security Leadership</h3>
            <p>Elite Guard is managed by experienced law enforcement veterans and corporate security specialists committed to your protection.</p>
            <div class="stats-row">
              <div class="stat-item">
                <span class="stat-number">120+</span>
                <span class="stat-label">Licensed Guards</span>
              </div>
              <div class="stat-item">
                <span class="stat-number">4</span>
                <span class="stat-label">Core Services</span>
              </div>
              <div class="stat-item">
                <span class="stat-number">24/7</span>
                <span class="stat-label">Dispatch Support</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="team-grid" data-aos="fade-left" data-aos-delay="200">
          <div class="member-hexagon" data-aos="zoom-in" data-aos-delay="250">
            <div class="hexagon-inner">
              <img src="https://bootstrapmade.com/content/demo/Clarity/assets/img/person/person-f-3.webp"
                alt="Team member">
              <div class="member-overlay">
                <h5>Sarah Chen</h5>
                <span>Operations Coordinator</span>
                <div class="social-icons">
                  <a href="#"><i class="bi bi-linkedin"></i></a>
                  <a href="#"><i class="bi bi-twitter"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="member-hexagon" data-aos="zoom-in" data-aos-delay="300">
            <div class="hexagon-inner">
              <img src="https://bootstrapmade.com/content/demo/Clarity/assets/img/person/person-m-4.webp"
                alt="Team member">
              <div class="member-overlay">
                <h5>Marcus Johnson</h5>
                <span>Patrol Supervisor</span>
                <div class="social-icons">
                  <a href="#"><i class="bi bi-github"></i></a>
                  <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="member-hexagon" data-aos="zoom-in" data-aos-delay="350">
            <div class="hexagon-inner">
              <img src="https://bootstrapmade.com/content/demo/Clarity/assets/img/person/person-f-8.webp"
                alt="Team member">
              <div class="member-overlay">
                <h5>Emma Rodriguez</h5>
                <span>HR & Compliance</span>
                <div class="social-icons">
                  <a href="#"><i class="bi bi-instagram"></i></a>
                  <a href="#"><i class="bi bi-dribbble"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="member-hexagon" data-aos="zoom-in" data-aos-delay="400">
            <div class="hexagon-inner">
              <img src="https://bootstrapmade.com/content/demo/Clarity/assets/img/person/person-m-6.webp"
                alt="Team member">
              <div class="member-overlay">
                <h5>David Kim</h5>
                <span>Tactical Advisor</span>
                <div class="social-icons">
                  <a href="#"><i class="bi bi-behance"></i></a>
                  <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div> -->

    <div class="row mt-5">
      <div class="col-12">
        <div class="team-carousel-wrapper" data-aos="fade-up" data-aos-delay="200">
          <h4 class="carousel-title">Leadership Team</h4>
          <p style="text-align: center;">Meet the dedicated security professionals guiding our training, patrol, and response operations across Alberta.</p>

          <div class="leadership-slider swiper init-swiper">
            <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 4000
                },
                "slidesPerView": 1,
                "spaceBetween": 0,
                "pagination": {
                  "el": ".swiper-pagination",
                  "clickable": true
                },
                "breakpoints": {
                  "768": {
                    "slidesPerView": 2
                  },
                  "1024": {
                    "slidesPerView": 3
                  }
                }
              }
            </script>
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="leader-card">
                  <div class="leader-image">
                    <img src="https://bootstrapmade.com/content/demo/Clarity/assets/img/person/person-f-14.webp"
                      alt="Leader">
                  </div>
                  <div class="leader-info">
                    <h5>Jennifer Walsh</h5>
                    <span class="position">Chief Executive Officer & Founder</span>
                    <p>With over 20 years in law enforcement and private security management, Jennifer leads Elite Guard Inc. with a mission to deliver elite protection services across Alberta.</p>
                    <div class="leader-contact">
                      <a href="#" class="contact-btn">
                        <i class="bi bi-envelope"></i>
                      </a>
                      <a href="#" class="contact-btn">
                        <i class="bi bi-linkedin"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="leader-card">
                  <div class="leader-image">
                    <img src="https://bootstrapmade.com/content/demo/Clarity/assets/img/person/person-m-13.webp"
                      alt="Leader">
                  </div>
                  <div class="leader-info">
                    <h5>Robert Martinez</h5>
                    <span class="position">Director of Operations & Tactical Lead</span>
                    <p>Robert oversees our field guard operations, quality compliance, and tactical response strategies, ensuring all deployed officers meet strict SSIA regulations.</p>
                    <div class="leader-contact">
                      <a href="#" class="contact-btn">
                        <i class="bi bi-envelope"></i>
                      </a>
                      <a href="#" class="contact-btn">
                        <i class="bi bi-github"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="leader-card">
                  <div class="leader-image">
                    <img src="https://bootstrapmade.com/content/demo/Clarity/assets/img/person/person-f-5.webp"
                      alt="Leader">
                  </div>
                  <div class="leader-info">
                    <h5>Lisa Thompson</h5>
                    <span class="position">Head of Client Relations & Risk Assessment</span>
                    <p>Lisa acts as the primary contact for our corporate and industrial clients, conducting thorough security audits and tailoring customized guard schedules.</p>
                    <div class="leader-contact">
                      <a href="#" class="contact-btn">
                        <i class="bi bi-envelope"></i>
                      </a>
                      <a href="#" class="contact-btn">
                        <i class="bi bi-twitter"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="leader-card">
                  <div class="leader-image">
                    <img src="https://bootstrapmade.com/content/demo/Clarity/assets/img/person/person-m-9.webp"
                      alt="Leader">
                  </div>
                  <div class="leader-info">
                    <h5>Alex Garcia</h5>
                    <span class="position">Field Supervisor & Guard Training Coordinator</span>
                    <p>Alex directs our recruit background checks, field officer inspections, and continuous emergency response drills to keep our teams fully prepared.</p>
                    <div class="leader-contact">
                      <a href="#" class="contact-btn">
                        <i class="bi bi-envelope"></i>
                      </a>
                      <a href="#" class="contact-btn">
                        <i class="bi bi-instagram"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-lg-8 offset-lg-2">
        <div class="join-team-cta" data-aos="fade-up" data-aos-delay="300">
          <div class="cta-icon">
            <i class="bi bi-rocket-takeoff"></i>
          </div>
          <div class="cta-content">
            <h4>Ready to Join Our Mission?</h4>
            <p>We are always looking for talented and motivated individuals to join our team. If you are interested in a rewarding career in the security industry, we would love to hear from you.</p>
            <div class="cta-actions">
              <a href="{{ route('home') }}#contact" class="btn btn-primary">Contact Us</a>
              <a href="{{ route('home') }}#services" class="btn btn-outline">Our Services</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</section><!-- /Team Section -->

<!-- Contact Section -->
<section id="contact" class="contact section">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Contact</h2>
    <p>Reach out for reliable security solutions tailored to your needs in Alberta. We are here to assist you with any inquiries.</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row align-items-center">
      <div class="col-lg-5" data-aos="fade-right" data-aos-delay="200">
        <div class="contact-form-card">
          <div class="form-header">
            <div class="header-icon">
              <i class="bi bi-chat-dots-fill"></i>
            </div>
            <h3>Let's Start a Conversation</h3>
            <p>Contact us today to learn more about our security services and how we can help protect your property, people, and assets.</p>
          </div>

          <form id="contactForm" action="{{ route('contact.store') }}" method="post" class="php-email-form">
            @csrf
            <div class="row">
              <div class="col-md-6 mb-3">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
              </div>
              <div class="col-md-6 mb-3">
                <input type="email" class="form-control" name="email" placeholder="Email Address" required="">
              </div>
            </div>

            <div class="mb-3">
              <input type="text" class="form-control" name="subject" placeholder="What's this about?" required="">
            </div>

            <div class="mb-4">
              <textarea class="form-control" name="message" rows="4"
                placeholder="Tell us more about your project..." required=""></textarea>
            </div>

            <button type="submit" class="submit-btn">
              <span>Send Message</span>
              <i class="bi bi-send-fill"></i>
            </button>
          </form>
        </div>
      </div>

      <div class="col-lg-7" data-aos="fade-left" data-aos-delay="200">
        <div class="contact-info-area">
          <div class="info-header">
            <h3>Ready to Transform Your Ideas?</h3>
            <p>Contact us today to learn more about our security services and how we can help protect your property, people, and assets.</p>
          </div>

          <div class="contact-methods">
            <div class="method-card" data-aos="zoom-in" data-aos-delay="250">
              <div class="card-icon">
                <i class="bi bi-envelope-at"></i>
              </div>
              <div class="card-content">
                <h5>Email Us</h5>
                <p><a href="mailto:info@eliteguardinc.ca">info@eliteguardinc.ca</a></p>
                <span class="response-time">Response in 2-4 hours</span>
              </div>
            </div>

            <div class="method-card" data-aos="zoom-in" data-aos-delay="300">
              <div class="card-icon">
                <i class="bi bi-telephone"></i>
              </div>
              <div class="card-content">
                <h5>Call Us</h5>
                <p>(403) 830-7772</p>
                <span class="response-time">Available 9AM - 6PM EST</span>
              </div>
            </div>

            <div class="method-card" data-aos="zoom-in" data-aos-delay="350">
              <div class="card-icon">
                <i class="bi bi-geo-alt"></i>
              </div>
              <div class="card-content">
                <h5>Visit Our Office</h5>
                <p>4821 Broadway Street, New York, NY 10013</p>
                <span class="response-time">Open Monday - Friday</span>
              </div>
            </div>
          </div>

          <div class="additional-info" data-aos="fade-up" data-aos-delay="400">
            <div class="info-stats">
              <div class="stat-item">
                <div class="stat-number">24h</div>
                <div class="stat-label">Average Response</div>
              </div>
              <div class="stat-item">
                <div class="stat-number">98%</div>
                <div class="stat-label">Client Satisfaction</div>
              </div>
              <div class="stat-item">
                <div class="stat-number">150+</div>
                <div class="stat-label">Projects Delivered</div>
              </div>
            </div>

            <div class="social-connect">
              <h6>Connect With Us</h6>
              <div class="social-links">
                <a href="#" class="social-link"><i class="bi bi-linkedin"></i></a>
                <a href="#" class="social-link"><i class="bi bi-twitter-x"></i></a>
                <a href="#" class="social-link"><i class="bi bi-github"></i></a>
                <a href="#" class="social-link"><i class="bi bi-discord"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- /Contact Section -->

<script>
    document.addEventListener('DOMContentLoaded', function() {
        $('#contactForm').on('submit', function(e) {
            e.preventDefault();
            e.stopImmediatePropagation();

            let form = $(this);
            let submitBtn = form.find('.submit-btn');
            let submitBtnText = submitBtn.find('span');
            let submitIcon = submitBtn.find('i');
            let formData = form.serialize();

            submitBtn.prop('disabled', true);
            submitBtnText.text('Sending...');
            if (submitIcon.length) {
                submitIcon.attr('class', 'fa-solid fa-spinner fa-spin ms-2');
            }

            $.ajax({
                url: form.attr('action'),
                type: 'POST',
                data: formData,
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: response.message,
                        confirmButtonColor: '#34A853'
                    });
                    form[0].reset();
                    submitBtn.prop('disabled', false);
                    submitBtnText.text('Send Message');
                    if (submitIcon.length) {
                        submitIcon.attr('class', 'bi bi-send-fill');
                    }
                },
                error: function(xhr) {
                    let errorMessage = 'Something went wrong. Please try again.';
                    if (xhr.responseJSON && xhr.responseJSON.message) {
                        errorMessage = xhr.responseJSON.message;
                    }

                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: errorMessage,
                        confirmButtonColor: '#d33'
                    });
                    submitBtn.prop('disabled', false);
                    submitBtnText.text('Send Message');
                    if (submitIcon.length) {
                        submitIcon.attr('class', 'bi bi-send-fill');
                    }
                }
            });
        });
    });
</script>
@endsection