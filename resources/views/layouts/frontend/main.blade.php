<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>@yield('title', 'Home')</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <meta name="robots" content="noindex, nofollow">

  <!-- Favicons -->
  <link href="{{asset('frontend/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('frontend/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('frontend/assets/css/bootstrap.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="{{asset('frontend/assets/css/aos.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/css/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/css/glightbox.min.css')}}" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

  <!-- Main CSS File -->
  <link href="{{asset('frontend/assets/css/main.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Clarity
  * Template URL: https://bootstrapmade.com/clarity-bootstrap-agency-template/
  * Updated: Sep 13 2025 with Bootstrap v5.3.8
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  @include('layouts.frontend.header')

  <main class="main">

    @yield('content')

  </main>

  @include('layouts.frontend.footer')

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- jQuery and SweetAlert2 -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- Vendor JS Files -->
  <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
  <script src="{{asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('frontend/assets/js/validate.js')}}"></script>
  <!-- <script src="assets/js/aos/aos.js"></script> -->
  <!-- <script src="https://bootstrapmade.com/content/vendors/php-email-form/validate.js"></script> -->
  <script src="https://bootstrapmade.com/content/vendors/aos/aos.js"></script>
  <script src="{{asset('frontend/assets/js/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('frontend/assets/js/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{asset('frontend/assets/js/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('frontend/assets/js/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('frontend/assets/js/glightbox.min.js')}}"></script>

  <!-- Main JS File -->
  <script src="{{asset('frontend/assets/js/main.js')}}"></script>

  <script type="module"
    src="https://static.cloudflareinsights.com/beacon.min.js/v3d52b47920f24c319d37e2661827c42b1787588026925"
    integrity="sha512-d9sL6GJLXn6fInD1+TVXhTcQOsmxeHfmHAvwGDIxp5TO+uo1fiWW7mHomMj4MLRlCsJDTqXzWLHJFFlPCEIj/A=="
    data-cf-beacon='{"version":"2024.11.0","token":"68c5ca450bae485a842ff76066d69420"}'
    crossorigin="anonymous"></script>
</body>

</html>