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
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
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
        background: linear-gradient(180deg, rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0.7) 100%) !important;
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
                        <!-- <div class="service__widget">
                            <div class="service__widget__title">
                                <h3>Process Work</h3>
                            </div>
                            <div class="process-work-content">
                                <p>We provide efficient, scalable, and sustainable solar energy solutions for homes,
                                    businesses, and industries, helping you reduce electricity bills and contribute to a
                                    greener planet.</p>
                                <div class="row gy-3">
                                    @foreach($service->highlights as $index => $highlight)
                                    <div class="col-12">
                                        <div class="choose__single__item style-2">
                                            <div class="content">
                                                <div class="top">
                                                    <div class="icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="30" viewBox="0 0 21 30" fill="none">
                                                            <path d="M5.33539 29.7899C5.11796 29.6981 4.93727 29.5366 4.82183 29.3307C4.7064 29.1248 4.66279 28.8864 4.69789 28.653L6.63164 16.0624H1.49977C1.33707 16.0668 1.17555 16.0337 1.02765 15.9658C0.879755 15.8978 0.749446 15.7968 0.646775 15.6705C0.544105 15.5442 0.471818 15.3961 0.435493 15.2374C0.399168 15.0788 0.399775 14.9139 0.437267 14.7555L3.62477 0.943017C3.68085 0.705303 3.81713 0.494172 4.01065 0.345162C4.20417 0.196153 4.44311 0.118364 4.68727 0.124891H15.3123C15.471 0.124352 15.6278 0.159384 15.7712 0.227415C15.9147 0.295445 16.041 0.394744 16.141 0.518016C16.2424 0.642681 16.3142 0.788726 16.351 0.945159C16.3879 1.10159 16.3887 1.26434 16.3535 1.42114L14.5154 9.68739H19.5623C19.7614 9.68699 19.9566 9.74257 20.1257 9.84777C20.2948 9.95297 20.4309 10.1036 20.5185 10.2824C20.5947 10.454 20.6239 10.6428 20.6034 10.8294C20.5829 11.016 20.5133 11.1939 20.4016 11.3449L6.58914 29.4074C6.49579 29.5458 6.37115 29.6602 6.22531 29.7414C6.07948 29.8227 5.91656 29.8684 5.74977 29.8749C5.60759 29.8722 5.46713 29.8434 5.33539 29.7899V29.7899Z" fill="#34A853" />
                                                        </svg>
                                                    </div>

                                                    <h2 class="number">
                                                        {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                                                    </h2>
                                                </div>

                                                <h3 class="title">
                                                    <a href="#">
                                                        {{ $highlight->title }}
                                                    </a>
                                                </h3>

                                                <p>
                                                    {{ $highlight->description }}
                                                </p>

                                                <a href="#" class="rts-btn btn-primary">
                                                    Learn More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div> -->

                        <!-- <div class="service__widget">
                                <div class="service__widget__title border-0">
                                    <h3>Download</h3>
                                </div>
                                <div class="service__widget__download">
                                    <div class="download__item">
                                        <div class="left">
                                            <div class="icon">
                                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M18.4336 2.57889C17.9553 2.10056 17.127 2.42723 17.127 3.09223V7.16389C17.127 8.86723 18.5736 10.2789 20.3353 10.2789C21.4436 10.2906 22.9836 10.2906 24.302 10.2906C24.967 10.2906 25.317 9.5089 24.8503 9.04223C23.1703 7.35056 20.1603 4.30556 18.4336 2.57889Z" fill="#002524" />
                                                    <path d="M23.916 11.887H20.5443C17.7793 11.887 15.5277 9.63536 15.5277 6.87036V3.4987C15.5277 2.85703 15.0027 2.33203 14.361 2.33203H9.41435C5.82102 2.33203 2.91602 4.66537 2.91602 8.83037V19.167C2.91602 23.332 5.82102 25.6654 9.41435 25.6654H18.5843C22.1777 25.6654 25.0827 23.332 25.0827 19.167V13.0537C25.0827 12.412 24.5577 11.887 23.916 11.887ZM13.416 20.707H8.74935C8.27102 20.707 7.87435 20.3104 7.87435 19.832C7.87435 19.3537 8.27102 18.957 8.74935 18.957H13.416C13.8943 18.957 14.291 19.3537 14.291 19.832C14.291 20.3104 13.8943 20.707 13.416 20.707ZM15.7493 16.0404H8.74935C8.27102 16.0404 7.87435 15.6437 7.87435 15.1654C7.87435 14.687 8.27102 14.2904 8.74935 14.2904H15.7493C16.2277 14.2904 16.6243 14.687 16.6243 15.1654C16.6243 15.6437 16.2277 16.0404 15.7493 16.0404Z" fill="#002524" />
                                                </svg>
                                            </div>
                                            <div class="text">
                                                <h4>Our Brochures</h4>
                                                <span>Download</span>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <a href="#" class="down__link">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="22" viewBox="0 0 21 22" fill="none">
                                                    <path d="M10.2549 0.677734C10.0035 0.677795 9.76238 0.777703 9.58459 0.955492C9.4068 1.13328 9.3069 1.3744 9.30684 1.62583V12.4419L5.68105 8.8161C5.593 8.72806 5.48847 8.65823 5.37343 8.61059C5.25839 8.56295 5.13509 8.53844 5.01058 8.53845C4.75911 8.53847 4.51795 8.63838 4.34015 8.81621C4.16235 8.99404 4.06248 9.23522 4.0625 9.48669C4.06252 9.73815 4.16244 9.97931 4.34027 10.1571L9.58443 15.4006C9.7623 15.5783 10.0035 15.6782 10.2549 15.6782C10.5064 15.6782 10.7476 15.5783 10.9254 15.4006L16.1696 10.1562C16.3474 9.9784 16.4473 9.73724 16.4474 9.48577C16.4474 9.23431 16.3475 8.99313 16.1697 8.8153C15.9919 8.63747 15.7508 8.53756 15.4993 8.53754C15.2478 8.53752 15.0066 8.63739 14.8288 8.81519L11.203 12.4419V1.62583C11.203 1.3744 11.1031 1.13328 10.9253 0.955492C10.7475 0.777703 10.5064 0.677795 10.2549 0.677734Z" fill="#002524" />
                                                    <path d="M0.948097 13.2137C0.696646 13.2137 0.455494 13.3136 0.277691 13.4914C0.0998884 13.6692 0 13.9104 0 14.1618V17.286C0.00114616 18.3209 0.412762 19.3131 1.14454 20.0448C1.87632 20.7766 2.86849 21.1882 3.90338 21.1894H16.6083C17.6432 21.1882 18.6354 20.7766 19.3672 20.0448C20.099 19.3131 20.5106 18.3209 20.5117 17.286V14.1618C20.5117 14.0373 20.4872 13.9141 20.4396 13.799C20.3919 13.684 20.3221 13.5795 20.234 13.4914C20.146 13.4034 20.0415 13.3336 19.9264 13.2859C19.8114 13.2383 19.6881 13.2137 19.5636 13.2137C19.4391 13.2137 19.3158 13.2383 19.2008 13.2859C19.0858 13.3336 18.9813 13.4034 18.8932 13.4914C18.8052 13.5795 18.7353 13.684 18.6877 13.799C18.64 13.9141 18.6155 14.0373 18.6155 14.1618V17.286C18.6149 17.8182 18.4033 18.3283 18.027 18.7046C17.6507 19.0809 17.1405 19.2926 16.6083 19.2932H3.90338C3.37123 19.2926 2.86104 19.0809 2.48475 18.7046C2.10846 18.3283 1.8968 17.8182 1.89619 17.286V14.1618C1.89622 14.0373 1.87172 13.914 1.82409 13.799C1.77645 13.6839 1.70662 13.5794 1.61857 13.4914C1.53053 13.4033 1.426 13.3335 1.31095 13.2859C1.19591 13.2382 1.07261 13.2137 0.948097 13.2137Z" fill="#002524" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="download__item">
                                        <div class="left">
                                            <div class="icon">
                                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M18.4336 2.57889C17.9553 2.10056 17.127 2.42723 17.127 3.09223V7.16389C17.127 8.86723 18.5736 10.2789 20.3353 10.2789C21.4436 10.2906 22.9836 10.2906 24.302 10.2906C24.967 10.2906 25.317 9.5089 24.8503 9.04223C23.1703 7.35056 20.1603 4.30556 18.4336 2.57889Z" fill="#002524" />
                                                    <path d="M23.916 11.887H20.5443C17.7793 11.887 15.5277 9.63536 15.5277 6.87036V3.4987C15.5277 2.85703 15.0027 2.33203 14.361 2.33203H9.41435C5.82102 2.33203 2.91602 4.66537 2.91602 8.83037V19.167C2.91602 23.332 5.82102 25.6654 9.41435 25.6654H18.5843C22.1777 25.6654 25.0827 23.332 25.0827 19.167V13.0537C25.0827 12.412 24.5577 11.887 23.916 11.887ZM13.416 20.707H8.74935C8.27102 20.707 7.87435 20.3104 7.87435 19.832C7.87435 19.3537 8.27102 18.957 8.74935 18.957H13.416C13.8943 18.957 14.291 19.3537 14.291 19.832C14.291 20.3104 13.8943 20.707 13.416 20.707ZM15.7493 16.0404H8.74935C8.27102 16.0404 7.87435 15.6437 7.87435 15.1654C7.87435 14.687 8.27102 14.2904 8.74935 14.2904H15.7493C16.2277 14.2904 16.6243 14.687 16.6243 15.1654C16.6243 15.6437 16.2277 16.0404 15.7493 16.0404Z" fill="#002524" />
                                                </svg>
                                            </div>
                                            <div class="text">
                                                <h4>Documentation</h4>
                                                <span>Download</span>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <a href="#" class="down__link">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="22" viewBox="0 0 21 22" fill="none">
                                                    <path d="M10.2549 0.677734C10.0035 0.677795 9.76238 0.777703 9.58459 0.955492C9.4068 1.13328 9.3069 1.3744 9.30684 1.62583V12.4419L5.68105 8.8161C5.593 8.72806 5.48847 8.65823 5.37343 8.61059C5.25839 8.56295 5.13509 8.53844 5.01058 8.53845C4.75911 8.53847 4.51795 8.63838 4.34015 8.81621C4.16235 8.99404 4.06248 9.23522 4.0625 9.48669C4.06252 9.73815 4.16244 9.97931 4.34027 10.1571L9.58443 15.4006C9.7623 15.5783 10.0035 15.6782 10.2549 15.6782C10.5064 15.6782 10.7476 15.5783 10.9254 15.4006L16.1696 10.1562C16.3474 9.9784 16.4473 9.73724 16.4474 9.48577C16.4474 9.23431 16.3475 8.99313 16.1697 8.8153C15.9919 8.63747 15.7508 8.53756 15.4993 8.53754C15.2478 8.53752 15.0066 8.63739 14.8288 8.81519L11.203 12.4419V1.62583C11.203 1.3744 11.1031 1.13328 10.9253 0.955492C10.7475 0.777703 10.5064 0.677795 10.2549 0.677734Z" fill="#002524" />
                                                    <path d="M0.948097 13.2137C0.696646 13.2137 0.455494 13.3136 0.277691 13.4914C0.0998884 13.6692 0 13.9104 0 14.1618V17.286C0.00114616 18.3209 0.412762 19.3131 1.14454 20.0448C1.87632 20.7766 2.86849 21.1882 3.90338 21.1894H16.6083C17.6432 21.1882 18.6354 20.7766 19.3672 20.0448C20.099 19.3131 20.5106 18.3209 20.5117 17.286V14.1618C20.5117 14.0373 20.4872 13.9141 20.4396 13.799C20.3919 13.684 20.3221 13.5795 20.234 13.4914C20.146 13.4034 20.0415 13.3336 19.9264 13.2859C19.8114 13.2383 19.6881 13.2137 19.5636 13.2137C19.4391 13.2137 19.3158 13.2383 19.2008 13.2859C19.0858 13.3336 18.9813 13.4034 18.8932 13.4914C18.8052 13.5795 18.7353 13.684 18.6877 13.799C18.64 13.9141 18.6155 14.0373 18.6155 14.1618V17.286C18.6149 17.8182 18.4033 18.3283 18.027 18.7046C17.6507 19.0809 17.1405 19.2926 16.6083 19.2932H3.90338C3.37123 19.2926 2.86104 19.0809 2.48475 18.7046C2.10846 18.3283 1.8968 17.8182 1.89619 17.286V14.1618C1.89622 14.0373 1.87172 13.914 1.82409 13.799C1.77645 13.6839 1.70662 13.5794 1.61857 13.4914C1.53053 13.4033 1.426 13.3335 1.31095 13.2859C1.19591 13.2382 1.07261 13.2137 0.948097 13.2137Z" fill="#002524" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                    </div>
                </div>
            </div>
        </div>
        @if($service->galleries->count() > 0)
        <div class="images-wrap">
            <div class="row">
                @foreach($service->galleries as $gallery)
                <div class="col-sm-6">
                    <div class="image-box wow fadeInUp" data-wow-delay=".{{ $loop->index + 3 }}s">
                        <img src="{{asset($gallery->image)}}" alt="Gallery Image"
                            style="width: 100%; height: 350px; object-fit: cover; border-radius: 12px;">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</div>
<!-- rts service details area end -->

<!-- rts faq area start -->
<section class="rts__faq__area rts-section-gap inner-bg ">
    <div class="container">
        <div class="section-title text-center position-static">
            <span class="sub-title"> FAQ</span>
            <h2 class="heading-title rts-text-anime">Frequently Asked Questions</h2>
        </div>
        <div class="rts__faq__wrapper mt-50">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="faq__accordion__wrapper">
                        <div class="accordion" id="rts-faq-accordion">
                            @if($service->faqs->count() > 0)
                            @foreach($service->faqs as $index => $faq)
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <button class="accordion-button {{ $index != 0 ? 'collapsed' : '' }}"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapse{{ $faq->id }}"
                                        aria-expanded="{{ $index == 0 ? 'true' : 'false' }}"
                                        aria-controls="collapse{{ $faq->id }}">

                                        <span class="text">
                                            <span class="number">
                                                {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}.
                                            </span>

                                            <span class="title">
                                                {{ $faq->question }}
                                            </span>
                                        </span>

                                        <i class="fa-solid fa-chevron-down icon"></i>
                                    </button>
                                </div>

                                <div id="collapse{{ $faq->id }}"
                                    class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }}"
                                    data-bs-parent="#rts-faq-accordion">

                                    <div class="accordion-body">
                                        {{ $faq->answer }}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @else
                            <p class="text-center">No FAQs available for this service.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- rts faq area end -->
@endsection