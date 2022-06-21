@extends('layouts.admin2')

@section('content')

@php
    $no =1;
    // foreach ($nutrisi as $data => $tinggi) {
    //     $berat_ideal = ( $data-100)-(( $data-100)*(15/100));
    //     $berat_ideal = $tinggi;
    // }
@endphp

<div class="container-fluid">
    <h1 class="mt-4">Nutrisi</h1>
    <ol class="breadcrumb mb-4">
        <button type="button" class="btn btn-success btn-icon-text" data-toggle="modal" data-target="#exampleModal">
            <i class="mdi mdi-upload btn-icon-prepend"></i> Tambah 
        </button>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <form action="/export/nutrisi">
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
                            <th rowspan="2">Nama</th>
                            <th rowspan="2">Tanggal</th>
                            <th colspan="7">Pagi</th>
                            <th rowspan="2">Selingan</th>
                            <th colspan="7">Siang</th>
                            <th rowspan="2">Selingan</th>
                            <th colspan="7">Malam</th>
                        </tr>
                        <tr>
                            <th>karbohidrat</th>
                            <th>protein</th>
                            <th>lemak</th>
                            <th>vitamin mineral</th>
                            <th>serat</th>
                            <th>minuman</th>
                            <th>porsi</th>
                            <th>karbohidrat</th>
                            <th>protein</th>
                            <th>lemak</th>
                            <th>vitamin mineral</th>
                            <th>serat</th>
                            <th>minuman</th>
                            <th>porsi</th>
                            <th>karbohidrat</th>
                            <th>protein</th>
                            <th>lemak</th>
                            <th>vitamin mineral</th>
                            <th>serat</th>
                            <th>minuman</th>
                            <th>porsi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th rowspan="2">No.</th>
                            <th rowspan="2">Aksi</th>
                            <th rowspan="2">Nama</th>
                            <th rowspan="2">Tanggal</th>
                            <th colspan="7">Pagi</th>
                            <th rowspan="2">Selingan</th>
                            <th colspan="7">Siang</th>
                            <th rowspan="2">Selingan</th>
                            <th colspan="7">Malam</th>
                        </tr>
                        <tr>
                            <th>karbohidrat</th>
                            <th>protein</th>
                            <th>lemak</th>
                            <th>vitamin mineral</th>
                            <th>serat</th>
                            <th>minuman</th>
                            <th>porsi</th>
                            <th>karbohidrat</th>
                            <th>protein</th>
                            <th>lemak</th>
                            <th>vitamin mineral</th>
                            <th>serat</th>
                            <th>minuman</th>
                            <th>porsi</th>
                            <th>karbohidrat</th>
                            <th>protein</th>
                            <th>lemak</th>
                            <th>vitamin mineral</th>
                            <th>serat</th>
                            <th>minuman</th>
                            <th>porsi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($nutrisi as $data)
                            <tr>
                                <td> {{ $no++ }} </td>
                                <td>
                                    <a href="/admin/nutrisi/{{$data->id}}/edit" class="btn btn-warning btn-sm" role="button">Edit</a>
                                    <a href="/admin/nutrisi/delete/{{$data->id}}" class="btn btn-danger btn-sm" role="button">Delete</a>
                                </td>
                                <td> {{ $data -> users -> name}} </td>
                                <td> {{ $data -> tanggal}} </td>
                                <td> {{ $data -> karbohidrat1}} </td>
                                <td> {{ $data -> protein1}}</td>
                                <td> {{ $data -> lemak1}} </td>
                                <td> {{ $data -> vitamin1}} </td>
                                <td> {{ $data -> serat1}} </td>
                                <td> {{ $data -> minuman1}} </td>
                                <td> {{ $data -> porsi1}} </td>
                                <td> {{ $data -> selingan1}} </td>
                                <td> {{ $data -> karbohidrat2}} </td>
                                <td> {{ $data -> protein2}}</td>
                                <td> {{ $data -> lemak2}} </td>
                                <td> {{ $data -> vitamin2}} </td>
                                <td> {{ $data -> serat2}} </td>
                                <td> {{ $data -> minuman2}} </td>
                                <td> {{ $data -> porsi2}} </td>
                                <td> {{ $data -> selingan2}} </td>
                                <td> {{ $data -> karbohidrat3}} </td>
                                <td> {{ $data -> protein3}}</td>
                                <td> {{ $data -> lemak3}} </td>
                                <td> {{ $data -> vitamin3}} </td>
                                <td> {{ $data -> serat3}} </td>
                                <td> {{ $data -> minuman3}} </td>
                                <td> {{ $data -> porsi3}} </td>
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
                        <form action="/admin/nutrisi/tambah" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Nama anak</label>
                                <select name="users_id" class="select2" id="exampleFormControlSelect1" style="width: 100%">
                                    @foreach ($user_array as $array)
                                        <option value="{{$array->id}}">{{$array->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                                <div>
                                    <label for="exampleFormControlTextarea1">Tanggal</label>
                                    <input name="tanggal" class="form-control" type="date">
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1">Menu Pagi</label>
                                    {{-- <input name="pagi" class="form-control" type="text" placeholder="Isi menu di sini"> --}}
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1">karbohidrat pagi</label>
                                    <input name="karbohidrat1" class="form-control" type="text" placeholder="Isi menu di sini">
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1">protein pagi</label>
                                    <input name="protein1" class="form-control" type="text" placeholder="Isi menu di sini">
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1">lemak pagi</label>
                                    <input name="lemak1" class="form-control" type="text" placeholder="Isi menu di sini">
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1">vitamin dan mineral pagi</label>
                                    <input name="vitamin1" class="form-control" type="text" placeholder="Isi menu di sini">
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1">serat pagi</label>
                                    <input name="serat1" class="form-control" type="text" placeholder="Isi menu di sini">
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1">minuman pagi</label>
                                    <input name="minuman1" class="form-control" type="text" placeholder="Isi menu di sini">
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1">porsi pagi</label>
                                    <input name="porsi1" class="form-control" type="text" placeholder="Isi porsi di sini">
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1">selingan pagi</label>
                                    <input name="selingan1" class="form-control" type="text" placeholder="Isi menu di sini">
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1">Menu siang</label>
                                    {{-- <input name="siang" class="form-control" type="text" placeholder="Isi menu di sini"> --}}
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1">karbohidrat siang</label>
                                    <input name="karbohidrat2" class="form-control" type="text" placeholder="Isi menu di sini">
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1">protein siang</label>
                                    <input name="protein2" class="form-control" type="text" placeholder="Isi menu di sini">
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1">lemak siang</label>
                                    <input name="lemak2" class="form-control" type="text" placeholder="Isi menu di sini">
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1">vitamin dan mineral siang</label>
                                    <input name="vitamin2" class="form-control" type="text" placeholder="Isi menu di sini">
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1">serat siang</label>
                                    <input name="serat2" class="form-control" type="text" placeholder="Isi menu di sini">
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1">minuman siang</label>
                                    <input name="minuman2" class="form-control" type="text" placeholder="Isi menu di sini">
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1">porsi siang</label>
                                    <input name="porsi2" class="form-control" type="text" placeholder="Isi porsi di sini">
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1">selingan sore</label>
                                    <input name="selingan2" class="form-control" type="text" placeholder="Isi menu di sini">
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1">Menu malam</label>
                                    {{-- <input name="malam" class="form-control" type="text" placeholder="Isi menu di sini"> --}}
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1">karbohidrat malam</label>
                                    <input name="karbohidrat3" class="form-control" type="text" placeholder="Isi menu di sini">
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1">protein malam</label>
                                    <input name="protein3" class="form-control" type="text" placeholder="Isi menu di sini">
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1">lemak malam</label>
                                    <input name="lemak3" class="form-control" type="text" placeholder="Isi menu di sini">
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1">vitamin dan mineral malam</label>
                                    <input name="vitamin3" class="form-control" type="text" placeholder="Isi menu di sini">
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1">serat malam</label>
                                    <input name="serat3" class="form-control" type="text" placeholder="Isi menu di sini">
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1">minuman malam</label>
                                    <input name="minuman3" class="form-control" type="text" placeholder="Isi menu di sini">
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1">porsi malam</label>
                                    <input name="porsi3" class="form-control" type="text" placeholder="Isi porsi di sini">
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