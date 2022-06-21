<table>
    <thead>
        <tr>
            <th rowspan="2">No.</th>
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
    <tbody>
    @php $no = 1 @endphp
    @foreach($datas as $data)
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