<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>student Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-box {
      background-color: #fff;
      padding: 30px;
      border-radius: 15px;
      box-shadow: rgba(64, 179, 255, 0.8) 0px 5px 15px;
      width: 90%;
      max-width: 400px;
    }

    .login-box h2 {
      text-align: center;
      color: #007bff;
      margin-bottom: 25px;
    }

    .login-box input[type="text"],
    .login-box input[type="password"] {
      width: 100%;
      padding: 12px 20px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 25px;
      font-size: 16px;
    }

    .login-box input[type="submit"] {
      width: 100%;
      background-color: #007bff;
      color: white;
      padding: 12px;
      border: none;
      border-radius: 25px;
      font-size: 16px;
      cursor: pointer;
    }

    .login-box input[type="submit"]:hover {
      background-color:#0056b3;
    }

    .forgot {
      text-align: right;
      margin-bottom: 15px;
    }

    .forgot a {
      color: #555;
      text-decoration: none;
      font-size: 14px;
    }

    .forgot a:hover {
      text-decoration: underline;
    }

    @media (max-width: 480px) {
      .login-box {
        padding: 20px;
      }
    }
  </style>
</head>
<body>

<div class="login-box">
  <h2>Student   Login</h2>
  <form method="POST" action="login.php">
    <input type="text" name="login_id" placeholder="Login id" required>
    <input type="password" name="password" placeholder="Password" required>
    <div class="forgot">
        <a style="color:  rgb(168, 12, 6);" href="form.php">Admin Form</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="#">Forgot Password?</a>
    </div>
    <input type="submit" value="Log in">
  </form>
</div>

</body>
</html>
