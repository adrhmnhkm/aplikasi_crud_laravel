<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD - Data Barang</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/bootstrap.min.css') }}"
</head>
<body>

    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1 class="text-center">Data Barang yang Tersedia</h1>

                <button class="btn btn-primary"><a class="text-reset text-decoration-none" href="/barang/tambah">+ Tambah Barang</a></button>

                <br>
                <br>

                <table class="table table-bordered">
                    <tr>
                        <th>Nama</th>
                        <th>Stok</th>
                        <th>Opsi</th>
                    </tr>
                 @foreach($data_barang as $b)
                 <tr>
                     <td>{{ $b->barang_nama }}</td>
                     <td>{{ $b->barang_stok }}</td>
                     <td>
                         <a class="btn btn-warning btn-sm" href="/barang/edit/{{ $b->barang_id }}">Edit</a>
                         |
                         <a class="btn btn-danger btn-sm" href="/barang/hapus/{{ $b->barang_id }}">Hapus</a>
                     
                     </td>
                 </tr>
                 @endforeach    
                 </table>
    
</body>
</html>