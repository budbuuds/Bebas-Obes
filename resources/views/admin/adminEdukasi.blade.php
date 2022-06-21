@extends('layouts.admin2')

@section('content')

@php
    $no =1;
    // foreach ($edukasi as $data => $tinggi) {
    //     $berat_ideal = ( $data-100)-(( $data-100)*(15/100));
    //     $berat_ideal = $tinggi;
    // }
@endphp

<div class="container-fluid">
    <h1 class="mt-4">Edukasi</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Data Edukasi</li>
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
                            <th>Kategori</th>
                            <th>Judul</th>
                            <th>Materi</th>
                            <th>Video</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No.</th>
                            <th>Aksi</th>
                            <th>Kategori</th>
                            <th>Judul</th>
                            <th>Materi</th>
                            <th>Video</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($edukasi as $data)
                            <tr>
                                <td> {{ $no++ }} </td>
                                <td>
                                    <a href="/admin/edukasi/{{$data->id}}/edit" class="btn btn-warning btn-sm" role="button">Edit</a>
                                    <a href="/admin/edukasi/delete/{{$data->id}}" class="btn btn-danger btn-sm" role="button">Delete</a>
                                </td>
                                <td>
                                    @php
                                        $kategori = $data -> kategori;
                                        if ($kategori=="1")
                                        {
                                            echo "Nutrisi";
                                        }
                                        else 
                                        {
                                            echo "Aktivitas Fisik";
                                        }
                                    @endphp
                                </td>
                                <td> {{ $data -> judul}} </td>
                                <td> {{ $data -> materi}} </td>
                                <td> <iframe width="100" height="100" src="https://www.youtube.com/embed/{{ $data -> video}}" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> </td>                                
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
                        <form action="/admin/edukasi/tambah" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            {{-- <input type="file" name="file"> --}}
                                <div>
                                    <label for="exampleFormControlTextarea1">Kategori</label>
                                    <select name="kategori" class="select2" id="exampleFormControlSelect1" style="width: 100%">
                                        <option value="1">Nutrisi</option>
                                        <option value="2">Aktivitas Fisik</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1">Judul</label>
                                    <input name="judul" class="form-control" type="text" placeholder="Judul Materi Edukasi">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Materi</label>
                                    <div></div>
                                    <textarea rows="auto" cols="65%" name="materi" id="exampleFormControlSelect1">Isi dari materi anda</textarea>
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1">PDF</label>
                                    <input type="file" name="gambar" class="form-control">
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1">Video</label>
                                    <input name="video" class="form-control" type="text" placeholder="Link dari YouTube">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <input class="btn btn-primary" type="submit">
                                </div>    
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> 
@endsection