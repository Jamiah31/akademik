<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <div class="card shadow col-md-6 mx-auto">
        <div class="card-body">
            <h3 class="text-center mb-4">Tambah Mahasiswa</h3>

            <form action="proses.php" method="post">

                <div class="mb-3">
                    <label class="form-label">NIM</label>
                    <input type="text" name="nim" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama Mahasiswa</label>
                    <input type="text" name="nama_mhs" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <textarea name="alamat" class="form-control"></textarea>
                </div>

                <button type="submit" class="btn btn-primary w-100">Simpan</button>
            </form>

            <div class="text-center mt-3">
                <a href="index.php" class="btn btn-secondary w-100">Kembali</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>