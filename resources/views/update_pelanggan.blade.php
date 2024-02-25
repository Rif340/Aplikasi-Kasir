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

    @error('nomor_telepon')
        <div class="alert alert-danger" role="alert" style="text-align: center; width:50%; margin:auto">kalimat mencapai batas</div>
        <script>
               setTimeout(function () {
                   document.querySelector('.alert').style.display = 'none';
               }, 3000); // Menyembunyikan alert setelah 3 detik
           </script>
          @enderror('nomor_telepon')

    <h2>Form Update Pelanggan</h2>
    <form method="post" enctype="multipart/form-data">
        @method('post')
        @csrf
        <label for="nama_pelanggan">Nama Pelanggan:</label>
        <input type="text" id="nama_pelanggan" name="nama_pelanggan" placeholder="{{$pelanggan->nama_pelanggan}}">
        <br><br>

        <label for="harga">Alamat:</label>
        <input type="text" id="harga" name="alamat" placeholder="{{$pelanggan->alamat}}">
        <br><br>

        <label for="stok">No telp:</label>
        <input type="number" id="stok" name="nomor_telepon" placeholder="{{$pelanggan->nomor_telepon}}">
        <br><br>

        <input type="submit" value="Update Pelanggan"><br><br>
        <a href="{{ url('pelanggan') }}" type="button" class="btn btn-warning kembali">Kembali</a>
    </form>
    <div class="container">
   
    </div>
</body>

</html>