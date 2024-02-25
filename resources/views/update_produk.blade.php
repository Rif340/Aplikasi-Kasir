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

    @error('nama_produk')
        <div class="alert alert-danger" role="alert" style="text-align: center; width:50%; margin:auto">kalimat mencapai batas</div>
        <script>
               setTimeout(function () {
                   document.querySelector('.alert').style.display = 'none';
               }, 3000); // Menyembunyikan alert setelah 3 detik
           </script>
          @enderror('nama_produk')

    <form method="post" action="" enctype="multipart/form-data">
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

        <input type="submit" value="Update Produk"><br><br>
        <a href="{{ url('produk') }}" type="button" class="btn btn-warning kembali">Kembali</a>
    </form>
</body>

</html>