<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Pendaftaran Perkuliahan</title>
</head>
    <body>
        <form action="/pendaftaran/hasil" method="get">
            <table align="center" cellpadding="10" cellspacing="0">
                <tr>
                    <td colspan="3" align="center">
                        <h2>Form Pendaftaran Perkuliahan</h2>
                    </td>
                </tr>

                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" required></td>
                </tr>

                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td><input type="text" name="tempat_lahir" required></td>
                </tr>

                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><input type="date" name="tanggal_lahir" required></td>
                </tr>

                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jk" value="L" required> Laki-laki
                        <input type="radio" name="jk" value="P"> Perempuan
                    </td>
                </tr>

                <tr>
                    <td>No. HP</td>
                    <td>:</td>
                    <td><input type="text" name="nohp" required></td>
                </tr>

                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><textarea name="alamat" rows="3" cols="30" required></textarea></td>
                </tr>

                <tr>
                    <td>Pilih Jurusan</td>
                    <td>:</td>
                    <td>
                        <select name="jurusan" required>
                            <option value="">-- Pilih Jurusan --</option>
                            <option value="SI">Sistem Informasi (SI)</option>
                            <option value="SIA">Sistem Informasi Akuntansi (SIA)</option>
                            <option value="ILKOM">Ilmu Komputer (ILKOM)</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Biaya Sumbangan Pendidikan</td>
                    <td>:</td>
                    <td><input type="text" name="bsp" required></td>
                </tr>

                <tr>
                    <td>Biaya Semester</td>
                    <td>:</td>
                    <td>
                        <select name="semester" required>
                            <option value="">-- Pilih Semester --</option>
                            <option value="Semester 1">Semester 1</option>
                            <option value="Semester 2">Semester 2</option>
                            <option value="Semester 3">Semester 3</option>
                            <option value="Semester 4">Semester 4</option>
                            <option value="Semester 5">Semester 5</option>
                            <option value="Semester 6">Semester 6</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Metode Bayar</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="metode" value="Bank BCA" required> Bank BCA
                        <input type="radio" name="metode" value="Bank BNI"> Bank BNI
                        <input type="radio" name="metode" value="Indomaret"> Indomaret
                    </td>
                </tr>

                <tr>
                    <td>Tanggal Bayar</td>
                    <td>:</td>
                    <td><input type="date" name="tgl_bayar" required></td>
                </tr>

                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Simpan">
                        <input type="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
