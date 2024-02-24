<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Update Produk</title>
</head>

<body>
    @include('layouts.sidebar')
    <h2>Form Update Produk</h2>
    <form method="post" action="" enctype="multipart/form-data">
        @method('post')
        @csrf
        <label for="namaProduk">Nama Produk:</label>
        <input type="text" id="namaProduk" name="nama_produk" placeholder="{{$produk->nama_produk}}"  required>
        <br><br>

        <label for="harga">Harga:</label>
        <input type="number" id="harga" name="harga" placeholder="{{$produk->harga}}"  required>
        <br><br>

        <label for="stok">Stok:</label>
        <input type="number" id="stok" name="stok" placeholder="{{$produk->stok}}"  required>
        <br><br>

<<<<<<< HEAD
        <input type="submit" value="Update Produk"><br><br>
=======
        <input type="submit" value="Tambah Produk"><br><br>
>>>>>>> a4801e5b03899ea43c0920f7d2ea2b5434f15dca
        <a href="{{ url('produk') }}" type="button" class="btn btn-warning kembali">Kembali</a>
    </form>
</body>

</html>
