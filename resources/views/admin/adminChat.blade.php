@extends('layouts.admin2')

@section('content')

@php
    $no =1;
    // foreach ($chat as $data => $tinggi) {
    //     $berat_ideal = ( $data-100)-(( $data-100)*(15/100));
    //     $berat_ideal = $tinggi;
    // }
@endphp

<div class="container-fluid">
    <h1 class="mt-4">Chat</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Data Narahubung </li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <button type="button" class="btn btn-success btn-icon-text" data-toggle="modal" data-target="#exampleModal">
                <i class="mdi mdi-upload btn-icon-prepend"></i> Tambah 
            </button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Aksi</th>
                            <th>Nama</th>
                            <th>Daerah</th>
                            <th>Telepon</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No.</th>
                            <th>Aksi</th>
                            <th>Nama</th>
                            <th>Daerah</th>
                            <th>Telepon</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($chat as $data)
                            <tr>
                                <td> {{ $no++ }} </td>
                                <td>
                                    <a href="/admin/chat/{{$data->id}}/edit" class="btn btn-warning btn-sm" role="button">Edit</a>
                                    <a href="/admin/chat/delete/{{$data->id}}" class="btn btn-danger btn-sm" role="button">Delete</a>
                                </td>
                                <td>{{ $data -> name}}</td>
                                <td>{{ $data -> daerah}}</td>
                                {{-- <td>{{ $data -> telp}}</td> --}}
                                <td> <a href="https://wa.me/{{ $data -> telp}}?text=halooo, saya ingin konsultasi">{{ $data -> telp}}</a></td>
                                {{-- <td> {{ $data -> link}}</td> --}}
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
                        <form action="/admin/chat/tambah" method="POST">
                            {{csrf_field()}}
                                <div>
                                    <label for="exampleFormControlTextarea1">Nama</label>
                                    <input name="name" class="form-control" type="text" placeholder="Isi judul di sini">
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1">Daerah</label>
                                    <input name="daerah" class="form-control" type="text" placeholder="Isi link di sini">
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1">Telepon</label>
                                    <input name="telp" class="form-control" type="text" placeholder="Gunakan kode negara, ex : 62831xxxxxx">
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