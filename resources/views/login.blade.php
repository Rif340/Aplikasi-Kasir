<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #ecf0f3;
      margin: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .login-container {
      background-color: #ffffff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      overflow: hidden;
      width: 100%;
      max-width: 400px;
    }

    .login-header {
      background-color: #3498db;
      color: #fff;
      text-align: center;
      padding: 20px;
    }

    .login-form {
      padding: 20px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
      color: #555;
    }

    .form-group input {
      width: 100%;
      padding: 10px;
      box-sizing: border-box;
      border: 1px solid #ddd;
      border-radius: 4px;
      margin-top: 5px;
      transition: border-color 0.3s;
    }

    .form-group input:focus {
      outline: none;
      border-color: #3498db;
    }

    .form-group button {
      background-color: #3498db;
      color: #fff;
      padding: 12px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
      font-size: 16px;
      transition: background-color 0.3s;
    }

    .form-group button:hover {
      background-color: #2980b9;
    }

    .form-footer {
      text-align: center;
      padding: 10px;
      border-top: 1px solid #ddd;
    }

    /* Media query untuk responsif */
    @media screen and (max-width: 480px) {
      .login-container {
        max-width: 100%;
      }
    }
  </style>
</head>
<body>

<div class="login-container">
  <div class="login-header">
    <h2>Login Form</h2>
  </div>
  <div class="login-form">
    <form>
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <button type="submit">Login</button>
      </div>
    </form>
  </div>
  <div class="form-footer">
    <p>Don't have an account? <a href="#">Sign up</a></p>
  </div>
</div>

</body>
</html>
