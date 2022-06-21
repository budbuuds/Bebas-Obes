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
                <h1>Buat Daftar Aktifitas Fisik Kamu</h1>
                {{-- <h2>We are team of talanted designers making websites with Bootstrap</h2> --}}
                <div class="text-center text-lg-left">
                  {{-- <a href="#about" class="btn-get-started scrollto">Mulai</a> --}}
                  <button type="button" class="btn-get-started scrollto" data-toggle="modal" data-target="#exampleModal">Mulai</button>
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
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="table-danger" rowspan="2">No.</th>
                                <th class="table-primary" rowspan="2">Aksi</th>
                                <th class="table-primary" rowspan="2">Name</th>
                                <th class="table-primary" rowspan="2">Tanggal</th>
                                <th class="table-primary" colspan="6"><center>Jenis dan durasi</center></th>
                              </tr>
                              <tr>
                                <th class="table-success">Jenis</th>
                                <th class="table-success">Durasi</th>
                                <th class="table-success">Jenis</th>
                                <th class="table-success">Durasi</th>
                                <th class="table-success">Jenis</th>
                                <th class="table-success">Durasi</th>
                              </tr>
                        </thead>
                        {{-- <tfoot>
                            <tr>
                                <th>No.</th>
                                <th>Aksi</th>
                                <th>Nama</th>
                                <th>Tanggal</th>
                                <th>Jenis</th>
                                <th>Siang</th>
                                <th>Malam</th>
                                <th>Selingan</th>
                            </tr>
                        </tfoot> --}}
                        <tbody>
                            @foreach ($fisik as $data)
                                <tr>
                                    <td class="table-danger"> {{ $no++ }} </td>
                                    <td>
                                      <a href="/fisik/{{$data->id}}/edit" class="btn btn-warning btn-sm" role="button">Update</a>
                                      {{-- <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModal1">Update</button> --}}
                                    </td>
                                    <td> {{ $data -> users -> name}} </td>
                                    <td> {{ $data -> tanggal}} </td>
                                    <td class="table-warning"> {{ $data -> jenis1}}</td>
                                    <td class="table-warning"> {{ $data -> durasi1}} </td>
                                    <td class="table-warning"> {{ $data -> jenis2}}</td>
                                    <td class="table-warning"> {{ $data -> durasi2}} </td>
                                    <td class="table-warning"> {{ $data -> jenis3}}</td>
                                    <td class="table-warning"> {{ $data -> durasi3}} </td>
                                </tr>
                            @endforeach 
                                </tbody>
                            </table>
                        </div>
                    </div>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Input kegiatan fisikmu</h5>
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
                        <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="exampleFormControlTextarea1">Jenis</label>
                              <input name="jenis1" type="text" class="form-control" id="inputEmail4" placeholder="Jenis kegiatan pertama">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputPassword4">Durasi</label>
                              <input name="durasi1" type="text" class="form-control" id="inputPassword4" placeholder="contoh = 30 menit">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="exampleFormControlTextarea1">Jenis</label>
                              <input name="jenis2" type="text" class="form-control" id="inputEmail4" placeholder="Jenis kegiatan kedua">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputPassword4">Durasi</label>
                              <input name="durasi2" type="text" class="form-control" id="inputPassword4" placeholder="contoh = 30 menit">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="exampleFormControlTextarea1">Jenis</label>
                              <input name="jenis3" type="text" class="form-control" id="inputEmail4" placeholder="Jenis kegiatan ketiga">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputPassword4">Durasi</label>
                              <input name="durasi3" type="text" class="form-control" id="inputPassword4" placeholder="contoh = 30 menit">
                            </div>
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
      @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])


@endsection
