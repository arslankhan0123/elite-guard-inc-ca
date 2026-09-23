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
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        /* Page Specific Overrides */
        .industries-new-section {
            background-color: #fdfdfd;
            padding: 60px 0 0 0;
        }

        .industry-card {
            background: #fff;
            border-radius: 6px;
            overflow: hidden;
            height: 100%;
            display: flex;
            flex-direction: column;
            border: 1px solid #f0f0f0;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.02);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .industry-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        }

        .industry-image {
            position: relative;
            height: 160px;
            width: 100%;
        }

        .industry-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .industry-icon {
            position: absolute;
            bottom: -25px;
            left: 15px;
            width: 50px;
            height: 50px;
            background: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            z-index: 2;
        }

        .industry-icon-inner {
            width: 38px;
            height: 38px;
            background: #fdf6e3;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .industry-icon-inner i {
            color: #111;
            font-size: 16px;
        }

        .industry-icon-inner span {
            color: #111;
            font-size: 16px;
            font-weight: 800;
            font-family: sans-serif;
        }

        .industry-content {
            padding: 35px 15px 20px 15px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .industry-content h4 {
            font-size: 14px;
            font-weight: 800;
            color: #111;
            margin-bottom: 8px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .industry-content p {
            font-size: 12px;
            color: #555;
            line-height: 1.5;
            margin-bottom: 15px;
        }

        .industry-list {
            list-style: none;
            padding: 0;
            margin: 0;
            flex-grow: 1;
        }

        .industry-list li {
            position: relative;
            padding-left: 20px;
            font-size: 11.5px;
            color: #444;
            margin-bottom: 6px;
            line-height: 1.4;
        }

        .industry-list li i {
            position: absolute;
            left: 0;
            top: 2px;
            color: #d4af37;
            font-size: 12px;
        }

        .bottom-features {
            background: #fafafa;
            border-top: 1px solid #ebebeb;
            padding: 30px 0;
            margin-top: 50px;
        }

        .feature-item {
            display: flex;
            align-items: center;
        }

        .feature-icon {
            font-size: 32px;
            color: #111;
            margin-right: 15px;
        }

        .feature-icon.gold {
            color: #d4af37;
        }

        .feature-text h5 {
            font-size: 13px;
            font-weight: 800;
            color: #111;
            margin: 0 0 3px 0;
            text-transform: uppercase;
        }

        .feature-text p {
            font-size: 11px;
            color: #666;
            margin: 0;
            line-height: 1.4;
        }

        .header-divider {
            border-left: 3px solid #d4af37;
            padding-left: 20px;
            height: 100%;
            display: flex;
            align-items: center;
        }
    </style>

    <section class="rts__breadcrumb__area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="rts__breadcrumb__content"
                        style="background-image: url('{{ asset('frontend/images/industries/banner.png') }}');">
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

    <section class="industries-new-section">
        <div class="container">
            <!-- Header -->
            <div class="row align-items-center mb-5 pb-2">
                <div class="col-lg-9 pr-lg-5 mb-4 mb-lg-0">
                    <h6
                        style="color: #d4af37; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 1px; margin-bottom: 10px;">
                        OUR INDUSTRIES</h6>
                    <h2
                        style="font-size: 32px; font-weight: 800; color: #111; margin-bottom: 15px; text-transform: uppercase;">
                        SECURITY SOLUTIONS TAILORED TO YOUR WORLD
                    </h2>
                    <p style="color: #555; font-size: 15px; line-height: 1.6; margin: 0; max-width: 95%;">
                        From construction sites to commercial spaces, our trained professionals and advanced technology
                        deliver reliable security solutions designed for the unique needs of every industry.
                    </p>
                </div>
                <div class="col-lg-3">
                    <div class="header-divider">
                        <h4
                            style="font-size: 18px; font-weight: 800; color: #555; margin: 0; line-height: 1.4; letter-spacing: 1px;">
                            DIFFERENT<br>INDUSTRIES.<br>A SAFER<br>TOMORROW.
                        </h4>
                    </div>
                </div>
            </div>

            @php
                $industriesList = [
                    [
                        'title' => 'CONSTRUCTION SITES',
                        'icon' => '<i class="fa-solid fa-helmet-safety"></i>',
                        'image' => 'https://images.unsplash.com/photo-1581094794329-c8112a89af12?auto=format&fit=crop&q=80&w=800',
                        'desc' => 'Monitor site access, equipment and materials during active work and after hours.',
                        'list' => ['Access control and perimeter checks', 'Equipment & material monitoring', 'After-hours security', 'Theft and vandalism deterrence']
                    ],
                    [
                        'title' => 'COMMERCIAL PROPERTIES',
                        'icon' => '<i class="fa-regular fa-building"></i>',
                        'image' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80&w=800',
                        'desc' => 'Security for office buildings, business parks and commercial plazas.',
                        'list' => ['On-site security guards', 'Access control and visitor management', 'Regular patrols and inspections', 'Incident reporting and risk management']
                    ],
                    [
                        'title' => 'RESIDENTIAL COMMUNITIES',
                        'icon' => '<i class="fa-solid fa-house-chimney"></i>',
                        'image' => 'https://images.unsplash.com/photo-1560518883-ce09059eeffa?auto=format&fit=crop&q=80&w=800',
                        'desc' => 'Safe and secure living for condos, apartments and gated communities.',
                        'list' => ['Front desk and mobile patrols', 'Access control and visitor verification', 'After-hours monitoring', 'Support for residents and property managers']
                    ],
                    [
                        'title' => 'RETAIL STORES',
                        'icon' => '<i class="fa-solid fa-cart-shopping"></i>',
                        'image' => 'https://images.unsplash.com/photo-1441986300917-64674bd600d8?auto=format&fit=crop&q=80&w=800',
                        'desc' => 'Loss prevention, asset protection and a visible security presence to deter crime.',
                        'list' => ['On-site security and mobile patrols', 'Theft and shoplifting deterrence', 'Customer and staff safety', 'Incident reporting and evidence collection']
                    ],
                    [
                        'title' => 'WAREHOUSES & INDUSTRIAL',
                        'icon' => '<i class="fa-solid fa-truck-fast"></i>',
                        'image' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&q=80&w=800',
                        'desc' => 'Protect inventory, assets and access points.',
                        'list' => ['Perimeter and access control', 'Regular patrols', 'Monitoring of high-risk areas', 'Reporting of suspicious activity']
                    ],
                    [
                        'title' => 'PARKING FACILITIES',
                        'icon' => '<span>P</span>',
                        'image' => 'https://images.unsplash.com/photo-1506521781263-d8422e82f27a?auto=format&fit=crop&q=80&w=800',
                        'desc' => 'Patrol lots and parkades, monitor parking concerns and report suspicious activity.',
                        'list' => ['Regular patrols (scheduled & random)', 'Monitor parking violations', 'Deter theft and vandalism', 'Report suspicious activity']
                    ],
                    [
                        'title' => 'EVENT VENUES',
                        'icon' => '<i class="fa-solid fa-users"></i>',
                        'image' => 'https://images.unsplash.com/photo-1459749411175-04bf5292ceea?auto=format&fit=crop&q=80&w=800',
                        'desc' => 'Support entry screening, guest access and crowd monitoring throughout your event.',
                        'list' => ['Entry screening and access control', 'Crowd monitoring and guest assistance', 'Trained event security staff', 'Incident response and communication']
                    ],
                    [
                        'title' => 'HEALTHCARE FACILITIES',
                        'icon' => '<i class="fa-solid fa-plus"></i>',
                        'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?auto=format&fit=crop&q=80&w=800',
                        'desc' => 'A safer environment for patients, staff and visitors.',
                        'list' => ['Access control and visitor management', 'On-site and mobile patrols', 'Support for staff and patient safety', 'Incident reporting and response']
                    ],
                    [
                        'title' => 'SCHOOLS & EDUCATIONAL',
                        'icon' => '<i class="fa-solid fa-graduation-cap"></i>',
                        'image' => 'https://images.unsplash.com/photo-1497633762265-9d179a990aa6?auto=format&fit=crop&q=80&w=800',
                        'desc' => 'Support for a safe learning environment.',
                        'list' => ['Access control and visitor screening', 'On-site security and patrols', 'Safety for students, staff and visitors', 'Incident reporting and emergency support']
                    ],
                    [
                        'title' => 'GOVERNMENT & MUNICIPAL',
                        'icon' => '<i class="fa-solid fa-building-columns"></i>',
                        'image' => 'https://images.unsplash.com/photo-1555819206-7b30da4f1506?auto=format&fit=crop&q=80&w=800',
                        'desc' => 'Security for civic buildings and public infrastructure.',
                        'list' => ['Access control and screening', 'On-site and mobile patrols', 'Protection of public assets', 'Incident reporting and emergency response']
                    ],
                    [
                        'title' => 'HOSPITALITY & HOTELS',
                        'icon' => '<i class="fa-solid fa-bed"></i>',
                        'image' => 'https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&q=80&w=800',
                        'desc' => 'Guest safety, access control and a welcoming environment.',
                        'list' => ['Front desk and lobby security', 'Access control and key management', 'Guest and staff assistance', 'Incident response and reporting']
                    ],
                    [
                        'title' => 'VACANT PROPERTIES',
                        'icon' => '<i class="fa-solid fa-key"></i>',
                        'image' => 'https://images.unsplash.com/photo-1533090161767-e6ffed986c88?auto=format&fit=crop&q=80&w=800',
                        'desc' => 'Regular checks to deter trespassing, vandalism and theft.',
                        'list' => ['Scheduled lock & unlock services', 'Perimeter checks and inspections', 'Monitor for unauthorized access', 'Detailed reporting with photos']
                    ]
                ];
            @endphp

            <!-- Grid -->
            <div class="row g-4">
                @foreach($industriesList as $item)
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="industry-card">
                            <div class="industry-image">
                                <!-- Placeholder image, will need actual industry images -->
                                <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}">
                                <div class="industry-icon">
                                    <div class="industry-icon-inner">
                                        {!! $item['icon'] !!}
                                    </div>
                                </div>
                            </div>
                            <div class="industry-content">
                                <h4>{{ $item['title'] }}</h4>
                                <p>{{ $item['desc'] }}</p>
                                <ul class="industry-list">
                                    @foreach($item['list'] as $listItem)
                                        <li><i class="fa-solid fa-circle-check"></i> {{ $listItem }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Bottom Features -->
        <div class="bottom-features">
            <div class="container">
                <div class="row gx-2 gy-4 align-items-center justify-content-between">
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-item">
                            <div class="feature-icon"><i class="fa-solid fa-users"></i></div>
                            <div class="feature-text">
                                <h5>TRAINED PROFESSIONALS</h5>
                                <p>Licensed, experienced and reliable.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-item">
                            <div class="feature-icon"><i class="fa-solid fa-chart-simple"></i></div>
                            <div class="feature-text">
                                <h5>TECHNOLOGY DRIVEN</h5>
                                <p>NFC checkpoints, real-time reporting and digital records.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-item">
                            <div class="feature-icon gold"><i class="fa-solid fa-shield-halved"></i></div>
                            <div class="feature-text">
                                <h5>FULLY INSURED</h5>
                                <p>Licensed security agency, liability insurance and WCB coverage.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-item">
                            <div class="feature-icon gold"><i class="fa-solid fa-clock"></i></div>
                            <div class="feature-text">
                                <h5>24/7 SUPPORT</h5>
                                <p>Always available when you need us.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection