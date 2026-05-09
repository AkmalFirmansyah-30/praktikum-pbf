<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Mahasiswa</title>
</head>
<body>
    <h3 align="center">Edit Data Mahasiswa</h3>
    @foreach($mahasiswa as $mhs)
    <form action="/mahasiswa/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $mhs->id }}"> 
        
        <table align="center">
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input type="text" name="nim" required="required" value="{{ $mhs->nim }}"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" required="required" value="{{ $mhs->nama }}"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td><input type="text" name="jurusan" required="required" value="{{ $mhs->jurusan }}"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="alamat" required="required">{{ $mhs->alamat }}</textarea></td>
            </tr>
            <tr>
                <td><a href="/mahasiswa">Kembali</a></td>
                <td>|</td>
                <td><input type="submit" value="Simpan Data"></td>
            </tr>
        </table>
    </form>
    @endforeach
</body>
</html>