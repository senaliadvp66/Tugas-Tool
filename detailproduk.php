<?php
include 'config.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cream Blouse</title>
    <link rel="stylesheet" href="css/detailproduk.css">
</head>
<body>
    <div class="container">
        <div class="product-image">
            <img src="img/blouse.jpeg" alt="Cream Blouse">
        </div>
        <div class="product-details">
            <h1>Cream Blouse</h1>
            <span class="tag">Tag</span>
            <p class="price">IDR 85.000</p>
            
            <div class="options">
                <div class="option">
                    <label for="size">Ukuran</label>
                    <select id="size" name="size">
                        <option value="S">S</option>
                        <option value="M" selected>M</option>
                        <option value="L">L</option>
                    </select>
                </div>
                <div class="option">
                    <label for="color">Warna</label>
                    <select id="color" name="color">
                        <option value="Cream" selected>Cream</option>
                        <option value="White">White</option>
                        <option value="Black">Black</option>
                    </select>
                </div>
            </div>

            <button class="buy-button">Beli</button>

            <details class="description">
                <summary>Cream Blouse</summary>
                <p>
                    Blouse berwarna cream ini memiliki desain feminin dengan detail ruffle pada bagian dada dan lengan yang memberikan kesan manis. Dilengkapi dengan aksen pita di bagian leher, blouse ini sangat cocok untuk tampilan santai maupun semi-formal.
                </p>
            </details>
        </div>
    </div>
</body>
</html>