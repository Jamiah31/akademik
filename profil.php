<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5 col-md-6">
    <div class="card shadow">
        <div class="card-body">
            <h4 class="text-center mb-4">Edit Profil</h4>

            <form method="POST" action="profil_update.php">
                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" class="form-control"
                           value="<?= $_SESSION['email']; ?>" readonly>
                </div>

                <div class="mb-3">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama_lengkap"
                           class="form-control" required
                           value="<?= $_SESSION['nama']; ?>">
                </div>

                <div class="mb-3">
                    <label>Password Baru</label>
                    <input type="password" name="password"
                           class="form-control"
                           placeholder="Kosongkan jika tidak diubah">
                </div>

                <button class="btn btn-primary w-100">Update Profil</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>