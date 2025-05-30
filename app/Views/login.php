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
        align-items: center;
        justify-content: center;
        min-height: 100vh;
    }

    .login-card {
        background-color: #fff;
        border-radius: 15px;
        padding: 2rem;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        max-width: 400px;
        width: 100%;
    }

    .login-card h2 {
        color: #333;
    }

    .login-card .form-label {
        font-weight: 500;
    }

    .alert-warning {
        background-color: #f8d7da;
        color: #842029;
        border: 1px solid #f5c2c7;
        border-radius: 8px;
        padding: 10px;
        margin-bottom: 15px;
        text-align: center;
    }

    .alert-danger {
        background-color: #f5c6cb;
        color: #721c24;
        border-radius: 8px;
        padding: 10px;
        margin-bottom: 15px;
        text-align: center;
    }

    .btn-primary {
        background-color: rgb(234, 102, 146);
        border: none;
    }

    .btn-primary:hover {
        background-color: rgb(247, 211, 241);
    }
</style>

<div class="center-wrapper">
    <div class="login-card">
        <div class="text-center mb-4">
            <h2>Selamat Datang</h2>
        </div>

        <form method="post" action="/login/process">
            <?= csrf_field() ?>

            <?php if(session()->getFlashdata('error')): ?>
                <div class="alert alert-danger"> <?= session()->getFlashdata('error') ?></div>
            <?php endif; ?>

            <?php if(session()->getFlashdata('warning')): ?>
                <div class="alert alert-warning">❗ <?= session()->getFlashdata('warning') ?></div>
            <?php endif; ?>

            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Enter your username" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
    </div>
</div>

<?= $this->endSection() ?>
