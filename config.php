<?php 

include('./service/database.php');

// Fungsi untuk mengambil data produk
function getProducts() {
    global $db; // Menggunakan koneksi dari variabel global

    $sql = "SELECT * FROM product"; // Query untuk mengambil semua data dari tabel 'product'
    $result = $db->query($sql);

    // Mengecek apakah ada data
    if ($result->num_rows > 0) {
        // Menyimpan hasil query dalam array
        $products = [];
        while($row = $result->fetch_assoc()) {
            $products[] = $row;
        }
        return $products; // Mengembalikan data produk dalam bentuk array
    } else {
        return []; // Mengembalikan array kosong jika tidak ada data
    }
}

// Jangan lupa menutup koneksi setelah selesai
// $conn->close();
?>