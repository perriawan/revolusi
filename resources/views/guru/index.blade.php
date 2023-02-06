<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    th {
    background-color: #aa048e;
    color: white;
    }
    table, th, td {
    border: 1px solid;
    }
    </style>
</head>
<body>
    <center>
        <b>
            <h1>LIST DATA GURU</h1>
            <a href="/guru/create" class="button-primary">Tambah Data</a>
            <table cellpadding="10%">
                <tr>
                    <th>NO</th>
                    <th>NIP</th>
                    <th>NAMA GURU</th>
                    <th>JENIS KELAMIN</th>
                    <th>ALAMAT</th>
                    <th>PASSWORD</th>
                    <th>ACTION</th>
                </tr>
                @foreach ($guru as $g )
                <tr>
                    <td>{{  $loop->iteration }}</td>
                    <td>{{  $g->nip }}</td>
                    <td>{{  $g->nama_guru }}</td>
                    <td>{{  $g->jk == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                    <td>{{  $g->alamat }}</td>
                    <td>{{  $g->password }}</td>
                    <td>
                        <a href="/guru/edit/{{  $g->id }}" class="button-warning">EDIT</a>
                        <a type="button" href="/guru/destroy/{{ $g->id }}" onclick="return confirm('Yakin Hapus?')" class="button=danger">HAPUS</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </b>
    </center>

</body>
</html>