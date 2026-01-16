<?php
include 'koneksi.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi_id = $_POST['prodi_id'];

$query = "INSERT INTO mahasiswa (nim, nama_mhs, prodi_id)
          VALUES ('$nim', '$nama', '$prodi_id')";

if (mysqli_query($koneksi, $query)) {
    header("Location: list.php");
    exit;
} else {
    echo "Gagal: " . mysqli_error($koneksi);
}
