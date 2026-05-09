<!DOCTYPE html>
<html>
<head>
    <title>Form Pemesanan Tiket</title>
</head>
<body style="text-align: center; font-family: sans-serif; margin-top: 50px;">
    
    <h2>Data Pemesanan Tiket</h2>
    <hr style="border: 2px solid black; width: 450px; margin: 0 auto;">
    <br>

    <form action="/pesan-tiket/hasil" method="POST">
        @csrf
        <table border="0" align="center" style="text-align: left;">
            <tr>
                <td width="180">Masukkan Nama Penumpang</td>
                <td>:</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr valign="top">
                <td>Alamat Penumpang</td>
                <td>:</td>
                <td><textarea name="alamat" rows="4" cols="30" required></textarea></td>
            </tr>
            <tr>
                <td>Kota Tujuan</td>
                <td>:</td>
                <td>
                    <select name="tujuan" required>
                        <option value="Solo">Solo</option>
                        <option value="Semarang">Semarang</option>
                        <option value="Yogyakarta">Yogyakarta</option>
                        <option value="Surabaya">Surabaya</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jumlah Beli</td>
                <td>:</td>
                <td><input type="number" name="jumlah" required></td>
            </tr>
            <tr>
                <td colspan="3" style="padding-top: 15px;">
                    <input type="submit" value="Pesan">
                    <input type="reset" value="Batal">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>