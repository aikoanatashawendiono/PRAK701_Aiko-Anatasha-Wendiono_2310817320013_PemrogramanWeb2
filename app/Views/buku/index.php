<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<style>
    body {
        background: linear-gradient(135deg, rgb(232, 235, 250), rgb(234, 191, 206));
        margin: 0;
        font-family: 'Segoe UI', sans-serif;
    }

    .center-wrapper {
        display: flex;
        justify-content: center;
        padding: 3rem 1rem;
        min-height: 100vh;
    }

    .book-card {
        background-color: #fff;
        border-radius: 15px;
        padding: 2rem;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        width: 100%;
        max-width: 1000px;
    }

    .btn-success {
        background-color: rgb(112, 194, 123);
        border: none;
    }

    .btn-success:hover {
        background-color: rgb(180, 239, 185);
    }

    .btn-warning {
        background-color: rgb(252, 169, 227);
        border: none;
    }

    .btn-danger {
        background-color: rgb(234, 102, 146);
        border: none;
    }

    .btn-danger:hover {
        background-color: rgb(247, 211, 241);
    }

    .btn-secondary {
        margin-top: 1rem;
        background-color: #6c757d;
        border: none;
    }
</style>

<div class="center-wrapper">
    <div class="book-card">
        <h2 class="mb-4">Daftar Buku</h2>

        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
        <?php endif; ?>

        <a href="/buku/create" class="btn btn-success mb-3">Tambah Buku</a>

        <div class="table-responsive">
            <table class="table table-bordered align-middle text-center">
                <thead class="table-light">
                    <tr>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Penerbit</th>
                        <th>Tahun Terbit</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($buku as $b): ?>
                    <tr>
                        <td><?= esc($b['judul']) ?></td>
                        <td><?= esc($b['penulis']) ?></td>
                        <td><?= esc($b['penerbit']) ?></td>
                        <td><?= esc($b['tahun_terbit']) ?></td>
                        <td>
                            <a href="/buku/edit/<?= $b['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                            <form action="/buku/delete/<?= $b['id'] ?>" method="post" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?')">
                                <?= csrf_field() ?>
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>

        <a href="/logout" class="btn btn-secondary">Logout</a>
    </div>
</div>

<?= $this->endSection() ?>
