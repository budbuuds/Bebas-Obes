<table>
    <thead>
        <tr>
            <th rowspan="2">No.</th>
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
    <tbody>
    @php $no = 1 @endphp
    @foreach($datas as $data)
        <tr>
            <td> {{ $no++ }} </td>
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