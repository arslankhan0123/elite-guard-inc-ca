@extends('layouts.frontend.main')
@section('title', 'Services | Elite Guard Inc.')

@section('content')
    <style>
        /* Breadcrumb Premium Overrides - Left Aligned Hero */
        .rts__breadcrumb__area {
            padding: 0;
            margin: 0;
        }

        .rts__breadcrumb__content {
            position: relative;
            overflow: hidden;
            z-index: 1;
            background-size: cover !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            padding: 70px 50px !important;
            text-align: left;
            border-radius: 20px;
            margin-top: 30px;
            margin-bottom: 50px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }

        .rts__breadcrumb__content::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(90deg, rgba(15, 23, 42, 0.95) 0%, rgba(15, 23, 42, 0.75) 100%) !important;
            z-index: 1;
            border-radius: inherit;
        }

        .hero-top-title {
            color: #d4af37;
            font-size: 14px;
            font-weight: 700;
            letter-spacing: 4px;
            text-transform: uppercase;
            margin-bottom: 15px;
            position: relative;
            z-index: 2;
        }

        .hero-title-main {
            color: #ffffff;
            font-size: 55px;
            font-weight: 800;
            margin: 0;
            line-height: 1.1;
            position: relative;
            z-index: 2;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }

        .hero-title-main span {
            color: #d4af37;
            display: block;
        }

        .hero-desc {
            color: #ffffff;
            font-size: 16px;
            line-height: 1.6;
            max-width: 90%;
            margin-top: 25px;
            margin-bottom: 40px;
            position: relative;
            z-index: 2;
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
        }

        .hero-features {
            display: flex;
            align-items: center;
            gap: 30px;
            position: relative;
            z-index: 2;
            flex-wrap: wrap;
        }

        .hero-feature-item {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .hero-feature-icon {
            color: #111;
            background-color: #d4af37;
            font-size: 20px;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hero-feature-text {
            display: flex;
            flex-direction: column;
        }

        .hero-feature-text .ft-title {
            color: #ffffff;
            font-size: 14px;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: 2px;
        }

        .hero-feature-text .ft-desc {
            color: rgba(255, 255, 255, 0.8);
            font-size: 12px;
        }

        .hero-feature-divider {
            width: 1px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.15);
        }

        @media (max-width: 768px) {
            .hero-title-main {
                font-size: 35px;
            }
            .rts__breadcrumb__content {
                padding: 60px 30px !important;
            }
            .hero-feature-divider {
                display: none;
            }
        }

        /* New Layout Styles */
        .services-new-section {
            background-color: #fdfdfd;
            padding: 60px 0 0 0;
        }

        .service-card {
            background: #fff;
            border-radius: 6px;
            overflow: hidden;
            height: 100%;
            display: flex;
            flex-direction: column;
            border: 1px solid #f0f0f0;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.02);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-decoration: none;
            color: inherit;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            color: inherit;
        }

        .service-image {
            position: relative;
            height: 160px;
            width: 100%;
        }

        .service-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .service-icon {
            position: absolute;
            bottom: -25px;
            left: 15px;
            width: 50px;
            height: 50px;
            background: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            z-index: 2;
        }

        .service-icon-inner {
            width: 38px;
            height: 38px;
            background: #fdf6e3;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .service-icon-inner i {
            color: #111;
            font-size: 16px;
        }

        .service-content {
            padding: 35px 15px 20px 15px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .service-content h4 {
            font-size: 15px;
            font-weight: 800;
            color: #111;
            margin-bottom: 8px;
        }

        .service-content p {
            font-size: 12px;
            color: #555;
            line-height: 1.5;
            margin-bottom: 0;
        }

        .bottom-features {
            background: #fafafa;
            border-top: 1px solid #ebebeb;
            padding: 30px 0;
            margin-top: 50px;
        }

        .feature-item {
            display: flex;
            align-items: center;
        }

        .feature-icon {
            font-size: 32px;
            color: #111;
            margin-right: 15px;
        }

        .feature-icon.gold {
            color: #d4af37;
        }

        .feature-text h5 {
            font-size: 13px;
            font-weight: 800;
            color: #111;
            margin: 0 0 3px 0;
            text-transform: uppercase;
        }

        .feature-text p {
            font-size: 11px;
            color: #666;
            margin: 0;
            line-height: 1.4;
        }

        .header-divider {
            border-left: 3px solid #d4af37;
            padding-left: 20px;
            height: 100%;
            display: flex;
            align-items: center;
        }

        .cta-section {
            background: url('{{ asset('frontend/images/8.jpg') }}') no-repeat center/cover;
            position: relative;
            padding: 60px 0;
            color: #fff;
        }

        .cta-section::before {
            content: '';
            position: absolute;
            inset: 0;
            background: rgba(10, 15, 20, 0.85);
            /* Dark overlay */
        }

        .cta-content {
            position: relative;
            z-index: 2;
        }

        .cta-btn-primary {
            background: #d4af37;
            color: #111;
            font-weight: 800;
            padding: 12px 25px;
            border-radius: 4px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: all 0.3s;
        }

        .cta-btn-primary:hover {
            background: #b8860b;
            color: #fff;
        }

        .cta-btn-primary i {
            margin-right: 8px;
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

        .cta-stats {
            display: flex;
            justify-content: flex-end;
            gap: 30px;
        }

        .stat-item {
            text-align: center;
        }

        .stat-item i {
            color: #d4af37;
            font-size: 30px;
            margin-bottom: 10px;
        }

        .stat-item h6 {
            color: #fff;
            font-size: 12px;
            font-weight: 800;
            text-transform: uppercase;
            margin: 0;
            line-height: 1.4;
        }

        .stat-item span {
            color: #a0aab2;
            font-size: 11px;
        }
    </style>

    <section class="rts__breadcrumb__area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="rts__breadcrumb__content" style="background-image: url('{{ asset('frontend/images/29.jpg') }}');">
                        
                        <div class="hero-top-title" data-aos="fade-up">OUR SERVICES</div>
                        
                        <h1 class="hero-title-main rts-text-anime">
                            {{ $selected_category ? strtoupper($selected_category->name) : 'SECURITY SOLUTIONS' }}
                            <span>BUILT FOR A SAFER TOMORROW</span>
                        </h1>
                        
                        <p class="hero-desc" data-aos="fade-up" data-aos-delay="100">
                            Comprehensive security services tailored to protect your people, property and peace of mind. From single sites to multi-location operations, Elite Guard Inc. delivers reliable, professional and cost-effective security solutions across Calgary and surrounding areas.
                        </p>
                        
                        <div class="hero-features" data-aos="fade-up" data-aos-delay="200">
                            <div class="hero-feature-item">
                                <div class="hero-feature-icon"><i class="fa-solid fa-shield-halved"></i></div>
                                <div class="hero-feature-text">
                                    <span class="ft-title">PROTECT</span>
                                    <span class="ft-desc">People & Property</span>
                                </div>
                            </div>
                            <div class="hero-feature-divider d-none d-md-block"></div>
                            <div class="hero-feature-item">
                                <div class="hero-feature-icon"><i class="fa-solid fa-eye"></i></div>
                                <div class="hero-feature-text">
                                    <span class="ft-title">MONITOR</span>
                                    <span class="ft-desc">Activity & Risk</span>
                                </div>
                            </div>
                            <div class="hero-feature-divider d-none d-md-block"></div>
                            <div class="hero-feature-item">
                                <div class="hero-feature-icon"><i class="fa-solid fa-person-running"></i></div>
                                <div class="hero-feature-text">
                                    <span class="ft-title">RESPOND</span>
                                    <span class="ft-desc">Quickly & Effectively</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services-new-section">
        <div class="container">
            <!-- Header -->
            <div class="row align-items-center mb-5 pb-2">
                <div class="col-lg-9 pr-lg-5 mb-4 mb-lg-0">
                    <h6
                        style="color: #d4af37; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 1px; margin-bottom: 10px;">
                        OUR SERVICES</h6>
                    <h2
                        style="font-size: 32px; font-weight: 800; color: #111; margin-bottom: 15px; text-transform: uppercase;">
                        COMPLETE SECURITY SOLUTIONS
                    </h2>
                    <p style="color: #555; font-size: 15px; line-height: 1.6; margin: 0; max-width: 95%;">
                        A full range of professional security services designed to meet the needs of businesses, communities
                        and special events.
                    </p>
                </div>
                <div class="col-lg-3">
                    <div class="header-divider">
                        <h4
                            style="font-size: 15px; font-weight: 800; color: #555; margin: 0; line-height: 1.4; letter-spacing: 1px;">
                            ONE TEAM<br>MANY SOLUTIONS<br>A SAFER TOMORROW
                        </h4>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                @forelse($services as $service)
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <a href="{{ route('services.details', $service->id) }}"
                            style="text-decoration: none; display: block; height: 100%;">
                            <div class="service-card">
                                <div class="service-image">
                                    @if($service->feature_image)
                                        <img src="{{ asset($service->feature_image) }}" alt="{{ $service->name }}">
                                    @else
                                        <img src="{{ asset('frontend/images/industries/commercial.png') }}"
                                            alt="{{ $service->name }}">
                                    @endif
                                    <div class="service-icon">
                                        <div class="service-icon-inner">
                                            <i class="fa-solid fa-shield-halved"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-content">
                                    <h4>{{ $service->name }}</h4>
                                    <p>{{ Str::limit($service->short_description, 120) }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @empty
                    <div class="col-12 text-center" style="padding: 100px 0;">
                        <h3 style="color: #002524;">No services found.</h3>
                        <p style="color: #666;">Check back later for updates on our services.</p>
                    </div>
                @endforelse
            </div>
        </div>

        <!-- Bottom Features -->
        <div class="bottom-features">
            <div class="container">
                <div class="row gx-2 gy-4 align-items-center justify-content-between">
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-item">
                            <div class="feature-icon"><i class="fa-solid fa-users"></i></div>
                            <div class="feature-text">
                                <h5>TRAINED PROFESSIONALS</h5>
                                <p>Licensed, experienced and reliable.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-item">
                            <div class="feature-icon"><i class="fa-solid fa-chart-simple"></i></div>
                            <div class="feature-text">
                                <h5>TECHNOLOGY DRIVEN</h5>
                                <p>NFC checkpoints, real-time reporting and digital records.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-item">
                            <div class="feature-icon gold"><i class="fa-solid fa-shield-halved"></i></div>
                            <div class="feature-text">
                                <h5>FULLY INSURED</h5>
                                <p>Licensed security agency, liability insurance and WCB coverage.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-item">
                            <div class="feature-icon gold"><i class="fa-solid fa-clock"></i></div>
                            <div class="feature-text">
                                <h5>24/7 SUPPORT</h5>
                                <p>Always available when you need us.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container cta-content">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h6
                        style="color: #d4af37; font-weight: 700; text-transform: uppercase; font-size: 12px; letter-spacing: 2px; margin-bottom: 10px;">
                        LET'S GET STARTED</h6>
                    <h2
                        style="font-size: 32px; font-weight: 800; color: #fff; margin-bottom: 15px; text-transform: uppercase;">
                        SECURE YOUR PROPERTY TODAY
                    </h2>
                    <p style="color: #e2e8f0; font-size: 14px; margin-bottom: 25px;">
                        Contact us for a customized security solution tailored to your needs.
                    </p>
                    <div>
                        <a href="{{ route('quote') }}" class="cta-btn-primary">
                            <i class="fa-solid fa-envelope"></i> REQUEST A QUOTE
                        </a>
                        <a href="tel:4034277773" class="cta-btn-outline">
                            <i class="fa-solid fa-phone"></i> CALL 403.427.7773
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="cta-stats">
                        <div class="stat-item">
                            <i class="fa-solid fa-users"></i>
                            <h6>PEOPLE</h6>
                            <span>Protected</span>
                        </div>
                        <div class="stat-item">
                            <i class="fa-solid fa-building"></i>
                            <h6>PROPERTY</h6>
                            <span>Secured</span>
                        </div>
                        <div class="stat-item">
                            <i class="fa-solid fa-city"></i>
                            <h6>COMMUNITIES</h6>
                            <span>Stronger</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection