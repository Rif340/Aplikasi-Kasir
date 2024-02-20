<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('assets/css/sidebar.css')}}">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

  <title>Side Navbar</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->
  <script src="https://kit.fontawesome.com/cc72c425a9.js" crossorigin="anonymous"></script>
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
</head>

<body>
  <div id="viewport">
    <!-- Sidebar -->
    <div id="sidebar">
      <header>
        <a href="#">K A S I R</a>
      </header>
      <ul class="nav">
      <li>
          <a href="{{ url('dashboard') }}">
          <i class="fa-solid fa-shop"></i>Dashboard
          </a>
        </li>
        <li>
          <a href="{{ url('home') }}">
          <i class="fa-solid fa-box-archive"></i> Data Produk
          </a>
        </li>
        <li>
          <a href="{{ url('pelanggan') }}">
          <i class="fa-solid fa-user"></i> Data Pelanggan
          </a>
        </li>
        <li>
          <a href="{{ url('penjualan') }}">
          <i class="fa-solid fa-chart-line"></i> Data Penjualan
          </a>
        </li>
        <li>
          <a href="{{ url('tambah_penjualan') }}">
          <i class="fa-solid fa-cart-plus"></i> Tambah Penjualan
          </a>
        </li>
        <li>
          <a href="{{ url('logout') }}">
          <i class="fa-solid fa-right-from-bracket"></i></i> Logout
          </a>
        </li>
      </ul>
    </div>
    <!-- Content -->
    <div id="content">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="#"><i class="zmdi zmdi-notifications text-danger"></i>
              </a>
            </li>
            <li><a href="#">{{Auth::user()->username}} {{Auth::user()->level}}</a></li>
          </ul>
        </div>
      </nav>
      <div id="page-content-wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">

            </div>
          </div>
        </div>
      </div>
</body>

</html>