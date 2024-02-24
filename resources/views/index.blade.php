<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

  <title>kasir.com</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->
  <script src="https://kit.fontawesome.com/cc72c425a9.js" crossorigin="anonymous"></script>
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
  <style>
/*widget css*/
.color1{
    background: #00C292;
}
.color2{
    background: #03A9F3;
}
.color3{
    background: #FB7146;
}
.card-body{
    display: inline-block;
    font-family: "Roboto", sans-serif;
    margin: 10px;
    padding: 20px;
    width: 250px;
    height: 125px;
    color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
}
.float-left{
    float: left;
}
.float-right{
    float: right;
}
.card-body h3{
    margin-top: 15px;
    margin-bottom: 5px;
}
.currency, .count{
    font-size: 30px;
    font-weight: 500;
}
.card-body p{
    font-size: 16px;
    margin-top: 0;
}
.card-body i{
    font-size: 95px;
    opacity: 0.5;
}
  </style>
  <title>Dashboard</title>
</head>

<body>
  @include('layouts.sidebar')
  <div class="container">
     <!--Widget Start-->
     <div class="card-body color1">
            <div class="float-left">
                <h3>
                    <span class="count">{{$jumlah_pelanggan_keseluruhan}}</span>
                    <i class="fa-solid fa-user"  style="font-size: 30px;margin-left:12rem;"></i>
                </h3>
                <p style="margin-top: 2rem;">jumlah Pelanggan</p>
            </div>
            <div class="float-right">
                <i class="pe-7s-users"></i>
            </div>
        </div>
        <!--Widget End-->
        <!--Widget Start-->
        <div class="card-body color2">
            <div class="float-left">
                <h3>
                    <span class="count">{{$jumlah_produk_keseluruhan}}</span>
                    <i class="fa-solid fa-box-archive" style="font-size: 30px;margin-left:12rem;"></i> 
                    
                </h3>
                <p style="margin-top: 2rem;">jumlah Produk</p>
            </div>
            <div class="float-right">
                <i class="pe-7s-users"></i>
            </div>
        </div>
        <!--Widget End-->
        <!--Widget Start-->
        <div class="card-body color3">
            <div class="float-left">
                <h3>
                    <span class="count">{{$jumlah_penjualan_keseluruhan}}</span>
                    <i class="fa-solid fa-chart-line"  style="font-size: 30px;margin-left:12rem;"></i> 
                </h3>
                <p style="margin-top: 2rem;">Jumlah Penjualan</p>
            </div>
            <div class="float-right">
                <i class="pe-7s-browser"></i>
            </div>
        </div>
        <!--Widget End-->
         <!--Widget Start-->
         <div class="card-body color1">
            <div class="float-left">
                <h3>
                    <span class="count">{{$jumlah_karyawan_keseluruhan}}</span>
                    <i class="fa-solid fa-user"  style="font-size: 30px;margin-left:12rem;"></i>
                </h3>
                <p style="margin-top: 2rem;">Jumlah Karyawan</p>
            </div>
            <div class="float-right">
                <i class="pe-7s-browser"></i>
            </div>
        </div>
        <!--Widget End-->
        <script type="text/javascript">
        $('.count').each(function(){
            $(this).prop('Counter',0).animate({
                Counter: $(this).text()
            }, {
                duration:4000,
                easing:'swing',
                step: function(now){
                    $(this).text(Math.ceil(now));
                }
            });
        });
        </script>

    </body>
</div>
</body>

</html>