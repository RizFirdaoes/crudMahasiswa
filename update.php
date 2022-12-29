<?php

include "koneksi.php"; // menghubungkan ke file koneksi.php

if (isset($_POST['update'])) { // jika tombol update diklik
$id      = $_POST['id'];
$nim     = $_POST['nim'];
$nama    = $_POST['nama'];
$email   = $_POST['email'];
$telepon = $_POST['telepon'];
$alamat  = $_POST['alamat'];

    // memperbaharui data di database
    $query = "UPDATE mahasiswa SET
    nim     = '$nim',
    nama    = '$nama',
    email   = '$email',
    telepon = '$telepon',
    alamat  = '$alamat'
    WHERE id = $id";
    mysqli_query($conn, $query);

    // mengalihkan ke halaman index.php
    header("Location: index.php");
}

