<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
</head>

<body>

  <div class="login-container">
    <div class="login-header">
      <h2>Login Form</h2>
    </div>
    <div class="login-form">
      <form >
        @method('post')
        @csrf
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
      <p>Don't have an account? <a href="/register">Sign up</a></p>
    </div>
  </div>

</body>

</html>