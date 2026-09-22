@extends('layouts.frontend.main')
@section('title', 'Technology - Guard App Guide')

@section('content')
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
        text-shadow: 0 2px 4px rgba(0,0,0,0.2);
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
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
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
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
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
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .feature-card {
        background: #fff;
        border-radius: 12px;
        padding: 25px;
        height: 100%;
        box-shadow: 0 5px 15px rgba(0,0,0,0.03);
        border: 1px solid rgba(0,0,0,0.03);
        transition: transform 0.3s, box-shadow 0.3s;
        display: flex;
        align-items: flex-start;
    }
    .feature-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.08);
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
</style>

<section class="rts__breadcrumb__area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="rts__breadcrumb__content"
                    style="background-image: url('{{ asset('frontend/images/4.jpeg') }}');">
                    <ul class="list">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><i class="fa-solid fa-chevron-right"></i></li>
                        <li>Technology</li>
                    </ul>
                    <h2 class="title rts-text-anime">Guard App Guide</h2>
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
                <p class="text-uppercase mb-2" style="font-weight: 700; letter-spacing: 2px; color: #b8860b;">Elite Guard Inc.</p>
                <h2 class="title text-dark" style="font-size: 2.5rem; line-height: 1.2; margin-bottom: 20px; font-weight: 800;">
                    Complete Guide to our <br><span style="color: #b8860b;">Mobile Security App</span>
                </h2>
                <p class="text-muted mx-auto" style="font-size: 1.1rem; max-width: 600px;">
                    Our custom Guard App streamlines operations by integrating patrols, scheduling, reporting, and personal profile management into one intuitive mobile platform. Explore the modules below.
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
                    <div class="alert alert-warning border-0 shadow-sm mb-4" style="background-color: #fff8e1; color: #856404; font-size: 0.9rem;">
                        <i class="fa-solid fa-circle-info me-2"></i> <strong>Notice:</strong> This page is not fully developed yet and will soon release an update for application to add Site tours and post orders.
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
                                    <p>This will be a replacement to time stamp camera. This camera take photo with date time and address information.</p>
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
                                <div class="feature-icon-wrapper"><i class="fa-solid fa-triangle-exclamation" style="color: #dc3545;"></i></div>
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
                                    <p>By clicking on Availability, you will get a + option to create your availability.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-card">
                                <div class="feature-icon-wrapper"><i class="fa-solid fa-clock"></i></div>
                                <div class="feature-info">
                                    <h4>Check In</h4>
                                    <p>You need to check in at start of each shift and check out at end of each shift.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-card">
                                <div class="feature-icon-wrapper"><i class="fa-solid fa-hand-holding-hand"></i></div>
                                <div class="feature-info">
                                    <h4>Open Shifts</h4>
                                    <p>It shows all the available shifts from other guards to pick up. You can pick the shift by clicking on Take shift option.</p>
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
                                    <p>By clicking the shift, you can get all details of that shift including address, Timing Date etc.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-card">
                                <div class="feature-icon-wrapper"><i class="fa-solid fa-xmark"></i></div>
                                <div class="feature-info">
                                    <h4>Rejecting A Shift</h4>
                                    <p>If you are not available for any of the assigned shifts you can swipe left or right to reject the shift. This shift will automatically be available for all the guards to pick.</p>
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
                                    <p>Need to submit at the end of every shift. This will include hourly Patrol summaries.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-card">
                                <div class="feature-icon-wrapper"><i class="fa-solid fa-file-pen"></i></div>
                                <div class="feature-info">
                                    <h4>General Report</h4>
                                    <p>Need to fill when you must report any issue like maintenance issues/ unwanted people onsite.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-card">
                                <div class="feature-icon-wrapper"><i class="fa-solid fa-triangle-exclamation" style="color: #dc3545;"></i></div>
                                <div class="feature-info">
                                    <h4>Incident Report</h4>
                                    <p>Need to fill this report only when EMS, Police or Fire Department arrive on site.</p>
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
                                    <p>You can fill this form if you have worked overtime or less then your scheduled shift to adjust the shift time.</p>
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
                                        <li><strong>Address & Personal Details:</strong> Enter your current home address, phone number, and emergency contact.</li>
                                        <li><strong>Bank Details:</strong> Add the account used for payroll. Ensure information matches your void cheque.</li>
                                        <li><strong>License & Compliance:</strong> Keep your security license, first aid, and other training records up to date.</li>
                                        <li><strong>Availability:</strong> Mark days and times when you can work so scheduling is accurate.</li>
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
                                    <p>Attempt the Orientation Exam. Passing Score: 80% - you must score at least 80% to pass. Status (Passed/Failed) shows your current result. If you fail attempt the exam again.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-card">
                                <div class="feature-icon-wrapper"><i class="fa-solid fa-cloud-arrow-up"></i></div>
                                <div class="feature-info">
                                    <h4>Upload Documents</h4>
                                    <p>Uploading Compliance Documents. Void Cheque, Driver License File, Security License File, Work Eligibility File, and Other Documents.</p>
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
