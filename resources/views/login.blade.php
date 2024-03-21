<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Form</title><link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
  <style>
    /* Import Google font - Poppins */
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
    
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: "Poppins", sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      background: linear-gradient(to right, #4723d9, #331fd6);
    }

    .login-container {
      background: #fff;
      border-radius: 8px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      width: 300px;
      text-align: center;
      transition: transform 0.3s ease-in-out;
    }

    .login-container:hover {
      transform: scale(1.05);
    }

    .login-container h2 {
      color: #333;
      margin-bottom: 20px;
    }

    .input-box {
      position: relative;
      margin-bottom: 20px;
      transition: all 0.3s ease-in-out;
    }

    .input-box:hover {
      transform: translateX(5px);
    }

    .input-box input {
      width: calc(100% - 20px);
      padding: 10px;
      border: none;
      outline: none;
      border-bottom: 1px solid #ddd;
      margin-top: 5px;
      transition: border-color 0.3s ease-in-out;
    }

    .input-box:hover input {
      border-color: #4723d9;
    }

    .input-box i {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      font-size: 18px;
      color: #777;
      transition: color 0.3s ease-in-out;
    }

    .input-box:hover i {
      color: #4723d9;
    }

    .input-box .fa-user {
      left: 5px;
    }

    .input-box .fa-lock {
      left: 5px;
    }

    .input-box .fa-eye,
    .input-box .fa-eye-slash {
      right: 5px;
      cursor: pointer;
    }

    .input-box .fa-eye:hover,
    .input-box .fa-eye-slash:hover {
      color: #4723d9;
    }

    .button {
      background: linear-gradient(to right, #4723d9, #331fd6);
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      transition: background 0.3s ease-in-out;
    }

    .button:hover {
      background: linear-gradient(to right, #331fd6, #4723d9);
    }

    .register-link {
      color: #4723d9;
      text-decoration: none;
      font-size: 14px;
      display: block;
      margin-top: 10px;
      transition: color 0.3s ease-in-out;
    }

    .register-link:hover {
      color: #331fd6;
    }
  </style>
</head>
<body>

  <div class="login-container">
          @if (session()->has('info'))

        <div class="alert alert-danger" role="alert" style="text-align: center; width:50%; margin:auto">

            {{ session('info') }}
        </div>
        @endif
        @if(session('info'))
           <script>
               setTimeout(function () {
                   document.querySelector('.alert').style.display = 'none';
               }, 3000); // Menyembunyikan alert setelah 3 detik
           </script>
           @endif
    <h2>Login</h2>
    <form >
    @method('post')
        @csrf
      <div class="input-box">
        <input type="text" placeholder="Username" name="username" style="padding-left:1.5rem;" required />
        <i class="uil uil-user fa-user"></i>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Password" name="password" style="padding-left:1.5rem "required />
        <i class="uil uil-lock fa-lock"></i>
        <i class="uil uil-eye fa-eye"></i>
        <i class="uil uil-eye-slash fa-eye-slash"></i>
      </div>
      <button type="submit" class="button">Login</button>

    </form>
  </div>

  <script>
    const pwShowHide = document.querySelector(".fa-eye");
    const pwHide = document.querySelector(".fa-eye-slash");
    const pwInput = document.querySelector("input[type='password']");

    pwShowHide.addEventListener("click", () => {
      pwInput.type = "text";
      pwShowHide.style.display = "none";
      pwHide.style.display = "block";
    });

    pwHide.addEventListener("click", () => {
      pwInput.type = "password";
      pwHide.style.display = "none";
      pwShowHide.style.display = "block";
    });
  </script>
</body>
</html>
