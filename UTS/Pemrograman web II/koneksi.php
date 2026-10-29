<?php
$host = "localhost";
$db   = "db_pendaftaran_mahasiswa";
$user = "root";
$pass = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    // Mengatur mode error PDO ke Exception agar error mudah terlacak jika ada masalah
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi database gagal: " . $e->getMessage());
}
?>