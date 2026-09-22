@extends('layouts.frontend.main')
@section('title', 'Industries We Serve | Elite Guard Inc.')

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
        text-shadow: 0 2px 4px rgba(0,0,0,0.2);
    }

    /* Page Specific Overrides */
    .industries-section {
        background-color: #f8f9fa;
        padding: 80px 0;
    }
    
    /* Fix global white text issue on headings */
    .industries-section h2, 
    .industries-section h3, 
    .industries-section h4 {
        color: #111 !important;
    }

    /* Modern Industry Card Design */
    .modern-industry-card {
        background: #fff;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        transition: all 0.4s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
        border: 1px solid rgba(0,0,0,0.03);
    }

    .modern-industry-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    }

    .card-img-wrapper {
        position: relative;
        height: 240px;
        overflow: hidden;
    }

    .card-img-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }

    .modern-industry-card:hover .card-img-wrapper img {
        transform: scale(1.08);
    }

    .card-img-overlay-custom {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 20px;
        background: linear-gradient(to top, rgba(0,0,0,0.9) 0%, rgba(0,0,0,0) 100%);
    }

    .card-img-overlay-custom h3 {
        color: #fff !important; /* Force white over the dark image gradient */
        margin: 0;
        font-size: 1.5rem;
        font-weight: 800;
        letter-spacing: 0.5px;
    }

    .card-content {
        padding: 30px 25px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .card-content p {
        color: #555;
        font-size: 0.95rem;
        line-height: 1.6;
        margin-bottom: 25px;
    }

    .service-checklist {
        list-style: none;
        padding: 0;
        margin: 0 0 25px 0;
        flex-grow: 1;
    }

    .service-checklist li {
        display: flex;
        align-items: flex-start;
        color: #444;
        font-size: 0.9rem;
        margin-bottom: 12px;
        font-weight: 500;
    }

    .service-checklist li i {
        color: #b8860b;
        margin-top: 3px;
        margin-right: 12px;
        font-size: 1.1rem;
    }

    .btn-quote-outline {
        display: inline-block;
        width: 100%;
        text-align: center;
        padding: 12px 20px;
        border: 2px solid #b8860b;
        color: #b8860b;
        font-weight: 700;
        border-radius: 8px;
        text-decoration: none;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-size: 0.9rem;
        transition: all 0.3s ease;
    }

    .btn-quote-outline:hover {
        background-color: #b8860b;
        color: #fff !important;
    }
</style>

<section class="rts__breadcrumb__area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="rts__breadcrumb__content" style="background-image: url('{{ asset('frontend/images/industries/banner.png') }}');">
                    <ul class="list">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><i class="fa-solid fa-chevron-right"></i></li>
                        <li>Industries</li>
                    </ul>
                    <h2 class="title rts-text-anime">Industries We Serve</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="industries-section">
    <div class="container">
        <!-- Header -->
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-lg-8 text-center">
                <p class="text-uppercase mb-2" style="font-weight: 700; letter-spacing: 2px; color: #b8860b;">Our Coverage Areas</p>
                <h2 class="title text-dark" style="font-size: 2.5rem; line-height: 1.2; margin-bottom: 20px; font-weight: 800;">
                    Securing Calgary's <span style="color: #b8860b;">Essential Industries</span>
                </h2>
                <p class="text-muted mx-auto" style="font-size: 1.1rem; max-width: 800px;">
                    Elite Guard Inc. provides specialized, highly-trained security personnel and comprehensive protection plans tailored to the unique challenges of diverse industries across Alberta.
                </p>
            </div>
        </div>

        @php
            $industries = [
                [
                    'title' => 'Commercial & Corporate',
                    'image' => asset('frontend/images/industries/commercial.png'),
                    'description' => 'We provide professional, highly-trained security personnel to protect corporate offices, business parks, and commercial facilities against unauthorized access and security breaches.',
                    'items' => ['Access Control', 'Concierge Security', 'CCTV Monitoring', 'After-Hours Patrols', 'Emergency Response'],
                ],
                [
                    'title' => 'Construction Sites',
                    'image' => asset('frontend/images/industries/construction.png'),
                    'description' => 'Construction sites are vulnerable to theft, vandalism, and safety hazards. Elite Guard Inc. offers specialized security solutions to keep your site, equipment, and materials safe 24/7.',
                    'items' => ['Equipment Protection', 'Perimeter Security', 'Gate House Operations', 'Mobile Patrols', 'Fire Watch'],
                ],
                [
                    'title' => 'Residential Communities',
                    'image' => asset('frontend/images/industries/residential.png'),
                    'description' => 'Ensure the safety and peace of mind of your residents. We offer tailored security services for condominiums, gated communities, and residential complexes.',
                    'items' => ['Concierge & Front Desk', 'Parking Enforcement', 'Property Patrols', 'Amenity Lock-ups', 'Visitor Management'],
                ],
                [
                    'title' => 'Events & Entertainment',
                    'image' => asset('frontend/images/industries/event.png'),
                    'description' => 'From private functions to large-scale public events, our event security teams are trained in crowd control, VIP protection, and emergency management to ensure your event runs smoothly.',
                    'items' => ['Crowd Management', 'Bag Checks & Screening', 'VIP Protection', 'Traffic Control', 'Alcohol Management'],
                ],
            ];
        @endphp

        <!-- Grid -->
        <div class="row g-4">
            @foreach($industries as $industry)
                <div class="col-lg-6 col-md-6">
                    <div class="modern-industry-card">
                        <div class="card-img-wrapper">
                            <img src="{{ $industry['image'] }}" alt="{{ $industry['title'] }}">
                            <div class="card-img-overlay-custom">
                                <h3>{{ $industry['title'] }}</h3>
                            </div>
                        </div>
                        <div class="card-content">
                            <p>{{ $industry['description'] }}</p>
                            <ul class="service-checklist">
                                @foreach($industry['items'] as $item)
                                    <li><i class="fa-solid fa-shield-halved"></i> {{ $item }}</li>
                                @endforeach
                            </ul>
                            <a href="{{ route('quote') }}" class="btn-quote-outline">Request a Quote</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
