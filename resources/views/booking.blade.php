<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Input Laravel</title>
</head>
    <body>
        <form action="/hasil" method="post">
            
            @csrf 

            <table bgcolor="#5F9EA0" border="0" align="center" width="60%">
                <tr>
                    <td colspan="3" align="center">
                        <h2>PEMBELIAN TIKET KONSER AMAL</h2>
                    </td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" placeholder="Masukan Nama Anda" size="40" required></td>
                </tr>
                <tr valign="top">
                    <td>Studio</td>
                    <td>:</td>
                    <td>
                        <select name="studio" required>
                            <option value="">--Pilih Studio--</option>
                            <option value="Studio 1">Studio 1</option>
                            <option value="Studio 2">Studio 2</option>
                        </select>
                    </td>
                </tr>
                <tr valign="top">
                    <td>Kelas</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="kelas" value="VIP" required>VIP<br>
                        <input type="radio" name="kelas" value="Festival" required>Festival
                    </td>
                </tr>
                <tr>
                    <td>Jumlah Tiket</td>
                    <td>:</td>
                    <td><input type="number" name="jmltiket" placeholder="Jumlah Beli" required></td>
                </tr>
                <tr>
                    <td colspan="3" align="center"><hr>
                        <input type="submit" value="SIMPAN DATA">
                        <input type="reset" value="BATAL"><hr>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>