@extends('layouts.frontend.main')
@section('title', 'Careers')

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
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const header = document.querySelector(".header-area");
        if (header) {
            header.classList.remove("header-2");
            header.classList.add("header-1");
        }

        const logo = document.querySelector(".logo img");
        if (logo) {
            logo.src = "{{asset('logo.png')}}";
            // logo.src = "{{ asset('frontend/assets/images/logos/logo.webp') }}";
        }
    });
</script>
<main id="primary" class="site-main">
    <div class="space-for-header"></div>
    <!-- start: Breadcrumb Section -->
    <section class="tj-page-header section-gap-x" data-bg-image="{{asset('6.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tj-page-header-content text-center">
                        <h1 class="tj-page-title">Careers</h1>
                        <div class="tj-page-link">
                            <span><i class="tji-home"></i></span>
                            <span>
                                <a href="{{ route('home') }}">Home</a>
                            </span>
                            <span><i class="tji-arrow-right"></i></span>
                            <span>
                                <span>Careers</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-header-overlay" data-bg-image="https://themejunction.net/html/bexon/demo/assets/images/shape/pheader-overlay.webp"></div>
    </section>
    <!-- end: Breadcrumb Section -->

    <!-- start: Careers Section -->
    <section class="tj-careers-section section-gap">
        <div class="container">
            <div class="row rg-30">
                @foreach($careers as $career)
                <div class="col-xl-4 col-md-6">
                    <div class="tj-careers wow fadeInUp" data-wow-delay="0.1s">
                        <div class="tj-careers-icon mb-30">
                            @if($career->feature_image)
                                <img src="{{ asset($career->feature_image) }}" alt="{{ $career->title }}" style="width: 50px; height: 50px; object-fit: contain;">
                            @else
                                <i class="tji-strategy"></i>
                            @endif
                        </div>
                        <div class="tj-careers-tag">
                            <span>{{ $career->job_type }} / {{ $career->category }}</span> 
                            @if($career->is_urgent)
                                <span>Urgent</span>
                            @endif
                        </div>
                        <h4 class="tj-careers-title">
                            <a href="{{ route('careers.details', $career->slug) }}">{{ $career->title }}</a>
                        </h4>
                        <div class="tj-careers-salary">
                            <span>{{ $career->salary }}</span> / {{ $career->salary_unit }}
                        </div>
                        <div class="tj-careers-bottom">
                            <span class="location"><i class="tji-location"></i>{{ $career->location }}</span>
                            <a href="{{ route('careers.details', $career->slug) }}" class="tj-careers-btn">
                                <div class="btn-text">
                                    <span>Apply Now</span>
                                </div>
                                <span class="btn-icon">
                                    <i class="tji-arrow-right"></i>
                                    <i class="tji-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- post pagination -->
            {{-- <div class="tj-pagination d-flex justify-content-center">
                <ul>
                    <li>
                        <span aria-current="page" class="page-numbers current">01</span>
                    </li>
                    <li>
                        <a class="page-numbers" href="#">02</a>
                    </li>
                    <li>
                        <a class="next page-numbers" href="#"><i class="tji-arrow-right-long"></i></a>
                    </li>
                </ul>
            </div> --}}
        </div>
    </section>
    <!-- end: Careers Section -->

    <!-- start: Cta Section -->
    <section class="tj-cta-section mb-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-area">
                        <div class="cta-content">
                            <h2 class="title title-anim">Let’s Build Future Together.</h2>
                            <div class="cta-btn wow fadeInUp" data-wow-delay=".6s">
                                <a class="tj-primary-btn btn-dark" href="{{ route('contact') }}">
                                    <span class="btn-text"><span>Get Started Now</span></span>
                                    <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                </a>
                            </div>
                        </div>
                        <div class="cta-img">
                            <img src="https://themejunction.net/html/bexon/demo/assets/images/cta/cta-bg.webp" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Cta Section -->
</main>
@endsection