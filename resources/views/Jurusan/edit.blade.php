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
        <h2>EDIT DATA JURUSAN</h2>
        <form action="/jurusan/update/{{ $jurusan->id }}" method="post">
            @csrf
            <table width="50%">
                <tr>
                    <td width="25%">JURUSAN</td>
                    <td width="25%"><input type="text" name="nama_jurusan" value="{{ $jurusan->nama_jurusan }}"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center><button type="submit" class="button-primary">UBAH</button></center>
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>