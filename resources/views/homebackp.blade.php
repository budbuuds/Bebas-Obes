@extends('layouts.user')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero">

        <div class="container">
          <div class="row">
            <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
              <div data-aos="zoom-out">
                <h1>Build Your Landing Page With <span>Bootstlander</span></h1>
                <h2>We are team of talanted designers making websites with Bootstrap</h2>
                <div class="text-center text-lg-left">
                  <a href="#features" class="btn-get-started scrollto">Get Started</a>
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
    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
        <div class="container">
  
          <div class="section-title" data-aos="fade-up">
            <h2>Edukasi</h2>
            <p>Daftar Edukasi</p>
          </div>
  
          <div class="row" data-aos="fade-left">
            @foreach ($edukasi as $data)  
            <div class="col-lg-3 col-md-4">
              <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
                <i class="ri-store-line" style="color: #ffbb2c;"></i>
                <h3><a href="/edukasi/{{$data->id}}/view">{{ $data -> judul}}</a></h3>
              </div>
            </div>
            @endforeach
          </div>  
        </div>
      </section><!-- End Features Section -->
@endsection
