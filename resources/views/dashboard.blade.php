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

  <style>
    /*----  Main Style  ----*/
    #cards_landscape_wrap-2 {
      text-align: center;
      background: #F7F7F7;
    }

    #cards_landscape_wrap-2 .container {
      padding-top: 80px;
      padding-bottom: 100px;
    }

    #cards_landscape_wrap-2 a {
      text-decoration: none;
      outline: none;
    }

    #cards_landscape_wrap-2 .card-flyer {
      border-radius: 5px;
    }

    #cards_landscape_wrap-2 .card-flyer .image-box {
      background: #ffffff;
      overflow: hidden;
      box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.50);
      border-radius: 5px;
    }

    #cards_landscape_wrap-2 .card-flyer .image-box img {
      -webkit-transition: all .9s ease;
      -moz-transition: all .9s ease;
      -o-transition: all .9s ease;
      -ms-transition: all .9s ease;
      width: 100%;
      height: 200px;
    }

    #cards_landscape_wrap-2 .card-flyer:hover .image-box img {
      opacity: 0.7;
      -webkit-transform: scale(1.15);
      -moz-transform: scale(1.15);
      -ms-transform: scale(1.15);
      -o-transform: scale(1.15);
      transform: scale(1.15);
    }

    #cards_landscape_wrap-2 .card-flyer .text-box {
      text-align: center;
    }

    #cards_landscape_wrap-2 .card-flyer .text-box .text-container {
      padding: 30px 18px;
    }

    #cards_landscape_wrap-2 .card-flyer {
      background: #FFFFFF;
      margin-top: 50px;
      -webkit-transition: all 0.2s ease-in;
      -moz-transition: all 0.2s ease-in;
      -ms-transition: all 0.2s ease-in;
      -o-transition: all 0.2s ease-in;
      transition: all 0.2s ease-in;
      box-shadow: 0px 3px 4px rgba(0, 0, 0, 0.40);
    }

    #cards_landscape_wrap-2 .card-flyer:hover {
      background: #fff;
      box-shadow: 0px 15px 26px rgba(0, 0, 0, 0.50);
      -webkit-transition: all 0.2s ease-in;
      -moz-transition: all 0.2s ease-in;
      -ms-transition: all 0.2s ease-in;
      -o-transition: all 0.2s ease-in;
      transition: all 0.2s ease-in;
      margin-top: 50px;
    }

    #cards_landscape_wrap-2 .card-flyer .text-box p {
      margin-top: 10px;
      margin-bottom: 0px;
      padding-bottom: 0px;
      font-size: 14px;
      letter-spacing: 1px;
      color: #000000;
    }

    #cards_landscape_wrap-2 .card-flyer .text-box h6 {
      margin-top: 0px;
      margin-bottom: 4px;
      font-size: 18px;
      font-weight: bold;
      text-transform: uppercase;
      font-family: 'Roboto Black', sans-serif;
      letter-spacing: 1px;
      color: #00acc1;
    }
  </style>
  <title>Dashboard</title>
</head>

<body>
  @include('layouts.sidebar')
  <div class="container">
    <!-- Topic Cards -->
    <div id="cards_landscape_wrap-2">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <a href="">
              <div class="card-flyer">
                <div class="text-box">
                  <div class="image-box">
                    <img src="https://cdn.pixabay.com/photo/2018/03/30/15/11/deer-3275594_960_720.jpg" alt="" />
                  </div>
                  <div class="text-container">
                    <h6>Title 01</h6>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <a href="">
              <div class="card-flyer">
                <div class="text-box">
                  <div class="image-box">
                    <img src="https://cdn.pixabay.com/photo/2018/04/09/19/55/low-poly-3305284_960_720.jpg" alt="" />
                  </div>
                  <div class="text-container">
                    <h6>Title 02</h6>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <a href="">
              <div class="card-flyer">
                <div class="text-box">
                  <div class="image-box">
                    <img src="https://cdn.pixabay.com/photo/2018/04/06/13/46/poly-3295856_960_720.png" alt="" />
                  </div>

                  <div class="text-container">
                    <h6>Title 03</h6>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>