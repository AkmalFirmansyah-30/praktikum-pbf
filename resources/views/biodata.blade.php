<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kelas Laravel</title>
</head>
<body>
    <h2>Belajar Passing Data Array</h2>
    <p>Nama : {{$nm}}</p>
    <p>Mata Kuliah yang di Ambil :</p>
    <ul>
    @foreach ($makul as $m)
    <li>{{$m}}</li>
    @endforeach
    </ul>
</body>
</html>