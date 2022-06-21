@extends('layouts.user')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero">

        <div class="container">
          <div class="row">
            <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
              <div data-aos="zoom-out">
                <h1><span>{{$edukasi->judul}}</span></h1>
                {{-- <h2>We are team of talanted designers making websites with Bootstrap</h2> --}}
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

    <!-- ======= Details Section ======= -->
    <section id="about" class="about">
        <div class="container">
  
          <div class="row content">
            <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right">
              <a href="{{ $edukasi -> video}}" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
            </div>
            {{-- <div class="col-md-4" data-aos="fade-right">
                <iframe width="auto" height="auto" src="https://www.youtube.com/embed/{{ $edukasi -> video}}" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div> --}}
            <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
            {{-- <div class="col-md-8 pt-4" data-aos="fade-up"> --}}
              {{-- <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3> --}}
              {{-- <p class="font-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="icofont-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="icofont-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="icofont-check"></i> Iure at voluptas aspernatur dignissimos doloribus repudiandae.</li>
                <li><i class="icofont-check"></i> Est ipsa assumenda id facilis nesciunt placeat sed doloribus praesentium.</li>
              </ul> --}}
              <p>
                {!! $edukasi -> materi !!}
              </p>
            </div>
            <embed type="application/pdf" src="/images/{{ $edukasi -> gambar}}" width="600" height="600"></embed>

          </div>
        </div>
    </section>       
    @endsection
