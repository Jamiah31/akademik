<?php
include "koneksi.php";
$prodi = mysqli_query($conn, "SELECT * FROM prodi");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <?php include "navbar.php"; ?>

<div class="container mt-5 col-md-6">
    <div class="card shadow">
        <div class="card-body">
            <h4 class="text-center mb-4">Tambah Mahasiswa</h4>

            <form action="proses.php" method="post">

                <div class="mb-3">
                    <label>NIM</label>
                    <input type="text" name="nim" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Nama Mahasiswa</label>
                    <input type="text" name="nama_mhs" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control"></textarea>
                </div>

                <div class="mb-3">
                    <label>Program Studi</label>
                    <select name="prodi_id" class="form-control" required>
                        <option value="">-- Pilih Prodi --</option>
                        <?php while($p = mysqli_fetch_assoc($prodi)) { ?>
                            <option value="<?= $p['id']; ?>">
                                <?= $p['nama_prodi']; ?> (<?= $p['jenjang']; ?>)
                            </option>
                        <?php } ?>
                    </select>
                </div>

                <button class="btn btn-primary w-100">Simpan</button>
            </form>

            <a href="index.php" class="btn btn-secondary w-100 mt-2">Kembali</a>
        </div>
    </div>
</div>

</body>
                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</html>