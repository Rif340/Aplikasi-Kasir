<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kasir.com</title>
</head>
<body>
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
    <h1 class="judul">Data karyawan</h1>
    <div class="container">
    <table style="margin-top: 2rem;" class="table">
      <thead>
        <tr>
          <th scope="col" class="table-warning">ID</th>
          <th scope="col" class="table-warning">nama_petugas</th>
          <th scope="col" class="table-warning">level</th>
        </tr>
      </thead>
      <tbody>
      @foreach($karyawan as $karyawan)
        <tr>
        <td>{{$karyawan->id}}</td>
        <td>{{$karyawan->nama_petugas}}</td>
        <td>{{$karyawan->level}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <a href="{{ url('index') }}" type="button" class="btn btn-warning kembali">Kembali</a>
  </div>
</body>

</html>

</body>
</html>
