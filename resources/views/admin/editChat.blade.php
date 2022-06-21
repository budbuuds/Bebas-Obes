@extends('layouts.admin2')

@section('content')

@php
    $no =1;
    // foreach ($chat as $data => $tinggi) {
    //     $berat_ideal = ( $data-100)-(( $data-100)*(15/100));
    //     $berat_ideal = $tinggi;
    // }
@endphp

<!-- Content Wrapper. Contains page content -->
  {{-- <div class="content-wrapper"> --}}
    <!-- Content Header (Page header) -->
    <div class="container-fluid">
      <h1 class="mt-4">Chat</h1>
      <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item active">Edit Chat</li>
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
                          <form action="/admin/chat/{{$chat->id}}/update" method="POST">
                            {{csrf_field()}}
                           <div class="form-group">
                               <label for="exampleFormControlSelect1">Nama</label>
                               <input name="name" class="form-control" type="text" required value="{{$chat->name}}">
                           </div>
                           <div class="form-group">
                               <label for="exampleFormControlSelect1">Daerah</label>
                               <input name="daerah" class="form-control" type="text" required value="{{$chat->daerah}}">
                           </div>
                           <div class="form-group">
                               <label for="exampleFormControlSelect1">Telepon</label>
                               <input name="telp" class="form-control" type="text" required value="{{$chat->telp}}">
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