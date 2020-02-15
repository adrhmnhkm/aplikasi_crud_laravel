<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Barang</title>
</head>
<body>
    
    <h1>Data Barang</h1>

    <a href="/barang"></a>

    <br>
    <br>

    <form action="/barang/masukan_data" method="post">
        {{ csrf_field() }}
        Nama <input type="text" name="nama" required="required"> <br />
        Stok <input type="text" name="stok" required="required"> <br />
        <input type="submit" value="Simpan Data">
    </form>

</body>
</html>