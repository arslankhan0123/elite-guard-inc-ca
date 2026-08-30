@extends('layouts.frontend.main')
@section('title', 'Terms & Conditions - Elite Guard Inc.')

@section('content')
<div class="container mt-4">
    <section class="rts__breadcrumb__area" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); padding: 80px 0; text-align: center; border-radius: 20px; margin-bottom: 30px;">
        <h1 style="color: white; font-weight: 800; font-size: 40px; margin-bottom: 10px;">Terms & Conditions</h1>
        <p style="color: rgba(255, 255, 255, 0.7); font-size: 16px; margin: 0;">Standard service terms, client liabilities, and operational regulations.</p>
    </section>
</div>

<section style="padding-bottom: 80px;">
    <div class="container">
        <div style="background: #ffffff; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); padding: 40px; color: #334155;">
            <p style="font-size: 15px; line-height: 1.8; margin-bottom: 25px;">
                Welcome to <strong>Elite Guard Inc.</strong> By hiring our security services or using this site, you agree to comply with and be bound by the following terms, conditions, and service specifications.
            </p>
            
            <h3 style="color: #0f172a; font-weight: 700; font-size: 20px; margin-top: 30px; margin-bottom: 15px; display: flex; align-items: center; gap: 10px;">
                <i class="bi bi-shield-fill" style="color: #34A853;"></i> 1. Scope of Security Services
            </h3>
            <p style="font-size: 15px; line-height: 1.8; margin-bottom: 20px;">
                Elite Guard Inc. provides professional security services as designated in individual client contracts. Our services serve as a proactive crime deterrent. While our licensed security guards act with professional diligence, we do not guarantee the absolute prevention of loss, damage, trespass, or personal injury on site.
            </p>

            <h3 style="color: #0f172a; font-weight: 700; font-size: 20px; margin-top: 30px; margin-bottom: 15px; display: flex; align-items: center; gap: 10px;">
                <i class="bi bi-person-bounding-box" style="color: #34A853;"></i> 2. Client Responsibilities
            </h3>
            <p style="font-size: 15px; line-height: 1.8; margin-bottom: 20px;">
                To enable effective protection:
            </p>
            <ul style="list-style-type: square; margin-left: 20px; margin-bottom: 25px; line-height: 1.8; font-size: 14.5px;">
                <li>Clients must provide detailed entry clearance permissions, key access codes, and site-specific patrol pathways.</li>
                <li>Any known site safety hazards or operational risks must be disclosed in writing prior to guard deployment.</li>
                <li>Safe workspaces, shelter, or base stations must be provided for security officers on duty during extreme weather conditions.</li>
            </ul>

            <h3 style="color: #0f172a; font-weight: 700; font-size: 20px; margin-top: 30px; margin-bottom: 15px; display: flex; align-items: center; gap: 10px;">
                <i class="bi bi-exclamation-triangle-fill" style="color: #34A853;"></i> 3. Limitations of Liability
            </h3>
            <p style="font-size: 15px; line-height: 1.8; margin-bottom: 20px;">
                Elite Guard Inc. holds comprehensive commercial liability insurance. Our liability for any claims, incident responses, or loss is capped up to the limit of our general insurance coverage details as defined in the specific service contract. We are not liable for losses resulting from client negligence or undocumented site hazards.
            </p>

            <h3 style="color: #0f172a; font-weight: 700; font-size: 20px; margin-top: 30px; margin-bottom: 15px; display: flex; align-items: center; gap: 10px;">
                <i class="bi bi-patch-check-fill" style="color: #34A853;"></i> 4. SSIA Compliance & Guard Safety
            </h3>
            <p style="font-size: 15px; line-height: 1.8; margin-bottom: 20px;">
                All deployed security staff operate strictly under Alberta's Security Services and Investigators Act (SSIA). Clients are strictly prohibited from soliciting our guards for direct employment or instructing them to perform hazardous non-security duties (e.g. electrical work, operating heavy site machinery).
            </p>

            <h3 style="color: #0f172a; font-weight: 700; font-size: 20px; margin-top: 30px; margin-bottom: 15px; display: flex; align-items: center; gap: 10px;">
                <i class="bi bi-bank" style="color: #34A853;"></i> 5. Governing Law
            </h3>
            <p style="font-size: 15px; line-height: 1.8; margin-bottom: 0;">
                These terms are governed by and construed in accordance with the laws of the Province of Alberta, Canada. Any dispute arising under these terms shall be subject to the exclusive jurisdiction of the courts of Alberta.
            </p>
        </div>
    </div>
</section>
@endsection
