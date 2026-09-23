@extends('layouts.frontend.main')
@section('title', 'Services | Elite Guard Inc.')

@section('content')
    <style>
        /* Breadcrumb Styles */
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
            padding: 100px 0 !important;
            text-align: center;
            border-radius: 20px;
            margin-top: 30px;
            margin-bottom: 50px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }

        .rts__breadcrumb__content::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, rgba(15, 23, 42, 0.75) 0%, rgba(11, 15, 25, 0.85) 100%) !important;
            z-index: 1;
            border-radius: inherit;
        }

        .rts__breadcrumb__content .list {
            display: flex;
            justify-content: center;
            align-items: center;
            list-style: none !important;
            padding: 0 !important;
            margin: 0 0 15px 0 !important;
            gap: 12px;
            position: relative;
            z-index: 2;
        }

        .rts__breadcrumb__content .list li {
            display: flex;
            align-items: center;
            color: rgba(255, 255, 255, 0.8) !important;
            font-size: 15px;
            font-weight: 500;
        }

        .rts__breadcrumb__content .list li a {
            color: #ffffff !important;
            text-decoration: none !important;
            transition: color 0.3s;
        }

        .rts__breadcrumb__content .list li a:hover {
            color: #b8860b !important;
        }

        .rts__breadcrumb__content .list li i {
            font-size: 11px;
            color: rgba(255, 255, 255, 0.5);
        }

        .rts__breadcrumb__content .title {
            color: #ffffff !important;
            font-size: 42px !important;
            font-weight: 800 !important;
            margin: 0 !important;
            position: relative;
            z-index: 2;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        /* Fix global white text issue on headings */
        .services-section {
            background-color: #f8f9fa;
        }

        .services-section h2,
        .services-section h3,
        .services-section h4 {
            color: #111 !important;
        }

        /* Modern Service Card Design */
        .modern-service-card {
            background: #fff;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: all 0.4s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
            border: 1px solid rgba(0, 0, 0, 0.03);
        }

        .modern-service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .card-img-wrapper {
            position: relative;
            height: 220px;
            overflow: hidden;
        }

        .card-img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .modern-service-card:hover .card-img-wrapper img {
            transform: scale(1.08);
        }

        .card-content {
            padding: 30px 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .card-content h3 {
            font-size: 1.3rem;
            font-weight: 800;
            margin-bottom: 15px;
            line-height: 1.3;
        }

        .card-content p {
            color: #555;
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 25px;
            flex-grow: 1;
        }

        .btn-read-more {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 10px 20px;
            background-color: #f8f9fa;
            color: #111;
            font-weight: 700;
            border-radius: 8px;
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: 0.9rem;
        }

        .btn-read-more i {
            margin-left: 8px;
            font-size: 0.8rem;
            transition: transform 0.3s ease;
        }

        .btn-read-more:hover {
            background-color: #b8860b;
            color: #fff !important;
        }

        .btn-read-more:hover i {
            transform: translateX(4px);
        }
    </style>

    <section class="rts__breadcrumb__area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="rts__breadcrumb__content"
                        style="background-image: url('{{ asset('frontend/images/industries/banner.png') }}');">
                        <ul class="list">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><i class="fa-solid fa-chevron-right"></i></li>
                            @if($selected_category)
                                <li><a href="{{ route('services') }}">Services</a></li>
                                <li><i class="fa-solid fa-chevron-right"></i></li>
                                <li>{{ $selected_category->name }}</li>
                            @else
                                <li>Services</li>
                            @endif
                        </ul>
                        <h2 class="title rts-text-anime">
                            {{ $selected_category ? $selected_category->name : 'Our Security Services' }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services-section py-5">
        <div class="container">
            <!-- Header -->
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-lg-8 text-center">
                    <p class="text-uppercase mb-2" style="font-weight: 700; letter-spacing: 2px; color: #b8860b;">
                        Professional Protection</p>
                    <h2 class="title text-dark"
                        style="font-size: 2.5rem; line-height: 1.2; margin-bottom: 20px; font-weight: 800;">
                        Comprehensive <span style="color: #b8860b;">Security Solutions</span>
                    </h2>
                    <p class="text-muted mx-auto" style="font-size: 1.1rem; max-width: 800px;">
                        We offer a wide range of highly specialized security services to ensure the safety, protection, and
                        peace of mind of your personnel, assets, and properties.
                    </p>
                </div>
            </div>

            <div class="row g-4">
                @forelse($services as $service)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".{{ ($loop->index % 5) + 2 }}s">
                        <div class="modern-service-card">
                            @if($service->feature_image)
                                <div class="card-img-wrapper">
                                    <img src="{{ asset($service->feature_image) }}" alt="{{ $service->name }}">
                                </div>
                            @else
                                <div class="card-img-wrapper">
                                    <img src="{{ asset('frontend/images/industries/commercial.png') }}" alt="{{ $service->name }}">
                                </div>
                            @endif
                            <div class="card-content">
                                <h3>{{ $service->name }}</h3>
                                <!-- Using short_description to keep cards clean and uniform -->
                                <p>{{ Str::limit($service->short_description, 120) }}</p>

                                <div class="mt-auto pt-3">
                                    <a href="{{ route('services.details', $service->id) }}" class="btn-read-more">
                                        View Details <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center" style="padding: 100px 0;">
                        <h3 style="color: #002524;">No services found.</h3>
                        <p style="color: #666;">Check back later for updates on our services.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection