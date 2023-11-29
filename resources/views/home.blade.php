<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <link rel="stylesheet" href="{{asset('assets/css/home.css')}}">
</head>
<body>
    
@include('layouts.navbar')
    <div class="content">
        <h2>Detail Produk</h2>
        <form action="/proses_detail_produk" method="post">
            <label for="namaProduk">Nama:</label>
            <input type="text" id="namaProduk" name="namaProduk" value="Nama Produk" readonly>
            <br>

            <label for="harga">Harga:</label>
            <input type="text" id="harga" name="harga" value="$100" readonly>
            <br>

            <label for="stok">Stok:</label>
            <input type="text" id="stok" name="stok" value="100" readonly>
            <br>

            <!-- tambahkan kolom lain sesuai kebutuhan -->

            <button type="submit">Beli</button>
        </form>
    </div>
</body>
</html>
