@extends('layouts.frontend.main')
@section('title', 'Privacy Policy - Elite Guard Inc.')

@section('content')
<div class="container mt-4">
    <section class="rts__breadcrumb__area" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); padding: 80px 0; text-align: center; border-radius: 20px; margin-bottom: 30px;">
        <h1 style="color: white; font-weight: 800; font-size: 40px; margin-bottom: 10px;">Privacy Policy</h1>
        <p style="color: rgba(255, 255, 255, 0.7); font-size: 16px; margin: 0;">How Elite Guard Inc. manages and protects your personal and security-related data.</p>
    </section>
</div>

<section style="padding-bottom: 80px;">
    <div class="container">
        <div style="background: #ffffff; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); padding: 40px; color: #334155;">
            <p style="font-size: 15px; line-height: 1.8; margin-bottom: 25px;">
                At <strong>Elite Guard Inc.</strong>, we prioritize the privacy and security of our clients, website visitors, and security personnel. This Privacy Policy details how we collect, use, and safeguard your data in accordance with Alberta's personal information protection acts.
            </p>
            
            <h3 style="color: #0f172a; font-weight: 700; font-size: 20px; margin-top: 30px; margin-bottom: 15px; display: flex; align-items: center; gap: 10px;">
                <i class="bi bi-shield-lock-fill" style="color: #34A853;"></i> 1. Information We Collect
            </h3>
            <p style="font-size: 15px; line-height: 1.8; margin-bottom: 20px;">
                To provide uniformed security personnel, access control monitoring, and mobile patrol services, we may collect:
            </p>
            <ul style="list-style-type: square; margin-left: 20px; margin-bottom: 25px; line-height: 1.8; font-size: 14.5px;">
                <li><strong>Contact details:</strong> Name, business name, phone number, email address, and site coordinates.</li>
                <li><strong>Service requirements:</strong> Property type, number of guards needed, shift schedules, and site-specific patrol instructions.</li>
                <li><strong>Site monitoring data:</strong> Video surveillance feeds, access logs, visitor registries, and guard activity GPS telemetry.</li>
            </ul>

            <h3 style="color: #0f172a; font-weight: 700; font-size: 20px; margin-top: 30px; margin-bottom: 15px; display: flex; align-items: center; gap: 10px;">
                <i class="bi bi-gear-fill" style="color: #34A853;"></i> 2. How We Use Your Information
            </h3>
            <p style="font-size: 15px; line-height: 1.8; margin-bottom: 20px;">
                We process your information strictly to execute security contracts, specifically to:
            </p>
            <ul style="list-style-type: square; margin-left: 20px; margin-bottom: 25px; line-height: 1.8; font-size: 14.5px;">
                <li>Deploy licensed security guards and schedule mobile patrol shifts.</li>
                <li>Submit real-time digital patrol updates and incident reports to property managers.</li>
                <li>Respond immediately to on-site security emergencies, breaches, or alarms.</li>
                <li>Maintain safety records in compliance with local regulations and commercial liabilities.</li>
            </ul>

            <h3 style="color: #0f172a; font-weight: 700; font-size: 20px; margin-top: 30px; margin-bottom: 15px; display: flex; align-items: center; gap: 10px;">
                <i class="bi bi-eye-slash-fill" style="color: #34A853;"></i> 3. Data Protection & Retention
            </h3>
            <p style="font-size: 15px; line-height: 1.8; margin-bottom: 20px;">
                All security reports, guard tracking data, and access registry records are encrypted and stored on secure cloud databases. We do not sell or lease client details to marketing agencies. Information is shared only with law enforcement or facility representatives in case of incident investigations.
            </p>

            <h3 style="color: #0f172a; font-weight: 700; font-size: 20px; margin-top: 30px; margin-bottom: 15px; display: flex; align-items: center; gap: 10px;">
                <i class="bi bi-telephone-fill" style="color: #34A853;"></i> 4. Contact Us
            </h3>
            <p style="font-size: 15px; line-height: 1.8; margin-bottom: 0;">
                If you have queries regarding your data security or need to update your site monitoring permissions, reach out to our privacy officer at <a href="mailto:info@eliteguardinc.ca" style="color: #34A853; text-decoration: underline;">info@eliteguardinc.ca</a>.
            </p>
        </div>
    </div>
</section>
@endsection
