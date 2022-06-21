<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Bebas Obes</title>
    <meta content="Ayo CeTas - Cegah Obesitas" name="Tingkatkan kualitas gizi mu dengan aplikasi Ayo CeTas Cegah Obesitas">
    <meta content="" name="obesitas, gizi, kesehatan, fisik, nutrisi">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Favicons -->
    <link href="{{ url('frontend/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ url('frontend/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ url('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/assets/vendor/aos/aos.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ url('frontend/assets/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
      <div class="container d-flex align-items-center">
  
        <div class="logo mr-auto">
          <h1 class="text-light"><a href="index.html"><span>Ayo CeTas - Cegah Obesitas</span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>
  
        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li class="active"><a href="/home">Home</a></li>
            <li><a href="/identifikasi/{{ Auth::user()->id }}/view">Cek Gizi</a></li>
            <li><a href="/nutrisi/{{ Auth::user()->id }}/view">Nutrisi</a></li>
            <li><a href="/fisik/{{ Auth::user()->id }}/view">Aktifitas Fisik</a></li>
            <li><a href="/home#features">Edukasi</a></li>
            <li><a href="/home#team">Chat</a></li>
            <li><a href="/quis">Kuis</a></li>
            {{-- <li><a href="/evaluasi">Evaluasi</a></li> --}}
            {{-- <li><a href="#pricing">Pricing</a></li> --}}
            <li class="drop-down"><a href="">{{ Auth::user()->name }}</a>
              <ul>
                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
                {{-- <li><a href="#">Update</a></li> --}}
              </ul>
            </li>
            {{-- <li><a href="#contact">Contact</a></li> --}}
  
          </ul>
        </nav><!-- .nav-menu -->
  
      </div>
    </header><!-- End Header -->



  <main id="main">
      @yield('content')
  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
        <div class="copyright">
            &copy; <strong><span>NeoTelemetri</span></strong>
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/ -->
            {{-- Createrd by <a href="https://bootstrapmade.com/">BootstrapMade</a> --}}
        </div>
    </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
  <script src="{{ url('frontend/assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ url('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ url('frontend/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ url('frontend/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ url('frontend/assets/vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ url('frontend/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ url('frontend/assets/vendor/counterup/counterup.min.js') }}"></script>
  <script src="{{ url('frontend/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ url('frontend/assets/vendor/aos/aos.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ url('frontend/assets/js/main.js') }}"></script>
  @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

</body>

</html>