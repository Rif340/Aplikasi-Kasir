<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register Form</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <script src="https://kit.fontawesome.com/cc72c425a9.js" crossorigin="anonymous"></script>
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
            background: linear-gradient(to right, #4723d9, #afa5d9);
        }

        .form-container {
            display: grid;
            gap: 15px;
            justify-content: center;
        }

        .register-container {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 15px;
            text-align: center;
            transition: transform 0.3s ease-in-out;
            width: 380px;
            /* Adjust as needed */
            margin: auto;
        }

        .register-container:hover {
            transform: scale(1.05);
        }

        .register-container h2 {
            color: #333;
            margin-bottom: 15px;
            font-size: 18px;
        }

        .input-box {
            position: relative;
            margin-bottom: 15px;
            transition: all 0.3s ease-in-out;
        }

        .input-box:hover {
            transform: translateX(5px);
        }

        .input-box input {
            width: calc(100% - 20px);
            padding: 8px;
            border: none;
            outline: none;
            border-bottom: 1px solid #ddd;
            margin-top: 5px;
            transition: border-color 0.3s ease-in-out;
        }

        .input-box select {
    width: calc(100% - 20px);
    padding: 8px;
    border: none;
    outline: none;
    border-bottom: 1px solid #ddd;
    margin-top: 5px;
    background-color: transparent; /* Transparent background */
    transition: border-color 0.3s ease-in-out;
    color: #333; /* Warna teks */
}

        .input-box:hover input {
            border-color: #4723d9;
        }

        .input-box i {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 16px;
            color: #777;
            transition: color 0.3s ease-in-out;
        }

        .input-box:hover i {
            color: #4723d9;
        }

        .input-box .fa-user,
        .input-box .fa-lock,
        .input-box .fa-envelope,
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
            background: #4723d9;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease-in-out;
        }

        .button:hover {
            background: #afa5d9;
        }

        .login-link {
            color: #4723d9;
            text-decoration: none;
            font-size: 12px;
            display: block;
            margin-top: 8px;
            transition: color 0.3s ease-in-out;
        }

        .login-link:hover {
            color: #afa5d9;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="form-container">
        <div class="register-container">
            <h2>Register</h2>
            <form action="{{'register'}}" method="post">
                @method('post')
                @csrf
                <div class="input-box">
                    <input type="text" placeholder="Username" name="username" style="padding-left:1.5rem;" required />
                    <i class="fa-regular fa-user"></i>
                </div>
                <div class="input-box">
                    <input type="name" placeholder="Full Name" name="nama_petugas" style="padding-left:1.5rem " required />
                    <i class="fa-solid fa-address-card"></i>
                </div>
                <div class="input-box">
                    <!-- Ganti input type="number" dengan select -->
                    <select name="level" style="padding-left:1.5rem;" required>
                        <option value="petugas">Petugas</option>
                        <option value="administrator">Administrator</option>
                    </select>
                    <i class="fa-brands fa-black-tie"></i>
                </div>

                <div class="input-box">
                    <input type="password" placeholder="Password" name="password" style="padding-left:1.5rem " required />
                    <i class="fa-solid fa-eye"></i>
                    <i class="fa-solid fa-eye-slash"></i>
                </div>
                <button type="submit" class="button">Register</button>
                <a href="/login" class="login-link">Sudah punya akun? Login sekarang.</a>
            </form>
        </div>
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
