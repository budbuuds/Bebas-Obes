@extends('layouts.admin2')

@section('content')

@php
    $no =1;
    // foreach ($user as $data => $tinggi) {
    //     $berat_ideal = ( $data-100)-(( $data-100)*(15/100));
    //     $berat_ideal = $tinggi;
    // }
@endphp

<div class="container-fluid">
    <h1 class="mt-4">User</h1>
    <ol class="breadcrumb mb-4">
        <form action="/export/user">
            <input type="submit" class="btn btn-primary btn-icon-text" value="Export ke excel" />
        </form>
    </ol>
    <div class="card mb-4">
        {{-- <div class="card-header">
            <button type="button" class="btn btn-success btn-icon-text" data-toggle="modal" data-target="#exampleModal">
                <i class="mdi mdi-upload btn-icon-prepend"></i> Tambah 
            </button>
        </div> --}}
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Sekolah</th>
                            <th>Usia</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Sekolah</th>
                            <th>Usia</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($user as $data)
                            <tr>
                                <td> {{ $no++ }} </td>
                                <td> {{ $data -> name}} </td>
                                <td> {{ $data -> email}} </td>
                                <td> {{ $data -> sekolah}} </td>
                                <td> {{ $data -> usia}} </td>
                            </tr>
                        @endforeach 
                    </tbody>
                </table>
            </div>
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
                        <form action="/admin/user/tambah" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Nama anak</label>
                                <select name="users_id" class="select2" multiple="multiple" id="exampleFormControlSelect1" style="width: 100%">
                                    @foreach ($user_array as $array)
                                        <option value="{{$array->id}}">{{$array->name}}</option>
                                    @endforeach
                                </select>
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
@endsection