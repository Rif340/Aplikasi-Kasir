<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>kasir.com</title>
</head>
<body>
    @include('layouts.sidebar')
    <div class="container">
    <h1 class="text-center">Detail Penjualan</h1>
    <table class="table table-dark table-striped-columns">
  <thead>
    <tr>
      <th scope="col">Nama Produk</th>
      <th scope="col">Harga</th>
      <th scope="col">jumlah_produk</th>
      <th scope="col">Sub Total</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($detail as $detail) 
    <tr>
      <td scope="row">{{$detail->nama_produk}}</td>
      <td>{{$detail->harga}}</td>
      <td>{{$detail->jumlah_produk}}</td>
      <td>{{$detail->subtotal}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
<h1> Total Harga : {{ number_format($detail->TotalHarga, 0, ',', '.') }}</h1>
<a href="{{ url('penjualan') }}" type="button" class="btn btn-warning kembali">Kembali</a>
<a href="/cetak-struk/{{$detail->penjualan_id}}" class="btn btn-success">cetak</a>

</div>
</body>
</html>