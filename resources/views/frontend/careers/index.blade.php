@extends('layouts.frontend.main')
@section('title', 'Careers - Elite Guard Inc.')

@section('content')
    <style>
        /* Careers Page Specific Styles */
        .careers-hero {
            position: relative;
            background: url('{{ asset('frontend/images/4.jpeg') }}') center/cover no-repeat;
            min-height: 400px;
            color: white;
            display: flex;
            align-items: center;
            padding: 60px 0;
        }

        .careers-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(90deg, rgba(0, 0, 0, 0.9) 0%, rgba(0, 0, 0, 0.6) 50%, rgba(0, 0, 0, 0.1) 100%);
            z-index: 1;
        }

        .careers-hero-content {
            position: relative;
            z-index: 2;
        }

        .careers-hero-title {
            font-size: 3.5rem;
            font-weight: 800;
            text-transform: uppercase;
            margin-bottom: 20px;
            line-height: 1.1;
        }

        .careers-hero-title span {
            color: #e5b95f;
            /* Elite Guard Gold */
            display: block;
        }

        .careers-hero-desc {
            font-size: 1.2rem;
            max-width: 600px;
            margin-bottom: 40px;
        }

        .hero-features {
            display: flex;
            gap: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            padding-top: 30px;
        }

        .hero-feature-item {
            display: flex;
            flex-direction: column;
        }

        .hero-feature-icon {
            color: #e5b95f;
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .hero-feature-title {
            font-weight: 700;
            font-size: 0.9rem;
            text-transform: uppercase;
            margin-bottom: 5px;
        }

        .hero-feature-text {
            font-size: 0.8rem;
            color: #ccc;
        }

        /* Light Theme Content Area */
        .careers-content-area {
            background-color: #f8f9fa;
            color: #333;
            padding: 80px 0;
        }

        .section-heading {
            color: #111 !important;
            font-size: 2rem;
            font-weight: 800;
            text-transform: uppercase;
            margin-bottom: 30px;
            position: relative;
            display: inline-block;
        }

        .section-heading::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -10px;
            width: 60px;
            height: 3px;
            background-color: #e5b95f;
        }

        /* Why Work With Us */
        .benefit-card {
            background: white;
            padding: 30px 20px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            height: 100%;
            transition: transform 0.3s ease;
        }

        .benefit-card:hover {
            transform: translateY(-5px);
        }

        .benefit-icon {
            color: #e5b95f;
            font-size: 2.5rem;
            margin-bottom: 15px;
        }

        .benefit-title {
            font-weight: 700;
            font-size: 1.1rem;
            margin-bottom: 10px;
            color: #222;
        }

        .benefit-text {
            font-size: 0.9rem;
            color: #666;
            margin: 0;
        }

        /* Jobs List */
        .job-card {
            background: white;
            border-radius: 10px;
            display: flex;
            align-items: center;
            padding: 15px;
            margin-bottom: 15px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
        }

        .job-card-img {
            width: 100px;
            height: 80px;
            border-radius: 8px;
            object-fit: cover;
            margin-right: 20px;
        }

        .job-card-icon-placeholder {
            width: 100px;
            height: 80px;
            border-radius: 8px;
            margin-right: 20px;
            background-color: #222;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
        }

        .job-info {
            flex-grow: 1;
        }

        .job-title {
            font-weight: 700;
            font-size: 1.2rem;
            color: #222;
            margin-bottom: 5px;
        }

        .job-meta {
            font-size: 0.85rem;
            color: #666;
        }

        .job-meta i {
            color: #e5b95f;
            margin-right: 5px;
        }

        .btn-apply-job {
            background-color: #e5b95f;
            color: #111;
            font-weight: 700;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background 0.3s;
            text-transform: uppercase;
            font-size: 0.9rem;
            white-space: nowrap;
        }

        .btn-apply-job:hover {
            background-color: #d4a64d;
            color: #111;
        }

        /* Apply Form Container */
        .apply-form-container {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        }

        .apply-form-container .form-label {
            font-weight: 600;
            font-size: 0.9rem;
            color: #333;
        }

        .apply-form-container .form-control,
        .apply-form-container .form-select {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 12px 15px;
            font-size: 0.95rem;
        }

        .upload-area {
            border: 2px dashed #ddd;
            padding: 30px;
            text-align: center;
            border-radius: 8px;
            background: #fdfdfd;
            cursor: pointer;
            transition: border 0.3s;
        }

        .upload-area:hover {
            border-color: #e5b95f;
        }

        .upload-area i {
            font-size: 2rem;
            color: #999;
            margin-bottom: 10px;
        }

        .btn-submit-form {
            background-color: #e5b95f;
            color: #111;
            font-weight: 700;
            border: none;
            padding: 15px;
            border-radius: 5px;
            width: 100%;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: background 0.3s;
        }

        .btn-submit-form:hover {
            background-color: #d4a64d;
        }

        /* Hiring Process */
        @media (min-width: 992px) {
            .col-lg-15 {
                flex: 0 0 auto;
                width: 20%;
            }
        }

        .process-step {
            text-align: center;
            padding: 20px;
        }

        .process-icon {
            width: 80px;
            height: 80px;
            background: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            color: #e5b95f;
            font-size: 2rem;
            position: relative;
        }

        .process-title {
            font-weight: 700;
            font-size: 1rem;
            color: #222;
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        .process-text {
            font-size: 0.85rem;
            color: #666;
        }

        /* Bottom CTA */
        .careers-cta {
            background: url('{{ asset('frontend/images/calgary-skyline.jpg') }}') center/cover no-repeat;
            position: relative;
            padding: 60px 0;
            color: white;
        }

        .careers-cta::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(90deg, #e5b95f 0%, rgba(229, 185, 95, 0.9) 40%, rgba(0, 0, 0, 0.7) 100%);
        }

        .cta-inner {
            position: relative;
            z-index: 2;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .cta-heading {
            font-size: 2.5rem;
            font-weight: 800;
            color: #111;
            line-height: 1.2;
        }

        .cta-sub {
            font-size: 1.2rem;
            color: #333;
            font-weight: 500;
        }
    </style>

    <main id="primary" class="site-main">
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
                text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            }
        </style>

        <!-- start: Breadcrumb Section -->
        <section class="rts__breadcrumb__area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="rts__breadcrumb__content"
                            style="background-image: url('{{ asset('frontend/images/4.jpeg') }}');">

                            <ul class="list">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><i class="fa-solid fa-chevron-right"></i></li>
                                <li>Careers</li>
                            </ul>
                            <h2 class="title rts-text-anime">Careers</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: Breadcrumb Section -->

        <!-- Main Content Area (Light Theme) -->
        <div class="careers-content-area">
            <div class="container">

                <!-- Intro Content Section -->
                <div class="row justify-content-between align-items-center mb-5 pb-5 border-bottom">
                    <div class="col-lg-6 text-start mb-4 mb-lg-0">
                        <p class="text-uppercase mb-2" style="font-weight: 700; letter-spacing: 2px; color: #b8860b;">Join
                            Elite Guard Inc.</p>
                        <h2 class="title text-dark"
                            style="font-size: 3rem; line-height: 1.1; margin-bottom: 20px; font-weight: 800;">
                            A Career <br><span style="color: #b8860b;">With Purpose</span>
                        </h2>
                        <p class="text-muted" style="font-size: 1.1rem; max-width: 500px;">Be part of a dedicated team
                            keeping people, property and communities safe across Calgary and Alberta.</p>
                    </div>

                    <div class="col-lg-5 text-start border-start ps-lg-5">
                        <div class="d-flex align-items-start mb-4">
                            <div
                                style="background-color: #fafafa; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px; flex-shrink: 0;">
                                <i class="fa-solid fa-shield-halved" style="color: #b8860b; font-size: 1.2rem;"></i>
                            </div>
                            <div>
                                <h5 class="text-dark fw-bold mb-1" style="font-size: 1.05rem;">Make a Difference</h5>
                                <p class="text-muted small mb-0">Help create safer communities</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start mb-4">
                            <div
                                style="background-color: #fafafa; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px; flex-shrink: 0;">
                                <i class="fa-solid fa-users" style="color: #b8860b; font-size: 1.2rem;"></i>
                            </div>
                            <div>
                                <h5 class="text-dark fw-bold mb-1" style="font-size: 1.05rem;">Grow Your Skills</h5>
                                <p class="text-muted small mb-0">Training and advancement opportunities</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start">
                            <div
                                style="background-color: #fafafa; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px; flex-shrink: 0;">
                                <i class="fa-regular fa-clock" style="color: #b8860b; font-size: 1.2rem;"></i>
                            </div>
                            <div>
                                <h5 class="text-dark fw-bold mb-1" style="font-size: 1.05rem;">Professional Team</h5>
                                <p class="text-muted small mb-0">Supportive and respectful work environment</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Why Work With Us -->
                <div class="row mb-5 pb-4">
                    <div class="col-12 text-start mb-4">
                        <h2 class="section-heading">Why Work With Us?</h2>
                    </div>

                    <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                        <div class="benefit-card h-100 p-4 border-0 shadow-sm"
                            style="background-color: #fafafa; border-radius: 8px;">
                            <i class="fa-solid fa-coins benefit-icon" style="color: #b8860b;"></i>
                            <h4 class="benefit-title" style="font-size: 1rem; font-weight: 800;">Competitive Pay</h4>
                            <p class="benefit-text" style="font-size: 0.85rem;">Fair and timely compensation</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                        <div class="benefit-card h-100 p-4 border-0 shadow-sm"
                            style="background-color: #fafafa; border-radius: 8px;">
                            <i class="fa-solid fa-chart-column benefit-icon" style="color: #b8860b;"></i>
                            <h4 class="benefit-title" style="font-size: 1rem; font-weight: 800;">Training & Development</h4>
                            <p class="benefit-text" style="font-size: 0.85rem;">Ongoing training and career growth</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                        <div class="benefit-card h-100 p-4 border-0 shadow-sm"
                            style="background-color: #fafafa; border-radius: 8px;">
                            <i class="fa-regular fa-calendar-days benefit-icon" style="color: #b8860b;"></i>
                            <h4 class="benefit-title" style="font-size: 1rem; font-weight: 800;">Flexible Schedules</h4>
                            <p class="benefit-text" style="font-size: 0.85rem;">Full-time, part-time and casual positions
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                        <div class="benefit-card h-100 p-4 border-0 shadow-sm"
                            style="background-color: #fafafa; border-radius: 8px;">
                            <i class="fa-solid fa-people-group benefit-icon" style="color: #b8860b;"></i>
                            <h4 class="benefit-title" style="font-size: 1rem; font-weight: 800;">Supportive Team</h4>
                            <p class="benefit-text" style="font-size: 0.85rem;">Work with experienced professionals</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                        <div class="benefit-card h-100 p-4 border-0 shadow-sm"
                            style="background-color: #fafafa; border-radius: 8px;">
                            <i class="fa-solid fa-shield-halved benefit-icon" style="color: #b8860b;"></i>
                            <h4 class="benefit-title" style="font-size: 1rem; font-weight: 800;">Safe Work Environment</h4>
                            <p class="benefit-text" style="font-size: 0.85rem;">Health and safety is our priority</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                        <div class="benefit-card h-100 p-4 border-0 shadow-sm"
                            style="background-color: #fafafa; border-radius: 8px;">
                            <i class="fa-solid fa-user-astronaut benefit-icon" style="color: #b8860b;"></i>
                            <h4 class="benefit-title" style="font-size: 1rem; font-weight: 800;">Advancement Opportunities
                            </h4>
                            <p class="benefit-text" style="font-size: 0.85rem;">Supervisory and management roles</p>
                        </div>
                    </div>
                </div>

                <!-- Jobs & Apply Section -->
                <div class="row mb-5 pb-5">
                    <!-- Left: Job List -->
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <div class="d-flex justify-content-between align-items-end mb-4">
                            <h2 class="section-heading mb-0">Current Opportunities</h2>
                        </div>

                        <div class="jobs-list">
                            @if($careers->count() > 0)
                                @foreach($careers as $career)
                                    <div class="job-card">
                                        @if($career->feature_image)
                                            <img src="{{ asset($career->feature_image) }}" alt="{{ $career->title }}"
                                                class="job-card-img">
                                        @else
                                            <div class="job-card-icon-placeholder">
                                                <i class="fa-solid fa-user-shield"></i>
                                            </div>
                                        @endif
                                        <div class="job-info">
                                            <h4 class="job-title">{{ $career->title }}</h4>
                                            <div class="job-meta">
                                                <span class="me-3"><i class="fa-solid fa-location-dot"></i>
                                                    {{ $career->location }}</span>
                                                <span><i class="fa-solid fa-briefcase"></i> {{ $career->job_type }}</span>
                                            </div>
                                        </div>
                                        <div>
                                            <button class="btn-apply-job trigger-apply" data-job-id="{{ $career->id }}">Apply Now <i
                                                    class="fa-solid fa-arrow-right ms-1"></i></button>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="alert alert-info border-0 shadow-sm">
                                    <i class="fa-solid fa-info-circle me-2"></i> No open positions at the moment. Please check
                                    back later!
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- Right: Application Form -->
                    <div class="col-lg-6" id="apply-form-section">
                        <div class="apply-form-container">
                            <h3 class="fw-bold mb-2">APPLY NOW</h3>
                            <p class="text-muted mb-4">Join our team today. Submit your information and we'll be in touch.
                            </p>

                            <form id="careerApplyForm" action="{{ route('career.apply') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Full Name <span class="text-danger">*</span></label>
                                        <input type="text" name="name" class="form-control" placeholder="Your full name"
                                            required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Email Address <span class="text-danger">*</span></label>
                                        <input type="email" name="email" class="form-control"
                                            placeholder="yourname@email.com" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Phone Number <span class="text-danger">*</span></label>
                                        <input type="text" name="phone" class="form-control" placeholder="Your phone number"
                                            required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Position Applying For <span
                                                class="text-danger">*</span></label>
                                        <select name="career_id" class="form-select" id="positionSelect" required>
                                            <option value="" selected disabled>Select a position</option>
                                            @foreach($careers as $career)
                                                <option value="{{ $career->id }}">{{ $career->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Upload Resume <span class="text-danger">*</span></label>
                                    <div class="upload-area" onclick="document.getElementById('cvUpload').click()">
                                        <i class="fa-solid fa-cloud-arrow-up"></i>
                                        <p class="mb-0 fw-semibold text-dark">Drag & drop your resume here <br> or click to
                                            browse</p>
                                        <span class="small text-muted">PDF, DOC or DOCX (Max 5 MB)</span>
                                    </div>
                                    <input type="file" name="cv" id="cvUpload" class="d-none" accept=".pdf,.doc,.docx"
                                        required>
                                    <div id="fileNameDisplay" class="mt-2 text-success fw-bold small d-none"></div>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Additional Information</label>
                                    <textarea name="message" class="form-control" rows="3"
                                        placeholder="Tell us more about yourself..."></textarea>
                                </div>

                                <button type="submit" class="btn-submit-form" id="submitBtn">
                                    <span class="btn-text">Submit Application</span> <i
                                        class="fa-solid fa-arrow-right ms-2 btn-icon"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Hiring Process -->
                <div class="row mb-5">
                    <div class="col-12 mb-4">
                        <h2 class="section-heading">Our Hiring Process</h2>
                    </div>

                    <div class="col-lg-15 col-md-4 col-sm-6 col-12 mb-4">
                        <div class="process-step">
                            <div class="process-icon"><i class="fa-solid fa-file-signature" style="color: #b8860b;"></i></div>
                            <h4 class="process-title">1. Apply</h4>
                            <p class="process-text">Submit your application</p>
                        </div>
                    </div>
                    <div class="col-lg-15 col-md-4 col-sm-6 col-12 mb-4">
                        <div class="process-step">
                            <div class="process-icon"><i class="fa-solid fa-user-check" style="color: #b8860b;"></i></div>
                            <h4 class="process-title">2. Review</h4>
                            <p class="process-text">We review your information</p>
                        </div>
                    </div>
                    <div class="col-lg-15 col-md-4 col-sm-6 col-12 mb-4">
                        <div class="process-step">
                            <div class="process-icon"><i class="fa-solid fa-comments" style="color: #b8860b;"></i></div>
                            <h4 class="process-title">3. Interview</h4>
                            <p class="process-text">Initial interview (virtual/in-person)</p>
                        </div>
                    </div>
                    <div class="col-lg-15 col-md-4 col-sm-6 col-12 mb-4">
                        <div class="process-step">
                            <div class="process-icon"><i class="fa-solid fa-shield-halved" style="color: #b8860b;"></i></div>
                            <h4 class="process-title">4. Verification</h4>
                            <p class="process-text">Licence and reference checks</p>
                        </div>
                    </div>
                    <div class="col-lg-15 col-md-4 col-sm-6 col-12 mb-4">
                        <div class="process-step">
                            <div class="process-icon"><i class="fa-solid fa-handshake" style="color: #b8860b;"></i></div>
                            <h4 class="process-title">5. Welcome</h4>
                            <p class="process-text">Join the team!</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Bottom CTA -->
        <!-- <section class="careers-cta">
            <div class="container">
                <div class="cta-inner row align-items-center">
                    <div class="col-lg-8 mb-4 mb-lg-0">
                        <h2 class="cta-heading mb-2">A SAFER CALGARY<br>STARTS WITH PEOPLE</h2>
                        <p class="cta-sub">Build your future with Elite Guard Inc.</p>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <div class="d-flex align-items-center justify-content-lg-end mb-3">
                            <i class="fa-solid fa-users text-dark fs-1 me-3"></i>
                            <p class="text-white text-start mb-0 fw-semibold" style="max-width: 200px;">Join a team that makes a real impact.</p>
                        </div>
                        <a href="#apply-form-section" class="btn btn-dark text-warning fw-bold px-4 py-3 rounded-1 text-uppercase w-100" style="max-width: 250px;">Apply Today <i class="fa-solid fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </section> -->

        @push('scripts')
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    // Smooth scroll and select job
                    $('.trigger-apply').on('click', function () {
                        var jobId = $(this).data('job-id');
                        $('#positionSelect').val(jobId);

                        $('html, body').animate({
                            scrollTop: $("#apply-form-section").offset().top - 100
                        }, 500);
                    });

                    // File upload display
                    $('#cvUpload').on('change', function () {
                        var fileName = $(this).val().split('\\').pop();
                        if (fileName) {
                            $('#fileNameDisplay').text('Selected: ' + fileName).removeClass('d-none');
                        } else {
                            $('#fileNameDisplay').addClass('d-none');
                        }
                    });

                    // Form AJAX Submission
                    $('#careerApplyForm').on('submit', function (e) {
                        e.preventDefault();

                        let form = $(this);
                        let submitBtn = form.find('#submitBtn');
                        let submitBtnText = submitBtn.find('.btn-text');
                        let submitIcon = submitBtn.find('.btn-icon');
                        let formData = new FormData(this);

                        submitBtn.prop('disabled', true);
                        submitBtnText.text('Submitting...');
                        submitIcon.attr('class', 'fa-solid fa-spinner fa-spin ms-2');

                        $.ajax({
                            url: form.attr('action'),
                            type: 'POST',
                            data: formData,
                            processData: false,
                            contentType: false,
                            success: function (response) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Application Submitted!',
                                    text: response.message,
                                    confirmButtonColor: '#34A853'
                                });
                                form[0].reset();
                                $('#fileNameDisplay').addClass('d-none');
                                submitBtn.prop('disabled', false);
                                submitBtnText.text('Submit Application');
                                submitIcon.attr('class', 'fa-solid fa-arrow-right ms-2');
                            },
                            error: function (xhr) {
                                let errorMessage = 'Something went wrong. Please try again.';
                                if (xhr.responseJSON && xhr.responseJSON.message) {
                                    errorMessage = xhr.responseJSON.message;
                                }

                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: errorMessage,
                                    confirmButtonColor: '#d33'
                                });
                                submitBtn.prop('disabled', false);
                                submitBtnText.text('Submit Application');
                                submitIcon.attr('class', 'fa-solid fa-arrow-right ms-2');
                            }
                        });
                    });
                });
            </script>
        @endpush
    </main>
@endsection