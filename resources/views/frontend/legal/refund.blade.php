@extends('layouts.frontend.main')
@section('title', 'Refund & Cancellation Policy - Elite Guard Inc.')

@section('content')
<div class="container mt-4">
    <section class="rts__breadcrumb__area" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); padding: 80px 0; text-align: center; border-radius: 20px; margin-bottom: 30px;">
        <h1 style="color: white; font-weight: 800; font-size: 40px; margin-bottom: 10px;">Refund & Cancellation Policy</h1>
        <p style="color: rgba(255, 255, 255, 0.7); font-size: 16px; margin: 0;">Billing adjustments, contract cancellations, and deposit terms for security services.</p>
    </section>
</div>

<section style="padding-bottom: 80px;">
    <div class="container">
        <div style="background: #ffffff; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); padding: 40px; color: #334155;">
            <p style="font-size: 15px; line-height: 1.8; margin-bottom: 25px;">
                At <strong>Elite Guard Inc.</strong>, we strive to deliver professional and highly flexible security arrangements. Since security services involve pre-scheduled personnel deployment and operational readiness, the following refund and cancellation policies apply to all agreements.
            </p>
            
            <h3 style="color: #0f172a; font-weight: 700; font-size: 20px; margin-top: 30px; margin-bottom: 15px; display: flex; align-items: center; gap: 10px;">
                <i class="bi bi-calendar2-x-fill" style="color: #34A853;"></i> 1. Event Security Cancellation
            </h3>
            <p style="font-size: 15px; line-height: 1.8; margin-bottom: 20px;">
                For single-instance services such as Event Security Management:
            </p>
            <ul style="list-style-type: square; margin-left: 20px; margin-bottom: 25px; line-height: 1.8; font-size: 14.5px;">
                <li>Cancellations requested <strong>48 hours or more</strong> before the scheduled event start time qualify for a 100% refund of the deposit.</li>
                <li>Cancellations made <strong>between 24 and 48 hours</strong> prior to the event will be refunded 50% of the deposit amount.</li>
                <li>Cancellations with <strong>less than 24 hours</strong> notice are non-refundable as guard shift blocks are pre-booked.</li>
            </ul>

            <h3 style="color: #0f172a; font-weight: 700; font-size: 20px; margin-top: 30px; margin-bottom: 15px; display: flex; align-items: center; gap: 10px;">
                <i class="bi bi-file-earmark-text-fill" style="color: #34A853;"></i> 2. Term Security Contracts
            </h3>
            <p style="font-size: 15px; line-height: 1.8; margin-bottom: 20px;">
                For monthly or recurring security services (e.g. Uniformed Guarding, Mobile Patrols):
            </p>
            <ul style="list-style-type: square; margin-left: 20px; margin-bottom: 25px; line-height: 1.8; font-size: 14.5px;">
                <li>Ongoing security contracts require a <strong>30-day written cancellation notice</strong> unless specified differently in your Service Level Agreement (SLA).</li>
                <li>Billing adjustments will be computed pro-rata up to the final date of service.</li>
            </ul>

            <h3 style="color: #0f172a; font-weight: 700; font-size: 20px; margin-top: 30px; margin-bottom: 15px; display: flex; align-items: center; gap: 10px;">
                <i class="bi bi-patch-exclamation-fill" style="color: #34A853;"></i> 3. Quality Assurance & Service Credits
            </h3>
            <p style="font-size: 15px; line-height: 1.8; margin-bottom: 20px;">
                If a guard fails to report for duty or a mobile patrol shift is missed, Elite Guard Inc. will issue a service credit or direct billing refund for the unfulfilled hours in the upcoming invoice. All reports are verified using our digital GPS telemetry system.
            </p>

            <h3 style="color: #0f172a; font-weight: 700; font-size: 20px; margin-top: 30px; margin-bottom: 15px; display: flex; align-items: center; gap: 10px;">
                <i class="bi bi-credit-card-2-front-fill" style="color: #34A853;"></i> 4. Processing Refunds
            </h3>
            <p style="font-size: 15px; line-height: 1.8; margin-bottom: 0;">
                Approved refunds will be processed via direct bank transfer or credited to your invoice ledger within <strong>5-7 business days</strong>. Contact our billing department at <a href="mailto:info@eliteguardinc.ca" style="color: #34A853; text-decoration: underline;">info@eliteguardinc.ca</a> for accounts ledger updates.
            </p>
        </div>
    </div>
</section>
@endsection
