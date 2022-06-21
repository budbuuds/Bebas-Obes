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
      <h1 class="mt-4">Edukasi</h1>
      <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item active">Edit Edukasi</li>
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
                          <form action="/admin/edukasi/{{$edukasi->id}}/update" method="POST">
                            {{csrf_field()}}
                            <div>
                              <label for="exampleFormControlTextarea1">Kategori</label>
                              <select name="kategori" class="select2" id="exampleFormControlSelect1" style="width: 100%">
                                  <option value="1">Nutrisi</option>
                                  <option value="2">Aktivitas Fisik</option>
                              </select>
                            </div>
                            <div class="form-group">
                               <label for="exampleFormControlSelect1">Judul</label>
                               <input name="judul" class="form-control" type="text" placeholder="Nama Anda" required value="{{$edukasi->judul}}">
                           </div>
                           <div class="form-group">
                               <label for="exampleFormControlSelect1">Materi</label>
                               <div></div>
                                <textarea rows="auto" cols="100%" name="materi" id="exampleFormControlSelect1">{{$edukasi->materi}}</textarea>
                           </div>
                           <div class="form-group">
                               <label for="exampleFormControlSelect1">Video</label>
                               <input name="video" class="form-control" type="text" placeholder="kg" value="{{$edukasi->video}}">
                           </div>
                           <div>
                              <label for="exampleFormControlTextarea1">PDF</label>
                              <input type="file" name="gambar" class="form-control">
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