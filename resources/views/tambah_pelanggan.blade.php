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
    @error('nomor_telepon')
        <div class="alert alert-danger" role="alert" style="text-align: center; width:50%; margin:auto">angka mencapai batas</div>
        <script>
               setTimeout(function () {
                   document.querySelector('.alert').style.display = 'none';
               }, 3000); // Menyembunyikan alert setelah 3 detik
           </script>
          @enderror('nomor_telepon')
    <h2>Form Tambah Pelanggan</h2>
    <form action="tambah_pelanggan" method="post" enctype="multipart/form-data">
        @method('post')
        @csrf
        <label for="nama_pelanggan">Nama:</label>
        <input type="text" id="nama_pelanggan" name="nama_pelanggan" required>
        <br><br>

        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" name="alamat" required>
        <br><br>

        <label for="telp">No Telp:</label>
        <input type="number" id="telp" name="nomor_telepon" required>
      
        <br><br>

        <input type="submit" value="Tambah Pelanggan"><br><br>
        <a href="{{ url('pelanggan') }}"  class="btn btn-warning">Kembali</a>
    </form>
    
</body>

</html>