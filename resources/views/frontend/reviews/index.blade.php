@extends('layouts.frontend.main')

@section('title', 'Reviews | Diamond Landscapes')

@section('content')
<style>
    /* Carousel Button Styles */
    .review-prev,
    .review-next {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        z-index: 100;
        transition: all 0.3s ease;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: #34A853 !important;
        border: none !important;
        color: white !important;
        width: 45px;
        height: 45px;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    .review-prev {
        left: -25px;
    }

    .review-next {
        right: -25px;
    }

    .review-prev:hover,
    .review-next:hover {
        background: #2d8e47 !important;
        transform: translateY(-50%) scale(1.1);
    }

    .review-slider {
        overflow: hidden !important;
        position: relative;
        padding: 20px 10px;
    }

    @media screen and (max-width: 1200px) {
        .review-prev {
            left: 0;
        }

        .review-next {
            right: 0;
        }
    }

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
<section class="rts__breadcrumb__area ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="rts__breadcrumb__content"
                    data-bg-src="{{ asset('services_page_bg.jpeg') }}">
                    <ul class="list">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><i class="fa-solid fa-chevron-right"></i></li>
                        <li>Customer Reviews</li>
                    </ul>
                    <h2 class="title rts-text-anime">Customer Reviews</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- rts breadcrumb area end -->

<!-- reviews area start -->
<div class="rts-reviews-area rts-section-gap mt-5" style="background-color: #001a19;">
    <div class="container">
        <div class="row align-items-center mb--60">
            <div class="col-lg-12">
                <div class="title-area">
                    <span class="subtitle" style="color: #34A853;">Testimonials</span>
                    <h2 class="title" style="color: white;">What Our Clients Are Saying</h2>
                </div>
            </div>
            <!-- <div class="col-lg-4 text-lg-end">
                    <a href="#" class="rts-btn btn-primary">Write a Review on Google <i
                            class="fa-brands fa-google ms-2"></i></a>
                </div> -->
        </div>

        <div class="review__items__wrapper" style="position: relative;">
            <div class="swiper review-slider">
                <div class="swiper-wrapper">
                    @php
                    $dummy_reviews = [
                    [
                    'name' => 'John Smith',
                    'designation' => 'Residential Client',
                    'text' => 'Diamond Landscapes transformed our backyard into a stunning oasis. Their attention to detail on the hardscape was incredible. Highly recommend!',
                    ],
                    [
                    'name' => 'Sarah Williams',
                    'designation' => 'Property Manager',
                    'text' => "We've been using them for our commercial maintenance for two years. They are reliable, professional, and our grounds have never looked better.",
                    ],
                    [
                    'name' => 'Michael Brown',
                    'designation' => 'Homeowner',
                    'text' => 'Excellent irrigation install. They were quick, clean, and the system works perfectly. Saved us so much time and water.',
                    ],
                    [
                    'name' => 'Emily Davis',
                    'designation' => 'Garden Enthusiast',
                    'text' => 'The seasonal flower planting they did for our entrance is breathtaking. We get compliments from neighbors every single day!',
                    ],
                    [
                    'name' => 'Robert Wilson',
                    'designation' => 'Estate Owner',
                    'text' => "Professional team, top-tier equipment, and amazing results. They handled our large-scale sod installation perfectly.",
                    ],
                    [
                    'name' => 'Jessica Taylor',
                    'designation' => 'Local Business Owner',
                    'text' => 'Great communication throughout the project. They listened to our needs and delivered exactly what was promised on time.',
                    ],
                    [
                    'name' => 'David Martinez',
                    'designation' => 'Residential Client',
                    'text' => "The retaining wall they built is both functional and beautiful. It solved our drainage issues while looking like a piece of art.",
                    ],
                    [
                    'name' => 'Lisa Anderson',
                    'designation' => 'Homeowner',
                    'text' => 'Fast, efficient, and very friendly. The cleanup after the tree trimming was impeccable. Not a single leaf was left behind!',
                    ],
                    ];
                    @endphp

                    @foreach ($dummy_reviews as $review)
                    <div class="swiper-slide">
                        <div class="single-review-card p-5"
                            style="background: #001514; border: 1px solid rgba(255,255,255,0.1); border-radius: 12px; height: 100%; display: flex; flex-direction: column;">
                            <div class="rating mb-4" style="color: #FFD700;">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <p class="desc mb-5"
                                style="color: rgba(255,255,255,0.8); font-style: italic; flex-grow: 1;">
                                "{{ $review['text'] }}"</p>
                            <div class="author-info d-flex align-items-center">
                                <div class="info">
                                    <h5 class="name mb-0" style="color: white;">{{ $review['name'] }}</h5>
                                    <span class="designation"
                                        style="color: #34A853; font-size: 14px;">{{ $review['designation'] }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Navigation Buttons -->
            <button class="rts-btn-prev review-prev">
                <i class="fa-light fa-chevron-left"></i>
            </button>
            <button class="rts-btn-next review-next">
                <i class="fa-light fa-chevron-right"></i>
            </button>
        </div>
    </div>
</div>
<!-- reviews area end -->

<script>
    window.addEventListener('load', function() {
        if (typeof Swiper !== 'undefined') {
            new Swiper(".review-slider", {
                slidesPerView: 3,
                spaceBetween: 30,
                loop: true,
                centeredSlides: false,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false,
                },
                navigation: {
                    nextEl: ".review-next",
                    prevEl: ".review-prev",
                },
                breakpoints: {
                    0: {
                        slidesPerView: 1
                    },
                    768: {
                        slidesPerView: 2
                    },
                    1200: {
                        slidesPerView: 3
                    }
                }
            });
        }
    });
</script>
@endsection