@extends('layouts.frontend.main')
@section('title', 'Technology - Guard App Guide')

@section('content')
    <style>
        /* Breadcrumb Premium Overrides - Left Aligned Hero */
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
            padding: 70px 50px !important;
            text-align: left;
            border-radius: 20px;
            margin-top: 30px;
            margin-bottom: 50px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }

        .rts__breadcrumb__content::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(90deg, rgba(15, 23, 42, 0.95) 0%, rgba(15, 23, 42, 0.75) 100%) !important;
            z-index: 1;
            border-radius: inherit;
        }

        .hero-top-title {
            color: #d4af37;
            font-size: 14px;
            font-weight: 700;
            letter-spacing: 4px;
            text-transform: uppercase;
            margin-bottom: 15px;
            position: relative;
            z-index: 2;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .hero-top-title::after {
            content: '';
            display: inline-block;
            width: 80px;
            height: 2px;
            background-color: #d4af37;
        }

        .hero-title-main {
            color: #ffffff;
            font-size: 55px;
            font-weight: 800;
            margin: 0 0 25px 0;
            line-height: 1.1;
            position: relative;
            z-index: 2;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }

        .hero-title-main span {
            color: #d4af37;
            display: block;
        }

        .hero-desc {
            color: #ffffff;
            font-size: 16px;
            line-height: 1.6;
            max-width: 90%;
            margin-bottom: 10px;
            position: relative;
            z-index: 2;
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
        }

        .gold-line-divider {
            width: 50px;
            height: 3px;
            background-color: #d4af37;
            margin-bottom: 20px;
            position: relative;
            z-index: 2;
        }

        .tech-hero-tags {
            position: relative;
            z-index: 2;
            display: inline-flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .tech-hero-tags .tags-text {
            color: #ffffff;
            font-size: 14px;
            font-weight: 600;
            letter-spacing: 2.5px;
            display: flex;
            align-items: center;
            gap: 15px;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
        }

        .tech-hero-tags .tags-text .divider {
            color: #d4af37;
            font-weight: 300;
            font-size: 16px;
        }

        @media (max-width: 768px) {
            .hero-title-main {
                font-size: 35px;
            }

            .rts__breadcrumb__content {
                padding: 60px 30px !important;
            }
        }

        /* Technology Page Specific Styles */
        .tech-content-area {
            background-color: #f8f9fa;
            color: #333;
            padding: 60px 0 100px 0;
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
            background-color: #b8860b;
        }

        /* Tabs Styling */
        .app-tabs {
            display: flex;
            flex-direction: column;
            gap: 10px;
            background: #fff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        }

        .app-tab-btn {
            background: transparent;
            border: 1px solid #eee;
            text-align: left;
            padding: 18px 25px;
            border-radius: 8px;
            font-weight: 700;
            color: #555;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .app-tab-btn i {
            font-size: 1.2rem;
            color: #b8860b;
            transition: transform 0.3s;
        }

        .app-tab-btn:hover {
            background: #fafafa;
            color: #111;
            border-color: #ddd;
        }

        .app-tab-btn.active {
            background: #111;
            color: #fff;
            border-color: #111;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .app-tab-btn.active i {
            color: #e5b95f;
        }

        /* Tab Content Cards */
        .tab-pane-content {
            display: none;
            animation: fadeIn 0.4s ease-in-out;
        }

        .tab-pane-content.active {
            display: block;
        }

        .tab-pane-content h3 {
            color: #111 !important;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .feature-card {
            background: #fff;
            border-radius: 12px;
            padding: 25px;
            height: 100%;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.03);
            border: 1px solid rgba(0, 0, 0, 0.03);
            transition: transform 0.3s, box-shadow 0.3s;
            display: flex;
            align-items: flex-start;
        }

        .feature-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        }

        .feature-icon-wrapper {
            width: 50px;
            height: 50px;
            background: #fafafa;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            margin-right: 20px;
            border: 1px solid #f1f1f1;
        }

        .feature-icon-wrapper i {
            font-size: 1.3rem;
            color: #b8860b;
        }

        .feature-info h4 {
            font-size: 1.1rem;
            font-weight: 700;
            color: #111;
            margin-bottom: 8px;
        }

        .feature-info p {
            font-size: 0.9rem;
            color: #666;
            margin: 0;
            line-height: 1.5;
        }

        /* App Screenshots Slider */
        .app-screenshots-area {
            background: #090e17;
            /* Very dark blue/black */
            padding: 120px 0;
            position: relative;
            overflow: hidden;
        }

        /* Abstract glowing orb in the background */
        .app-screenshots-area::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 1000px;
            height: 1000px;
            background: radial-gradient(circle, rgba(212, 175, 55, 0.08) 0%, rgba(212, 175, 55, 0) 70%);
            z-index: 0;
            pointer-events: none;
        }

        .app-screenshots-area .container {
            position: relative;
            z-index: 2;
        }

        .app-screenshots-area .section-heading {
            color: #ffffff !important;
            text-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
        }

        .app-screenshots-area .section-heading::after {
            background-color: #d4af37;
        }

        .app-screenshots-area .text-muted {
            color: rgba(255, 255, 255, 0.7) !important;
        }

        .app-screenshot-slide {
            border-radius: 45px;
            overflow: hidden;
            box-shadow: 0 30px 60px -15px rgba(0, 0, 0, 0.8), 0 0 30px rgba(212, 175, 55, 0.1);
            border: 8px solid #141414;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #000;
            transition: transform 0.4s ease;
            position: relative;
        }

        /* Subtle inner shine on the frame */
        .app-screenshot-slide::after {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: 35px;
            border: 1px solid rgba(255, 255, 255, 0.15);
            pointer-events: none;
        }

        .app-screenshot-slide:hover {
            transform: translateY(-10px);
        }

        .app-screenshot-slide img {
            width: 100%;
            height: auto;
            border-radius: 35px;
            object-fit: cover;
        }

        .app-slider {
            padding-bottom: 60px;
        }

        .app-slider .swiper-pagination {
            bottom: 0 !important;
        }

        .app-slider .swiper-pagination-bullet {
            background-color: rgba(255, 255, 255, 0.3);
            width: 10px;
            height: 10px;
            transition: all 0.3s;
        }

        .app-slider .swiper-pagination-bullet-active {
            background-color: #d4af37;
            width: 25px;
            border-radius: 5px;
        }
    </style>

    <section class="rts__breadcrumb__area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="rts__breadcrumb__content"
                        style="background-image: url('{{ asset('frontend/images/29.jpg') }}');">

                        <div class="hero-top-title" data-aos="fade-up">OUR TECHNOLOGY</div>

                        <h1 class="hero-title-main rts-text-anime">
                            SMART SECURITY
                            <span>STRONGER COMMUNITIES</span>
                        </h1>

                        <div class="gold-line-divider" data-aos="fade-up" data-aos-delay="100"></div>

                        <p class="hero-desc" data-aos="fade-up" data-aos-delay="200">
                            At Elite Guard Inc., we use modern technology to improve communication, increase accountability
                            and deliver higher quality security services. Our custom mobile app, digital reporting and
                            real-time coordination keep our guards connected and our clients informed.
                        </p>

                        <div class="tech-hero-tags" data-aos="fade-up" data-aos-delay="300">
                            <div class="gold-line-divider"></div>
                            <div class="tags-text">
                                <span>TECHNOLOGY</span>
                                <span class="divider">|</span>
                                <span>PEOPLE</span>
                                <span class="divider">|</span>
                                <span>SAFER COMMUNITIES</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="tech-content-area">
        <div class="container">
            <!-- Intro -->
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-lg-8 text-center">
                    <p class="text-uppercase mb-2" style="font-weight: 700; letter-spacing: 2px; color: #b8860b;">Elite
                        Guard Inc.</p>
                    <h2 class="title text-dark"
                        style="font-size: 2.5rem; line-height: 1.2; margin-bottom: 20px; font-weight: 800;">
                        Complete Guide to our <br><span style="color: #b8860b;">Mobile Security App</span>
                    </h2>
                    <p class="text-muted mx-auto" style="font-size: 1.1rem; max-width: 600px;">
                        Our custom Guard App streamlines operations by integrating patrols, scheduling, reporting, and
                        personal profile management into one intuitive mobile platform. Explore the modules below.
                    </p>
                </div>
            </div>

            <div class="row">
                <!-- Sidebar Tabs -->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="app-tabs">
                        <button class="app-tab-btn active" data-target="tab-home">
                            <span><i class="fa-solid fa-house me-3"></i> Home Page</span>
                            <i class="fa-solid fa-chevron-right ms-auto" style="font-size: 0.8rem;"></i>
                        </button>
                        <button class="app-tab-btn" data-target="tab-schedule">
                            <span><i class="fa-solid fa-calendar-days me-3"></i> Schedule Page</span>
                            <i class="fa-solid fa-chevron-right ms-auto" style="font-size: 0.8rem;"></i>
                        </button>
                        <button class="app-tab-btn" data-target="tab-reports">
                            <span><i class="fa-solid fa-file-contract me-3"></i> Reports Page</span>
                            <i class="fa-solid fa-chevron-right ms-auto" style="font-size: 0.8rem;"></i>
                        </button>
                        <button class="app-tab-btn" data-target="tab-profile">
                            <span><i class="fa-solid fa-user-shield me-3"></i> Profile Page</span>
                            <i class="fa-solid fa-chevron-right ms-auto" style="font-size: 0.8rem;"></i>
                        </button>
                    </div>
                </div>

                <!-- Content Area -->
                <div class="col-lg-8">
                    <!-- Tab: Home -->
                    <div id="tab-home" class="tab-pane-content active">
                        <div class="d-flex align-items-center justify-content-between mb-4 border-bottom pb-3">
                            <h3 class="fw-bold mb-0">Home Page Features</h3>
                        </div>
                        <div class="alert alert-warning border-0 shadow-sm mb-4"
                            style="background-color: #fff8e1; color: #856404; font-size: 0.9rem;">
                            <i class="fa-solid fa-circle-info me-2"></i> <strong>Notice:</strong> This page is not fully
                            developed yet and will soon release an update for application to add Site tours and post orders.
                        </div>
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="feature-card">
                                    <div class="feature-icon-wrapper"><i class="fa-solid fa-building"></i></div>
                                    <div class="feature-info">
                                        <h4>Sites</h4>
                                        <p>Show all assigned Sites to perform a patrol on that property.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-card">
                                    <div class="feature-icon-wrapper"><i class="fa-solid fa-list-check"></i></div>
                                    <div class="feature-info">
                                        <h4>Runsheets</h4>
                                        <p>It shows list of all properties to patrol for mobile shifts.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-card">
                                    <div class="feature-icon-wrapper"><i class="fa-solid fa-clipboard-list"></i></div>
                                    <div class="feature-info">
                                        <h4>Notice Board</h4>
                                        <p>It will show any updates regarding to any site or any other information.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-card">
                                    <div class="feature-icon-wrapper"><i class="fa-solid fa-truck-fast"></i></div>
                                    <div class="feature-info">
                                        <h4>Dispatch Tasks</h4>
                                        <p>For alarm responses/ emergency tasks.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-card">
                                    <div class="feature-icon-wrapper"><i class="fa-solid fa-camera"></i></div>
                                    <div class="feature-info">
                                        <h4>Camera</h4>
                                        <p>This will be a replacement to time stamp camera. This camera take photo with date
                                            time and address information.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-card">
                                    <div class="feature-icon-wrapper"><i class="fa-solid fa-flashlight"></i></div>
                                    <div class="feature-info">
                                        <h4>Flashlight</h4>
                                        <p>Turn on flashlight.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-card">
                                    <div class="feature-icon-wrapper"><i class="fa-solid fa-notes-medical"></i></div>
                                    <div class="feature-info">
                                        <h4>Emergency</h4>
                                        <p>Show all important contact information.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-card">
                                    <div class="feature-icon-wrapper"><i class="fa-solid fa-triangle-exclamation"
                                            style="color: #dc3545;"></i></div>
                                    <div class="feature-info">
                                        <h4>Panic</h4>
                                        <p>Press this button if you need feel unsafe or in danger.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tab: Schedule -->
                    <div id="tab-schedule" class="tab-pane-content">
                        <div class="d-flex align-items-center justify-content-between mb-4 border-bottom pb-3">
                            <h3 class="fw-bold mb-0">Schedule Page</h3>
                        </div>
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="feature-card">
                                    <div class="feature-icon-wrapper"><i class="fa-regular fa-calendar-plus"></i></div>
                                    <div class="feature-info">
                                        <h4>Availability</h4>
                                        <p>By clicking on Availability, you will get a + option to create your availability.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-card">
                                    <div class="feature-icon-wrapper"><i class="fa-solid fa-clock"></i></div>
                                    <div class="feature-info">
                                        <h4>Check In</h4>
                                        <p>You need to check in at start of each shift and check out at end of each shift.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-card">
                                    <div class="feature-icon-wrapper"><i class="fa-solid fa-hand-holding-hand"></i></div>
                                    <div class="feature-info">
                                        <h4>Open Shifts</h4>
                                        <p>It shows all the available shifts from other guards to pick up. You can pick the
                                            shift by clicking on Take shift option.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-card">
                                    <div class="feature-icon-wrapper"><i class="fa-solid fa-location-arrow"></i></div>
                                    <div class="feature-info">
                                        <h4>Directions</h4>
                                        <p>You can get directions in google maps by clicking this direction icon.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-card">
                                    <div class="feature-icon-wrapper"><i class="fa-solid fa-circle-info"></i></div>
                                    <div class="feature-info">
                                        <h4>Shift Details</h4>
                                        <p>By clicking the shift, you can get all details of that shift including address,
                                            Timing Date etc.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-card">
                                    <div class="feature-icon-wrapper"><i class="fa-solid fa-xmark"></i></div>
                                    <div class="feature-info">
                                        <h4>Rejecting A Shift</h4>
                                        <p>If you are not available for any of the assigned shifts you can swipe left or
                                            right to reject the shift. This shift will automatically be available for all
                                            the guards to pick.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tab: Reports -->
                    <div id="tab-reports" class="tab-pane-content">
                        <div class="d-flex align-items-center justify-content-between mb-4 border-bottom pb-3">
                            <h3 class="fw-bold mb-0">Reports Page</h3>
                        </div>
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="feature-card">
                                    <div class="feature-icon-wrapper"><i class="fa-solid fa-clipboard-check"></i></div>
                                    <div class="feature-info">
                                        <h4>Daily Shift Report</h4>
                                        <p>Need to submit at the end of every shift. This will include hourly Patrol
                                            summaries.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-card">
                                    <div class="feature-icon-wrapper"><i class="fa-solid fa-file-pen"></i></div>
                                    <div class="feature-info">
                                        <h4>General Report</h4>
                                        <p>Need to fill when you must report any issue like maintenance issues/ unwanted
                                            people onsite.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-card">
                                    <div class="feature-icon-wrapper"><i class="fa-solid fa-triangle-exclamation"
                                            style="color: #dc3545;"></i></div>
                                    <div class="feature-info">
                                        <h4>Incident Report</h4>
                                        <p>Need to fill this report only when EMS, Police or Fire Department arrive on site.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-card">
                                    <div class="feature-icon-wrapper"><i class="fa-solid fa-fire"></i></div>
                                    <div class="feature-info">
                                        <h4>Fire Watch Report</h4>
                                        <p>Only need to fill on fire watch shifts.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-card">
                                    <div class="feature-icon-wrapper"><i class="fa-solid fa-list-check"></i></div>
                                    <div class="feature-info">
                                        <h4>Assessment Form</h4>
                                        <p>Need to fill at the start of each shift.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-card">
                                    <div class="feature-icon-wrapper"><i class="fa-solid fa-car"></i></div>
                                    <div class="feature-info">
                                        <h4>Vehicle Checklist</h4>
                                        <p>Need to fill this form if you are using any of company vehicles.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-card">
                                    <div class="feature-icon-wrapper"><i class="fa-solid fa-clock-rotate-left"></i></div>
                                    <div class="feature-info">
                                        <h4>Shift Adjustment</h4>
                                        <p>You can fill this form if you have worked overtime or less then your scheduled
                                            shift to adjust the shift time.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tab: Profile -->
                    <div id="tab-profile" class="tab-pane-content">
                        <div class="d-flex align-items-center justify-content-between mb-4 border-bottom pb-3">
                            <h3 class="fw-bold mb-0">Profile Page</h3>
                        </div>
                        <div class="row gy-4">
                            <div class="col-md-12">
                                <div class="feature-card">
                                    <div class="feature-icon-wrapper"><i class="fa-solid fa-user-pen"></i></div>
                                    <div class="feature-info">
                                        <h4>Edit Profile</h4>
                                        <p class="mb-2">Edit Profile to update:</p>
                                        <ul class="mb-0 ps-3" style="font-size: 0.9rem; color: #666; line-height: 1.6;">
                                            <li><strong>Address & Personal Details:</strong> Enter your current home
                                                address, phone number, and emergency contact.</li>
                                            <li><strong>Bank Details:</strong> Add the account used for payroll. Ensure
                                                information matches your void cheque.</li>
                                            <li><strong>License & Compliance:</strong> Keep your security license, first
                                                aid, and other training records up to date.</li>
                                            <li><strong>Availability:</strong> Mark days and times when you can work so
                                                scheduling is accurate.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-card">
                                    <div class="feature-icon-wrapper"><i class="fa-solid fa-file-shield"></i></div>
                                    <div class="feature-info">
                                        <h4>Policies Section</h4>
                                        <p>Open the Policies tile to read and sign all mandatory company policies.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-card">
                                    <div class="feature-icon-wrapper"><i class="fa-solid fa-file-invoice-dollar"></i></div>
                                    <div class="feature-info">
                                        <h4>Tax Documents</h4>
                                        <p>Download the Tax forms fill them up and submit both forms.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-card">
                                    <div class="feature-icon-wrapper"><i class="fa-solid fa-graduation-cap"></i></div>
                                    <div class="feature-info">
                                        <h4>Orientations</h4>
                                        <p>Attempt the Orientation Exam. Passing Score: 80% - you must score at least 80% to
                                            pass. Status (Passed/Failed) shows your current result. If you fail attempt the
                                            exam again.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-card">
                                    <div class="feature-icon-wrapper"><i class="fa-solid fa-cloud-arrow-up"></i></div>
                                    <div class="feature-info">
                                        <h4>Upload Documents</h4>
                                        <p>Uploading Compliance Documents. Void Cheque, Driver License File, Security
                                            License File, Work Eligibility File, and Other Documents.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-card">
                                    <div class="feature-icon-wrapper"><i class="fa-solid fa-handshake-angle"></i></div>
                                    <div class="feature-info">
                                        <h4>Offer Letter</h4>
                                        <p>View your hourly pay rate and job role. Accept that offer.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-card">
                                    <div class="feature-icon-wrapper"><i class="fa-solid fa-money-check-dollar"></i></div>
                                    <div class="feature-info">
                                        <h4>Pay Slips</h4>
                                        <p>View your Pay slips of each month.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- App Screenshots Slider Area -->
    <section class="app-screenshots-area">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="section-heading">App Overview</h2>
                    <p class="text-muted">Take a look at the intuitive and modern interface of the Elite Guard App.</p>
                </div>
            </div>

            <div class="app-slider swiper init-swiper">
                <script type="application/json" class="swiper-config">
                                                        {
                                                            "loop": true,
                                                            "speed": 800,
                                                            "effect": "coverflow",
                                                            "grabCursor": true,
                                                            "centeredSlides": true,
                                                            "coverflowEffect": {
                                                                "rotate": 10,
                                                                "stretch": 0,
                                                                "depth": 150,
                                                                "modifier": 1.2,
                                                                "slideShadows": false
                                                            },
                                                            "autoplay": {
                                                                "delay": 3500,
                                                                "disableOnInteraction": false
                                                            },
                                                            "slidesPerView": 1,
                                                            "spaceBetween": 20,
                                                            "pagination": {
                                                                "el": ".swiper-pagination",
                                                                "type": "bullets",
                                                                "clickable": true
                                                            },
                                                            "breakpoints": {
                                                                "576": {
                                                                    "slidesPerView": 2,
                                                                    "spaceBetween": 20
                                                                },
                                                                "768": {
                                                                    "slidesPerView": 3,
                                                                    "spaceBetween": 30
                                                                },
                                                                "992": {
                                                                    "slidesPerView": 4,
                                                                    "spaceBetween": 30
                                                                },
                                                                "1200": {
                                                                    "slidesPerView": 5,
                                                                    "spaceBetween": 30
                                                                }
                                                            }
                                                        }
                                                    </script>
                <div class="swiper-wrapper">
                    @for ($i = 18; $i <= 27; $i++)
                        <div class="swiper-slide">
                            <div class="app-screenshot-slide">
                                <img src="{{ asset('frontend/images/app/' . $i . '.jpg') }}" alt="App Screenshot {{ $i }}"
                                    loading="lazy">
                            </div>
                        </div>
                    @endfor
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const tabBtns = document.querySelectorAll('.app-tab-btn');
                const tabContents = document.querySelectorAll('.tab-pane-content');

                tabBtns.forEach(btn => {
                    btn.addEventListener('click', () => {
                        // Remove active class from all buttons and panes
                        tabBtns.forEach(b => b.classList.remove('active'));
                        tabContents.forEach(c => c.classList.remove('active'));

                        // Add active class to clicked button
                        btn.classList.add('active');

                        // Show corresponding pane
                        const targetId = btn.getAttribute('data-target');
                        document.getElementById(targetId).classList.add('active');
                    });
                });
            });
        </script>
    @endpush

@endsection