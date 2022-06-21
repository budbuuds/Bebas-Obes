@extends('layouts.admin2')

@section('content')

@php
    $no =1;
    // foreach ($fisik as $data => $tinggi) {
    //     $berat_ideal = ( $data-100)-(( $data-100)*(15/100));
    //     $berat_ideal = $tinggi;
    // }
@endphp

<div class="container-fluid">
    <h1 class="mt-4">Aktifitas Fisik</h1>
    <ol class="breadcrumb mb-4">
        <button type="button" class="btn btn-success btn-icon-text" data-toggle="modal" data-target="#exampleModal">
            <i class="mdi mdi-upload btn-icon-prepend"></i> Tambah 
        </button>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <form action="/export/fisik">
                <input type="submit" class="btn btn-primary btn-icon-text" value="Export ke excel" />
            </form>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th rowspan="2">No.</th>
                            <th rowspan="2">Aksi</th>
                            <th rowspan="2">Name</th>
                            <th rowspan="2">Tanggal</th>
                            <th colspan="6">Jenis dan durasi</th>
                          </tr>
                          <tr>
                            <th>jenis</th>
                            <th>durasi</th>
                            <th>jenis</th>
                            <th>durasi</th>
                            <th>jenis</th>
                            <th>durasi</th>
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
                                <td> {{ $no++ }} </td>
                                <td>
                                    <a href="/admin/fisik/{{$data->id}}/edit" class="btn btn-warning btn-sm" role="button">Edit</a>
                                    <a href="/admin/fisik/delete/{{$data->id}}" class="btn btn-danger btn-sm" role="button">Delete</a>
                                </td>
                                <td> {{ $data -> users -> name}} </td>
                                <td> {{ $data -> tanggal}} </td>
                                <td> {{ $data -> jenis1}}</td>
                                <td> {{ $data -> durasi1}} </td>
                                <td> {{ $data -> jenis2}}</td>
                                <td> {{ $data -> durasi2}} </td>
                                <td> {{ $data -> jenis3}}</td>
                                <td> {{ $data -> durasi3}} </td>
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
                        <form action="/admin/fisik/tambah" method="POST">
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