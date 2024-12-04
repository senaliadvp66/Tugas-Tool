<?php
include_once 'database.php';

$admin_message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action'])) {
        $action = $_POST['action'];

        switch ($action) {
            case 'add_user':
                // Ambil data dari request
                $email = $_POST['email'];
                $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash password
                $nama = $_POST['nama'];

                // Query untuk menambahkan pengguna baru
                $query = "INSERT INTO users (email, password, nama) VALUES (:email, :password, :nama)";
                $stmt = $conn->prepare($query);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':password', $password);
                $stmt->bindParam(':nama', $nama);

                if ($stmt->execute()) {
                    $admin_message = "User  added successfully.";
                } else {
                    $admin_message = "Failed to add user.";
                }
                break;

            case 'edit_user':
                // Ambil data dari request
                $id = $_POST['id'];
                $email = $_POST['email'];
                $nama = $_POST['nama'];

                // Query untuk mengupdate pengguna
                $query = "UPDATE users SET email = :email, nama = :nama WHERE id = :id";
                $stmt = $conn->prepare($query);
                $stmt->bindParam(':id', $id);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':nama', $nama);

                if ($stmt->execute()) {
                    $admin_message = "User  updated successfully.";
                } else {
                    $admin_message = "Failed to update user.";
                }
                break;

            case 'delete_user':
                // Ambil data dari request
                $id = $_POST['id'];

                // Query untuk menghapus pengguna
                $query = "DELETE FROM users WHERE id = :id";
                $stmt = $conn->prepare($query);
                $stmt->bindParam(':id', $id);

                if ($stmt->execute()) {
                    $admin_message = "User  deleted successfully.";
                } else {
                    $admin_message = "Failed to delete user.";
                }
                break;

            default:
                $admin_message = "Invalid action.";
                break;
        }
    }
}

// Ambil semua pengguna untuk ditampilkan
$query = "SELECT * FROM users";
$stmt = $conn->prepare($query);
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>