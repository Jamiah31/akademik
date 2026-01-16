<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

$nama = $_SESSION['nama'];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Akademik</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background-color: #f4f6f9;
        }
        .dashboard-card {
            border-radius: 15px;
            transition: 0.3s;
        }
        .dashboard-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 10px 25px rgba(0,0,0,.1);
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">
            <i class="bi bi-mortarboard-fill"></i> Akademik
        </a>

        <ul class="navbar-nav ms-auto align-items-center">
            <li class="nav-item me-3 text-white">
                <i class="bi bi-person-circle"></i> <?= $nama ?>
            </li>
            <li class="nav-item">
                <a href="logout.php" class="btn btn-danger btn-sm">
                    Logout
                </a>
            </li>
        </ul>
    </div>
</nav>

<div class="container mt-5">

    <div class="bg-white p-4 rounded shadow-sm mb-4">
        <h4 class="fw-bold mb-1">Selamat Datang, <?= $nama ?> 👋</h4>
        <p class="text-muted mb-0">
            Anda berhasil login ke Sistem Akademik
        </p>
    </div>

    <!-- DASHBOARD MENU -->
    <div class="row g-4">

        <div class="col-md-4">
            <div class="card dashboard-card text-center p-4 shadow-sm">
                <i class="bi bi-person-plus-fill fs-1 text-primary"></i>
                <h5 class="mt-3">Tambah Mahasiswa</h5>
                <p class="text-muted small">
                    Menambahkan data mahasiswa baru
                </p>
                <a href="create.php" class="btn btn-primary w-100">
                    Buka
                </a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card dashboard-card text-center p-4 shadow-sm">
                <i class="bi bi-people-fill fs-1 text-success"></i>
                <h5 class="mt-3">Data Mahasiswa</h5>
                <p class="text-muted small">
                    Melihat dan mengelola data mahasiswa
                </p>
                <a href="list.php" class="btn btn-success w-100">
                    Buka
                </a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card dashboard-card text-center p-4 shadow-sm">
                <i class="bi bi-journal-text fs-1 text-info"></i>
                <h5 class="mt-3">Program Studi</h5>
                <p class="text-muted small">
                    Mengelola data program studi
                </p>
                <a href="prodi_list.php" class="btn btn-info text-white w-100">
                    Buka
                </a>
            </div>
        </div>

    </div>
</div>

<!-- FOOTER -->
<footer class="text-center mt-5 text-muted">
    <hr>
    <p class="mb-2">© 2026 Sistem Akademik</p>
</footer>

</body>
</html>