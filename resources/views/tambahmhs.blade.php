<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h3 align="center">Input Data Mahasiswa</h3>
    <br>
    <form action="/mahasiswa/store" method="post">
        {{ csrf_field() }}
        <table align="center">
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input type="text" name="nim" required="required"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" required="required"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td><input type="text" name="jurusan" required="required"></td>
            </tr>
            <tr>
                <td>Prodi</td>
                <td>:</td>
                <td><input type="text" name="prodi" required="required"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="alamat" required="required"></textarea></td>
            </tr>
            <tr>
                <td><a href="/mahasiswa">Kembali</a></td>
                <td>|</td>
                <td><input type="submit" value="Simpan Data"></td>
            </tr>
        </table>
    </form>
</body>
</html>