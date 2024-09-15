<?php
// Konfigurasi koneksi MySQL
$dsn = 'mysql:host=localhost;dbname=access_control';
$username = 'root';
$password = '';

// Koneksi ke database
try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Koneksi gagal: ' . $e->getMessage());
}
?>
