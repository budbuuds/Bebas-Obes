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
                <h1>Cek Status Gizi Kamu</h1>
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
                            <tr class="table-primary">
                                <th>No.</th>
                                {{-- <th>Aksi</th> --}}
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Tinggi</th>
                                <th>Berat</th>
                                <th>Kategori</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr class="table-primary">
                                <th>No.</th>
                                {{-- <th>Aksi</th> --}}
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Tinggi</th>
                                <th>Berat</th>
                                <th>Kategori</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($identifikasi as $data)
                                <tr class="table-warning">
                                    <td> {{ $no++ }} </td>
                                    {{-- <td>
                                        <a href="/admin/identifikasi/{{$data->id}}/edit" class="btn btn-warning btn-sm" role="button">Edit</a>
                                        <a href="/admin/identifikasi/delete/{{$data->id}}" class="btn btn-danger btn-sm" role="button">Delete</a>
                                    </td> --}}
                                    <td> {{ $data -> users -> name}} </td>
                                    <td> {{ $data -> kategori}} </td>
                                    <td> {{ $data -> tinggi}}</td>
                                    <td> {{ $data -> berat_asli}} </td>
                                    {{-- <td> {{ $berat_ideal }} </td> --}}
                                    <td>
                                        @php
                                            $kategori = $data -> kategori;
                                            $tinggi = $data -> tinggi;
                                            $berat = $data -> berat_asli;
                                            // $kurus = 17;
                                            if ($kategori=="Perempuan") 
                                            {
                                                // $data = ($tinggi-100)-(($tinggi-100)*(15/100));
                                                $data = $berat/(($tinggi/100)*($tinggi/100));
                                                if ($data < 17) {
                                                    echo "Kurus";
                                                }
                                                elseif ($data < 23 && $data > 17) {
                                                    echo "Normal";
                                                }
                                                elseif ($data < 27 && $data > 23) {
                                                    echo "Gemuk";
                                                }
                                                elseif ($data > 27) {
                                                    echo "Obesitas";
                                                }
                                                else {
                                                    echo "Tolong periksa input anda!";
                                                }

                                                // $data = $berat/(($tinggi/100)*($tinggi/100));
                                                
                                                // if ($data > ) {
                                                //     echo "Kurus";
                                                // }
                                                // elseif (17 < $data < 23) {
                                                //     echo "Normal";
                                                // }
                                                // elseif (23 < $data < 27) {
                                                //     echo "Gemuk";
                                                // }
                                                // elseif ($data > 27) {
                                                //     echo "Obesitas";
                                                // }
                                                // else {
                                                //     echo "Input Salah";
                                                // }
                                            }
                                            else {
                                                // $data = ($tinggi-100)-(($tinggi-100)*(10/100));
                                                // // echo $data;
                                                // if ($data > $berat) {
                                                //     echo "Kurus";
                                                // }
                                                // elseif ($data < $berat) {
                                                //     echo "Gemuk";
                                                // }
                                                // else {
                                                //     echo "Normal";
                                                // }

                                                $data = $berat/(($tinggi/100)*($tinggi/100));
                                                if ($data < 18) {
                                                    echo "Kurus";
                                                }
                                                elseif ($data < 25 && $data > 18) {
                                                    echo "Normal";
                                                }
                                                elseif ($data < 27 && $data > 25) {
                                                    echo "Gemuk";
                                                }
                                                elseif ($data > 27) {
                                                    echo "Obesitas";
                                                }
                                                else {
                                                    echo "Tolong periksa input anda!";
                                                }
                                            }
                                        @endphp
    
                                        </td>
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
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">
            <form action="/identifikasi/tambah" method="POST">
                {{csrf_field()}}
                {{-- <div class="form-group">
                    <label for="exampleFormControlSelect1">Nama anak</label>
                    <select name="users_id" class="select2" multiple="multiple" id="exampleFormControlSelect1" style="width: 100%">
                        @foreach ($user_array as $array)
                            <option value="{{$array->id}}">{{$array->name}}</option>
                        @endforeach
                    </select>
                </div> --}}
                    <div>
                        <label for="exampleFormControlTextarea1"></label>
                        <input type="hidden" name="users_id" value="{{ Auth::user()->id }}" class="form-control" type="text" placeholder="{{ Auth::user()->name }}">
                    </div>
                    <div>
                        <label for="exampleFormControlTextarea1">Tinggi Badan</label>
                        <input name="tinggi" class="form-control" type="number" placeholder="Cm">
                    </div>
                    <div>
                        <label for="exampleFormControlTextarea1">Berat Badan</label>
                        <input name="berat_asli" class="form-control" type="number" placeholder="Kg">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                        <select name="kategori" class="form-control" id="exampleFormControlSelect1">
                        <option value="Perempuan">Perempuan</option>
                        <option value="Laki-laki">Laki-laki</option>
                        </select>
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
            
        </div>
      </section><!-- End Features Section -->
@endsection
