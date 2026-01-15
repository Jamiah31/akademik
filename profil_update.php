<?php
session_start();
include 'koneksi.php';

// Proteksi jika belum login
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

$id = $_SESSION['id'];
$nama = trim($_POST['nama_lengkap']);
$password = $_POST['password'];

// Validasi nama
if ($nama == '') {
    echo "<script>alert('Nama tidak boleh kosong');history.back();</script>";
    exit;
}

// Jika password diisi
if (!empty($password)) {

    if (strlen($password) < 6) {
        echo "<script>alert('Password minimal 6 karakter');history.back();</script>";
        exit;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    $query = "UPDATE pengguna 
              SET nama_lengkap='$nama', password='$password' 
              WHERE id='$id'";
} else {

    // Jika password tidak diubah
    $query = "UPDATE pengguna 
              SET nama_lengkap='$nama' 
              WHERE id='$id'";
}

mysqli_query($koneksi, $query);

// Update session
$_SESSION['nama'] = $nama;

echo "<script>alert('Profil berhasil diperbarui');window.location='index.php';</script>";