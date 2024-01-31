<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <link rel="stylesheet" href="{{asset('assets/css/home.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/boostrap.css')}}">
</head>

<body>
    @include('layouts.sidebar')
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
  </div>
</body>

</html>
