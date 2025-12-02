<?php
include "koneksi.php";

$nim    = $_POST['nim'];
$nama   = $_POST['nama_mhs'];
$tgl    = $_POST['tgl_lahir'];
$alamat = $_POST['alamat'];

$sql = "INSERT INTO mahasiswa (nim, nama_mhs, tgl_lahir, alamat)
        VALUES ('$nim', '$nama', '$tgl', '$alamat')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Data berhasil disimpan!'); window.location='list.php';</script>";
} else {
    echo "<script>alert('Gagal menyimpan data!'); window.location='create.php';</script>";
}
?>