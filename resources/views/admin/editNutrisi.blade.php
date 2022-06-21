@extends('layouts.admin2')

@section('content')

@php
    $no =1;
    // foreach ($nutrisi as $data => $tinggi) {
    //     $berat_ideal = ( $data-100)-(( $data-100)*(15/100));
    //     $berat_ideal = $tinggi;
    // }
@endphp

<!-- Content Wrapper. Contains page content -->
  {{-- <div class="content-wrapper"> --}}
    <!-- Content Header (Page header) -->
    <div class="container-fluid">
      <h1 class="mt-4">Nutrisi</h1>
      <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item active">Edit Nutrisi</li>
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
                          <form action="/admin/nutrisi/{{$nutrisi->id}}/update" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                              <label for="exampleFormControlSelect1">Nama anak</label>
                              <select name="users_id" class="select2" id="exampleFormControlSelect1" style="width: 100%">
                                  @foreach ($user_array as $array)
                                      <option value="{{$array->id}}">{{$array->name}}</option>
                                  @endforeach
                              </select>
                          </div>
                           <div class="form-group">
                               <label for="exampleFormControlSelect1">Tanggal</label>
                               <input name="tanggal" class="form-control" type="date" required value="{{$nutrisi->tanggal}}">
                           </div>
                           <div class="form-group">
                               <label for="exampleFormControlSelect1">Karbohidrat Pagi</label>
                               <input name="karbohidrat1" class="form-control" type="text" placeholder="Isi menu disini" value="{{$nutrisi->karbohidrat1}}">
                           </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Protein Pagi</label>
                                <input name="protein1" class="form-control" type="text" placeholder="Isi menu disini" value="{{$nutrisi->protein1}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Lemak Pagi</label>
                                <input name="lemak1" class="form-control" type="text" placeholder="Isi menu disini" value="{{$nutrisi->lemak1}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Vitamin dan Mineral Pagi</label>
                                <input name="vitamin1" class="form-control" type="text" placeholder="Isi menu disini" value="{{$nutrisi->vitamin1}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Serat Pagi</label>
                                <input name="serat1" class="form-control" type="text" placeholder="Isi menu disini" value="{{$nutrisi->serat1}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Minuman Pagi</label>
                                <input name="minuman1" class="form-control" type="text" placeholder="Isi menu disini" value="{{$nutrisi->minuman1}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Porsi Pagi</label>
                                <input name="porsi1" class="form-control" type="text" placeholder="Isi menu disini" value="{{$nutrisi->porsi1}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Selingan Pagi</label>
                                <input name="selingan1" class="form-control" type="text" placeholder="Isi menu disini" value="{{$nutrisi->selingan1}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Karbohidrat Siang</label>
                                <input name="karbohidrat2" class="form-control" type="text" placeholder="Isi menu disini" value="{{$nutrisi->karbohidrat2}}">
                            </div>
                             <div class="form-group">
                                 <label for="exampleFormControlSelect1">Protein Siang</label>
                                 <input name="protein2" class="form-control" type="text" placeholder="Isi menu disini" value="{{$nutrisi->protein2}}">
                             </div>
                             <div class="form-group">
                                 <label for="exampleFormControlSelect1">Lemak Siang</label>
                                 <input name="lemak2" class="form-control" type="text" placeholder="Isi menu disini" value="{{$nutrisi->lemak2}}">
                             </div>
                             <div class="form-group">
                                 <label for="exampleFormControlSelect1">Vitamin dan Mineral Siang</label>
                                 <input name="vitamin2" class="form-control" type="text" placeholder="Isi menu disini" value="{{$nutrisi->vitamin2}}">
                             </div>
                             <div class="form-group">
                                 <label for="exampleFormControlSelect1">Serat Siang</label>
                                 <input name="serat2" class="form-control" type="text" placeholder="Isi menu disini" value="{{$nutrisi->serat2}}">
                             </div>
                             <div class="form-group">
                                 <label for="exampleFormControlSelect1">Minuman Siang</label>
                                 <input name="minuman2" class="form-control" type="text" placeholder="Isi menu disini" value="{{$nutrisi->minuman2}}">
                             </div>
                             <div class="form-group">
                                 <label for="exampleFormControlSelect1">Porsi Siang</label>
                                 <input name="porsi2" class="form-control" type="text" placeholder="Isi menu disini" value="{{$nutrisi->porsi2}}">
                             </div>
                             <div class="form-group">
                                 <label for="exampleFormControlSelect1">Selingan Sore</label>
                                 <input name="selingan2" class="form-control" type="text" placeholder="Isi menu disini" value="{{$nutrisi->selingan2}}">
                             </div>
                             <div class="form-group">
                                <label for="exampleFormControlSelect1">Karbohidrat Malam</label>
                                <input name="karbohidrat3" class="form-control" type="text" placeholder="Isi menu disini" value="{{$nutrisi->karbohidrat3}}">
                            </div>
                             <div class="form-group">
                                 <label for="exampleFormControlSelect1">Protein Malam</label>
                                 <input name="protein3" class="form-control" type="text" placeholder="Isi menu disini" value="{{$nutrisi->protein3}}">
                             </div>
                             <div class="form-group">
                                 <label for="exampleFormControlSelect1">Lemak Malam</label>
                                 <input name="lemak3" class="form-control" type="text" placeholder="Isi menu disini" value="{{$nutrisi->lemak3}}">
                             </div>
                             <div class="form-group">
                                 <label for="exampleFormControlSelect1">Vitamin dan Mineral Malam</label>
                                 <input name="vitamin3" class="form-control" type="text" placeholder="Isi menu disini" value="{{$nutrisi->vitamin3}}">
                             </div>
                             <div class="form-group">
                                 <label for="exampleFormControlSelect1">Serat Malam</label>
                                 <input name="serat3" class="form-control" type="text" placeholder="Isi menu disini" value="{{$nutrisi->serat3}}">
                             </div>
                             <div class="form-group">
                                 <label for="exampleFormControlSelect1">Minuman Malam</label>
                                 <input name="minuman3" class="form-control" type="text" placeholder="Isi menu disini" value="{{$nutrisi->minuman3}}">
                             </div>
                             <div class="form-group">
                                 <label for="exampleFormControlSelect1">Porsi Malam</label>
                                 <input name="porsi3" class="form-control" type="text" placeholder="Isi menu disini" value="{{$nutrisi->porsi3}}">
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