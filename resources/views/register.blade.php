<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="{{asset('assets/css/register.css')}}">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
</head>

<body>
  <div class="registration-container">
    <div class="registration-header">
      <h2>Registration Form</h2>
    </div>
    <div class="registration-form">
      <form action="{{'register'}}" method="post">
        @method('post')
        @csrf
        <div class="form-group">
          <label for="name">Nama Petugas :</label>
          <input type="text" id="name" name="nama_petugas">
        </div>
        <div class="form-group">
          <label for="email">Username :</label>
          <input type="text" id="email" name="username">
        </div>
        <div class="form-group">
          <label for="gender">Pilih Level :</label>
          <select id="gender" name="level">
            <option>administrator</option>
            <option>petugas</option>
          </select>
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" id="password" name="password">
        </div>
        <div class="form-group">
          <button type="submit">Register</button>
          <div class="form-footer">
            <p>Don't have an account? <a href="/login">Sign in</a></p>
          </div>
        </div>
      </form>
    </div>
  </div>

</body>

</html>