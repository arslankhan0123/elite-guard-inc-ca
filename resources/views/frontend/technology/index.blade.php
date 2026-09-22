@extends('layouts.frontend.main')
@section('title', 'Technology')

@section('content')

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
                      <h2 class="title rts-text-anime">Technology & Innovation</h2>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <!-- Our Security App Section -->
  <section class="security-app section" style="padding: 60px 0;">
    <div class="container" data-aos="fade-up">
      <div class="section-title text-center mb-5">
        <h3 style="font-size: 24px; text-transform: uppercase; letter-spacing: 1px; color: #d4af37;">OUR SECURITY APP</h3>
        <p style="font-size: 18px; font-weight: 600; color: #e2e8f0; letter-spacing: 2px;">PATROL • REPORT • COORDINATE</p>
        <p style="color: #94a3b8; font-size: 16px; max-width: 700px; margin: 20px auto 0;">
          Elite Guard Inc. integrates modern technology into our daily security operations to provide greater transparency and accountability to our clients.
        </p>
      </div>

      <div class="row gy-4 text-center mt-5">
        <div class="col-md-3">
          <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.05); padding: 30px 20px; border-radius: 12px; height: 100%; transition: transform 0.3s;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
            <i class="bi bi-phone" style="font-size: 40px; color: #d4af37; margin-bottom: 20px; display: block;"></i>
            <h5 style="font-weight: 700; font-size: 18px; margin-bottom: 10px; color: #fff;">PATROL TOOLS</h5>
            <p style="font-size: 15px; color: #94a3b8; margin-bottom: 0;">Check-in • Dispatch<br>Sites • Runsheets</p>
          </div>
        </div>
        <div class="col-md-3">
          <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.05); padding: 30px 20px; border-radius: 12px; height: 100%; transition: transform 0.3s;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
            <i class="bi bi-broadcast" style="font-size: 40px; color: #d4af37; margin-bottom: 20px; display: block;"></i>
            <h5 style="font-weight: 700; font-size: 18px; margin-bottom: 10px; color: #fff;">NFC CHECKPOINTS</h5>
            <p style="font-size: 15px; color: #94a3b8; margin-bottom: 0;">NFC scans • Site tours<br>Checkpoint verification</p>
          </div>
        </div>
        <div class="col-md-3">
          <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.05); padding: 30px 20px; border-radius: 12px; height: 100%; transition: transform 0.3s;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
            <i class="bi bi-file-earmark-text" style="font-size: 40px; color: #d4af37; margin-bottom: 20px; display: block;"></i>
            <h5 style="font-weight: 700; font-size: 18px; margin-bottom: 10px; color: #fff;">DIGITAL REPORTS</h5>
            <p style="font-size: 15px; color: #94a3b8; margin-bottom: 0;">Shift • Incident • Photos<br>Fire watch</p>
          </div>
        </div>
        <div class="col-md-3">
          <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.05); padding: 30px 20px; border-radius: 12px; height: 100%; transition: transform 0.3s;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
            <i class="bi bi-calendar-check" style="font-size: 40px; color: #d4af37; margin-bottom: 20px; display: block;"></i>
            <h5 style="font-weight: 700; font-size: 18px; margin-bottom: 10px; color: #fff;">DAILY CHECKS</h5>
            <p style="font-size: 15px; color: #94a3b8; margin-bottom: 0;">Vehicle inspections<br>Duty checks • Shift changes</p>
          </div>
        </div>
      </div>

      <div class="mt-5 pt-5 text-center" style="border-top: 1px solid rgba(255,255,255,0.1);">
        <h4 style="font-weight: 700; color: #fff; margin-bottom: 15px; font-size: 22px;">OUR TEAM. YOUR MOBILE SECURITY.</h4>
        <p style="font-size: 16px; color: #94a3b8; max-width: 800px; margin: 0 auto;">Uniformed personnel and marked patrol vehicles provide a visible security presence, supported by site tours, checkpoint scanning and digital reporting.</p>
      </div>
    </div>
  </section>

@endsection
