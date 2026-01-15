<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Akademik</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">Akademik</a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="list.php">Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="prodi_list.php">Prodi</a>
                </li>
                <li class="nav-item ms-2">
                    <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- CONTENT -->
<div class="container my-5">

    <!-- HEADER -->
    <div class="mb-4">
        <h3 class="fw-bold">
            Selamat datang, <?= htmlspecialchars($_SESSION['nama']); ?>
        </h3>
        <p class="text-muted">
            Anda berhasil login ke Sistem Akademik
        </p>
    </div>

    <!-- CARD DASHBOARD -->
    <div class="card shadow-sm">
        <div class="card-body text-center">
            <h4 class="fw-bold mb-4">Sistem Akademik</h4>

            <div class="d-grid gap-3 col-lg-6 mx-auto">
                <a href="create.php" class="btn btn-primary btn-lg">
                    Tambah Data Mahasiswa
                </a>

                <a href="list.php" class="btn btn-success btn-lg">
                    Lihat Data Mahasiswa
                </a>

                <a href="prodi_list.php" class="btn btn-info btn-lg text-white">
                    Data Program Studi
                </a>
            </div>
        </div>
    </div>

</div>

<footer class="text-center text-muted mt-5 mb-3">
    <small>© <?= date('Y'); ?> Sistem Akademik</small>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>