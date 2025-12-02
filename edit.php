<?php
include "koneksi.php";
$nim = $_GET['nim'];
$q = mysqli_query($conn,"SELECT * FROM mahasiswa WHERE nim='$nim'");
$d = mysqli_fetch_assoc($q);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <div class="card shadow col-md-6 mx-auto">
        <div class="card-body">
            <h3 class="text-center mb-4">Edit Mahasiswa</h3>

            <form action="update.php?nim=<?= $d['nim'] ?>" method="post">

                <div class="mb-3">
                    <label class="form-label">NIM</label>
                    <input type="text" class="form-control" value="<?= $d['nim'] ?>" disabled>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama Mahasiswa</label>
                    <input type="text" name="nama_mhs" class="form-control" value="<?= $d['nama_mhs'] ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" class="form-control" value="<?= $d['tgl_lahir'] ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <textarea name="alamat" class="form-control"><?= $d['alamat'] ?></textarea>
                </div>

                <button class="btn btn-warning w-100">Update</button>
            </form>

            <div class="text-center mt-3">
                <a href="list.php" class="btn btn-secondary w-100">Kembali</a>
            </div>

        </div>
    </div>
</div>

</body>
</html>