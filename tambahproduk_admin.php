<?php
include './service/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $stock = $_POST['stock'];

    $sql = "INSERT INTO products (name, price, description, stock) VALUES ('$name', '$price', '$description', '$stock')";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tambah Produk</title>
</head>
<body>
  <h1>Tambah Produk</h1>
  <form method="POST">
    <label>Nama Produk:</label><br>
    <input type="text" name="name" required><br>
    <label>Harga:</label><br>
    <input type="number" name="price" step="0.01" required><br>
    <label>Deskripsi:</label><br>
    <textarea name="description"></textarea><br>
    <label>Stok:</label><br>
    <input type="number" name="stock" required><br><br>
    <button type="submit">Tambah</button>
  </form>
</body>
</html>