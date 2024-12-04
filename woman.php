<?php
include 'config.php';
session_start();

function getAllProducts() {
    global $db; // Menggunakan koneksi database global

    // Query untuk mengambil data produk
    $sql = "SELECT id_produk, nama, harga, image_url FROM produk where id_kategori=2"; // Pastikan kolom sesuai dengan nama tabel
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        $products = [];
        while($row = $result->fetch_assoc()) {
            $products[] = $row;
        }
        return $products; // Mengembalikan array produk
    } else {
        return []; // Jika tidak ada produk
    }
}

// Ambil data produk dari database
$products = getAllProducts();
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
    <!-- navbar end -->

    <!-- product start -->
    <div class="container">
        <div class="header">
            WOMAN CATEGORY
        </div>
        <div class="content">
            <div class="sidebar">
                <div class="filter-section">
                    <h3>Keywords</h3>
                    <div>
                        <span>Wanita <i class="fas fa-times"></i></span>
                        <span>Atasan <i class="fas fa-times"></i></span>
                        <span>Bawahan <i class="fas fa-times"></i></span>
                    </div>
                </div>
                <div class="filter-section">
                    <h3>Bahan</h3>
                    <label><input checked type="checkbox"/> Katun</label>
                    <label><input checked type="checkbox"/> Tweed</label>
                    <label><input checked type="checkbox"/> Rayon</label>
                </div>
                <div class="filter-section">
                    <h3>Harga</h3>
                    <input max="100000" min="0" type="range" value="60000"/>
                    <span>IDR 60.000+</span>
                </div>
                <div class="filter-section">
                    <h3>Color</h3>
                    <label><input checked type="checkbox"/> Denim</label>
                    <label><input checked type="checkbox"/> White</label>
                    <label><input checked type="checkbox"/> Brown</label>
                </div>
                <div class="filter-section">
                    <h3>Size</h3>
                    <label><input checked type="checkbox"/> S</label>
                    <label><input checked type="checkbox"/> M</label>
                    <label><input checked type="checkbox"/> L</label>
                </div>
            </div>
            <div class="main-content">
                <div class="search-bar">
                    <input placeholder="Wanita" type="text"/>
                    <i class="fas fa-search"></i>
                </div>
                <div class="sort-options">
                    <button class="active">New</button>
                    <button>Price ascending</button>
                    <button>Price descending</button>
                    <button>Rating</button>
                </div>
                <div class="product-grid">
        <?php
        // Menampilkan produk dalam grid
        foreach ($products as $product) {
            ?>
            <div class="product-card">
                <a href="detailproduk.php?id=<?php echo $product['id_produk']; ?>">
                    <img alt="<?php echo htmlspecialchars($product['nama']); ?>" height="300" src="img/<?php echo htmlspecialchars($product['image_url']); ?>" width="300"/>
                    <div class="product-info">
                        <h4><?php echo htmlspecialchars($product['nama']); ?></h4>
                        <p>IDR <?php echo number_format($product['harga'], 0, ',', '.'); ?></p>
                    </div>
                </a>
            </div>
            <?php
        }
        ?>
    </div>
            </div>
        </div>
    </div>
    <!-- product end -->

    <!-- icon -->
    <script>
      feather.replace();
    </script>
    <!-- javascript -->
    <script src="js/script.js"></script>
  </body>
</html>