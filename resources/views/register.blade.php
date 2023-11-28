<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
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

    .registration-container {
      background-color: #ffffff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      overflow: hidden;
      width: 100%;
      max-width: 600px;
    }

    .registration-header {
      background-color: #27ae60;
      color: #fff;
      text-align: center;
      padding: 20px;
    }

    .registration-form {
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

    .form-group input,
    .form-group select {
      width: 100%;
      padding: 10px;
      box-sizing: border-box;
      border: 1px solid #ddd;
      border-radius: 4px;
      margin-top: 5px;
      transition: border-color 0.3s;
    }

    .form-group input:focus,
    .form-group select:focus {
      outline: none;
      border-color: #27ae60;
    }

    .form-group button {
      background-color: #27ae60;
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
      background-color: #219d54;
    }

    /* Media query untuk responsif */
    @media screen and (max-width: 480px) {
      .registration-container {
        max-width: 100%;
      }
    }
  </style>
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
      </div>
    </form>
  </div>
</div>

</body>
</html>
