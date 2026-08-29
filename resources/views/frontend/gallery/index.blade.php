@extends('layouts.frontend.main')

@section('title', 'Product Gallery | Alberta International Traders')

@section('content')
<style>
    /* Carousel Button Styles */
    .gallery-prev,
    .gallery-next {
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

    .gallery-prev {
        left: -25px;
    }

    .gallery-next {
        right: -25px;
    }

    .gallery-prev:hover,
    .gallery-next:hover {
        background: #2d8e47 !important;
        transform: translateY(-50%) scale(1.1);
    }

    .gallery-slider {
        overflow: hidden !important;
        position: relative;
        padding: 20px 10px;
    }

    .single-gallery-item {
        position: relative;
        overflow: hidden;
        border-radius: 15px;
        cursor: pointer;
    }

    .single-gallery-item .content {
        position: absolute;
        bottom: -100%;
        left: 0;
        width: 100%;
        padding: 20px;
        background: linear-gradient(transparent, rgba(0, 0, 0, 0.9));
        transition: all 0.4s ease;
    }

    .single-gallery-item:hover .content {
        bottom: 0;
    }

    .single-gallery-item .content h5 {
        color: white;
        margin-bottom: 5px;
    }

    .single-gallery-item .content span {
        color: #34A853;
        font-size: 14px;
    }

    @media screen and (max-width: 1200px) {
        .gallery-prev {
            left: 0;
        }

        .gallery-next {
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
                    data-bg-src="https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&amp;fit=crop&amp;w=1600&amp;q=85">
                    <ul class="list">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><i class="fa-solid fa-chevron-right"></i></li>
                        <li>Product Gallery</li>
                    </ul>
                    <h2 class="title rts-text-anime">Our Product Gallery</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- rts breadcrumb area end -->

<!-- gallery area start -->
<div class="rts-gallery-area rts-section-gap mt-5" style="background-color: #001a19;">
    <div class="container">
        <div class="row mb--50 text-center">
            <div class="col-lg-12">
                <span class="subtitle" style="color: #34A853;">Our Lines of Business</span>
                <h2 class="title" style="color: white;">Industrial Products & Equipment</h2>
            </div>
        </div>

        <div class="gallery__items__wrapper" style="position: relative;">
            <div class="swiper gallery-slider">
                <div class="swiper-wrapper">
                    @php
                    $gallery_items = [
                    ['img' => 'https://images.unsplash.com/photo-1565793298595-6a879b1d9492?auto=format&fit=crop&w=900&q=85', 'title' => 'General Industry Machinery', 'cat' => 'Industrial Equipment'],
                    ['img' => 'https://images.unsplash.com/photo-1581092160562-40aa08e78837?auto=format&fit=crop&w=900&q=85', 'title' => 'Engines & Turbines', 'cat' => 'Industrial Equipment'],
                    ['img' => 'https://images.unsplash.com/photo-1513828583688-c52646db42da?auto=format&fit=crop&w=900&q=85', 'title' => 'Pumps & Oil Field Machinery', 'cat' => 'Industrial Equipment'],
                    ['img' => 'https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?auto=format&fit=crop&w=900&q=85', 'title' => 'Cranes & Heavy Machinery', 'cat' => 'Construction Equipment'],
                    ['img' => 'https://images.unsplash.com/photo-1531834685032-c34bf0d84c77?auto=format&fit=crop&w=900&q=85', 'title' => 'Excavators & Backhoes', 'cat' => 'Construction Equipment'],
                    ['img' => 'https://images.unsplash.com/photo-1530124566582-a618bc2615dc?auto=format&fit=crop&w=900&q=85', 'title' => 'Loaders & Dump Trucks', 'cat' => 'Construction Equipment'],
                    ['img' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=900&q=85', 'title' => 'Glass, Metal & Ceramics', 'cat' => 'Construction Materials'],
                    ['img' => 'https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&fit=crop&w=900&q=85', 'title' => 'Wood, Brick & Block', 'cat' => 'Construction Materials'],
                    ['img' => 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=900&q=85', 'title' => 'Natural Building Materials', 'cat' => 'Construction Materials'],
                    ['img' => 'https://images.unsplash.com/photo-1565514020179-026b92b84bb6?auto=format&fit=crop&w=900&q=85', 'title' => 'Food Processing Equipment', 'cat' => 'Food & Beverage Equipment'],
                    ['img' => 'https://images.unsplash.com/photo-1565793298595-6a879b1d9492?auto=format&fit=crop&w=900&q=85', 'title' => 'Mixers, Tanks & Filters', 'cat' => 'Food & Beverage Equipment'],
                    ['img' => 'https://images.unsplash.com/photo-1581092160562-40aa08e78837?auto=format&fit=crop&w=900&q=85', 'title' => 'Packaging & Plant Equipment', 'cat' => 'Food & Beverage Equipment'],
                    ];
                    @endphp

                    @foreach ($gallery_items as $item)
                    <div class="swiper-slide">
                        <div class="single-gallery-item">
                            <img src="{{ $item['img'] }}"
                                alt="{{ $item['title'] }}"
                                style="border-radius: 15px; width: 100%; height: 350px; object-fit: cover;">
                            <div class="content">
                                <h5 class="title">{{ $item['title'] }}</h5>
                                <span>{{ $item['cat'] }}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Navigation Buttons -->
            <button class="rts-btn-prev gallery-prev">
                <i class="fa-solid fa-arrow-left"></i>
                <!-- <i class="fa-light fa-chevron-left"></i> -->
            </button>
            <button class="rts-btn-next gallery-next">
                <i class="fa-solid fa-arrow-right"></i>
                <!-- <i class="fa-light fa-chevron-right"></i> -->
            </button>
        </div>
    </div>
</div>
<!-- gallery area end -->

<!-- Gallery Cards Grid -->
<div class="container mt-5">
    <div class="row g-4">
        @foreach ($gallery_items as $index => $item)
        <div class="col-lg-3 col-md-6 col-sm-6 mb-4"
            data-aos="fade-up"
            data-aos-delay="{{ $index * 100 }}">

            <div class="gallery-card h-100">
                <div class="gallery-image-wrapper">
                    <img src="{{ $item['img'] }}"
                        alt="{{ $item['title'] }}"
                        class="gallery-image">
                </div>

                <div class="gallery-card-content">
                    <h5>{{ $item['title'] }}</h5>
                    <span>{{ $item['cat'] }}</span>
                </div>
            </div>

        </div>
        @endforeach
    </div>
</div>

<style>
    /* Gallery Cards */
.gallery-card {
    background: #012b29;
    border-radius: 18px;
    overflow: hidden;
    transition: all 0.4s ease;
    height: 100%;
    border: 1px solid rgba(255,255,255,0.08);
    transform: translateY(0);
}

.gallery-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.25);
}

.gallery-image-wrapper {
    overflow: hidden;
    position: relative;
}

.gallery-image {
    width: 100%;
    height: 260px;
    object-fit: cover;
    transition: transform 0.6s ease;
}

.gallery-card:hover .gallery-image {
    transform: scale(1.08);
}

.gallery-card-content {
    padding: 20px;
}

.gallery-card-content h5 {
    color: #fff;
    margin-bottom: 8px;
    font-size: 18px;
    transition: color 0.3s ease;
}

.gallery-card-content span {
    color: #34A853;
    font-size: 14px;
}

.gallery-card:hover h5 {
    color: #34A853;
}
</style>

<script>
    window.addEventListener('load', function() {
        if (typeof Swiper !== 'undefined') {
            new Swiper(".gallery-slider", {
                slidesPerView: 4,
                spaceBetween: 25,
                loop: true,
                centeredSlides: false,
                autoplay: {
                    delay: 3500,
                    disableOnInteraction: false,
                },
                navigation: {
                    nextEl: ".gallery-next",
                    prevEl: ".gallery-prev",
                },
                breakpoints: {
                    0: {
                        slidesPerView: 1
                    },
                    576: {
                        slidesPerView: 2
                    },
                    992: {
                        slidesPerView: 3
                    },
                    1200: {
                        slidesPerView: 4
                    }
                }
            });
        }
    });
</script>
<link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css">

<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<script>
    AOS.init({
        duration: 900,
        once: true
    });
</script>
@endsection
