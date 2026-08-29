@extends('layouts.frontend.main')

@section('title', 'Request a Quote | Alberta International Traders')

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
                <div class="rts__breadcrumb__content" data-bg-src="https://images.unsplash.com/photo-1565793298595-6a879b1d9492?auto=format&amp;fit=crop&amp;w=1600&amp;q=85">
                    <ul class="list">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><i class="fa-solid fa-chevron-right"></i></li>
                        <li>Request a Quote</li>
                    </ul>
                    <h2 class="title rts-text-anime">Request a Product Quote</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- rts breadcrumb area end -->

<!-- quote form area start -->
<div class="rts-contact-area rts-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-area-center">
                    <span class="subtitle" style="color: #34A853;">Global Product Sourcing</span>
                    <h2 class="title">Tell Us What Your Business Needs</h2>
                    <p class="desc mt--20" style="color: rgba(255,255,255,0.7); max-width: 700px; margin-left: auto; margin-right: auto;">Share your equipment, material or commercial product requirements. Our team will review specifications, sourcing options, pricing and availability.</p>
                </div>
            </div>
        </div>
        <div class="row mt--50">
            <div class="col-lg-12">
                <div class="contact-form-inner" style="background: #001514; padding: 50px; border-radius: 20px; border: 1px solid rgba(255,255,255,0.1);">
                    <form id="quoteForm" action="{{ route('quote.store') }}" method="POST">
                        @csrf
                        <div class="row g-5">
                            <div class="col-lg-6">
                                <div class="single-input">
                                    <label for="name" style="color: white; margin-bottom: 10px; display: block;">Full Name*</label>
                                    <input type="text" name="name" id="name" placeholder="John Doe" required style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); color: white; padding: 15px; width: 100%; border-radius: 5px;">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single-input">
                                    <label for="company_name" style="color: white; margin-bottom: 10px; display: block;">Company Name</label>
                                    <input type="text" name="company_name" id="company_name" placeholder="Your Company" style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); color: white; padding: 15px; width: 100%; border-radius: 5px;">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single-input">
                                    <label for="email" style="color: white; margin-bottom: 10px; display: block;">Email Address*</label>
                                    <input type="email" name="email" id="email" placeholder="example@mail.com" required style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); color: white; padding: 15px; width: 100%; border-radius: 5px;">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single-input">
                                    <label for="phone" style="color: white; margin-bottom: 10px; display: block;">Phone Number*</label>
                                    <input type="tel" name="phone" id="phone" placeholder="+1 (234) 567-890" required style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); color: white; padding: 15px; width: 100%; border-radius: 5px;">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single-input">
                                    <label for="country" style="color: white; margin-bottom: 10px; display: block;">Country / Delivery Location*</label>
                                    <input type="text" name="country" id="country" placeholder="e.g. Canada or Saudi Arabia" required style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); color: white; padding: 15px; width: 100%; border-radius: 5px;">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single-input">
                                    <label for="business_line" style="color: white; margin-bottom: 10px; display: block;">Business Line*</label>
                                    <select name="business_line" id="business_line" style="background: #001a19; border: 1px solid rgba(255,255,255,0.1); color: white; padding: 15px; width: 100%; border-radius: 5px; appearance: auto;" required>
                                        <option value="">Select a Business Line</option>
                                        <option value="industrial_equipment">Industrial Equipment</option>
                                        <option value="construction_equipment">Construction Equipment</option>
                                        <option value="construction_materials">Construction Materials</option>
                                        <option value="food_beverage_equipment">Food & Beverage Commercial Equipment</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single-input">
                                    <label for="product_id" style="color: white; margin-bottom: 10px; display: block;">Specific Product</label>
                                    <select name="product_id" id="product_id" style="background: #001a19; border: 1px solid rgba(255,255,255,0.1); color: white; padding: 15px; width: 100%; border-radius: 5px; appearance: auto;">
                                        <option value="">Other / Not Listed</option>
                                        @foreach($products as $product)
                                        <option value="{{ $product->id }}">{{ $product->name }} ({{ $product->sku }})</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single-input">
                                    <label for="equipment_condition" style="color: white; margin-bottom: 10px; display: block;">Preferred Condition</label>
                                    <select name="equipment_condition" id="equipment_condition" style="background: #001a19; border: 1px solid rgba(255,255,255,0.1); color: white; padding: 15px; width: 100%; border-radius: 5px; appearance: auto;">
                                        <option value="">Not Applicable</option>
                                        <option value="new">New</option>
                                        <option value="used">Used</option>
                                        <option value="either">New or Used</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single-input">
                                    <label for="quantity" style="color: white; margin-bottom: 10px; display: block;">Quantity</label>
                                    <input type="text" name="quantity" id="quantity" placeholder="e.g. 10 units or 500 tonnes" style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); color: white; padding: 15px; width: 100%; border-radius: 5px;">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single-input">
                                    <label for="required_by" style="color: white; margin-bottom: 10px; display: block;">Required By</label>
                                    <input type="date" name="required_by" id="required_by" min="{{ now()->format('Y-m-d') }}" style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); color: white; padding: 15px; width: 100%; border-radius: 5px; color-scheme: dark;">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="single-input">
                                    <label for="message" style="color: white; margin-bottom: 10px; display: block;">Product Specifications / Requirements*</label>
                                    <textarea name="message" id="message" rows="5" placeholder="Describe the required product, model, size, technical specifications, preferred brand and delivery requirements..." required style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); color: white; padding: 15px; width: 100%; border-radius: 5px;"></textarea>
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
