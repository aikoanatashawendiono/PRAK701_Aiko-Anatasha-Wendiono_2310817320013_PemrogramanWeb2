<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Hapus Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2>Konfirmasi Hapus Buku</h2>

    <div class="alert alert-warning">
        Apakah kamu yakin ingin menghapus buku berikut?
    </div>

    <ul class="list-group mb-3">
        <li class="list-group-item"><strong>Judul:</strong> <?= esc($buku['judul']) ?></li>
        <li class="list-group-item"><strong>Penulis:</strong> <?= esc($buku['penulis']) ?></li>
        <li class="list-group-item"><strong>Penerbit:</strong> <?= esc($buku['penerbit']) ?></li>
        <li class="list-group-item"><strong>Tahun:</strong> <?= esc($buku['tahun']) ?></li>
    </ul>

    <form action="<?= base_url('buku/delete/' . $buku['id']) ?>" method="post">
        <?= csrf_field() ?>
        <button type="submit" class="btn btn-danger">Ya, Hapus</button>
        <a href="<?= base_url('buku') ?>" class="btn btn-secondary">Batal</a>
    </form>
</div>
</body>
</html>
