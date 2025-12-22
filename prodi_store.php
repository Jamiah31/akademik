<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $nama_prodi = $_POST['nama_prodi'];
    $jenjang = $_POST['jenjang'];
    $keterangan = $_POST['keterangan'];

    $query = "INSERT INTO prodi (nama_prodi, jenjang, keterangan)
              VALUES ('$nama_prodi', '$jenjang', '$keterangan')";

    if (mysqli_query($koneksi, $query)) {
        header("Location: prodi_list.php");
        exit;
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($koneksi);
    }
}
?>