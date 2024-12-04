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
    <!-- navbar end -->

    <div id="womanCategory" style="display: none;">
        <div class="container">
          <div class="header">
            WOMAN CATEGORY
          </div>
          <div class="content">
            <!-- Sidebar dan Konten Utama Kategori Wanita -->
            <!-- Salin semua kode untuk kategori wanita di sini -->
          </div>
        </div>
      </div>
    
      <div id="manCategory" style="display: none;">
        <div class="container">
          <div class="header">
            MAN CATEGORY
          </div>
          <div class="content">
            <!-- Sidebar dan Konten Utama Kategori Wanita -->
            <!-- Salin semua kode untuk kategori wanita di sini -->
          </div>
        </div>
      </div>      

    <!-- hero section start -->
    <section class="hero" id="home">
      <main class="content">
        <h1>Not Your Ordinary Store</h1>
        <p><strong>Affordable, Sustainable, and Stylish</strong></p>
        <a href="product.html" class="cta">Explore!</a>
      </main>
    </section>
    <!-- hero section end -->

    <!-- about us section start -->
    <section id="about" class="about">
      <h2>About Us</h2>
      <div class="row">
        <div class="about-img">
          <img src="img/aboutus4.jpg" alt="About Us" />
        </div>
        <div class="content">
          <h3>Why choose us?</h3>
          <p>
            thrift&thrive. is more than just a thrift shop; it's a movement. We
            believe in the power of fashion to make a positive impact on the
            planet and empower individuals to express their unique style.
          </p>
          <br />
          <h3>Our Mission</h3>
          <p>
            To inspire sustainable fashion choices by offering high-quality,
            affordable, and stylish pre-loved clothing.
          </p>
        </div>
      </div>
    </section>
    <!-- about us section end -->

    <!-- faq section start -->
    <section id="faq" class="faq">
      <h2>Frequently Asked Questions</h2>
      <ul class="faq-text">
        <li>
          <div class="question-arrow">
            <span class="question">Bagaimana cara mengembalikan pesanan?</span>
            <i data-feather="chevron-down"></i>
          </div>
          <p>
            Untuk mengajukan pengembalian barang, pertama-tama hubungi penjual
            dan sampaikan alasan pengembalian, seperti barang rusak atau tidak
            sesuai, serta lampirkan bukti berupa foto atau video untuk
            memperkuat klaim Anda. Selanjutnya, ikuti prosedur yang diberikan
            oleh penjual, termasuk petunjuk tentang cara mengembalikan barang.
            Pastikan barang dikemas dengan baik sebelum dikirim ke alamat yang
            ditentukan. Setelah barang diterima, penjual akan memeriksanya, dan
            jika pengembalian memenuhi syarat, dana akan dikembalikan ke metode
            pembayaran Anda.
          </p>
          <span class="line"></span>
        </li>
        <li>
          <div class="question-arrow">
            <span class="question"
              >Apakah pakaian preloved aman digunakan?</span
            >
            <i data-feather="chevron-down"></i>
          </div>
          <p>
            Semua pakaian preloved yang kami jual telah melalui proses
            pembersihan dan pengecekan kualitas.
          </p>
          <span class="line"></span>
        </li>
        <li>
          <div class="question-arrow">
            <span class="question"
              >Bagaimana cara mengetahui kondisi pakaian preloved?</span
            >
            <i data-feather="chevron-down"></i>
          </div>
          <p>
            Kami memberikan deskripsi detail mengenai kondisi pakaian, termasuk
            adanya noda, kerusakan, atau kekurangan. Anda juga bisa melihat
            foto-foto produk secara jelas.
          </p>
          <span class="line"></span>
        </li>
      </ul>
    </section>

    <!-- faq section end -->

    <!-- footer start -->
    <footer>
      <div class="row">
        <div class="socials">
          <h3>Connect With Us</h3>
          <br />
          <a href="#"><i data-feather="instagram"></i></a>
          <a href="#"><i data-feather="twitter"></i></a>
          <a href="#"><i data-feather="facebook"></i></a>
          <a href="#"><i data-feather="youtube"></i></a>
        </div>

        <div class="contacts">
          <h3>Contact Us</h3>
          <br />
          <h4>Email</h4>
          <p>theteam@thriftnthrive.com</p>
          <h4>Phone</h4>
          <p>+62 999 999 999</p>
          <h4>Address</h4>
          <p>Thrifted Ltd, 3</p>
        </div>

        <div class="informations">
          <h3>Informations</h3>
          <br />
          <ul>
            <li><a href="#">Shipping</a></li>
            <li><a href="#">Sizing</a></li>
            <li><a href="#">Returns Policy</a></li>
            <li><a href="#">Terms of Service</a></li>
          </ul>
        </div>
      </div>
      <p>&copy; thrift&thrive. 2024</p>
    </footer>
    <!-- footer end -->

    <!-- icon -->
    <script>
      feather.replace();
    </script>
    <!-- javascript -->
    <script src="js/script.js"></script>
  </body>
</html>