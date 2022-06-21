<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        {{-- <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="" />
        <meta name="author" content="" /> --}}
        <!-- CSRF Token -->
        {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}

        <title>Aktifitas Fisik</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> --}}

        <!-- Styles -->
        {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
        
        {{-- <link href="{{ url('backend/css/styles.css')}}" rel="stylesheet" /> --}}
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <!-- new plugin select2-->
        <link rel="stylesheet" type="text/css" href="{{ url('backend/assets/select2css/select2.min.css') }}"/>
        <!-- end new plugin --> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <div id="layoutSidenav">
            <div id="layoutSidenav_content">
                <main>
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
        Data Aktivitas Fisik
    </ol>
    <div class="card mb-4">

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border="1">
                    <thead>
                        <tr>
                            <th rowspan="2">No.</th>
                            <th rowspan="2">Nama</th>
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

</main>
</div>
</div>

</body>
</html>
