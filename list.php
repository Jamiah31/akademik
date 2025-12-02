<?php
include "koneksi.php";
$sql   = "SELECT * FROM mahasiswa ORDER BY nim ASC";
$query = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <h2 class="mb-4 text-center">Data Mahasiswa</h2>

    <div class="mb-3">
        <a href="create.php" class="btn btn-primary">Tambah Mahasiswa</a>
        <a href="index.php" class="btn btn-secondary">Kembali ke Home</a>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <table class="table table-hover table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($r = mysqli_fetch_assoc($query)) { ?>
                    <tr>
                        <td><?= $r['nim'] ?></td>
                        <td><?= $r['nama_mhs'] ?></td>
                        <td><?= $r['tgl_lahir'] ?></td>
                        <td><?= $r['alamat'] ?></td>
                        <td>
                            <a href="edit.php?nim=<?= $r['nim'] ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="delete.php?nim=<?= $r['nim'] ?>" 
                               onclick="return confirm('Yakin hapus?')"
                               class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
</body>
</html>
