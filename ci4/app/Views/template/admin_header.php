<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url('/style.css'); ?>">
</head>

<body>
    <div id="login-wrapper">
        <h1>Halaman Admin</h1>
        <?php if (session()->getFlashdata('flash_msg')) : ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('flash_msg') ?></div>
        <?php endif; ?>
        <form action="/user/logout" method="post">
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Logout</button>
            </div>
        </form>
    </div>
    <div id="container">
        <header class="header">
            <h1>Admin</h1>

        </header>
        <nav class="navbar">
            <a href="<?= base_url("/admin/artikel"); ?>" class="active">Dashboard</a>
            <a href="<?= base_url("/admin/artikel"); ?>">Artikel</a>
            <a href="<?= base_url("/admin/artikel/add"); ?>">Tambah Artikel</a>
        </nav>