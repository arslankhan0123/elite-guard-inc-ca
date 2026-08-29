@extends('layouts.frontend.main')
@section('title', $career->title)

@section('content')
    <script>
        document.addEventListener("DOMContentLoaded", function () {
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
        <section class="tj-page-header section-gap-x" data-bg-image="{{ $career->feature_image ? asset($career->feature_image) : '{{asset('6.jpg')}}' }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tj-page-header-content text-center">
                            <h1 class="tj-page-title">{{ $career->title }}</h1>
                            <div class="tj-page-link">
                                <span><i class="tji-home"></i></span>
                                <span>
                                    <a href="{{ route('home') }}">Home</a>
                                </span>
                                <span><i class="tji-arrow-right"></i></span>
                                <span>
                                    <a href="{{ route('careers') }}">Careers</a>
                                </span>
                                <span><i class="tji-arrow-right"></i></span>
                                <span>
                                    <span>Job Details</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-header-overlay" data-bg-image="{{ $career->feature_image ? asset($career->feature_image) : 'https://themejunction.net/html/bexon/demo/assets/images/shape/pheader-overlay.webp' }}"></div>
        </section>
        <!-- end: Breadcrumb Section -->

        <!-- start: Career Details Section -->
        <section class="tj-blog-section section-gap slidebar-stickiy-container">
            <div class="container">
                <div class="row row-gap-5">
                    <div class="col-lg-8">
                        <div class="post-details-wrapper">
                            @if($career->feature_image)
                            <div class="blog-images wow fadeInUp" data-wow-delay=".1s">
                                <img src="{{ asset($career->feature_image) }}" alt="{{ $career->title }}" style="width: 100%; border-radius: 15px;">
                            </div>
                            @endif
                            
                            <div class="tj-careers-tag mb-20 mt-30">
                                <span class="badge bg-primary text-white p-2 px-3 rounded-pill">{{ $career->job_type }}</span>
                                <span class="badge bg-secondary text-white p-2 px-3 rounded-pill">{{ $career->category }}</span>
                                @if($career->is_urgent)
                                    <span class="badge bg-danger text-white p-2 px-3 rounded-pill">Urgent</span>
                                @endif
                            </div>

                            <h2 class="title title-anim mb-20">{{ $career->title }}</h2>
                            
                            <div class="blog-meta mb-30">
                                <span><i class="tji-location"></i> {{ $career->location }}</span>
                                <span class="ms-3"><i class="tji-price"></i> {{ $career->salary }} / {{ $career->salary_unit }}</span>
                            </div>

                            <div class="blog-text">
                                <div class="mb-4">
                                    <h4 class="mb-2">Overview</h4>
                                    <p>{{ $career->short_description }}</p>
                                </div>
                                <hr>
                                <div class="mt-4 job-description">
                                    {!! $career->description !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="tj-main-sidebar slidebar-stickiy">
                            <div class="tj-sidebar-widget p-4 bg-light rounded-4 mb-4 wow fadeInUp" data-wow-delay=".1s">
                                <h4 class="widget-title mb-3">Apply for this position</h4>
                                <p class="small text-muted mb-4">Are you a good fit for this role? Click the button below to send us your information or contact us directly.</p>
                                <a href="{{ route('contact') }}" class="tj-primary-btn w-100 text-center">
                                    <span class="btn-text"><span>Apply Now</span></span>
                                    <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                </a>
                            </div>

                            <div class="tj-sidebar-widget widget-feature-item wow fadeInUp" data-wow-delay=".3s">
                                <div class="feature-box">
                                    <div class="feature-content">
                                        <h2 class="title">Need Help?</h2>
                                        <span>Contact Support</span>
                                        <a class="read-more feature-contact" href="{{ route('contact') }}">
                                            <i class="tji-mail-2"></i>
                                            <span>Contact Us</span>
                                        </a>
                                    </div>
                                    <div class="feature-images">
                                        <img src="https://themejunction.net/html/bexon/demo/assets/images/cta/cta-bg.webp" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: Career Details Section -->

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
