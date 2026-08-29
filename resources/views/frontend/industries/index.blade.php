@extends('layouts.frontend.main')
@section('title', 'Industries | Alberta International Traders')

@section('content')
<style>
    .rts__breadcrumb__content { position: relative; overflow: hidden; z-index: 1; }
    .rts__breadcrumb__content::before { content: ""; position: absolute; inset: 0; background: rgba(0,0,0,.5); z-index: -1; border-radius: inherit; }
    .rts__breadcrumb__content .list, .rts__breadcrumb__content .title { position: relative; z-index: 2; }
    .industry-card { background: #fff; border: 1px solid rgba(0,37,36,.07); border-radius: 18px; overflow: hidden; box-shadow: 0 12px 40px rgba(0,37,36,.07); }
    .industry-card .industry-image { width: 100%; height: 100%; min-height: 390px; object-fit: cover; }
    .industry-content { padding: 48px; }
    .industry-number { color: #34A853; font-size: 14px; font-weight: 800; letter-spacing: 1.5px; text-transform: uppercase; }
    .industry-list { display: grid; grid-template-columns: repeat(2,minmax(0,1fr)); gap: 12px 22px; margin: 24px 0 30px; padding: 0; }
    .industry-list li { list-style: none; color: #4d5b5a; display: flex; align-items: center; gap: 9px; }
    .industry-list i { color: #34A853; font-size: 13px; }
    @media(max-width: 767px) { .industry-content { padding: 30px 24px; } .industry-list { grid-template-columns: 1fr; } .industry-card .industry-image { min-height: 280px; } }
</style>

<section class="rts__breadcrumb__area">
    <div class="container">
        <div class="row"><div class="col-lg-12">
            <div class="rts__breadcrumb__content" data-bg-src="https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&amp;fit=crop&amp;w=1600&amp;q=85">
                <ul class="list"><li><a href="{{ route('home') }}">Home</a></li><li><i class="fa-solid fa-chevron-right"></i></li><li>Industries</li></ul>
                <h2 class="title rts-text-anime">Industries We Serve</h2>
            </div>
        </div></div>
    </div>
</section>

<section class="rts-section-gap">
    <div class="container">
        <div class="section-title text-center mb-5">
            <span class="sub-title">Our Lines of Business</span>
            <h2 class="heading-title-two rts-text-anime">Global Solutions Across Essential Industries</h2>
            <p class="desc mx-auto" style="max-width:850px;">Alberta International Traders sources products globally to provide competitive options, proven technologies and greater value for customers across diverse industrial sectors.</p>
        </div>

        @php
            $industries = [
                [
                    'title' => 'Industrial Equipment',
                    'image' => 'https://images.unsplash.com/photo-1565793298595-6a879b1d9492?auto=format&fit=crop&w=1200&q=85',
                    'description' => 'Our extensive global supplier network gives customers access to different equipment brands based on their operational and technical needs.',
                    'items' => ['Engines & Turbines', 'Pumps', 'Fire Hydrants', 'Oil Field Machinery', 'General Industry Machinery', 'Specialized Equipment'],
                ],
                [
                    'title' => 'Construction Equipment',
                    'image' => 'https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?auto=format&fit=crop&w=1200&q=85',
                    'description' => 'We help customers identify the right type and size of construction equipment while supporting questions about pricing and availability.',
                    'items' => ['Cranes', 'Bobcats', 'Bulldozers', 'Front Loaders', 'Dump Trucks', 'Backhoes & Excavators'],
                ],
                [
                    'title' => 'Construction Materials',
                    'image' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=1200&q=85',
                    'description' => 'AIT supplies professional-grade construction and building materials for job sites, large projects and other demanding applications.',
                    'items' => ['Natural Building Materials', 'Mud & Clay', 'Rock & Wood', 'Brick & Block', 'Metal & Glass', 'Ceramics, Plastic & Foam'],
                ],
                [
                    'title' => 'Food & Beverage Equipment',
                    'image' => 'https://images.unsplash.com/photo-1565514020179-026b92b84bb6?auto=format&fit=crop&w=1200&q=85',
                    'description' => 'Our team sources quality new and used food and beverage equipment from major manufacturers in a variety of models and sizes.',
                    'items' => ['Packaging Equipment', 'Agitators & Mixers', 'Autoclaves & Boilers', 'Dryers & Evaporators', 'Feeders & Filters', 'Tanks & Blowers'],
                ],
            ];
        @endphp

        @foreach($industries as $industry)
            <div class="industry-card mb-5 wow fadeInUp" data-wow-delay=".{{ ($loop->index % 4) + 2 }}s">
                <div class="row g-0 align-items-stretch {{ $loop->even ? 'flex-row-reverse' : '' }}">
                    <div class="col-lg-5"><img class="industry-image" src="{{ $industry['image'] }}" alt="{{ $industry['title'] }}"></div>
                    <div class="col-lg-7 d-flex align-items-center">
                        <div class="industry-content">
                            <span class="industry-number">Industry {{ sprintf('%02d', $loop->iteration) }}</span>
                            <h2 class="mt-2 mb-3">{{ $industry['title'] }}</h2>
                            <p>{{ $industry['description'] }}</p>
                            <ul class="industry-list">
                                @foreach($industry['items'] as $item)<li><i class="fa-solid fa-circle-check"></i>{{ $item }}</li>@endforeach
                            </ul>
                            <a href="{{ route('quote') }}" class="rts-btn btn-primary">Request a Quote <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
@endsection
