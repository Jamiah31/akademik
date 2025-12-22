<?php
include "koneksi.php";

$nim = $_GET['nim'];

// ambil data mahasiswa
$mhs = mysqli_fetch_assoc(
    mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE nim='$nim'")
);

// ambil data prodi
$prodi = mysqli_query($koneksi, "SELECT * FROM prodi");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <?php include "navbar.php"; ?>

<div class="container mt-5 col-md-6">
    <div class="card shadow">
        <div class="card-body">
            <h4 class="text-center mb-4">Edit Mahasiswa</h4>

            <form action="update.php?nim=<?= $nim ?>" method="post">

                <div class="mb-3">
                    <label>NIM</label>
                    <input type="text" class="form-control" value="<?= $mhs['nim']; ?>" disabled>
                </div>

                <div class="mb-3">
                    <label>Nama Mahasiswa</label>
                    <input type="text" name="nama_mhs" class="form-control" 
                           value="<?= $mhs['nama_mhs']; ?>" required>
                </div>

                <div class="mb-3">
                    <label>Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" class="form-control"
                           value="<?= $mhs['tgl_lahir']; ?>">
                </div>

                <div class="mb-3">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control"><?= $mhs['alamat']; ?></textarea>
                </div>

                <div class="mb-3">
                    <label>Program Studi</label>
                    <select name="prodi_id" class="form-control" required>
                        <?php while($p = mysqli_fetch_assoc($prodi)) { ?>
                            <option value="<?= $p['id']; ?>"
                                <?= ($mhs['prodi_id'] == $p['id']) ? 'selected' : ''; ?>>
                                <?= $p['nama_prodi']; ?> (<?= $p['jenjang']; ?>)
                            </option>
                        <?php } ?>
                    </select>
                </div>

                <button class="btn btn-warning w-100">Update</button>
            </form>

            <a href="list.php" class="btn btn-secondary w-100 mt-2">Kembali</a>
        </div>
    </div>
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</html>