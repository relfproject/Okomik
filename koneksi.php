<?php
$host = 'localhost';
$db   = 'db_komik'; // ganti sesuai nama database kamu
$user = 'root';   // default XAMPP
$pass = '';       // default XAMPP
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];

try {
    $conn = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
    exit;
}
