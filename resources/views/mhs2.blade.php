<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Biodata Mhs</title>
</head>
    <body>
        <h1>Form Biodata</h1>
        
        <form action="/biodata/proses" method="post">
            @csrf 
            Nama  : <input type="text" name="nama"> <br><br>
            Kelas : <input type="text" name="kelas"> <br><br>
            <input type="submit" value="Proses">
        </form>
        
    </body>
</html>