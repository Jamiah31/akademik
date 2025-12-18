<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Akademik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <?php include "navbar.php"; ?>

<div class="container py-5">
    <div class="card shadow">
        <div class="card-body">
            <h2 class="mb-4 text-center">Sistem Akademik</h2>
            <div class="d-grid gap-3">
                <a href="create.php" class="btn btn-primary btn-lg">Tambah Data Mahasiswa</a>
                <a href="list.php" class="btn btn-success btn-lg">Lihat Data Mahasiswa</a>
                <a href="prodi_list.php" class="btn btn-info btn-lg">Data Prodi</a>
            </div>
        </div>
    </div>
</div>

</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</html>
