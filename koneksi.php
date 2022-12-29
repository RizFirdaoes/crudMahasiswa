<?php

// Mengkoneksikan ke database MySQL
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'dbWebC4';	

// Membuat koneksi
$conn = mysqli_connect($host, $user, $password, $dbname);
// Cek koneksi
if (!$conn) {
   die("Koneksi gagal: " . mysqli_connect_error());
}
//echo "Koneksi berhasil";
?>