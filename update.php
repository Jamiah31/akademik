<?php
include "koneksi.php";

$nim    = $_GET['nim'];
$nama   = $_POST['nama_mhs'];
$tgl    = $_POST['tgl_lahir'];
$alamat = $_POST['alamat'];

$sql = "UPDATE mahasiswa 
        SET nama_mhs='$nama', tgl_lahir='$tgl', alamat='$alamat'
        WHERE nim='$nim'";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Data berhasil diperbarui'); window.location='list.php';</script>";
} else {
    echo "<script>alert('Gagal memperbarui data');</script>";
}
?>
