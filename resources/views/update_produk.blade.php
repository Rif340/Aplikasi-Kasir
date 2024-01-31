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
    <form method="post" enctype="multipart/form-data">
        @method('post')
        @csrf
        <label for="namaProduk">Nama Produk:</label>
        <input type="text" id="namaProduk" name="nama_produk" placeholder="{{$produk->nama_produk}}">
        <br><br>

        <label for="harga">Harga:</label>
        <input type="number" id="harga" name="harga" placeholder="{{$produk->harga}}">
        <br><br>

        <label for="stok">Stok:</label>
        <input type="number" id="stok" name="stok" placeholder="{{$produk->stok}}">
        <br><br>

        <input type="submit" value="Tambah Produk">
    </form>
    <a href="{{'home'}}" type="button" class="btn btn-success kembali">Kembali</a>
</body>

</html>