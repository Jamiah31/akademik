<?php
include "koneksi.php";

if (isset($_POST['update'])) {

    $id = $_POST['id'];
    $nama_prodi = $_POST['nama_prodi'];
    $jenjang = $_POST['jenjang'];
    $keterangan = $_POST['keterangan'];

    $query = "UPDATE prodi SET
                nama_prodi='$nama_prodi',
                jenjang='$jenjang',
                keterangan='$keterangan'
              WHERE id='$id'";

    if (mysqli_query($koneksi, $query)) {
        header("Location: prodi_list.php");
        exit;
    } else {
        echo "Update gagal: " . mysqli_error($koneksi);
    }
}
?>