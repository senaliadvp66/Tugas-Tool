<?php
include 'database.php';

// Query produk
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Panel - Thrift and Thrive</title>
</head>
<body>
  <h1>Daftar Produk</h1>
  <a href="add_product.php">Tambah Produk</a>
  <table border="1">
    <tr>
      <th>ID</th>
      <th>Nama</th>
      <th>Harga</th>
      <th>Stok</th>
      <th>Aksi</th>
    </tr>
    <?php while($row = $result->fetch_assoc()): ?>
      <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['name'] ?></td>
        <td><?= $row['price'] ?></td>
        <td><?= $row['stock'] ?></td>
        <td>
          <a href="edit_product.php?id=<?= $row['id'] ?>">Edit</a>
          <a href="delete_product.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
        </td>
      </tr>
    <?php endwhile; ?>
  </table>
</body>
</html>