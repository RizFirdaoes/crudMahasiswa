<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>CRUD PHP MySQL</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Data Mahasiswa</h1>
        <a href="formCreate.php" class="btn btn-primary mb-3">Tambah Data</a>

        <?php
        include "koneksi.php"; // menghubungkan ke file koneksi.php

        // menampilkan data dari database
        $query = "SELECT * FROM mahasiswa";
        $result = mysqli_query($conn, $query);

        // mengecek apakah ada error saat menjalankan query
        if (!$result) {
            die("Query error: " . mysqli_error($conn));
        }
        ?>

        <table class="table table-striped table-hover table-dark table-bordered">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telepon</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                while ($data = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data['nim']; ?></td>
                        <td><?php echo $data['nama']; ?></td>
                        <td><?php echo $data['email']; ?></td>
                        <td><?php echo $data['telepon']; ?></td>
                        <td><?php echo $data['alamat']; ?></td>
                        <td>
                        <a href="formUpdate.php?id=<?php echo $data['id']; ?>" class="btn btn-secondary">Edit</a>
                        <a href="delete.php?id=<?php echo $data['id']; ?>" class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
                        </td>
                        </tr>
                        <?php
             }
             ?>
            </tbody>
            </table>
            </div>
            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.16.0/dist/umd/popper.min.js" integrity="sha384-0/aK/y0bW8KXaHJDCGnxv0MkdW8+BpU1O6Jqo6lBBB6KDrXRU0BJ2QQFq3PnX/YB" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script> -->
    </body>
</html>
