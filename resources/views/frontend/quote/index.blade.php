@extends('layouts.frontend.main')

@section('title', 'Request a Quote | Elite Guard Inc.')

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
        background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%) !important;
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
        background: transparent !important;
        z-index: 1;
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

    /* Content Title overrides */
    .title-area-center .subtitle {
        color: #34A853;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        font-size: 14px;
        display: block;
        margin-bottom: 12px;
    }
    .title-area-center .title {
        font-size: 36px;
        font-weight: 800;
        color: #ffffff !important;
        margin-bottom: 15px;
    }
    .title-area-center .desc {
        color: rgba(255, 255, 255, 0.75) !important;
        font-size: 16px;
        line-height: 1.7;
    }

    /* Form Area Custom Redesign */
    .contact-form-inner {
        background: #ffffff !important;
        border-radius: 20px !important;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.04) !important;
        padding: 45px !important;
        border: 1px solid rgba(0, 0, 0, 0.04) !important;
        margin-bottom: 30px;
    }
    .contact-form-inner label {
        color: #0f172a !important;
        font-weight: 600;
        font-size: 14px;
        margin-bottom: 10px;
        display: block;
    }
    .contact-form-inner input,
    .contact-form-inner select,
    .contact-form-inner textarea {
        background: #f8fafc !important;
        border: 1px solid #cbd5e1 !important;
        color: #0f172a !important;
        padding: 14px 18px !important;
        width: 100%;
        border-radius: 10px !important;
        font-size: 15px;
        transition: all 0.3s ease;
    }
    .contact-form-inner input::placeholder,
    .contact-form-inner textarea::placeholder {
        color: #94a3b8 !important;
    }
    .contact-form-inner input:focus,
    .contact-form-inner select:focus,
    .contact-form-inner textarea:focus {
        border-color: #34A853 !important;
        box-shadow: 0 0 0 4px rgba(52, 168, 83, 0.1) !important;
        background: #ffffff !important;
    }
    .contact-form-inner select {
        appearance: none !important;
        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3E%3Cpath fill='none' stroke='%2334A853' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3E%3C/svg%3E") !important;
        background-repeat: no-repeat !important;
        background-position: right 18px center !important;
        background-size: 14px 12px !important;
        padding-right: 45px !important;
    }
    .contact-form-inner .rts-btn {
        background: #34A853 !important;
        color: #ffffff !important;
        border-radius: 30px !important;
        padding: 15px 40px !important;
        font-weight: 700 !important;
        border: none !important;
        box-shadow: 0 10px 20px rgba(52, 168, 83, 0.2) !important;
        transition: all 0.3s ease !important;
    }
    .contact-form-inner .rts-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 15px 25px rgba(52, 168, 83, 0.3) !important;
    }
</style>
<!-- rts breadcrumb area start -->
<section class="rts__breadcrumb__area ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="rts__breadcrumb__content" data-bg-src="https://images.unsplash.com/photo-1565793298595-6a879b1d9492?auto=format&amp;fit=crop&amp;w=1600&amp;q=85">
                    <ul class="list">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><i class="fa-solid fa-chevron-right"></i></li>
                        <li>Request a Quote</li>
                    </ul>
                    <h2 class="title rts-text-anime">Request a Service Quote</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- rts breadcrumb area end -->

<!-- quote form area start -->
<div class="rts-contact-area rts-section-gapBottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-area-center text-center mb-5">
                    <span class="subtitle">Elite Guard Security Services</span>
                    <h2 class="title">Tell Us What Your Security Needs Are</h2>
                    <p class="desc mt--20 mx-auto" style="max-width: 700px;">Tell us about your property and security requirements. Our security specialists will review your details to provide a customized protection proposal.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-form-inner">
                    <form id="quoteForm" action="{{ route('quote.store') }}" method="POST">
                        @csrf
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="single-input">
                                    <label for="name">Full Name*</label>
                                    <input type="text" name="name" id="name" placeholder="John Doe" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single-input">
                                    <label for="company_name">Company Name</label>
                                    <input type="text" name="company_name" id="company_name" placeholder="Your Company">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single-input">
                                    <label for="email">Email Address*</label>
                                    <input type="email" name="email" id="email" placeholder="example@mail.com" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single-input">
                                    <label for="phone">Phone Number*</label>
                                    <input type="tel" name="phone" id="phone" placeholder="+1 (234) 567-890" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single-input">
                                    <label for="country">Country / Delivery Location*</label>
                                    <input type="text" name="country" id="country" placeholder="e.g. Canada or Saudi Arabia" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single-input">
                                    <label for="property_type">Property / Service Type*</label>
                                    <select name="property_type" id="property_type" required>
                                        <option value="">Select Property/Service Type</option>
                                        <option value="residential">Residential</option>
                                        <option value="commercial">Commercial</option>
                                        <option value="industrial">Industrial</option>
                                        <option value="event">Event Security</option>
                                        <option value="vip">VIP / Close Protection</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single-input">
                                    <label for="service_id">Security Service Required*</label>
                                    <select name="service_id" id="service_id" required>
                                        <option value="">Select a Service</option>
                                        @foreach($services as $service)
                                        <option value="{{ $service->id }}">{{ $service->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single-input">
                                    <label for="equipment_condition">Service Schedule / Shift*</label>
                                    <select name="equipment_condition" id="equipment_condition" required>
                                        <option value="">Select Schedule</option>
                                        <option value="24_7">24/7 Continuous Coverage</option>
                                        <option value="day_shift">Day Shift Only</option>
                                        <option value="night_shift">Night Shift Only</option>
                                        <option value="custom">Custom Hours</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single-input">
                                    <label for="quantity">Number of Guards Required</label>
                                    <input type="text" name="quantity" id="quantity" placeholder="e.g. 2 guards, 5 guards">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single-input">
                                    <label for="required_by">Service Start Date</label>
                                    <input type="date" name="required_by" id="required_by" min="{{ now()->format('Y-m-d') }}">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="single-input">
                                    <label for="message">Security Requirements / Description of Needs*</label>
                                    <textarea name="message" id="message" rows="5" placeholder="Describe your security requirements, property size, key vulnerabilities, duration, and any specific guard instructions..." required></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 text-center mt--30">
                                <button type="submit" class="rts-btn btn-primary" id="submitBtn" style="width: 100%; max-width: 300px;">Submit Request <i class="fa-solid fa-paper-plane ms-2"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- quote form area end -->

<script>
    document.addEventListener('DOMContentLoaded', function() {
        $('#quoteForm').on('submit', function(e) {
            e.preventDefault();

            let form = $(this);
            let submitBtn = $('#submitBtn');
            let formData = form.serialize();

            submitBtn.prop('disabled', true).html('Sending... <i class="fa-solid fa-spinner fa-spin ms-2"></i>');

            $.ajax({
                url: form.attr('action'),
                type: 'POST',
                data: formData,
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: response.message,
                        confirmButtonColor: '#34A853'
                    });
                    form[0].reset();
                    submitBtn.prop('disabled', false).html('Submit Request <i class="fa-solid fa-paper-plane ms-2"></i>');
                },
                error: function(xhr) {
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
                    submitBtn.prop('disabled', false).html('Submit Request <i class="fa-solid fa-paper-plane ms-2"></i>');
                }
            });
        });
    });
</script>
@endsection
