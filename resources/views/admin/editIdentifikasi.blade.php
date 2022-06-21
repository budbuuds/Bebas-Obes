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
    <div class="container-fluid">
      <h1 class="mt-4">Identifikasi</h1>
      <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item active">Edit Identifikasi</li>
      </ol>
      <div class="card mb-4">
          <div class="card-body">
          <!-- Main content -->

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
                          <form action="/admin/identifikasi/{{$identifikasi->id}}/update" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                              <label for="exampleFormControlSelect1">Nama anak</label>
                              <select name="users_id" class="select2" multiple="multiple" id="exampleFormControlSelect1" style="width: 100%">
                                  @foreach ($user_array as $array)
                                      <option value="{{$array->id}}">{{$array->name}}</option>
                                  @endforeach
                              </select>
                          </div>
                           <div class="form-group">
                               <label for="exampleFormControlSelect1">Tinggi Badan</label>
                               <input name="tinggi" class="form-control" type="number" placeholder="cm" required value="{{$identifikasi->tinggi}}">
                           </div>
                           <div class="form-group">
                               <label for="exampleFormControlSelect1">Berat Badan</label>
                               <input name="berat_asli" class="form-control" type="number" placeholder="kg" required value="{{$identifikasi->berat_asli}}">
                           </div>
                           <div class="form-group">
                               <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                               <select name="kategori" class="form-control" id="exampleFormControlSelect1">
                                  <option value="Perempuan">Perempuan</option>
                                  <option value="Laki-laki">Laki-laki</option>
                               </select>
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
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </div>
    </div>
            <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection