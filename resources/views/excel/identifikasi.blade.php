<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tinggi</th>
            <th>Berat</th>
            <th>Kategori</th>
        </tr>
    </thead>
    <tbody>
    @php $no = 1 @endphp
    @foreach($datas as $data)
        <tr>
            <td> {{ $no++ }} </td>
            <td> {{ $data -> users -> name}} </td>
            <td> {{ $data -> kategori}} </td>
            <td> {{ $data -> tinggi}}</td>
            <td> {{ $data -> berat_asli}} </td>
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
        </tr>
    @endforeach
    </tbody>
</table>