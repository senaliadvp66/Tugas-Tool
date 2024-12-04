<?php
include 'config.php';
session_start();
include "service/database.php";
if(isset($_POST['login'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
  $result = $db->query($sql);

  if($result->num_rows > 0) {
    $data = $result->fetch_assoc();

    header("location: index.php");
    
  } else {
    echo "Akun tidak ditemukan";
  }
  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/sign_up.css">

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>thrift&thrive.</title>
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,700;0,800;1,300;1,400;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- icon -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- style -->
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
<nav class="navbar">
      <a href="#" class="navbar-logo">thrift&thrive.</a>

      <div class="navbar-nav">
        <a href="index.php">Home</a>
        <a href="woman.php" onclick="showWomanCategory()">Woman</a></li>
        <a href="man.php" onclick="showManCategory()">Man</a></li>
        <a href="index.php#about">About Us</a>
        <a href="index.php#faq">FAQ</a>
      </div>
      <div class="navbar-extra">
        <a href="#search" id="search-button"><i data-feather="search"></i></a>
        <a href="#shopping-cart" id="shopping-cart"
          ><i data-feather="shopping-cart"></i
        ></a>
        <a href="#user" id="user"><i data-feather="user"></i></a>
        <a href="#menu" id="menu"><i data-feather="menu"></i></a>
      </div>
      <div class="navbar-user">
        <a href="login.php">Login</a>
        <a href="sign_up.php">Sign up</a>
      </div>

      <!-- search form start -->
      <div class="search-form">
        <input type="search" id="search-box" placeholder="search here..." />
        <label for="search-box"> <i data-feather="search"></i></label>
      </div>
      <!-- search form end -->
    </nav>

    <div class="container">
        <form action= "login.php" method="POST" class="form">
            <input type="email" placeholder="Email" name="email" required>
            <input type="password" placeholder="Password" name="password" required>
            <button type="submit" name="login">Login</button>
        </form>
    </div>

    <!-- icon -->
    <script>
      feather.replace();
    </script>
    <!-- javascript -->
    <script src="js/script.js"></script>
</body>
</html>
