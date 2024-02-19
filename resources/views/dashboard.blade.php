<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->
  <script src="https://kit.fontawesome.com/cc72c425a9.js" crossorigin="anonymous"></script>
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
 

  <title>Dashboard</title>
</head>

<body>
  @include('layouts.sidebar')
  <div class="container">
  <div class="row row-cols-1 row-cols-md-3 g-4">

  <div class="card text-bg-warning mb-3" style="max-width: 18rem; margin-left:2rem;text-align:center;">
  <div class="card-header">Jumlah Produk</div>
  <div class="card-body row">
  <i class="fa-solid fa-box-archive col" style="font-size:50px"> {{$jumlah_produk_keseluruhan}}</i>
  </div>
</div>

<div class="card text-bg-warning mb-3" style="max-width: 18rem; margin-left:2rem; text-align:center;">
  <div class="card-header" >Jumlah Pelanggan</div>
  <div class="card-body">
    <i class="fa-solid fa-user" style="font-size:50px"> {{$jumlah_pelanggan_keseluruhan}}</i>
  </div>
</div>

<div class="card text-bg-warning mb-3" style="max-width: 18rem; margin-left:2rem;text-align:center;">
  <div class="card-header">Jumlah Penjualan</div>
  <div class="card-body">
  <i class="fa-solid fa-chart-line" style="font-size:50px"> {{$jumlah_penjualan_keseluruhan}}</i>
  </div>
</div>

</div>
</div>
</body>

</html>