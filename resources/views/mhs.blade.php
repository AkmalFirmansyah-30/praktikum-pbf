<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Data Mahasiswa</title>
    <style>
        body {
            background-color: #008000; 
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            padding-top: 50px;
        }

        .container {
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
            font-weight: bold;
        }

        table {
            border-collapse: collapse;
            background-color: #FFC0CB;
            margin: 0 auto;
        }

        table, th, td {
            border: 2px solid #A52A2A;
        }

        th, td {
            padding: 8px 15px;
            text-align: left;
            font-size: 14px;
        }

        th {
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>TABEL DATA MAHASISWA</h2>

        <table>
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>NAMA</th>
                    <th>ALAMAT</th>
                    <th>TELP</th>
                    <th>TTL</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>12106773</td>
                    <td>Yudhistira</td>
                    <td>Jl. Perumnas 1 Tangerang</td>
                    <td>089755767565</td>
                    <td>Padang, 15 Agustus 1990</td>
                </tr>
                <tr>
                    <td>1210899</td>
                    <td>Adi Supriyatna</td>
                    <td>Jl. Raya Jatiwaringin No.8</td>
                    <td>085697613939</td>
                    <td>Jakarta, 17 Oktober 1985</td>
                </tr>
                <tr>
                    <td>1210893</td>
                    <td>Putri Rahmawati</td>
                    <td>Jl. Raya Kramat No. 98</td>
                    <td>085645612342</td>
                    <td>Jakarta, 20 Oktober 1986</td>
                </tr>
            </tbody>
        </table>
    </div>

</body>
</html>