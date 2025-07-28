<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>CampusConnect Announcements</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f8f9fb;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #fff;
      padding: 15px 30px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.05);
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    header .logo {
      font-weight: bold;
      font-size: 1.2rem;
    }

    nav a {
      margin: 0 15px;
      color: #333;
      text-decoration: none;
    }

    .container {
      max-width: 1000px;
      margin: 40px auto;
      padding: 0 20px;
    }

    .announcement-header {
      margin-bottom: 20px;
    }

    .announcement-header h1 {
      margin-bottom: 5px;
    }

    .tabs {
      display: flex;
      gap: 20px;
      margin-bottom: 25px;
    }

    .tabs a {
      color: #007bff;
      text-decoration: none;
      font-weight: 500;
      border-bottom: 2px solid transparent;
      padding-bottom: 5px;
    }

    .tabs a.active {
      border-bottom: 2px solid #007bff;
    }

    .card {
      display: flex;
      background: white;
      border-radius: 10px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.05);
      margin-bottom: 25px;
      padding: 15px;
      gap: 20px;
      align-items: center;
      flex-wrap: wrap;
    }

    .card img {
      width: 120px;
      height: auto;
      border-radius: 8px;
      object-fit: cover;
    }

    .card-content {
      flex: 1;
    }

    .card-content h3 {
      margin: 0;
      font-size: 1.1rem;
    }

    .card-content p {
      color: #555;
      margin: 10px 0;
    }

    .card-content button {
      background-color: #007bff;
      color: white;
      border: none;
      padding: 8px 15px;
      border-radius: 5px;
      cursor: pointer;
    }

    @media screen and (max-width: 600px) {
      .card {
        flex-direction: column;
        align-items: flex-start;
      }

      .card img {
        width: 100%;
        max-height: 180px;
      }
    }
  </style>
</head>
<body>

<header>
  <div class="logo" style="color: red;">Announcement</div>
  <nav>
    <a href="#">Home</a>
    <a href="studentform.php">Student Login</a>
    <a href="form.php">Admin Login</a>
    <a href="notice.php">Post</a>
    <a href="email.php">Email</a>
  </nav>
</header>

<div class="container">
  <div class="announcement-header">
    <h1>Announcements</h1>
    <p>Stay updated with the latest news and information from the college.</p>
  </div>

  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    // $datess=$_POST['datess'];

    // $conn=mysqli_connect('localhost','root','','formdb');

    // $sql="INSERT INTO  announcements (subject,message) VALUES ('$subject','$message')";

    // mysqli_query($conn,$sql);
    }   



?>

  <div class="tabs">
    <a href="#" class="active">All</a>
    <a href="notice.php">Exams</a>
    <a href="#">Events</a>
    <a href="#">Holiday</a>
  </div>

  <form class="email-form" action="" method="post">
  <div class="card">
    <!-- <img src="https://cdn-icons-png.flaticon.com/512/3135/3135765.png" alt="Exam"> -->
    <div class="card-content">
      <h3><?php echo $subject ?></h3>
      <p><?php echo $message ?></p>
      <!-- <button>View Details</button> -->
    </div>
  </div>
  </form>
</body>
</html>
