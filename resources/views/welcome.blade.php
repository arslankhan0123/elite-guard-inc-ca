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
  <section id="home" class="hero section">

    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
          <div class="hero-content">
            <h1>SECURITY YOU CAN TRUST</h1>
            <p>Elite Guard Inc. provides professional, technology-supported security for businesses, properties and
              communities. We combine trained personnel, mobile patrols, responsive supervision and digital reporting to
              deliver dependable protection and greater accountability.</p>
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
              <img src="{{ asset('frontend/images/4.jpeg') }}" alt="Digital Agency Hero" class="img-fluid">
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
  <section id="about" class="about section white-background">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-5 align-items-center mb-5">

        <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
          <div class="content">
            <h6 class="subtitle">Protection Built Around You</h6>
            <h2>Dependable Protection & Greater Accountability</h2>
            <p>
              Elite Guard Inc. provides professional, technology-supported security for businesses, properties and
              communities. We combine trained personnel, mobile patrols, responsive supervision and digital reporting to
              deliver dependable protection and greater accountability.
            </p>

            <div class="row gy-3 mb-4 mt-2">
              <div class="col-sm-6">
                <div class="mission-box"
                  style="background: #f8fafc; padding: 20px; border-radius: 12px; height: 100%; border-left: 4px solid #34A853; box-shadow: 0 4px 15px rgba(0,0,0,0.02);">
                  <h5 style="font-weight: 700; color: #002524; margin-bottom: 8px; font-size: 14px;">24/7 SECURITY</h5>
                  <p style="color: #475569; font-size: 12px; line-height: 1.5; margin: 0;">
                    Around-the-clock coverage and response
                  </p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="values-box"
                  style="background: #f8fafc; padding: 20px; border-radius: 12px; height: 100%; border-left: 4px solid #34A853; box-shadow: 0 4px 15px rgba(0,0,0,0.02);">
                  <h5 style="font-weight: 700; color: #002524; margin-bottom: 8px; font-size: 14px;">PROFESSIONAL GUARDS
                  </h5>
                  <p style="color: #475569; font-size: 12px; line-height: 1.5; margin: 0;">
                    Trained, uniformed and site-focused
                  </p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="mission-box"
                  style="background: #f8fafc; padding: 20px; border-radius: 12px; height: 100%; border-left: 4px solid #34A853; box-shadow: 0 4px 15px rgba(0,0,0,0.02);">
                  <h5 style="font-weight: 700; color: #002524; margin-bottom: 8px; font-size: 14px;">MOBILE PATROL</h5>
                  <p style="color: #475569; font-size: 12px; line-height: 1.5; margin: 0;">
                    Visible deterrence and mobile response
                  </p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="values-box"
                  style="background: #f8fafc; padding: 20px; border-radius: 12px; height: 100%; border-left: 4px solid #34A853; box-shadow: 0 4px 15px rgba(0,0,0,0.02);">
                  <h5 style="font-weight: 700; color: #002524; margin-bottom: 8px; font-size: 14px;">SMART REPORTING</h5>
                  <p style="color: #475569; font-size: 12px; line-height: 1.5; margin: 0;">
                    Digital patrol verification and reporting
                  </p>
                </div>
              </div>
            </div>

            <a href="{{ route('home') }}#contact" class="btn btn-primary"
              style="border-radius: 30px; padding: 12px 35px;">Contact</a>
          </div>
        </div>

        <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
          <div class="image-composition position-relative">
            <div class="image-main"
              style="border-radius: 20px; overflow: hidden; box-shadow: 0 15px 35px rgba(0,0,0,0.1);">
              <img src="{{ asset('frontend/images/5.jpeg') }}" alt="Elite Guard Team" class="img-fluid" loading="lazy"
                style="width: 100%; object-fit: cover;">
            </div>
          </div>
        </div>

      </div>

    </div>

  </section><!-- /About Section -->

  <!-- Services Section -->
  <section id="services" class="services section">

    <!-- Section Title -->
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>SECURITY FOR EVERY SITE</h2>
      <p>Professional security services shaped around your property, people and daily operations.</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <style>
        .service-slide-card {
          background: #111;
          border-radius: 8px;
          overflow: hidden;
          height: 100%;
          border: 1px solid rgba(255, 255, 255, 0.05);
          transition: transform 0.3s;
        }

        .service-slide-card:hover {
          transform: translateY(-5px);
          border-color: #d4af37;
        }

        .service-slide-img {
          height: 220px;
          width: 100%;
          object-fit: cover;
        }

        .service-slide-content {
          padding: 20px;
        }

        .service-slide-content h5 {
          font-weight: 700;
          color: #fff;
          font-size: 18px;
          margin-bottom: 10px;
          transition: color 0.3s;
        }

        .service-slide-card:hover .service-slide-content h5 {
          color: #d4af37;
        }

        .service-slide-content p {
          color: #94a3b8;
          font-size: 14px;
          margin-bottom: 0;
          line-height: 1.5;
        }

        .services-slider .swiper-pagination {
          position: relative;
          margin-top: 30px;
        }

        .services-slider .swiper-pagination-bullet {
          background-color: rgba(255, 255, 255, 0.4);
        }

        .services-slider .swiper-pagination-bullet-active {
          background-color: #d4af37;
        }
      </style>

      <div class="services-slider swiper init-swiper mb-5">
        <script type="application/json" class="swiper-config">
                              {
                                "loop": true,
                                "speed": 600,
                                "autoplay": {
                                  "delay": 5000
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
                                    "slidesPerView": 4,
                                    "spaceBetween": 30
                                  }
                                }
                              }
                            </script>
        <div class="swiper-wrapper">
          @forelse($services as $service)
            @php
              $imagePath = $service->feature_image ? asset($service->feature_image) : 'https://images.unsplash.com/photo-1541888081622-1ca7b642277d?auto=format&fit=crop&q=80&w=800';
            @endphp
            <div class="swiper-slide" style="height: auto;">
              <a href="{{ route('services.details', $service->id) }}"
                style="text-decoration: none; display: block; height: 100%;">
                <div class="service-slide-card">
                  <img src="{{ $imagePath }}" alt="{{ $service->name }}" class="service-slide-img" loading="lazy">
                  <div class="service-slide-content">
                    <h5>{{ $service->name }}</h5>
                    <p>
                      {{ $service->short_description ?? Str::limit(strip_tags($service->long_description), 80) }}
                    </p>
                  </div>
                </div>
              </a>
            </div>
          @empty
            <div class="col-12 text-center">
              <p class="text-white">No services found.</p>
            </div>
          @endforelse
        </div>
        <div class="swiper-pagination"></div>
      </div>

      <hr style="border-color: #ddd; margin: 40px 0;">

      <!-- PROPERTIES WE PROTECT -->
      <div class="row mb-5" data-aos="fade-up">
        <div class="col-12">
          <h4 style="color: #d4af37; font-weight: 700; font-size: 16px; text-transform: uppercase; margin-bottom: 15px;">
            PROPERTIES WE PROTECT</h4>
          <p style="font-size: 16px; color: #e2e8f0; font-weight: 500;">
            Construction sites • Commercial plazas • Condos & apartments • Office buildings<br>
            Warehouses • Retail stores • Parking facilities • Event venues
          </p>
        </div>
      </div>

      <hr style="border-color: rgba(255,255,255,0.1); margin: 40px 0;">

      <!-- FROM PLANNING TO REPORTING -->
      <div class="row mb-5" data-aos="fade-up">
        <div class="col-12">
          <h4 style="color: #d4af37; font-weight: 700; font-size: 16px; text-transform: uppercase; margin-bottom: 25px;">
            FROM PLANNING TO REPORTING</h4>
          <div class="d-flex justify-content-between align-items-start flex-wrap gap-3">
            <div style="flex: 1; min-width: 200px;">
              <div style="display: flex; align-items: center; margin-bottom: 10px;">
                <span
                  style="background-color: #d4af37; color: #fff; border-radius: 50%; width: 30px; height: 30px; display: inline-flex; justify-content: center; align-items: center; font-weight: 700; margin-right: 10px;">1</span>
                <strong style="font-size: 16px; color: #fff;">PLAN</strong>
              </div>
              <p style="color: #94a3b8; font-size: 14px;">Site needs and<br>coverage priorities</p>
            </div>

            <div style="flex: 1; min-width: 200px;">
              <div style="display: flex; align-items: center; margin-bottom: 10px;">
                <span
                  style="background-color: #d4af37; color: #fff; border-radius: 50%; width: 30px; height: 30px; display: inline-flex; justify-content: center; align-items: center; font-weight: 700; margin-right: 10px;">2</span>
                <strong style="font-size: 16px; color: #fff;">PATROL</strong>
              </div>
              <p style="color: #94a3b8; font-size: 14px;">Assigned checks<br>and site tours</p>
            </div>

            <div style="flex: 1; min-width: 200px;">
              <div style="display: flex; align-items: center; margin-bottom: 10px;">
                <span
                  style="background-color: #d4af37; color: #fff; border-radius: 50%; width: 30px; height: 30px; display: inline-flex; justify-content: center; align-items: center; font-weight: 700; margin-right: 10px;">3</span>
                <strong style="font-size: 16px; color: #fff;">RECORD</strong>
              </div>
              <p style="color: #94a3b8; font-size: 14px;">Checkpoint scans<br>and observations</p>
            </div>

            <div style="flex: 1; min-width: 200px;">
              <div style="display: flex; align-items: center; margin-bottom: 10px;">
                <span
                  style="background-color: #d4af37; color: #fff; border-radius: 50%; width: 30px; height: 30px; display: inline-flex; justify-content: center; align-items: center; font-weight: 700; margin-right: 10px;">4</span>
                <strong style="font-size: 16px; color: #fff;">REPORT</strong>
              </div>
              <p style="color: #94a3b8; font-size: 14px;">Activity and<br>incident reports</p>
            </div>
          </div>
        </div>
      </div>

    </div>

  </section><!-- /Services Section -->



  <style>
    .clients-new {
      background: #fafafa;
      padding: 80px 0;
      border-top: 1px solid #ebebeb;
      border-bottom: 1px solid #ebebeb;
    }

    .client-logo {
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 15px;
      height: 80px;
      background: #fff;
      border: 1px solid #ebebeb;
      border-radius: 4px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.02);
      text-align: center;
    }

    .client-logo h6 {
      margin: 0;
      font-weight: 800;
      color: #111;
      font-size: 13px;
    }

    .locations-section {
      background: #fff;
      padding: 80px 0;
    }

    .location-card {
      display: flex;
      align-items: center;
      background: #fff;
      border-right: 1px solid #ebebeb;
      padding: 10px 20px;
      flex: 1;
    }

    @media (max-width: 768px) {
      .location-card {
        border-right: none;
        border-bottom: 1px solid #ebebeb;
        padding: 20px 0;
      }
    }

    .location-card:last-child {
      border-right: none;
      border-bottom: none;
    }

    .location-icon {
      color: #d4af37;
      font-size: 24px;
      margin-right: 15px;
    }

    .location-text h5 {
      font-size: 15px;
      font-weight: 800;
      color: #111;
      margin: 0 0 2px 0;
    }

    .location-text p {
      font-size: 12px;
      color: #666;
      margin: 0;
    }

    .cta-footer-new {
      background: url('https://images.unsplash.com/photo-1449844908441-8829872d2607?auto=format&fit=crop&q=80&w=1920') no-repeat center/cover;
      position: relative;
      padding: 60px 0;
      color: #fff;
    }

    .cta-footer-new::before {
      content: '';
      position: absolute;
      inset: 0;
      background: rgba(10, 15, 20, 0.9);
    }

    .cta-footer-content {
      position: relative;
      z-index: 2;
    }

    .cta-btn-outline {
      background: transparent;
      color: #fff;
      border: 2px solid rgba(255, 255, 255, 0.3);
      font-weight: 800;
      padding: 10px 25px;
      border-radius: 4px;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      font-size: 13px;
      transition: all 0.3s;
      margin-left: 15px;
    }

    .cta-btn-outline:hover {
      border-color: #fff;
      background: rgba(255, 255, 255, 0.1);
      color: #fff;
    }

    .cta-btn-outline i {
      margin-right: 8px;
    }
  </style>

  <section class="clients-new">
    <div class="container">
      <div class="section-header" data-aos="fade-up" style="margin-bottom: 40px;">
        <h2>TRUSTED BY <span>LEADING ORGANIZATIONS</span></h2>
        <p>We are proud to work with a diverse range of clients in commercial, residential, construction and public sector
          environments.</p>
      </div>
      <div class="row g-3 justify-content-center" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-2 col-md-4 col-6">
          <div class="client-logo">
            <h6>Killam Apartment REIT</h6>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-6">
          <div class="client-logo">
            <h6>20 Avenue Living</h6>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-6">
          <div class="client-logo">
            <h6>Bloom Investment Group</h6>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-6">
          <div class="client-logo">
            <h6>Mini Mall Storage</h6>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-6">
          <div class="client-logo">
            <h6>Emerald Hotel & Suites</h6>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-6">
          <div class="client-logo">
            <h6>Strategic Group</h6>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="locations-section">
    <div class="container">
      <div class="section-header" data-aos="fade-up" style="margin-bottom: 40px;">
        <h2 style="font-size: 22px;">SECURITY SERVICES ACROSS <span>ALBERTA & BEYOND</span></h2>
        <p>Proudly serving Calgary, Edmonton, Medicine Hat, Saskatoon and surrounding areas.</p>
      </div>
      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12">
          <div class="d-flex flex-wrap flex-column flex-md-row justify-content-between">
            <div class="location-card">
              <div class="location-icon"><i class="fa-solid fa-location-dot"></i></div>
              <div class="location-text">
                <h5>Calgary</h5>
                <p>Our Home Base</p>
              </div>
            </div>
            <div class="location-card">
              <div class="location-icon"><i class="fa-solid fa-location-dot"></i></div>
              <div class="location-text">
                <h5>Edmonton</h5>
                <p>Serving Northern Alberta</p>
              </div>
            </div>
            <div class="location-card">
              <div class="location-icon"><i class="fa-solid fa-location-dot"></i></div>
              <div class="location-text">
                <h5>Medicine Hat</h5>
                <p>Supporting Southern Alberta</p>
              </div>
            </div>
            <div class="location-card border-0">
              <div class="location-icon"><i class="fa-solid fa-location-dot"></i></div>
              <div class="location-text">
                <h5>Saskatoon</h5>
                <p>Extending Our Services</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="cta-footer-new">
    <div class="container cta-footer-content">
      <div class="row align-items-center">
        <div class="col-lg-7 mb-4 mb-lg-0">
          <h2 style="font-size: 32px; font-weight: 800; color: #fff; margin-bottom: 10px; text-transform: uppercase;">
            LET'S BUILD A SAFER TOMORROW
          </h2>
          <p style="color: #e2e8f0; font-size: 15px; margin-bottom: 25px;">
            Contact us today for a customized security solution.
          </p>
          <div class="d-flex align-items-stretch flex-wrap gap-2">
            <a href="{{ route('quote') }}" class="d-flex align-items-center justify-content-center cta-btn-outline"
              style="margin-left: 0;">
              REQUEST A QUOTE <i class="fa-solid fa-arrow-right" style="margin-left: 8px; margin-right: 0;"></i>
            </a>
            <div class="d-flex align-items-center cta-btn-outline" style="margin-left: 0;">
              <i class="fa-solid fa-phone"></i>
              <div class="ms-2">
                <span style="display: block; font-size: 14px;">403.427.7773</span>
                <span style="font-size: 9px; display:block; line-height:1; font-weight:normal;">24/7 SECURITY LINE</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="d-flex justify-content-end gap-4 text-center">
            <div>
              <i class="fa-solid fa-users" style="color: #d4af37; font-size: 28px; margin-bottom: 8px;"></i>
              <h6 style="color: #fff; font-size: 12px; font-weight: 800; margin: 0;">People</h6>
              <span style="color: #a0aab2; font-size: 11px;">Protected</span>
            </div>
            <div>
              <i class="fa-solid fa-building" style="color: #d4af37; font-size: 28px; margin-bottom: 8px;"></i>
              <h6 style="color: #fff; font-size: 12px; font-weight: 800; margin: 0;">Properties</h6>
              <span style="color: #a0aab2; font-size: 11px;">Secured</span>
            </div>
            <div>
              <i class="fa-solid fa-city" style="color: #d4af37; font-size: 28px; margin-bottom: 8px;"></i>
              <h6 style="color: #fff; font-size: 12px; font-weight: 800; margin: 0;">Communities</h6>
              <span style="color: #a0aab2; font-size: 11px;">Stronger</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Our Security App Section -->
  <section class="security-app section" style="padding: 60px 0;">
    <div class="container" data-aos="fade-up">
      <div class="section-title text-start mb-5">
        <h3 style="font-size: 18px; text-transform: uppercase; letter-spacing: 1px; color: #d4af37;">OUR SECURITY APP</h3>
        <p style="font-size: 16px; font-weight: 600; color: #e2e8f0; letter-spacing: 2px;">PATROL • REPORT • COORDINATE
        </p>
      </div>

      <div class="row gy-4 text-center mt-4">
        <div class="col-md-3">
          <div
            style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.05); padding: 20px; border-radius: 12px; height: 100%;">
            <h5 style="font-weight: 700; font-size: 16px; margin-bottom: 10px; color: #fff;">PATROL TOOLS</h5>
            <p style="font-size: 14px; color: #94a3b8; margin-bottom: 0;">Check-in • Dispatch<br>Sites • Runsheets</p>
          </div>
        </div>
        <div class="col-md-3">
          <div
            style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.05); padding: 20px; border-radius: 12px; height: 100%;">
            <h5 style="font-weight: 700; font-size: 16px; margin-bottom: 10px; color: #fff;">NFC CHECKPOINTS</h5>
            <p style="font-size: 14px; color: #94a3b8; margin-bottom: 0;">NFC scans • Site tours<br>Checkpoint
              verification</p>
          </div>
        </div>
        <div class="col-md-3">
          <div
            style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.05); padding: 20px; border-radius: 12px; height: 100%;">
            <h5 style="font-weight: 700; font-size: 16px; margin-bottom: 10px; color: #fff;">DIGITAL REPORTS</h5>
            <p style="font-size: 14px; color: #94a3b8; margin-bottom: 0;">Shift • Incident • Photos<br>Fire watch</p>
          </div>
        </div>
        <div class="col-md-3">
          <div
            style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.05); padding: 20px; border-radius: 12px; height: 100%;">
            <h5 style="font-weight: 700; font-size: 16px; margin-bottom: 10px; color: #fff;">DAILY CHECKS</h5>
            <p style="font-size: 14px; color: #94a3b8; margin-bottom: 0;">Vehicle inspections<br>Duty checks • Shift
              changes</p>
          </div>
        </div>
      </div>

      <div class="mt-5 pt-4" style="border-top: 1px solid rgba(255,255,255,0.1);">
        <h4 style="font-weight: 700; color: #d4af37; margin-bottom: 10px; font-size: 16px;">OUR TEAM. YOUR MOBILE
          SECURITY.</h4>
        <p style="font-size: 15px; color: #94a3b8;">Uniformed personnel and marked patrol vehicles provide a visible
          security presence, supported by site tours, checkpoint scanning and digital reporting.</p>
      </div>
    </div>
  </section>

  <style>
    .why-us-new {
      background: #fff;
      padding: 80px 0;
    }

    .section-header {
      text-align: center;
      margin-bottom: 50px;
    }

    .section-header h2 {
      font-size: 28px;
      font-weight: 800;
      color: #111;
      text-transform: uppercase;
      margin-bottom: 5px;
    }

    .section-header h2 span {
      color: #d4af37;
    }

    .section-header p {
      color: #666;
      font-size: 15px;
      margin: 0;
    }

    .why-card {
      text-align: center;
      padding: 30px 15px;
      background: #fff;
      border: 1px solid #f0f0f0;
      border-radius: 8px;
      height: 100%;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.02);
      transition: all 0.3s;
    }

    .why-card:hover {
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
      transform: translateY(-5px);
    }

    .why-card .icon-wrapper {
      width: 60px;
      height: 60px;
      background: #fdf6e3;
      border-radius: 50%;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 15px;
    }

    .why-card .icon-wrapper i {
      font-size: 24px;
      color: #111;
    }

    .why-card h5 {
      font-size: 15px;
      font-weight: 800;
      color: #111;
      margin-bottom: 10px;
    }

    .why-card p {
      font-size: 13px;
      color: #555;
      line-height: 1.5;
      margin: 0;
    }
  </style>

  <!-- Why Us Section -->
  <section id="why-us" class="why-us-new">
    <div class="container">
      <div class="section-header" data-aos="fade-up">
        <h2>WHY CHOOSE <span>ELITE GUARD INC.?</span></h2>
        <p>More than security — a partner you can trust.</p>
      </div>
      <div class="row g-4" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-3 col-md-6">
          <div class="why-card">
            <div class="icon-wrapper"><i class="fa-solid fa-users"></i></div>
            <h5>Trained Professionals</h5>
            <p>Licensed, experienced and background-checked guards.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="why-card">
            <div class="icon-wrapper"><i class="fa-solid fa-car"></i></div>
            <h5>Dedicated Mobile Patrol Fleet</h5>
            <p>Marked vehicles provide a visible presence and faster response across Calgary.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="why-card">
            <div class="icon-wrapper"><i class="fa-solid fa-clock"></i></div>
            <h5>24/7 Operations & Support</h5>
            <p>Always available for emergencies, alarm response and client needs.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="why-card">
            <div class="icon-wrapper"><i class="fa-solid fa-chart-simple"></i></div>
            <h5>Technology Driven</h5>
            <p>Real-time reporting, GPS tracking and digital records for complete transparency.</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="why-card">
            <div class="icon-wrapper"><i class="fa-solid fa-clipboard-list"></i></div>
            <h5>Custom Security Plans</h5>
            <p>Site-specific solutions tailored to your property, risks and objectives.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="why-card">
            <div class="icon-wrapper"><i class="fa-solid fa-shield-halved"></i></div>
            <h5>Fully Insured & WCB</h5>
            <p>Your peace of mind is backed by comprehensive insurance and WCB coverage.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="why-card">
            <div class="icon-wrapper"><i class="fa-solid fa-location-dot"></i></div>
            <h5>Local Management</h5>
            <p>Calgary-based management with direct communication and responsive supervision.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="why-card">
            <div class="icon-wrapper"><i class="fa-solid fa-handshake"></i></div>
            <h5>Client-Focused Approach</h5>
            <p>We build long-term relationships through reliable service, clear communication and accountability.</p>
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
                <p>Elite Guard provides outstanding gate-level <strong>Access Control & Monitoring</strong> for our
                  logistics facility. Their guards are punctual, thorough with digital check-ins, and their entry logs
                  keep us secure.</p>
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
                <p>Our condominium board highly praises their <strong>Uniformed Security Personnel</strong>. Their
                  concierge security officers are incredibly reliable, always responsive, and handle resident inquiries
                  with ultimate care.</p>
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
                <p>For our industrial plant sites, strict <strong>Access Control & Monitoring</strong> is vital. Elite
                  Guard officers handle credentials verification, guest badges, and video feed surveillance with unmatched
                  accuracy.</p>
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
                <p>We hired Elite Guard for our outdoor festival crowd control and <strong>Event Security
                    Management</strong>. Their staff managed entry points, VIP areas, and emergency lanes with superb
                  coordination and patience.</p>
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
                <p>Their <strong>Mobile Patrol Services</strong> units are incredibly reliable. Knowing that they check
                  our perimeter fences and warehouse dock doors at irregular intervals throughout the night gives us total
                  peace of mind.</p>
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

    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row mt-5">
        <div class="col-12">
          <div class="team-carousel-wrapper" data-aos="fade-up" data-aos-delay="200">
            <h4 class="carousel-title">Leadership Team</h4>
            <p style="text-align: center;">Meet the dedicated security professionals guiding our training, patrol, and
              response operations across Alberta.</p>

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
                      <p>With over 20 years in law enforcement and private security management, Jennifer leads Elite Guard
                        Inc. with a mission to deliver elite protection services across Alberta.</p>
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
                      <p>Robert oversees our field guard operations, quality compliance, and tactical response strategies,
                        ensuring all deployed officers meet strict SSIA regulations.</p>
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
                      <p>Lisa acts as the primary contact for our corporate and industrial clients, conducting thorough
                        security audits and tailoring customized guard schedules.</p>
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
                      <p>Alex directs our recruit background checks, field officer inspections, and continuous emergency
                        response drills to keep our teams fully prepared.</p>
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
              <p>We are always looking for talented and motivated individuals to join our team. If you are interested in a
                rewarding career in the security industry, we would love to hear from you.</p>
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
      <p>Reach out for reliable security solutions tailored to your needs in Alberta. We are here to assist you with any
        inquiries.</p>
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
              <p>Contact us today to learn more about our security services and how we can help protect your property,
                people, and assets.</p>
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
                <textarea class="form-control" name="message" rows="4" placeholder="Tell us more about your project..."
                  required=""></textarea>
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
              <p>Contact us today to learn more about our security services and how we can help protect your property,
                people, and assets.</p>
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
                  <p style="margin-bottom: 5px;">403.830.7772 (Office)<br>403.427.7773 (24/7 Security)</p>
                  <span class="response-time">Available 24/7</span>
                </div>
              </div>

              <div class="method-card" data-aos="zoom-in" data-aos-delay="350">
                <div class="card-icon">
                  <i class="bi bi-geo-alt"></i>
                </div>
                <div class="card-content">
                  <h5>Visit Our Office</h5>
                  <p><a href="https://maps.app.goo.gl/HchLa4W9ooqHE58w8?g_st=iwb" target="_blank"
                      style="color: inherit; text-decoration: none;">3961 52 Ave NE #2104, Calgary, AB T3J 0J7</a></p>
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

  @push('scripts')
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        $('#contactForm').on('submit', function (e) {
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
            success: function (response) {
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
            error: function (xhr) {
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
  @endpush
@endsection