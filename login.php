<?php
session_start();
if (isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login | Sistem Akademik</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        .login-card {
            border-radius: 15px;
        }
    </style>
</head>
<body class="d-flex align-items-center justify-content-center">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 col-lg-4">
            <div class="card login-card shadow-lg border-0">
                <div class="card-body p-4">

                    <div class="text-center mb-4">
                        <i class="bi bi-mortarboard-fill fs-1 text-primary"></i>
                        <h4 class="mt-2 fw-bold">Login Akademik</h4>
                        <p class="text-muted">Silakan masuk ke sistem</p>
                    </div>

                    <form action="login_proses.php" method="POST">

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="bi bi-envelope"></i>
                                </span>
                                <input type="email" name="email" class="form-control" placeholder="email@example.com" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="bi bi-lock"></i>
                                </span>
                                <input type="password" name="password" class="form-control" placeholder="******" required>
                            </div>
                        </div>

                        <div class="d-grid">
                            <button class="btn btn-success btn-lg">
                                <i class="bi bi-box-arrow-in-right"></i> Login
                            </button>
                        </div>

                    </form>

                    <div class="text-center mt-3">
                        <small>Belum punya akun?</small><br>
                        <a href="register.php" class="text-decoration-none fw-semibold">
                            Daftar Akun
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>