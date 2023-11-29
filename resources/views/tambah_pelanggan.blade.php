<!DOCTYPE html>
<html lang="en">
<head>
    
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Produk</title>
</head>
<body>
    <h2>Form Tambah Pelanggan</h2>
    <form action="/proses_tambah_produk" method="post">
        <label for="namaProduk">Nama:</label>
        <input type="text" id="namaProduk" name="namaProduk" required>
        <br>

        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" name="alamat" required>
        <br>

        <label for="telp">No Telp:</label>
        <input type="tel" id="telp" name="telp" required>
        <br>

        <input type="submit" value="Tambah Pelanggan">
    </form>
</body>
</html>
