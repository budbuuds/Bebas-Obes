@extends('layouts.user')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero">

        <div class="container">
          <div class="row">
            <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
              <div data-aos="zoom-out">
                <h1>Tingkatkan kualitas gizi mu dengan aplikasi web <span>Bebas Obes</span> Cegah Obesitas</h1>
                {{-- <h2>   websites with Bootstrap</h2> --}}
                <div class="text-center text-lg-left">
                  <a href="#about" class="btn-get-started scrollto">Get Started</a>
                </div>
              </div>
            </div>
            <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
              <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
            </div>
          </div>
        </div>
    
        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
          <defs>
            <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
          </defs>
          <g class="wave1">
            <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
          </g>
          <g class="wave2">
            <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
          </g>
          <g class="wave3">
            <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
          </g>
        </svg>
    
      </section><!-- End Hero --> 
      <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
            <h3>Dengan aplikasi ini, kamu dapat :</h3>
            {{-- <p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima temporibus laudantium. Soluta voluptate sed facere corporis dolores excepturi. Libero laboriosam sint et id nulla tenetur. Suscipit aut voluptate.</p> --}}

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Mengetahui kondisi tubuh kamu</a></h4>
              {{-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p> --}}
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Mendapatkan edukasi seputar nutrisi dan aktifitas fisik</a></h4>
              {{-- <p class="description">At? vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p> --}}
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">Menulis jadwal kegiatan dan juga pola makan kamu</a></h4>
              {{-- <p class="description">Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut eligendi omnis</p> --}}
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
        <div class="container">
  
          <div class="section-title" data-aos="fade-up">
            <h2>Edukasi</h2>
            <p>Daftar Edukasi</p>
          </div>
  
          <div class="row" data-aos="fade-left">
              
            <div class="col-lg-3 col-md-4">
              <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
                <i class="ri-store-line" style="color: #ffbb2c;"></i>
                <h3><a href="/edukasi/nutrisi">Nutrisi</a></h3>
              </div>
            </div>

            <div class="col-lg-3 col-md-4">
              <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
                <i class="ri-store-line" style="color: #ffbb2c;"></i>
                <h3><a href="/edukasi/fisik">Aktifitas Fisik</a></h3>
              </div>
            </div>
            
          </div>  
        </div>
      </section><!-- End Features Section -->
      <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="owl-carousel testimonials-carousel" data-aos="zoom-in">

          <div class="testimonial-item">
            <img src="{{asset('frontend/assets/img/testimonials/1.png')}}" class="testimonial-img" alt="">
            <h3>Ns.Deswita,.M.Kep.,Sp.Kep.An</h3>
            <h4>Founder</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Mahasiswa Program Doktoral Kesehatan Masyarakat Fakultas Kedokteran Universitas Andalas
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Tujuan aplikasi ini untuk mendeteksi, edukasi mencegah obesitas pada  remaja
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          {{-- <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div> --}}

          {{-- <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div> --}}

          {{-- <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div> --}}

          {{-- <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div> --}}

        </div>

      </div>
    </section><!-- End Testimonials Section -->
      <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Chat</h2>
          <p>Hubungi untuk konsultasi</p>
        </div>

        <div class="row" data-aos="fade-left">

          {{-- <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="member" data-aos="zoom-in" data-aos-delay="300">
              <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div> --}}
          @foreach ($chat as $data)
          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <a href="https://wa.me/{{ $data -> telp}}?text=halooo, saya ingin konsultasi">
            <div class="member" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>{{ $data -> name}}</h4>
                <span>{{ $data -> daerah}}</span>
                <div class="social">
                  <a href="https://wa.me/{{ $data -> telp}}?text=halooo, saya ingin konsultasi"><i class="icofont-whatsapp"></i></a>
                  {{-- <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a> --}}
                </div>
              </div>
            </div>
            </a>
          </div>
          @endforeach

        </div>

      </div>
    </section><!-- End Team Section -->
    

@endsection
