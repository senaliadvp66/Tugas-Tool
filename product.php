<?php
include 'config.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
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
    <!-- navbar start -->
    <nav class="navbar">
      <a href="#" class="navbar-logo">thrift&thrive.</a>

      <div class="navbar-nav">
        <a href="">Home</a>
        <a href="woman.php">Woman</a>
        <a href="man.php">Man</a>
        <a href="index.html#about">About Us</a>
        <a href="index.html#faq">FAQ</a>
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
        <a href="#login">Login</a>
        <a href="#signin">Sign in</a>
      </div>

      <!-- search form start -->
      <div class="search-form">
        <input type="search" id="search-box" placeholder="search here..." />
        <label for="search-box"> <i data-feather="search"></i></label>
      </div>
      <!-- search form end -->
    </nav>
    <!-- navbar end -->

    <!-- product start -->

    <!-- product end -->

    <!-- icon -->
    <script>
      feather.replace();
    </script>
    <!-- javascript -->
    <script src="js/script.js"></script>
  </body>
</html>