@extends('layouts.admin2')

@section('content')

@php
    $no =1;
    // foreach ($identifikasi as $data => $tinggi) {
    //     $berat_ideal = ( $data-100)-(( $data-100)*(15/100));
    //     $berat_ideal = $tinggi;
    // }
@endphp

<div class="container-fluid">
    <h1 class="mt-4">Identifikasi</h1>
    <ol class="breadcrumb mb-4">
        <button type="button" class="btn btn-success btn-icon-text" data-toggle="modal" data-target="#exampleModal">
            <i class="mdi mdi-upload btn-icon-prepend"></i> Tambah 
        </button>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <form action="/export/identifikasi">
                <input type="submit" class="btn btn-primary btn-icon-text" value="Export ke excel" />
            </form>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Aksi</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Tinggi</th>
                            <th>Berat</th>
                            <th>Kategori</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No.</th>
                            <th>Aksi</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Tinggi</th>
                            <th>Berat</th>
                            <th>Kategori</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($identifikasi as $data)
                            <tr>
                                <td> {{ $no++ }} </td>
                                <td>
                                    <a href="/admin/identifikasi/{{$data->id}}/edit" class="btn btn-warning btn-sm" role="button">Edit</a>
                                    <a href="/admin/identifikasi/delete/{{$data->id}}" class="btn btn-danger btn-sm" role="button">Delete</a>
                                </td>
                                <td> {{ $data -> users -> name}} </td>
                                <td> {{ $data -> kategori}} </td>
                                <td> {{ $data -> tinggi}}</td>
                                <td> {{ $data -> berat_asli}} </td>
                                {{-- <td> {{ $berat_ideal }} </td> --}}
                                <td>
                                    @php
                                        $kategori = $data -> kategori;
                                        $tinggi = $data -> tinggi;
                                        $berat = $data -> berat_asli;
                                        if ($kategori=="Perempuan") 
                                        {
                                            $data = ($tinggi-100)-(($tinggi-100)*(15/100));
                                            // echo $data;
                                            if ($data > $berat) {
                                                echo "Kurus";
                                            }
                                            elseif ($data < $berat) {
                                                echo "Gemuk";
                                            }
                                            else {
                                                echo "Normal";
                                            }
                                        }
                                        else {
                                            $data = ($tinggi-100)-(($tinggi-100)*(10/100));
                                            // echo $data;
                                            if ($data > $berat) {
                                                echo "Kurus";
                                            }
                                            elseif ($data < $berat) {
                                                echo "Gemuk";
                                            }
                                            else {
                                                echo "Normal";
                                            }
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
                        <form action="/admin/identifikasi/tambah" method="POST">
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