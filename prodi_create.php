<!DOCTYPE html>
<html>
<head>
    <title>Tambah Prodi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include "navbar.php"; ?>

<div class="container mt-5 col-md-6">
    <h3>Tambah Prodi</h3>

    <form action="prodi_store.php" method="post">
        <div class="mb-3">
            <label>Nama Prodi</label>
            <input type="text" name="nama_prodi" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Jenjang</label>
            <select name="jenjang" class="form-control" required>
                <option value="">-- Pilih --</option>
                <option>D2</option>
                <option>D3</option>
                <option>D4</option>
                <option>S1</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Keterangan</label>
            <textarea name="keterangan" class="form-control"></textarea>
        </div>

        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>

        <a href="prodi_list.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>

</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</html>