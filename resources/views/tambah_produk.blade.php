<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kasir.com</title>
</head>

<body>
    @include('layouts.sidebar')
    <h2>Form Tambah Produk</h2>
    <form action="tambah_produk" method="post" enctype="multipart/form-data">
        @method('post')
        @csrf
        <label for="namaProduk">Nama Produk:</label>
        <input type="text" id="namaProduk" name="nama_produk" >
        <br><br>

        <label for="harga">Harga:</label>
        <input type="number" id="harga" name="harga" >
        <br><br>

        <label for="stok">Stok:</label>
        <input type="number" id="stok" name="stok" >
        <br><br>

        <input type="submit" value="Tambah Produk"><br><br>
        <a href="{{ url('produk') }}" type="button" class="btn btn-success kembali">Kembali</a>
    </form>
</body>

</html>