<html>

<head>
    <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }

    </style>
    <center>
        <h3>{{ $items->detail_psikotest->judul }}</h3>
        <h5>Dikerjakan oleh : {{ $items->user->name }}</h5>
        <h6>Order ID #{{ $items->id }}</h6>
    </center>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>No</th>
                <th>Soal</th>
                <th>Jawaban</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach ($hasil as $p)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $p->soal->soal }}</td>
                    <td>{{ $p->opsi->opsi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
