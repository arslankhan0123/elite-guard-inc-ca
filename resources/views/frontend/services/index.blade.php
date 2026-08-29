@extends('layouts.frontend.main')
@section('title', 'Services')

@section('content')
<style>
    .rts__breadcrumb__content {
        position: relative;
        overflow: hidden;
        z-index: 1;
    }

    .rts__breadcrumb__content::before {
        content: "";
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.45);
        /* black overlay */
        z-index: -1;
        border-radius: inherit;
    }

    .rts__breadcrumb__content .list,
    .rts__breadcrumb__content .title {
        position: relative;
        z-index: 2;
    }
</style>
<!-- rts breadcrumb area start -->
<section class="rts__breadcrumb__area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="rts__breadcrumb__content"
                    data-bg-src="{{ asset('services_page_bg.jpeg') }}">
                    <ul class="list">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><i class="fa-solid fa-chevron-right"></i></li>
                        <li><a href="{{ route('services') }}">Our Services</a></li>
                        @if($selected_category)
                        <li><i class="fa-solid fa-chevron-right"></i></li>
                        <li><a href="#">{{ $selected_category->name }}</a></li>
                        @endif
                    </ul>
                    <h2 class="title rts-text-anime">{{ $selected_category ? $selected_category->name : 'Our Services' }}</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- rts breadcrumb area end -->

<!-- rts service area start -->
<section class="rts-service-inner-area rts-section-gap ">
    <div class="container">
        <div class="rts-service-inner-wrapper">
            @if($selected_category && (stripos($selected_category->name, 'irrigation') !== false || stripos($selected_category->name, 'landscaping') !== false))
                <div class="irrigation-services-details pt-5">
                    @forelse($services as $index => $service)
                    <div class="service-detail-card mb-5 wow fadeInUp" data-wow-delay=".{{ ($loop->index % 5) + 2 }}s" style="background: #fff; border-radius: 16px; box-shadow: 0 10px 40px rgba(0,37,36,0.06); overflow: hidden; border: 1px solid rgba(0,37,36,0.04);">
                        <div class="row g-0 align-items-center {{ $index % 2 != 0 ? 'flex-row-reverse' : '' }}">
                            @if($service->feature_image)
                            <div class="col-lg-5 p-3">
                                <div class="thumbnail" style="height: 100%; min-height: 300px;">
                                    <img src="{{ asset($service->feature_image) }}" alt="{{ $service->name }}" style="width: 100%; height: 100%; min-height: 300px; max-height: 380px; object-fit: cover; border-radius: 12px;">
                                </div>
                            </div>
                            @endif
                            <div class="{{ $service->feature_image ? 'col-lg-7' : 'col-12' }}">
                                <div class="content rts__service__details__content" style="padding: 40px 50px;">
                                    <span style="color: #34A853; font-weight: 700; text-transform: uppercase; font-size: 14px; letter-spacing: 1px; display: block; margin-bottom: 10px;">{{ $selected_category->name }}</span>
                                    <h2 class="title" style="font-size: 32px; font-weight: 700; margin-bottom: 20px; color: #002524; line-height: 1.2;">{{ $service->name }}</h2>
                                    <div class="desc tt" style="color: #555; line-height: 1.7; font-size: 15px;">
                                        {!! $service->long_description !!}
                                    </div>
                                    <div style="margin-top: 35px;">
                                        <a href="{{ route('quote') }}" class="rts-btn btn-primary" style="padding: 12px 30px; font-weight: 600; border-radius: 8px;">
                                            Get a Quote <i class="fa-solid fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="text-center" style="padding: 100px 0;">
                        <h3 style="color: #002524;">No services found.</h3>
                        <p style="color: #666;">Check back later for updates on our services.</p>
                    </div>
                    @endforelse
                </div>
            @else
                <div class="irrigation-services-details pt-5">
                    @forelse($services as $index => $service)
                    <div class="service-detail-card mb-5 wow fadeInUp" data-wow-delay=".{{ ($loop->index % 5) + 2 }}s" style="background: #fff; border-radius: 16px; box-shadow: 0 10px 40px rgba(0,37,36,0.06); overflow: hidden; border: 1px solid rgba(0,37,36,0.04);">
                        <div class="row g-0 align-items-center {{ $index % 2 != 0 ? 'flex-row-reverse' : '' }}">
                            @if($service->feature_image)
                            <div class="col-lg-5 p-3">
                                <div class="thumbnail" style="height: 100%; min-height: 300px;">
                                    <img src="{{ asset($service->feature_image) }}" alt="{{ $service->name }}" style="width: 100%; height: 100%; min-height: 300px; max-height: 380px; object-fit: cover; border-radius: 12px;">
                                </div>
                            </div>
                            @endif
                            <div class="{{ $service->feature_image ? 'col-lg-7' : 'col-12' }}">
                                <div class="content rts__service__details__content" style="padding: 40px 50px;">
                                    <span style="color: #34A853; font-weight: 700; text-transform: uppercase; font-size: 14px; letter-spacing: 1px; display: block; margin-bottom: 10px;">Category Name</span>
                                    <h2 class="title" style="font-size: 32px; font-weight: 700; margin-bottom: 20px; color: #002524; line-height: 1.2;">{{ $service->name }}</h2>
                                    <div class="desc tt" style="color: #555; line-height: 1.7; font-size: 15px;">
                                        {!! $service->long_description !!}
                                    </div>
                                    <div style="margin-top: 35px;">
                                        <a href="{{ route('quote') }}" class="rts-btn btn-primary" style="padding: 12px 30px; font-weight: 600; border-radius: 8px;">
                                            Get a Quote <i class="fa-solid fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="text-center" style="padding: 100px 0;">
                        <h3 style="color: #002524;">No services found.</h3>
                        <p style="color: #666;">Check back later for updates on our services.</p>
                    </div>
                    @endforelse
                </div>
            @endif
        </div>
    </div>
</section>
<!-- rts service area end -->
@endsection