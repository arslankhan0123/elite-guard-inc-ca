@extends('layouts.frontend.main')
@section('title', 'Service Details')

@section('content')
<style>
    /* Breadcrumb Premium Overrides */
    .rts__breadcrumb__area {
        padding: 0;
        margin: 0;
    }
    .rts__breadcrumb__content {
        position: relative;
        overflow: hidden;
        z-index: 1;
        background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%) !important;
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
        background: transparent !important;
        z-index: 1;
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
        color: #34A853 !important;
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
        text-shadow: 0 2px 4px rgba(0,0,0,0.2);
    }

    /* Content Area styling */
    .rts__service__details__content {
        background: #ffffff;
        border-radius: 20px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.04);
        padding: 45px !important;
        border: 1px solid rgba(0, 0, 0, 0.04);
        margin-bottom: 30px;
    }
    .rts__service__details__content .title {
        font-size: 28px;
        font-weight: 700;
        color: #002524;
        margin-bottom: 25px;
        position: relative;
        display: inline-block;
        padding-bottom: 8px;
    }
    .rts__service__details__content .title::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        width: 50px;
        height: 3px;
        background-color: #34A853;
        border-radius: 2px;
    }
    .rts__service__details__content .tt {
        font-size: 16px;
        line-height: 1.8;
        color: #4a5568;
    }

    /* Sidebar widget styling */
    .service__widget {
        background: #0b0f19 !important; /* Premium Dark Navy */
        border: 1px solid rgba(255, 255, 255, 0.05) !important;
        border-radius: 20px !important;
        padding: 35px !important;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.05);
        margin-bottom: 30px;
    }
    .service__widget__title h3 {
        color: #ffffff !important;
        font-size: 22px !important;
        font-weight: 700 !important;
        margin-bottom: 25px !important;
        position: relative;
        padding-bottom: 12px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1) !important;
    }
    .service__widget__categories {
        list-style: none !important;
        padding: 0 !important;
        margin: 0 !important;
    }
    .service__widget__categories li {
        margin-bottom: 12px !important;
    }
    .service__widget__categories li a {
        display: flex !important;
        align-items: center !important;
        padding: 14px 20px !important;
        background: rgba(255, 255, 255, 0.03) !important;
        color: rgba(255, 255, 255, 0.8) !important;
        text-decoration: none !important;
        border-radius: 10px !important;
        font-weight: 600 !important;
        transition: all 0.3s ease !important;
        font-size: 15px !important;
        border: 1px solid rgba(255, 255, 255, 0.02) !important;
    }
    .service__widget__categories li a span {
        margin-right: 12px;
        font-size: 14px;
        color: #34A853;
        font-weight: 700;
        transition: color 0.3s;
    }
    .service__widget__categories li a:hover,
    .service__widget__categories li.active a {
        background: #34A853 !important;
        color: #ffffff !important;
        border-color: #34A853 !important;
        transform: translateX(6px);
        box-shadow: 0 8px 20px rgba(52, 168, 83, 0.25);
    }
    .service__widget__categories li.active a span,
    .service__widget__categories li a:hover span {
        color: #ffffff;
    }

    /* Images gallery */
    .images-wrap {
        margin-top: 40px;
        margin-bottom: 50px;
    }
    .image-box {
        position: relative;
        overflow: hidden;
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        transition: all 0.4s ease;
        margin-bottom: 24px;
        border: 1px solid rgba(0, 0, 0, 0.02);
    }
    .image-box img {
        transition: all 0.5s ease;
        display: block;
    }
    .image-box:hover {
        transform: translateY(-6px);
        box-shadow: 0 20px 45px rgba(0, 0, 0, 0.1);
    }
    .image-box:hover img {
        transform: scale(1.04);
    }

    /* FAQ Section */
    .rts__faq__area {
        background-color: #f8fafc;
        padding: 80px 0;
        border-top: 1px solid rgba(0, 0, 0, 0.03);
    }
    .rts__faq__area .section-title {
        margin-bottom: 50px;
    }
    .rts__faq__area .sub-title {
        color: #34A853;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        font-size: 14px;
        display: block;
        margin-bottom: 10px;
    }
    .rts__faq__area .heading-title {
        font-size: 36px;
        font-weight: 800;
        color: #002524;
    }
    .faq__accordion__wrapper .accordion-item {
        border: 1px solid rgba(0, 0, 0, 0.05) !important;
        margin-bottom: 12px;
        border-radius: 12px !important;
        background: #ffffff !important;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.01) !important;
        transition: all 0.3s ease;
        overflow: hidden;
    }
    .faq__accordion__wrapper .accordion-item:hover {
        border-color: rgba(52, 168, 83, 0.3) !important;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.03) !important;
    }
    .faq__accordion__wrapper .accordion-button {
        padding: 20px 24px !important;
        font-size: 17px !important;
        font-weight: 600;
        color: #002524 !important;
        background: transparent !important;
        box-shadow: none !important;
    }
    .faq__accordion__wrapper .accordion-button:not(.collapsed) {
        color: #34A853 !important;
    }
    .faq__accordion__wrapper .accordion-button .number {
        font-size: 13px !important;
        color: #64748b !important;
        margin-right: 15px !important;
        font-weight: 700 !important;
        width: 32px !important;
        height: 32px !important;
        display: inline-flex !important;
        align-items: center !important;
        justify-content: center !important;
        border-radius: 8px !important;
        background: #f1f5f9 !important;
        transition: all 0.3s ease !important;
    }
    .faq__accordion__wrapper .accordion-button:not(.collapsed) .number {
        background: #34A853 !important;
        color: #ffffff !important;
    }
    .faq__accordion__wrapper .accordion-button .icon {
        font-size: 14px !important;
        color: #94a3b8 !important;
        transition: transform 0.3s ease !important;
    }
    .faq__accordion__wrapper .accordion-button:not(.collapsed) .icon {
        color: #34A853 !important;
    }
    .faq__accordion__wrapper .accordion-body {
        padding: 0 24px 24px 71px !important;
        font-size: 15px !important;
        line-height: 1.7 !important;
        color: #475569 !important;
    }
</style>

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

<!-- rts breadcrumb area start -->
<section class="rts__breadcrumb__area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="rts__breadcrumb__content"
                    data-bg-src="{{ asset($service->feature_image) }}">
                    <ul class="list">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><i class="fa-solid fa-chevron-right"></i></li>
                        <li><a href="{{ route('services') }}">Our Services</a></li>
                        @if($service)
                        <li><i class="fa-solid fa-chevron-right"></i></li>
                        <li><a href="#">{{ $service->name }}</a></li>
                        @endif
                    </ul>
                    <h2 class="title rts-text-anime">{{ $service ? $service->name : 'Our Services' }}</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- rts breadcrumb area end -->

<!-- rts service details area start -->
<div class="rts__service__details__area rts-section-gapBottom2 pt-60 ">
    <div class="container">
        <div class="rts__service__details__wrapper">
            <!-- <div class="rts__service__details_image">
                    <img src="https://html.themewant.com/greenaro/assets/images/service/1.webp" alt="service-image">
                </div> -->
            <div class="row gy-5">
                <div class="col-lg-8">
                    <div class="rts__service__details__content top-sticky">
                        <div class="single__item">
                            <h2 class="title">What We Offer / Key Features</h2>
                            <p class="tt">{!! $service->long_description !!}</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="rts__service__details__sidebar">
                        <div class="service__widget">
                            <div class="service__widget__title">
                                <h3>All Services</h3>
                            </div>
                            <ul class="service__widget__categories">
                                @foreach($services as $index => $serviceItem)
                                <li class="{{ $service->id == $serviceItem->id ? 'active' : '' }}">
                                    <a href="{{ route('services.details', $serviceItem->id) }}">
                                        <span>
                                            {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}.
                                        </span>

                                        {{ $serviceItem->name }}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="service__widget" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%) !important; color: white; border: none; border-radius: 20px; padding: 30px; text-align: center; margin-top: 30px; box-shadow: 0 10px 30px rgba(0,0,0,0.15);">
                            <h4 style="font-weight: 700; color: white; margin-bottom: 15px; font-size: 18px;">Need Security Now?</h4>
                            <p style="font-size: 13px; color: rgba(255,255,255,0.7); line-height: 1.6; margin-bottom: 25px;">Get a customized security plan and transparent pricing for your property within hours.</p>
                            <a href="{{ route('quote') }}" class="btn btn-primary" style="background: #34A853; border-color: #34A853; border-radius: 30px; padding: 10px 25px; font-weight: 600; width: 100%; color: white; transition: all 0.3s;">Get a Free Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        @if($service->galleries->count() > 0)
        <div class="images-wrap" style="margin-top: 50px; margin-bottom: 50px;">
            <h4 style="font-weight: 700; margin-bottom: 25px; color: white;">Service Gallery</h4>
            <div class="gallery-slider swiper init-swiper" style="padding-bottom: 40px;">
                <script type="application/json" class="swiper-config">
                  {
                    "loop": true,
                    "speed": 600,
                    "autoplay": {
                      "delay": 3500
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
                      }
                    }
                  }
                </script>
                <div class="swiper-wrapper">
                    @foreach($service->galleries as $gallery)
                    <div class="swiper-slide">
                        <div class="image-box" style="margin-bottom: 0; border-radius: 16px; overflow: hidden; box-shadow: 0 8px 25px rgba(0,0,0,0.06);">
                            <img src="{{asset($gallery->image)}}" alt="Gallery Image"
                                style="width: 100%; height: 350px; object-fit: cover;">
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="swiper-pagination" style="position: relative; margin-top: 25px;"></div>
            </div>
        </div>
        @endif

        @if($service->faqs->count() > 0)
        <section class="rts__faq__area rts-section-gap inner-bg" style="background: #ffffff; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.02); padding: 40px; margin-top: 50px; border: 1px solid rgba(0,0,0,0.05);">
            <div class="container">
                <div class="section-title text-center position-static" style="margin-bottom: 35px;">
                    <span class="sub-title" style="color: #34A853; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 1px;">FAQ</span>
                    <h2 class="heading-title" style="font-weight: 700; color: #002524; font-size: 28px; margin-top: 5px;">Frequently Asked Questions</h2>
                </div>
                <div class="rts__faq__wrapper">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="faq__accordion__wrapper">
                                <div class="accordion" id="rts-faq-accordion">
                                    @foreach($service->faqs as $index => $faq)
                                    <div class="accordion-item" style="border: 1px solid rgba(0,0,0,0.06); border-radius: 12px; margin-bottom: 15px; overflow: hidden;">
                                        <div class="accordion-header">
                                            <button class="accordion-button {{ $index != 0 ? 'collapsed' : '' }}"
                                                type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapse{{ $faq->id }}"
                                                aria-expanded="{{ $index == 0 ? 'true' : 'false' }}"
                                                aria-controls="collapse{{ $faq->id }}"
                                                style="font-size: 16px; font-weight: 600; padding: 18px 24px; color: #002524;">
                                                <span class="text">
                                                    <span class="number" style="color: #34A853; margin-right: 8px;">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}.</span>
                                                    {{ $faq->question }}
                                                </span>
                                            </button>
                                        </div>

                                        <div id="collapse{{ $faq->id }}"
                                            class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }}"
                                            data-bs-parent="#rts-faq-accordion">
                                            <div class="accordion-body" style="padding: 20px 24px; font-size: 14.5px; line-height: 1.7; color: #475569; background: #f8fafc; border-top: 1px solid rgba(0,0,0,0.04);">
                                                {{ $faq->answer }}
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif
    </div>
</div>
@endsection