<?php
include "koneksi.php";

$nim = $_GET['nim'];

$sql = "DELETE FROM mahasiswa WHERE nim='$nim'";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Data berhasil dihapus'); window.location='list.php';</script>";
} else {
    echo "<script>alert('Gagal menghapus data');</script>";
}
?>