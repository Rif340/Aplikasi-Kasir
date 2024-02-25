<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>kasir.com</title>
  <link rel="stylesheet" href="{{asset('assets/css/produk.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/boostrap.css')}}">
</head>

<body>
  @include('layouts.sidebar')


  @if (session()->has('info'))
  <div class="alert alert-success" role="alert" style="text-align: center; width:50%; margin:auto">
    {{ session('info') }}
  </div>
  @endif
  @if(session('info'))
  <script>
    setTimeout(function () {
      document.querySelector('.alert').style.display = 'none';
    }, 3000); // Menyembunyikan alert setelah 3 detik
  </script>
  @endif

  @if (session()->has('info2'))
  <div class="alert alert-success" role="alert" style="text-align: center; width:50%; margin:auto">
    {{ session('info2') }}
  </div>
  @endif
  @if(session('info2'))
  <script>
    setTimeout(function () {
      document.querySelector('.alert').style.display = 'none';
    }, 3000); // Menyembunyikan alert setelah 3 detik
  </script>
  @endif

  @if (session()->has('info3'))
  <div class="alert alert-danger" role="alert" style="text-align: center; width:50%; margin:auto">
    {{ session('info3') }}
  </div>
  @endif
  @if(session('info3'))
  <script>
    setTimeout(function () {
      document.querySelector('.alert').style.display = 'none';
    }, 3000); // Menyembunyikan alert setelah 3 detik
  </script>
  @endif

  <h1 class="judul">Data Pelanggan</h1>
  <div class="container">
    <a href="{{'tambah_pelanggan'}}" type="button" class="btn btn-success">Tambah pelanggan</a>
    <table style="margin-top: 2rem;" class="table">
      <thead>
        <tr>
          <th scope="col" class="table-warning">Pelanggan ID</th>
          <th scope="col" class="table-warning">Nama Pelanggan</th>
          <th scope="col" class="table-warning">Alamat</th>
          <th scope="col" class="table-warning">Nomor Telepon</th>
          <th scope="col" class="table-warning">Detail</th>
        </tr>
      </thead>
      <tbody>
        @foreach($pelanggan as $pelanggan)
        <tr>
          <td>{{$pelanggan->pelanggan_id}}</td>
          <td>{{$pelanggan->nama_pelanggan}}</td>
          <td>{{$pelanggan->alamat}}</td>
          <td>{{$pelanggan->nomor_telepon}}</td>
          <td class="table-secondary">
            <a href="/hapus-pelanggan/{{$pelanggan->pelanggan_id}}" class="btn btn-danger">hapus</a>
            <a href="/update-pelanggan/{{$pelanggan->pelanggan_id}}" class="btn btn-success">update</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <a href="trash-pelanggan" type="submit">Pelanggan Yang Dihapus</a>
  </div>
</body>

</html>