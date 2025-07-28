<?php
session_start();
//  header("Location: form.html");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>admin form</title>
</head>
<link rel="stylesheet" href="style.css" />

<body>

  <div class="form-container">
    <br>
    <br>
    <p class="title" style="color:rgb(168, 12, 6)" ;>Admin Login</p>
    <form action="formdata.php" class="form" method="post">
      <input type="email" class="input" placeholder="Login id" name="loginid">
      <input type="password" class="input" placeholder="Password" name="password">
      <p class="page-link">
        <a class="page-link-label" style="color:  rgb(168, 12, 6);" href="studentform.php">Student Form</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        <span class="page-link-label">Forgot Password?</span>
      </p>
      <button class="form-btn">Log in</button>
    </form>
  </div>
</body>

</html>