<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
        <b>
            <h2>LIST DATA JURUSAN</h2>
            <a href="/jurusan/create" class="button-primary"> Tambah Data</a>
            @if (session('success'))
                <p class="text-success">{{ session('success') }}</p>
            @endif
            @if (session('error'))
                <p class="text-danger">{{ session('error') }}</p>
            @endif

            <table cellpadding="10">
                <tr>
                    <th>NO</th>
                    <th>JURUSAN</th>
                    <th>ACTION</th>
                </tr>
                @foreach ($jurusan as $j)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $j->nama_jurusan }}</td>
                        <td>
                            <a href="/jurusan/edit/{{ $j->id }}" class="button-warning">EDIT</a>
                            <a href="/jurusan/destroy/{{ $j->id }}" onclick="return confirm('yakin hapus?')" class="button-danger">HAPUS</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </b>
    </center>                
</body>
</html>