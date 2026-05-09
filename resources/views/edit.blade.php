<!DOCTYPE html>
<html>
<head>
    <title>Toko PNC Mart</title>
</head>
<body>
    <h3 align="center">Edit Data Karyawan</h3>
    @foreach($karyawan as $p)
    <form action="/karyawan/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->karyawan_id }}"> 
        
        <table align="center">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" required="required" value="{{ $p->nama }}"></td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>:</td>
                <td><input type="text" name="jabatan" required="required" value="{{ $p->jabatan }}"></td>
            </tr>
            <tr>
                <td>Umur</td>
                <td>:</td>
                <td><input type="number" name="umur" required="required" value="{{ $p->umur }}"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="alamat" required="required">{{ $p->alamat }}</textarea></td>
            </tr>
            <tr>
                <td><a href="/karyawan">Kembali</a></td>
                <td>|</td>
                <td><input type="submit" value="Simpan Data"></td>
            </tr>
        </table>
    </form>
    @endforeach
</body>
</html>