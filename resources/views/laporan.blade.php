<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Toko PNC Mart</title>
    <style>
        table {
            border-collapse: collapse;
        }
        {
            width: 100%;
        }
        th{
            height: 50px;
        }
        b {
            background-color: #228B22;
            border: none;
            color: white;
            padding: 10px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        c {
            background-color: #FFBC00;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        d {
            background-color: #B22222;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
    </style>
</head>
<body align="center">
    <table align="center" width=40%>
        <tr>
            <td align="center">
                <h2>Data Karyawan Toko PNC Mart</h2>
            </td>
        </tr>
        <tr>
            <td>Jl Dr. Soetomo Cilacap Selatan Cilacap | No.1 | Telp : (0282) 537992 <hr></td>
        </tr>
    </table>
    <br>
    <table align="center" border=1>
        <tr>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Umur</th>
            <th>Alamat</th>
        </tr>
        @foreach ($karyawan as $p)
        <tr>
            <td align="left">{{ $p->nama }}</td>
            <td align="left">{{ $p->jabatan }}</td>
            <td align="left">{{ $p->umur }}</td>
            <td align="left">{{ $p->alamat }}</td>
        </tr>
        @endforeach
    </table>

    <p>Dicetak di Cilacap, pada <?php echo date('l, d-m-Y H:i:s'); ?></p>
</body>
</html>