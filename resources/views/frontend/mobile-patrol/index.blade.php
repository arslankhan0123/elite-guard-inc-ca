@extends('layouts.frontend.main')
@section('title', 'Mobile Patrol')

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
                          <li>Mobile Patrol</li>
                      </ul>
                      <h2 class="title rts-text-anime">Mobile Patrol</h2>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <!-- Mobile Patrol Content -->
  <section class="services section" style="padding: 60px 0;">
    <div class="container" data-aos="fade-up">
      <div class="row align-items-center gy-5">
        <div class="col-lg-6" data-aos="fade-right">
          <h2 style="font-size: 28px; color: #fff; margin-bottom: 20px;">PROACTIVE PROTECTION</h2>
          <p style="color: #94a3b8; font-size: 16px; line-height: 1.6;">
            Elite Guard Inc. offers highly visible mobile patrol units that ensure your property remains secure day and night. 
            Our uniformed guards conduct random, scheduled, or targeted patrols using marked vehicles, deterring crime and 
            responding to incidents rapidly.
          </p>
          <div style="margin-top: 30px;">
            <ul style="list-style: none; padding-left: 0; color: #e2e8f0; font-size: 16px;">
              <li style="margin-bottom: 15px;"><i class="bi bi-check-circle-fill" style="color: #d4af37; margin-right: 10px;"></i> Targeted property checks</li>
              <li style="margin-bottom: 15px;"><i class="bi bi-check-circle-fill" style="color: #d4af37; margin-right: 10px;"></i> Alarm response</li>
              <li style="margin-bottom: 15px;"><i class="bi bi-check-circle-fill" style="color: #d4af37; margin-right: 10px;"></i> Locking / unlocking facilities</li>
              <li style="margin-bottom: 15px;"><i class="bi bi-check-circle-fill" style="color: #d4af37; margin-right: 10px;"></i> After-hours escorts</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6" data-aos="fade-left">
          <div class="image-box" style="border-radius: 12px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.5);">
            <img src="{{ asset('frontend/images/4.jpeg') }}" alt="Mobile Patrol Vehicle" class="img-fluid" style="width: 100%; object-fit: cover;">
          </div>
        </div>
      </div>
      
      <hr style="border-color: rgba(255,255,255,0.1); margin: 60px 0;">

      <!-- FROM PLANNING TO REPORTING (Moved/Adapted from homepage) -->
      <div class="row" data-aos="fade-up">
        <div class="col-12 text-center mb-5">
          <h4 style="color: #d4af37; font-weight: 700; font-size: 20px; text-transform: uppercase;">FROM PLANNING TO REPORTING</h4>
          <p style="color: #a0aab2; font-size: 15px;">A structured approach to mobile security.</p>
        </div>
        <div class="col-12">
          <div class="d-flex justify-content-between align-items-start flex-wrap gap-3">
            <div style="flex: 1; min-width: 200px; background: rgba(0,0,0,0.2); padding: 25px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); text-align: center;">
              <span style="background-color: #d4af37; color: #fff; border-radius: 50%; width: 40px; height: 40px; display: inline-flex; justify-content: center; align-items: center; font-weight: 700; font-size: 18px; margin-bottom: 15px;">1</span>
              <h5 style="font-size: 16px; color: #fff; font-weight: 700;">PLAN</h5>
              <p style="color: #94a3b8; font-size: 14px; margin-bottom: 0;">Site needs and coverage priorities</p>
            </div>

            <div style="flex: 1; min-width: 200px; background: rgba(0,0,0,0.2); padding: 25px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); text-align: center;">
              <span style="background-color: #d4af37; color: #fff; border-radius: 50%; width: 40px; height: 40px; display: inline-flex; justify-content: center; align-items: center; font-weight: 700; font-size: 18px; margin-bottom: 15px;">2</span>
              <h5 style="font-size: 16px; color: #fff; font-weight: 700;">PATROL</h5>
              <p style="color: #94a3b8; font-size: 14px; margin-bottom: 0;">Assigned checks and site tours</p>
            </div>

            <div style="flex: 1; min-width: 200px; background: rgba(0,0,0,0.2); padding: 25px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); text-align: center;">
              <span style="background-color: #d4af37; color: #fff; border-radius: 50%; width: 40px; height: 40px; display: inline-flex; justify-content: center; align-items: center; font-weight: 700; font-size: 18px; margin-bottom: 15px;">3</span>
              <h5 style="font-size: 16px; color: #fff; font-weight: 700;">RECORD</h5>
              <p style="color: #94a3b8; font-size: 14px; margin-bottom: 0;">Checkpoint scans and observations</p>
            </div>

            <div style="flex: 1; min-width: 200px; background: rgba(0,0,0,0.2); padding: 25px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); text-align: center;">
              <span style="background-color: #d4af37; color: #fff; border-radius: 50%; width: 40px; height: 40px; display: inline-flex; justify-content: center; align-items: center; font-weight: 700; font-size: 18px; margin-bottom: 15px;">4</span>
              <h5 style="font-size: 16px; color: #fff; font-weight: 700;">REPORT</h5>
              <p style="color: #94a3b8; font-size: 14px; margin-bottom: 0;">Activity and incident reports</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
