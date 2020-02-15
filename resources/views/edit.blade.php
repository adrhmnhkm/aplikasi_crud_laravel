<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/bootstrap.min.css') }}"
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1 class="text-center">Edit Data Barang</h1>

                <h3 class="text-center"><a class="text-center" href="/barang">Kembali</a></h3>

                <br>
                <br>

                @foreach($data_barang as $d)
                <form action="/barang/update" method="post">
                <div class="form-group">
                    {{ csrf_field() }}
                   <input type="hidden" name="id" value="{{ $d->barang_id }}"> <br />
                   <label for="exampleInputEmail1">Nama</label>
                   <input type="text" class="form-control" required="required" name="nama" value="{{ $d->barang_nama }}"> <br />
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Stok</label>
                    <input type="text" class="form-control" required="required" name="stok" value="{{ $d->barang_stok }}"> <br />
                </div> 
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                  
                </form>
                @endforeach

                </form>


</body>

</html>