<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Pelanggan</title>
</head>

<body>
    @include('layouts.sidebar')
    <h2>Form Tambah Pelanggan</h2>
    <form action="tambah_pelanggan" method="post" enctype="multipart/form-data">
        @method('post')
        @csrf
        <label for="namaProduk">Nama:</label>
        <input type="text" id="namaProduk" name="nama_pelanggan">
        <br><br>

        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" name="alamat">
        <br><br>

        <label for="telp">No Telp:</label>
        <input type="text" id="telp" name="nomor_telepon">
        <br><br>

        <input type="submit" value="Tambah Pelanggan">
    </form>
</body>

</html>