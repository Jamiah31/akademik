<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php">Akademik</a>
    </div>
</nav>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Tambah Data Mahasiswa</h5>
                </div>

                <div class="card-body">
                    <form action="proses.php" method="POST">

                        <div class="mb-3">
                            <label class="form-label">NIM</label>
                            <input type="text" name="nim" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nama Mahasiswa</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Program Studi</label>
                            <select name="prodi_id" class="form-select" required>
                                <option value="">-- Pilih Prodi --</option>
                                <?php
                                $query = mysqli_query($koneksi, "SELECT * FROM prodi");
                                while ($row = mysqli_fetch_assoc($query)) {
                                    echo "<option value='{$row['id']}'>{$row['nama_prodi']} ({$row['jenjang']})</option>";
                                }
                                ?>
                            </select>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="list.php" class="btn btn-secondary">Kembali</a>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>
