<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistem Mahasiswa PNC</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th { height: 50px; }
        b { background-color: #228B22; border: none; color: white; padding: 10px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); }
        c { background-color: #FFBC00; border: none; color: white; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); }
        d { background-color: #B22222; border: none; color: white; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); }
    </style>
</head>
<body align="center">
    <table align="center" width="40%">
        <tr>
            <td align="center"><h2>Data Mahasiswa PNC</h2></td>
        </tr>
        <tr>
            <td>Politeknik Negeri Cilacap | Jl Dr. Soetomo Cilacap Selatan | Telp : (0282) 537992 <hr></td>
        </tr>
        <tr>
            <td align="center">
                <a href="/mahasiswa/tambah"><b align="center">+Tambah Data</b></a> | 
                <a href="/mahasiswa/laporan" target="_blank"><b align="center">Cetak Laporan</b></a>
            </td>
        </tr>
    </table>
    <br>
    <table align="center" border="1">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Prodi</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
        @foreach ($mahasiswa as $mhs)
        <tr>
            <td align="center">{{ $mhs->nim }}</td>
            <td align="center">{{ $mhs->nama }}</td>
            <td align="center">{{ $mhs->jurusan }}</td>
            <td align="center">{{ $mhs->prodi }}</td>
            <td align="center">{{ $mhs->alamat }}</td>
            <td align="center">
                <a href="/mahasiswa/edit/{{ $mhs->id }}"><c>Edit</c></a>
                <a href="/mahasiswa/hapus/{{ $mhs->id }}"><d>Hapus</d></a>
            </td>
        </tr>
        @endforeach 
    </table>
</body>
</html>