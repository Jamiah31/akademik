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
   
    <form method="post" action="prodi_update.php">
        <input type="hidden" name="id" value="<?= $p['id']; ?>">

        <div class="mb-3">
            <label>Nama Prodi</label>
            <input type="text" name="nama_prodi" class="form-control" value="<?= $p['nama_prodi']; ?>" required>
        </div>

        <div class="mb-3">
            <label>Jenjang</label>
            <select name="jenjang" class="form-control" required>
                <option value="D2" <?= $p['jenjang']=='D2'?'selected':'' ?>>D2</option>
                <option value="D3" <?= $p['jenjang']=='D3'?'selected':'' ?>>D3</option>
                <option value="D4" <?= $p['jenjang']=='D4'?'selected':'' ?>>D4</option>
                <option value="S2" <?= $p['jenjang']=='S2'?'selected':'' ?>>S2</option>
            </select>
         </div>

        <div class="mb-3">
            <label>Keterangan</label>
            <textarea name="keterangan" class="form-control"><?= $p['keterangan']; ?></textarea>
        </div>
   
        <button type="submit" name="update" class="btn btn-warning">
                Update
        </button>
    </form>
</div>

</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</html>