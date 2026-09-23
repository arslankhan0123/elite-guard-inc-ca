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
   <section class="why-choose-section" style="padding: 80px 0; background: #fff;">
      <div class="container">
         <div class="row">
            <div class="col-lg-4 mb-5 mb-lg-0">
               <h5
                  style="color: #d4af37; font-weight: 700; text-transform: uppercase; font-size: 14px; letter-spacing: 1px;">
                  Why Choose</h5>
               <h2 style="font-size: 32px; font-weight: 800; color: #111; margin-bottom: 20px;">OUR MOBILE PATROL SERVICES
               </h2>
               <p style="color: #555; font-size: 15px; line-height: 1.6;">
                  Mobile patrols provide a flexible and cost-effective way to secure your property. With random and
                  scheduled visits, our team helps prevent theft, vandalism and unauthorized access while providing
                  detailed digital reporting.
               </p>
            </div>
            <div class="col-lg-8">
               <div class="row">
                  <!-- Deter Crime -->
                  <div class="col-md-3 col-6 mb-4">
                     <div class="text-center">
                        <div
                           style="width: 70px; height: 70px; background: #f8f9fa; border-radius: 12px; margin: 0 auto 15px auto; display: flex; align-items: center; justify-content: center;">
                           <i class="fa-solid fa-shield-halved" style="font-size: 30px; color: #111;"></i>
                        </div>
                        <h6 style="font-weight: 800; font-size: 13px; color: #111;">DETER CRIME</h6>
                        <p style="font-size: 12px; color: #666; line-height: 1.4;">A visible presence reduces the risk of
                           theft, vandalism and unauthorized access.</p>
                     </div>
                  </div>
                  <!-- Flexible Scheduling -->
                  <div class="col-md-3 col-6 mb-4">
                     <div class="text-center">
                        <div
                           style="width: 70px; height: 70px; background: #f8f9fa; border-radius: 12px; margin: 0 auto 15px auto; display: flex; align-items: center; justify-content: center;">
                           <i class="fa-solid fa-clock" style="font-size: 30px; color: #111;"></i>
                        </div>
                        <h6 style="font-weight: 800; font-size: 13px; color: #111;">FLEXIBLE SCHEDULING</h6>
                        <p style="font-size: 12px; color: #666; line-height: 1.4;">Custom patrol schedules tailored to your
                           property and risk level.</p>
                     </div>
                  </div>
                  <!-- Real-Time Reporting -->
                  <div class="col-md-3 col-6 mb-4">
                     <div class="text-center">
                        <div
                           style="width: 70px; height: 70px; background: #f8f9fa; border-radius: 12px; margin: 0 auto 15px auto; display: flex; align-items: center; justify-content: center;">
                           <i class="fa-solid fa-file-invoice" style="font-size: 30px; color: #111;"></i>
                        </div>
                        <h6 style="font-weight: 800; font-size: 13px; color: #111;">REAL-TIME REPORTING</h6>
                        <p style="font-size: 12px; color: #666; line-height: 1.4;">Digital reports with photos, timestamps
                           and GPS verification.</p>
                     </div>
                  </div>
                  <!-- Professional Team -->
                  <div class="col-md-3 col-6 mb-4">
                     <div class="text-center">
                        <div
                           style="width: 70px; height: 70px; background: #f8f9fa; border-radius: 12px; margin: 0 auto 15px auto; display: flex; align-items: center; justify-content: center;">
                           <i class="fa-solid fa-users" style="font-size: 30px; color: #111;"></i>
                        </div>
                        <h6 style="font-weight: 800; font-size: 13px; color: #111;">PROFESSIONAL TEAM</h6>
                        <p style="font-size: 12px; color: #666; line-height: 1.4;">Trained, licensed and uniformed security
                           professionals.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="how-it-works-section" style="padding: 40px 0; background: #fdfdfd;">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-lg-5 mb-4 mb-lg-0">
               <img src="{{ asset('frontend/images/4.jpeg') }}" class="img-fluid" alt="Mobile Patrol Vehicle"
                  style="border-radius: 8px;">
            </div>
            <div class="col-lg-7">
               <h2 style="font-size: 28px; font-weight: 800; color: #111; margin-bottom: 5px;">HOW OUR MOBILE PATROL WORKS
               </h2>
               <h5
                  style="color: #d4af37; font-weight: 700; text-transform: uppercase; font-size: 13px; margin-bottom: 40px; letter-spacing: 1px;">
                  A SIMPLE PROCESS FOR A SAFER PROPERTY</h5>

               <div class="d-flex justify-content-between align-items-start text-center flex-wrap">
                  <!-- Step 1 -->
                  <div style="flex: 1; min-width: 120px; padding: 0 10px; margin-bottom: 20px;">
                     <div
                        style="width: 50px; height: 50px; background: #d4af37; color: #fff; font-size: 22px; font-weight: 800; display: flex; align-items: center; justify-content: center; border-radius: 50%; margin: 0 auto 15px auto;">
                        1</div>
                     <h6 style="font-weight: 800; color: #111; font-size: 14px;">PLAN</h6>
                     <p style="font-size: 12px; color: #666; line-height: 1.4;">We assess your property and create a
                        customized patrol plan.</p>
                  </div>

                  <div class="d-none d-md-block"
                     style="color: #d4af37; font-size: 20px; margin-top: 15px; padding: 0 10px;"><i
                        class="fa-solid fa-arrow-right-long"></i></div>

                  <!-- Step 2 -->
                  <div style="flex: 1; min-width: 120px; padding: 0 10px; margin-bottom: 20px;">
                     <div
                        style="width: 50px; height: 50px; background: #d4af37; color: #fff; font-size: 22px; font-weight: 800; display: flex; align-items: center; justify-content: center; border-radius: 50%; margin: 0 auto 15px auto;">
                        2</div>
                     <h6 style="font-weight: 800; color: #111; font-size: 14px;">PATROL</h6>
                     <p style="font-size: 12px; color: #666; line-height: 1.4;">Our team conducts scheduled and random
                        patrols.</p>
                  </div>

                  <div class="d-none d-md-block"
                     style="color: #d4af37; font-size: 20px; margin-top: 15px; padding: 0 10px;"><i
                        class="fa-solid fa-arrow-right-long"></i></div>

                  <!-- Step 3 -->
                  <div style="flex: 1; min-width: 120px; padding: 0 10px; margin-bottom: 20px;">
                     <div
                        style="width: 50px; height: 50px; background: #d4af37; color: #fff; font-size: 22px; font-weight: 800; display: flex; align-items: center; justify-content: center; border-radius: 50%; margin: 0 auto 15px auto;">
                        3</div>
                     <h6 style="font-weight: 800; color: #111; font-size: 14px;">REPORT</h6>
                     <p style="font-size: 12px; color: #666; line-height: 1.4;">Each visit is logged with photos,
                        timestamps and notes.</p>
                  </div>

                  <div class="d-none d-md-block"
                     style="color: #d4af37; font-size: 20px; margin-top: 15px; padding: 0 10px;"><i
                        class="fa-solid fa-arrow-right-long"></i></div>

                  <!-- Step 4 -->
                  <div style="flex: 1; min-width: 120px; padding: 0 10px; margin-bottom: 20px;">
                     <div
                        style="width: 50px; height: 50px; background: #d4af37; color: #fff; font-size: 22px; font-weight: 800; display: flex; align-items: center; justify-content: center; border-radius: 50%; margin: 0 auto 15px auto;">
                        4</div>
                     <h6 style="font-weight: 800; color: #111; font-size: 14px;">RESPOND</h6>
                     <p style="font-size: 12px; color: #666; line-height: 1.4;">Any issues or incidents are reported
                        immediately and escalated if needed.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="services-include-section" style="padding: 60px 0; background: #fff;">
      <div class="container">
         <h2 style="font-size: 26px; font-weight: 800; color: #111; margin-bottom: 40px; text-transform: uppercase;">MOBILE
            PATROL SERVICES INCLUDE</h2>

         <div class="row align-items-center">
            <div class="col-lg-7 mb-4 mb-lg-0">
               <div class="row">
                  <div class="col-md-6">
                     <ul class="list-unstyled" style="line-height: 2.2;">
                        <li class="d-flex align-items-center mb-4">
                           <div
                              style="min-width: 35px; height: 35px; background: #fbf6ec; border-radius: 5px; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                              <i class="fa-solid fa-car" style="color: #111; font-size: 14px;"></i>
                           </div>
                           <span style="font-size: 14px; font-weight: 500; color: #333;">Scheduled and random
                              patrols</span>
                        </li>
                        <li class="d-flex align-items-center mb-4">
                           <div
                              style="min-width: 35px; height: 35px; background: #fbf6ec; border-radius: 5px; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                              <i class="fa-solid fa-bars-staggered" style="color: #111; font-size: 14px;"></i>
                           </div>
                           <span style="font-size: 14px; font-weight: 500; color: #333;">Perimeter and access point
                              checks</span>
                        </li>
                        <li class="d-flex align-items-center mb-4">
                           <div
                              style="min-width: 35px; height: 35px; background: #fbf6ec; border-radius: 5px; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                              <i class="fa-solid fa-building" style="color: #111; font-size: 14px;"></i>
                           </div>
                           <span style="font-size: 14px; font-weight: 500; color: #333;">Building exterior
                              inspections</span>
                        </li>
                        <li class="d-flex align-items-center mb-4">
                           <div
                              style="min-width: 35px; height: 35px; background: #fbf6ec; border-radius: 5px; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                              <i class="fa-solid fa-lightbulb" style="color: #111; font-size: 14px;"></i>
                           </div>
                           <span style="font-size: 14px; font-weight: 500; color: #333;">Alarm response and site
                              verification</span>
                        </li>
                        <li class="d-flex align-items-center mb-4">
                           <div
                              style="min-width: 35px; height: 35px; background: #fbf6ec; border-radius: 5px; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                              <i class="fa-solid fa-triangle-exclamation" style="color: #111; font-size: 14px;"></i>
                           </div>
                           <span style="font-size: 14px; font-weight: 500; color: #333;">Identification of safety
                              hazards</span>
                        </li>
                     </ul>
                  </div>
                  <div class="col-md-6">
                     <ul class="list-unstyled" style="line-height: 2.2;">
                        <li class="d-flex align-items-center mb-4">
                           <div
                              style="min-width: 35px; height: 35px; background: #fbf6ec; border-radius: 5px; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                              <i class="fa-solid fa-users" style="color: #111; font-size: 14px;"></i>
                           </div>
                           <span style="font-size: 14px; font-weight: 500; color: #333;">Parking lot and parkade
                              patrols</span>
                        </li>
                        <li class="d-flex align-items-center mb-4">
                           <div
                              style="min-width: 35px; height: 35px; background: #fbf6ec; border-radius: 5px; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                              <i class="fa-solid fa-key" style="color: #111; font-size: 14px;"></i>
                           </div>
                           <span style="font-size: 14px; font-weight: 500; color: #333;">Lock & unlock services</span>
                        </li>
                        <li class="d-flex align-items-center mb-4">
                           <div
                              style="min-width: 35px; height: 35px; background: #fbf6ec; border-radius: 5px; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                              <i class="fa-solid fa-clipboard-list" style="color: #111; font-size: 14px;"></i>
                           </div>
                           <span style="font-size: 14px; font-weight: 500; color: #333;">Incident reporting with
                              photos</span>
                        </li>
                        <li class="d-flex align-items-center mb-4">
                           <div
                              style="min-width: 35px; height: 35px; background: #fbf6ec; border-radius: 5px; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                              <i class="fa-solid fa-location-dot" style="color: #111; font-size: 14px;"></i>
                           </div>
                           <span style="font-size: 14px; font-weight: 500; color: #333;">GPS tracked patrol routes</span>
                        </li>
                        <li class="d-flex align-items-center mb-4">
                           <div
                              style="min-width: 35px; height: 35px; background: #fbf6ec; border-radius: 5px; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                              <i class="fa-regular fa-clock" style="color: #111; font-size: 14px;"></i>
                           </div>
                           <span style="font-size: 14px; font-weight: 500; color: #333;">Flexible day and night
                              coverage</span>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-lg-5">
               <div style="position: relative; overflow: hidden; display: flex; min-height: 350px;">
                  <img src="{{ asset('frontend/images/4.jpeg') }}" alt="Security Services"
                     style="position: absolute; left: 0; top: 0; width: 100%; height: 100%; object-fit: cover; z-index: 1;">

                  <div
                     style="position: absolute; right: 0; top: 0; bottom: 0; width: 60%; background: #111; clip-path: polygon(15% 0, 100% 0, 100% 100%, 0 100%); z-index: 2; display: flex; flex-direction: column; justify-content: center; padding: 40px 30px 40px 60px;">
                     <ul class="list-unstyled"
                        style="font-weight: 700; font-size: 15px; letter-spacing: 1px; color: #fff; line-height: 2;">
                        <li>MORE<br>PATROLS</li>
                        <li>SAFER<br>PROPERTIES</li>
                        <li>STRONGER<br>COMMUNITIES</li>
                     </ul>
                     <ul class="list-unstyled mt-4"
                        style="font-size: 11px; color: #a0aab2; line-height: 1.8; font-weight: 500; letter-spacing: 0.5px;">
                        <li>CALGARY</li>
                        <li>EDMONTON</li>
                        <li>MEDICINE HAT</li>
                        <li>SASKATOON</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="ideal-for-section" style="padding: 60px 0; background: #fff;">
      <div class="container">
         <h2 style="font-size: 26px; font-weight: 800; color: #111; margin-bottom: 30px; text-transform: uppercase;">IDEAL
            FOR</h2>

         <div
            style="display: grid; grid-template-columns: repeat(auto-fit, minmax(100px, 1fr)); gap: 15px; text-align: center;">
            <div style="background: #f8f9fa; padding: 25px 10px; border-radius: 8px;">
               <i class="fa-solid fa-person-digging" style="font-size: 28px; color: #111; margin-bottom: 15px;"></i>
               <h6 style="font-size: 12px; font-weight: 700; color: #333; margin: 0; line-height: 1.4;">
                  Construction<br>Sites</h6>
            </div>
            <div style="background: #f8f9fa; padding: 25px 10px; border-radius: 8px;">
               <i class="fa-regular fa-building" style="font-size: 28px; color: #111; margin-bottom: 15px;"></i>
               <h6 style="font-size: 12px; font-weight: 700; color: #333; margin: 0; line-height: 1.4;">
                  Commercial<br>Properties</h6>
            </div>
            <div style="background: #f8f9fa; padding: 25px 10px; border-radius: 8px;">
               <i class="fa-solid fa-city" style="font-size: 28px; color: #111; margin-bottom: 15px;"></i>
               <h6 style="font-size: 12px; font-weight: 700; color: #333; margin: 0; line-height: 1.4;">Condo<br>Complexes
               </h6>
            </div>
            <div style="background: #f8f9fa; padding: 25px 10px; border-radius: 8px;">
               <i class="fa-solid fa-store" style="font-size: 28px; color: #111; margin-bottom: 15px;"></i>
               <h6 style="font-size: 12px; font-weight: 700; color: #333; margin: 0; line-height: 1.4;">Retail<br>Plazas
               </h6>
            </div>
            <div style="background: #f8f9fa; padding: 25px 10px; border-radius: 8px;">
               <i class="fa-solid fa-square-parking" style="font-size: 28px; color: #111; margin-bottom: 15px;"></i>
               <h6 style="font-size: 12px; font-weight: 700; color: #333; margin: 0; line-height: 1.4;">Parking Lots<br>&
                  Parkades</h6>
            </div>
            <div style="background: #f8f9fa; padding: 25px 10px; border-radius: 8px;">
               <i class="fa-solid fa-warehouse" style="font-size: 28px; color: #111; margin-bottom: 15px;"></i>
               <h6 style="font-size: 12px; font-weight: 700; color: #333; margin: 0; line-height: 1.4;">Warehouses</h6>
            </div>
            <div style="background: #f8f9fa; padding: 25px 10px; border-radius: 8px;">
               <i class="fa-solid fa-industry" style="font-size: 28px; color: #111; margin-bottom: 15px;"></i>
               <h6 style="font-size: 12px; font-weight: 700; color: #333; margin: 0; line-height: 1.4;">Industrial<br>Sites
               </h6>
            </div>
            <div style="background: #f8f9fa; padding: 25px 10px; border-radius: 8px;">
               <i class="fa-solid fa-house-chimney" style="font-size: 28px; color: #111; margin-bottom: 15px;"></i>
               <h6 style="font-size: 12px; font-weight: 700; color: #333; margin: 0; line-height: 1.4;">
                  Residential<br>Communities</h6>
            </div>
            <div style="background: #f8f9fa; padding: 25px 10px; border-radius: 8px;">
               <i class="fa-regular fa-calendar-days" style="font-size: 28px; color: #111; margin-bottom: 15px;"></i>
               <h6 style="font-size: 12px; font-weight: 700; color: #333; margin: 0; line-height: 1.4;">Event<br>Venues
               </h6>
            </div>
            <div style="background: #f8f9fa; padding: 25px 10px; border-radius: 8px;">
               <i class="fa-solid fa-location-dot" style="font-size: 28px; color: #111; margin-bottom: 15px;"></i>
               <h6 style="font-size: 12px; font-weight: 700; color: #333; margin: 0; line-height: 1.4;">
                  Vacant<br>Properties</h6>
            </div>
         </div>
      </div>
   </section>

@endsection