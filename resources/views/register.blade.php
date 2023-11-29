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
      <form>
        <div class="form-group">
          <label for="name">Full Name:</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="gender">Gender:</label>
          <select id="gender" name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
          </select>
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required>
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