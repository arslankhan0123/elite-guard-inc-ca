@extends('layouts.frontend.main')
@section('title', 'Contact Us')

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
    }

    .hero-title-main {
        color: #ffffff;
        font-size: 55px;
        font-weight: 800;
        margin: 0;
        line-height: 1.1;
        position: relative;
        z-index: 2;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
    }

    .hero-title-main span {
        color: #d4af37;
    }

    .hero-divider {
        width: 60px;
        height: 3px;
        background-color: #d4af37;
        margin: 25px 0;
        position: relative;
        z-index: 2;
    }

    .hero-desc {
        color: #ffffff;
        font-size: 16px;
        line-height: 1.6;
        max-width: 100%;
        margin-bottom: 35px;
        position: relative;
        z-index: 2;
        text-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
    }

    .hero-features {
        display: flex;
        align-items: center;
        gap: 20px;
        margin-top: 30px;
        position: relative;
        z-index: 2;
        flex-wrap: wrap;
    }

    .hero-feature-item {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .hero-feature-icon {
        color: #111;
        background-color: #d4af37;
        font-size: 20px;
        width: 45px;
        height: 45px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .hero-feature-text {
        display: flex;
        flex-direction: column;
    }

    .hero-feature-text .ft-title {
        color: #ffffff;
        font-size: 14px;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: uppercase;
        margin-bottom: 2px;
    }

    .hero-feature-text .ft-desc {
        color: rgba(255, 255, 255, 0.8);
        font-size: 12px;
    }

    .hero-feature-divider {
        width: 1px;
        height: 40px;
        background-color: rgba(255, 255, 255, 0.15);
    }

    @media (max-width: 768px) {
        .hero-title-main {
            font-size: 35px;
        }
        .rts__breadcrumb__content {
            padding: 60px 30px !important;
        }
        .hero-feature-divider {
            display: none;
        }
    }
  </style>

  <section class="rts__breadcrumb__area">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="rts__breadcrumb__content" style="background-image: url('{{ asset('frontend/images/29.jpg') }}');">
                      
                      <div class="hero-top-title" data-aos="fade-up">CONTACT US</div>
                      
                      <h1 class="hero-title-main rts-text-anime">
                          WE'RE HERE TO HELP
                          <span>GET IN TOUCH TODAY</span>
                      </h1>
                      
                      <div class="hero-divider" data-aos="fade-up" data-aos-delay="50"></div>
                      
                      <p class="hero-desc" data-aos="fade-up" data-aos-delay="100">
                          Reach out for reliable security solutions tailored to your needs in Alberta. We are here to assist you with any inquiries.
                      </p>

                      <div class="hero-features" data-aos="fade-up" data-aos-delay="200">
                          <div class="hero-feature-item">
                              <div class="hero-feature-icon"><i class="fa-solid fa-phone-volume"></i></div>
                              <div class="hero-feature-text">
                                  <span class="ft-title">24/7 SUPPORT</span>
                                  <span class="ft-desc">Always Available</span>
                              </div>
                          </div>
                          <div class="hero-feature-divider d-none d-md-block"></div>
                          <div class="hero-feature-item">
                              <div class="hero-feature-icon"><i class="fa-solid fa-location-dot"></i></div>
                              <div class="hero-feature-text">
                                  <span class="ft-title">LOCAL</span>
                                  <span class="ft-desc">Calgary & Alberta</span>
                              </div>
                          </div>
                          <div class="hero-feature-divider d-none d-md-block"></div>
                          <div class="hero-feature-item">
                              <div class="hero-feature-icon"><i class="fa-solid fa-comments"></i></div>
                              <div class="hero-feature-text">
                                  <span class="ft-title">QUICK</span>
                                  <span class="ft-desc">Fast Response</span>
                              </div>
                          </div>
                          <div class="hero-feature-divider d-none d-md-block"></div>
                          <div class="hero-feature-item">
                              <div class="hero-feature-icon"><i class="fa-solid fa-handshake-angle"></i></div>
                              <div class="hero-feature-text">
                                  <span class="ft-title">HELPFUL</span>
                                  <span class="ft-desc">Expert Advice</span>
                              </div>
                          </div>
                      </div>

                  </div>
              </div>
          </div>
      </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="contact section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Contact</h2>
      <p>Reach out for reliable security solutions tailored to your needs in Alberta. We are here to assist you with any
        inquiries.</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row align-items-center">
        <div class="col-lg-5" data-aos="fade-right" data-aos-delay="200">
          <div class="contact-form-card">
            <div class="form-header">
              <div class="header-icon">
                <i class="bi bi-chat-dots-fill"></i>
              </div>
              <h3>Let's Start a Conversation</h3>
              <p>Contact us today to learn more about our security services and how we can help protect your property,
                people, and assets.</p>
            </div>

            <form id="contactForm" action="{{ route('contact.store') }}" method="post" class="php-email-form">
              @csrf
              <div class="row">
                <div class="col-md-6 mb-3">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>
                <div class="col-md-6 mb-3">
                  <input type="email" class="form-control" name="email" placeholder="Email Address" required="">
                </div>
              </div>

              <div class="mb-3">
                <input type="text" class="form-control" name="subject" placeholder="What's this about?" required="">
              </div>

              <div class="mb-4">
                <textarea class="form-control" name="message" rows="4" placeholder="Tell us more about your project..."
                  required=""></textarea>
              </div>

              <button type="submit" class="submit-btn">
                <span>Send Message</span>
                <i class="bi bi-send-fill"></i>
              </button>
            </form>
          </div>
        </div>

        <div class="col-lg-7" data-aos="fade-left" data-aos-delay="200">
          <div class="contact-info-area">
            <div class="info-header">
              <h3>Ready to Transform Your Ideas?</h3>
              <p>Contact us today to learn more about our security services and how we can help protect your property,
                people, and assets.</p>
            </div>

            <div class="contact-methods">
              <div class="method-card" data-aos="zoom-in" data-aos-delay="250">
                <div class="card-icon">
                  <i class="bi bi-envelope-at"></i>
                </div>
                <div class="card-content">
                  <h5>Email Us</h5>
                  <p><a href="mailto:info@eliteguardinc.ca">info@eliteguardinc.ca</a></p>
                  <span class="response-time">Response in 2-4 hours</span>
                </div>
              </div>

              <div class="method-card" data-aos="zoom-in" data-aos-delay="300">
                <div class="card-icon">
                  <i class="bi bi-telephone"></i>
                </div>
                <div class="card-content">
                  <h5>Call Us</h5>
                  <p style="margin-bottom: 5px;">403.830.7772 (Office)<br>403.427.7773 (24/7 Security)</p>
                  <span class="response-time">Available 24/7</span>
                </div>
              </div>

              <div class="method-card" data-aos="zoom-in" data-aos-delay="350">
                <div class="card-icon">
                  <i class="bi bi-geo-alt"></i>
                </div>
                <div class="card-content">
                  <h5>Visit Our Office</h5>
                  <p><a href="https://maps.app.goo.gl/HchLa4W9ooqHE58w8?g_st=iwb" target="_blank"
                      style="color: inherit; text-decoration: none;">3961 52 Ave NE #2104, Calgary, AB T3J 0J7</a></p>
                  <span class="response-time">Open Monday - Friday</span>
                </div>
              </div>
            </div>

            <div class="additional-info" data-aos="fade-up" data-aos-delay="400">
              <div class="info-stats">
                <div class="stat-item">
                  <div class="stat-number">24h</div>
                  <div class="stat-label">Average Response</div>
                </div>
                <div class="stat-item">
                  <div class="stat-number">98%</div>
                  <div class="stat-label">Client Satisfaction</div>
                </div>
                <div class="stat-item">
                  <div class="stat-number">150+</div>
                  <div class="stat-label">Projects Delivered</div>
                </div>
              </div>

              <div class="social-connect">
                <h6>Connect With Us</h6>
                <div class="social-links">
                  <a href="#" class="social-link"><i class="bi bi-linkedin"></i></a>
                  <a href="#" class="social-link"><i class="bi bi-twitter-x"></i></a>
                  <a href="#" class="social-link"><i class="bi bi-github"></i></a>
                  <a href="#" class="social-link"><i class="bi bi-discord"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- /Contact Section -->

@endsection

@push('scripts')
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      $('#contactForm').on('submit', function (e) {
        e.preventDefault();
        e.stopImmediatePropagation();

        let form = $(this);
        let submitBtn = form.find('.submit-btn');
        let submitBtnText = submitBtn.find('span');
        let submitIcon = submitBtn.find('i');
        let formData = form.serialize();

        submitBtn.prop('disabled', true);
        submitBtnText.text('Sending...');
        if (submitIcon.length) {
          submitIcon.attr('class', 'fa-solid fa-spinner fa-spin ms-2');
        }

        $.ajax({
          url: form.attr('action'),
          type: 'POST',
          data: formData,
          success: function (response) {
            Swal.fire({
              icon: 'success',
              title: 'Success!',
              text: response.message,
              confirmButtonColor: '#34A853'
            });
            form[0].reset();
            submitBtn.prop('disabled', false);
            submitBtnText.text('Send Message');
            if (submitIcon.length) {
              submitIcon.attr('class', 'bi bi-send-fill');
            }
          },
          error: function (xhr) {
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
            submitBtn.prop('disabled', false);
            submitBtnText.text('Send Message');
            if (submitIcon.length) {
              submitIcon.attr('class', 'bi bi-send-fill');
            }
          }
        });
      });
    });
  </script>
@endpush