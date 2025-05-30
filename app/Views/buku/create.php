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
        align-items: center;
        min-height: 100vh;
        padding: 2rem 1rem;
    }

    .form-card {
        background-color: #fff;
        border-radius: 15px;
        padding: 2rem;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        width: 100%;
        max-width: 600px;
    }

    h2 {
        text-align: center;
        color: #333;
        margin-bottom: 1.5rem;
    }

    .btn-primary {
        background-color: rgb(234, 102, 146);
        border: none;
    }

    .btn-primary:hover {
        background-color: rgb(247, 211, 241);
    }

    .btn-secondary {
        background-color: #6c757d;
        border: none;
    }

    .alert-danger {
        margin-bottom: 1rem;
    }
</style>

<div class="center-wrapper">
    <div class="form-card">
        <h2>Tambah Buku Baru</h2>

        <?php if (session()->getFlashdata('errors')): ?>
            <div class="alert alert-danger">
                <ul class="mb-0">
                    <?php foreach (session()->getFlashdata('errors') as $error): ?>
                        <li><?= esc($error) ?></li>
                    <?php endforeach ?>
                </ul>
            </div>
        <?php endif; ?>

        <form method="post" action="/buku/store">
            <?= csrf_field() ?>

            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" name="judul" id="judul" class="form-control" value="<?= old('judul') ?>" required>
            </div>

            <div class="mb-3">
                <label for="penulis" class="form-label">Penulis</label>
                <input type="text" name="penulis" id="penulis" class="form-control" value="<?= old('penulis') ?>" required>
            </div>

            <div class="mb-3">
                <label for="penerbit" class="form-label">Penerbit</label>
                <input type="text" name="penerbit" id="penerbit" class="form-control" value="<?= old('penerbit') ?>" required>
            </div>

            <div class="mb-3">
                <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                <input type="number" name="tahun_terbit" id="tahun_terbit" class="form-control" value="<?= old('tahun_terbit') ?>" required>
            </div>

            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="/buku" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection() ?>
