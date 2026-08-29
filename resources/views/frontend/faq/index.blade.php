@extends('layouts.frontend.main')

@section('title', 'FAQ | Diamond Landscapes')

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
<section class="rts__breadcrumb__area ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="rts__breadcrumb__content" data-bg-src="{{ asset('services_page_bg.jpeg') }}">
                    <ul class="list">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><i class="fa-solid fa-chevron-right"></i></li>
                        <li>FAQ</li>
                    </ul>
                    <h2 class="title rts-text-anime">Frequently Asked Questions</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- rts breadcrumb area end -->

<!-- rts-faq area start -->
<section class="rts__faq__area rts-section-gap inner-bg ">
    <div class="container-1428">
        <div class="section-title text-center inner-style">
            <span class="sub-title" style="color: #34A853;">FAQ</span>
            <h2 class="heading-title rts-text-anime">Frequently Asked Questions</h2>
        </div>
        <div class="rts__faq__wrapper mt-45">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="faq__accordion__wrapper">
                        <div class="accordion" id="rts-faq-accordion">
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <span class="text">
                                            <span class="number">01.</span>
                                            <span class="title">Do you offer free estimates?</span>
                                        </span>
                                        <i class="fa-solid fa-chevron-down icon"></i>
                                    </button>
                                </div>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#rts-faq-accordion">
                                    <div class="accordion-body">
                                        Yes, we provide complimentary, no-obligation estimates for all our services. Whether you're looking for a simple lawn maintenance plan or a complete landscape redesign, our team will visit your property, discuss your vision, and provide a detailed quote.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <span class="text">
                                            <span class="number">02.</span>
                                            <span class="title">Do you do commercial contracts?</span>
                                        </span>
                                        <i class="fa-solid fa-chevron-down icon"></i>
                                    </button>
                                </div>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#rts-faq-accordion">
                                    <div class="accordion-body">
                                        Absolutely. We specialize in commercial landscape maintenance and snow removal contracts. We work with property managers, HOAs, and business owners to ensure their commercial properties remain safe, professional, and visually appealing year-round.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <span class="text">
                                            <span class="number">03.</span>
                                            <span class="title">Do you install irrigation systems?</span>
                                        </span>
                                        <i class="fa-solid fa-chevron-down icon"></i>
                                    </button>
                                </div>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#rts-faq-accordion">
                                    <div class="accordion-body">
                                        Yes, we offer full-service irrigation installation, repair, and maintenance. Our systems are designed for efficiency and reliability, ensuring your landscape gets the right amount of water while minimizing waste.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        <span class="text">
                                            <span class="number">04.</span>
                                            <span class="title">Do you provide snow removal?</span>
                                        </span>
                                        <i class="fa-solid fa-chevron-down icon"></i>
                                    </button>
                                </div>
                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#rts-faq-accordion">
                                    <div class="accordion-body">
                                        Yes, Diamond Landscapes provides professional snow plowing, de-icing, and sidewalk clearing for both residential and commercial clients. We monitor weather conditions closely to ensure timely and effective service.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        <span class="text">
                                            <span class="number">05.</span>
                                            <span class="title">What areas do you service?</span>
                                        </span>
                                        <i class="fa-solid fa-chevron-down icon"></i>
                                    </button>
                                </div>
                                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#rts-faq-accordion">
                                    <div class="accordion-body">
                                        We proudly service [Your Service Area/Cities]. If you're unsure if your property falls within our service range, please give us a call or send us a message, and we'll be happy to let you know!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- rts-faq area end -->

<style>
    /* FAQ Section - Premium Professional Redesign */
    .rts__faq__area {
        background-color: transparent;
        padding: 80px 0;
    }

    .faq__accordion__wrapper .accordion-item {
        border: 1px solid rgba(255, 255, 255, 0.1) !important;
        margin-bottom: 15px;
        border-radius: 10px !important;
        background: #001514 !important;
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        overflow: hidden;
    }

    .faq__accordion__wrapper .accordion-item:hover {
        border-color: #34A853 !important;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
    }

    .faq__accordion__wrapper .accordion-button {
        padding: 20px 25px !important;
        font-size: 18px !important;
        font-weight: 600 !important;
        color: #ffffff !important;
        background: transparent !important;
        border: none !important;
        box-shadow: none !important;
        display: flex !important;
        align-items: center !important;
        justify-content: space-between !important;
    }

    .faq__accordion__wrapper .accordion-button:not(.collapsed) {
        color: #34A853 !important;
        padding-bottom: 10px !important;
    }

    .faq__accordion__wrapper .accordion-button .text {
        display: flex !important;
        align-items: center !important;
        gap: 0 !important;
    }

    .faq__accordion__wrapper .accordion-button .number {
        font-size: 14px !important;
        color: #ffffff !important;
        margin-right: 20px !important;
        font-weight: 700 !important;
        width: 35px !important;
        height: 35px !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        border-radius: 6px !important;
        background: rgba(255, 255, 255, 0.05) !important;
        transition: all 0.3s ease !important;
    }

    .faq__accordion__wrapper .accordion-button:not(.collapsed) .number {
        background: #34A853 !important;
        color: #ffffff !important;
    }

    .faq__accordion__wrapper .accordion-button .title {
        color: inherit !important;
        font-size: inherit !important;
        line-height: 1.4 !important;
    }

    .faq__accordion__wrapper .accordion-button .icon {
        font-size: 14px !important;
        color: #cbd5e0 !important;
        transition: transform 0.4s ease !important;
        margin-left: auto !important;
    }

    .faq__accordion__wrapper .accordion-button:not(.collapsed) .icon {
        color: #34A853 !important;
        transform: rotate(180deg) !important;
    }

    .faq__accordion__wrapper .accordion-button::after {
        display: none !important;
    }

    .faq__accordion__wrapper .accordion-body {
        padding: 0 25px 25px 80px !important;
        font-size: 16px !important;
        line-height: 1.6 !important;
        color: rgba(255, 255, 255, 0.7) !important;
        background: transparent !important;
    }
</style>
@endsection