<?php
include 'koneksi.php';

$nama     = $_POST['nama_lengkap'];
$email    = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// cek email sudah terdaftar
$cek = mysqli_query($koneksi, "SELECT * FROM pengguna WHERE email='$email'");
if (mysqli_num_rows($cek) > 0) {
    echo "<script>
        alert('Email sudah terdaftar!');
        window.location='register.php';
    </script>";
    exit;
}

$query = mysqli_query($koneksi, "
    INSERT INTO pengguna (nama_lengkap, email, password)
    VALUES ('$nama', '$email', '$password')
");

if ($query) {
    echo "<script>
        alert('Register berhasil, silakan login');
        window.location='login.php';
    </script>";
} else {
    echo "Gagal register";
}