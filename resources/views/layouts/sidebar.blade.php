<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('assets/css/sidebar.css')}}">
  
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
          <a href="{{'home'}}">
            <i class="zmdi zmdi-view-dashboard"></i> Data Produk
          </a>
        </li>
        <li>
          <a href="/pelanggan">
            <i class="zmdi zmdi-link"></i> Data Pelanggan
          </a>
        </li>
        <li>
          <a href="/penjualan">
            <i class="zmdi zmdi-widgets"></i> Data Penjualan
          </a>
        </li>
        <li>
          <a href="/tambah_penjualan">
            <i class="zmdi zmdi-widgets"></i> Tambah Penjualan
          </a>
        </li>
        <li>
          <a href="/logout">
            <i class="zmdi zmdi-calendar"></i> Logout
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