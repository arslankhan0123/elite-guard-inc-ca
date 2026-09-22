@extends('layouts.frontend.main')
@section('title', 'Contact Us')

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
                          <li>Contact</li>
                      </ul>
                      <h2 class="title rts-text-anime">Contact Us</h2>
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
                  <p><a href="https://maps.app.goo.gl/HchLa4W9ooqHE58w8?g_st=iwb" target="_blank" style="color: inherit; text-decoration: none;">3961 52 Ave NE #2104, Calgary, AB T3J 0J7</a></p>
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
