<?php
include "koneksi.php";

$sql = "SELECT m.*, p.nama_prodi, p.jenjang
        FROM mahasiswa m
        LEFT JOIN prodi p ON m.prodi_id = p.id";

$data = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <?php include "navbar.php"; ?>

<div class="container mt-5">
    <h3>Data Mahasiswa</h3>
    <a href="create.php" class="btn btn-primary mb-3">+ Tambah</a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>Jenjang</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php while($m = mysqli_fetch_assoc($data)) { ?>
            <tr>
                <td><?= $m['nim']; ?></td>
                <td><?= $m['nama_mhs']; ?></td>
                <td><?= $m['nama_prodi']; ?></td>
                <td><?= $m['jenjang']; ?></td>
                <td>
                    <a href="edit.php?nim=<?= $m['nim']; ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="delete.php?nim=<?= $m['nim']; ?>" 
                       onclick="return confirm('Hapus data?')" 
                       class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>

</body>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</html>