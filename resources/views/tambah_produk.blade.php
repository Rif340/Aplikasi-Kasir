<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Produk</title>
</head>
<body>
    <h2>Form Tambah Produk</h2>
    <form action="/proses_tambah_produk" method="post">
        <label for="namaProduk">Nama Produk:</label>
        <input type="text" id="namaProduk" name="namaProduk" required>
        <br>

        <label for="harga">Harga:</label>
        <input type="number" id="harga" name="harga" required>
        <br>

        <label for="stok">Stok:</label>
        <input type="number" id="stok" name="stok" required>
        <br>

        <input type="submit" value="Tambah Produk">
    </form>
</body>
</html>
