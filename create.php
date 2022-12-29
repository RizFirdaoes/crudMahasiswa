<?php
include 'koneksi.php';


if (isset($_POST['simpan'])) { // jika tombol simpan diklik
    $nim = $_POST['nim']; // menyimpan data yang diinputkan ke variabel
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    $alamat = $_POST['alamat'];

    // memasukkan data ke database
    $query = "INSERT INTO mahasiswa (nim,nama,email,telepon,alamat) VALUES ('$nim','$nama','$email','$telepon','$alamat')";
    mysqli_query($conn, $query); // menjalankan perintah query

    // mengalihkan ke halaman index.php
    header("Location: index.php");
}
?>

