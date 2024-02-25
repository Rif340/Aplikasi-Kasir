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
    <h1 class="judul">Data Penjualan</h1>
    <div class="container">
    <a href="{{'tambah_penjualan'}}" type="button" class="btn btn-success">Tambah Penjualan</a>
    <table style="margin-top: 2rem;" class="table">
      <thead>
        <tr>
          <th scope="col" class="table-warning">Penjualan ID</th>
          <th scope="col" class="table-warning">Tanggal Penjualan</th>
          <th scope="col" class="table-warning">Nama Pelanggan</th>
          <th scope="col" class="table-warning">Total Harga</th>
          <th scope="col" class="table-warning">Detail</th>
        </tr>
      </thead>
      <tbody>
      @foreach($penjualan as $penjualan)
        <tr>
        <td>{{$penjualan->penjualan_id}}</td>
        <td>{{$penjualan->tanggal_penjualan}}</td>
        <td>{{$penjualan->nama_pelanggan}}</td>
        <td>{{$penjualan->TotalHarga}}</td>
        <td class="table-secondary">
            <a href="/detail-penjualan/{{$penjualan->penjualan_id}}" class="btn btn-primary">detail</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>

</html>