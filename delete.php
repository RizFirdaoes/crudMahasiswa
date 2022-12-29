<?php
include "koneksi.php"; // menghubungkan ke file koneksi.php

if (isset($_GET['id'])) { // jika url mengandung parameter id
    $id = $_GET['id'];

    // menghapus data dari database
    $query = "DELETE FROM mahasiswa WHERE id=$id";
    mysqli_query($conn, $query);

    // mengalihkan ke halaman index.php
    header("Location: index.php");
}
?>