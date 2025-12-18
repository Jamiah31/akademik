<?php
include "koneksi.php";

$nim   = $_GET['nim'];
$nama  = $_POST['nama_mhs'];
$tgl   = $_POST['tgl_lahir'];
$alamat= $_POST['alamat'];
$prodi = $_POST['prodi_id'];

$sql = "UPDATE mahasiswa SET
        nama_mhs='$nama',
        tgl_lahir='$tgl',
        alamat='$alamat',
        prodi_id='$prodi'
        WHERE nim='$nim'";

mysqli_query($conn, $sql);

header("Location: list.php");