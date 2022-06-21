<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Sekolah</th>
            <th>Usia</th>
        </tr>
    </thead>
    <tbody>
    @php $no = 1 @endphp
    @foreach($datas as $data)
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