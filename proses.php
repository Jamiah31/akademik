<?php
include "koneksi.php";

$nim   = $_POST['nim'];
$nama  = $_POST['nama_mhs'];
$tgl   = $_POST['tgl_lahir'];
$alamat= $_POST['alamat'];
$prodi = $_POST['prodi_id'];

$sql = "INSERT INTO mahasiswa 
(nim, nama_mhs, tgl_lahir, alamat, prodi_id)
VALUES 
('$nim','$nama','$tgl','$alamat','$prodi')";

mysqli_query($koneksi, $sql);

header("Location: list.php");