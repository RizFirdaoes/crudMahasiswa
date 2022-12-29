
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Data Mahasiswa | Tambah</title>
</head>
<body>
    <div class="container">
    <?php
    include 'koneksi.php';
    ?>
        <div class="col-10 m-auto" style="padding: 100px 0 0 0;">
            <h2 class="text-center fw-bold">Tambah Data Mahasiswa</h2>
            <div class="col-md-8 m-auto card p-5 shadow p-3 mb-5 bg-body rounded">

                <form action="create.php" method="post">
                <div class="form-group">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" id="nim" name="nim" class="form-control" placeholder="Masukkan NIM" required>
                </div>
                <div class="form-group">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan nama" required>
                </div>
                <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Masukkan email" required>
                </div>
                <div class="form-group">
                <label for="telepon" class="form-label">Telepon</label>
                <input type="text" id="telepon" name="telepon"class="form-control" placeholder="Masukkan telepon">
                </div>
                <div class="form-group">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Masukkan alamat">
                </div>
                <br>
                <div class="col-3 m-auto">
                <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>