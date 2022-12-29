
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Data Mahasiswa | Edit</title>
</head>
<body>
    <div class="container">
    <?php
    include 'koneksi.php';
    $id     =$_GET['id'];
    $query  ="SELECT * FROM mahasiswa WHERE id ='$id'";
    $result =mysqli_query($conn, $query);

    while ($data = mysqli_fetch_array($result)) {
        $nim = $data['nim']; 
        $nama = $data['nama'];
        $email = $data['email'];
        $telepon = $data['telepon'];
        $alamat = $data['alamat'];
    }
    ?>
        <div class="col-10 m-auto" style="padding: 100px 0 0 0;">
            <h2 class="text-center fw-bold">Edit Data Mahasiswa</h2>
            <div class="col-md-8 m-auto card p-5 shadow p-3 mb-5 bg-body rounded">
                <form action="update.php" method="post">
                <input type="hidden" name="id"  value="<?php echo $id; ?>">
                <div class="mb-3">  
                <label for="nim" class="form-label">NIM:</label>
                <input type="text" id="nim" name="nim" class="form-control" value="<?php echo $nim; ?>">
                </div>
                <div class="mb-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" id="nama" name="nama" class="form-control" value="<?php echo $nama; ?>">
                </div>
                <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" id="email" name="email" class="form-control"value="<?php echo $email; ?>">
                </div>
                <div class="mb-3">
                <label for="telepon" class="form-label">Telepon:</label>
                <input type="text" id="telepon" name="telepon"class="form-control" value="<?php echo $telepon; ?>">
                </div>
                <div class="mb-3">
                <label for="alamat" class="form-label">Alamat:</label>
                <input type="text" id="alamat" name="alamat" class="form-control" value="<?php echo $alamat; ?>">
                </div>
                <div class="col-3 m-auto">
                <button type="submit" class="btn btn-primary" name="update">Update</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>