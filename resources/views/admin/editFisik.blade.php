@extends('layouts.admin2')

@section('content')

@php
    $no =1;
    // foreach ($fisik as $data => $tinggi) {
    //     $berat_ideal = ( $data-100)-(( $data-100)*(15/100));
    //     $berat_ideal = $tinggi;
    // }
@endphp

<!-- Content Wrapper. Contains page content -->
  {{-- <div class="content-wrapper"> --}}
    <!-- Content Header (Page header) -->
    <div class="container-fluid">
      <h1 class="mt-4">Aktivitas Fisik</h1>
      <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item active">Edit Aktivitas Fisik</li>
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
                          <form action="/admin/fisik/{{$fisik->id}}/update" method="POST">
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
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </div>
    </div>
            <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection