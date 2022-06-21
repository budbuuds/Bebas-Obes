@extends('layouts.admin2')

@section('content')

@php
    $no =1;
    // foreach ($identifikasi as $data => $tinggi) {
    //     $berat_ideal = ( $data-100)-(( $data-100)*(15/100));
    //     $berat_ideal = $tinggi;
    // }
@endphp

<!-- Content Wrapper. Contains page content -->
  {{-- <div class="content-wrapper"> --}}
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Identifikasi</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                <li class="breadcrumb-item active">Identifikasi</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
          <!-- Main content -->
          <section class="content">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-header">
                        <button type="button" class="btn btn-success btn-icon-text" data-toggle="modal" data-target="#exampleModal">
                            <i class="mdi mdi-upload btn-icon-prepend"></i> Tambah 
                        </button>
                      </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                              <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th class="th-lg" scope="col">No.</th>
                                    <th class="th-lg" scope="col">Aksi</th>
                                    <th class="th-lg" scope="col">Nama</th>
                                    <th class="th-lg" scope="col">Jenis Kelamin</th>
                                    <th class="th-lg" scope="col">Tinggi Badan</th>
                                    <th class="th-lg" scope="col">Berat Asli</th>
                                    <th class="th-lg" scope="col">Berat Ideal</th>
                                    {{-- <th class="th-lg" scope="col">Status</th> --}}
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($identifikasi as $data)
                                        <tr>
                                            <td> {{ $no++ }} </td>
                                            <td>
                                                <a href="/admin/identifikasi/{{$data->id}}/edit" class="btn btn-warning btn-sm" role="button">Edit</a>
                                                <a href="/admin/identifikasi/delete/{{$data->id}}" class="btn btn-danger btn-sm" role="button">Delete</a>
                                           </td>
                                            <td> {{ $data -> name}} </td>
                                            <td> {{ $data -> kategori}} </td>
                                            <td> {{ $data -> tinggi}}</td>
                                            <td> {{ $data -> berat_asli}} </td>
                                            {{-- <td> {{ $berat_ideal }} </td> --}}
                                            <td>
                                                @php
                                                    $kategori = $data -> kategori;
                                                    $tinggi = $data -> tinggi;
                                                    if ($kategori=="Perempuan") 
                                                    {
                                                        $data = ($tinggi-100)-(($tinggi-100)*(15/100));
                                                        echo $data;
                                                    }
                                                    else {
                                                        $data = ($tinggi-100)-(($tinggi-100)*(10/100));
                                                        echo $data;
                                                    }
                                                @endphp

                                                </td>
                                               
{{-- <td>
                                                @php
                                                    if ($data -> kategori=="P") 
                                                    {
                                                        $data = ($data -> tinggi-100)-(($data -> tinggi-100)*(15/100));
                                                        echo $data;
                                                    }
                                                    else {
                                                        $data = ($data -> tinggi-100)-(($data -> tinggi-100)*(10/100));
                                                        echo $data;
                                                    }
                                                @endphp
                                            </td> --}}
                                            {{-- <td>
                                                @php
                                                    if ($data -> berat_asli==$data) 
                                                    {
                                                        echo "normal";
                                                    }
                                                    else {
                                                        echo "tak normal";
                                                    }
                                                @endphp
                                            </td> --}}
                                            {{-- <td>
                                                @php
                                                    if ($data -> kategori=="P") 
                                                    {
                                                        $data = ($data -> tinggi-100)-(($data -> tinggi-100)*(15/100));
                                                        if ($data -> berat_asli > $data) 
                                                        {
                                                            echo "Obesitas";
                                                        }
                                                        elseif ($data -> berat_asli == $data) {
                                                            echo "Normal";
                                                        }
                                                        else {
                                                            echo "Kurus";
                                                        }
                                                    }
                                                    else {
                                                        $data = ($data -> tinggi-100)-(($data -> tinggi-100)*(10/100));
                                                        if ($data -> berat_asli > $data) 
                                                        {
                                                            echo "Obesitas";
                                                        }
                                                        elseif ($data -> berat_asli == $data) {
                                                            echo "Normal";
                                                        }
                                                        else {
                                                            echo "Kurus";
                                                        }
                                                    }
                                                @endphp
                                            </td> --}}
                                            {{-- <td> {{ $data -> berat_ideal}} </td> --}}
                                            
                                        </tr>
                                    @endforeach 
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
        </section>
            <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
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
                    <form action="/admin/identifikasi/tambah" method="POST">
                        {{csrf_field()}}
                            <div>
                                <label for="exampleFormControlTextarea1">Nama</label>
                                <input name="name" class="form-control" type="text" placeholder="Nama Anda">
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
@endsection