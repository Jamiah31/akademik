<?php
include "koneksi.php";
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM prodi WHERE id='$id'");
header("Location: prodi_list.php");