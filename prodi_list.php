<?php
include "koneksi.php";
$data = mysqli_query($conn, "SELECT * FROM prodi");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Prodi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include "navbar.php"; ?>

<div class="container mt-5">
    <h3>Data Prodi</h3>
    <a href="prodi_create.php" class="btn btn-primary mb-3">+ Tambah</a>

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Nama Prodi</th>
                <th>Jenjang</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php while($p = mysqli_fetch_assoc($data)) { ?>
            <tr>
                <td><?= $p['nama_prodi']; ?></td>
                <td><?= $p['jenjang']; ?></td>
                <td>
                    <a href="prodi_edit.php?id=<?= $p['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="prodi_delete.php?id=<?= $p['id']; ?>" 
                       onclick="return confirm('Hapus data ini?')" 
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