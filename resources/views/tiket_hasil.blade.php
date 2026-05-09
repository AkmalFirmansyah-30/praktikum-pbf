<!DOCTYPE html>
<html>
<head>
    <title>Output Pemesanan Tiket</title>
</head>
<body>
    
    <div style="width: 400px; margin: 50px auto 0;">
        
        <h2 style="text-align: center;">Data Pemesanan Tiket</h2>
        <br>
        
        <table border="0" width="100%">
            <tr>
                <td width="150">Nama Penumpang</td>
                <td width="10">:</td>
                <td>{{ $nama }}</td>
            </tr>
            <tr valign="top">
                <td>Alamat Penumpang</td>
                <td>:</td>
                <td>{{ $alamat }}</td>
            </tr>
            <tr>
                <td>Kota Tujuan</td>
                <td>:</td>
                <td>{{ $tujuan }}</td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td>{{ $harga }}</td>
            </tr>
            <tr>
                <td>Diskon</td>
                <td>:</td>
                <td>{{ $diskon }}</td>
            </tr>
            <tr>
                <td>Total Harga</td>
                <td>:</td>
                <td>{{ $total_bayar }}</td>
            </tr>
        </table>
        
        <br>
        <a href="/pesan-tiket" style="color: purple; text-decoration: underline;">-Kembali-</a>
        <hr style="margin-top: 5px; border: 0; border-top: 1px solid black;">

    </div>

</body>
</html>