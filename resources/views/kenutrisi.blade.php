@extends('layouts.user')

@section('content')
@php
    $no =1;
    // foreach ($identifikasi as $data => $tinggi) {
    //     $berat_ideal = ( $data-100)-(( $data-100)*(15/100));
    //     $berat_ideal = $tinggi;
    // }
@endphp
    <!-- ======= Hero Section ======= -->
    <section id="hero">

        <div class="container">
          <div class="row">
            <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
              <div data-aos="zoom-out">
                <h1>Buat Daftar Nutrisi Mu</h1>
                {{-- <h2>We are team of talanted designers making websites with Bootstrap</h2> --}}
                <div class="text-center text-lg-left">
                  {{-- <a href="#about" class="btn-get-started scrollto">Mulai</a> --}}
                  <form method="get" action="/nutrisi/{{ Auth::user()->id }}/view">
                    <button type="submit" class="btn-get-started scrollto">Lanjutkan</button>
                  </form>
                  {{-- <button type="button" class="btn-get-started scrollto" data-toggle="modal" data-target="#exampleModal">Mulai</button> --}}
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

@endsection
