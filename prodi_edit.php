<?php
include "koneksi.php";
$id = $_GET['id'];
$p = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM prodi WHERE id='$id'"));
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Prodi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include "navbar.php"; ?>

<div class="container mt-5 col-md-6">
    <h3>Edit Prodi</h3>
   
    <form action="prodi_edit.php?id=<?= $id ?>" method="post">
        <input type="text" name="nama_prodi" value="<?= $p['nama_prodi'] ?>" class="form-control mb-3">
        <select name="jenjang" class="form-control mb-3">
            <option <?= $p['jenjang']=='D2'?'selected':'' ?>>D2</option>
            <option <?= $p['jenjang']=='D3'?'selected':'' ?>>D3</option>
            <option <?= $p['jenjang']=='D4'?'selected':'' ?>>D4</option>
            <option <?= $p['jenjang']=='S1'?'selected':'' ?>>S1</option>
        </select>
        <textarea name="keterangan" class="form-control mb-3"><?= $p['keterangan'] ?></textarea>

        <button class="btn btn-warning">Update</button>
    </form>
</div>

</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</html>