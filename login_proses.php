<?php
session_start();
include 'koneksi.php';

$email = trim($_POST['email']);
$password = $_POST['password'];

$query = mysqli_query($koneksi, "SELECT * FROM pengguna WHERE email='$email'");
$user = mysqli_fetch_assoc($query);

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['login'] = true;
    $_SESSION['id'] = $user['id'];
    $_SESSION['nama'] = $user['nama_lengkap'];
    $_SESSION['email'] = $user['email'];

    header("Location: profil.php"); // ⬅ langsung ke edit profil
    exit;
} else {
    echo "<script>alert('Email atau password salah');window.location='login.php';</script>";
}