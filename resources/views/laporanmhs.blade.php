<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Mahasiswa</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th { height: 50px; }
    </style>
</head>
<body align="center">
    <table align="center" width="40%">
        <tr>
            <td align="center"><h2>Laporan Data Mahasiswa Teknik Informatika</h2></td>
        </tr>
        <tr>
            <td>Politeknik Negeri Cilacap | Jl Dr. Soetomo Cilacap Selatan | Telp : (0282) 537992 <hr></td>
        </tr>
    </table>
    <br>
    <table align="center" border="1">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Alamat</th>
        </tr>
        @foreach ($mahasiswa as $mhs)
        <tr>
            <td align="left">{{ $mhs->nim }}</td>
            <td align="left">{{ $mhs->nama }}</td>
            <td align="left">{{ $mhs->jurusan }}</td>
            <td align="left">{{ $mhs->alamat }}</td>
        </tr>
        @endforeach
    </table>

    <p align="center">Dicetak di Cilacap, pada <?php echo date('l, d-m-Y H:i:s'); ?></p>
</body>
</html>