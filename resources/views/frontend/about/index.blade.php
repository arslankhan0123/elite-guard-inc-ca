@extends('layouts.frontend.main')
@section('title', 'About Us')

@section('content')

  <section class="rts__breadcrumb__area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="rts__breadcrumb__content" style="background-image: url('{{ asset('frontend/images/29.jpg') }}');">
            <ul class="list">
              <li><a href="{{ route('home') }}">Home</a></li>
              <li><i class="fa-solid fa-chevron-right"></i></li>
              <li>About Us</li>
            </ul>
            <h2 class="title rts-text-anime">About Us</h2>
          </div>
        </div>
      </div>
    </div>
  </section>

  <style>
    .btn-gold {
      background: #d4af37;
      color: #111;
      border: none;
      border-radius: 4px;
      padding: 12px 25px;
      font-weight: 800;
      transition: all 0.3s;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
    }

    .btn-gold:hover {
      background: #c39e2d;
      color: #111;
      transform: translateY(-2px);
    }

    /* Header Section */
    .about-hero-container {
      display: flex;
      flex-wrap: wrap;
      position: relative;
      background: #fff;
      min-height: 550px;
      border-bottom: 1px solid #ebebeb;
    }

    .about-hero-left {
      padding: 80px 5% 80px 8%;
      position: relative;
      z-index: 2;
      background: #fff;
    }

    .about-hero-right {
      position: absolute;
      right: 0;
      top: 0;
      bottom: 0;
      overflow: hidden;
    }

    .hero-img-slanted {
      position: absolute;
      inset: 0;
      margin-left: 8px;
      background: url('{{ asset('frontend/images/17.jpg') }}') no-repeat center/cover;
      clip-path: polygon(15% 0, 100% 0, 100% 100%, 0% 100%);
    }

    .hero-gold-line {
      position: absolute;
      inset: 0;
      background: #d4af37;
      clip-path: polygon(15% 0, 100% 0, 100% 100%, 0% 100%);
    }

    /* Mission Vision Values */
    .mvv-section {
      background: #f8f9fa;
      padding: 80px 0;
      border-bottom: 1px solid #ebebeb;
    }

    .mvv-icon {
      width: 70px;
      height: 70px;
      background: #faeac4;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 20px;
    }

    .mvv-icon i {
      font-size: 30px;
      color: #111;
    }

    .mvv-col {
      padding: 0 20px;
    }

    .mvv-col:not(:last-child) {
      border-right: 1px solid #ebebeb;
    }

    /* Our People Section */
    .people-img-col {
      min-height: 500px;
      background: url('{{ asset('frontend/images/5.jpeg') }}') no-repeat center/cover;
      position: relative;
      clip-path: polygon(0 0, 100% 0, 95% 100%, 0% 100%);
    }

    /* Licensed Section */
    .licensed-section {
      background: #fdfbf7;
      padding: 60px 0;
    }

    /* CTA Footer */
    .cta-footer-new {
      background: url('{{ asset('frontend/images/8.jpg') }}') no-repeat center/cover;
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

    @media (max-width: 991.98px) {
      .about-hero-right {
        position: relative;
        height: 400px;
        width: 100%;
      }

      .hero-img-slanted,
      .hero-gold-line {
        clip-path: none;
        margin-left: 0;
        border-top: 8px solid #d4af37;
      }

      .mvv-col:not(:last-child) {
        border-right: none;
        border-bottom: 1px solid #ebebeb;
        padding-bottom: 30px;
        margin-bottom: 30px;
      }

      .people-img-col {
        clip-path: none;
      }
    }
  </style>

  <div class="about-hero-container">
    <div class="col-lg-5 col-12 d-flex flex-column justify-content-center about-hero-left">
      <h4
        style="color: #d4af37; font-size: 13px; font-weight: 800; letter-spacing: 2px; text-transform: uppercase; margin-bottom: 10px;">
        OUR COMPANY</h4>
      <h1
        style="font-size: 42px; font-weight: 900; color: #111; margin-bottom: 25px; line-height: 1.1; text-transform: uppercase;">
        BUILT ON TRUST.<br>DRIVEN BY PURPOSE.</h1>
      <p style="color: #555; font-size: 15px; line-height: 1.6; margin-bottom: 20px;">
        Elite Guard Inc. is a Calgary-based security company providing reliable and professional security services for
        commercial, residential, construction and event properties. We combine trained personnel, mobile patrols,
        responsive supervision and modern technology to deliver dependable protection and greater accountability.
      </p>
      <p style="color: #555; font-size: 15px; line-height: 1.6; margin-bottom: 30px;">
        Our focus is simple &mdash; to understand your unique needs and provide customized security solutions that help
        reduce risk, enhance safety and create peace of mind.
      </p>
      <div>
        <a href="{{ route('contact') ?? '#' }}" class="btn-gold"
          style="display: inline-block; padding: 12px 30px; font-weight: 800; font-size: 14px; text-transform: uppercase;">CONTACT
          US <i class="fa-solid fa-arrow-right ms-2"></i></a>
      </div>
    </div>

    <div class="col-lg-7 col-12 about-hero-right">
      <div class="hero-gold-line"></div>
      <div class="hero-img-slanted"></div>
    </div>
  </div>

  <section class="mvv-section">
    <div class="container">
      <div class="row text-center g-4">
        <div class="col-md-4 mvv-col">
          <div class="mvv-icon">
            <i class="fa-solid fa-bullseye"></i>
          </div>
          <h3 style="font-size: 18px; font-weight: 800; text-transform: uppercase; margin-bottom: 15px; color: #111;">OUR
            MISSION</h3>
          <p style="color: #666; font-size: 14px;">To deliver reliable, professional security services that protect
            people, property and communities.</p>
        </div>

        <div class="col-md-4 mvv-col">
          <div class="mvv-icon">
            <i class="fa-solid fa-eye"></i>
          </div>
          <h3 style="font-size: 18px; font-weight: 800; text-transform: uppercase; margin-bottom: 15px; color: #111;">OUR
            VISION</h3>
          <p style="color: #666; font-size: 14px;">To be a leading security company recognized for trust, innovation and
            exceptional service.</p>
        </div>

        <div class="col-md-4 mvv-col">
          <div class="mvv-icon">
            <i class="fa-solid fa-users"></i>
          </div>
          <h3 style="font-size: 18px; font-weight: 800; text-transform: uppercase; margin-bottom: 15px; color: #111;">OUR
            VALUES</h3>
          <div class="d-flex justify-content-center flex-wrap gap-3 mt-3">
            <div class="text-center">
              <i class="fa-solid fa-shield-halved" style="font-size: 20px; color: #111; margin-bottom: 5px;"></i>
              <div style="font-size: 10px; font-weight: 600; color: #111;">Integrity</div>
            </div>
            <div class="text-center">
              <i class="fa-solid fa-handshake" style="font-size: 20px; color: #111; margin-bottom: 5px;"></i>
              <div style="font-size: 10px; font-weight: 600; color: #111;">Professionalism</div>
            </div>
            <div class="text-center">
              <i class="fa-solid fa-user-group" style="font-size: 20px; color: #111; margin-bottom: 5px;"></i>
              <div style="font-size: 10px; font-weight: 600; color: #111;">Client Focus</div>
            </div>
            <div class="text-center">
              <i class="fa-solid fa-gear" style="font-size: 20px; color: #111; margin-bottom: 5px;"></i>
              <div style="font-size: 10px; font-weight: 600; color: #111;">Accountability</div>
            </div>
            <div class="text-center">
              <i class="fa-solid fa-chart-line" style="font-size: 20px; color: #111; margin-bottom: 5px;"></i>
              <div style="font-size: 10px; font-weight: 600; color: #111;">Teamwork</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section style="background: #fff; padding: 0;">
    <div class="container-fluid p-0">
      <div class="row g-0">
        <div class="col-lg-6 people-img-col"></div>
        <div class="col-lg-6 d-flex flex-column justify-content-center"
          style="padding: 60px 8% 60px 5%; background: #fff;">
          <h4
            style="color: #d4af37; font-size: 13px; font-weight: 800; letter-spacing: 2px; text-transform: uppercase; margin-bottom: 10px;">
            OUR PEOPLE</h4>
          <h2 style="font-size: 32px; font-weight: 900; color: #111; margin-bottom: 20px; text-transform: uppercase;">
            TRAINED. PROFESSIONAL. RELIABLE.</h2>
          <p style="color: #555; font-size: 15px; line-height: 1.6; margin-bottom: 30px;">
            Our team is made up of trained, uniformed professionals who take pride in delivering high-quality service.
            Through continuous training, clear communication and strong supervision, we ensure our personnel are prepared
            to handle a wide range of situations with professionalism and care.
          </p>

          <div class="d-flex flex-wrap gap-4 mt-2">
            <div class="d-flex align-items-center gap-3">
              <div
                style="width: 45px; height: 45px; background: #faeac4; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <i class="fa-solid fa-user-check" style="font-size: 18px; color: #111;"></i>
              </div>
              <div style="font-size: 12px; font-weight: 700; line-height: 1.2; color: #111;">Trained &
                Vetted<br>Professionals</div>
            </div>

            <div class="d-flex align-items-center gap-3">
              <div
                style="width: 45px; height: 45px; background: #faeac4; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <i class="fa-solid fa-shield-halved" style="font-size: 18px; color: #111;"></i>
              </div>
              <div style="font-size: 12px; font-weight: 700; line-height: 1.2; color: #111;">Ongoing Training<br>&
                Supervision</div>
            </div>

            <div class="d-flex align-items-center gap-3">
              <div
                style="width: 45px; height: 45px; background: #faeac4; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <i class="fa-solid fa-heart" style="font-size: 18px; color: #111;"></i>
              </div>
              <div style="font-size: 12px; font-weight: 700; line-height: 1.2; color: #111;">Committed to<br>Client Safety
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="licensed-section">
    <div class="container text-center">
      <h3 style="font-size: 20px; font-weight: 900; text-transform: uppercase; margin-bottom: 40px; color: #111;">FULLY
        LICENSED. FULLY INSURED. FULLY COMMITTED.</h3>
      <div class="row justify-content-center g-4">
        <div class="col-md-4 d-flex justify-content-center justify-content-md-start align-items-center gap-3">
          <i class="fa-solid fa-file-contract" style="font-size: 32px; color: #111;"></i>
          <div class="text-start">
            <div style="font-size: 14px; font-weight: 800; color: #111;">Licensed Security Agency</div>
            <div style="font-size: 12px; color: #666;">Compliant with Alberta regulations</div>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center justify-content-md-start align-items-center gap-3">
          <i class="fa-solid fa-shield-halved" style="font-size: 32px; color: #111;"></i>
          <div class="text-start">
            <div style="font-size: 14px; font-weight: 800; color: #111;">Comprehensive Liability Insurance</div>
            <div style="font-size: 12px; color: #666;">Your security, our responsibility</div>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center justify-content-md-start align-items-center gap-3">
          <i class="fa-solid fa-users-rectangle" style="font-size: 32px; color: #111;"></i>
          <div class="text-start">
            <div style="font-size: 14px; font-weight: 800; color: #111;">WCB Coverage</div>
            <div style="font-size: 12px; color: #666;">Protection for our team and your property</div>
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

@endsection