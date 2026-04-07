<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Laravel</title>
</head>
<body>
    <form action="/formulir/hasil" method="get">
        <table align="center" cellpadding="8" cellspacing="0">
            <tr>
                <td colspan="3" align="center">
                    <h3>Formulir Pendaftaran Kelas Laravel</h3>
                </td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input type="number" name="nim" required></td>
            </tr>

            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" required></td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="almt" rows="3" cols="30"></textarea></td>
            </tr>

            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="tglhr"></td>
            </tr>

            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" name="jk" value="Laki-laki"> Laki-laki
                    <input type="radio" name="jk" value="Perempuan"> Perempuan
                </td>
            </tr>

            <tr>
                <td>Pekerjaan</td>
                <td>:</td>
                <td>
                    <select name="kerja">
                        <option value="">-- Pilih Pekerjaan --</option>
                        <option value="karyawan">Karyawan</option>
                        <option value="mahasiswa">Mahasiswa</option>
                        <option value="wiraswasta">Wirausaha</option>
                        <option value="belumkerja">Belum Kerja</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="email" name="email" placeholder="Email Anda"></td>
            </tr>

            <tr>
                <td>Hobi</td>
                <td>:</td>
                <td>
                    <input type="checkbox" name="hobi1" value="Membaca"> Olahraga
                    <input type="checkbox" name="hobi2" value="Olahraga"> Coding
                    <input type="checkbox" name="hobi3" value="Musik"> UKM
                </td>
            </tr>

            <tr>
                <td colspan="3" align="center">
                    <input type="submit" value="Simpan">
                    <input type="reset" value="Batal">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>