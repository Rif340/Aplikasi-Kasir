<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Produk</title>
</head>

<body>
    @include('layouts.sidebar')
    <h2>Form Tambah Produk</h2>
    <form action="tambah_produk" method="post" enctype="multipart/form-data">
        @method('post')
        @csrf
        <label for="produk_id">ID PRODUK:</label>
        <input type="text" id="produk_id" name="produk_id" >
        <br><br>

        <label for="namaProduk">Nama Produk:</label>
        <input type="text" id="namaProduk" name="nama_produk" >
        <br><br>

        <label for="harga">Harga:</label>
        <input type="number" id="harga" name="harga" >
        <br><br>

        <label for="stok">Stok:</label>
        <input type="number" id="stok" name="stok" >
        <br><br>

        <input type="submit" value="Tambah Produk">
    </form>
    <a href="{{'home'}}" type="button" class="btn btn-success kembali">Kembali</a>
</body>

</html>