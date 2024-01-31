<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Update Pelanggan</title>
</head>

<body>
    @include('layouts.sidebar')
    <h2>Form Update Pelanggan</h2>
    <form method="post" enctype="multipart/form-data">
        @method('post')
        @csrf
        <label for="namaProduk">Nama Pelanggan:</label>
        <input type="text" id="namaProduk" name="nama_pelanggan" placeholder="{{$pelanggan->nama_pelanggan}}">
        <br><br>

        <label for="harga">Alamat:</label>
        <input type="text" id="harga" name="alamat" placeholder="{{$pelanggan->alamat}}">
        <br><br>

        <label for="stok">No telp:</label>
        <input type="text" id="stok" name="nomor_telepon" placeholder="{{$pelanggan->nomor_telepon}}">
        <br><br>

        <input type="submit" value="Tambah Pelanggan">
    </form>
    <a href="{{'pelanggan'}}" type="button" class="btn btn-success kembali">Kembali</a>
</body>

</html>