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
                <h1>Buat Daftar Asupan Nutrisi Mu</h1>
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
                            <th class="table-danger" rowspan="2">Aksi</th>
                            <th class="table-danger" rowspan="2">Tanggal</th>
                            <th class="table-primary" colspan="7"><center>Pagi</center></th>
                            <th class="table-danger" rowspan="2">Selingan</th>
                            <th class="table-primary" colspan="7"></center>Siang<center></th>
                            <th class="table-danger" rowspan="2">Selingan</th>
                            <th class="table-primary" colspan="7"><center>Malam</center></th>
                        </tr>
                        <tr>
                            <th class="table-success">karbohidrat</th>
                            <th class="table-success">protein</th>
                            <th class="table-success">lemak</th>
                            <th class="table-success">vitamin mineral</th>
                            <th class="table-success">serat</th>
                            <th class="table-success">minuman</th>
                            <th class="table-success">porsi</th>
                            <th class="table-success">karbohidrat</th>
                            <th class="table-success">protein</th>
                            <th class="table-success">lemak</th>
                            <th class="table-success">vitamin mineral</th>
                            <th class="table-success">serat</th>
                            <th class="table-success">minuman</th>
                            <th class="table-success">porsi</th>
                            <th class="table-success">karbohidrat</th>
                            <th class="table-success">protein</th>
                            <th class="table-success">lemak</th>
                            <th class="table-success">vitamin mineral</th>
                            <th class="table-success">serat</th>
                            <th class="table-success">minuman</th>
                            <th class="table-success">porsi</th>
                        </tr>
                    </thead>
                    {{-- <tfoot>
                        <tr>
                            <th>karbohidrat</th>
                            <th>protein</th>
                            <th>lemak</th>
                            <th>vitamin mineral</th>
                            <th>serat</th>
                            <th>minuman</th>
                            <th>porsi</th>
                            <th>karbohidrat</th>
                            <th>protein</th>
                            <th>lemak</th>
                            <th>vitamin mineral</th>
                            <th>serat</th>
                            <th>minuman</th>
                            <th>porsi</th>
                            <th>karbohidrat</th>
                            <th>protein</th>
                            <th>lemak</th>
                            <th>vitamin mineral</th>
                            <th>serat</th>
                            <th>minuman</th>
                            <th>porsi</th>
                        </tr>
                        <tr>
                            <th class="table-danger" rowspan="2">No.</th>
                            <th class="table-danger" rowspan="2">Aksi</th>
                            <th class="table-danger" rowspan="2">Tanggal</th>
                            <th class="table-primary" colspan="7"><center>Pagi</center></th>
                            <th rowspan="2">Selingan</th>
                            <th class="table-primary" colspan="7"></center>Siang<center></th>
                            <th rowspan="2">Selingan</th>
                            <th class="table-primary" colspan="7"><center>Malam</center></th>
                        </tr>
                    </tfoot> --}}
                        <tbody>
                            @foreach ($nutrisi as $data)
                                <tr>
                                    <td class="table-success"> {{ $no++ }} </td>
                                    <td class="table-success">
                                      <a href="/nutrisi/{{$data->id}}/edit" class="btn btn-warning btn-sm" role="button">Update</a>
                                      {{-- <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModal1">Update</button> --}}
                                    </td>
                                    <td class="table-success"> {{ $data -> tanggal}} </td>
                                    <td class="table-warning"> {{ $data -> karbohidrat1}} </td>
                                    <td class="table-warning"> {{ $data -> protein1}}</td>
                                    <td class="table-warning"> {{ $data -> lemak1}} </td>
                                    <td class="table-warning"> {{ $data -> vitamin1}} </td>
                                    <td class="table-warning"> {{ $data -> serat1}} </td>
                                    <td class="table-warning"> {{ $data -> minuman1}} </td>
                                    <td class="table-warning"> {{ $data -> porsi1}} </td>
                                    <td class="table-success"> {{ $data -> selingan1}} </td>
                                    <td class="table-warning"> {{ $data -> karbohidrat2}} </td>
                                    <td class="table-warning"> {{ $data -> protein2}}</td>
                                    <td class="table-warning"> {{ $data -> lemak2}} </td>
                                    <td class="table-warning"> {{ $data -> vitamin2}} </td>
                                    <td class="table-warning"> {{ $data -> serat2}} </td>
                                    <td class="table-warning"> {{ $data -> minuman2}} </td>
                                    <td class="table-warning"> {{ $data -> porsi2}} </td>
                                    <td class="table-success"> {{ $data -> selingan2}} </td>
                                    <td class="table-warning"> {{ $data -> karbohidrat3}} </td>
                                    <td class="table-warning"> {{ $data -> protein3}}</td>
                                    <td class="table-warning"> {{ $data -> lemak3}} </td>
                                    <td class="table-warning"> {{ $data -> vitamin3}} </td>
                                    <td class="table-warning"> {{ $data -> serat3}} </td>
                                    <td class="table-warning"> {{ $data -> minuman3}} </td>
                                    <td class="table-warning"> {{ $data -> porsi3}} </td>
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
                <h5 class="modal-title" id="exampleModalLabel">Tambah Daftar Asupan Nutrisi Mu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">
                    <form action="/nutrisi/tambah" method="POST">
                        {{csrf_field()}}
                        <div>
                            <label for="exampleFormControlTextarea1"></label>
                            <input type="hidden" name="users_id" value="{{ Auth::user()->id }}" class="form-control" type="text" placeholder="{{ Auth::user()->name }}">
                        </div>
                            <div>
                                <label for="exampleFormControlTextarea1">Tanggal</label>
                                <input name="tanggal" class="form-control" type="date">
                            </div>
                            <div class="modal-footer"></div>
                                <div>
                                    <label for="exampleFormControlTextarea1"><strong>Menu Pagi</strong></label>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="exampleFormControlTextarea1">karbohidrat</label>
                                            <input name="karbohidrat1" class="form-control" type="text" placeholder="contoh : Nasi">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleFormControlTextarea1">protein</label>
                                            <input name="protein1" class="form-control" type="text" placeholder="contoh : Telur">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleFormControlTextarea1">lemak</label>
                                            <input name="lemak1" class="form-control" type="text" placeholder="contoh : Daging">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="exampleFormControlTextarea1">vitamin dan mineral</label>
                                            <input name="vitamin1" class="form-control" type="text" placeholder="contoh : Buah">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleFormControlTextarea1">serat</label>
                                            <input name="serat1" class="form-control" type="text" placeholder="contoh : Sayur">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleFormControlTextarea1">minuman</label>
                                            <input name="minuman1" class="form-control" type="text" placeholder="contoh : Susu">
                                        </div>
                                    </div>
                                    <div>
                                        <label for="exampleFormControlTextarea1">porsi pagi</label>
                                        <input name="porsi1" class="form-control" type="text" placeholder="contoh : contoh : Satu piring">
                                    </div>
                                </div>
                                <div class="modal-footer"></div>
                                <div>
                                    <label for="exampleFormControlTextarea1"><strong>Selingan Pagi</strong></label>
                                    <input name="selingan1" class="form-control" type="text" placeholder="Isi menu di sini">
                                </div>
                                <div class="modal-footer"></div>
                                <div>
                                    <label for="exampleFormControlTextarea1"><strong>Menu Siang</strong></label>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="exampleFormControlTextarea1">karbohidrat</label>
                                            <input name="karbohidrat2" class="form-control" type="text" placeholder="contoh : Nasi">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleFormControlTextarea1">protein</label>
                                            <input name="protein2" class="form-control" type="text" placeholder="contoh : Telur">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleFormControlTextarea1">lemak</label>
                                            <input name="lemak2" class="form-control" type="text" placeholder="contoh : Daging">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="exampleFormControlTextarea1">vitamin dan mineral</label>
                                            <input name="vitamin2" class="form-control" type="text" placeholder="contoh : Buah">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleFormControlTextarea1">serat</label>
                                            <input name="serat2" class="form-control" type="text" placeholder="contoh : Sayur">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleFormControlTextarea1">minuman</label>
                                            <input name="minuman2" class="form-control" type="text" placeholder="contoh : Susu">
                                        </div>
                                    </div>
                                    <div>
                                        <label for="exampleFormControlTextarea1">porsi siang</label>
                                        <input name="porsi2" class="form-control" type="text" placeholder="contoh : Satu piring">
                                    </div>
                                </div>
                                <div class="modal-footer"></div>
                                <div>
                                    <label for="exampleFormControlTextarea1"><strong>Selingan Sore</strong></label>
                                    <input name="selingan2" class="form-control" type="text" placeholder="Isi menu di sini">
                                </div>
                                <div class="modal-footer"></div>
                                <div>
                                    <label for="exampleFormControlTextarea1"><strong>Menu Malam</strong></label>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="exampleFormControlTextarea1">karbohidrat</label>
                                            <input name="karbohidrat3" class="form-control" type="text" placeholder="contoh : Nasi">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleFormControlTextarea1">protein</label>
                                            <input name="protein3" class="form-control" type="text" placeholder="contoh : Telur">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleFormControlTextarea1">lemak</label>
                                            <input name="lemak3" class="form-control" type="text" placeholder="contoh : Daging">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="exampleFormControlTextarea1">vitamin dan mineral</label>
                                            <input name="vitamin3" class="form-control" type="text" placeholder="contoh : Buah">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleFormControlTextarea1">serat</label>
                                            <input name="serat3" class="form-control" type="text" placeholder="contoh : Sayur">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleFormControlTextarea1">minuman</label>
                                            <input name="minuman3" class="form-control" type="text" placeholder="contoh : Susu">
                                        </div>
                                    </div>
                                    <div>
                                        <label for="exampleFormControlTextarea1">porsi malam</label>
                                        <input name="porsi3" class="form-control" type="text" placeholder="contoh : Satu piring">
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
@endsection
