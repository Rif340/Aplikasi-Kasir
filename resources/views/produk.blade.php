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
    <h1 class="judul">Data Produk</h1>
    <div class="container">
    <a href="{{'tambah_produk'}}" type="button" class="btn btn-success">Tambah Produk</a>
    
    <table style="margin-top: 2rem;" class="table">
      <thead>
        <tr>
          <th scope="col" class="table-warning">ID Produk</th>
          <th scope="col" class="table-warning">Nama Produk</th>
          <th scope="col" class="table-warning">Harga</th>
          <th scope="col" class="table-warning">Stok</th>
          <th scope="col" class="table-warning">Detail</th>
        </tr>
      </thead>
      <tbody>
      @foreach($produk as $produk)
        <tr>
        <td>{{$produk->produk_id}}</td>
        <td>{{$produk->nama_produk}}</td>
        <td>{{$produk->harga}}</td>
        <td>{{$produk->stok}}</td>
        <td class="table-secondary">
            <a href="/hapus-produk/{{$produk->produk_id}}" class="btn btn-danger">hapus</a>
            <a href="/update_produk/{{$produk->produk_id}}" class="btn btn-success">update</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <a href="trash-produk" type="submit">Produk Yang Dihapus</a>
  </div>
</body>

</html>