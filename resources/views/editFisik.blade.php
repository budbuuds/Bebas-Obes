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
                <h1>Update Daftar Aktivitas Fisik Mu</h1>
                {{-- <h2>We are team of talanted designers making websites with Bootstrap</h2> --}}
                <div class="text-center text-lg-left">
                  {{-- <a href="#about" class="btn-get-started scrollto">Mulai</a> --}}
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
    <!-- ======= Features Section ======= -->
    <section id="about" class="features">
        <div class="container">
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row">
                      <div class="col-12">
                        {{-- <div class="card"> --}}
                          {{-- <div class="card-header">
                            <button type="button" class="btn btn-success btn-icon-text" data-toggle="modal" data-target="#exampleModal">
                                <i class="mdi mdi-upload btn-icon-prepend"></i> Tambah 
                            </button>
                          </div> --}}
                              <!-- /.card-header -->
                              <form action="/fisik/{{$fisik->id}}/update" method="POST">
                                {{csrf_field()}}
                                <div>
                                    <label for="exampleFormControlTextarea1"></label>
                                    <input type="hidden" name="users_id" value="{{ Auth::user()->id }}" class="form-control" type="text" placeholder="{{ Auth::user()->name }}">
                                </div>
                               <div class="form-group">
                                   <label for="exampleFormControlSelect1">Tanggal</label>
                                   <input name="tanggal" class="form-control" type="date" required value="{{$fisik->tanggal}}">
                               </div>
                               <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label for="exampleFormControlTextarea1">Jenis</label>
                                  <input name="jenis1" type="text" class="form-control" id="inputEmail4" placeholder="Jenis kegiatan pertama" value="{{$fisik->jenis1}}">
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="inputPassword4">Durasi</label>
                                  <input name="durasi1" type="text" class="form-control" id="inputPassword4" placeholder="contoh = 30 menit" value="{{$fisik->durasi1}}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label for="exampleFormControlTextarea1">Jenis</label>
                                  <input name="jenis2" type="text" class="form-control" id="inputEmail4" placeholder="Jenis kegiatan kedua" value="{{$fisik->jenis2}}">
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="inputPassword4">Durasi</label>
                                  <input name="durasi2" type="text" class="form-control" id="inputPassword4" placeholder="contoh = 30 menit" value="{{$fisik->durasi2}}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label for="exampleFormControlTextarea1">Jenis</label>
                                  <input name="jenis3" type="text" class="form-control" id="inputEmail4" placeholder="Jenis kegiatan ketiga" value="{{$fisik->jenis3}}">
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="inputPassword4">Durasi</label>
                                  <input name="durasi3" type="text" class="form-control" id="inputPassword4" placeholder="contoh = 30 menit" value="{{$fisik->durasi3}}">
                                </div>
                            </div>
                            
                            </div>
                                <div class="modal-footer">
                                    <input class="btn btn-warning" type="submit" value="Update">
                             </form>
                            <!-- /.card-body -->
                        {{-- </div> --}}
                        <!-- /.card -->
                    <!-- /.col -->
                </div>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Daftar Asupan Nutrisi Mu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">
                    <form action="/fisik/tambah" method="POST">
                        {{csrf_field()}}
                        <div>
                            <label for="exampleFormControlTextarea1"></label>
                            <input type="hidden" name="users_id" value="{{ Auth::user()->id }}" class="form-control" type="text" placeholder="{{ Auth::user()->name }}">
                        </div>
                            <div>
                                <label for="exampleFormControlTextarea1">Tanggal</label>
                                <input name="tanggal" class="form-control" type="date">
                            </div>
                                <div>
                                    <label for="exampleFormControlTextarea1">Menu Pagi</label>
                                    {{-- <input name="pagi" class="form-control" type="text" placeholder="Isi menu di sini"> --}}
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1">karbohidrat pagi</label>
                                    <input name="karbohidrat1" class="form-control" type="text" placeholder="Isi menu di sini">
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1">protein pagi</label>
                                    <input name="protein1" class="form-control" type="text" placeholder="Isi menu di sini">
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1">lemak pagi</label>
                                    <input name="lemak1" class="form-control" type="text" placeholder="Isi menu di sini">
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1">vitamin dan mineral pagi</label>
                                    <input name="vitamin1" class="form-control" type="text" placeholder="Isi menu di sini">
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1">serat pagi</label>
                                    <input name="serat1" class="form-control" type="text" placeholder="Isi menu di sini">
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1">minuman pagi</label>
                                    <input name="minuman1" class="form-control" type="text" placeholder="Isi menu di sini">
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1">porsi pagi</label>
                                    <input name="porsi1" class="form-control" type="text" placeholder="Isi porsi di sini">
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1">selingan pagi</label>
                                    <input name="selingan1" class="form-control" type="text" placeholder="Isi menu di sini">
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1">Menu siang</label>
                                    {{-- <input name="siang" class="form-control" type="text" placeholder="Isi menu di sini"> --}}
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1">karbohidrat siang</label>
                                    <input name="karbohidrat2" class="form-control" type="text" placeholder="Isi menu di sini">
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1">protein siang</label>
                                    <input name="protein2" class="form-control" type="text" placeholder="Isi menu di sini">
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1">lemak siang</label>
                                    <input name="lemak2" class="form-control" type="text" placeholder="Isi menu di sini">
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1">vitamin dan mineral siang</label>
                                    <input name="vitamin2" class="form-control" type="text" placeholder="Isi menu di sini">
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1">serat siang</label>
                                    <input name="serat2" class="form-control" type="text" placeholder="Isi menu di sini">
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1">minuman siang</label>
                                    <input name="minuman2" class="form-control" type="text" placeholder="Isi menu di sini">
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1">porsi siang</label>
                                    <input name="porsi2" class="form-control" type="text" placeholder="Isi porsi di sini">
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1">selingan sore</label>
                                    <input name="selingan2" class="form-control" type="text" placeholder="Isi menu di sini">
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1">Menu malam</label>
                                    {{-- <input name="malam" class="form-control" type="text" placeholder="Isi menu di sini"> --}}
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1">karbohidrat malam</label>
                                    <input name="karbohidrat3" class="form-control" type="text" placeholder="Isi menu di sini">
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1">protein malam</label>
                                    <input name="protein3" class="form-control" type="text" placeholder="Isi menu di sini">
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1">lemak malam</label>
                                    <input name="lemak3" class="form-control" type="text" placeholder="Isi menu di sini">
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1">vitamin dan mineral malam</label>
                                    <input name="vitamin3" class="form-control" type="text" placeholder="Isi menu di sini">
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1">serat malam</label>
                                    <input name="serat3" class="form-control" type="text" placeholder="Isi menu di sini">
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1">minuman malam</label>
                                    <input name="minuman3" class="form-control" type="text" placeholder="Isi menu di sini">
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1">porsi malam</label>
                                    <input name="porsi3" class="form-control" type="text" placeholder="Isi porsi di sini">
                                </div>
                                       <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <input class="btn btn-primary" type="submit" value="Submit">
                            </div>    
                    </form>
                </div>
            </div>
        </div>
    </div>

              </div>
      </section><!-- End Features Section -->
@endsection
